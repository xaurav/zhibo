<?php /* Smarty version Smarty-3.1.12, created on 2015-08-06 15:11:49
         compiled from ".\templates\room_announce.html" */ ?>
<?php /*%%SmartyHeaderCode:1169355c3084b733812-38336820%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '979c3818e9117649336f9e2f00a164e8dbc1b4ec' => 
    array (
      0 => '.\\templates\\room_announce.html',
      1 => 1438845023,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1169355c3084b733812-38336820',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_55c3084b8ae6f9_82022031',
  'variables' => 
  array (
    'site_name' => 0,
    'cdn_domain' => 0,
    'money_name' => 0,
    'money_name2' => 0,
    'site_skin' => 0,
    'IS_SINGLE_MONEY' => 0,
    'user' => 0,
    'gift_price' => 0,
    'gift_num' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55c3084b8ae6f9_82022031')) {function content_55c3084b8ae6f9_82022031($_smarty_tpl) {?><!DOCTYPE html>
<html lang="zh-CN">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
<title>发广播 <?php echo $_smarty_tpl->tpl_vars['site_name']->value;?>
 触屏版</title>
<link rel="stylesheet" href="css/bootstrap.min.css?20141127b">
<link rel="stylesheet" href="css/font-awesome.min.css?20141127b">
<link rel="stylesheet" href="css/ectouch.css?20141127b">
<link rel="stylesheet" href="css/user.css?20141127b">
<link rel="stylesheet" href="css/photoswipe.css?20141127b">
<link rel="stylesheet" href="/css/level.css?20141127b">
<script src="/js/jquery-1.7.2.min.js" type="text/javascript"></script>
<link rel="stylesheet" href="js/jquerymobile/jquery.mobile-1.4.5.min.css?20141127b">
<!--script src="js/jquerymobile/jquery.min.js?20141127b"></script-->

<script src="js/jquerymobile/jquery.mobile-1.4.5.min.js?20141127b"></script>
<script src="js/ucenter_edit.js?20141127b"></script>
<script src="js/StageWebViewBridge.php?20141127b"></script>
<script src="/js/PCASClass.js?20141127b"></script>
<script src="js/room_face.js?20141127b"></script>
<style>
.pay_txt_font {
  line-height: 2em;
  text-align: right;
  color: #6c9dff;
  font-size: 14px;
}
.gouwu_button {
  margin: 1em 0;
}
.pay_txt {
  color: #666666;
  line-height: 2em;
}
.info_input1 {
position: relative;
}
#face {
  background-image: url("/img/new/b6.png");
  background-position: -31px -73px;
  background-repeat: no-repeat;
  display: block;
  float: left;
  height: 25px;
  margin: 0;
  vertical-align: middle;
  width: 26px;
  position: absolute;
  top: 30px;
  right: 0;
}
#faces {
  position: absolute;
  right: 0;
  top: 70px;
  background: #f6f5f5;
  padding: 5px;
}
#faces table{
width: 100%
}
#faces table img{
	width:100%;
}
</style>
<script>
var cdn_domain="<?php echo $_smarty_tpl->tpl_vars['cdn_domain']->value;?>
";
var money_name="<?php echo $_smarty_tpl->tpl_vars['money_name']->value;?>
";
var money_name2="<?php echo $_smarty_tpl->tpl_vars['money_name2']->value;?>
";
var site_skin="<?php echo $_smarty_tpl->tpl_vars['site_skin']->value;?>
";
var IS_SINGLE_MONEY="<?php echo $_smarty_tpl->tpl_vars['IS_SINGLE_MONEY']->value;?>
";
var currentUserNumber="<?php echo $_smarty_tpl->tpl_vars['user']->value['usernumber'];?>
";
var thisPage="ucenter_edit";
var userid='<?php echo $_smarty_tpl->tpl_vars['user']->value['userid'];?>
';
$(function(){
	$("#bcText").keydown( function() {
		pay_txt_fun();
	});
	$("#face").click( function() {
		$('#faces').toggle();
		pay_txt_fun();
	});
	$('#faces').html(faceHtml);
});
function sendAnnounce(){
	var k = $('#bcText').val();
	if (k.length <= 100) {
		StageWebViewBridge.call('fnCalledFromJS', null, encodeURI(k));
		return
	}
}
initFaceList(function(em){
	var id,limit;
	id='#bcText';limit=50;
	var text=$(id).val();
	var tmp=text+em;
	if(limit>=tmp.len()){
		text+=em;
	}
	$(id).val(text).focus();
	$('#faces').hide();
});
function pay_txt_fun(){
	var k = $("#bcText").val();
	if (k.length > 50) {
		$("#pay_txt_font").html("还可以输入0字");
	}else{
		$("#pay_txt_font").html("还可以输入"+(50-(k.length+1))+"字");
	}
}
</script>
</head>
<body class="ucenter">
<div class="con" data-role="page" id="">
<section class=""> 
  <div class="tab-content">
	<div class="info_input1" style="display:block;"><input data-role='none' type="text" placeholder="请输入广播内容" id="bcText" class="input_style"/><div id="face"></div></div>
	<div class="pay_txt_font" id="pay_txt_font">还可以输入50字</div>
	<div class="gouwu_button"><a href="javascript:sendAnnounce()">发布</a></div>
	<div class="pay_txt">每条广播消耗<?php echo $_smarty_tpl->tpl_vars['gift_price']->value;?>
<?php echo $_smarty_tpl->tpl_vars['money_name']->value;?>
或1个喇叭（余额：<?php echo $_smarty_tpl->tpl_vars['gift_num']->value;?>
个）</div>
	<div class="pay_txt">喇叭可通过商场购买获得，优先于<?php echo $_smarty_tpl->tpl_vars['money_name']->value;?>
消耗</div>
  </div>
</section>

<div id="faces" style="display:none;"></div>

</div>


</body>
</html><?php }} ?>