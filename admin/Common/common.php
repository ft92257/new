<?php

define('IMAGE_ROOT', '/new/data/uploads/');


function getSelectOptions($name, $arr, $val = '', $default = '') {
	$str = "<select name='$name'>\n";
	if (is_array($default)) {
		$arr = array_merge($default, $arr);
	}

	foreach ($arr as $key => $value) {
		if ($key == $val) {
			$str .= "<option value='$key' selected='selected'>$value</option>\n";
		} else {
			$str .= "<option value='$key'>$value</option>\n";
		}
	}
	$str .= "</select>\n";

	return $str;
}



function uimg($img){
	if(empty($img)){
		return SITE_ROOT."data/user/avatar.gif";
	}
	return $img;
}


   function upload($imgage, $path = '', $isThumb = false) {
        import("ORG.Net.UploadFile");
        $upload = new UploadFile();
        //�����ϴ��ļ���С
        $upload->maxSize = 3292200;
        $upload->allowExts = explode(',', 'jpg,gif,png,jpeg');
        $upload->saveRule = uniqid;
        if (empty($path)) {
            $upload->savePath =ROOT_PATH.'/data/img/';
        } else {
            $upload->savePath = ROOT_PATH.$path;
        }
        $upload->thumb = true; 
      /*  // ��������ͼƬ����·�� 
        $upload->imageClassPath = 'ORG.Util.Image'; 
        //������Ҫ�������ͼ���ļ���׺ 
        $upload->thumbPrefix = 'wm,ws,am,as';  //���2������ͼapp web 
        //��������ͼ����� 
        $upload->thumbMaxWidth = '420,157,209,115'; 
        //��������ͼ���߶� 
        $upload->thumbMaxHeight = '285,124,280,91'; 
        //�����ϴ��ļ����� 
        */
		$upload->saveRule = uniqid; 
        //ɾ��ԭͼ 

        if (!$upload->uploadOne($imgage)) {
            //�����ϴ��쳣
            $info['msg']= $upload->getErrorMsg();
        } else {
            //ȡ�óɹ��ϴ����ļ���Ϣ
            $uploadList = $upload->getUploadFileInfo();
			$info['status']=1;
			$info['data']=$uploadList;
        }
		return $info;
        
    }
	
function page($count,$length){
import("ORG.Util.Page");
$page= new Page($count,$length);
$show=$page->show();
return $show;
}

function getpage(){
$p=$_GET['p'];

return $p;
}

/**
 * 以下函数小张于2013.6.5 13:44分添加
 */

/**
 * 4、删除一个文件
 * $fileUrl 文件路径  如:/lamp/apache/htdocs/CMS/uploads/20120917/20120917203535645.jpg
 * return 删除文件是否成功  布尔值
 */
function deleteFile($_fileUrl) {
	if (!file_exists($_fileUrl)) return false;
	return unlink($_fileUrl);//删除文件，返回布尔值
}


/**
 * 格式化日期
 */
function setDateTime(&$arr,$field) {
	foreach ($arr AS $key=>$val) {
		$arr[$key][$field] = date('Y-m-d H:i:s',$val[$field]);
	}
}
