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

  <div  class="pad-10">
    <div class="col-tab">
      <ul class="tabBut cu-li">
        <li id="tab_setting_1" class="on" onclick="SwapTab('setting','on','',3,1);">样板房设置</li>
      </ul>
      <div id="div_setting_1" class="contentList pad-10">
<form action="__URL__/addexa"  method="post" >
<table>
<tr>
<th>组名</th>
<td><input name='name' width="200px" type="text" value="<?php echo ($info["name"]); ?>" /></td>
</tr>
<tr><td>风格</td>
<td>
<select name="style">
<?php if(is_array($style)): $i = 0; $__LIST__ = $style;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$val): $mod = ($i % 2 );++$i;?><option  value="<?php echo ($val["name"]); ?>"><?php echo ($val["name"]); ?></option><?php endforeach; endif; else: echo "" ;endif; ?>
</select>
</tr>
<tr>
<th>地区</th>
<td><select name="area">
<?php if(is_array($area)): $i = 0; $__LIST__ = $area;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$val): $mod = ($i % 2 );++$i;?><option  value="<?php echo ($val["area_name"]); ?>"><?php echo ($val["area_name"]); ?></option><?php endforeach; endif; else: echo "" ;endif; ?>
</select></td>
</tr>
<tr>
<th>地址</th>
<td><input type="text" name="address" value="<?php echo ($val["address"]); ?>" /></td>
</tr>
<tr>
<th>封面</th>
<td><input type="file" name="file" /><input id="img" type="hidden"name="img" /></td>
</tr>
<tr>
<th>项目介绍</th>
<td><textarea style="height:100px; width:200px"  name="intro"><?php echo ($info["intro"]); ?></textarea></td>
</tr>

<tr>
<th>参观</th>
<td>可参观<input type="radio" name="is_look" value="1" 
<?php if($info["is_look"] == 1 ): ?>checked="checked"<?php endif; ?> /> 不可<input type="radio" name="is_look" value="0"  checked="checked"/></td>
</tr>



</table>

		
      </div>
      
      </div>
      <div class="bk15"></div>
      <div class="btn"><input type="submit" value="<?php echo (L("submit")); ?>"  name="dosubmit" class="button" id="dosubmit"></div>
</form>