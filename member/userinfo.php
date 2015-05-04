<?php
require("global.php");
@include_once(ROOT_PATH."data/all_area.php");

if(!$lfjid){
	showerr("你还没登录");
}
	
if($lfjuid==$uid||!$uid){
	//$linkdb=array("查看个人信息"=>"?uid=$lfjuid","修改个人信息"=>"?job=edit");
}else{
	//$linkdb=array("查看个人信息"=>"?uid=$uid");
}

$linkdb=array(
	"个人资料"=>"?job=list",
	"我的头像"=>"?job=icon",
	"修改密码"=>"?job=password"
);


//修改用户信息
if($job=="list")
{
		$sex_db[$lfjdb[sex]]=" checked ";

		if(!$webdb[EditYzEmail]&&$lfjdb[email_yz]){
			$ipunt_email=" disabled onclick=\"alert('邮箱已审核,不可再修改')\" ";
		}elseif($lfjdb[email_yz]){
			$ipunt_email=" onclick=\"alert('邮箱已审核,修改的话,会处于未审核状态')\" ";
		}
		if(!$webdb[EditYzMob]&&$lfjdb[mob_yz]){
			$ipunt_mob=" disabled onclick=\"alert('手机已审核,不可再修改')\"  ";
		}elseif($lfjdb[mob_yz]){
			$ipunt_mob=" onclick=\"alert('手机已审核,修改的话,会处于未审核状态')\"  ";
		}
		if(!$webdb[EditYzIdcard]&&$lfjdb[idcard_yz]){
			$ipunt_idcard=" disabled onclick=\"alert('身份证已审核,不可再修改')\"  ";
		}elseif($lfjdb[idcard_yz]){
			$ipunt_idcard=" onclick=\"alert('身份证已审核,修改的话,会处于未审核状态')\"  ";
		}
		$lfjdb[postalcode]==0&&$lfjdb[postalcode]='';
		
		require(dirname(__FILE__)."/"."head.php");
		require(dirname(__FILE__)."/"."template/userinfo.htm");
		require(dirname(__FILE__)."/"."foot.php");	

}
elseif($action=='list'){	
	if($oicq&&!ereg("^[0-9]{5,11}$",$oicq))
	{
		showerr("OICQ格式不符合规则");
	}
	if($bday&&!ereg("^([0-9]{4})-([0-9]{2})-([0-9]{2})$",$bday))
	{
		showerr("生日格式不符合规则");
	}
	if($postalcode&&!ereg("^[0-9]{6}$",$postalcode))
	{
		showerr("邮政编码格式不符合规则");
	}
	if($mobphone&&!ereg("^[0-9]{11,12}$",$mobphone))
	{
		showerr("手机号码格式不符合规则");
	}
	if ($msn&&!ereg("^[-a-zA-Z0-9_\.]+\@([0-9A-Za-z][0-9A-Za-z-]+\.)+[A-Za-z]{2,5}$",$msn))
	{
		showerr("msn不符合规则");
	}
	if ($homepage&&!ereg("^http:",$homepage))
	{
		showerr("个人主页不符合规则");
	}

	$truename=filtrate($truename);
	$idcard=filtrate($idcard);
	$telephone=filtrate($telephone);
	$address=filtrate($address);
	$introduce=filtrate($introduce);
	$homepage=filtrate($homepage);

	
	//过滤不健康的字
	$truename=replace_bad_word($truename);
	$introduce=replace_bad_word($introduce);
	$address=replace_bad_word($address);

	if($cityid){
		@extract($db->get_one("SELECT fup AS provinceid FROM {$pre}area WHERE fid='$cityid'"));
	}
		
	$array=array(
		"uid"=>$lfjuid,
		"username"=>$lfjid,
		"sex"=>$sex,
		"bday"=>$bday,
		"introduce"=>$introduce,
		"oicq"=>$oicq,
		"homepage"=>$homepage,
		"address"=>$address,
		"postalcode"=>$postalcode,
		"mobphone"=>$mobphone,
		"telephone"=>$telephone,
		"idcard"=>$idcard,
		"truename"=>$truename,
		"provinceid"=>$provinceid,
		"cityid"=>$cityid,
	);
	$userDB->edit_user($array);
	
	refreshto("$FROMURL","修改成功",1);		
}
elseif($job=='icon'){	
	require(dirname(__FILE__)."/"."head.php");
	require(dirname(__FILE__)."/"."template/userinfo.htm");
	require(dirname(__FILE__)."/"."foot.php");	
}
elseif($action=='icon'){
	
	if($iface=='new'&&$postfile)
		{
			$array[name]=is_array($postfile)?$_FILES[postfile][name]:$postfile_name;
			$filetype=strtolower(strrchr($array[name],"."));
			if($filetype!='.gif'&&$filetype!='.jpg'&&$filetype!='.png')
			{
				showerr("头像只能是.gif或.jpg格式.png格式");
			}
			$array[path]=$webdb[updir]."/icon";
			$array[size]=is_array($postfile)?$_FILES[postfile][size]:$postfile_size;
			if(($array[size]+$lfjdb[usespace])>($webdb[totalSpace]*1048576+$groupdb[totalspace]*1048576+$lfjdb[totalspace]))
			{
				showerr("你的空间不足,上传失败,<A HREF='?uid=$lfjuid'>点击查看你的空间容量信息</A>");
			}
			$array[updateTable]=1;	//统计用户上传的文件占用空间大小
			$filename=upfile(is_array($postfile)?$_FILES[postfile][tmp_name]:$postfile,$array);
			$icon="icon/{$lfjuid}".strtolower(strrchr($filename,"."));
			@unlink(ROOT_PATH."$webdb[updir]/$icon");
			rename(ROOT_PATH."$webdb[updir]/icon/$filename",ROOT_PATH."$webdb[updir]/$icon");			
			
			$icon_array=getimagesize(ROOT_PATH."$webdb[updir]/$icon");
			if($icon_array[0]>150||$icon_array[1]>150){
				$icon_url="$webdb[www_url]/$webdb[updir]/$icon";
			}
		}
	elseif($iface=='old'&&$posticon){
		$filetype=strtolower(strrchr($posticon,"."));
		$posticon=filtrate($posticon);
		if($filetype!='.gif'&&$filetype!='.jpg'&&$filetype!='.png'){
			showerr("头像只能是.gif111或.jpg.png格式");
		}
		
		$icon="$webdb[www_url]/images/default/icon/$face.jpg";	
	}	
	
	$array=array(
		"uid"=>$lfjuid,
		"icon"=>$icon,
	);
	$userDB->edit_user($array);
	
	refreshto("$FROMURL","修改成功",1);
}

elseif($job=="password"){
	require(dirname(__FILE__)."/"."head.php");
	require(dirname(__FILE__)."/"."template/userinfo.htm");
	require(dirname(__FILE__)."/"."foot.php");	
}
elseif($action=='password'){
	if( !is_array($userDB->check_password($lfjid,$old_password)) ){
		showerr("旧密码不正确");
	}elseif($password&&$password!=$password2){
		showerr("新密码与确认密码不相同");
	}
	$array=array(
		"uid"=>$lfjuid,
		"password"=>$password,
	);
	$userDB->edit_user($array);
	refreshto("$FROMURL","修改成功",1);
}

?>