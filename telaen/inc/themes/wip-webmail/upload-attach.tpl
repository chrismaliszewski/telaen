{config_load file=$umLanguageFile section="Newmessage"}

<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN">
<html>
<head>
	<title>UebiMiau Webmail - {$umLabel.up_title}</title>
	<meta http-equiv="Content-Type" content="text/html; charset={$umLabel.default_char_set}">
	<link rel="stylesheet" href="inc/themes/webmail/css.css" type="text/css">
	{$umJS}
</head>
<body>
<br>
<table width="95%" border="0" cellspacing="1" cellpadding="0" align="center" class="normal" bgcolor="#2D3443">
<form enctype="multipart/form-data" action="upload.php?sid={$umSid}&lid={$umLid}&tid={$umTid}" method="POST">
<tr bgcolor="#78879C"><td height="30" align="center"><b>{$umLabel.up_information_text}</b></td></tr>
<tr bgcolor="#BFC6D3"><td align="center"><input type="file" name="userfile" class="textbox" size="22" style="width: 220px; border: 1 solid #7F9DB9" class="button"><br><input type=submit value="{$umLabel.up_button_text}" name="submit" class="button"></td></tr>
</form>
</table>
</body>
</html>
