<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta http-equiv="X-UA-Compatible" content="IE=7" />
<link href="__ROOT__/statics/admin/css/style.css" rel="stylesheet" type="text/css"/>
<link href="__ROOT__/statics/css/dialog.css" rel="stylesheet" type="text/css" />

<script language="javascript" type="text/javascript" src="__ROOT__/statics/js/jquery/jquery-1.4.2.min.js"></script>
<script language="javascript" type="text/javascript" src="__ROOT__/statics/js/jquery/plugins/formvalidator.js"></script>
<script language="javascript" type="text/javascript" src="__ROOT__/statics/js/jquery/plugins/formvalidatorregex.js"></script>

<script language="javascript" type="text/javascript" src="__ROOT__/statics/admin/js/admin_common.js"></script>
<script language="javascript" type="text/javascript" src="__ROOT__/statics/js/dialog.js"></script>
<script language="javascript" type="text/javascript" src="__ROOT__/statics/js/iColorPicker.js"></script>

<script language="javascript">
var URL = '__URL__';
var ROOT_PATH = '__ROOT__';
var APP	 =	 '__APP__';
var lang_please_select = "<?php echo (L("please_select")); ?>";
var def=<?php echo ($def); ?>;
$(function($){
	$("#ajax_loading").ajaxStart(function(){
		$(this).show();
	}).ajaxSuccess(function(){
		$(this).hide();
	});
});

</script>
<title><?php echo (L("website_manage")); ?></title>
</head>
<body>
<div id="ajax_loading">提交请求中，请稍候...</div>
<?php if($show_header != false): if(($sub_menu != '') OR ($big_menu != '')): ?><div class="subnav">
    <div class="content-menu ib-a blue line-x">
    	<?php if(!empty($big_menu)): ?><a class="add fb" href="<?php echo ($big_menu["0"]); ?>"><em><?php echo ($big_menu["1"]); ?></em></a>　<?php endif; ?>
    </div>
</div><?php endif; endif; ?>
<script type="text/javascript"   src="__ROOT__/statics/js/kindeditor/kindeditor-min.js"></script>
<link rel="stylesheet" type="text/css" href="__ROOT__/statics/js/kindeditor/skins/default.css" />
<style>
.project_up {
	width:280px;
	
}
.project_up input{
	height:23px;
	margin:0 10px 15px 0;
}
div.allimg img {
	border:none;
	margin:0 10px 0 0;
	cursor:pointer;
	width:120px;
	height:120px;
}

</style>
<form action="" method="post" name="myform" id="myform"   enctype="multipart/form-data" style="margin-top:10px;">
  <div  class="pad-10">
    <div class="col-tab">
      <ul class="tabBut cu-li">
        <li id="tab_setting_1" class="on" onclick="SwapTab('setting','on','',6,1);">基本信息</li>

      </ul>
      <div id="div_setting_1" class="contentList pad-10">
        <table width="100%" cellpadding="2" cellspacing="1" class="table_form">
          <tr>
            <th></th>
            <td></td>
          </tr>
        <tr>
          <th width="100">项目名称:</th>
          	<td>
            	<input type="text" name="title"  rel="title_color" class="input-text iColorPicker" size="53" value="<?php echo ($info["title"]); ?>" />
			</td>
		</tr>
		<tr>
            <th width="100">项目简介 :</th>
            <td><textarea class="input-text iColorPicker"  style=" width:400px; height:100px" name="content"><?php echo ($info["content"]); ?></textarea>
			</td>
        </tr> 
		<tr>
          <th width="100">上传项目图片 :</th>
          	<td>
          		<div class="project_up">
          			<div><input type="file" name="project_img[]"  rel="title_color" class="input-text iColorPicker" /><input type="button" value="清除" class="reduce"/></div>
				</div>
				<div class="project_edit">
	          		<input type="button" value="继续添加" id="add"/>
          		</div>
            	
			</td>
		</tr>
		<tr>
          <th width="100">已上传图片 :</th>
          	<td>
          		<div class="allimg">
          			<?php if(is_array($imgs)): $i = 0; $__LIST__ = $imgs;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$img): $mod = ($i % 2 );++$i;?><img src="<?php echo (C("TMPL_PARSE_STRING.__IMAGES__")); echo ($img["url"]); ?>" data-img="<?php echo ($img["mid"]); ?>"/><?php endforeach; endif; else: echo "" ;endif; ?>
				</div>
	
			</td>
		</tr>
		
        </table>
      </div>
	
      </div>
      <div class="bk15"></div>
      <div class="btn"><input type="submit" value="<?php echo (L("submit")); ?>"  name="dosubmit" class="button" id="dosubmit"></div>

  
</form>
<script language="javascript" type="text/javascript" src="__ROOT__/statics/js/jquery/jquery-1.9.0.js"></script>
<script type="text/javascript">
function SwapTab(name,cls_show,cls_hide,cnt,cur){
    for(i=1;i<=cnt;i++){
		if(i==cur){
			$('#div_'+name+'_'+i).show();
			$('#tab_'+name+'_'+i).attr('class',cls_show);
		}else{
			$('#div_'+name+'_'+i).hide();
			$('#tab_'+name+'_'+i).attr('class',cls_hide);
		}
	}
}

function KE_show(id) {
	KE.show({
		id : id,
		imageUploadJson : "<?php echo U('company/KE_upload');?>"
	});
}



$(function () {
	
	//增加与减少修上传按钮
	(function (){
		
		//获取操作对象
		var add = $('#add');
		var allIpt = $('.project_up');
		add.click(function () {
			allIpt.append('<div><input type="file" name="project_img[]"  rel="title_color" class="input-text iColorPicker" /><input type="button" value="清除" class="reduce"/></div>');
		});
		//删除上传按钮
		$(document).delegate('.reduce','click',function (){
			var _this = $(this);
			_this.parent().remove();
		});
	})();
	
	
	//删除图片
	(function () {
		//获取操作对象
		var arrImg = $('div.allimg img');
		arrImg.click(function () {	
			var _this = $(this);
			var mid = _this.data('img');
			var status = confirm('确定要删除吗？');
			if (status == true) {
				//AJAX删除图片
				$.post('?s=/Project/delFielImg/',{
					'mid':mid
				},function(obj){
					if (obj == 1) {
						_this.remove();
					} else {
						alert('删除失败');
					}
				},'text');	
			}
		});
		
	})();
});
</script>
</body>
</html>