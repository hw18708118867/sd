<?php
require(dirname(__FILE__)."/"."global.php");
if(ereg("^([-_0-9a-zA-Z]+)$",$hack))
{
	if(is_file(ROOT_PATH."hack/$hack/member.php")){
		include(ROOT_PATH."hack/$hack/member.php");
	}else{
		showerr("文件不存在",1);
	}
}
?>