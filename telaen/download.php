<?php
/************************************************************************
Telaen is a GPL'ed software developed by 

 - The Telaen Group
 - http://www.telaen.org/

Telaen is based on Uebimiau (http://uebimiau.sourceforge.net)
 by Aldoir Ventura (aldoir@users.sourceforge.net)
*************************************************************************/
@ini_set ( 'output_buffering',    1024 );
@ob_start();

// load session management
require("./inc/inc.php");
// check for all parameters

if(	$attach == "" || 
	$folder == "" || 
	$ix == "") redirect_and_exit("index.php?err=3", true);

$mail_info = $sess["headers"][base64_encode(strtolower($folder))][$ix];

if(!is_array($mail_info)) redirect_and_exit("index.php?err=3", true);

$arAttachment = explode(",",$attach);
$attach = $mail_info;
foreach($arAttachment as $item )
	if(is_numeric($item))
		$attach = &$attach["attachments"][intval($item)];

if(ereg("\\.\\.",$attach["filename"]) || !file_exists($attach["filename"])) { redirect_and_exit("index.php?err=3", true); }


$size = filesize($attach["filename"]);

$disposition = (!$down)?"inline":"attachment";
$type = (!preg_match('/[a-z0-9\-]+\/[a-z0-9\-]+/i',$attach["content-type"]))?"application/octet-stream":$attach["content-type"];
$dlfname = $attach["name"];

// Header("Content-Type: $type; name=\"".$attach["name"]."\"\r\n");
header("Pragma: public");
header("Expires: 0");
header("Cache-Control: must-revalidate, post-check=0, pre-check=0");
header("Cache-Control: public"); 
header("Content-Description: File Transfer");
header("Content-Type: $type");
header("Content-Disposition: $disposition; filename=\"$dlfname\";");
header("Content-Transfer-Encoding: binary");
header("Content-Length: $size");
@ob_end_flush();

readfile($attach["filename"]);

?>
