<html><body bgcolor="#FFFFFF" text="#000000" link="#0000FF" leftmargin="0" topmargin="0" marginwidth="0" marginheight="0" onLoad="MM_preloadImages('inc/themes/aleborgXP/images/refresh_down.gif','inc/themes/aleborgXP/images/refresh_over.gif','inc/themes/aleborgXP/images/newmsg_down.gif','inc/themes/aleborgXP/images/newmsg_over.gif','inc/themes/aleborgXP/images/search_down.gif','inc/themes/aleborgXP/images/search_over.gif','inc/themes/aleborgXP/images/folders_down.gif','inc/themes/aleborgXP/images/folders_over.gif','inc/themes/aleborgXP/images/options_down.gif','inc/themes/aleborgXP/images/options_over.gif','inc/themes/aleborgXP/images/trash_down.gif','inc/themes/aleborgXP/images/trash_over.gif','inc/themes/aleborgXP/images/addressbook_down.gif','inc/themes/aleborgXP/images/addressbook_over.gif','inc/themes/aleborgXP/images/logout_down.gif','inc/themes/aleborgXP/images/logout_over.gif','inc/themes/aleborgXP/images/inbox_down.gif','inc/themes/aleborgXP/images/inbox_over.gif','inc/themes/aleborgXP/images/previous_down.gif','inc/themes/aleborgXP/images/previous_over.gif','inc/themes/aleborgXP/images/next_down.gif','inc/themes/aleborgXP/images/next_over.gif')">{config_load file=$umLanguageFile section="Newmessage"}

<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN">

<head>
	<title>UebiMiau</title>
	<link rel="stylesheet" href="inc/themes/aleborgXP/webmail.css" type="text/css">

<script language="JavaScript" src="inc/themes/aleborgXP/webmail.js" type="text/javascript">
</script>
{$smJS}
</head> 

