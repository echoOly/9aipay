<?php

	define('ROOTPATH', dirname(__FILE__));
	
	//开启调试模式
	define('APP_DEBUG',true);
	define('APP_NAME','Admin');
	//引入入口文件
	define('APP_PATH',ROOTPATH.'/Admin/');
	define('PAY_PATH',ROOTPATH.'/core/');
	require(PAY_PATH.'ThinkPHP.php');
?>