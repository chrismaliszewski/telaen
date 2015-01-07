<?php
/************************************************************************
Telaen is a GPL'ed software developed by

 - The Telaen Group
 - http://jimjag.github.io/telaen/

*************************************************************************/

/**
 * Simple PHP Helper for sqlite3-based Email data
 */
class LocalMbox extends SQLite3
{
    private $active_folder = "";
    private $userfolder = "";
    private $db = null;
    private $force_new = false;
    private $fschema = array(
        'name' => 'TEXT NOT NULL',
        'system' => 'INT NOT NULL', // Is it a system folder?
        'size' => 'INT DEFAULT 0',
        'count' => 'INT DEFAULT 0',
        'unread' => 'INT DEFAULT 0',
        'refreshed' => 'INT DEFAULT 0', // time() of last refresh from server
        'version' => 'INT DEFAULT 0', // Have we read old messages?
        'prefix' => 'TEXT DEFAULT ""',
        'dirname' => 'TEXT NOT NULL',
    );
    private $aschema = array(
        'folder' => 'TEXT NOT NULL',
        'uidl' => 'TEXT NOT NULL',
        'localname' => 'TEXT DEFAULT ""',
        'name' => 'TEXT DEFAULT ""',
        'type' => 'TEXT DEFAULT ""',
        'size' => 'INT DEFAULT 0',
    );
    private $mschema = array(
        'date' => 'INT DEFAULT 0',
        'hparsed' => 'INT DEFAULT 0', // Have we parsed the header?
        'id' => 'INT DEFAULT 0',
        'mnum' => 'INT DEFAULT 0', // message number
        'size' => 'INT DEFAULT 0',
        'priority' => 'INT DEFAULT 0',
        'attach' => 'INT DEFAULT 0',
        'islocal' => 'INT DEFAULT 0', // Does it live on web server?
        'uid' => 'INT DEFAULT 0', // IMAP UID
        'version' => 'INT DEFAULT 2',
        'unread' => 'INT DEFAULT 1',
        'folder' => 'TEXT NOT NULL',
        'uidl' => 'TEXT NOT NULL PRIMARY KEY', // Our unique key (md5)
        'ouidl' => 'TEXT DEFAULT ""', // Old uidl from Telaen 1.x
        'subject' => 'TEXT DEFAULT ""',
        'from' => 'TEXT DEFAULT ""',
        'fromname' => 'TEXT DEFAULT ""',
        'to' => 'TEXT DEFAULT ""',
        'cc' => 'TEXT DEFAULT ""',
        'flags' => 'TEXT DEFAULT ""',
        'message-id' => 'TEXT DEFAULT ""',
        'localname' => 'TEXT DEFAULT ""',
        'receipt-to' => 'TEXT DEFAULT ""',
        'x-spam-level' => 'TEXT DEFAULT ""',
        'reply-to' => 'TEXT DEFAULT ""',
        'content-type' => 'TEXT DEFAULT ""',
        'content-transfer-encoding' => 'TEXT DEFAULT ""',
        'header' => 'TEXT DEFAULT ""',
    );

    public $folders = array();  // All Email boxes/folders
    public $attachments = array();
    public $messages = array(); // All messages from the current email folder
    public $m_idx = array(); /* key = uidl; value = index to this->messages */
    public $allfolders = array(); // All folders/directors
    public $udatafolder = '_infos';
    public $ok = true;
    public $message = '';
    public $m_delta = array(); /* key = message; value = array() of field changes */
    private $_system_folders = array('inbox', 'spam', 'trash', 'draft', 'sent', '_attachments', '_infos');
    private $_invisible = array('_attachments', '_infos');
    private $_indb = array(); /* key = uidl; value = is it in the DB? */

    /**
     * Construct: open DB and create tables if needed
     * @param string $userfolder
     * @param boolean $force_new
     */
    public function __construct($userfolder, $force_new = false)
    {
        $this->allok();
        $this->userfolder = $userfolder;
        $this->force_new = $force_new;
        $this->db = $userfolder.$this->udatafolder.'/mboxes.db';
        $exists = is_writable($this->db);
        parent::__construct($this->db, SQLITE3_OPEN_READWRITE | SQLITE3_OPEN_CREATE);
        //$this->open($this->db, SQLITE3_OPEN_READWRITE| SQLITE3_OPEN_CREATE);
        $this->query('PRAGMA synchronous = 0;');
        $this->query('PRAGMA journal_mode = MEMORY;');
        if (!$exists || $force_new) {
            $this->init_tables();
        }
        $this->get_folders();
    }

