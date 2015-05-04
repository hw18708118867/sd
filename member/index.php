<?php
require_once(dirname(__FILE__)."/"."global.php");

if(!$lfjid){
	showerr("你还没登录");
}

if( ereg("^pwbbs",$webdb[passport_type]) &&!is_array($db_modes) ){
	@extract($db->get_one("SELECT COUNT(*) AS pmNUM FROM {$TB_pre}msg WHERE `touid`='$lfjuid' AND type='rebox' AND ifnew=1"));
}elseif( ereg("^dzbbs",$webdb[passport_type]) ){
	if($webdb[passport_type]=='dzbbs7'){
		$pmNUM=uc_pm_checknew($lfjuid);
	}else{
		@extract($db->get_one("SELECT COUNT(*) AS pmNUM FROM {$TB_pre}pms WHERE `msgtoid`='$lfjuid' AND folder='inbox' AND new=1"));
	}			
}else{
	@extract($db->get_one("SELECT COUNT(*) AS pmNUM FROM `{$pre}pm` WHERE `touid`='$lfjuid' AND type='rebox' AND ifnew='1'"));
}


//3是最高权限,2是版主权限,1是其它所有会员的权限
if($web_admin){
	$power=3;
}elseif( $db->get_one("SELECT fid FROM {$pre}sort WHERE BINARY admin LIKE '%$lfjid%' LIMIT 1") ){
	$power=2;
}else{
	$power=1;
}

preg_match("/(.*)\/(index\.php|)\?main=(.+)/is",$WEBURL,$UrlArray);
$MainUrl=$UrlArray[3]?$UrlArray[3]:"map.php?uid=$lfjuid";
if(eregi('^http',$MainUrl)&&!eregi("^$webdb[www_url]",$MainUrl)){
	showerr('URL被禁止的!');
}

unset($menudb,$base_menudb);


//设法获取后台自定义菜单
$query = $db->query("SELECT * FROM {$pre}admin_menu WHERE groupid='-$lfjdb[groupid]' AND fid=0 ORDER BY list DESC");
while($rs = $db->fetch_array($query)){
	$query2 = $db->query("SELECT * FROM {$pre}admin_menu WHERE fid='$rs[id]' ORDER BY list DESC");
	while($rs2 = $db->fetch_array($query2)){
		$menudb[$rs[name]][$rs2[name]]['link']=$rs2['linkurl'];
	}
}


//后台不存在自定义菜单,则用默认的
if(!$menudb){

	require_once(dirname(__FILE__)."/"."menu.php");

	//获取模块系统的会员菜单
	$query = $db->query("SELECT * FROM {$pre}module WHERE type=2 AND ifclose=0 ORDER BY list DESC");
	while($rs = $db->fetch_array($query)){
		$array=@include(ROOT_PATH."$rs[dirname]/member/menu.php");
		foreach($array AS $key=>$value){
			$value['link']="$webdb[www_url]/$rs[dirname]/member/".$value['link'];
			$menudb["$rs[name]"][$key]=$value;
		}
	}
}

require(get_member_tpl('index'));

//针对内网的处理,$webdb[www_url]='/.'
if($webdb[www_url]=='/.'){
	$content=str_replace('/./','/',ob_get_contents());
	ob_end_clean();
	echo $content;
}

?>