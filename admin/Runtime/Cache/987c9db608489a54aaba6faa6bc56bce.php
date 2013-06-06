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
<div class="pad-10" id="home_panel">
	<div class="clearfix">
        <div class="col-2 fl">
            <h6>我的个人信息</h6>
            <div class="content">
                您好，<?php echo ($my_info["user_name"]); ?><br>
                所属角色：<?php echo ($role["name"]); ?> <br>
            </div>
        </div> 
        <div class="col-2 fr">
            <h6>安全提示</h6>
            <div class="content" style="color:#ff0000;">
                <?php if(is_array($security_info)): $i = 0; $__LIST__ = $security_info;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$v): $mod = ($i % 2 );++$i;?>※<?php echo ($v); ?><br/><?php endforeach; endif; else: echo "" ;endif; ?>
            </div>
        </div>               
    </div>
	<div class="clearfix">
        <div class="col-2 fl">
            <h6>系统信息</h6>
            <div class="content">
                <table class="table_panel">
                    <tbody>
                    <?php if(is_array($server_info)): $i = 0; $__LIST__ = $server_info;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$v): $mod = ($i % 2 );++$i;?><tr>
                        <th><?php echo ($key); ?>：</th>
                        <td><?php echo ($v); ?></td>
                    </tr><?php endforeach; endif; else: echo "" ;endif; ?>
                    </tbody>
                </table>
            </div>
        </div>   
        <div class="col-2 fr">
            <h6>动态</h6>
            <div class="content">
                
            </div>
        </div>         
        <div class="col-2 fr">
            <h6>关于我们</h6>
            <div class="content">
            版权所有 
            </div>
        </div>         
    </div>
</div>
</body>
</html>