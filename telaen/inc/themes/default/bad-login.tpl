<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN">

<html>
<head>
<title>jaguMail Webmail - {$umLabel.bdl_title}</title>
<link rel="stylesheet" href="inc/themes/default/webmail.css" type="text/css">
<meta http-equiv="Content-Type" content="text/html; charset={$umLabel.default_char_set}">
</head>

<body bgcolor="#778899" text="#FFFFFF" link="#FFFFFF" vlink="#FFFFFF" alink="#FFFFFF">
<br>
<br>
<br>
<table width="500" border="0" cellspacing="0" cellpadding="2" align="center">
  <tr>
    <td><img src="images/telaen-logo2.jpg" width="500" height="118" border=0 alt="Telaen Webmail"></td>
  </tr>
  <tr>
    <td bgcolor=white><table width="100%" border="0" cellspacing="1" cellpadding="1" align="center">
        <tr>
          <td align=right class="title">.: <font color=red size=3><b>{$umLabel.bdl_title}</b></font> :.</td>
        <tr>
          <td align=right class="cent"><br>
            {$umLabel.bdl_msg}<br>
            <br>
            {$umServerResponse} <br>
            <br>
            <a href="./index.php"><b><i>{$umLabel.bdl_back}</i></b></a><br>
            <br></td>
      </table></td>
  </tr>
</table>
</body>
</html>
