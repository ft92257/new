<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>管理中心</title>
<link href="__ROOT__/statics/css/login.css" rel="stylesheet" type="text/css" />
</head>

<body class="login" style="overflow-x: hidden; overflow-y: auto;">
    <div id="login">
		<form id="myform" name="myform" method="post" action="<?php echo u('public/login');?>" onSubmit="return doLogin2();">
			<div id="panelbody">
				<div id="branding" class="clearfix">
					
					<a id="defaultLogoLink" href="javascript:void();"><img src="__ROOT__/statics/images/logo.jpg" /></a>
				</div>
			  <div id="panelLogin">
					<div>
						<label>Username</label>
						<input autocomplete="on" type="text" class="textbox" name="username" id="username" value="" />
					</div>
					<div>
						<label>Password</label>
						<input type="password" class="textbox" name="password" id="password" value="" />
					</div>
					<div style="clear:both;"></div>

					<div id="recaptcha_div"></div>
					<div style="clear:both;"></div>

				<div class="submit clearfix">
						<input type="submit" value="login" style='display:none;' />
						<input type="hidden" name="command" value="login" />
		
						<input type="submit" value="login now" style="position:absolute;left:-1000px;top:-1000px;"/>
						<button type=submit id="btnLogin" ><span>登陆</span></button>
				  </div>
				  <p class="lostpassword" style="visibility:hidden;">
					  <a href="javascript:emailPassword();">I forgot my password, email it to me.</a>
				  </p>
				</div>
			</div>
		</form>
		<form id="changePassForm" method="post" target="dummyIframe" action="/WebInterface/function/" onSubmit="doLogin();">
			<div id="changepasswordPanel" style="display:none;margin-bottom:10px;">
				<div class="clearfix" style="clear:both;">
					<a id="defaultLogoLink" href="javascript:void();"><img id="imgLogo" src="/WebInterface/images/ELIbadge2.png" style="border-width:0px;float:left;margin:3px 0px 10px 0px;" /></a>
				</div>
				<h2 class="popupHeader" style="clear:both;margin-top:15px;">
					Change your password
				</h2>
				<div>
					You must change your password to continue
				</div>
				<div class="buttonPanel">
					<label for="current_password">Current Password: </label><input id="current_password" class="textbox" type="password" />
					<br />
					<br />
					<label for="new_password1">New Password: </label><input id="new_password1" class="textbox" type="password" />
					<br />
					<br />
					<label for="new_password2">Confirm Password: </label><input id="new_password2" class="textbox" type="password" />
					<div style="text-align:right;margin-top:10px;">
						<a  id="btnChangePasswordCancel" class="button" href="javascript:void(0);"><span>Cancel</span></a>
						<a  id="btnChangePassword" class="button" href="javascript:void(0);"><span>Change Password</span></a>
					</div>
					<div style="clear:both"></div>
					<br />
					<hr />
					<br />
					<div>
						<a id="btnGeneratePassword" class="button" href="javascript:void(0);" style="float:left"><span>Generate password</span></a>
						<div id="passwordGeneratePanel" style="display:none;">
							<br />
							<br />
							<input id="generated_password" type="text" class="textboxSmall" style="float:left;" />
							<a id="usePassword" class="button" href="javascript:void(0);" style="float:left"><span>Use this</span></a>
							<a id="cancelPassword" class="button" href="javascript:void(0);" style="float:left"><span>Cancel</span></a>
						</div>
						<div style="clear:both"></div>
					</div>
				</div>
			</div>
		</form>
	</div>
	<div id="olderBrowserNotice" style="display:none;top:100px;padding: 10px;" class="alertMessage">
		Your browser is out of date, it was released almost a decade ago! As a result it is very slow, full of bugs, and this WebInterface may or may not even work with IE6.
		<br />
		<br />
		<div style="text-align:right;">
			<button id="proceedAnyway">Proceed Anyway Cautiously</button> or get a better browser:
			<a href="http://chrome.google.com/">Chrome</a> | <a href="http://www.getfirefox.com/">FireFox</a>
		</div>
	</div>
</body>
</html>