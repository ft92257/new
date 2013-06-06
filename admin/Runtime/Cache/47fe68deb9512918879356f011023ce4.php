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
<div class="pad-lr-10">
    <div class="table-list">
    <table width="100%" cellspacing="0">
        <thead>
            <tr>
                <th width=60>编号</th>
                <th width=100>公司</th>
                <th width=60>监理师</th>
                <th width=60>联系人</th>
                <th width=60>电话</th>
				<th width=80>期望见面时间</th>
				<th>详细内容</th>
				<th width=80>下单时间</th>
				<th width=60>状态</th>
                <th width=80>操作</th>
            </tr>
        </thead>
    	<tbody>
        <?php if(is_array($list)): $i = 0; $__LIST__ = $list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$val): $mod = ($i % 2 );++$i;?><tr>
            <td align="center"><?php echo ($val["id"]); ?></td>
            <td align="center"><?php echo ($val["company"]); ?></td>
            <td align="center"><?php echo ($val["supervisor"]); ?></td>
            <td align="center"><?php echo ($val["name"]); ?></td>
			<td align="left"><?php echo ($val["telephone"]); ?></td>
			<td align="center"><?php echo ($val["expect_time"]); ?></td>
			<td align="center"><?php echo ($val["message"]); ?></td>
			<td align="left"><?php echo ($val["addtime"]); ?></td>
            <td align="center" id="status_<?php echo ($val["id"]); ?>"><img src="__ROOT__/statics/images/status_<?php echo ($val["status"]); ?>.gif" /><?php if($val["status"] == 1): ?>已处理<?php else: ?>未处理<?php endif; ?></td>
            <td align="left"><a href="<?php echo U('reserve/status?status=0&id='); echo ($val["id"]); ?>" style=" text-decoration:underline;">取消</a> &nbsp;&nbsp;<a href="<?php echo U('reserve/status?status=1&id='); echo ($val["id"]); ?>" style=" text-decoration:underline;">处理完成</a></td>
        </tr><?php endforeach; endif; else: echo "" ;endif; ?>
    	</tbody>
    </table>

    <div class="btn">
		<div id="pages"><?php echo ($page); ?></div>
    </div>
    </div>
</div>
</body>
</html>