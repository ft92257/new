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
           <div class="select_toptxt">  <a href="">线下监理 </a><a href="">> 选监理师</a></div>
           <div class="select_conleft">
                <div id="TabbedPanels1" class="TabbedPanels">
                	<ul class="TabbedPanelsTabGroup">
                               <a href="<?php echo U('supervisor/index?f=1');?>"><li class="TabbedPanelsTab <?php if($f == 1): ?>TabbedPanelsTabSelected<?php endif; ?>" tabindex="0" >工装监理师</li></a>
                               <a href="<?php echo U('supervisor/index?f=2');?>"><li class="TabbedPanelsTab <?php if($f == 2): ?>TabbedPanelsTabSelected<?php endif; ?>" tabindex="0">别墅监理师</li></a>
                               <a href="<?php echo U('supervisor/index?f=3');?>"><li class="TabbedPanelsTab <?php if($f == 3): ?>TabbedPanelsTabSelected<?php endif; ?>" tabindex="0">公寓监理师</li></a>
                               <a href="<?php echo U('supervisor/index?f=4');?>"><li class="TabbedPanelsTab <?php if($f == 4): ?>TabbedPanelsTabSelected<?php endif; ?>" tabindex="0">预算师</li></a>
                               <a href="<?php echo U('supervisor/index?f=5');?>"><li class="TabbedPanelsTab <?php if($f == 5): ?>TabbedPanelsTabSelected<?php endif; ?>" tabindex="0">验房师</li></a>
                               <a href="<?php echo U('supervisor/index?f=6');?>"><li class="TabbedPanelsTab <?php if($f == 6): ?>TabbedPanelsTabSelected<?php endif; ?>" id="tabpat" tabindex="0" style="border-right:solid 1px #c8cdce;">维权律师</li></a>
                    </ul>
                    <div class="TabbedPanelsContentGroup">
                              <div class="TabbedPanelsContent">
								<?php if(is_array($data)): $i = 0; $__LIST__ = $data;if( count($__LIST__)==0 ) : echo "还没有任何记录！" ;else: foreach($__LIST__ as $key=>$val): $mod = ($i % 2 );++$i;?><div class="select_p">
                                      <div class="select_pleft">
                                          <a href="<?php echo U('supervisor/supervisor?sid='); echo ($val["id"]); ?>"> <img src="__IMAGES__<?php echo ($val["avatar"]); ?>" width=120 height=120 /></a>
                                          <a href="<?php echo U('reserve/index?sid='); echo ($val["id"]); ?>"><img src="__ROOT__/statics/index/images/button1.jpg" /></a>
                                      </div>
                                      <div class="select_pright">
                                        <p><span class="select_pright-span"><?php echo ($val["name"]); ?></span>[<?php echo ($val["profession"]); ?>]</p>
                                        <div class="select_dianping"></div>
                                           <p><?php echo ($val["introduction"]); ?></p>
                                           <p>所属监理公司：<?php echo ($val["company"]); ?>   &nbsp;&nbsp;&nbsp;&nbsp;  本月预约：<?php echo ($val["reserve_month"]); ?> &nbsp;     &nbsp;&nbsp;&nbsp;      累计预约：<?php echo ($val["reserve_total"]); ?></p>
                                           <p>所属区域：<?php echo ($val["region"]); ?>  &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;     <!--<a href="">67</a>条点评--> &nbsp;&nbsp;&nbsp;&nbsp;      负责建立的项目：<a href=""><?php echo ($val["project_count"]); ?></a>    </p>
                                           <div class="select_diantu"><img src="<?php echo ($val["images"]["0"]); ?>" /><img src="<?php echo ($val["images"]["1"]); ?>" /></div>
                                           <div class="select_diantu"><img src="<?php echo ($val["images"]["2"]); ?>" /><img src="<?php echo ($val["images"]["3"]); ?>" /></div>
                                           <div class="select_diantu"><img src="<?php echo ($val["images"]["4"]); ?>" /><img src="<?php echo ($val["images"]["5"]); ?>" /></div>
                                      </div>
                                      
                                 </div><?php endforeach; endif; else: echo "还没有任何记录！" ;endif; ?>
								<div id="pages"><?php echo ($page); ?></div>
                              </div>
<!--
                              <div class="TabbedPanelsContent">内容 2</div>
                              <div class="TabbedPanelsContent">内容 3</div>
                              <div class="TabbedPanelsContent">内容 4</div>
                              <div class="TabbedPanelsContent">内容5</div>
                              <div class="TabbedPanelsContent">内容6</div>-->
                 </div>
             </div>
          </div>
    </div>
</div>
<script type="text/javascript">
<!--
//var TabbedPanels1 = new Spry.Widget.TabbedPanels("TabbedPanels1");
//-->
    </script>
</body>
</html>