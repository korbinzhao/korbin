<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>以梦为马 - 用户登录</title>
<link rel="shortcut icon" type="image/x-icon" href="__TMPL__/resource/images/dreamcatcher.ico" />
<link href="__TMPL__/resource/css/login.css" rel="stylesheet" type="text/css">
</head>


<body>
  <div id="web">
 	 <div class="content">
		<div class="logo"><a href="__APP__"><img src="__TMPL__/resource/images/logo-black.png"/></a></div>
		<h1 class="logo-title">求职准备，我们在路上，fighting！</h1>
		<h3 class="logo-intro">勇气，信心，毅力，坚持，成功</h3>
		  
		</p>
	   
	   
	
		  <div class="ng-form-area show-place" id="form-area">
		   <form name="LoginForm" action="__URL__/Login" method="post" id="miniLogin">
			  <div class="shake-area" id="shake_area">
				<div class="enter-area">
				  <input type="text" name="username" class="enter-item first-enter-item" id="miniLogin_username" placeholder="请输入用户名" autofocus required />
				 </div>
				<div class="enter-area">
				  <input type="password"  name="password" class="enter-item last-enter-item" id="miniLogin_pwd"  placeholder="请输入密码" />
				</div>
			  </div>
			  
			  <input class="button orange" type="submit" id="message_LOGIN_IMMEDIATELY" value="立即登录">
			  
			  <a href="__APP__/Register/index" class="button" id="message_REGISTER" target="_blank">注册新用户</a>
			  <a style="display:none" id="redirectLink" href="" target="_top"></a>
			  <a style="display:none" id="redirectTwoPhraseLoginLink" href=""></a>
			</form>
		  </div>
	
   
	   
	  </div>
   
    
  	</div>
  </div>
</body>

</html>