<?php
require(dirname(__FILE__)."/"."global.php");

//最新文章
$newartic = showartic($type="new",$rows=10,$leng=30);
//热门文章
$hotartic = showartic($type="hot",$rows=10,$leng=30);

require_once(dirname(__FILE__)."/"."template/head.htm");
require_once(dirname(__FILE__)."/"."template/index.htm");
require_once(dirname(__FILE__)."/"."template/foot.htm");


?>