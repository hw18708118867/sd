<?php
if(!$uid&&!$username)
{
	$uid=$lfjuid;
}
$uid = intval($uid);
if($uid)
{
	$rsdb = $userDB->get_info($uid);
}
elseif($username)
{
	$rsdb = $userDB->get_info($username,'name');
}

if(!$rsdb)
{
	showerr("用户不存在");
}



/*分页功能*/
$webdb[UpdatePostTime]>0 || $webdb[UpdatePostTime]=1;

unset($listdb,$i);

$query = $db->query("SELECT * FROM {$pre}fenlei_db WHERE uid='$lfjuid' ORDER BY id DESC LIMIT 0,5");
while($rs = $db->fetch_array($query))
{
	$_erp=$Fid_db[tableid][$rs[fid]];
	$rs=$db->get_one("SELECT * FROM {$pre}fenlei_content$_erp WHERE id='$rs[id]'");

	if($timestamp-$rs[posttime]<(3600*$webdb[UpdatePostTime])){
		$rs[update]='<A HREF="#" style="color:#ccc;" onclick="alert(\'距离上次更新时间'.$webdb[UpdatePostTime].'小时后,才可以进行刷新!\')">刷新</A>';
	}else{
		$rs[update]="<A HREF=\"../f/job.php?job=update&fid=$rs[fid]&id=$rs[id]\">刷新</A>";
	}
	if($rs['list']>$timestamp){
		$rs[dotop]='<A HREF="#" style="color:#ccc;" onclick="alert(\'已经置顶了\')">置顶</A>';
	}else{
		$rs[dotop]="<A HREF=\"../f/job.php?job=dotop&fid=$rs[fid]&id=$rs[id]\">置顶</A>";
	}
	$rs[pop1]="<A HREF=\"../f/job.php?job=popshow&type=1&fid=$rs[fid]&id=$rs[id]\">首页焦点</A>";	
	$rs[pop2]="<A HREF=\"../f/job.php?job=popshow&type=2&fid=$rs[fid]&id=$rs[id]\">栏目焦点</A>";
	$rs[pop3]="<A HREF=\"../f/job.php?job=popshow&type=3&fid=$rs[fid]&id=$rs[id]\">分类焦点</A>";
	$query2 = $db->query("SELECT * FROM `{$pre}fenlei_buyad` WHERE `id`='$rs[id]' AND `endtime`>'$timestamp'");
	while($rs2 = $db->fetch_array($query2)){
		if($rs2[sortid]==-1){
			$rs[pop1]='<A HREF="#" style="color:#ccc;" onclick="alert(\'已经首页焦点显示了\')">首页焦点</A>';
		}elseif($rs2[sortid]==$rs[fid]){
			$rs[pop3]='<A HREF="#" style="color:#ccc;" onclick="alert(\'已经栏目焦点显示了\')">分类焦点</A>';
		}elseif($rs2[sortid]){
			$rs[pop2]='<A HREF="#" style="color:#ccc;" onclick="alert(\'已经分类焦点显示了\')">栏目焦点</A>';
		}
	}
	$rs[picurl]=tempdir($rs[picurl]);
	$rs[posttime]=date("Y-m-d H:i:s",$rs[posttime]);
	$rs[Lurl]="../list.php?city_id=$rs[city_id]&fid=$rs[fid]";
	$rs[url]="../bencandy.php?city_id=$rs[city_id]&fid=$rs[fid]&id=$rs[id]";
	$listdb[]=$rs;
}


?>