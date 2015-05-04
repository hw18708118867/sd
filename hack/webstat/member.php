<?php
!function_exists('html') && exit('ERR');

if(!$lfjid){
	showerr("你还没登录");
}
if ($job && $job=='list'){
	$listdb = array();
	//今天
	$today = date('d');
	//昨天
	$yestoday = mk_time(0,0,0,date('m'),date('d')-1, date('Y'));
	$yestoday = date('d',$yestoday);
	//这个礼拜
	$week = date('W');
	//上个礼拜
	$lastweek = $week-1;
	//这个月
	$month = date('m');
	//上个月
	$lastmonth = mk_time(0,0,0,date('m')-1,date('d'), date('Y'));
	$lastmonth = date('m',$lastmonth);
	//今年
	$year = date('Y');
	//去年
	$lastyear = mk_time(0,0,0,date('m'),date('d'), date('Y')-1);
	$lastyear = date('Y',$lastyear);
	/********************************文章记录统计*********************************************/
	//今天统计
	$article_today = $db->query("SELECT * 
		FROM {$pre}article
		WHERE mid = 0 AND FROM_UNIXTIME( posttime, '%d%m%Y' ) = {$today}{$month}{$year} AND uid = {$lfjuid}");
	$listdb[article_today] = $db->num_rows($article_today);
	//昨天统计
	$article_yestoday = $db->query("SELECT * 
		FROM {$pre}article
		WHERE mid=0 AND FROM_UNIXTIME( posttime, '%d%m%Y' ) = {$yestoday}{$month}{$year} AND uid = {$lfjuid}");
	$listdb[article_yestoday] = $db->num_rows($article_yestoday);
	//这个礼拜统计
	$article_week = $db->query("SELECT * 
		FROM {$pre}article
		WHERE mid=0 AND FROM_UNIXTIME( posttime, '%u%Y' ) = {$week}{$year}  AND uid = {$lfjuid}");
	$listdb[article_week] = $db->num_rows($article_week);
	//上个礼拜统计
	$article_lweek = $db->query("SELECT * 
		FROM {$pre}article
		WHERE mid=0 AND FROM_UNIXTIME( posttime, '%u%Y' ) = {$lastweek}{$year}  AND uid = {$lfjuid}");
	$listdb[article_lweek] = $db->num_rows($article_lweek);
	//这个月统计
	$article_month = $db->query("SELECT * 
		FROM {$pre}article
		WHERE mid=0 AND FROM_UNIXTIME( posttime, '%m%Y' ) = {$month}{$year}  AND uid = {$lfjuid}");
	$listdb[article_month] = $db->num_rows($article_month);
	//上个月统计
	$article_lmonth = $db->query("SELECT * 
		FROM {$pre}article
		WHERE mid=0 AND FROM_UNIXTIME( posttime, '%m%Y' ) = {$lastmonth}{$year}  AND uid = {$lfjuid}");
	$listdb[article_lmonth] = $db->num_rows($article_lmonth);
	//今年统计
	$article_year = $db->query("SELECT * 
		FROM {$pre}article
		WHERE mid=0 AND FROM_UNIXTIME( posttime, '%Y' ) = {$year}  AND uid = {$lfjuid}");
	$listdb[article_year] = $db->num_rows($article_year);
	//去年统计
	$article_lyear = $db->query("SELECT * 
		FROM {$pre}article
		WHERE mid=0 AND FROM_UNIXTIME( posttime, '%Y' ) = {$lastyear}  AND uid = {$lfjuid}");
	$listdb[article_lyear] = $db->num_rows($article_lyear);
	//总计
	$listdb[article_total] = $listdb[article_year] + $listdb[article_lyear];
	/********************************图片记录统计*********************************************/
	//今天统计
	$tupian_today = $db->query("SELECT * 
		FROM {$pre}article
		WHERE mid = 100 AND FROM_UNIXTIME( posttime, '%d%m%Y' ) = {$today}{$month}{$year}  AND uid = {$lfjuid}");
	$listdb[tupian_today] = $db->num_rows($tupian_today);
	//昨天统计
	$tupian_yestoday = $db->query("SELECT * 
		FROM {$pre}article
		WHERE mid=100 AND FROM_UNIXTIME( posttime, '%d%m%Y' ) = {$yestoday}{$month}{$year}  AND uid = {$lfjuid}");
	$listdb[tupian_yestoday] = $db->num_rows($tupian_yestoday);
	//这个礼拜统计
	$tupian_week = $db->query("SELECT * 
		FROM {$pre}article
		WHERE mid=100 AND FROM_UNIXTIME( posttime, '%u%Y' ) = {$week}{$year}  AND uid = {$lfjuid}");
	$listdb[tupian_week] = $db->num_rows($tupian_week);
	//上个礼拜统计
	$tupian_lweek = $db->query("SELECT * 
		FROM {$pre}article
		WHERE mid=100 AND FROM_UNIXTIME( posttime, '%u%Y' ) = {$lastweek}{$year}  AND uid = {$lfjuid}");
	$listdb[tupian_lweek] = $db->num_rows($tupian_lweek);
	//这个月统计
	$tupian_month = $db->query("SELECT * 
		FROM {$pre}article
		WHERE mid=100 AND FROM_UNIXTIME( posttime, '%m%Y' ) = {$month}{$year}  AND uid = {$lfjuid}");
	$listdb[tupian_month] = $db->num_rows($tupian_month);
	//上个月统计
	$tupian_lmonth = $db->query("SELECT * 
		FROM {$pre}article
		WHERE mid=100 AND FROM_UNIXTIME( posttime, '%m%Y' ) = {$lastmonth}{$year}  AND uid = {$lfjuid}");
	$listdb[tupian_lmonth] = $db->num_rows($tupian_lmonth);
	//今年统计
	$tupian_year = $db->query("SELECT * 
		FROM {$pre}article
		WHERE mid=100 AND FROM_UNIXTIME( posttime, '%Y' ) = {$year}  AND uid = {$lfjuid}");
	$listdb[tupian_year] = $db->num_rows($tupian_year);
	//去年统计
	$tupian_lyear = $db->query("SELECT * 
		FROM {$pre}article
		WHERE mid=100 AND FROM_UNIXTIME( posttime, '%Y' ) = {$lastyear}  AND uid = {$lfjuid}");
	$listdb[tupian_lyear] = $db->num_rows($tupian_lyear);
	//总计
	$listdb[tupian_total] = $listdb[tupian_year] + $listdb[tupian_lyear];
	/********************************下载记录统计*********************************************/
	//今天统计
	$xiazai_today = $db->query("SELECT * 
		FROM {$pre}article
		WHERE mid = 101 AND FROM_UNIXTIME( posttime, '%d%m%Y' ) = {$today}{$month}{$year}  AND uid = {$lfjuid}");
	$listdb[xiazai_today] = $db->num_rows($xiazai_today);
	//昨天统计
	$xiazai_yestoday = $db->query("SELECT * 
		FROM {$pre}article
		WHERE mid=101 AND FROM_UNIXTIME( posttime, '%d%m%d' ) = {$yestoday}{$month}{$year}  AND uid = {$lfjuid}");
	$listdb[xiazai_yestoday] = $db->num_rows($xiazai_yestoday);
	//这个礼拜统计
	$xiazai_week = $db->query("SELECT * 
		FROM {$pre}article
		WHERE mid=101 AND FROM_UNIXTIME( posttime, '%u%Y' ) = {$week}{$year}  AND uid = {$lfjuid}");
	$listdb[xiazai_week] = $db->num_rows($xiazai_week);
	//上个礼拜统计
	$xiazai_lweek = $db->query("SELECT * 
		FROM {$pre}article
		WHERE mid=101 AND FROM_UNIXTIME( posttime, '%u%Y' ) = {$lastweek}{$year}  AND uid = {$lfjuid}");
	$listdb[xiazai_lweek] = $db->num_rows($xiazai_lweek);
	//这个月统计
	$xiazai_month = $db->query("SELECT * 
		FROM {$pre}article
		WHERE mid=101 AND FROM_UNIXTIME( posttime, '%m%Y' ) = {$month}{$year}  AND uid = {$lfjuid}");
	$listdb[xiazai_month] = $db->num_rows($xiazai_month);
	//上个月统计
	$xiazai_lmonth = $db->query("SELECT * 
		FROM {$pre}article
		WHERE mid=101 AND FROM_UNIXTIME( posttime, '%m%Y' ) = {$lastmonth}{$year}  AND uid = {$lfjuid}");
	$listdb[xiazai_lmonth] = $db->num_rows($xiazai_lmonth);
	//今年统计
	$xiazai_year = $db->query("SELECT * 
		FROM {$pre}article
		WHERE mid=101 AND FROM_UNIXTIME( posttime, '%Y' ) = {$year}  AND uid = {$lfjuid}");
	$listdb[xiazai_year] = $db->num_rows($xiazai_year);
	//去年统计
	$xiazai_lyear = $db->query("SELECT * 
		FROM {$pre}article
		WHERE mid=101 AND FROM_UNIXTIME( posttime, '%Y' ) = {$lastyear}  AND uid = {$lfjuid}");
	$listdb[xiazai_lyear] = $db->num_rows($xiazai_lyear);
	//总计
	$listdb[xiazai_total] = $listdb[xiazai_year] + $listdb[xiazai_lyear];
	/********************************视频记录统计*********************************************/
	//今天统计
	$vedio_today = $db->query("SELECT * 
		FROM {$pre}article
		WHERE mid = 102 AND FROM_UNIXTIME( posttime, '%d%m%Y' ) = {$today}{$month}{$year}  AND uid = {$lfjuid}");
	$listdb[vedio_today] = $db->num_rows($vedio_today);
	//昨天统计
	$vedio_yestoday = $db->query("SELECT * 
		FROM {$pre}article
		WHERE mid=102 AND FROM_UNIXTIME( posttime, '%d%m%Y' ) = {$yestoday}{$month}{$year}  AND uid = {$lfjuid}");
	$listdb[vedio_yestoday] = $db->num_rows($vedio_yestoday);
	//这个礼拜统计
	$vedio_week = $db->query("SELECT * 
		FROM {$pre}article
		WHERE mid=102 AND FROM_UNIXTIME( posttime, '%u%Y' ) = {$week}{$year}  AND uid = {$lfjuid}");
	$listdb[vedio_week] = $db->num_rows($vedio_week);
	//上个礼拜统计
	$vedio_lweek = $db->query("SELECT * 
		FROM {$pre}article
		WHERE mid=102 AND FROM_UNIXTIME( posttime, '%u%Y' ) = {$lastweek}{$year}  AND uid = {$lfjuid}");
	$listdb[vedio_lweek] = $db->num_rows($vedio_lweek);
	//这个月统计
	$vedio_month = $db->query("SELECT * 
		FROM {$pre}article
		WHERE mid=102 AND FROM_UNIXTIME( posttime, '%m%Y' ) = {$month}{$year}  AND uid = {$lfjuid}");
	$listdb[vedio_month] = $db->num_rows($vedio_month);
	//上个月统计
	$vedio_lmonth = $db->query("SELECT * 
		FROM {$pre}article
		WHERE mid=102 AND FROM_UNIXTIME( posttime, '%m%Y' ) = {$lastmonth}{$year}  AND uid = {$lfjuid}");
	$listdb[vedio_lmonth] = $db->num_rows($vedio_lmonth);
	//今年统计
	$vedio_year = $db->query("SELECT * 
		FROM {$pre}article
		WHERE mid=102 AND FROM_UNIXTIME( posttime, '%Y' ) = {$year}  AND uid = {$lfjuid}");
	$listdb[vedio_year] = $db->num_rows($vedio_year);
	//去年统计
	$vedio_lyear = $db->query("SELECT * 
		FROM {$pre}article
		WHERE mid=102 AND FROM_UNIXTIME( posttime, '%Y' ) = {$lastyear}  AND uid = {$lfjuid}");
	$listdb[vedio_lyear] = $db->num_rows($vedio_lyear);
	//总计
	$listdb[vedio_total] = $listdb[vedio_year] + $listdb[vedio_lyear];
	/********************************FLASH记录统计*******************************************/
	//今天统计
	$flash_today = $db->query("SELECT * 
		FROM {$pre}article
		WHERE mid = 104 AND FROM_UNIXTIME( posttime, '%d%m%Y' ) = {$today}{$month}{$year}  AND uid = {$lfjuid}");
	$listdb[flash_today] = $db->num_rows($flash_today);
	//昨天统计
	$flash_yestoday = $db->query("SELECT * 
		FROM {$pre}article
		WHERE mid=104 AND FROM_UNIXTIME( posttime, '%d%m%Y' ) = {$yestoday}{$month}{$year}  AND uid = {$lfjuid}");
	$listdb[flash_yestoday] = $db->num_rows($flash_yestoday);
	//这个礼拜统计
	$flash_week = $db->query("SELECT * 
		FROM {$pre}article
		WHERE mid=104 AND FROM_UNIXTIME( posttime, '%u%Y' ) = {$week}{$year}  AND uid = {$lfjuid}");
	$listdb[flash_week] = $db->num_rows($flash_week);
	//上个礼拜统计
	$flash_lweek = $db->query("SELECT * 
		FROM {$pre}article
		WHERE mid=104 AND FROM_UNIXTIME( posttime, '%u%Y' ) = {$lastweek}{$year}  AND uid = {$lfjuid}");
	$listdb[flash_lweek] = $db->num_rows($flash_lweek);
	//这个月统计
	$flash_month = $db->query("SELECT * 
		FROM {$pre}article
		WHERE mid=104 AND FROM_UNIXTIME( posttime, '%m%Y' ) = {$month}{$year}  AND uid = {$lfjuid}");
	$listdb[flash_month] = $db->num_rows($flash_month);
	//上个月统计
	$flash_lmonth = $db->query("SELECT * 
		FROM {$pre}article
		WHERE mid=104 AND FROM_UNIXTIME( posttime, '%m%Y' ) = {$lastmonth}{$year}  AND uid = {$lfjuid}");
	$listdb[flash_lmonth] = $db->num_rows($flash_lmonth);
	//今年统计
	$flash_year = $db->query("SELECT * 
		FROM {$pre}article
		WHERE mid=104 AND FROM_UNIXTIME( posttime, '%Y' ) = {$year}  AND uid = {$lfjuid}");
	$listdb[flash_year] = $db->num_rows($flash_year);
	//去年统计
	$flash_lyear = $db->query("SELECT * 
		FROM {$pre}article
		WHERE mid=104 AND FROM_UNIXTIME( posttime, '%Y' ) = {$lastyear}  AND uid = {$lfjuid}");
	$listdb[flash_lyear] = $db->num_rows($flash_lyear);
	//总计
	$listdb[flash_total] = $listdb[flash_year] + $listdb[flash_lyear];
	/********************************评论记录统计********************************************/
	//今天统计
	$comment_today = $db->query("SELECT * 
		FROM {$pre}comment
		WHERE FROM_UNIXTIME( posttime, '%d%m%Y' ) = {$today}{$month}{$year}  AND uid = {$lfjuid}");
	$listdb[comment_today] = $db->num_rows($comment_today);
	//昨天统计
	$comment_yestoday = $db->query("SELECT * 
		FROM {$pre}comment
		WHERE FROM_UNIXTIME( posttime, '%d%m%Y' ) = {$yestoday}{$month}{$year}  AND uid = {$lfjuid}");
	$listdb[comment_yestoday] = $db->num_rows($comment_yestoday);
	//这个礼拜统计
	$comment_week = $db->query("SELECT * 
		FROM {$pre}comment
		WHERE FROM_UNIXTIME( posttime, '%u%Y' ) = {$week}{$year}  AND uid = {$lfjuid}");
	$listdb[comment_week] = $db->num_rows($comment_week);
	//上个礼拜统计
	$comment_lweek = $db->query("SELECT * 
		FROM {$pre}comment
		WHERE FROM_UNIXTIME( posttime, '%u%Y' ) = {$lastweek}{$year}  AND uid = {$lfjuid}");
	$listdb[comment_lweek] = $db->num_rows($comment_lweek);
	//这个月统计
	$comment_month = $db->query("SELECT * 
		FROM {$pre}comment
		WHERE FROM_UNIXTIME( posttime, '%m%Y' ) = {$month}{$year}  AND uid = {$lfjuid}");
	$listdb[comment_month] = $db->num_rows($comment_month);
	//上个月统计
	$comment_lmonth = $db->query("SELECT * 
		FROM {$pre}comment
		WHERE FROM_UNIXTIME( posttime, '%m%Y' ) = {$lastmonth}{$year}  AND uid = {$lfjuid}");
	$listdb[comment_lmonth] = $db->num_rows($comment_lmonth);
	//今年统计
	$comment_year = $db->query("SELECT * 
		FROM {$pre}comment
		WHERE FROM_UNIXTIME( posttime, '%Y' ) = {$year}  AND uid = {$lfjuid}");
	$listdb[comment_year] = $db->num_rows($comment_year);
	//去年统计
	$comment_lyear = $db->query("SELECT * 
		FROM {$pre}comment
		WHERE FROM_UNIXTIME( posttime, '%Y' ) = {$lastyear}  AND uid = {$lfjuid}");
	$listdb[comment_lyear] = $db->num_rows($comment_lyear);
	//总计
	$listdb[comment_total] = $listdb[comment_year] + $listdb[comment_lyear];
	/********************************举报记录统计*********************************************/
	//今天统计
	$report_today = $db->query("SELECT * 
		FROM {$pre}report
		WHERE FROM_UNIXTIME( posttime, '%d%m%Y' ) = {$today}{$month}{$year}  AND uid = {$lfjuid}");
	$listdb[report_today] = $db->num_rows($report_today);
	//昨天统计
	$report_yestoday = $db->query("SELECT * 
		FROM {$pre}report
		WHERE FROM_UNIXTIME( posttime, '%d%m%Y' ) = {$yestoday}{$month}{$year}  AND uid = {$lfjuid}");
	$listdb[report_yestoday] = $db->num_rows($report_yestoday);
	//这个礼拜统计
	$report_week = $db->query("SELECT * 
		FROM {$pre}report
		WHERE FROM_UNIXTIME( posttime, '%u%Y' ) = {$week}{$year}  AND uid = {$lfjuid}");
	$listdb[report_week] = $db->num_rows($report_week);
	//上个礼拜统计
	$report_lweek = $db->query("SELECT * 
		FROM {$pre}report
		WHERE FROM_UNIXTIME( posttime, '%u%Y' ) = {$lastweek}{$year}  AND uid = {$lfjuid}");
	$listdb[report_lweek] = $db->num_rows($report_lweek);
	//这个月统计
	$report_month = $db->query("SELECT * 
		FROM {$pre}report
		WHERE FROM_UNIXTIME( posttime, '%m%Y' ) = {$month}{$year}  AND uid = {$lfjuid}");
	$listdb[report_month] = $db->num_rows($report_month);
	//上个月统计
	$report_lmonth = $db->query("SELECT * 
		FROM {$pre}report
		WHERE FROM_UNIXTIME( posttime, '%m%Y' ) = {$lastmonth}{$year}  AND uid = {$lfjuid}");
	$listdb[report_lmonth] = $db->num_rows($report_lmonth);
	//今年统计
	$report_year = $db->query("SELECT * 
		FROM {$pre}report
		WHERE FROM_UNIXTIME( posttime, '%Y' ) = {$year}  AND uid = {$lfjuid}");
	$listdb[report_year] = $db->num_rows($report_year);
	//去年统计
	$report_lyear = $db->query("SELECT * 
		FROM {$pre}report
		WHERE FROM_UNIXTIME( posttime, '%Y' ) = {$lastyear}  AND uid = {$lfjuid}");
	$listdb[report_lyear] = $db->num_rows($report_lyear);
	//总计
	$listdb[report_total] = $listdb[report_year] + $listdb[report_lyear];
	/********************************推广记录统计*********************************************/
	//今天统计
	$propagandize_today = $db->query("SELECT * 
		FROM {$pre}propagandize
		WHERE FROM_UNIXTIME( posttime, '%d%m%Y' ) = {$today}{$month}{$year}  AND uid = {$lfjuid}");
	$listdb[propagandize_today] = $db->num_rows($propagandize_today);
	//昨天统计
	$propagandize_yestoday = $db->query("SELECT * 
		FROM {$pre}propagandize
		WHERE FROM_UNIXTIME( posttime, '%d%m%Y' ) = {$yestoday}{$month}{$year}  AND uid = {$lfjuid}");
	$listdb[propagandize_yestoday] = $db->num_rows($propagandize_yestoday);
	//这个礼拜统计
	$propagandize_week = $db->query("SELECT * 
		FROM {$pre}propagandize
		WHERE FROM_UNIXTIME( posttime, '%u%Y' ) = {$week}{$year}  AND uid = {$lfjuid}");
	$listdb[propagandize_week] = $db->num_rows($propagandize_week);
	//上个礼拜统计
	$propagandize_lweek = $db->query("SELECT * 
		FROM {$pre}propagandize
		WHERE FROM_UNIXTIME( posttime, '%u%Y' ) = {$lastweek}{$year}  AND uid = {$lfjuid}");
	$listdb[propagandize_lweek] = $db->num_rows($propagandize_lweek);
	//这个月统计
	$propagandize_month = $db->query("SELECT * 
		FROM {$pre}propagandize
		WHERE FROM_UNIXTIME( posttime, '%m%Y' ) = {$month}{$year}  AND uid = {$lfjuid}");
	$listdb[propagandize_month] = $db->num_rows($propagandize_month);
	//上个月统计
	$propagandize_lmonth = $db->query("SELECT * 
		FROM {$pre}propagandize
		WHERE FROM_UNIXTIME( posttime, '%m%Y' ) = {$lastmonth}{$year}  AND uid = {$lfjuid}");
	$listdb[propagandize_lmonth] = $db->num_rows($propagandize_lmonth);
	//今年统计
	$propagandize_year = $db->query("SELECT * 
		FROM {$pre}propagandize
		WHERE FROM_UNIXTIME( posttime, '%Y' ) = {$year}  AND uid = {$lfjuid}");
	$listdb[propagandize_year] = $db->num_rows($propagandize_year);
	//去年统计
	$propagandize_lyear = $db->query("SELECT * 
		FROM {$pre}propagandize
		WHERE FROM_UNIXTIME( posttime, '%Y' ) = {$lastyear}  AND uid = {$lfjuid}");
	$listdb[propagandize_lyear] = $db->num_rows($propagandize_lyear);
	//总计
	$listdb[propagandize_total] = $listdb[propagandize_year] + $listdb[propagandize_lyear];
}else {
	showerr("连接错误");
}
require(ROOT_PATH."member/head.php");
require(dirname(__FILE__)."/template/member/webstat.htm");
require(ROOT_PATH."member/foot.php");

?>