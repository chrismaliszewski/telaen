<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN">

<html>
<head>
<title>{if $webmailTitle}{$webmailTitle} - {/if}{$smCCList|escape:"html"}</title>
<meta http-equiv="Content-Type" content="text/html; charset={$smLabel.default_char_set}">
{$pageMetas}
        {$smJS}
</head>
<link rel="stylesheet" href="inc/themes/outlook/webmail.css" type="text/css">
<body>
<table width=100% height=100%>
  <tr>
    <td align=center valign=center><table class='window_outer' width='300' cellspacing="0" cellpadding="0">
        <tr>
          <td><table class='window_inner' width="100%" cellspacing="0" cellpadding="2">
              <tr>
                <td><font class=xx-normal>{$umHeaders}</font></td>
              </tr>
            </table></td>
        </tr>
      </table></td>
  </tr>
</table>
</body>
</html>
