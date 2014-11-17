<?php
/************************************************************************
Telaen is a GPL'ed software developed by

 - The Telaen Group
 - http://jimjag.github.io/telaen/

*************************************************************************/
define('I_AM_TELAEN', basename($_SERVER['SCRIPT_NAME']));

require './inc/init.php';

if (!isset($folder) || !isset($ix)) {
    die('Expected parameters');
}
$mail_info = $mbox['headers'][base64_encode(strtolower($folder))][$ix];
$smarty->assign('umPageTitle', $mail_info['subject']);
$smarty->assign('umHeaders', preg_replace('/\t/', '&nbsp;&nbsp;&nbsp;&nbsp;', nl2br(htmlspecialchars($mail_info['header']))));
$smarty->display("$selected_theme/headers-window.htm");
