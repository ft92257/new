<?php
class supervisorAction extends Action{
	function index()
	{
		header("Content-type:text/html;charset=utf-8");
		$M = D('supervisor');

		$f = max(1, intval($_GET['f']));
		
		$data = $M->getPageList($f);

		$this->assign('f', $f);
		$this->assign('data', $data['data']);

		import('ORG.Util.Page');
		$Page = new Page($data['count'],$data['length']);
		$show = $Page->show();
		$this->assign('page', $show);

		$this->display();

	}
	
	function supervisor() {
		$sid = intval($_GET['sid']);
		$supervisor = D('supervisor')->where("id = $sid")->find();
		if (empty($supervisor)) {
			$this->error('参数不正确，没有该监理师！');
		}
		
		$this->assign('supervisor', $supervisor);
		$this->display();
	}
}
