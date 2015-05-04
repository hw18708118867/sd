<?php
!function_exists('html') && exit('ERR');
if(!$id)
{
	showerr("ID不存在",1);
}
elseif(!$fid)
{
	showerr("FID不存在",1);
}
elseif(!$rid)
{
	showerr("RID不存在",1);
}
elseif(!$i_id)
{
	showerr("i_id不存在",1);
}

$midDB=$db->get_one("SELECT *,config AS m_config FROM {$pre}article_module WHERE id='$mid'");
if(!$midDB)
{
	showerr(" MID有误 ",1);
}

$erp=get_id_table($id);
$rsdb=$db->get_one("SELECT A.*,B.* FROM {$pre}article$erp A LEFT JOIN `{$pre}article_content_$mid` B ON A.aid=B.aid WHERE B.aid='$id' AND B.rid='$rid'");
$fidDB=$db->get_one("SELECT * FROM {$pre}sort WHERE fid='$rsdb[fid]'");

if($fidDB[admin]&&$lfjid){
	$detail=explode(",",$fidDB[admin]);
	if( in_array($lfjid,$detail) ){
		$web_admin=1;
	}
}

if($fid!=$rsdb[fid])
{
	showerr("FID有误,不一致",1);
}

if($fidDB[allowdownload]&&!$web_admin&&$lfjuid!==$rsdb[uid]){
	$detail=explode(",",$fidDB[allowdownload]);
	if( !in_array($groupdb['gid'],$detail) ){
		showerr("你所在的用户组在本栏目无权限",1);
	}
}
if($rsdb[allowdown]&&!$web_admin&&$lfjuid!==$rsdb[uid]){
	$detail=explode(",",$rsdb[allowdown]);
	if( !in_array($groupdb['gid'],$detail) ){
		showerr("你所在的用户组本文设置无权限",1);
	}
}

$m_config=unserialize($midDB[m_config]);

foreach( $m_config[field_db] AS $key=>$rs )
{
	if($rs[allowview]&&$key==$field)
	{
		$detail=explode(",",$rs[allowview]);
		if(!$web_admin&&$lfjuid!==$rsdb[uid]&&!in_array($groupdb['gid'],$detail))
		{
			if(!$lfjid){
				showerr("<font color=red>请先登录!</font>",1);
			}else{
				showerr("<font color=red>你的权限不够!</font>",1);
			}
		}
	}
}

$detail=explode("\n",$rsdb[$field]);
unset($rsdb[$field]);
list($url,$true_name,$fen,$type)=explode("@@@",$detail[$ti]);

list($TI,$Aid)=explode("\t",mymd5($_COOKIE["down_$rsdb[aid]"],'DE'));

if( !$web_admin&&$lfjuid!==$rsdb[uid]&&$fen>0 )
{
	$fen=intval($fen);
	if($Aid!=$rsdb[aid]||$TI!=$ti){
		if(get_money($lfjuid)<$fen){
			showerr("你的{$webdb[MoneyName]}不足{$fen}{$webdb[MoneyDW]}",1);
		}else{
			add_user($lfjuid,-$fen,'观看视频扣分');
			//1小时内不重复扣积分
			setcookie("down_$rsdb[aid]",mymd5("$ti\t$rsdb[aid]"),$timestamp+3600);
		}
	}	
}
elseif( !$web_admin&&$lfjuid!==$rsdb[uid]&&$rsdb[money]>0 )
{
	if($Aid!=$rsdb[aid]||$TI!=$ti){
		if(get_money($lfjuid)<$rsdb[money]){
			showerr("你的{$webdb[MoneyName]}不足{$rsdb[money]}{$webdb[MoneyDW]}",1);
		}else{
			add_user($lfjuid,-$rsdb[money],'观看视频扣分');
			//1小时内不重复扣积分
			setcookie("down_$rsdb[aid]",mymd5("$ti\t$rsdb[aid]"),$timestamp+3600);
		}
	}
}

//更新点击量
update_hits($mid,$midDB[keywords],$id,$rid,$rsdb[hits_time]);

$true_url=tempdir($url);

require_once(html("player"));


//下载与播放视频更新点击率
function update_hits($mid,$keyword,$aid,$rid,$time){
	global $lfjid,$db,$pre,$timestamp;
	if($keyword=='download'||$keyword=='mv'){
		if(date("W",$time)!=date("W",$timestamp)){
			$SQL.=",week_hits=1";
		}else{
			$SQL.=",week_hits=week_hits+1";
		}
		if(date("md",$time)!=date("md",$timestamp)){
			$SQL.=",day_hits=1";
		}else{
			$SQL.=",day_hits=day_hits+1";
		}
		if(date("m",$time)!=date("m",$timestamp)){
			$SQL.=",month_hits=1";
		}else{
			$SQL.=",month_hits=month_hits+1";
		}
		$db->query("UPDATE {$pre}article_content_{$mid} SET total_hits=total_hits+1,hits_time='$timestamp',hits_user=''$SQL WHERE aid='$aid' AND rid='$rid'");
	}
}
?>