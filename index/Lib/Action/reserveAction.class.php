<?php
class reserveAction extends Action{
	function index()
	{
		$sid = (int) $_GET['sid'];
		if ($sid > 0) {
			$supervisor = D('supervisor')->where("id = $sid")->find();
			if (empty($supervisor)) {
				$this->error('参数错误，没有该监理师！');
			}

			$supervisor['profession'] = supervisorModel::getProfession($supervisor['profession']);
			$cid = $supervisor['cid'];
			$company = D('company')->where("id = $cid")->find();
			
			$this->assign('sid', $sid);
			$this->assign('supervisor', $supervisor);
		} else {
			$cid = (int) $_GET['cid'];
			$company = D('company')->where("id = $cid")->find();
			if (empty($company)) {
				$this->error('参数错误，没有该公司！');
			}
			$this->assign('company', $company);
		}

		if ($this->isPost()) {
			$M = D('reserve');
			$param = $_POST;
			if (empty($param['name'])) {
				$this->error('请填写您的名字！');
			}
			if (empty($param['telephone'])) {
				$this->error('请填写您的电话！');
			}
			
			$param['sid'] = $sid;
			$param['cid'] = $cid;
			$param['addtime'] = time();
			if ($M->add($param)) {
				if ($sid > 0) {
					$data = array();
					if ($supervisor['last_reserve'] > strtotime(date('Y-m-01 00:00:00'))) {
						$data['reserve_month'] = $supervisor['reserve_month'] + 1;
					} else {
						$data['reserve_month'] = 1;
					}
					$data['last_reserve'] = time();
					$data['reserve_total'] = $supervisor['reserve_total'] + 1;
					
					D('supervisor')->where("id = $sid")->data($data)->save();
				}
				
				$data = array();
				if ($company['last_reserve'] > strtotime(date('Y-m-01 00:00:00'))) {
					$data['reserve_month'] = $company['reserve_month'] + 1;
				} else {
					$data['reserve_month'] = 1;
				}
				$data['last_reserve'] = time();
				$data['reserve_total'] = $company['reserve_total'] + 1;
				
				D('company')->where("id = $cid")->data($data)->save();
				
				$this->success('已成功提交预约信息！', $sid > 0 ? U('supervisor/index') : U('company/index'));
			} else {
				$this->error('信息提交失败！');
			}
		} else {
			$this->display();
		}
		
	}
}