<table width="100%" border="0" cellspacing="0" cellpadding="0">
  <tr height="1" bgcolor="#FFFFFF">
    <td height="1" bgcolor="#FFFFFF"></td>
  </tr>
  <tr>
    <td><table width="100%" border="0" cellpadding="0" cellspacing="0" background="inc/themes/aleborgXP/images/menu_back.gif">
        <tr> 
          <td width="100"><img src="inc/themes/aleborgXP/images/logo.gif" width="100" height="32"></td>
          <td width="11"><img src="inc/themes/aleborgXP/images/seperator.gif" width="11" height="38"></td>
          <td width="32">{if $smPreviousLink}<a href="{$smPreviousLink}"><img src="inc/themes/aleborgXP/images/previous.gif" alt="{$smLabel.previous_text}" name="previous" width="32" height="38" border="0" id="previous" onMouseDown="MM_swapImage('previous','','inc/themes/aleborgXP/images/previous_down.gif',1)" onMouseOver="MM_swapImage('previous','','inc/themes/aleborgXP/images/previous_over.gif',1)" onMouseOut="MM_swapImgRestore()"></a>{else}<img src="inc/themes/aleborgXP/images/previous_off.gif">{/if}</td>
          <td width="32">{if $smNextLink}<a href="{$smNextLink}"><img src="inc/themes/aleborgXP/images/next.gif" alt="{$smLabel.next_text}" name="next" width="32" height="38" border="0" id="next" onMouseDown="MM_swapImage('next','','inc/themes/aleborgXP/images/next_down.gif',1)" onMouseOver="MM_swapImage('next','','inc/themes/aleborgXP/images/next_over.gif',1)" onMouseOut="MM_swapImgRestore()"></a>{else}<img src="inc/themes/aleborgXP/images/next_off.gif">{/if}</td>
          <td width="11"><img src="inc/themes/aleborgXP/images/seperator.gif" width="11" height="38"></td>
          <td width="32"><a href="javascript:goinbox()"><img src="inc/themes/aleborgXP/images/inbox.gif" alt="{$smLabel.messages_mnu}" name="inbox" width="32" height="38" border="0" id="inbox" onMouseDown="MM_swapImage('inbox','','inc/themes/aleborgXP/images/inbox_down.gif',1)" onMouseOver="MM_swapImage('inbox','','inc/themes/aleborgXP/images/inbox_over.gif',1)" onMouseOut="MM_swapImgRestore()"></a></td>
          <td width="32"><a href="javascript:newmsg()"><img src="inc/themes/aleborgXP/images/newmsg.gif" alt="{$smLabel.compose_mnu}" name="newmsg" width="32" height="38" border="0" id="newmsg" onMouseDown="MM_swapImage('newmsg','','inc/themes/aleborgXP/images/newmsg_down.gif',1)" onMouseOver="MM_swapImage('newmsg','','inc/themes/aleborgXP/images/newmsg_over.gif',1)" onMouseOut="MM_swapImgRestore()"></a></td>
          <td width="32"><img src="inc/themes/aleborgXP/images/refresh_off.gif" alt="{$smLabel.refresh_mnu}" name="refresh" width="32" height="38" border="0" id="refresh"></td>
          <td width="11"><img src="inc/themes/aleborgXP/images/seperator.gif" width="11" height="38"></td>
          <td width="32"><a href="javascript:folderlist()"><img src="inc/themes/aleborgXP/images/folders.gif" alt="{$smLabel.folders_mnu}" name="folders" width="32" height="38" border="0" id="folders" onMouseDown="MM_swapImage('folders','','inc/themes/aleborgXP/images/folders_down.gif',1)" onMouseOver="MM_swapImage('folders','','inc/themes/aleborgXP/images/folders_over.gif',1)" onMouseOut="MM_swapImgRestore()"></a></td>
          <td width="32"><a href="javascript:search()"><img src="inc/themes/aleborgXP/images/search.gif" alt="{$smLabel.search_mnu}" name="search" width="32" height="38" border="0" id="search" onMouseDown="MM_swapImage('search','','inc/themes/aleborgXP/images/search_down.gif',1)" onMouseOver="MM_swapImage('search','','inc/themes/aleborgXP/images/search_over.gif',1)" onMouseOut="MM_swapImgRestore()"></a></td>
          <td width="32"><a href="javascript:addresses()"><img src="inc/themes/aleborgXP/images/addressbook.gif" alt="{$smLabel.address_mnu}" name="addressbook" width="32" height="38" border="0" id="addressbook" onMouseDown="MM_swapImage('addressbook','','inc/themes/aleborgXP/images/addressbook_down.gif',1)" onMouseOver="MM_swapImage('addressbook','','inc/themes/aleborgXP/images/addressbook_over.gif',1)" onMouseOut="MM_swapImgRestore()"></a></td>
          <td width="11"><img src="inc/themes/aleborgXP/images/seperator.gif" width="11" height="38"></td>
          <td width="32"><a href="javascript:emptytrash()"><img src="inc/themes/aleborgXP/images/trash.gif" alt="{$smLabel.empty_trash_mnu}" name="trash" width="32" height="38" border="0" id="trash" onMouseDown="MM_swapImage('trash','','inc/themes/aleborgXP/images/trash_down.gif',1)" onMouseOver="MM_swapImage('trash','','inc/themes/aleborgXP/images/trash_over.gif',1)" onMouseOut="MM_swapImgRestore()"></a></td>
          <td width="32"><a href="javascript:prefs()"><img src="inc/themes/aleborgXP/images/options.gif" alt="{$smLabel.prefs_mnu}" name="options" width="32" height="38" border="0" id="options" onMouseDown="MM_swapImage('options','','inc/themes/aleborgXP/images/options_down.gif',1)" onMouseOver="MM_swapImage('options','','inc/themes/aleborgXP/images/options_over.gif',1)" onMouseOut="MM_swapImgRestore()"></a></td>
          <td width="32"><a href="javascript:goend()"><img src="inc/themes/aleborgXP/images/logout.gif" alt="{$smLabel.logoff_mnu}" name="logout" width="32" height="38" border="0" id="logout" onMouseDown="MM_swapImage('logout','','inc/themes/aleborgXP/images/logout_down.gif',1)" onMouseOver="MM_swapImage('logout','','inc/themes/aleborgXP/images/logout_over.gif',1)" onMouseOut="MM_swapImgRestore()"></a></td>
          <td>&nbsp;</td>
        </tr>
      </table></td>
  </tr>
  <tr>
    <td height="3" background="inc/themes/aleborgXP/images/list_down.gif"><img src="inc/themes/aleborgXP/images/list_down.gif" width="5" height="3"></td>
  </tr>
</table>
<table cellspacing=2 cellpadding=0 border=0 bgcolor=White width="720">
  <tr>
		<td valign=center bgcolor=white>
			<table width="100%" border="0" cellspacing="1" cellpadding="0">
			{if $smMailSent}
				<tr>
					<td class=cent>
						{$smLabel.result_success}<br><br>
            <a href="messages.php?sid={$umSid}&tid={$umTid}&lid={$umLid}">{$smLabel.nav_continue}
            &raquo;</a> </td>
				</tr>
			{else}
				<tr>
					<td class=cent>
						{$smLabel.result_error}<br><br>
						<font color=red>{$smErrorMessage}</font><br><br>
            <a href="javascript:history.go(-1)">&laquo; {$smLabel.nav_back}</a> <br>
            <br>
          </td>
				</tr>
			{/if}
			</table>
		</td>
	</tr>
</table>
</body>
</html>
