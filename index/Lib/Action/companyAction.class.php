<?php 
class companyAction extends Action{
	function index(){
		$M = D('company');
		$company = $M->getlist();

		$ass['data']=$company['data']['data'];

		import('ORG.Util.Page');
		$Page = new Page($company['data']['count'],$company['data']['length']);
		$show = $Page->show();
		$ass['page'] = $show;

		$this->assign($ass);
		$this->display();
	}
	
	function company() {
		$cid = intval($_GET['cid']);
		$company = D('company')->where("id = $cid")->find();
		if (empty($company)) {
			$this->error('参数不正确，没有该公司！');
		}
		
		$this->assign('company', $company);
		$this->display();
	}

}