    /**
     * Create all required SQLite3 tables
     *
     */
    public function init_tables()
    {
        $this->allok();
        $table = $this->create_query('folders', $this->fschema);
        if ($this->exec($table) == false) {
            $this->ok = false;
            $this->message .= "bad exec: $table";
        }

        $table = $this->create_query('attachs', $this->aschema);
        if ($this->exec($table) == false) {
            $this->ok = false;
            $this->message .= "bad exec: $table";
        }
        $ok = $this->ok;
        $message = $this->message;
        foreach($this->_system_folders as $foo) {
            $this->new_folder(array('name' => $foo, 'dirname' => $foo), true);
        }
        /*
         * We may have folders from previous installs. Check
         */
        foreach (scandir($this->userfolder) as $entry) {
            if (is_dir($this->userfolder.$entry)
                && $entry != '..'
                && $entry != '.'
                && !isset($this->folders[$entry])) {
                $this->new_folder(array('name' => $entry, 'dirname' => $entry), true);
            }
        }
        $this->ok = $this->ok && $ok;
        $this->message .= $message;
        return $this->ok;
    }

    /**
     * Return array of all required folders
     * @return array
     */
    public function required_dirs() {
        return $this->_system_folders;
    }

    /**
     * Create array of allowable entry/type from a baseline schema
     * @param mixed $fields
     * @param array $schema
     * @return array
     */
    private function create_uplist($fields, $schema, $ignore=array())
    {
        $tmp = array();
        $thelist = array();
        if ($fields == "*") {
            $tmp = keys($schema);
        } elseif (is_array($fields) && count($fields) > 0) {
            foreach ($fields as $key) {
                $key = trim($key);
                if (isset($schema[$key])) {
                    $tmp[] = $key;
                }
            }
        } elseif (!is_array($fields)) {
            $this->ok = false;
            $this->message = "bad param fields";
            return null;
        } else {
            /* nothing to do... is this OK or an error? */
        }
        foreach ($tmp as $key) {
            $key = trim($key);
            if (!in_array($key, $ignore)) {
                $thelist[] = $key;
            }
        }
        if (!count($thelist)) {
            $this->ok = false;
            $this->message = "no valid fields";
            return null;
        }
        return $thelist;
    }

    /**
     * Creates the 'CREATE table' query
     * @param string $table
     * @param array $schema
     * @return string
     */
    private function create_query($table, $schema)
    {
        $query = sprintf('DROP TABLE IF EXISTS %s; CREATE TABLE %s (', $table, $table);
        foreach ($schema as $key => $val) {
            $query .= " '$key' $val,";
        }
        $query = rtrim($query, ",") . ');';
        return $query;
    }
    /**
     * Creates and Execute the 'UPDATE table SET... WHERE' statement
     * @param array $msg Hash of data to update keyed by list
     * @param array $list List of elements to update
     * @param array $where the WHERE statement field and values (assume =)
     * @return SQLite3Result
     */
    private function do_update($msg, $list, $where)
    {
        $table = self::_get_folder_name($msg['folder']);
        $query = sprintf('UPDATE %s SET ', $table);
        $temp = array();
        foreach ($list as $key) {
            $temp[] = " '$key'=:$key";
        }
        $query = $query.implode(', ', $temp).' WHERE ';
        $temp = array();
        foreach ($where as $key => $val) {
            $temp[] = "'$key'=:$key";
        }
        $query = $query.implode(' AND ', $temp).' ;';
        $stmt = $this->prepare($query);
        reset($list);
        foreach ($list as $key) {
            $stmt->bindValue(":$key", $msg[$key]);
        }
        foreach ($where as $key => $val) {
            $stmt->bindValue(":$key", $val);
        }
        $result = $stmt->execute();
        $stmt->close();
        if (!$result) {
            $this->ok = false;
            $this->message .= "execute failed: $query";
        }
        return $result;
    }

    /**
     * Creates and Execute the 'INSERT into table (' statement
     * We re-use the prepared statement by assuming that all INSERTS
     * are the same.
     * @param array $msg Hash of data to update keyed by list
     * @param array $list List of elements to insert
     * @return SQLite3Result
     */
    private function do_insert($msg, $list)
    {
        $table = self::_get_folder_name($msg['folder']);
        $query = sprintf('INSERT into %s (\'', $table);
        $query .= implode("','",$list);
        $query .= '\') VALUES (:';
        reset($list);
        $query .= implode(",:",$list);
        $query .= ');';
        $stmt = $this->prepare($query);
        reset($list);
        foreach ($list as $key) {
            $stmt->bindValue(":$key", $msg[$key]);
        }
        if (!$stmt->execute()) {
            $this->ok = false;
            $this->message .= "execute failed: $query";
            return false;
        }
        $stmt->close();
        return true;
    }

