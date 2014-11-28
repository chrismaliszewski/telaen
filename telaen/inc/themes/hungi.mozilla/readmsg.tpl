{include file=$headerTemplate pageTitle=$umPageTitle|escape:"html"}

{include file=$menuTemplate refresh="false"}

{$umReplyForm}
<table cellspacing="0" cellpadding="0" border="0" align="center" bgcolor="#DDE3EB" width="100%">
  <tr>
    <td><table width="100%" border="0" cellspacing="0" cellpadding="0">
        <tr>
          <td class="default" colspan="2" height="18">&nbsp; 
            {if $umHavePrevious eq 1} <a class="menu" href="{$umPreviousLink}" title="{$umPreviousSubject}">{$umLabel.previous_mnu}</a> :: 
            {/if}
            {if $umHaveNext eq 1} <a class="menu" href="{$umNextLink}" title="{$umNextSubject}">{$umLabel.next_mnu}</a> :: 
            {/if} <a class="menu" href="javascript:goback()">{$umLabel.back_mnu}</a> :: <a class="menu" href="javascript:reply()">{$umLabel.reply_mnu}</a> :: <a class="menu" href="javascript:replyall()">{$umLabel.reply_all_mnu}</a> :: <a class="menu" href="javascript:forward()">{$umLabel.forward_mnu}</a> :: <a class="menu" href="javascript:printit()">{$umLabel.print_mnu}</a> :: <a class="menu" href="javascript:headers()">{$umLabel.headers_mnu}</a> :: <a class="menu" href="{$downloadLink}">{$umLabel.download_mnu}</a></td>
        </tr>
        <tr>
          <td colspan="2" class="separator"></td>
        </tr>
        <tr bgcolor="white">
          <td width="20%" height="18" class="headerright">{$umLabel.from_hea} &nbsp;</td>
          <td class="default" valing="middle"> {section name=i loop=$umFromList}
            &nbsp;<a href="{$umFromList[i].link}" title="{$umFromList[i].title|escape:"html"}">{$umFromList[i].name|default:#no_sender_text#|escape:"html"}</a> {/section} <a href="javascript:catch_addresses()"><img src="./themes/hungi.mozilla/images/bookmark_it.gif" title="{$umLabel.catch_address}" align="middle" alt="" /></a></td>
        </tr>
        <tr bgcolor="white">
          <td height="18" class="headerright">{$umLabel.to_hea} &nbsp;</td>
          <td class="default"> {section name=i loop=$umTOList}{if $firstto eq "no"};{/if}&nbsp;<a href="{$umTOList[i].link}" title="{$umTOList[i].title|escape:"html"}">{$umTOList[i].name|escape:"html"}</a>{assign var="firstto" value="no"}{sectionelse}&nbsp;{$umLabel.no_recipient_text}{/section} </td>
        </tr>
        {if $umHaveCC}
        <tr bgcolor="white">
          <td height="18" class="headerright">{$umLabel.cc_hea} &nbsp;</td>
          <td class="default"> {section name=i loop=$umCCList}{if $firstcc eq "no"};{/if}&nbsp;<a href="{$umCCList[i].link}" title="{$umCCList[i].title|escape:"html"}">{$umCCList[i].name|escape:"html"}</a>{assign var="firstcc" value="no"}{/section} </td>
        </tr>
        {/if}
        <tr bgcolor="white">
          <td height="18" class="headerright">{$umLabel.subject_hea} &nbsp;</td>
          <td class="default">&nbsp;{$umSubject|default:#no_subject_text#|truncate:100:"...":true|escape:"html"}</td>
        </tr>
        <tr bgcolor="white">
          <td height="18" class="headerright">{$umLabel.date_hea} &nbsp;</td>
          <td class="default">&nbsp;{$umDate|date_format:$umLabel.date_format}</td>
        </tr>
        {if $umHaveAttachments}
        <tr bgcolor="silver">
          <td class="headerright">{$umLabel.attach_hea} &nbsp;</td>
          <td><table width="100%" border="0" cellspacing="0" cellpadding="0">
              <tr height="22" bgcolor="#f1f1f1">
                <td class="headersLeft" width="60%">&nbsp; .: <b>{$umLabel.attch_name_hea}</b> ({$umLabel.attch_force_hea}) :.</td>
                <td class="headers">.: <b>{$umLabel.attch_size_hea}</b> :.</td>
                <td class="headersLeft">.: <b>{$umLabel.attch_type_hea}</b> :.</td>
              </tr>
              {section name=i loop=$umAttachList}
              <tr bgcolor="white">
                <td class="default">&nbsp;{$umAttachList[i].normlink}{$umAttachList[i].name|truncate:30:"...":true|escape:"html"}</a> {$umAttachList[i].downlink}<img src="./images/download.gif" width="12" height="12" border="0" alt="" title="Download"></a></td>
                <td class="cent">{$umAttachList[i].size} </td>
                <td class="default">{$umAttachList[i].type}</td>
              </tr>
              {/section}
            </table></td>
        </tr>
        {/if}
        <tr>
          <td colspan="2" class="default"><center>
              <table width="99%" border="2" cellspacing="1" cellpadding="0">
                <tr bgcolor="white">
                  <td width="60%"{$umBackImg}{$umBackColor}><font color="black">{$umMessageBody}</font></td>
                </tr>
              </table>
            </center></td>
        </tr>
        <tr>
          <td class="default" colspan="2" height="18"><form name="move" action="process.php" method="post">
              {$umDeleteForm}	
              &nbsp;&nbsp; <a class="menu" href="javascript:deletemsg()">{$umLabel.delete_mnu}</a> :: <a class="menu" href="javascript:movemsg()">{$umLabel.move_mnu} </a>
              <select name="aval_folders">

							{section name=i loop=$umAvalFolders}

                <option value="{$umAvalFolders[i].path|escape:"html"}">{$umAvalFolders[i].display|escape:"html"}</option>

							{/section}

              </select>
            </form></td>
        </tr>
      </table></td>
  </tr>
</table>
{include file=$footerTemplate} 