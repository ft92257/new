<?php 
class ProjectImgModel extends Model{
    protected $trueTableName = 'yjl_project_img';
	
    //获取项目列表数据
    public function show($array) {
    	return $this->where($array)->select();
    }
	
    public function one($array) {
    	return $this->where($array)->find();
    }
    
    //添加一条项目
	public function add() {
		$mid = parent::add();
		if ($mid) {
			return $mid;
		} else {
			return false;
		}
	}

	public function edit() {
		
	} 
	
	//删除数据
	public function del($array) {
		return $this->where($array)->delete();
	}
	
	
}