    /**
     * Return hex hash of string - Just need something *fast*
     * @param string $folder
     * @return string (hexint)
     */
    static public function getKey($folder)
    {
        return hash('md5', $folder);
    }

    static private function _get_folder_name($folder) {
        return sprintf('folder_%s', self::getKey($folder));
    }

    private function allok()
    {
        $this->ok = true;
        $this->message = '';
    }
    /**
     * Get list of all available attachments
     * $this-attachments auto-populated with array
     * @param string $folder
     * @param string $uidl
     * @return array
     */
    public function &get_attachments($folder, $uidl)
    {
        $query = "SELECT * FROM attachs WHERE 'folder'=:folder AND 'uidl'=:uidl ;";
        $stmt = $this->prepare($query);
        $stmt->bindValue(':folder', $folder);
        $stmt->bindValue(':uidl', $uidl);
        $result = $stmt->execute($query);
        $this->attachments = array();
        if ($result) {
            while ($foo = $result->fetchArray()) {
                $this->attachments[] = $foo;
            }
        } else {
            $this->ok = false;
            $this->message = "query failed: $query";
        }
        $stmt->close();
        return $this->attachments;
    }

    /**
     * Get list of all available folders/emailboxes
     * $this-folders auto-populated with hash
     * @return hash
     */
    public function &get_folders()
    {
        $query = 'SELECT * FROM folders';
        $result = $this->query($query);
        $this->folders = array();
        $this->allfolders = array();
        if ($result) {
            while ($foo = $result->fetchArray()) {
                $this->allfolders[$foo['name']] = $foo;
                if (!in_array($foo['name'], $this->_invisible)) {
                    $this->folders[$foo['name']] = $foo;
                }
            }
        } else {
            $this->ok = false;
            $this->message = "query failed: $query";
        }
        return $this->folders;
    }

    /**
     * Add new folder/emailbox to DB
     * @param array $folder
     * @param int $sys
     * @return boolean
     */
    public function new_folder($folder, $calc_size = false)
    {
        $folder['system'] = in_array($folder['name'], $this->_system_folders);
        if ($calc_size && is_dir($this->userfolder.$folder['name'])) {
            $folder['size'] = $this->calc_folder_size($this->userfolder.$folder['name']);
        }
        /*
         * Since user folder names can be weird, on the file system,
         * make the dirname for the folder something safe (ie: a md5 hash
         * of the name)
         */
        if (empty($folder['dirname'])) {
            $folder['dirname'] = self::getKey($folder['name']);
        }
        $query = self::_get_folder_name($folder['name']);
        $query = $this->create_query($query, $this->mschema);
        if ($this->exec($query)) {
            $stmt = $this->prepare("INSERT into folders ('name', 'system', 'size', 'prefix') VALUES (:name, :system, :size, :prefix) ;");
            $stmt->bindValue(':name', $folder['name']);
            $stmt->bindValue(':system', intval($folder['system']));
            $stmt->bindValue(':size', intval($folder['size']));
            $stmt->bindValue(':prefix', $folder['prefix']);
            if ($stmt->execute()) {
                $this->folders[$folder['name']] = $folder;
                $stmt->close();
                return true;
            } else {
                $this->message .= "execute failed:";
            }
        }
        $this->ok = false;
        $this->message .= "exec failed: $query";
        return false;

    }

    /**
     * Remove/delete a folder from the DB
     * @param string $folder Folder name to rm from DB
     * @return boolean
     */
    public function del_folder($folder)
    {
        $query = 'DROP TABLE '.self::_get_folder_name($folder).' ;';
        if ($this->exec($query)) {
            $stmt = $this->prepare("DELETE FROM folders WHERE 'name'=:name ;");
            $stmt->bindValue(':name', $folder);
            if ($stmt->execute()) {
                unset($this->folders[$folder]);
                $stmt->close();
                return true;
            }
        }
        $this->ok = false;
        $this->message = "exec failed: $query";
        return false;

    }

