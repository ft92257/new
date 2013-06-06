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
<link rel="stylesheet" type="text/css" href="__ROOT__/statics/js/calendar/calendar-blue.css"/>
<script src="http://code.jquery.com/jquery-latest.js"></script>
<script type="text/javascript" src="__ROOT__/statics/js/calendar/calendar.js"></script>
<script type="text/javascript" src="__ROOT__/statics/js/jquery/plugins/jquery.imagePreview.js"></script>
<script src="__ROOT__/statics/js/jquery/jquery-1.4.2.min.js" type="text/javascript"></script>
<script type="text/javascript" src="/statics/js/cate.js"></script>

<div class="pad-10" >
   <table>
   <tr><td>地区名</td><td>排序</td></tr>
   <?php if(is_array($area)): $i = 0; $__LIST__ = $area;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$val): $mod = ($i % 2 );++$i;?><tr><td><?php echo ($val["area_name"]); ?></td><td><?php echo ($val["ordid"]); ?></td><td><a href="__URL__/areaedit?id=<?php echo ($val["area_id"]); ?>">编辑</a></td></tr><?php endforeach; endif; else: echo "" ;endif; ?>
   </table>
    <div class="btn">
    	<label for="check_box" style="float:left;">全选/取消</label>
    	<input type="submit" class="button" name="dosubmit" value="<?php echo (L("delete")); ?>" onclick="return confirm('<?php echo (L("sure_delete")); ?>')" style="float:left;margin:0 10px 0 10px;"/>
        <input type="submit" class="button" name="dosubmit" onclick="document.myform.action='<?php echo u(MODULE_NAME."/sort_order");?>'" value="<?php echo (L("sort_order")); ?>"/>
    	<input type="submit" class="button" name="dosubmit" onclick="document.myform.action='<?php echo u(MODULE_NAME."/update");?>'" value="更新"/>
    	<div  style="float:right" id="pages"><?php echo ($page); ?></div>
    </div>

    </div>
    </form>
</div>
<script language="javascript">
$(function(){
	$(".preview").preview();
});

var lang_cate_name = "商品名称";
function check(){
	if($("#myform").attr('action') == '<?php echo u("shops/delete");?>') {
		var ids='';
		$("input[name='id[]']:checked").each(function(i, n){
			ids += $(n).val() + ',';
		});

		if(ids=='') {
			window.top.art.dialog({content:lang_please_select+lang_cate_name,lock:true,width:'200',height:'50',time:1.5},function(){});
			return false;
		}
	}
	return true;
}
function status(id,type){
    $.get("<?php echo u('shops/status');?>", { id: id, type: type }, function(jsondata){
		var return_data  = eval("("+jsondata+")");
		$("#"+type+"_"+id+" img").attr('src', '__ROOT__/statics/images/status_'+return_data.data+'.gif')
	}); 
}
function likes(id){
	var likes	= $('#likes_'+id).val();
	$.get("<?php echo u('shops/likes');?>", { id: id, likes: likes }, function(json){
		//alert(likes);
	}); 
}
</script>
</body>
</html>