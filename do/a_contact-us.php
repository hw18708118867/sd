<?php

    require(dirname(__FILE__)."/"."global.php");

	$chdb[main_tpl]=html("contact_us_chat",$main_tpl);//调用标签的页面
	//$chdb[main_tpl]=html("contanct_us_join",$main_tpl);//调用标签的页面
	require(ROOT_PATH."inc/label_module.php");//标签文件
	

	require(ROOT_PATH."inc/head.php");
	
	if(!$pag){
		$pag=1;
	}
	$perNumber=4; //每页显示的记录数
	$page=($pag-1)*$perNumber; //获得当前的页面值的条数
	$count=$db->query("SELECT count(*) FROM sd_article where fid=42 "); //获得记录总数
	$rs=mysql_fetch_array($count); 
	$totalNumber=$rs[0];
	$totalPage=ceil($totalNumber/$perNumber); //计算出总页数
	
	//上一页
   $fpage=$pag-1;
   //下一页
   $lpage=$pag+1;
   // 验证页码值
   if($fpage<=0)
   	{
    	$fpage=1;
    	
  	}
  	
   if($lpage>=$totalPage)
   	{
    	$lpage=$totalPage;
    	}

/**
*获取文章
**/
$rsdb=$db->query("SELECT a.aid,a.title,a.description,a.posttime,b.content,b.fid  FROM {$pre}article a LEFT JOIN {$pre}reply b ON a.aid=b.aid where b.fid=42 order by a.aid desc limit $page,$perNumber ");

while($row= $db->fetch_array($rsdb)){
	$row[year]=date("m-d-Y",$row[posttime]);
	$arr[]=$row;
}

$onenews=$db->get_one("SELECT a.aid,a.title,a.description,a.posttime,b.content,b.fid FROM {$pre}article a LEFT JOIN {$pre}reply b ON a.aid=b.aid WHERE a.fid=42 and a.aid='$id' and b.aid='$id'");
	$rarry[]=$onenews;
	
	
	if($job==''){
		require(html("contanct_us"));
	}
	if($job=='contanct_join'){
		require(html("contanct_us_join"));
	}
	if($job=='contanct_news'){		
		require(html("contanct_us_joinnews"));	
	}
	if($job=='contanct_chat'){
		require(html("contact_us_chat"));
	}
	

?>