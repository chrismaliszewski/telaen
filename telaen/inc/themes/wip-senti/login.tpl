{config_load file=$umLanguageFile section="Login"}

<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN">
<html>
<head>
	<title>sentiMail - {#lgn_title#|escape:"html"}</title>
	<meta http-equiv="Content-Type" content="text/html; charset={$umLabel.default_char_set}">
	<link rel="stylesheet" href="inc/themes/senti/webmail.css" type="text/css">

</head>
	<body><!-- Form name used to be "form1" this has been changed for w3c compliancy-->
	<form action="process.php" method="post">		
				<table border="0" align="center" cellpadding="0" cellspacing="0">
						<tr>
							<td colspan="3" align="center"><img src="inc/themes/senti/images/globe.jpg" alt=""></td>
						</tr>
						<tr>
							<td class="topEdge" align="left"><img src="inc/themes/senti/images/rounded-top-left.gif" alt=""></td>
							<td class="topEdge" width="450"><img src="inc/themes/senti/images/top-middle.gif" alt="" height="30" width="100%" border="0"></td>
							<td class="topEdge" align="right"><img src="inc/themes/senti/images/rounded-senti-top.gif" alt=""></td>
						</tr>
						<tr>		
							<td colspan="3" class="mainLoginTable">
								<table border="0" width="450" cellspacing="5" cellpadding="5" align="center">
												{if $umServerType neq "ONE-FOR-EACH"}
												<tr>
													<td><img src="inc/themes/senti/images/user.gif" alt="username"></td>
													<td><input type=text size=20 name="f_email" value="{$umEmail}"></td>
												</tr>
												{else}
												<tr>
														<td valign="top"><img src="inc/themes/senti/images/user.gif" alt="username"></td>
														<td><input type=text name="f_user" value="{$umUser}"></td>
														<td>{if $umAvailableServers neq 0} <font color="#DDDCDC">{$umServer}</font>{/if}</td>
												</tr>
												{/if}
												<tr>
													<td><img src="inc/themes/senti/images/pass.gif" alt="password"></td>
													<td><input type=password name="f_pass" value=""></td>
													<td><input type="image" src="inc/themes/senti/images/login.gif" value="Submit" alt="Submit"></td>
												</tr>

												{if $umAllowSelectLanguage}
												<tr><td align=right class="right"><b>{$umLabel.lng_language}</b>: &nbsp;</td><td class="default">{$umLanguages}</td><td></td></tr>
												{/if}

												{if $umAllowSelectTheme}
												<tr><td align=right class="right"><b>{$umLabel.lng_theme}</b>: &nbsp;</td><td class="default">{$umThemes}</td><td></td>
												</tr>
												{/if}

								</table>
							</td>
						</tr>
						<tr>
							<td width="60" class="bottomEdge" align="left"><img src="inc/themes/senti/images/rounded-bottom-left.gif" alt=""></td>
							<td class="bottomEdge" width="450"><img src="inc/themes/senti/images/bottom-middle.gif" alt="" height="49" width="450" border="0"></td>
							<td width="60" class="bottomEdge" align="right"><img src="inc/themes/senti/images/rounded-bottom-right.gif" alt=""></td>
						</tr>
				</table>	
			</form>	
	</body>

</html>
