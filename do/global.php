<?php
require_once(dirname(__FILE__)."/"."../inc/common.inc.php");	//核心文件
require_once(ROOT_PATH."inc/artic_function.php");		//涉及到文章方面的函数

@include_once(ROOT_PATH."data/ad_cache.php");		//广告变量缓存文件
@include_once(ROOT_PATH."data/label_hf.php");		//标签头部与底部变量缓存文件
@include_once(ROOT_PATH."data/all_fid.php");		//全部栏目配置文件
@include_once(ROOT_PATH."data/article_module.php");	//文章系统创建出来的模型

if(!$webdb[web_open])
{
	$webdb[close_why] = str_replace("\n","<br>",$webdb[close_why]);
	showerr("网站暂时关闭:$webdb[close_why]");
}

/**
*允许哪些IP访问
**/
Limt_IP('AllowVisitIp');

$rows=intval($rows);
$ch=intval($ch);
unset($listdb,$rs);

//加载JS时的提示语,你可以换成图片,'号要加\
$Load_Msg="<img alt=\"内容加载中,请稍候...\" src=\"$webdb[www_url]/images/default/ico_loading3.gif\">";

?>