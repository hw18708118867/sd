<?php
require(dirname(__FILE__)."/"."global.php");

$chdb[main_tpl]=html("chuanbo",$main_tpl);//调用标签的页面
require(ROOT_PATH."inc/label_module.php");//标签文件

require(ROOT_PATH."inc/head.php");
require(html("chuanbo"));

?>