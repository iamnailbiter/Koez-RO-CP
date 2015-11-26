<?php if (!defined('FLUX_ROOT')) exit; ?>
<?php if (!$session->isLoggedIn()): ?>      
	<form action="<?php echo $this->url('account', 'login', array('return_url' => $params->get('return_url'))) ?>" method="post">
	<input type="hidden" name="server" value="<?php echo htmlspecialchars($session->loginAthenaGroup->serverName) ?>">
	<div class="login_row_main">
		<div class="login_row">
			<table border="0" style="margin-left:8px; margin-top:8px;">
				<tr><td><input type="text" name="username" class="textClass" placeholder="&nbsp;&nbsp;Enter Username" /></td></tr>
				<tr><td><input type="password" name="password" class="textClass" placeholder="&nbsp;&nbsp;Enter Password"/></td></tr>
			</table>
		</div>
		<div class="login_btn">
			<input type="submit" value=" " class="loginBtn" /> <br/>
		</div>
	</div>
		<div class="fgtpass">
		<a href="<?php echo $this->url('account','resetpass')?>">
		Can't access your Account?
		</a>
	</div>
	</form>
<?php else:?>
	<div class="logged">
		
<table width="100%" border="0">
  <tr>
  <td align="center" style="color:#FFF; font-size:15px; font-family:Calibri;"><a style="color:#FFF" href="<?php echo $this->url('account','view')?>"><?php echo htmlspecialchars($session->account->userid) ?></a></td>
  </tr>
  <tr>
    <td align="center"><a href="<?php echo $this->url('account','logout')?>"><img src="<?php echo $this->themePath('img/logout_btn.png'); ?>" onmouseover='this.src="<?php echo $this->themePath('img/logout_btn_hover.png'); ?>"' onmouseout='this.src="<?php echo $this->themePath('img/logout_btn.png'); ?>"'  /></a></td>
  </tr>
  <tr>
    <td align="center" style="font-size:10px; color:#fff">Click your Username to view Account</td></td>
  </tr>
</table>
</div>
<?php endif?>