<?php
require(dirname(__FILE__)."/"."global.php");
require(ROOT_PATH."inc/head.php");

//分页设置
if(!$pag){
		$pag=1;
	}
$pageNume=12;//每页显示条数
$page=($pag-1)*$pageNume;//当前页面值的显示的条数
$count=$db->query("SELECT count(*) FROM sd_article WHERE fid=53 ");

$rs=mysql_fetch_array($count);//总条数

$countNume=$rs[0];
$tatlPage=ceil($countNume/$pageNume);//总页数


$fpage=$pag-1;//上一页
$lpage=$pag+1;


if ($fpage<=0) {
	$fpage=1;
}
if ($lpage>=$tatlPage) {
	$lpage=$tatlPage;
}

//查询数据库。显示图片sd_sort

// $rsdb=$db->query("SELECT fid from  sd_sort where fup=52 order by fid desc  limit $page,$pageNume");
// while ($rs=$db->fetch_array($rsdb)) {
	$r=$db->query("SELECT aid,title,posttime,picurl,fid FROM {$pre}article a  where fid=53 order by aid desc limit $page,$pageNume ");
	while ($rs=$db->fetch_array($r)) {
	$rs[year]=date("m-d-Y",$rs[posttime]);
	$rs[img]=$rs[picurl];
	$rs[title]=$rs[title];
	$arr[]=$rs;

// }
//var_dump($arr);
}
//*****************************************
$s=$pag-2;
if($s<1){
	$s=1;
}

$b=$s;
$p=$tatlPage-$pag;

if ($p>1 || $pag<4) {
	
for($ii=0;$ii<4;$ii++){		//循环到5
	$b++;
	
}
if($b>$tatlPage){	//判断总页数小于6条就循环到总页数
	$b=$tatlPage;
}
for($j=$s;$j<=$b;$j++){		//$j即当前页，如果$j小于$b，$j就循环到$b。
	
	if($j==$pag){
		 $show.="<a href='#'><span class=\"ric_span2\"><font color=red>$j</font></span></a>";
	}else{
		$show.="<a href=\"$webdb[www_url]/do/3_anlie.php?pag=$j\" title=\"第{$j}页\"><span class=\"ric_span2\">$j</span></a>";
	}
}
}
elseif($p<1 && $pag>4){

	for($ii=0;$ii<4;$ii++){		//循环到5
	$b++;
	
}
if($b>$tatlPage){	//判断总页数小于6条就循环到总页数
	$b=$tatlPage;
}
for($j=$s-2;$j<=$b;$j++){		//$j即当前页，如果$j小于$b，$j就循环到$b。

	if($j==$pag){
		$show.="<a href='#'><span class=\"ric_span2\"><font color=red>$j</font></span></a>";
	}else{
		$show.="<a href=\"$webdb[www_url]/do/3_anlie.php?pag=$j\" title=\"第{$j}页\"><span class=\"ric_span2\">$j</span></a>";
	}
}
}
elseif($p=1 && $pag>=4){

	for($ii=0;$ii<4;$ii++){		//循环到5
	$b++;
	//echo("2222");
}
if($b>$tatlPage){	//判断总页数小于6条就循环到总页数
	$b=$tatlPage;
}
for($j=$s-1;$j<=$b;$j++){		//$j即当前页，如果$j小于$b，$j就循环到$b。

	if($j==$pag){
		$show.="<a href='#'><span class=\"ric_span2\"><font color=red>$j</font></span></a>";
	}else{
		$show.="<a href=\"$webdb[www_url]/do/3_anlie.php?pag=$j\" title=\"第{$j}页\"><span class=\"ric_span2\">$j</span></a>";
	}
}

}

require(html("3_anlie"));
?>