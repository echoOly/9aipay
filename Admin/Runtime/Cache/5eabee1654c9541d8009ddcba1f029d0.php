<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "/www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="/www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title><?php echo (C("CFG_SUBTITLE")); ?> 博客管理系统 By <?php echo (C("CFG_AUTHOR")); ?></title>
<link href="__PUBLIC__/admin/style/login.css" rel="stylesheet" type="text/css" />
<link rel="shortcut icon" href="/favicon.ico" type="image/x-icon" />
<link rel="bookmark" href="/favicon.ico" type="image/x-icon"/>
</head>
<body>
<div class="content">
  <div class="art-rpybox">
    <h3 class="psth">登陆</h3>
    <div class="ds-rpybox">
      <ul id="J_art_comments"></ul>
      <div class="ds-paginator" style="display:none" id="J_article_com"></div>
    </div>
    <div class="art-form" style="margin-top:20px">
      <form method='post' name="login" id="loginform" action="__URL__/checkLogin">
        <p>
          <label>用户名:</label>
          <input name="username" type="text" id="username"/>
        </p>
        <p>
          <label>密&nbsp;&nbsp;&nbsp;码:</label>
          <input type="password" name="pwd" id="pwd" />
        </p>
        <p>
          <label>验  证  码：</label>
          <input name="verify" type="text" class="v" onkeydown="keydown(event)" id="verify" />
          <img class="ci" id="verifyImg" src="__URL__/verify/" onclick="show(this);" alt="点击刷新验证码" title="点击刷新验证码" />
        </p>
        <button class="ds-post-button" type="submit">登陆</button>
      </form>
    </div>
    <p class="c">
      <a href="__ROOT__/">网站首页</a>
    </p>
    <p class="c">版权所有(C) <?php echo (C("CFG_POWERBY")); ?></p>
  </div>
</div>
<script language="JavaScript">
function keydown(e){
	var e = e || event;
	if (e.keyCode==13){
		document.login.submit();
	}
}
function show(obj){
  obj.src="__URL__/verify/random/"+Math.random();
}
document.login.username.focus();
</script>
</body>
</html>