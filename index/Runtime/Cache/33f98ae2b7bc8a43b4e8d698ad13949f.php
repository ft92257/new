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
	<div class="select_toptxt">  <a href="">线下监理 </a><a href="<?php echo U('supervisor/index');?>">> 选监理师</a><a href=""> > <?php echo ($supervisor["name"]); ?></a><a href="#top"></a></div>
     <div class="supervising">
          <div class="supeivising_top">
                <img src="__IMAGES__<?php echo ($supervisor["avatar"]); ?>" width=120 height=120 /> 
                <div class="supeivising_top_right">
     <p><span><?php echo ($supervisor["name"]); ?></span>[<?php echo ($supervisor["profession"]); ?>]</p>
                     <div class="select_dianping"></div>
                     <p>
                       <?php echo ($supervisor["introduction"]); ?>
                     </p>
                     <p>所属建立公司：<?php echo ($supervisor["company"]); ?>   &nbsp;&nbsp;&nbsp;&nbsp;  本月预约：<?php echo ($supervisor["reserve_month"]); ?> &nbsp;     &nbsp;&nbsp;&nbsp;      累计预约：<?php echo ($supervisor["reserve_total"]); ?></p>
                                               <p>所属区域：<?php echo ($supervisor["region"]); ?>  &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;    <!--<a href="">67</a>条点评 &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp; -->     负责建立的项目：<a href=""><?php echo ($supervisor["project_count"]); ?></a>    </p>
                                             <a href="<?php echo U('reserve/index?sid='); echo ($supervisor["id"]); ?>">  <img src="__ROOT__/statics/index/images/button2.png" id="super_img"  /></a>
                 </div>
          </div>
          <div class="supeivising_bottom">
               <h2>监理项目</h2>
			   <?php if(is_array($caselist)): $i = 0; $__LIST__ = $caselist;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$val): $mod = ($i % 2 );++$i;?><div class="supeivising_bottom_one">
                   <div class="super_t"><img src="__ROOT__/statics/index/resources/jls1.jpg" /></div>
                   <div class="super_t">
                        <a href=""><img src="__ROOT__/statics/index/resources/jls10.jpg" /></a>
                        <a href=""><img src="__ROOT__/statics/index/resources/jls11.jpg" /></a>
                        <a href=""><img src="__ROOT__/statics/index/resources/jls10.jpg" /></a>
                        <a href=""><img src="__ROOT__/statics/index/resources/jls11.jpg" /></a>
                   </div>
     <div class="super_txt">
                       <h3>净胜参请</h3>
                       <p>易监理创立于1994年，汇聚大量来自统计大学的室内设计惊异昂，凭借专业的假装设计实力和惊异求精的施工记忆。
</p>
<!--<p><a href="">67</a>条点评  1523人浏览</p>-->
                   </div>
               </div><?php endforeach; endif; else: echo "" ;endif; ?>
          </div>
     </div>
</div>
</div>
</body>
</html>