    /**
     * Update misc field in folders
     * @param string $folder Folder name
     * @param string $field Name of field
     * @return boolean
     */
    public function update_folder_field($folder, $field)
    {
        if (!isset($this->fschema[$field])) {
            $this->ok = false;
            $this->message .= "bad field: $field";
            return false;
        }
        $stmt = $this->prepare("UPDATE folders SET '$field'=:$field WHERE 'name'=:name ;");
        $stmt->bindValue(':name', $folder);
        $stmt->bindValue(":$field", $this->folders[$folder][$field]);
        if ($stmt->execute()) {
            $stmt->close();
            return true;
        } else {
            $this->ok = false;
            $this->message .= "execute failed: ";
            return false;
        }
    }

     /**
      * Update inited field in folders to current time
      * @param string $folder Folder name
      * @return boolean
      */
     public function current_version($folder, $version)
    {
        return ($this->folders[$folder]['version'] == $version);
    }

    /**
     * Update version field in folders
     * @param string $folder Folder name
     * @param int $version
     * @return boolean
     */
    public function upgrade_version($folder, $version)
    {
        $stmt = $this->prepare("UPDATE folders SET 'version'=:version WHERE 'name'=:name ;");
        $stmt->bindValue(':name', $folder);
        $this->folders[$folder]['version'] = $version;
        $stmt->bindValue(':version', $this->folders[$folder]['version']);
        if ($stmt->execute()) {
            $stmt->close();
            return true;
        } else {
            $this->ok = false;
            $this->message .= "execute failed: ";
            return false;
        }
    }
    /**
     * Get list of all email message headers in folder/emailbox
     * $this->headers auto-populated with array
     * @param string $folder
     * @param boolean $force TRUE to force a resync
     * @return array
     */
    public function &get_messages($folder, $force = false, $sortby = "", $sortorder = "")
    {
        if ($folder != $this->active_folder || $force) {
            $this->sync_messages();
            $query = sprintf('SELECT * FROM %s ', self::_get_folder_name($folder));
            if ($sortby && isset($this->mschema[$sortby])) {
                $query .= "ORDER BY '$sortby' ";
                if ($sortorder == 'ASC' || $sortorder == 'DESC') {
                    $query .= " $sortorder ";
                }
            }
            $query .= ';';
            $result = $this->query($query);
            $this->messages = array();
            $this->_indb = array();
            $this->m_idx = array();
            $index = 0;
            if ($result) {
                while ($foo = $result->fetchArray()) {
                    $this->messages[$index] = $foo;
                    $this->messages[$index]['idx'] = $index;
                    $this->m_idx[$foo['uidl']] = $index;
                    $this->_indb[$foo['uidl']] = true;
                    $index++;
                }
                $this->active_folder = $folder;
            } else {
                $this->ok = false;
                $this->message = "query failed: $query";
            }
        }
        return $this->messages;
    }

    /**
     * Get count of all email message headers in folder/emailbox
     * $this->headers is NOT changed!
     * @param string $folder
     * @param boolean $force TRUE to force a resync
     * @return array
     */
    public function count_messages($folder, $force = false)
    {
        if ($folder != $this->active_folder || $force) {
            $query = sprintf('SELECT COUNT(*) FROM %s;', self::_get_folder_name($folder));
            $result = $this->query($query);
            if ($result) {
                $count = $result->fetchArray();
                return $count[0];
            } else {
                $this->ok = false;
                $this->message = "query failed: $query";
                return null;
            }
        }
        return count($this->messages);
    }

    /**
     * Add new email message to folder
     * @param type $msg
     * @return boolean
     */
    public function new_message($msg)
    {
        $thelist = $this->create_uplist(keys($msg), $this->mschema);
        if ($thelist == null || !is_array($thelist)) {
            return false;
        }
        return $this->do_insert($msg, $thelist);
    }

    /**
     * Take the email message array and update the fields in the DB
     * @param array $msg Message to be updated/synced in DB
     * @param Mixed $fields "*" for all, or array of fields
     * @return boolean
     */
    /*
     * The complexity is allow for the use of $this->mschema:
     *  Having the message schema defined in one location is nice.
     *  NOTE: Since the list of updated fields may change, re-use of
     *        prepared statements is kind of impossible
     */
    public function update_message($msg, $fields = "*")
    {
        $thelist = $this->create_uplist($fields, $this->mschema, array('uidl'));
        if ($thelist == null || !is_array($thelist)) {
            return false;
        }
        return $this->do_update($msg, $thelist,  array('uidl'=>$msg['uidl']));
    }

