<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
 <head>
	<meta charset="utf-8">
	<title>以梦为马 - 用户注册</title>
	<link rel="shortcut icon" type="image/x-icon" href="__TMPL__/resource/images/dreamcatcher.ico" />
	<link href="__TMPL__/resource/css/login.css" rel="stylesheet" type="text/css">
	

	<script type="text/javascript" src="__TMPL__/resource/js/register.js"></script>

 </head>

 <body>
  
	<div id="web">
		<div class="content">
			<div class="logo"><a href="__APP__"><img src="__TMPL__/resource/images/logo-black.png"/></a></div>
			<h1 class="logo-title">欢迎你成为我们的一员！</h1>
			<h3 class="logo-intro">勇气，信心，毅力，坚持，成功</h3>
	 
				  <div class="ng-form-area show-place" id="form-area">
							<form method="post" action="__URL__/register" id="miniLogin">
							  <div class="shake-area" id="shake_area">
								<div class="enter-area">
								  <input type="text" name="username" class="enter-item first-enter-item" id="username" placeholder="请输入用户名" autofocus required onBlur="check_username()" />
								 </div><span id="username_error" class="after_input"></span>
								<div class="enter-area">
								  <input type="text" name="email" class="enter-item last-enter-item" id="email"  placeholder="请输入邮箱" onBlur="check_email()" />
								</div><div id="email_error" class="after_input"></div>
								<div class="enter-area">
								  <input type="password" name="password" class="enter-item first-enter-item" id="password" placeholder="请输入密码"  onBlur="check_pass()"/>
								 </div><div id="pass_error" class="after_input"></div>
								<div class="enter-area">
								  <input type="password" class="enter-item last-enter-item" id="confirmpassword"  placeholder="请再输入一次密码" onBlur="check_rpass()"  />
								</div><span id="rpass_error" class="after_input"></span>
								
							  </div>
					  
							  <input class="button orange" type="submit" id="message_LOGIN_IMMEDIATELY" value="立即注册">
							  <a href="__APP__/Login/index" class="button" id="message_REGISTER" target="_blank">直接登录</a>
						  
						  
						</form>
				 </div>
		   
	 	</div>
	</div>

 </body>
</html>