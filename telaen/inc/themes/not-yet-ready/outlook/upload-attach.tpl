<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN">
<html>
<head>
<title>{if $webmailTitle}{$webmailTitle} - {/if}{$smLabel.up_title}</title>
<link rel="stylesheet" href="inc/themes/outlook/webmail.css" type="text/css">
<meta http-equiv="Content-Type" content="text/html; charset={$smLabel.default_char_set}">
</head>
<body style="background-color: #D4D0C8;" topmargin=0 leftmargin=0>
<form enctype="multipart/form-data" action="upload.php?sid={$umSid}" method=POST>
  <table width=100% border=0 cellspacing="4" cellpadding="0">
    <tr>
      <td><font class='xx-normal'>{$smLabel.up_information_text}</font></td>
    </tr>
    <tr>
      <td align=center><input class=file type=file name=userfile size=35></td>
    </tr>
    <tr>
      <td align=center><hr>
        <input type=submit value="&nbsp;&nbsp;&nbsp;{$smLabel.attch_add_new}&nbsp;&nbsp;&nbsp;" name=submit class=button></td>
    </tr>
  </table>
</form>
</body>
</html>
