<?php
	// if(!file_exists('./install/installed.lock') && is_dir('./install/')){
	// 	header('location:install/index.php');
	// 	exit();
	// }
	
	define('ROOTPATH', dirname(__FILE__));
	
	//开启调试模式
	define('APP_DEBUG',true);
	define('APP_NAME','Home');
	//引入入口文件
	define('APP_PATH',ROOTPATH.'/Home/');

	define('THINK_PATH',ROOTPATH.'/core/');
        require(THINK_PATH.'ThinkPHP.php');
