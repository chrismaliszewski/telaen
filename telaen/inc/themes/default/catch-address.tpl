{include file=$popupHeaderTemplate pageTitle=#ctc_title# }

<body>
<div id="popup">
  <div id="logo"> <img src="images/telaen_logo.jpg" width="310" height="73" alt="logo"> </div>
  <form name="form1" action="catch.php" method="post">
    <input type="hidden" name="ix" value="{$umIx}">
    <input type="hidden" name="folder" value="{$umFolder|escape:"html"}">
    <table width="100%" border="0" cellspacing="0" cellpadding="2" align="center">
      <tr>
        <td class=default  width="100%" colspan="2" align=center><b>{$umLabel.ctc_information}</b><br>
          <br></td>
      </tr>
      {if $umAvailableAddresses gt 0 }
      <tr>
        <td class=headers width="60%"><b>{$umLabel.ctc_name}</b></td>
        <td class=headers><b>{$umLabel.ctc_email}</b></td>
      </tr>
      {section name=i loop=$umAddressList}
      <tr>
        <td class="default" valign="top"><input type="checkbox" name="ckaval[]" checked value={$umAddressList[i].index}>
          {$umAddressList[i].name|truncate:30:"...":true|escape:"html"}</td>
        <td class="default">{$umAddressList[i].mail}</td>
      </tr>
      {/section}
      <tr>
        <td class="cent" colspan="2"><br>
          <br>
          <input type="submit" name="submit" class="button" value="{$umLabel.ctc_save}"></td>
      </tr>
      {else}
      <tr>
        <td class="cent">{$umLabel.ctc_no_address}</td>
      </tr>
      <tr>
        <td class="cent"><br>
          <br>
          <a href="javascript:self.close()">{$umLabel.ctc_close}</a></td>
      </tr>
      {/if}
    </table>
  </form>
</div>
</body>
</html>