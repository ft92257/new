<?php
class indexAction extends Action{
	function index()
	{
		header("HTTP/1.1 404 NOT FOUND");
		die('该页面不存在！');
	}
}
