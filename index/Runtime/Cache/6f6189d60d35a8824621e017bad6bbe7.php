<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta http-equiv="X-UA-Compatible" content="IE=7" />

<script language="javascript" type="text/javascript" src="__ROOT__/statics/js/jquery/jquery-1.4.2.min.js"></script>

<link href="__ROOT__/statics/index/css/common.css" rel="stylesheet" type="text/css" />
<link href="__ROOT__/statics/index/css/style.css" rel="stylesheet" type="text/css" />
<script src="__ROOT__/statics/index/SpryAssets/SpryTabbedPanels.js" type="text/javascript"></script>
<link href="__ROOT__/statics/index/SpryAssets/SpryTabbedPanels.css" rel="stylesheet" type="text/css" />

</script>
<title><?php echo ($web_title); ?></title>
</head>

<body>
<div class="select_bg">
    <div class="select_content">
           <div class="select_toptxt">  <a href="">线下监理 </a><a href="">> 服务机构</a></div>
           <div class="select_conleft">

	<?php if(is_array($data)): $i = 0; $__LIST__ = $data;if( count($__LIST__)==0 ) : echo "还没有任何记录！" ;else: foreach($__LIST__ as $key=>$val): $mod = ($i % 2 );++$i;?><div class="services_o">
                    <div class="services_left"><a href="<?php echo U('company/company?cid='); echo ($val["id"]); ?>"><img src="__IMAGES__<?php echo ($val["logo"]); ?>" width="160" heigth="160" /></a></div>
                    <div class="services_right">
                        <h2><?php echo ($val["name"]); ?></h2>
                        <p><?php echo ($val["info"]); ?></p>
               		<div class="services_rightt">
                         <img src="__ROOT__/statics/index/images/anli.gif" />
                         <a href=""><img src="resources/yjlt1.png" /></a>
                         <a href=""><img src="resources/yjlt1.png" /></a>
                         <a href=""><img src="resources/yjlt1.png" /></a>
                         <a href=""><img src="resources/yjlt1.png" /></a>
                         <a href=""><img src="resources/yjlt1.png" /></a>
                         <a href=""><img src="resources/yjlt1.png" /></a>
                    	</div>
                    	<div id="service_rig">
                         <p>月预约量：<?php echo ($val["reserve_month"]); ?><br />
                           累计预约量：<?php echo ($val["reserve_total"]); ?>
                         <a href="<?php echo U('reserve/index?cid='); echo ($val["id"]); ?>"> <img src="__ROOT__/statics/index/images/button2.jpg" /></a></p>
                   	</div>
                   </div>
               </div><?php endforeach; endif; else: echo "还没有任何记录！" ;endif; ?>
	<div id="pages"><?php echo ($page); ?></div>

            </div>
          </div>
    </div>
</div>
</body>
</html>