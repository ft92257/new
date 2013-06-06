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
           <div class="select_toptxt">  <a href="">线下监理 </a><a href="">> 免费预约</a></div>
           <div class="select_conleft">

	<div class="free">
       <div class="free_top">
             <span class="free_top_left">免费预约监理</span>
            <!-- <span class="free_top_right"><img src="__ROOT__/statics/index/images/ch.jpg" /></span> -->
       </div>
       <div class="free_content">
<form action="" method="post" >
	<input type="hidden" name="ref" value="<?php echo ($ref); ?>" />
            <div class="free_content_left">
                  <table width="100%" border="0" cellspacing="0" cellpadding="0">
                          <tr>
                            <td colspan="2"  class="free_dot">请填写以下信息，我们会在5分钟内与您联系</td>
                          </tr>
                          <tr>
                            <td class="free_trtd">姓名</td>
                            <td>
                              <input name="name" type="text"  class="free_input"/>
                              <input name="sex" type="radio" value="1" />女士
                              <input name="sex" type="radio" value="0" />先生
                           </td>
                          </tr>
                          <tr>
                            <td class="free_trtd">电话</td>
                            <td><input name="telephone" type="text" class="free_input" /></td>
                          </tr>
                          <tr>
                            <td class="free_trtd">期望见面时间</td>
                            <td><input name="expect_time" type="text"  class="free_input"/></td>
                          </tr>
                          <tr>
                            <td class="free_trtd">留言</td>
                            <td><textarea name="message"  class="free_txt" >&nbsp;</textarea></td>
                          </tr>
                          <tr>
                            <td>&nbsp;</td>
                            <td><input value="取消" id="free_button" type="button" onclick="history.back(-1)" /> <input id="free_button1" value="提交" type="submit" /></td>
                          </tr>
                    </table>

            </div>
</form>
            <div class="free_right">
		<?php if($sid > 0): ?><div class="free_rightimg">
                      <img src="__IMAGES__<?php echo ($supervisor["avatar"]); ?>" width=80 height=80 />
                 </div>
                  <h2><?php echo ($supervisor["name"]); ?></h2>
                 <p>[<?php echo ($supervisor["profession"]); ?>]</p>
                 <p style="margin-top:10px; padding-left:35px;">本月预约：<span><?php echo ($supervisor["reserve_month"]); ?></span><br />
                   累计预约：<span><?php echo ($supervisor["reserve_total"]); ?></span>
                 <img src="__ROOT__/statics/index/images/star.jpg" class="free_rightim" /></p>
		<?php else: ?>
			<div class="free_rightimg">
		    	<img src="__IMAGES__<?php echo ($company["logo"]); ?>" width=80 height=80 />
		    </div>
		    <h2><?php echo ($company["name"]); ?></h2>
		    <p>服务区域: <?php echo ($company["region"]); ?></p>
		    <p style="margin-top:10px; padding-left:35px;">本月预约：<span><?php echo ($company["reserve_month"]); ?></span><br />
		    累计预约：<span><?php echo ($company["reserve_total"]); ?></span>
		    </p><?php endif; ?>
            </div>
       </div>
    </div>

            </div>
          </div>
    </div>
</div>
</body>
</html>