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
<form action="" method="post" name="myform" id="myform"   enctype="multipart/form-data" style="margin-top:10px;">
  <div  class="pad-10">
    <div class="col-tab">
      <ul class="tabBut cu-li">
        <li id="tab_setting_1" class="on" onclick="SwapTab('setting','on','',6,1);">基本信息</li>
   	<li id="tab_setting_2" class="" onclick="SwapTab('setting','on','',6,2);">案例</li>
      </ul>
      <div id="div_setting_1" class="contentList pad-10">
        <table width="100%" cellpadding="2" cellspacing="1" class="table_form">
          <tr>
            <th></th>
            <td></td>
          </tr>
        <tr>
          <th width="100">姓名 :</th>
          	<td>
            	<input type="text" name="name" id="name" rel="title_color" class="input-text iColorPicker" size="53" value="<?php echo ($data["name"]); ?>" /> *
			</td>
		</tr>
		<tr>
          <th width="100">所属公司 :</th>
          	<td>
            	<input type="text" name="company" id="company" rel="title_color" class="input-text iColorPicker" value="<?php echo ($data["company"]); ?>" /> *
			</td>
		</tr> 
		<tr>
          <th width="100">头像 :</th>
          	<td>
				<img src='<?php echo ($IMAGE_ROOT); echo ($data["avatar"]); ?>' width="120" height="120" />
            	<input type="file" name="avatar" id="avatar" rel="title_color" class="input-text iColorPicker" />
			</td>
		</tr>
		<tr>
            <th width="100">介绍 :</th>
            <td><textarea class="input-text iColorPicker"  style=" width:400px; height:100px" name="introduction"><?php echo ($data["introduction"]); ?></textarea>
					</td>
        </tr> 
		<tr>
          <th width="100">职位 :</th>
          	<td>
		<?php echo ($profession_options); ?> *
		</td>
		</tr> 
		<tr>
          <th width="100">联系电话 :</th>
          	<td>
            	<input type="text" name="telephone" id="telephone" rel="title_color" class="input-text iColorPicker" value="<?php echo ($data["telephone"]); ?>" />
			</td>
		</tr>          
		<tr>
		  <th>状态</th>
		  <td>显示:<input type="radio" name="status" value="1" <?php if($data["status"] == 1): ?>checked="checked"<?php endif; ?> />隐藏:<input type="radio" name="status" value="0" <?php if($data["status"] == 0): ?>checked="checked"<?php endif; ?> /></td>
		</tr>
        </table>
      </div>
	
	<div id="div_setting_2" class="contentList pad-10" style="display:none;">
		<textarea id="case_info" name="case_info" style="width:700px;height:300px;"><?php echo ($data["case_info"]); ?></textarea>
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

KE_show('case_info');

</script>
</body></html>