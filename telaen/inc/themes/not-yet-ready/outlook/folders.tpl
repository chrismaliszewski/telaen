<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN">
<html>
<head>
<title>{if $webmailTitle}{$webmailTitle} - {/if}{$smLabel.folders_to} {$smUserEmail}</title>
<link rel="stylesheet" href="inc/themes/outlook/webmail.css" type="text/css">
<meta http-equiv="Content-Type" content="text/html; charset={$smLabel.default_char_set}">
{$pageMetas}
<script src="inc/themes/outlook/webmail.js" type="text/javascript"></script>
{$smJS}
</head>
{if $smarty.request.oefolders=="true"}
	{***** SHOWS ONLY FOLDERS *****}<body onload="javascript:parent.WriteFolders('{strip}

		<table cellpadding=0 cellspacing=0>
			<tr><td><img src=themes/outlook/images/icon_outlook.gif></td><td><font class=xx-normal><nobr>{if $webmailTitle}{$webmailTitle}{else}Webmail{/if}</nobr></font></td></tr>
		</table>
		<table cellpadding=0 cellspacing=0>
		<base target=\'_parent\'>
		{counter start=0 skip=1 print=false}
		{section name=i loop=$smFolderList}
		{$smFoldersList}
		{counter print=false assign=contador}

		<tr><td>
		{if $smarty.section.i.last}<img src=themes/outlook/images/folders_l.gif>{else}<img src=themes/outlook/images/folders_t.gif>{/if}

		{if $smFolderList[i].entry eq "inbox"}<img src=themes/outlook/images/icon_folder_inbox.gif>{elseif $smFolderList[i].entry eq "sent"}<img src=themes/outlook/images/icon_folder_sent.gif>{elseif $smFolderList[i].entry eq "trash"}<img src=themes/outlook/images/icon_folder_trash.gif>{elseif $smFolderList[i].entry eq "spam"}<img src=themes/outlook/images/icon_folder_spam.gif>{else}<img src=themes/outlook/images/icon_folder_other.gif>{/if}
	</td>
	<td><nobr><font class=xx-normal></font>{assign var='unread' value=$smFolderList[i].msgs|regex_replace:"([0-9]*/)":""}<a href=\'{$smFolderList[i].chlink}\'>{if $unread!="0"}<b>{/if}
    {$smFolderList[i].name|escape:"html"}
    {if $unread!="0"}</b>{/if}</a>{if $unread!="0"}<font class=xx-normal color=#0000FF><b>({$unread})</b></font>{/if}</nobr></td>
	</tr>
	{/section}
	</table>
	{/strip}')">
{else}
	{***** SHOWS FOLDERS SECTION NORMALLY *****}

