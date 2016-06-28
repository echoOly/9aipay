<?php

class EmptyAction extends Action{
	public function index(){
		$this->display(C('CFG_DF_THEME').':Public:404');
	}

	public function _empty(){
		header("HTTP/1.0 404 Not Found");//返回404状态码
		$this->display(C('CFG_DF_THEME').':Public:404');
	}
}
?>