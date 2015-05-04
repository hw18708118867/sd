<?php
error_reporting(7);
set_magic_quotes_runtime(0);
unset($_GET['FileName'],$_POST['FileName'],$_COOKIE['FileName'],$_FILES['FileName']);
if(function_exists('date_default_timezone_set')){date_default_timezone_set('Hongkong');}

$speed_headtime=explode(' ',microtime());
$speed_headtime=$speed_headtime[0]+$speed_headtime[1];

if(PHP_VERSION < '4.1.0') {
	$_GET = &$HTTP_GET_VARS;
	$_POST = &$HTTP_POST_VARS;
	$_COOKIE = &$HTTP_COOKIE_VARS;
	$_SERVER = &$HTTP_SERVER_VARS;
	$_ENV = &$HTTP_ENV_VARS;
	$_FILES = &$HTTP_POST_FILES;
}


$_POST=Add_S($_POST);
$_GET=Add_S($_GET);
$_COOKIE=Add_S($_COOKIE);

function Add_S($array){
	foreach($array as $key=>$value){
		@eregi("['\\\"&]+",$key) && die('ERROR KEY!');
		if(!is_array($value)){			
			$value=str_replace("&#x","& # x",$value);	//过滤一些不安全字符
			$value=preg_replace("/eval/i","eva l",$value);	//过滤不安全函数
			$array[$key]=addslashes($value);
			!get_magic_quotes_gpc() && $value=addslashes($value);
			$array[$key]=$value;
		}else{
			$array[$key]=Add_S($array[$key]); 
		}
	}
	return $array;
}

if(!ini_get('register_globals')){
	@extract($_FILES,EXTR_SKIP);
}

foreach($_COOKIE AS $_key=>$_value){
	unset($$_key);
}
foreach($_POST AS $_key=>$_value){
	!ereg("^\_[A-Z]+",$_key) && $$_key=$_POST[$_key];
}
foreach($_GET AS $_key=>$_value){
	!ereg("^\_[A-Z]+",$_key) && $$_key=$_GET[$_key];
}

define('WEB_LANG','utf-8');		//utf-8 gb2312 big5
define('ROOT_PATH', substr(dirname(__FILE__), 0, -4).'/');
define('PHP168_PATH', ROOT_PATH);	//兼容旧程序


ob_start();		//ob_start('ob_gzhandler');


isset($page) && $page = intval($page);
isset($id) && $id = intval($id);
isset($aid) && $aid = intval($aid);
isset($rid) && $rid = intval($rid);
isset($fid) && $fid = intval($fid);
isset($cid) && $cid = intval($cid);
isset($cityid) && $cityid = intval($cityid);
$mid!='' && $mid = intval($mid);
isset($pid) && $pid = intval($pid);
isset($tid) && $tid = intval($tid);
isset($rows) && $rows = intval($rows);
isset($leng) && $leng = intval($leng);
isset($uid) && $uid = intval($uid);
isset($city_id) && $city_id = intval($city_id);
isset($zone_id) && $zone_id = intval($zone_id);
isset($street_id) && $street_id = intval($street_id);
check_parameter();
function check_parameter(){
	$array_key = array('typeid','iframeID','job','jobs','ad_id','styletype','type','psid','TagId','u');
	foreach($_GET AS $key=>$value){
		if($value!='' && in_array($key,$array_key) && !eregi("^([-_0-9a-z]+)$",$value)){
			die("$value<br>Parameter is error!");
		}		
	}
	foreach($_POST AS $key=>$value){
		if($value!='' && in_array($key,$array_key) && !eregi("^([-_0-9a-z]+)$",$value)){
			die("$value<br>Parameter is error!");
		}		
	}
}
if(!defined('IS_ADMIN'))unset($listdb,$array,$rs);
unset($label_hf,$label,$webdb,$Html_Type,$erp,$ltitle,$memberlevel,$showHtml_Type,$chdb,$fidDB,$rsdb,$ModuleDB,$city_DB,$Mdomain,$Murl,$choose_class,$foot_tpl,$head_tpl,$ch_file,$index_tpl,$seo_tile,$zone_DB,$street_DB,$_pre,$dbhost,$dbpw,$dbname,$votetype);
require(ROOT_PATH.'data/config.php');
$webdb[SystemType] && @include(ROOT_PATH."$webdb[SystemType]/data/config.php");
require_once(ROOT_PATH.'inc/function.inc.php');


