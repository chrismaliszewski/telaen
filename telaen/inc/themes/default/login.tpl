{include file=$headerTemplate showLogo="false" pageTitle=#lgn_title#|escape:"html"} <br />
<br />
<br />
<table width="500" border="0" cellspacing="0" cellpadding="2" align="center">
  <tr>
    <td><img src="inc/themes/default/images/login-logo.jpg" border="0" alt="Telaen Webmail"></td>
  </tr>
  <tr>
    <td bgcolor="white"><table width="100%" border="0" cellspacing="1" cellpadding="1" align="center">
        <form name="form1" action="process.php" method="post">
          <tr>
            <td align="right" class="title" colspan="2">.: <b>{$smLabel.lgn_welcome_msg}</b> :.</td>
          </tr>
          {if $error eq "true"}
          <tr>
            <td align="center" colspan="2"><div id="errorBox"> {if $errorCode eq "0"} <b>{$smLabel.err_login_msg}:</b> {$smLabel.error_login}
                {elseif $errorCode eq "1"} <b>{$smLabel.err_system_msg}:</b> {$smLabel.error_connect}
                {elseif $errorCode eq "2"} <b>{$smLabel.err_system_msg}:</b> {$smLabel.error_retrieving}
                {elseif $errorCode eq "4"} <b>{$smLabel.err_login_msg}:</b> {$smLabel.error_session_expired}
                {else} <b>{$smLabel.err_system_msg}:</b> {$smLabel.error_other}
                {/if} </div></td>
          </tr>
          {/if}

          {if $smServerType neq "ONE-FOR-EACH"}
          <tr>
            <td align=right class="right" width="30%"><b>{$smLabel.lng_user_email}</b>: &nbsp;</td>
            <td class="default"><input id="user" tabindex="1" type="text" size="35" name="f_email" value="{$smEmail}" class="textbox" style="width:140px;"></td>
          </tr>
          {else}
          <tr>
            <td align=right class="right" width="30%"><b>{$smLabel.lng_user_name}</b>: &nbsp;</td>
            <td class="default"><input id="user" tabindex="1" type="text" size="35" name="f_user" value="{$smUser}" class="textbox" style="width:80px;">
              {if $smAvailableServers neq 0} <b>{$smServer}</b>{/if}</td>
          </tr>
          {/if}
          <tr>
            <td align=right class="right" width="30%"><b>{$smLabel.lng_user_pwd}</b>: &nbsp;</td>
            <td class="default"><input type="password" tabindex="2" size="15" name="f_pass" value="" class="textbox" style="width:80px;"></td>
          </tr>
          {if $smAllowSelectLanguage}
          <tr>
            <td align=right class="right"><b>{$smLabel.lng_language}</b>: &nbsp;</td>
            <td class="default">{$smLanguages}</td>
          </tr>
          {/if}

          {if $smAllowSelectTheme}
          <tr>
            <td align=right class="right"><b>{$smLabel.lng_theme}</b>: &nbsp;</td>
            <td class="default">{$smThemes}</td>
          </tr>
          {/if}
          <tr>
            <td class="right">&nbsp;</td>
            <td class="default"><input type="submit" name="submit" value="{$smLabel.lng_login_btn}" class="button">
              <input type="hidden" name="f_doing_login" value="1"></td>
          </tr>
          {if $umCookieState eq "1"}
          <tr>
            <td class="alert" colspan="2">{$smLabel.lng_cookie_not_enabled}</td>
          </tr>
          {elseif $umCookieState eq "2"}
          <tr>
            <td class="alert" colspan="2">{$smLabel.lng_cookie_not_valid}</td>
          </tr>
          {/if}
          <tr>
            <td class="cent" colspan="2"><a target="_blank" href="http://jimjag.github.io/telaen/" >Powered by Telaen Webmail!</a></td>
          </tr>
        </form>
      </table></td>
  </tr>
</table>
<script type="text/javascript">
//<![CDATA[ 
	// simple tip for focus the user field on page load
	document.getElementById("user").focus();
//]]> 
</script> 
{include file=$footerTemplate} 
