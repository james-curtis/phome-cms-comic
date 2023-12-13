<?php
if(!defined('InEmpireCMS'))
{
	exit();
}
?><!DOCTYPE html>
<html lang="zh-cmn-Hans">
 <head>
  <meta charset="utf-8"/>
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0" />
  <meta name="renderer" content="webkit">
  <meta http-equiv="X-UA-Compatible" content="IE=Edge,chrome=1">
  <meta http-equiv="Cache-Control" content="no-siteapp" />
  <style>#applink{display:none;}</style>
  <link href="[!--news.url--]skin/css/base.css?v3=20190507" rel="stylesheet" type="text/css">
<main id="left">
     <title>帮助中心  - <?=$public_r['add_name']?></title>
</head>
<body>
<header class="tophead"><a href="javascript:history.go(-1);" class="back"></a>帮助中心
	<a href="<?=$public_r['add_waplink']?>" class="home01" id="waplink"></a>
	<a href="<?=$public_r['add_applink']?>" class="home01" id="applink"></a>
</header>
<div class="clearfix"></div>
<section class="block help tips">
<p><b class="red">提示：</b>网站客服非24小时在线，如果没有秒回，请耐心等待一下。或留言提供截图，上线后会立即为您处理并反馈信息给您。</p>
</section>
<div class="clearfix"></div>
<section class="block help kefu">
<div class="clearfix"></div>
<h1>提示：请直接发“<font class="yellow">支付宝订单截图</font>”给客服即可</h1>
<div class="clearfix"></div>
<div class="box">

<div class="text">  <?=$public_r['add_qq']?></div>
<div class="but">

</div>
<div class="clearfix"></div>
</section>
<div class="clearfix"></div>
<section class="block help">
<h2><i></i>客服处理<em>(需有付款记录截图)</em></h2>
<p>1、账号和密码都忘记了？<b>提供付款记录截图</b></p>
<p><font class="red">2、已成功付款，但没有升级VIP或阅币没有增加？</font></p>
<p class="l-10"><b>提供微信或支付宝的“付款记录”和“会员主页”截图发给网站客服</b></p>
</section>
<div class="clearfix"></div>
<section class="block help" style="margin-top:0px">
<h2><i></i>常见问题</h2>
<p>1、账号登录不上？<b>请检查账号密码输入是否正确</b></p>
<p>2、忘记登陆密码？<b>请<a href="[!--news.url--]e/member/GetPassword/" target="_blank"><font class="red">点击这里</font></a>通过绑定的邮箱找回</b></p>
<p>3、账号密码确认没有输错，却登陆不上？</p>
<p class="l-10"><b>请检查你注册时的网站地址是不是本站</b></p>
</section>

<div class="clearfix"></div>
<div style="height:100px;float:left;display:block;">&nbsp;</div>
<script type="text/javascript" src="[!--news.url--]skin/js/jquery.min.js?v2=201904"></script>
<script type="text/javascript">
if (/(iPhone|iPad|iPod|iOS|Android)/i.test(navigator.userAgent)) { $(".pc").hide();} else { $(".mob").hide(); }; 
</script>
<div class="clearfix"></div>
</main>
<div class="h50"></div>
<nav class="footnav clf">
<a href="<?=$public_r['add_waplink']?>" id="waplink"><span class="m01">首页</span></a>
<a href="<?=$public_r['add_applink']?>" id="applink"><span class="m01">首页</span></a>
<a href="[!--news.url--]cate/" id="cate"><span class="m03">分类</span></a>
<a href="[!--news.url--]top/" id="top"><span class="m02">排行</span></a >
<a href="[!--news.url--]fav/" id="fav"><span class="m05">书架</span></a>
<a href="[!--news.url--]user/" id="user"><span class="m04">我的</span><i></i></a>
</nav>
<script type="text/javascript">
if(navigator.userAgent.indexOf("Html5Plus") > -1){  
   document.writeln("<style>#waplink{display:none;}#applink{display:inline-block;}</style>");
   document.writeln("<link href=\'[!--news.url--]skin/css/html5plus.css?v3=20190507\' rel=\'stylesheet\' type=\'text/css\'>");
}  
</script>
<script src="[!--news.url--]skin/js/jquery.min.js?v2=201904" type="text/javascript"></script>
<script src="[!--news.url--]skin/js/so.js?v2=201904" type="text/javascript"></script>
<script src="[!--news.url--]skin/js/tj.js?v2=201904" type="text/javascript"></script>
<script>$(function(){$.get("[!--news.url--]e/member/login/status.php?in=1",function(a,b){1==a&&$(".footnav #user").addClass("in")})});</script>


</body>
</html>