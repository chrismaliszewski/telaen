<?php
/************************************************************************
Telaen is a GPL'ed software developed by 

 - The Telaen Group
 - http://www.telaen.org/

Telaen is based on Uebimiau (http://uebimiau.sourceforge.net)
 by Aldoir Ventura (aldoir@users.sourceforge.net)
*************************************************************************/


require("./inc/inc.php");
require("./folder_list.php");



if(isset($f_real_name)) {
	$myprefs["real-name"]		= $f_real_name;
	$myprefs["reply-to"]		= $f_reply_to;
	$myprefs["save-to-trash"]	= $f_save_trash;
	$myprefs["st-only-read"]	= $f_st_only_read;
	$myprefs["empty-trash"]		= $f_empty_on_exit;
	$myprefs["empty-spam"]		= $f_empty_spam_on_exit;
	$myprefs["unmark-read"]		= $f_unmark_read_on_exit;
	$myprefs["save-to-sent"]	= $f_save_sent;
	$myprefs["rpp"]			= $f_rpp;
	$myprefs["add-sig"]		= $f_add_sig;
	$myprefs["signature"]   	= $f_sig;
	$myprefs["timezone"]		= $f_timezone;
	$myprefs["display-images"]	= $f_display_images;
	$myprefs["editor-mode"]		= $f_editor_mode;
	$myprefs["refresh-time"]	= $f_refresh_time;
	$myprefs["first-login"] 	= 1;
	$myprefs["spamlevel"]		= $f_spamlevel;
	$myprefs["version"]		= $appversion;
	save_prefs($myprefs); unset($myprefs);
}

$prefs = load_prefs();

$jssource = "

<script type=\"text/javascript\">
//<![CDATA[
disbl = false;
function newmsg() { location = 'newmsg.php?pag=$pag&folder=".urlencode($folder)."'; }
function folderlist() { location = 'folders.php?folder=".urlencode($folder)."'}
function goend() { location = 'logout.php'; }
function goinbox() { location = 'messages.php?folder=inbox'; }
function search() { location = 'search.php'; }
function emptytrash() {	location = 'folders.php?empty=trash&folder=".urlencode($folder)."&goback=true';}
function addresses() { location = 'addressbook.php'; }
function dis() { 
	with(document.forms[0]) { 
		f_st_only_read.disabled = !f_save_trash.checked; 
		if(f_st_only_read.checked) f_st_only_read.checked = f_save_trash.checked; 
		disbl = !f_save_trash.checked
	} 
}
function checkDis() { if (disbl) return false; }
//]]>
</script>
";

$smarty->assign("umJS",$jssource);

$aval_rpp = Array(10,20,30,40,50,100,200);
$sel_rpp = "<select name=\"f_rpp\">\r";
for($i=0;$i<count($aval_rpp);$i++) {
	$selected = ($prefs["rpp"] == $aval_rpp[$i])?"selected=\"selected\"":"";
	$sel_rpp .= "<option value=\"".$aval_rpp[$i]."\" $selected>".$aval_rpp[$i]."</option>\r";
}
$sel_rpp .= "</select>";

$sel_refreshtime = "<select name=\"f_refresh_time\">\r";
for($i=5;$i<30;$i=$i+5) {
	$selected = ($prefs["refresh-time"] == $i)?"selected=\"selected\"":"";
	$sel_refreshtime .= "<option value=\"" .$i. "\" $selected>".$i."</option>\r";
}
$sel_refreshtime .= "</select>";


$txtsignature = "<textarea cols=\"40\" rows=\"3\" name=\"f_sig\" class=\"textarea\">".htmlspecialchars($prefs["signature"])."</textarea>";


$gmttime = time()-date("Z");

$tzselect = "<select name=\"f_timezone\">\r";
for($i=-12;$i<=12;$i = $i+0.5) {
	$nowgmt = $gmttime + $i*3600;
	$operator = ($i < 0)?"-":"+";
	$z = abs($i);
	$diff = $operator.sprintf("%02d",intval($z)).sprintf("%02d",($z-intval($z))*60);
	$selected = ($prefs["timezone"] == $diff)?"selected=\"selected\"":"";
	$tzselect .= "<option value=\"$diff\" $selected>GMT $diff (".date("h:i A",$nowgmt).")</option>\r";
}
$tzselect .= "</select>\r";

$smarty->assign("umRealName",$prefs["real-name"]);
$smarty->assign("umReplyTo",$prefs["reply-to"]);
$status = ($prefs["save-to-trash"])?" checked=\"checked\"":"";
$smarty->assign("umSaveTrash",$status);
$status = ($prefs["st-only-read"])?" checked=\"checked\"":"";
$smarty->assign("umSaveTrashOnlyRead",$status);
$status = ($prefs["empty-trash"])?" checked=\"checked\"":"";
$smarty->assign("umEmptyTrashOnExit",$status);
$status = ($prefs["empty-spam"])?" checked=\"checked\"":"";
$smarty->assign("umEmptySpamOnExit",$status);
$status = ($prefs["unmark-read"])?" checked=\"checked\"":"";
$smarty->assign("umUnmarkReadOnExit",$status);
$status = ($prefs["save-to-sent"])?" checked=\"checked\"":"";
$smarty->assign("umSaveSent",$status);
$status = ($prefs["add-sig"])?" checked=\"checked\"":"";
$smarty->assign("umAddSignature",$status);
$status = ($prefs["display-images"])?" checked=\"checked\"":"";
$smarty->assign("umDisplayImages",$status);

$smarty->assign("umEditorMode",$prefs["editor-mode"]);

$smarty->assign("umRecordsPerPage",$sel_rpp);
$smarty->assign("umTimeToRefresh",$sel_refreshtime);

$smarty->assign("umSignature",$txtsignature);
$smarty->assign("umTimezoneSelect",$tzselect);

$smarty->assign("umSpamLevelVals", array(0,1,2,3,4,5,6,7,8,9));
$smarty->assign("umSpamLevel",$prefs["spamlevel"]);

$smarty->display("$selected_theme/preferences.htm");

?>
