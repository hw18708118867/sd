<?php
require(dirname(__FILE__)."/"."global.php");
require(ROOT_PATH."inc/head.php");

//分页
if(!$pag){
		$pag=1;
	}
	$perNumber=4; //每页显示的记录数
	$page=($pag-1)*$perNumber; //获得当前的页面值的条数
	$count=$db->query("SELECT count(*) FROM sd_article where fid=41 "); //获得记录总数
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
$rsdb=$db->query("SELECT a.aid,a.title,a.description,a.posttime,b.content,b.fid  FROM {$pre}article a LEFT JOIN {$pre}reply b ON a.aid=b.aid where b.fid=41 order by aid desc limit $page,$perNumber ");

while($row= $db->fetch_array($rsdb)){
	$row[year]=date("m-d-Y",$row[posttime]);
	$arr[]=$row;
}



require(html("2_ournews"));

?>