    /**
     * Checks if message already exists
     * @param array $msg Message msg
     * @return boolean
     */
    public function message_exists($msg)
    {
        $uidl = $msg['uidl'];
        return (isset($this->m_idx[$uidl]) &&
            !empty($this->messages[$this->m_idx[$uidl]]['folder']));
    }

    /**
     * Add or update this->headers with the msg
     * @param array $msg Message msg
     */
    public function add_message($msg)
    {
        if (isset($this->m_idx[$msg['uidl']])) {
            $idx = $this->m_idx[$msg['uidl']];
            $keys = array();
            foreach ($msg as $k=>$v) {
                if (($v !== null) && ($this->messages[$idx][$k] != $v) && ($k != 'uidl')) {
                    $keys[] = $k;
                    $this->messages[$idx][$k] = $v;
                }
            }
            if (count($keys) > 0) {
                $this->m_delta[] = array($this->messages[$idx], $keys);
            }
        } else {
            $this->messages[] = $msg;
            end($this->messages);
            $index = key($this->messages);
            $this->messages[$index]['idx'] = $index;
            $this->m_idx[$msg['uidl']] = $index;
            reset($this->messages);
            $this->m_delta[] = array($this->messages[$index], array('*'));

        }
    }
    /**
     * Update all changed/new headers for all email messages
     * from the changed list. The idea being that if we have
     * a lot of bulk updates, it's best(??) to simply use
     * our PHP arrays and update the DB all in one go
     * when we are finishing up.
     * NOTE: We are smart enough to know which messages are
     *       new, and need to be INSERTed and which ones are
     *       old, and just need UPDATE. We know this via looking
     *       at the message's UIDL entry. If it's in the _indb[]
     *       array, then we've read this message from the DB and
     *       thus should UPDATE. If not, then we have a new
     *       message.
     * @return boolean
     */
    public function sync_messages()
    {
        $retval = true;
        $adds = array();
        $ups = array();
        /* We need to add 1st, and then allow for updates */
        if (count($this->m_delta) > 0) {
            foreach ($this->m_delta as $foo) {
                if (!isset($this->_indb[$foo[0]['uidl']])) {
                    $adds[] = $foo[0];
                } else {
                    $ups[] = $foo;
                }
            }
            if (count($adds) > 0) {
                foreach ($adds as $add) {
                    if (!$this->new_message($add)) {
                        $retval = false;
                    }
                }
            }
            if (count($ups) > 0) {
                foreach ($ups as $foo) {
                    if (!$this->update_message($foo[0], $foo[1])) {
                        $retval = false;
                    }
                }
            }
            $this->m_delta = array();
        }
        return $retval;
    }

    /**
     * Delete email message(s) from DB (must all be in same folder)
     * @param array $msgs
     * @return bool
     */
    public function del_messages($msgs)
    {
        if (!is_array($msgs)) {
            $msgs = (array)$msgs;
        }
        $this->ok = true;
        $query = sprintf("DELETE FROM %s WHERE 'uidl'=:uidl ;", self::_get_folder_name($msgs[0]['folder']));
        $isactive = ($msgs[0]['folder'] == $this->active_folder ? true : false);
        $stmt = $this->prepare($query);
        $idxs = array();
        foreach ($msgs as $msg) {
            $idx = $msg['idx'];
            if (!isset($idxs[$idx])) {
                $idxs[$idx] = $idx;
                $stmt->bindValue(':uidl', $msg['uidl']);
                if (!$stmt->execute($query)) {
                    $this->ok = false;
                    $this->message = "exec failed: $query";
                } else {
                    $idxs[$idx] = $idx;
                }
            }
        }
        /* If we deleted from the active folder, then update our array */
        if ($isactive) {
            foreach ($idxs as $idx) {
                unset($this->m_idx[$this->messages[$idx]['uidl']]);
                unset($this->messages[$idx]);
            }
        }
        $stmt->close();
        return $this->ok;
    }

    public function add_attachment($folder, $msg)
    {

    }


    public function del_attachment($folder, $msg)
    {

    }

    private function calc_folder_size($path)
    {
        $total_size = 0;
        $path = rtrim($path, '/').'/';

        foreach(scandir($path) as $f) {
            if ($f != "." && $f != "..") {
                $nfile = $path.$f;
                if (is_dir($nfile)) {
                    $size = $this->calc_folder_size($nfile);
                    $total_size += $size;
                }
                else {
                    $size = filesize($nfile);
                    $total_size += $size;
                }
            }
        }
        return $total_size;
    }

}
