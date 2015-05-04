<?php
require(dirname(__FILE__)."/"."global.php");
require_once(ROOT_PATH."inc/class.inc.php");
$Guidedb=new Guide_DB;
$Guidedb->mid=$mid;
$keyword=str_replace("%","\%",$keyword);
$keyword=trim($keyword);
$rows=20;


if(!$keyword )
{
	showerr("关键字不能为空");
}

if( $_GET[keyword] || $_POST[keyword] )
{
	$type = filtrate($type);
	$search_module=0;
	if(!$type)
	{
		$type='title';
	}
	if(!$web_admin)
	{
		if(!$groupdb[SearchArticleType]){
			showerr("你所在用户组,无权使用搜索!");
		}
		elseif($type=='content'&&$groupdb[SearchArticleType]!=2){
			showerr("你所在用户组,无权搜索文章内容!");
		}
	}

	if($_POST[keyword]&&($timestamp-$_COOKIE[searchTime]<3))
	{
		showerr("3秒钟内,请不要重复提交查询");
	}
	setcookie("searchTime",$timestamp,$timestamp+3);

	$SQL=" A.yz=1 ";
	if($mid==-1){
		$SQL.=" AND A.mid='0' ";
	}elseif($mid){
		$SQL.=" AND A.mid='$mid' ";
	}


	$SQL.=" AND BINARY A.title LIKE '%$keyword%' ";
	
	//搜索按照时间来处理-开始
	if($starttijd&&$eindtijd){
		$starttijd=preg_replace("/([\d]+)-([\d]+)-([\d]+) ([\d]+):([\d]+):([\d]+)/eis","mk_time('\\4','\\5', '\\6', '\\2', '\\3', '\\1')",$starttijd);
		$eindtijd=preg_replace("/([\d]+)-([\d]+)-([\d]+) ([\d]+):([\d]+):([\d]+)/eis","mk_time('\\4','\\5', '\\6', '\\2', '\\3', '\\1')",$eindtijd);
		if($starttijd<$eindtijd){
			$SQL.=" AND A.posttime>'$starttijd' AND A.posttime<'$eindtijd'";
		}else{
			showerr("时间格式不对");
		}
	}
	if($starttijd){
		$starttijd=preg_replace("/([\d]+)-([\d]+)-([\d]+) ([\d]+):([\d]+):([\d]+)/eis","mk_time('\\4','\\5', '\\6', '\\2', '\\3', '\\1')",$starttijd);
		$SQL.=" AND A.posttime>'$starttijd'";
	}
	if($eindtijd){
		$eindtijd=preg_replace("/([\d]+)-([\d]+)-([\d]+) ([\d]+):([\d]+):([\d]+)/eis","mk_time('\\4','\\5', '\\6', '\\2', '\\3', '\\1')",$eindtijd);
		$SQL.=" AND A.posttime<'$eindtijd'";
	}
	//搜索按照时间来处理-结束
	$search_url='';
	if($mid&&is_table("{$pre}article_content_$mid"))
	{
		$erp=$article_moduleDB[$mid][iftable]?$article_moduleDB[$mid][iftable]:'';		
		foreach( $postdb AS $key=>$value)
		{
			if( $value && table_field("{$pre}article_content_$mid",$key) )
			{
				$SQL.=" AND C.`$key`='$value' ";
				$rsdb[$key][$value]=" selected ";
				$search_module=1;
			}
			$value=urlencode($value);
			$search_url.="&postdb[{$key}]=$value";
		}
	}

	if($page<1)
	{
		$page=1;
	}
	$min=($page-1)*$rows;

	$_SQL=" AND B.topic=1 ";
	if($fid){
		$_SQL=" AND A.fid='$fid' ";
	}
	
	$_moduleSql=$_moduleSqlSearch="";
	if($search_module==1)
	{
		$_moduleSql=" LEFT JOIN {$pre}article_content_$mid C ON A.aid=C.aid ";
		$_moduleSqlSearch=" C.*, ";
	}
	
	$showpage=getpage("{$pre}article$erp A LEFT JOIN {$pre}reply B ON A.aid=B.aid $_moduleSql","WHERE $SQL $_SQL","search.php?fid=$fid&type=$type&$search_url&keyword=".urlencode($_POST[keyword]).urlencode($_GET[keyword])."",$rows);

	unset($listdb);

	$query = $db->query("SELECT {$_moduleSqlSearch}B.*,A.* FROM {$pre}article$erp A LEFT JOIN {$pre}reply B ON A.aid=B.aid $_moduleSql WHERE $SQL $_SQL ORDER BY A.aid DESC LIMIT $min,$rows");
	while($rs = $db->fetch_array($query))
	{
		$rs[posttime] = date("Y-m-d",$rs[posttime]);
		if( $webdb[path] && ($webdb[NewsMakeHtml]==1) ){
			$webdb[path]='';
		}
		$rs[url]="$webdb[www_url]$webdb[path]/bencandy.php?fid=$rs[fid]&id=$rs[aid]";
		$listdb[] = $rs;
	}
	
	if(!$listdb)
	{
		showerr("很抱歉,没有找到你要查询的内容");
	}

	
	$typedb[$type]=' selected ';
}

$typedb[$type]=" checked ";


require(ROOT_PATH."inc/head.php");
require(html($mid?"search_$mid":"search"));
require(ROOT_PATH."inc/foot.php");

//伪静态
if($webdb[NewsMakeHtml]==2)
{
	$content=ob_get_contents();
	ob_end_clean();
	ob_start();
	$content=fake_html($content);
	echo "$content";
}

//真静态
elseif($webdb[NewsMakeHtml]==1)
{
	$content=ob_get_contents();
	ob_end_clean();
	ob_start();			//备用
	$content=make_html($content,'N');
	echo "$content";
}

?>