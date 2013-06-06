<?php 

/**
 * 所属人项目管理
 *
 */
class ProjectAction extends baseAction{
	 
	
/******
 * 对外方法
 */
	//主页显示
	public function index(){
		//JS导航设置
		$sid = $_GET['sid'];	//任务id
		$big_menu = array('javascript:window.top.art.dialog({id:\'add\',iframe:\'?s=/Project/add/sid/'.$sid.'\', title:\'添加项目\', width:\'700px\', height:\'600px\', lock:true}, function(){var d = window.top.art.dialog({id:\'add\'}).data.iframe;var form = d.document.getElementById(\'dosubmit\');form.click();return false;}, function(){window.top.art.dialog({id:\'add\'}).close()});void(0);', '添加项目');
		
		$Project = D('Project');	//项目表
			
		$list = $Project->show($sid);	//获取当前用户下的项目列表

		setDateTime($list,'create_time');	//格式化日期
		//HTML输出
		$ass['list'] = $list;
		$ass['big_menu']=$big_menu;
		$this->assign($ass);
		$this->display();
	}
	
	
	//添加项目
	public function add() {	
		$sid = $_GET['sid'];				//操作用户
		$Project = D('Project');			//项目表
	
		//操作用户为空验证
		if (empty($sid) || $sid=='')$this->error('操作用户不得为空');	
		
		if ($this->isPOST()) {
			if (empty($_POST['title'])) $this->error('请填写项目标题');
			if (empty($_POST['content'])) $this->error('请填写项目描述');
			$Project->create();				//搜集POST数据
			$Project->sid = $sid;			//添加用户识别信息
			$Project->create_time = time();	//创建时间
			$pid =  $Project->add();		//添加数据
			if ($pid) {	
				$this->imgUploads($pid);	//执行上传文件
				$this->success('添加成功！');
			} else {
				$this->error('添加失败请重新尝试！');
			}			
		} else {
			$this->display();
		}
	}
	
	
	//项目信息修改
	public function edit() {
		$pid = $_GET['pid'];
		$Project = D('Project');			//项目表
		$ProjectImg = D('ProjectImg');		//项目图片表
		
		
		if (empty($pid)) $this->error('操作项目为空');
		
		//数据修改
		if ($this->isPOST()) {
			if (empty($_POST['title'])) $this->error('请填写项目标题');
			if (empty($_POST['content'])) $this->error('请填写项目描述');	
			
			$this->imgUploads($pid);	//执行图片上传操作
			$Project->create();		
			$Project->edit(array('pid'=>$pid)) ? $this->success('修改成功') : $this->error('已修改');
			
		}
		
		//数据显示
		$info = $Project->getOne(array('pid'=>$pid));			//获取当前项目数据
		$imgs = $ProjectImg->show(array('pid'=>$info['pid']));	//获取当前项目下图片数据
		
		$this->assign('info',$info);
		$this->assign('imgs',$imgs);
		$this->display();	
	}
	
	
	//ajax删除图片 
	public function delFielImg() {
		$ProjectImg = D('ProjectImg');	//图片表
		$mid = $_POST['mid'];				//图片id
		$info	 = $ProjectImg->one(array('mid'=>$mid));		//获取图片信息
		if ($info) {
			if ($ProjectImg->del(array('mid'=>$info['mid']))) {	//删除一条数据
				deleteFile(C('TMPL_PARSE_STRING.__IMAGES__').$info['url']);	//删除文件
				$status = 1;
			} else {
				$status = 0;
			} 
		}
		echo $status;
	}
	
	//项目删除
	public function proDelete() {
		$Project = D('Project');			//项目表
		$data = $_POST;
		$allPid =  implode(',',$data['pid']);
		$map['pid']  = array('in',$allPid);
		$isDel = $Project->del($map);
		$isDel ? $this->success('删除成功') : $this->error ('删除失败'); 
	}

	
/*****
 * 私有功能方法
 */	
	//上传方法
	private function upload() {
		import('ORG.Net.UploadFile');
		$upload = new UploadFile();// 实例化上传类
		$upload->maxSize  = 6000000 ;// 设置附件上传大小
		$upload->allowExts  = array('jpg', 'gif', 'png', 'jpeg');// 设置附件上传类型
		$upload->savePath =  ROOT_PATH .'/data/uploads/';// 设置附件上传目录
		$upload->autoSub = true;
		$upload->subType = 'date';
		$upload->saveRule = 'uniqid';
	
		if(!$upload->upload()) {// 上传错误提示错误信息
			//$this->error($upload->getErrorMsg());
		}else{// 上传成功 获取上传文件信息
			$info =  $upload->getUploadFileInfo();
		}
	
		return $info;
	}
	
	//执行上传图片和保存图片文件
	private function imgUploads($pid){
		$ProjectImg = D('ProjectImg');		//项目图片表
		//添加图片数据
		$all = $this->upload();	//执行上传
		if (!$all) return false;
		foreach ($all AS $k=>$v) {	//写入数据库
			$ProjectImg->pid = $pid;
			$ProjectImg->url = $v['savename'];
			$ProjectImg->add();
		}
	}
	
}

/**
 public function index(){
 $big_menu = array('javascript:window.top.art.dialog({id:\'add\',iframe:\'?m=company&a=add\', title:\'添加公司\', width:\'700px\', height:\'600px\', lock:true}, function(){var d = window.top.art.dialog({id:\'add\'}).data.iframe;var form = d.document.getElementById(\'dosubmit\');form.click();return false;}, function(){window.top.art.dialog({id:\'add\'}).close()});void(0);', '添加公司');
 $M = D('company');
 $p = getpage();
 $param['page'] = $p;
 $param['length'] = 10;
 $company = $M->getlist($param);

 $ass['company']=$company['data']['data'];
 $ass['big_menu']=$big_menu;

 import('ORG.Util.Page');
 $Page = new Page($company['data']['count'],$company['data']['length']);
 $show = $Page->show();
 $ass['page'] = $show;

 $this->assign($ass);
 $this->display();
 }
 */

?>


