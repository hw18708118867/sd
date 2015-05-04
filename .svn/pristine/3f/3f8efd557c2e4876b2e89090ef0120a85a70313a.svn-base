<?php
require(dirname(__FILE__)."/"."global.php");
require(ROOT_PATH."inc/head.php");


//显示当前点击图片全部
$rsdb=$db->query("SELECT photourl,aid  from  sd_article_content_100 where aid=$aid");

while($row= $db->fetch_array($rsdb)){
	
	$arr = explode('@@@',$row[photourl]);

	$a=count($arr);
	for ($i=0; $i < $a ; $i++){ 
		if ($c=substr($arr[$i],-3)!='jpg') {
		unset($arr[$i]);
		}
		// unset($c);	
	}

}
$rsdb=$db->get_one("SELECT  a.content,b.title   from sd_reply a,sd_article b where b.aid=a.aid and b.aid=$aid ");
$ar=$rsdb;



require(html("4_anlie"));
?>