<body>
<table width='100%' cellspacing=2 cellpadding=0 class='window_inner'>
  <tr>
    <td><table width='100%' cellpadding='0' cellspacing='0'>
        <tr>
          <td class="window_title"><img src='inc/themes/outlook/images/icon_outlook.gif'></td>
          <td width='100%' class="window_title">&nbsp;{$smLabel.folders_to} {$smUserEmail}</td>
          <td class='window_title_X'><a href='javascript:goinbox()'><img border='0' src='inc/themes/outlook/images/X.png'></a></td>
        </tr>
      </table>
      <table width='100%' height='2' cellpadding='0' cellspacing='0'>
        <tr>
          <td></td>
        </tr>
      </table>
      <table width='100%' cellpadding='0' cellspacing='0'>
        <!-- BARRA DE HERRAMIENTAS -->
        <tr>
          <td class='toolbar_outer' ><table width='100%' cellpadding='0' cellspacing='0'>
              <tr>
                <td class='toolbar_inner'><table width='0' cellpadding='0' cellspacing='0'>
                    <tr>
                      <td class="toolbar_splitter"><img src='inc/themes/outlook/images/bar_handler.gif'></td>
                      <td class="toolbar_button_off" onmouseover="this.className='toolbar_button_on'" onmouseout="this.className='toolbar_button_off'" onmousedown="this.className='toolbar_button_down'" onmouseup="this.className='toolbar_button_on'" onclick="javascript:newmsg()"><acronym title="{$smLabel.compose_mnu}"><img src="inc/themes/outlook/images/icon_new.gif"><font class='xx-normal'><br>
                        {#compose_mnu#|truncate:13:"...":true}</font></acronym></td>
                      <td class="toolbar_splitter"><img src='inc/themes/outlook/images/bar_splitter.gif'></td>
                      <td class="toolbar_button_off" onmouseover="this.className='toolbar_button_on'" onmouseout="this.className='toolbar_button_off'" onmousedown="this.className='toolbar_button_down'" onmouseup="this.className='toolbar_button_on'" onclick="javascript:refreshlist()"><acronym title="{$smLabel.refresh_mnu}"><img src="inc/themes/outlook/images/icon_sendreceive.gif"><font class='xx-normal'><br>
                        {#refresh_mnu#|truncate:13:"...":true}</font></acronym></td>
                      <td class="toolbar_splitter"><img src='inc/themes/outlook/images/bar_splitter.gif'></td>
                      <td class="toolbar_button_off" onmouseover="this.className='toolbar_button_on'" onmouseout="this.className='toolbar_button_off'" onmousedown="this.className='toolbar_button_down'" onmouseup="this.className='toolbar_button_on'" onclick="javascript:addresses()"><acronym title="{$smLabel.address_mnu}"><img src="inc/themes/outlook/images/icon_addressbook.gif"><font class='xx-normal'><br>
                        {#address_mnu#|truncate:13:"...":true}</font></acronym></td>
                      <td class="toolbar_button_off" onmouseover="this.className='toolbar_button_on'" onmouseout="this.className='toolbar_button_off'" onmousedown="this.className='toolbar_button_down'" onmouseup="this.className='toolbar_button_on'" onclick="javascript:search()"><acronym title="{$smLabel.search_mnu}"><img src="inc/themes/outlook/images/icon_search.gif"><font class='xx-normal'><br>
                        {#search_mnu#|truncate:13:"...":true}</font></acronym></td>
                      <td class="toolbar_splitter"><img src='inc/themes/outlook/images/bar_splitter.gif'></td>
                      <td class="toolbar_button_off" onmouseover="this.className='toolbar_button_on'" onmouseout="this.className='toolbar_button_off'" onmousedown="this.className='toolbar_button_down'" onmouseup="this.className='toolbar_button_on'" onclick="javascript:prefs()"><acronym title="{$smLabel.prefs_mnu}"><img src="inc/themes/outlook/images/icon_options.gif"><font class='xx-normal'><br>
                        {#prefs_mnu#|truncate:13:"...":true}</font></acronym></td>
                    </tr>
                  </table></td>
              </tr>
            </table></td>
        </tr>
      </table></td>
  </tr>
  <tr>
    <td><table width='100%' height='100%' cellspacing=2 cellpadding=0>
        <tr>
          <td valign=top colspan=3><table width='100%' cellpadding='0' cellspacing='0'>
              <tr>
                <td class='seccion_title_out'>&nbsp;<img src="inc/themes/outlook/images/icon_folder.gif">&nbsp;<nobr>{$smLabel.folders_mnu}</nobr></td>
              </tr>
            </table></td>
        </tr>
        <tr>
          <td height=3></td>
        </tr>
        <tr> 
          <!-- BARRA DE OUTLOOK -->
          <td width='100%' height='100%' class="outlook_bar_outer" valign='top'><table width='100%' height='100%' cellpadding='0' cellspacing='0'>
              <tr>
                <td class="headers" onclick="javascript:folderlist()"><a href="#">{#folders_mnu#|truncate:26:"...":true}</a></td>
              </tr>
              <tr>
                <td valign=top style="background: #FFFFFF; padding:5px;"><div id="folderlist" name="folderlist">
                  <table cellpadding=0 cellspacing=0>
                    <tr>
                      <td><img src=themes/outlook/images/icon_outlook.gif></td>
                      <td><font class=xx-normal><nobr>{if $webmailTitle}{$webmailTitle}{else}Webmail{/if}</nobr></font></td>
                    </tr>
                  </table>
                  <div>
                  {literal}<script>function WriteFolders(res) {document.getElementById('folderlist').innerHTML=res;}</script>{/literal}
                  <iframe src="folders.php?oefolders=true" style="display:none;"></iframe></td>
              </tr>
            </table></td>
          <!-- FIN BARRA DE OUTLOOK --> 
          <!-- LISTA DE CARPETAS -->
          <td valign='top' height='100%'><table width='100%' height='100%' cellpadding='0' cellspacing='0'>
              <tr>
                <td width='100%' height='100%' valign='top' class="folders_outer"><table width="100%" height="100%" cellpadding='0' cellspacing='0' class="folders_inner">
                    <tr>
                      <td colspan="6" style="background-color: #808080;padding:5;"><font class='xx-normal' color="#FFFFFF"><b>{$smLabel.folders_to} {$smUserEmail}</b></font></td>
                    </tr>
                      <tr>
                      <td colspan="6" style="background-color: #D4D0C8;padding:5;">

                      <form name="form1" action="folders.php" method="POST" onsubmit="return create();">

                    <input type=hidden name=sid value="{$umSid}">
                    <input type=hidden name=lid value="{$umLid}">
                    <input type=hidden name=tid value="{$umTid}">
                    <input type=Text name=newfolder value="" class="textbox" style="width:150;">
                    &nbsp;
                    <input type=button value="{$smLabel.fld_make_new}" class=button onClick="create()">
                      </td>
                      </tr>

                    <tr>
                      <td class='headers' colspan="2">{$smLabel.fld_name_hea}</td>
                      <td class='headers'>{$smLabel.fld_messages_hea}</td>
                      <td class='headers'>{$smLabel.fld_empty_hea}</td>
                      <td class='headers'>{$smLabel.fld_delete_hea}</td>
                      <td class="headers">&nbsp;</td>
                    </tr>
                    {counter start=0 skip=1 print=false}
                    {section name=i loop=$smFolderList}
                    {$smFoldersList}
                    {counter print=false assign=contador}
                    <tr> {strip}
                      <td width=25px align=center class="messagelist"> {if $smFolderList[i].entry eq "inbox"}<img src="inc/themes/outlook/images/icon_folder_inbox.gif"> {elseif $smFolderList[i].entry eq "sent"}<img src="inc/themes/outlook/images/icon_folder_sent.gif"> {elseif $smFolderList[i].entry eq "trash"}<img src="inc/themes/outlook/images/icon_folder_trash.gif"> {elseif $smFolderList[i].entry eq "spam"}<img src="inc/themes/outlook/images/icon_folder_spam.gif"> {else}<img src="inc/themes/outlook/images/icon_folder_other.gif"> {/if}</td>
                      <td id="fol_{$contador}" onclick="window.location='{$smFolderList[i].chlink}'" class="messagelist" onmouseover="fol_{$contador}.className='messagelist_over';msg_{$contador}.className='messagelist_over';trs_{$contador}.className='messagelist_over';del_{$contador}.className='messagelist_over';" onmouseout="fol_{$contador}.className='messagelist';msg_{$contador}.className='messagelist';trs_{$contador}.className='messagelist';del_{$contador}.className='messagelist';"><a href="{$smFolderList[i].chlink}">{$smFolderList[i].name|escape:"html"}</a></td>
                      <td align="right" id="msg_{$contador}" onclick="window.location='{$smFolderList[i].chlink}'" class="messagelist" onmouseover="fol_{$contador}.className='messagelist_over';msg_{$contador}.className='messagelist_over';trs_{$contador}.className='messagelist_over';del_{$contador}.className='messagelist_over';" onmouseout="fol_{$contador}.className='messagelist';msg_{$contador}.className='messagelist';trs_{$contador}.className='messagelist';del_{$contador}.className='messagelist';">{$smFolderList[i].msgs}</td>
                      <td align="center" id="trs_{$contador}" class="messagelist" onmouseover="fol_{$contador}.className='messagelist_over';msg_{$contador}.className='messagelist_over';trs_{$contador}.className='messagelist_over';del_{$contador}.className='messagelist_over';" onmouseout="fol_{$contador}.className='messagelist';msg_{$contador}.className='messagelist';trs_{$contador}.className='messagelist';del_{$contador}.className='messagelist';"><a href="#" onclick="javascript:if(confirm('{$smLabel.fld_empty_hea} {$smFolderList[i].name|escape:"html"}?')) window.location='{$smFolderList[i].emptylink}'; "><acronym title="{$smLabel.fld_empty_hea}"><img src="inc/themes/outlook/images/icon_folder_trash.gif" border=0></acronym></a></td>
                      <td align="center" id="del_{$contador}" class="messagelist" onmouseover="fol_{$contador}.className='messagelist_over';msg_{$contador}.className='messagelist_over';trs_{$contador}.className='messagelist_over';del_{$contador}.className='messagelist_over';" onmouseout="fol_{$contador}.className='messagelist';msg_{$contador}.className='messagelist';trs_{$contador}.className='messagelist';del_{$contador}.className='messagelist';"> {if $smFolderList[i].entry != "inbox" and $smFolderList[i].entry != "sent" and $smFolderList[i].entry != "trash" and $smFolderList[i].entry != "spam"} <a href="#" onclick="javascript:if(confirm('{$smLabel.fld_delete_hea} {$smFolderList[i].name|escape:"html"}?')) window.location='folders.php?dummy_del=yes&delfolder={$smFolderList[i].name}&sid={$umSid}&lid={$umLid}&tid={$umTid}'; "> <acronym title="{$smLabel.fld_delete_hea}"><img src="inc/themes/outlook/images/icon_delete_mini.gif" border="0"></acronym></a>{else}&nbsp;{/if}</td>
                      <td class="messagelist" width=100%></td>
                      {/strip} </tr>
                    {/section}
                    <tr>
                      <td colspan="4" height="100%"style="background-color: #FFFFFF;"></td>
                    </tr>
                  </table></td>
              </tr>
            </table></td>
          <!-- FIN LISTA DE CARPETAS --> 
        </tr>
      </table></td>
  </tr>
    </form>

  <tr>
    <td class='info_bar'>&nbsp;</td>
  </tr>
</table>
</body>
{/if}
</html>
