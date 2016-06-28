<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title><?php echo (C("CFG_SUBTITLE")); ?> 博客管理系统 By <?php echo (C("CFG_AUTHOR")); ?></title>
<link rel="shortcut icon" href="/favicon.ico" type="image/x-icon" />
<link rel="bookmark" href="/favicon.ico" type="image/x-icon"/>
<link href="__PUBLIC__/admin/style/frame.css" rel="stylesheet" type="text/css" />
<link href="__PUBLIC__/admin/style/style.css" rel="stylesheet" type="text/css" />
<script type="text/javascript" language="javascript" src="__PUBLIC__/common/jquery/jquery.js"></script>
<script type="text/javascript" language="javascript" src="__PUBLIC__/admin/js/common.js"></script>
<script language="javascript" type="text/javascript">
	window.onload=function (){
		setInterval("$Id('time').innerHTML=new Date().toLocaleString()+' 星期'+'日一二三四五六'.charAt(new Date().getDay());",1000);
	}
	
	$(document).ready(function(){
		$("#togglemenu").click(function(){
			if($("body").attr("class")=="showmenu"){
				$("body").attr("class","hidemenu");
				$(this).html("显示菜单");
			}else{
				$("body").attr("class","showmenu");
				$(this).html("隐藏菜单");
			}
		});
	});
</script>
</head>
<body class="showmenu">

<div class="head">
  <div class="top">
    <div class="top_logo"><div id="time"></div></div>
    <div class="top_link">
      <div style="color:#fff;float:left;margin:2px 10px 5px 0px"><h2><?php echo (C("CFG_SUBTITLE")); ?></h2></div>
      <ul>
        <li class="welcome">您好：<?php echo ($username); ?></li>
        <li><a href="__GROUP__/Index/menu" target="menu">主菜单</a></li>
        <li><a href="__GROUP__/Article/add" target="main">创建博文</a></li>
        <li><a href="__GROUP__/Index/main" target="main" >系统主页</a></li>
        <li><a href="__ROOT__/" target="_blank">网站主页</a></li>
        <li><a href="__GROUP__/Users/pwd" target="main">修改密码</a></li>
        <li><a href='javascript:sdel("__GROUP__/Public/logOut","确定要退出吗？");' target="_top">注销</a></li>
      </ul>
    </div>
  </div>
  <div class="topnav">
    <div class="menuact"> <a href="#" id="togglemenu">隐藏菜单</a></div>
</div>
</div>
<div class="left">
  <div class="menu" id="menu">
    <iframe src="__GROUP__/Index/menu" id="menufra" name="menu" frameborder="0"></iframe>
  </div>
</div>
<div class="right">
  <div class="main">
    <iframe id="main" name="main" frameborder="0" src="__GROUP__/Index/main"></iframe>
  </div>
</div>

</body>
</html>