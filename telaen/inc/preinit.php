<?
/************************************************************************
Telaen is a GPL'ed software developed by 

 - The Telaen Group
 - http://www.telaen.org/

Telaen is based on Uebimiau (http://uebimiau.sourceforge.net)
 by Aldoir Ventura (aldoir@users.sourceforge.net)
*************************************************************************/

/*
 * This module takes care of setting and/or initializing
 * various aspects of Telaen that should be universal.
 */

$error_flags = E_ALL & ~E_NOTICE;

umask(0077);

@error_reporting($error_flags);
@ini_set ('error_reporting', $error_flags);

$old_error_handler = set_error_handler("err_handler");

$phpver = phpversion();
$phpver = doubleval($phpver[0].".".$phpver[2]);

if($phpver >= 4.1) {
	extract($_POST,EXTR_SKIP);
	extract($_GET,EXTR_SKIP);
	extract($_SERVER,EXTR_SKIP);
	extract($_FILES);
} else {
	function array_key_exists($key,&$array) {
		reset($array);
		while(list($k,$v) = each($array)) {
			if($k == $key) {
				reset($array);
				return true;
			}
		}
		reset($array);
		return false;
	}
}

$textout = <<<EOF
<!-- Page generated by Telaen (http://www.telaen.org/) -->
EOF;

if(!isset($pag)) $pag = 1;


define("FL_TYPE_MOVE", 1);
define("FL_TYPE_DELETE", 2);
define("FL_TYPE_MARK_READ", 4);

define("FL_FIELD_FROM", 1);
define("FL_FIELD_SUBJECT", 2);
define("FL_FIELD_TO", 4);

?>
