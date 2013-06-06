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
<script type="text/javascript" src="__ROOT__/statics/js/ckeditor/ckeditor.js" ></script> 
<link rel="stylesheet" type="text/css" href="__ROOT__/statics/js/kindeditor/skins/default.css" />
<form action="?s=/Websize/edit" method="post" name="myform" id="myform" enctype="multipart/form-data" style="margin-top:10px;">
  <div  class="pad-10">
    <div class="col-tab">
      <ul class="tabBut cu-li">
        <li id="tab_setting_1" class="on" onclick="SwapTab('setting','on','',6,1);">家装监理师</li>
   	   	<li id="tab_setting_2" class="" onclick="SwapTab('setting','on','',6,2);">工装监理师</li>
		<li id="tab_setting_3" class="" onclick="SwapTab('setting','on','',6,3);">为什么选择监理师傅</li>
      </ul>
	  
     <div id="div_setting_1" class="contentList pad-10">
		<textarea id="KE_2" name="houser" style="width:700px;height:300px;"><?php echo ($info["houser"]); ?></textarea>
     </div>
	
	<div id="div_setting_2" class="contentList pad-10" style="display:none;">
		<textarea id="KE_3" name="worker" style="width:700px;height:300px;"><?php echo ($info["worker"]); ?></textarea>
	</div>

	<div id="div_setting_3" class="contentList pad-10" style="display:none;">
		<textarea id="KE_4" name="why" style="width:700px;height:300px;"><?php echo ($info["why"]); ?></textarea>
	</div>

      </div>
      <div class="bk15"></div>
      <div class="btn"><input type="submit" value="<?php echo (L("submit")); ?>"  name="dosubmit" class="button" id="dosubmit"></div>

  
</form>
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

KE_show('KE_2');
KE_show('KE_3');
KE_show('KE_4');
</script>
</body></html>