$PHP_SELF_TEMP=$_SERVER['PHP_SELF'] ? $_SERVER['PHP_SELF'] : $_SERVER['SCRIPT_NAME'];
$_SERVER['QUERY_STRING'] && $PHP_SELF_TEMP .= "?".$_SERVER['QUERY_STRING'];
$PHP_SELF=$_SERVER['REQUEST_URI']?$_SERVER['REQUEST_URI']:$PHP_SELF_TEMP;
$HTTP_HOST=$_SERVER['HTTP_HOST']?$_SERVER['HTTP_HOST']:$HTTP_SERVER_VARS['HTTP_HOST'];
$WEBURL='http://'.$HTTP_HOST.$PHP_SELF;
$FROMURL=$_SERVER["HTTP_REFERER"]?$_SERVER["HTTP_REFERER"]:$HTTP_SERVER_VARS["HTTP_REFERER"];

$webdb[www]=$webdb[www_url];
if($webdb[www_url]=='/.'){
	unset($webdb[cookieDomain]);
	$webdb[www]=preg_replace("/http:\/\/([^\/]+)\/(.*)/is","http://\\1",$WEBURL);
}

if($_SERVER['HTTP_CLIENT_IP']){
     $onlineip=$_SERVER['HTTP_CLIENT_IP'];
}elseif($_SERVER['HTTP_X_FORWARDED_FOR']){     
	 $onlineip=$_SERVER['HTTP_X_FORWARDED_FOR'];
}else{
     $onlineip=$_SERVER['REMOTE_ADDR'];
}
$onlineip = preg_replace("/^([\d\.]+).*/", "\\1", filtrate($onlineip));
preg_match("/[\d\.]{7,15}/", $onlineip, $onlineipArray);
$onlineip = $onlineipArray[0] ? $onlineipArray[0] : '0.0.0.0';
unset($onlineipArray);

if($webdb[cc_attack]){
	$cc_attack_time=3;
	$cc_attack_num=($webdb[cc_attack_num]>9)?$webdb[cc_attack_num]:20;
	$webdb[Forbid_cc_visttime]>0 || $webdb[Forbid_cc_visttime]=1;
	$Forbid_cc_visttime=$webdb[Forbid_cc_visttime]*60;
	$Limit_time=time()-@filemtime(ROOT_PATH."cache/cc_attack_ip.txt")-$Forbid_cc_visttime;
	if($Limit_time<0){
		$cc_attack_ip_file=read_file(ROOT_PATH."cache/cc_attack_ip.txt");
		if(strstr($cc_attack_ip_file,$onlineip)){
			$Limit_time=intval($Limit_time);
			die("Forbid CC Attack Vist,Limit $Limit_time");
		}
	}else{
		@unlink(ROOT_PATH."cache/cc_attack_ip.txt");
	}
	if(time()-@filemtime(ROOT_PATH."cache/cc_attack.txt")>$cc_attack_time){
		@unlink(ROOT_PATH."/cache/cc_attack.txt");
	}else{
		unset($_detail);
		$detail=explode("\r\n",read_file(ROOT_PATH."cache/cc_attack.txt"));
		foreach($detail AS $value){
			$_detail[$value]++;
			if($_detail[$value]>$cc_attack_num){
				write_file(ROOT_PATH."cache/cc_attack_ip.txt",time()." $onlineip\r\n",'a');
			}
		}
	}
	write_file(ROOT_PATH."cache/cc_attack.txt","$onlineip\r\n",'a');
	if(date('s')%$cc_attack_time==0){
		@unlink(ROOT_PATH."/cache/cc_attack.txt");
	}
}

