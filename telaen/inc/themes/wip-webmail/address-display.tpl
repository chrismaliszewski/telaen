{config_load file=$umLanguageFile section="AddressBook"}
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN">

<html>
<head>
	<title>UebiMiau - {$umLabel.adr_title}</title>
	<meta http-equiv="Content-Type" content="text/html; charset={$umLabel.default_char_set}">
	<link rel="stylesheet" href="themes/webmail/css.css" type="text/css">
	<script language="JavaScript" src="themes/webmail/js.js" type="text/javascript"></script>
	{$umJS}
</head>
<body>
<table width="100%" border="0" cellspacing="0" cellpadding="0" align="center">
<tr><td valign="middle" align="center">
<table width="750" border="0" cellspacing="0" cellpadding="0" class="frame" align="center">

	<tr><td class=top><img src="themes/webmail/images/logo.gif" border="0""></td></tr>
	<tr><td><img src="themes/webmail/images/bandeau-h.gif" border="0"></td></tr>
	<tr>
		<td background="themes/webmail/images/ligne-fond.gif">
			<table cellspacing="0" cellpadding="0" width="99.7%" border="0" class="normal" align="center">
<tr>
					<td align="center" valign="bottom" bgcolor="#ffffff" height="50" width="83" onmouseover="mOvr(this,'#ffffff');" onmouseout="mOut(this,'#ffffff');" onclick="mClk(this);"><a class="lien" href="javascript:goinbox()"><img src="themes/webmail/images/inbox.gif"><br /><br /><font style="font-size: 10px;">{$umLabel.messages_mnu}</font></a></td>
					<td align="center" valign="bottom" bgcolor="#ffffff" height="50" width="83" onmouseover="mOvr(this,'#ffffff');" onmouseout="mOut(this,'#ffffff');" onclick="mClk(this);"><a class="lien" href="javascript:newmsg()"><img src="themes/webmail/images/newmsg.gif"><br /><br /><font style="font-size: 10px;">{$umLabel.compose_mnu}</font></a></td>
					<td align="center" valign="bottom" bgcolor="#ffffff" height="50" width="83" onmouseover="mOvr(this,'#ffffff');" onmouseout="mOut(this,'#ffffff');" onclick="mClk(this);"><a class="lien" href="javascript:refreshlist()"><img src="themes/webmail/images/refresh.gif"><br /><br /><font style="font-size: 10px;">{$umLabel.refresh_mnu}</font></a></td>
					<td align="center" valign="bottom" bgcolor="#ffffff" height="50" width="83" onmouseover="mOvr(this,'#ffffff');" onmouseout="mOut(this,'#ffffff');" onclick="mClk(this);"><a class="lien" href="javascript:folderlist()"><img src="themes/webmail/images/folder.gif"><br /><br /><font style="font-size: 10px;">{$umLabel.folders_mnu}</font></a></td>
					<td align="center" valign="bottom" bgcolor="#ffffff" height="50" width="83" onmouseover="mOvr(this,'#ffffff');" onmouseout="mOut(this,'#ffffff');" onclick="mClk(this);"><a class="lien" href="javascript:search()"><img src="themes/webmail/images/search.gif"><br /><br /><font style="font-size: 10px;">{$umLabel.search_mnu}</font></a></td>
					<td align="center" valign="bottom" bgcolor="#ffffff" height="50" width="83" onmouseover="mOvr(this,'#ffffff');" onmouseout="mOut(this,'#ffffff');" onclick="mClk(this);"><a class="lien" href="javascript:addresses()"><img src="themes/webmail/images/addresses.gif"><br /><br /><font style="font-size: 10px;">{$umLabel.address_mnu}</font></a></td>
					<td align="center" valign="bottom" bgcolor="#ffffff" height="50" width="83" onmouseover="mOvr(this,'#ffffff');" onmouseout="mOut(this,'#ffffff');" onclick="mClk(this);"><a class="lien" href="javascript:emptytrash()"><img src="themes/webmail/images/trash.gif"><br /><br /><font style="font-size: 10px;">{$umLabel.empty_trash_mnu}</font></a></td>
					<td align="center" valign="bottom" bgcolor="#ffffff" height="50" width="83" onmouseover="mOvr(this,'#ffffff');" onmouseout="mOut(this,'#ffffff');" onclick="mClk(this);"><a class="lien" href="javascript:prefs()"><img src="themes/webmail/images/prefs.gif"><br /><br /><font style="font-size: 10px;">{$umLabel.prefs_mnu}</font></a></td>
					<td align="center" valign="bottom" bgcolor="#ffffff" height="50" width="83" onmouseover="mOvr(this,'#ffffff');" onmouseout="mOut(this,'#ffffff');" onclick="mClk(this);"><a class="lien" href="javascript:goend()"><img src="themes/webmail/images/logout.gif"><br /><br /><font style="font-size: 10px;">{$umLabel.logoff_mnu}</font></a></td>
				</tr>
			</table>
			<table width="99.7%" border="0" cellspacing="0" cellpadding="0" class="normal" align="center">
				<tr><td>&nbsp;</td></tr>
				<tr><td>
					<table cellspacing="0" cellpadding="0" width="350" border="0" class="normal" bgcolor="#BFC6D3" align="center">
						<tr><td size="20%">{$umLabel.adr_name} :</td><td>{$umAddrName|escape:"html"}</td></tr>
						<tr><td>{$umLabel.adr_email} :</td><td>{$umAddrEmail|escape:"html"}</td></tr>
						<tr><td>{$umLabel.adr_street} :</td><td>{$umAddrStreet|escape:"html"}</td></tr>
						<tr><td>{$umLabel.adr_city} :</td><td>{$umAddrCity|escape:"html"}</td></tr>
						<tr><td>{$umLabel.adr_state} :</td><td>{$umAddrState|escape:"html"}</td></tr>
						<tr><td>{$umLabel.adr_work} :</td><td>{$umAddrWork|escape:"html"}</td></tr>
						<tr><td colspan="2" align="center"><input type="button" value="{$umLabel.adr_back}" class="button" onClick="location = '{$umGoBack}'"></td></tr>
					</table>
				</td></tr>
				<tr>
					<td>&nbsp;</td>
				</tr>
			</table>
		</td>
	</tr>
	<tr>
		<td class=bot>
			<img src="themes/webmail/images/bandeau-b.gif" border="0" width="750" height="25">
		</td>
	<tr>
</table>
</td></tr>
</table>
</body>
</html>
</body>
</html> 
