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
<div class="pad_10">
    <form action="<?php echo u('node/add');?>" method="post" name="myform" id="myform">
        <table width="100%" cellpadding="2" cellspacing="1" class="table_form">
            <tr>
                <th width="100">模型 :</th>
                <td><input type="text" name="module" id="module" class="input-text"></td>
            </tr>
            <tr>
                <th>模型名称 :</th>
                <td><input type="text" name="module_name" id="module_name" class="input-text"></td>
            </tr>
            <tr>
                <th>操作 :</th>
                <td><input type="text" name="action" id="action" class="input-text"></td>
            </tr>
            <tr>
                <th>操作名称 :</th>
                <td><input type="text" name="action_name" id="action_name" class="input-text"></td>
            </tr>
            <tr>
                <th>节点类型 :</th>
                <td><select name="auth_type">
                        <option value="0">模块</option>
                        <option value="1">菜单</option>
                        <option value="2">操作</option>
                    </select></td>
            </tr>
            <tr>
                <th>分组 :</th>
                <td><select name="group_id">
                        <?php if(is_array($group_list)): $i = 0; $__LIST__ = $group_list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$val): $mod = ($i % 2 );++$i;?><option value="<?php echo ($val["id"]); ?>"><?php echo ($val["title"]); ?></option><?php endforeach; endif; else: echo "" ;endif; ?>
                    </select></td>
            </tr>
            <tr>
                <th>参数 :</th>
                <td><input type="text" name="data" id="data" class="input-text"></td>
            </tr>
            <tr>
                <th>排序 :</th>
                <td><input type="text" name="sort" id="sort" class="input-text" onkeyup="value=value.replace(/[^\d]/g,'')"onbeforepaste="clipboardData.setData('text',clipboardData.getData('text').replace(/[^\d]/g,''))"></td>
            </tr>
            <tr>
                <th>描述 :</th>
                <td><textarea name="remark" cols="40" rows="4"></textarea></td>
            </tr>
            <tr>
                <th>状态 :</th>
                <td><input type="radio" name="status" class="radio_style" value="1" checked="checked" >
                    &nbsp;有效&nbsp;&nbsp;&nbsp;
                    <input type="radio" name="status" class="radio_style" value="0">
                    &nbsp;禁用 </td>
            </tr>
        </table>
        <input type="submit" name="dosubmit" id="dosubmit" class="dialog" value=" ">
    </form>
</div>
</body></html>