@include_once(ROOT_PATH.'inc/biz/function.php');
if(!$webdb['debug']){
	error_reporting(0);
}
@include_once(ROOT_PATH."data/module.php");
@include_once(ROOT_PATH."data/htmltype.php");
@include_once(ROOT_PATH."data/showhtmltype.php");
require_once(ROOT_PATH."data/mysql_config.php");
require_once(ROOT_PATH.'inc/mysql_class.php');
require_once(ROOT_PATH.'inc/class.user.php');
require_once(ROOT_PATH.'data/level.php');

$timestamp=time()+($webdb['time']*60);

$_POST[loginname] && $_POST[loginname]=filtrate($_POST[loginname]);
$_POST[loginpwd] && $_POST[loginpwd]=filtrate($_POST[loginpwd]);
$FROMURL=filtrate($FROMURL);
$WEBURL=filtrate($WEBURL);

/**
*封IP
**/
 Limt_IP('ForbidIp');

list($usr_sid,$usr_oltime,$usr_lastvist,$usr_lasturl)=explode("\t",get_cookie('USR'));


if(!$usr_sid){
	$usr_sid=rands(8);
}

unset($_ENV,$HTTP_COOKIE,$HTTP_ENV_VARS,$_REQUEST,$HTTP_POST_VARS,$HTTP_GET_VARS,$HTTP_POST_FILES,$HTTP_COOKIE_VARS);

$db=new MYSQL_DB;

unset($web_admin,$sort_admin,$lfjid,$lfjuid,$lfjpwd,$lfjdb,$groupdb);
$usr_oltime=intval($usr_oltime);



/*用户登录模块*/
if($webdb[passport_type]&&is_file(ROOT_PATH."inc/passport/{$webdb[passport_type]}.php")){
	require_once(ROOT_PATH."inc/passport/{$webdb[passport_type]}.php");
	$userDB = new qb_user;
	$lfjdb = PassportUserdb();
}else{
	$TB=array("table"=>"{$pre}members","uid"=>"uid","username"=>"username","password"=>"password");
	$userDB = new qb_user;
	$lfjdb = $userDB->login_info();
}

//同步后台登录
if($_COOKIE["adminID"]&&$detail=mymd5($_COOKIE["adminID"],'DE',$onlineip)){
	unset($_uid,$_username,$_password);
	list($_uid,$_username,$_password)=explode("\t",$detail);
	$lfjdb=$db->get_one("SELECT * FROM {$pre}memberdata WHERE uid='$_uid' AND username='$_username'");
}


