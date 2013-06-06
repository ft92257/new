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

<body style="position:relative;">
<div class="select_bg">
    <div class="select_content">
           <div class="select_toptxt">  <a href="">线下监理 </a><a href="<?php echo U('company/index');?>">> 监理服务</a><a href=""> > 易监理</a><a href="#top"></a></div>
           <div class="yijianli_content">
             <div class="yijianli_left">
               <div class="yijianli_leftimg"><img src="__IMAGES__<?php echo ($company["logo"]); ?>" width=160 height=160 /></div>
                     <div class="yijianli_txt">
                       <h2><?php echo ($company["name"]); ?></h2>
                       <p class="yijianli_txtp"><?php echo ($company["info"]); ?> </p>
                       <!--<p class="yijielitxt_b">贴的话要看敲掉以后的平整度情况，如果敲掉后很不平，也是需要找平的，就我们目前来看很多装修公司在预算里面都有这</p>-->
                       <p class="yijieli_buttom">月预约量：<a href=""><?php echo ($company["reserve_month"]); ?></a><br />
                        累计预约：<a href=""><?php echo ($company["reserve_total"]); ?></a>
                         <a href="<?php echo U('reserve/index?cid='); echo ($company["id"]); ?>"><img src="__ROOT__/statics/index/images/button2.jpg" class="yijielitxtimg" /></a></p>
                      
                   </div>
                    <div class="yijieli_but"></div>
               </div>
               <div class="yijieli_right">
                     <div id="TabbedPanels1" class="TabbedPanels">
                       <ul class="TabbedPanelsTabGroup">
                               <li class="TabbedPanelsTab" tabindex="0" >特色</li>
                               <li class="TabbedPanelsTab" tabindex="0">价格</li>
                               <li class="TabbedPanelsTab" tabindex="0">流程</li>
                               <li class="TabbedPanelsTab" tabindex="0">案例</li>
                               <li class="TabbedPanelsTab" tabindex="0"  style="border-right:solid 1px #c8cdce;">联系我们</li>
                        </ul>
                        <div class="TabbedPanelsContentGroup">
                              <div class="TabbedPanelsContent"><?php echo ($company["feature_info"]); ?></div>
                              <div class="TabbedPanelsContent"><?php echo ($company["price_info"]); ?></div>
                              <div class="TabbedPanelsContent"><?php echo ($company["process_info"]); ?></div>
                              <div class="TabbedPanelsContent"><?php echo ($company["case_info"]); ?></div>
                              <div class="TabbedPanelsContent"><?php echo ($company["contact_info"]); ?></div>
                 </div>
             </div>
               </div>
           </div>
         <a href="" id="top" class="hometop"><img src="__ROOT__/statics/index/images/top.png" /></a>
          </div>
    </div> 
</div>
</body>
</html>
<script type="text/javascript">
<!--
var TabbedPanels1 = new Spry.Widget.TabbedPanels("TabbedPanels1");
//-->
    </script>