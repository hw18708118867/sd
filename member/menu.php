<?php
!function_exists('html') && exit('ERR');

unset($base_menudb,$menudb);



$menudb['个人信息']['个人资料']['link']='userinfo.php?job=list';
$menudb['个人信息']['积分充值']['link']='money.php?job=list';
$menudb['个人信息']['安全设置']['link']='yz.php?job=list';
//$menudb['个人信息']['购买等级']['link']='buygroup.php?job=list';
$menudb['个人信息']['购买空间']['link']='buyspace.php';
$menudb['个人信息']['订单管理']['link']='shoporder.php';

 
$menudb['短内信息']['收件箱']['link']='pm.php?job=list';
$menudb['短内信息']['写消息']['link']='pm.php?job=send';

$menudb['频道功能']['发表文章']['link']='post.php?job=postnew&only=1&mid=0';
$menudb['频道功能']['管理文章']['link']='myarticle.php?job=myarticle&only=1&mid=0';

$menudb['频道功能']['发布图片']['link']='post.php?job=postnew&only=1&mid=100';
$menudb['频道功能']['管理图片']['link']='myarticle.php?job=myarticle&only=1&mid=100';

$menudb['频道功能']['发布软件']['link']='post.php?job=postnew&only=1&mid=101';
$menudb['频道功能']['管理软件']['link']='myarticle.php?job=myarticle&only=1&mid=101';

$menudb['频道功能']['发布视频']['link']='post.php?job=postnew&only=1&mid=102';
$menudb['频道功能']['管理视频']['link']='myarticle.php?job=myarticle&only=1&mid=102';

$menudb['频道功能']['发布商品']['link']='post.php?job=postnew&only=1&mid=103';
$menudb['频道功能']['管理商品']['link']='myarticle.php?job=myarticle&only=1&mid=103';

$menudb['频道功能']['发布FLASH']['link']='post.php?job=postnew&only=1&mid=104';
$menudb['频道功能']['管理FLASH']['link']='myarticle.php?job=myarticle&only=1&mid=104';

$menudb['其它功能']['收藏夹管理']['link']='collection.php?job=myarticle';
$menudb['其它功能']['专题管理']['link']='special.php?job=listsp';
$menudb['其它功能']['评论管理']['link']='comment.php?job=list';
//获取插件功能的菜单
$query = $db->query("SELECT * FROM {$pre}hack ORDER BY list DESC");
while($rs = $db->fetch_array($query)){
	if(is_file(ROOT_PATH."hack/$rs[keywords]/member_menu.php")){
		$array = include(ROOT_PATH."hack/$rs[keywords]/member_menu.php");
		$menudb['插件功能']["$array[name]"]['link']=$array['url'];
	}
}
?>