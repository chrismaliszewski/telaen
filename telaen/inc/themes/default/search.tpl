{include file=$headerTemplate pageTitle=$umLabel.sch_title}
<table cellspacing="2" cellpadding="0" border="0" align="center" bgcolor="White" width="100%">
  <tr>
    <td valign="top" width="20%"> {include file=$menuTemplate}	
      {include file=$calendarTemplate}			
      {include file=$newsTemplate} </td>
    <td valign=top><table cellspacing=1 cellpadding=1 width="100%" border=0 bgcolor=White>
        <tr>
          <td class="default" colspan="5"> {$umLabel.sch_information_text} </td>
        <tr>
          <form name="form1" action="search.php" method="post">
            <td colspan=5><table cellspacing=1 cellpadding=1 width="100%" border=0 bgcolor=White>
                <tr>
                  <td class="right" width="20%">{$umLabel.sch_from_hea}: &nbsp; 
                  <td colspan="4" class="default"><input type=text name=srcFrom value="{$umInputFrom|escape:"html"}" class="textbox" size="40" maxlength="40"></td>
                <tr>
                  <td class="right">{$umLabel.sch_subject_hea}: &nbsp; 
                  <td colspan="4" class="default"><input type=text name=srcSubject value="{$umInputSubject|escape:"html"}" class="textbox" size="40" maxlength="40"></td>
                <tr>
                  <td class="right">{$umLabel.sch_body_hea}: &nbsp; 
                  <td colspan="4" class="default"><input type=text name=srcBody value="{$umInputBody|escape:"html"}" class="textbox" size="40" maxlength="40"></td>
                <tr>
                  <td class="default">&nbsp; 
                  <td colspan="4" class="default"><input type=submit value="{$umLabel.sch_button_text}" class=button>
                    <br></td>
              </table></td>
          </form>
        <tr>
          <td colspan="5">&nbsp;</td>
          {if $umDoSearch}
        <tr>
          <td width="35"  class="headers"><img src="inc/themes/default/images/prior_high.gif" width=5 height=11 border=0 alt="">&nbsp;<img src="inc/themes/default/images/attach.gif" border="0" width="6" height="14" alt="">&nbsp;<img src="inc/themes/default/images/msg_read.gif" border="0" width="14" height="14" alt=""></td>
          <td width="200" class="headers">.: <b>{$umLabel.sch_subject_hea}</b> :.</td>
          <td width="160" class="headers">.: <b>{$umLabel.sch_from_hea}</b> :.</td>
          <td width="90" class="headers">.: <b>{$umLabel.sch_date_hea}</b> :.</td>
          <td width="140" class="headers">.: <b>{$umLabel.sch_folder_hea}</b> :.</td>
        </tr>
        {section name=i loop=$umMessageList}
        <tr>
          <td class="default">{$umMessageList[i].priorimg}{$umMessageList[i].attachimg}{$umMessageList[i].statusimg}</td>
          <td class="default">{if $umMessageList[i].read eq "false"}<b>{/if}<a href="{$umMessageList[i].readlink}">{$umMessageList[i].subject|truncate:30:"...":true|escape:"html"|default:$umLabel.no_subject_text}</a>{if $umMessageList[i].read eq "false"}</b>{/if}</td>
          <td class="default"><a href="{$umMessageList[i].composelink}">{$umMessageList[i].from|truncate:30:"...":true|escape:"html"|default:$umLabel.no_subject_text}</a></td>
          <td class="cent">{$umMessageList[i].date|date_format:$umLabel.date_format}</td>
          <td class="default">&nbsp;<a href="{$umMessageList[i].folderlink}">{$umMessageList[i].foldername|escape:"html"}</a></td>
        </tr>
        {sectionelse}
        <tr>
          <td width="100%"  class="default"  colspan="5"><center>
              <br>
              {$umLabel.sch_no_results}<br>
              <br>
            </center></td>
        </tr>
        {/section}
        {/if}
      </table></td>
  </tr>
</table>
{include file=$footerTemplate} 