if($lfjdb[yz]){
	$lfjid=$lfjdb['username'];
	$lfjuid=$lfjdb['uid'];
	$lfjdb[icon] && $lfjdb[icon]=tempdir($lfjdb[icon]);
	if($lfjdb['groupid']==3||$lfjdb['groupid']==4){
		$web_admin=$sort_admin='1';
	}
	if( file_exists(ROOT_PATH."data/group/{$lfjdb[groupid]}.php") ){
		$groupdb=@include( ROOT_PATH."data/group/{$lfjdb[groupid]}.php");
	}else{
		$lfjdb['groupid']=8;
		$groupdb=@include( ROOT_PATH."data/group/8.php");
	}
	$lfjdb[C]=unserialize($lfjdb[config]);
	if($usr_oltime>30||!$usr_oltime){
		$usr_oltime>600 && $usr_oltime=600;
		$SQL="";
		if( isset($memberlevel[$lfjdb[groupid]]) ){
			//普通会员组按积分自动升级
			if(!$webdb[groupUpType]){
				$SQL=",groupid=8";
				$lfjdb[money]=get_money($lfjuid);
				foreach( $memberlevel AS $key=>$value){
					if($lfjdb[money]>=$value){
						$SQL=",groupid=$key";
					}
				}
			//普通会员组按积分购买升级,系统组如果设置了载止日期，将按载止日期失效，否则长期有效
			}elseif($lfjdb['C']['endtime']&&$timestamp>$lfjdb['C']['endtime']){
				$SQL=",groupid=8";
			}
		//系统组如果设置了载止日期，将按载止日期失效，否则长期有效
		}elseif($lfjdb['C']['endtime']&&$timestamp>$lfjdb['C']['endtime']){
			$SQL=",groupid=8";
		}
		$db->query("UPDATE {$pre}memberdata SET lastvist='$timestamp',lastip='$onlineip',oltime=oltime+'$usr_oltime'$SQL WHERE uid='$lfjuid'");
		$usr_oltime=1;
	}else{
		$usr_oltime+=$timestamp-$usr_lastvist;
	}
}else{
	if( $lfjdb && $lfjdb[yz]==0 && $action!='quit' ){

		if($webdb[UserEmailAutoPass]){
			echo "<SCRIPT LANGUAGE=\"JavaScript\">
			<!--
			alert('很抱歉!你的当前帐号还没有通过审核，系统强迫你退出登录状态，你现在可以通过电子邮件审核你的帐号,或者联系管理员审核你的帐号!');
			//-->
			</SCRIPT>";
			$fromurl=urlencode("$webdb[www_url]/do/activate.php?username=$lfjdb[username]");
			echo "<META HTTP-EQUIV=REFRESH CONTENT='0;URL=$webdb[www_url]/do/login.php?action=quit&fromurl=$fromurl'>";
		}else{
			echo "<SCRIPT LANGUAGE=\"JavaScript\">
			<!--
			alert('很抱歉!你的当前帐号还没有通过审核，系统强迫你退出登录状态，请联系管理员审核你的帐号!');
			//-->
			</SCRIPT>";
			echo "<META HTTP-EQUIV=REFRESH CONTENT='0;URL=$webdb[www_url]/do/login.php?action=quit'>";
		}
		exit;
	}
	unset($lfjid,$lfjuid,$lfjpwd,$lfjdb);
	//游客组
	$groupdb=@include( ROOT_PATH."data/group/2.php");
}

/*用户组有效期处理*/
if($lfjdb[config]){
	$lfjdb[config]=unserialize($lfjdb[config]);
	if($groupdb['gptype']&&$lfjdb['groupid']!=5){
		if( ($lfjdb[config][begintime]&&$lfjdb[config][begintime]>$timestamp)||($lfjdb[config][endtime]&&$lfjdb[config][endtime]<$timestamp) ){
			unset($groupdb);
			$web_admin=$sort_admin='0';
			$lfjdb['groupid']=8;
			$groupdb=@include( ROOT_PATH."data/group/8.php");
		}
	}
}


//if($webdb[SystemType]){
//	$Mdomain=$webdb[www_url]."/".$webdb[SystemType];
//}

$STYLE=$webdb[style]=$webdb[style]?$webdb[style]:'default';

set_cookie("USR","$usr_sid\t$usr_oltime\t$timestamp\t$WEBURL",3600*24);

//SEO
$titleDB[title]		= $webdb[webname];
$titleDB[keywords]	= $webdb[metakeywords];
$titleDB[description] = $webdb[description];

//后台访问地址取完整网址
if(!ereg("^http://",$webdb[admin_url])){
	$webdb[admin_url]="$webdb[www_url]/$webdb[admin_url]";
}

$webdb[FlashGet_ID] || $webdb[FlashGet_ID] = '95158';	//快车联盟ID
$webdb[XunLei_ID]	|| $webdb[XunLei_ID] = '125362';	//迅雷联盟ID





//商家认证分类
$renzhengDB = array(''=>'未认证','0'=>'未认证','1'=>'普通认证','2'=>'银牌认证','3'=>'金牌认证');

?>