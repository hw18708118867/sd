<?php
require(dirname(__FILE__)."/"."global.php");
$chdb[main_tpl]=html("2_Clients",$main_tpl);//调用标签的页面
require(ROOT_PATH."inc/label_module.php");//标签文件


require(ROOT_PATH."inc/head.php");

$query=$db->query("SELECT title,picurl,aid FROM {$pre}article WHERE fid=43");
while($rs = $db->fetch_array($query)){
	$arr[]=$rs;
}

if($job=='client'){
	require(html("2_Clients"));
}
if($job==''){
	require(html("2_who"));
}
?>