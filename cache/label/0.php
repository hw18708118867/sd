<?php

$TagDB['1236087504']=array(
				'typesystem'=>'1',
				'type'=>'article',
				'code'=>'a:28:{s:3:\"SYS\";s:7:\"artcile\";s:11:\"roll_height\";s:2:\"50\";s:3:\"url\";N;s:5:\"width\";s:3:\"200\";s:6:\"height\";s:3:\"200\";s:7:\"newhour\";s:2:\"24\";s:7:\"hothits\";s:2:\"30\";s:7:\"amodule\";s:2:\"-1\";s:7:\"tplpath\";s:0:\"\";s:6:\"DivTpl\";i:1;s:5:\"fiddb\";N;s:5:\"stype\";s:1:\"t\";s:2:\"yz\";s:1:\"1\";s:7:\"hidefid\";s:1:\"0\";s:10:\"timeformat\";s:11:\"Y-m-d H:i:s\";s:5:\"order\";s:7:\"default\";s:3:\"asc\";s:4:\"DESC\";s:6:\"levels\";s:3:\"all\";s:7:\"rowspan\";s:1:\"5\";s:3:\"sql\";s:54:\" SELECT A.* FROM zc_article A  WHERE A.yz=1   LIMIT 5 \";s:4:\"sql2\";s:0:\"\";s:7:\"colspan\";s:1:\"1\";s:11:\"content_num\";s:2:\"80\";s:12:\"content_num2\";s:0:\"\";s:8:\"titlenum\";s:2:\"20\";s:9:\"titlenum2\";s:0:\"\";s:10:\"titleflood\";s:1:\"0\";s:10:\"c_rolltype\";s:1:\"0\";}',
				'divcode'=>'a:3:{s:5:\"div_w\";s:2:\"50\";s:5:\"div_h\";s:2:\"30\";s:11:\"div_bgcolor\";s:0:\"\";}'
				);
$TagDB['1236087539']=array(
				'typesystem'=>'1',
				'type'=>'article',
				'code'=>'a:28:{s:3:\"SYS\";s:7:\"artcile\";s:11:\"roll_height\";s:2:\"50\";s:3:\"url\";N;s:5:\"width\";s:3:\"200\";s:6:\"height\";s:3:\"200\";s:7:\"newhour\";s:2:\"24\";s:7:\"hothits\";s:2:\"30\";s:7:\"amodule\";s:2:\"-1\";s:7:\"tplpath\";s:0:\"\";s:6:\"DivTpl\";i:1;s:5:\"fiddb\";N;s:5:\"stype\";s:1:\"t\";s:2:\"yz\";s:1:\"1\";s:7:\"hidefid\";s:1:\"0\";s:10:\"timeformat\";s:11:\"Y-m-d H:i:s\";s:5:\"order\";s:7:\"default\";s:3:\"asc\";s:4:\"DESC\";s:6:\"levels\";s:3:\"all\";s:7:\"rowspan\";s:1:\"5\";s:3:\"sql\";s:54:\" SELECT A.* FROM zc_article A  WHERE A.yz=1   LIMIT 5 \";s:4:\"sql2\";s:0:\"\";s:7:\"colspan\";s:1:\"1\";s:11:\"content_num\";s:2:\"80\";s:12:\"content_num2\";s:0:\"\";s:8:\"titlenum\";s:2:\"20\";s:9:\"titlenum2\";s:0:\"\";s:10:\"titleflood\";s:1:\"0\";s:10:\"c_rolltype\";s:1:\"0\";}',
				'divcode'=>'a:3:{s:5:\"div_w\";s:2:\"50\";s:5:\"div_h\";s:2:\"30\";s:11:\"div_bgcolor\";s:0:\"\";}'
				);
$TagDB['a1']=array(
				'typesystem'=>'1',
				'type'=>'article',
				'code'=>'a:31:{s:13:\"tplpart_1code\";s:147:\"<div style=\"padding-top:6px;color:#ccc;\">·<A HREF=\"$url\" target=\'_blank\' style=\"$fontcolor;$fontweight;font-size:13px;\">$title</a> $new $hot</div>\";s:13:\"tplpart_2code\";s:540:\"<table width=\"98%\" border=\"0\" cellspacing=\"0\" cellpadding=\"0\" style=\"margin:3px 0px 5px 0px;\">  <tr>     <td rowspan=\"2\" width=\"4%\" style=\"padding-right:3px;padding-bottom:7px;border-bottom:1px dotted #ccc;\"><a href=\"$url\"><img src=\"$picurl\" width=\"100\" height=\"70\" border=\"0\"></a></td>    <td width=\"96%\"> <a href=\"$url\" target=\"_blank\" style=\"color:#666;font-weight:bold;\">$title</a></td>  </tr>  <tr>     <td width=\"96%\" style=\"padding-bottom:7px;text-indent:1em;border-bottom:1px dotted #ccc;color:#929292;\">$content</td>  </tr></table>\";s:3:\"SYS\";s:7:\"artcile\";s:8:\"rolltype\";s:10:\"scrollLeft\";s:8:\"rolltime\";s:1:\"3\";s:11:\"roll_height\";s:2:\"50\";s:5:\"width\";s:3:\"200\";s:6:\"height\";s:3:\"200\";s:7:\"newhour\";s:2:\"24\";s:7:\"hothits\";s:2:\"30\";s:7:\"amodule\";s:2:\"-1\";s:7:\"tplpath\";s:24:\"/common_zh_pic/zh_pc.jpg\";s:6:\"DivTpl\";i:1;s:5:\"fiddb\";s:2:\"39\";s:5:\"stype\";s:1:\"t\";s:2:\"yz\";s:1:\"1\";s:7:\"hidefid\";N;s:10:\"timeformat\";s:11:\"Y-m-d H:i:s\";s:5:\"order\";s:10:\"A.posttime\";s:3:\"asc\";s:4:\"DESC\";s:6:\"levels\";s:3:\"all\";s:7:\"rowspan\";s:1:\"5\";s:3:\"sql\";s:171:\" SELECT A.*,A.aid AS id,R.content FROM zc_article A LEFT JOIN zc_reply R ON A.aid=R.aid   WHERE A.yz=1  AND A.fid IN (39)   AND R.topic=1 ORDER BY A.posttime DESC LIMIT 6 \";s:4:\"sql2\";s:183:\" SELECT A.*,A.aid AS id,R.content FROM zc_article A LEFT JOIN zc_reply R ON A.aid=R.aid  WHERE A.yz=1  AND A.fid IN (39)  AND A.ispic=1 AND R.topic=1 ORDER BY A.posttime DESC LIMIT 1 \";s:7:\"colspan\";s:1:\"1\";s:11:\"content_num\";s:2:\"80\";s:12:\"content_num2\";s:2:\"60\";s:8:\"titlenum\";s:2:\"30\";s:9:\"titlenum2\";s:2:\"20\";s:10:\"titleflood\";s:1:\"0\";s:10:\"c_rolltype\";s:1:\"0\";}',
				'divcode'=>'a:3:{s:5:\"div_w\";s:3:\"221\";s:5:\"div_h\";s:3:\"186\";s:11:\"div_bgcolor\";s:0:\"\";}'
				);
$TagDB['a2']=array(
				'typesystem'=>'1',
				'type'=>'member',
				'code'=>'a:19:{s:9:\"tplpart_1\";s:502:\"<div style=\"float:left;margin-right:5px;margin-top:7px;margin-bottom:3px;\"> <CENTER><a style=\"display:block;width:65px;height:65px;border:1px solid #ccc;\" href=\"$webdb[www_url]/member/homepage.php?uid=$uid\" target=\"_blank\"><img style=\"border:2px solid #fff;\" onerror=\"this.src=\'$webdb[www_url]/images/default/noface.gif\'\" width=\"65\" height=\"65\" src=\"$picurl\" border=\"0\"></a><A HREF=\"$webdb[www_url]/member/homepage.php?uid=$uid\" title=\'$full_title\' target=\"_blank\">$title</A></CENTER>            </div>\";s:13:\"tplpart_1code\";s:502:\"<div style=\"float:left;margin-right:5px;margin-top:7px;margin-bottom:3px;\"> <CENTER><a style=\"display:block;width:65px;height:65px;border:1px solid #ccc;\" href=\"$webdb[www_url]/member/homepage.php?uid=$uid\" target=\"_blank\"><img style=\"border:2px solid #fff;\" onerror=\"this.src=\'$webdb[www_url]/images/default/noface.gif\'\" width=\"65\" height=\"65\" src=\"$picurl\" border=\"0\"></a><A HREF=\"$webdb[www_url]/member/homepage.php?uid=$uid\" title=\'$full_title\' target=\"_blank\">$title</A></CENTER>            </div>\";s:13:\"tplpart_2code\";s:0:\"\";s:7:\"group_1\";s:0:\"\";s:7:\"group_2\";s:0:\"\";s:7:\"tplpath\";s:0:\"\";s:6:\"DivTpl\";i:1;s:5:\"fiddb\";N;s:5:\"stype\";s:1:\"6\";s:2:\"yz\";s:3:\"all\";s:10:\"timeformat\";s:11:\"Y-m-d H:i:s\";s:5:\"order\";s:7:\"regdate\";s:3:\"asc\";s:4:\"DESC\";s:6:\"levels\";N;s:7:\"rowspan\";s:1:\"6\";s:3:\"sql\";s:173:\" SELECT M.username AS title,D.*,D.icon AS picurl,D.introduce AS content FROM zc_members M LEFT JOIN zc_memberdata D ON M.uid=D.uid  WHERE 1  ORDER BY D.regdate DESC LIMIT 6 \";s:7:\"colspan\";s:1:\"1\";s:8:\"titlenum\";s:2:\"20\";s:10:\"titleflood\";s:1:\"0\";}',
				'divcode'=>'a:3:{s:5:\"div_w\";s:3:\"235\";s:5:\"div_h\";s:3:\"190\";s:11:\"div_bgcolor\";s:0:\"\";}'
				);
$TagDB['b02']=array(
				'typesystem'=>'0',
				'type'=>'code',
				'code'=>'<table width=\"100%\" border=\"0\" cellspacing=\"1\" cellpadding=\"3\" bgcolor=\"#ffffff\">
        <tr align=\"center\" bgcolor=\"#EBEBEB\"> 
          <td width=\"36%\">招聘职位</td>
          <td width=\"13%\">学历要求</td>
          <td width=\"14%\">性别要求</td>
          <td width=\"13%\">经验要求</td>
          <td width=\"13%\">月薪待遇</td>
          <td width=\"11%\">详情</td>
        </tr> 
      </table>',
				'divcode'=>'a:4:{s:9:\"html_edit\";s:0:\"\";s:5:\"div_w\";s:3:\"490\";s:5:\"div_h\";s:2:\"30\";s:11:\"div_bgcolor\";s:0:\"\";}'
				);
$TagDB['b022']=array(
				'typesystem'=>'1',
				'type'=>'form',
				'code'=>'a:31:{s:9:\"tplpart_1\";s:501:\"<table width=\"100%\" border=\"0\" cellspacing=\"1\" cellpadding=\"3\" style=\"border-bottom:1px dotted #eee;\">        <tr align=\"center\">               <td width=\"36%\" align=\"left\">&nbsp;$workplace</td>          <td width=\"13%\">$schoo_age</td>          <td width=\"14%\">$asksex</td>          <td width=\"13%\">$wageyear</td>          <td width=\"13%\">$wage</td>              <td width=\"11%\"><a href=\"$webdb[www_url]/do/bencandy_form.php?mid=$mid&id=$id\" target=\"_blank\">详情</a></td>        </tr>       </table>\";s:13:\"tplpart_1code\";s:501:\"<table width=\"100%\" border=\"0\" cellspacing=\"1\" cellpadding=\"3\" style=\"border-bottom:1px dotted #eee;\">        <tr align=\"center\">               <td width=\"36%\" align=\"left\">&nbsp;$workplace</td>          <td width=\"13%\">$schoo_age</td>          <td width=\"14%\">$asksex</td>          <td width=\"13%\">$wageyear</td>          <td width=\"13%\">$wage</td>              <td width=\"11%\"><a href=\"$webdb[www_url]/do/bencandy_form.php?mid=$mid&id=$id\" target=\"_blank\">详情</a></td>        </tr>       </table>\";s:13:\"tplpart_2code\";s:0:\"\";s:3:\"SYS\";s:4:\"form\";s:11:\"roll_height\";s:2:\"50\";s:3:\"url\";N;s:5:\"width\";s:3:\"200\";s:6:\"height\";s:3:\"200\";s:7:\"newhour\";s:2:\"24\";s:7:\"hothits\";s:2:\"30\";s:7:\"amodule\";s:1:\"2\";s:7:\"tplpath\";s:17:\"/form/givejob.jpg\";s:6:\"DivTpl\";i:1;s:5:\"fiddb\";N;s:5:\"stype\";s:1:\"t\";s:2:\"yz\";s:3:\"all\";s:7:\"hidefid\";N;s:10:\"timeformat\";s:11:\"Y-m-d H:i:s\";s:5:\"order\";N;s:3:\"asc\";s:4:\"DESC\";s:6:\"levels\";N;s:7:\"rowspan\";s:1:\"4\";s:3:\"sql\";s:195:\" SELECT A.*,R.*,config AS M_config FROM zc_form_content A LEFT JOIN zc_form_content_2 R ON A.id=R.id LEFT JOIN zc_form_module F ON A.mid=F.id  WHERE 1  AND A.mid=\'2\'  ORDER BY A.id DESC  LIMIT 4 \";s:4:\"sql2\";N;s:7:\"colspan\";s:1:\"1\";s:11:\"content_num\";s:2:\"80\";s:12:\"content_num2\";s:0:\"\";s:8:\"titlenum\";s:2:\"20\";s:9:\"titlenum2\";s:0:\"\";s:10:\"titleflood\";s:1:\"0\";s:10:\"c_rolltype\";s:1:\"0\";}',
				'divcode'=>'a:3:{s:5:\"div_w\";s:3:\"485\";s:5:\"div_h\";s:2:\"70\";s:11:\"div_bgcolor\";s:0:\"\";}'
				);
$TagDB['b2']=array(
				'typesystem'=>'1',
				'type'=>'comment',
				'code'=>'a:25:{s:9:\"tplpart_1\";s:576:\"<div>  <div style=\"float:left;\"><b><font color=\"#990000\">{$username}</font></b> 于 <font color=\"#990000\">{$time_m}-{$time_d}     {$time_H}:{$time_i}</font> 对 </div>  <a target=\'_blank\' href=\"$webdb[www_url]/do/comment.php?fid=$fid&id=$aid\" style=\"overflow:hidden;	text-overflow:ellipsis;	white-space:nowrap;width:230px;float:left;display:black;\"><font color=\"#0000FF\">{$article}</font></a><div style=\"float:left;\">发表如下评论</div></div><div style=\"clear:both;border-bottom:1px dotted #ccc;margin-bottom:5px;width:99%;\">　<font color=\"#666666\">{$title}</font></div>\";s:13:\"tplpart_1code\";s:576:\"<div>  <div style=\"float:left;\"><b><font color=\"#990000\">{$username}</font></b> 于 <font color=\"#990000\">{$time_m}-{$time_d}     {$time_H}:{$time_i}</font> 对 </div>  <a target=\'_blank\' href=\"$webdb[www_url]/do/comment.php?fid=$fid&id=$aid\" style=\"overflow:hidden;	text-overflow:ellipsis;	white-space:nowrap;width:230px;float:left;display:black;\"><font color=\"#0000FF\">{$article}</font></a><div style=\"float:left;\">发表如下评论</div></div><div style=\"clear:both;border-bottom:1px dotted #ccc;margin-bottom:5px;width:99%;\">　<font color=\"#666666\">{$title}</font></div>\";s:13:\"tplpart_2code\";s:0:\"\";s:3:\"SYS\";s:7:\"comment\";s:11:\"roll_height\";s:2:\"50\";s:3:\"url\";N;s:5:\"width\";s:3:\"200\";s:6:\"height\";s:3:\"200\";s:7:\"tplpath\";s:0:\"\";s:6:\"DivTpl\";i:1;s:5:\"fiddb\";N;s:5:\"stype\";s:1:\"4\";s:2:\"yz\";s:1:\"1\";s:7:\"hidefid\";N;s:10:\"timeformat\";s:11:\"Y-m-d H:i:s\";s:5:\"order\";N;s:3:\"asc\";N;s:6:\"levels\";s:3:\"all\";s:7:\"rowspan\";s:1:\"4\";s:3:\"sql\";s:149:\" SELECT A.*,A.content AS title,B.title AS article FROM zc_comment A LEFT JOIN zc_article B ON A.aid=B.aid  WHERE A.yz=1  ORDER BY A.cid DESC LIMIT 4 \";s:7:\"colspan\";s:1:\"1\";s:11:\"content_num\";s:2:\"80\";s:8:\"titlenum\";s:2:\"80\";s:10:\"titleflood\";s:1:\"0\";s:10:\"c_rolltype\";s:1:\"0\";}',
				'divcode'=>'a:3:{s:5:\"div_w\";s:3:\"468\";s:5:\"div_h\";s:3:\"190\";s:11:\"div_bgcolor\";s:0:\"\";}'
				);
$TagDB['b2d']=array(
				'typesystem'=>'0',
				'type'=>'hack_vote',
				'code'=>'<SCRIPT src=\'http://www_qibosoft_com/do/vote.php?job=js&cid=11\'></SCRIPT>',
				'divcode'=>'a:4:{s:6:\"voteid\";s:2:\"11\";s:5:\"div_w\";s:3:\"480\";s:5:\"div_h\";s:3:\"238\";s:11:\"div_bgcolor\";s:0:\"\";}'
				);
$TagDB['bb1']=array(
				'typesystem'=>'0',
				'type'=>'code',
				'code'=>'<table width=\"100%\" border=\"0\" cellspacing=\"1\" cellpadding=\"3\" bgcolor=\"#ffffff\">
        <tr align=\"center\" bgcolor=\"#EBEBEB\"> 
          <td width=\"36%\">求职岗位</td>
          <td width=\"13%\">学历</td>
          <td width=\"14%\">性别</td>
          <td width=\"13%\">工作年限</td>
          <td width=\"13%\">年龄</td>
          <td width=\"11%\">详情</td>
        </tr> 
</table>',
				'divcode'=>'a:4:{s:9:\"html_edit\";s:0:\"\";s:5:\"div_w\";s:3:\"475\";s:5:\"div_h\";s:2:\"21\";s:11:\"div_bgcolor\";s:0:\"\";}'
				);
$TagDB['bb2']=array(
				'typesystem'=>'1',
				'type'=>'form',
				'code'=>'a:31:{s:9:\"tplpart_1\";s:509:\"<table width=\"100%\" border=\"0\" cellspacing=\"1\" cellpadding=\"3\" style=\"border-bottom:1px dotted #eee;\">        <tr align=\"center\">               <td width=\"36%\" align=\"left\"> $workposition</td>          <td width=\"13%\">$schoo_age</td>          <td width=\"14%\">$sex</td>          <td width=\"13%\">{$workyear} 年</td>          <td width=\"13%\">{$myage} 岁</td>              <td width=\"11%\"><a href=\"$webdb[www_url]/do/bencandy_form.php?mid=$mid&id=$id\" target=\"_blank\">详情</a></td>        </tr>       </table>\";s:13:\"tplpart_1code\";s:509:\"<table width=\"100%\" border=\"0\" cellspacing=\"1\" cellpadding=\"3\" style=\"border-bottom:1px dotted #eee;\">        <tr align=\"center\">               <td width=\"36%\" align=\"left\"> $workposition</td>          <td width=\"13%\">$schoo_age</td>          <td width=\"14%\">$sex</td>          <td width=\"13%\">{$workyear} 年</td>          <td width=\"13%\">{$myage} 岁</td>              <td width=\"11%\"><a href=\"$webdb[www_url]/do/bencandy_form.php?mid=$mid&id=$id\" target=\"_blank\">详情</a></td>        </tr>       </table>\";s:13:\"tplpart_2code\";s:0:\"\";s:3:\"SYS\";s:4:\"form\";s:11:\"roll_height\";s:2:\"50\";s:3:\"url\";N;s:5:\"width\";s:3:\"200\";s:6:\"height\";s:3:\"200\";s:7:\"newhour\";s:2:\"24\";s:7:\"hothits\";s:2:\"30\";s:7:\"amodule\";s:1:\"6\";s:7:\"tplpath\";s:16:\"/form/askjob.jpg\";s:6:\"DivTpl\";i:1;s:5:\"fiddb\";N;s:5:\"stype\";s:1:\"t\";s:2:\"yz\";s:3:\"all\";s:7:\"hidefid\";N;s:10:\"timeformat\";s:11:\"Y-m-d H:i:s\";s:5:\"order\";N;s:3:\"asc\";s:4:\"DESC\";s:6:\"levels\";N;s:7:\"rowspan\";s:1:\"5\";s:3:\"sql\";s:195:\" SELECT A.*,R.*,config AS M_config FROM zc_form_content A LEFT JOIN zc_form_content_6 R ON A.id=R.id LEFT JOIN zc_form_module F ON A.mid=F.id  WHERE 1  AND A.mid=\'6\'  ORDER BY A.id DESC  LIMIT 5 \";s:4:\"sql2\";N;s:7:\"colspan\";s:1:\"1\";s:11:\"content_num\";s:2:\"80\";s:12:\"content_num2\";s:0:\"\";s:8:\"titlenum\";s:2:\"20\";s:9:\"titlenum2\";s:0:\"\";s:10:\"titleflood\";s:1:\"0\";s:10:\"c_rolltype\";s:1:\"0\";}',
				'divcode'=>'a:3:{s:5:\"div_w\";s:2:\"50\";s:5:\"div_h\";s:2:\"30\";s:11:\"div_bgcolor\";s:0:\"\";}'
				);
$TagDB['bjspecial']=array(
				'typesystem'=>'1',
				'type'=>'specialsort',
				'code'=>'a:34:{s:9:\"tplpart_1\";s:436:\"<div style=\"float:left;margin:5px 0px 0px 5px;width:155px;text-align:center;\">              <a href=\"$webdb[www_url]/do/showsp.php?fid=$fid&id=$id\" target=\"_blank\" style=\"display:block;width:120px;height:160px;border:1px #333 solid;margin-bottom:5px;\"><img width=\"120\" height=\"160\" src=\"$picurl\" border=\"0\"></a>                <A HREF=\"$webdb[www_url]/do/showsp.php?fid=$fid&id=$id\" title=\'$full_title\' target=\"_blank\">$title</A> </div>\";s:13:\"tplpart_1code\";s:436:\"<div style=\"float:left;margin:5px 0px 0px 5px;width:155px;text-align:center;\">              <a href=\"$webdb[www_url]/do/showsp.php?fid=$fid&id=$id\" target=\"_blank\" style=\"display:block;width:120px;height:160px;border:1px #333 solid;margin-bottom:5px;\"><img width=\"120\" height=\"160\" src=\"$picurl\" border=\"0\"></a>                <A HREF=\"$webdb[www_url]/do/showsp.php?fid=$fid&id=$id\" title=\'$full_title\' target=\"_blank\">$title</A> </div>\";s:13:\"tplpart_2code\";s:0:\"\";s:3:\"SYS\";s:11:\"specialsort\";s:11:\"roll_height\";s:2:\"50\";s:3:\"url\";s:45:\"$webdb[www_url]/do/showsp.php?fid=$fid&id=$id\";s:5:\"width\";s:3:\"200\";s:6:\"height\";s:3:\"200\";s:8:\"rolltype\";s:10:\"scrollLeft\";s:8:\"rolltime\";s:1:\"3\";s:3:\"fid\";s:0:\"\";s:7:\"newhour\";s:2:\"24\";s:7:\"hothits\";s:2:\"30\";s:7:\"amodule\";N;s:7:\"tplpath\";s:24:\"/common_pic/img_div1.jpg\";s:6:\"DivTpl\";i:1;s:5:\"fiddb\";N;s:5:\"stype\";s:1:\"p\";s:2:\"yz\";N;s:7:\"hidefid\";N;s:10:\"timeformat\";s:11:\"Y-m-d H:i:s\";s:5:\"order\";s:4:\"list\";s:3:\"asc\";s:4:\"DESC\";s:6:\"levels\";s:1:\"1\";s:7:\"rowspan\";s:1:\"6\";s:3:\"sql\";s:113:\" SELECT A.* FROM zc_special A  WHERE `ifbase`=0  AND A.levels=1  AND A.picurl!=\'\'   ORDER BY A.list DESC LIMIT 6 \";s:4:\"sql2\";s:0:\"\";s:7:\"colspan\";s:1:\"1\";s:11:\"content_num\";s:2:\"80\";s:12:\"content_num2\";s:0:\"\";s:8:\"titlenum\";s:2:\"26\";s:9:\"titlenum2\";s:0:\"\";s:10:\"titleflood\";s:1:\"0\";s:10:\"c_rolltype\";s:1:\"0\";}',
				'divcode'=>'a:3:{s:5:\"div_w\";s:3:\"953\";s:5:\"div_h\";s:3:\"177\";s:11:\"div_bgcolor\";s:0:\"\";}'
				);
$TagDB['bjsptitle']=array(
				'typesystem'=>'0',
				'type'=>'code',
				'code'=>'推荐专题',
				'divcode'=>'a:4:{s:9:\"html_edit\";s:0:\"\";s:5:\"div_w\";s:0:\"\";s:5:\"div_h\";s:0:\"\";s:11:\"div_bgcolor\";s:0:\"\";}'
				);
$TagDB['bodyad']=array(
				'typesystem'=>'0',
				'type'=>'pic',
				'code'=>'a:4:{s:6:\"imgurl\";s:32:\"label/1_20090420140457_NOGYw.jpg\";s:7:\"imglink\";s:47:\"http://www.phpwind.net/read-htm-tid-761520.html\";s:5:\"width\";s:3:\"990\";s:6:\"height\";s:2:\"80\";}',
				'divcode'=>'a:3:{s:5:\"div_w\";s:3:\"990\";s:5:\"div_h\";s:2:\"80\";s:11:\"div_bgcolor\";s:0:\"\";}'
				);
$TagDB['bodyad2']=array(
				'typesystem'=>'0',
				'type'=>'pic',
				'code'=>'a:4:{s:6:\"imgurl\";s:11:\"ad/cnad.jpg\";s:7:\"imglink\";s:22:\"http://www.qibosoft.com/\";s:5:\"width\";s:3:\"742\";s:6:\"height\";s:2:\"90\";}',
				'divcode'=>'a:3:{s:5:\"div_w\";s:3:\"742\";s:5:\"div_h\";s:2:\"90\";s:11:\"div_bgcolor\";s:0:\"\";}'
				);
$TagDB['bodyad33']=array(
				'typesystem'=>'0',
				'type'=>'pic',
				'code'=>'a:4:{s:6:\"imgurl\";s:32:\"label/1_20090418150428_gPa47.jpg\";s:7:\"imglink\";s:22:\"http://www.yeepay.com/\";s:5:\"width\";s:3:\"243\";s:6:\"height\";s:2:\"90\";}',
				'divcode'=>'a:3:{s:5:\"div_w\";s:3:\"243\";s:5:\"div_h\";s:2:\"90\";s:11:\"div_bgcolor\";s:0:\"\";}'
				);
$TagDB['c02']=array(
				'typesystem'=>'1',
				'type'=>'guestbook',
				'code'=>'a:25:{s:9:\"tplpart_1\";s:385:\"<div> <b><font color=\"#990000\">{$username}</font></b> 于<font color=\"#990000\"> {$time_m}-{$time_d}     {$time_H}:{$time_i} </font>发表的留言:</div> <div style=\"clear:both;border-bottom:1px dotted #ccc;margin-bottom:5px;width:98%;padding-bottom:6px;\">　<a href=\"$webdb[www_url]/do/guestbook.php?fid=$fid&id=$id#$id\" target=\"_blank\"><font color=\"#666666\">{$title}</font></a></div>\";s:13:\"tplpart_1code\";s:385:\"<div> <b><font color=\"#990000\">{$username}</font></b> 于<font color=\"#990000\"> {$time_m}-{$time_d}     {$time_H}:{$time_i} </font>发表的留言:</div> <div style=\"clear:both;border-bottom:1px dotted #ccc;margin-bottom:5px;width:98%;padding-bottom:6px;\">　<a href=\"$webdb[www_url]/do/guestbook.php?fid=$fid&id=$id#$id\" target=\"_blank\"><font color=\"#666666\">{$title}</font></a></div>\";s:13:\"tplpart_2code\";s:0:\"\";s:3:\"SYS\";s:9:\"guestbook\";s:11:\"roll_height\";s:2:\"50\";s:3:\"url\";N;s:5:\"width\";s:3:\"200\";s:6:\"height\";s:3:\"200\";s:7:\"tplpath\";s:0:\"\";s:6:\"DivTpl\";i:1;s:5:\"fiddb\";N;s:5:\"stype\";s:1:\"4\";s:2:\"yz\";s:3:\"all\";s:7:\"hidefid\";N;s:10:\"timeformat\";s:11:\"Y-m-d H:i:s\";s:5:\"order\";N;s:3:\"asc\";N;s:6:\"levels\";s:3:\"all\";s:7:\"rowspan\";s:1:\"4\";s:3:\"sql\";s:86:\" SELECT A.*,content AS title FROM zc_guestbook A  WHERE 1  ORDER BY A.id DESC LIMIT 4 \";s:7:\"colspan\";s:1:\"1\";s:11:\"content_num\";s:2:\"80\";s:8:\"titlenum\";s:2:\"70\";s:10:\"titleflood\";s:1:\"0\";s:10:\"c_rolltype\";s:1:\"0\";}',
				'divcode'=>'a:3:{s:5:\"div_w\";s:3:\"231\";s:5:\"div_h\";s:3:\"260\";s:11:\"div_bgcolor\";s:0:\"\";}'
				);
$TagDB['c02d']=array(
				'typesystem'=>'1',
				'type'=>'article',
				'code'=>'a:31:{s:13:\"tplpart_1code\";s:460:\"<table width=\"100%\" border=\"0\" cellspacing=\"0\" cellpadding=\"0\" style=\"margin:3px 0px 12px 0px;\">  <tr>     <td rowspan=\"2\" width=\"4%\" style=\"padding-right:3px;\"><a href=\"$url\" target=\"_blank\"><img src=\"$picurl\" width=\"100\" height=\"75\" border=\"0\"></a></td>    <td width=\"96%\"> <a href=\"$url\" target=\"_blank\" style=\"color:#666;font-weight:bold;\">$title</a></td>  </tr>  <tr>     <td width=\"96%\" style=\"color:#929292;text-indent:1em;\">$content</td>  </tr></table>\";s:13:\"tplpart_2code\";s:0:\"\";s:3:\"SYS\";s:7:\"artcile\";s:8:\"rolltype\";s:10:\"scrollLeft\";s:8:\"rolltime\";s:1:\"3\";s:11:\"roll_height\";s:2:\"50\";s:5:\"width\";s:3:\"200\";s:6:\"height\";s:3:\"200\";s:7:\"newhour\";s:2:\"24\";s:7:\"hothits\";s:2:\"30\";s:7:\"amodule\";s:1:\"0\";s:7:\"tplpath\";s:33:\"/common_pic/title_pic_content.jpg\";s:6:\"DivTpl\";i:1;s:5:\"fiddb\";s:2:\"34\";s:5:\"stype\";s:2:\"cp\";s:2:\"yz\";s:1:\"1\";s:7:\"hidefid\";N;s:10:\"timeformat\";s:11:\"Y-m-d H:i:s\";s:5:\"order\";s:5:\"A.aid\";s:3:\"asc\";s:4:\"DESC\";s:6:\"levels\";s:3:\"all\";s:7:\"rowspan\";s:1:\"4\";s:3:\"sql\";s:211:\" SELECT A.*,A.aid AS id,R.content FROM zc_article A LEFT JOIN zc_reply R ON A.aid=R.aid   WHERE A.yz=1  AND A.fid IN (34)  AND A.mid=\'0\'  AND A.ispic=1   AND A.ispic=1  AND R.topic=1 ORDER BY A.aid DESC LIMIT 4 \";s:4:\"sql2\";N;s:7:\"colspan\";s:1:\"1\";s:11:\"content_num\";s:2:\"58\";s:12:\"content_num2\";s:3:\"120\";s:8:\"titlenum\";s:2:\"18\";s:9:\"titlenum2\";s:2:\"40\";s:10:\"titleflood\";s:1:\"0\";s:10:\"c_rolltype\";s:1:\"0\";}',
				'divcode'=>'a:3:{s:5:\"div_w\";s:3:\"230\";s:5:\"div_h\";s:3:\"238\";s:11:\"div_bgcolor\";s:0:\"\";}'
				);
$TagDB['c1']=array(
				'typesystem'=>'1',
				'type'=>'article',
				'code'=>'a:31:{s:13:\"tplpart_1code\";s:254:\"<div style=\"line-height:130%;font-size:13px;color:#ccc;clear:both;\"><span style=\"float:left;\">·<A HREF=\"$url\" target=\'_blank\' style=\"$fontcolor;$fontweight\">$title </a></span><span style=\"float:right;padding-right:3px;color:#666;\">({$hits})</span></div>\";s:13:\"tplpart_2code\";s:296:\"<table width=\"100%\" border=\"0\" cellspacing=\"0\" cellpadding=\"0\" style=\"margin-bottom:4px;\">  <tr>    <td style=\"font-size:13px;font-weight:bold;\">[推荐]<A HREF=\"$url\" target=\"_blank\" style=\"font-size:15px;font-weight:bold;color:#990000;text-decoration: underline;\">$title</A></td>  </tr></table>\";s:3:\"SYS\";s:7:\"artcile\";s:8:\"rolltype\";s:10:\"scrollLeft\";s:8:\"rolltime\";s:1:\"3\";s:11:\"roll_height\";s:2:\"50\";s:5:\"width\";s:3:\"200\";s:6:\"height\";s:3:\"200\";s:7:\"newhour\";s:2:\"24\";s:7:\"hothits\";s:2:\"30\";s:7:\"amodule\";s:3:\"101\";s:7:\"tplpath\";s:32:\"/common_zh_title/zh_bigtitle.jpg\";s:6:\"DivTpl\";i:1;s:5:\"fiddb\";s:8:\"12,26,27\";s:5:\"stype\";s:1:\"t\";s:2:\"yz\";s:1:\"1\";s:7:\"hidefid\";N;s:10:\"timeformat\";s:11:\"Y-m-d H:i:s\";s:5:\"order\";s:10:\"A.posttime\";s:3:\"asc\";s:4:\"DESC\";s:6:\"levels\";s:3:\"all\";s:7:\"rowspan\";s:1:\"7\";s:3:\"sql\";s:133:\" SELECT A.*,A.aid AS id FROM zc_article A  WHERE A.yz=1  AND A.fid IN (12,26,27)  AND A.mid=\'101\'   ORDER BY A.posttime DESC LIMIT 8 \";s:4:\"sql2\";N;s:7:\"colspan\";s:1:\"1\";s:11:\"content_num\";s:2:\"80\";s:12:\"content_num2\";s:3:\"120\";s:8:\"titlenum\";s:2:\"30\";s:9:\"titlenum2\";s:2:\"30\";s:10:\"titleflood\";s:1:\"1\";s:10:\"c_rolltype\";s:1:\"0\";}',
				'divcode'=>'a:3:{s:5:\"div_w\";s:3:\"226\";s:5:\"div_h\";s:3:\"140\";s:11:\"div_bgcolor\";s:0:\"\";}'
				);
$TagDB['c2']=array(
				'typesystem'=>'1',
				'type'=>'article',
				'code'=>'a:31:{s:13:\"tplpart_1code\";s:147:\"<div style=\"padding-top:5px;color:#ccc;\">·<A HREF=\"$url\" target=\'_blank\' style=\"$fontcolor;$fontweight;font-size:13px;\">$title</a> $new $hot</div>\";s:13:\"tplpart_2code\";s:397:\"<table width=\"98%\" border=\"0\" cellspacing=\"0\" cellpadding=\"0\" style=\"margin-bottom:5px;\">  <tr>    <td align=\"left\"><a href=\"$url\" target=\"_blank\" style=\"font-weight:bold;color:#666;\" title=\"$full_title\">$title</a></td>  </tr>  <tr>    <td align=\"left\" height=\"18\" valign=\"middle\" style=\"border-bottom:1px dotted #ccc;text-indent:2em;padding-bottom:5px;color:#929292;\">$content</td>  </tr></table>\";s:3:\"SYS\";s:7:\"artcile\";s:8:\"rolltype\";s:10:\"scrollLeft\";s:8:\"rolltime\";s:1:\"3\";s:11:\"roll_height\";s:2:\"50\";s:5:\"width\";s:3:\"200\";s:6:\"height\";s:3:\"200\";s:7:\"newhour\";s:2:\"24\";s:7:\"hothits\";s:2:\"30\";s:7:\"amodule\";s:1:\"0\";s:7:\"tplpath\";s:33:\"/common_zh_content/zh_content.jpg\";s:6:\"DivTpl\";i:1;s:5:\"fiddb\";s:5:\"35,38\";s:5:\"stype\";s:1:\"t\";s:2:\"yz\";s:1:\"1\";s:7:\"hidefid\";N;s:10:\"timeformat\";s:11:\"Y-m-d H:i:s\";s:5:\"order\";s:10:\"A.posttime\";s:3:\"asc\";s:4:\"DESC\";s:6:\"levels\";s:3:\"all\";s:7:\"rowspan\";s:1:\"5\";s:3:\"sql\";s:189:\" SELECT A.*,A.aid AS id,R.content FROM zc_article A LEFT JOIN zc_reply R ON A.aid=R.aid   WHERE A.yz=1  AND A.fid IN (35,38)  AND A.mid=\'0\'   AND R.topic=1 ORDER BY A.posttime DESC LIMIT 6 \";s:4:\"sql2\";N;s:7:\"colspan\";s:1:\"1\";s:11:\"content_num\";s:2:\"80\";s:12:\"content_num2\";s:2:\"68\";s:8:\"titlenum\";s:2:\"28\";s:9:\"titlenum2\";s:2:\"34\";s:10:\"titleflood\";s:1:\"0\";s:10:\"c_rolltype\";s:1:\"0\";}',
				'divcode'=>'a:3:{s:5:\"div_w\";s:3:\"222\";s:5:\"div_h\";s:3:\"159\";s:11:\"div_bgcolor\";s:0:\"\";}'
				);
$TagDB['c2d']=array(
				'typesystem'=>'0',
				'type'=>'hack_vote',
				'code'=>'<SCRIPT src=\'http://www_qibosoft_com/do/vote.php?job=js&cid=10\'></SCRIPT>',
				'divcode'=>'a:4:{s:6:\"voteid\";s:2:\"10\";s:5:\"div_w\";s:3:\"237\";s:5:\"div_h\";s:3:\"145\";s:11:\"div_bgcolor\";s:0:\"\";}'
				);
$TagDB['c2de']=array(
				'typesystem'=>'0',
				'type'=>'pic',
				'code'=>'a:4:{s:6:\"imgurl\";s:32:\"label/1_20090420130440_bWzOZ.jpg\";s:7:\"imglink\";s:19:\"http://www.371.com/\";s:5:\"width\";s:3:\"242\";s:6:\"height\";s:2:\"98\";}',
				'divcode'=>'a:3:{s:5:\"div_w\";s:3:\"233\";s:5:\"div_h\";s:2:\"87\";s:11:\"div_bgcolor\";s:0:\"\";}'
				);
$TagDB['comarticle']=array(
				'typesystem'=>'1',
				'type'=>'article',
				'code'=>'a:31:{s:13:\"tplpart_1code\";s:1087:\"<table width=\"98%\" border=\"0\" cellspacing=\"0\" cellpadding=\"0\" style=\"margin-bottom:6px;\">  <tr>     <td align=\"left\" style=\"border-bottom:1px dotted #eee;padding-bottom:5px;\">       <div style=\"background:url($webdb[www_url]/images/default/sdigg.gif) no-repeat;width:44px;height:36px;float:left;\">        <div style=\"font-size:13px;text-align:center;padding:0px;font-weight:bold;background:#eee;\" id=\"DiggNum_$id\">$digg_num</div>        <div style=\"text-align:center;font-size:12px;color:#FFF;width:44px;height:20px;overflow:hidden;background:#ccc;\" id=\"DiggDo_$id\"><a href=\"$webdb[www_url]/do/job.php?job=digg&type=vote&id=$id\" target=\"DiggIframe_$id\" style=\"font-size:12px;color:#FFF;\">顶一下</a></div>      </div>      <div style=\"margin-left:4px;float:left;width:195px;\">         <a href=\"$url\" target=\"_blank\" style=\"$fontcolor;$fontweight;font-size:13px;\">$title</a>      </div>      <div style=\"display:none;\"><iframe src=\"$webdb[www_url]/do/job.php?job=digg&type=getnum&id=$id\" width=0 height=0 name=\"DiggIframe_$id\" id=\"DiggIframe_$id\"></iframe></div>    </td>  </tr></table>\";s:13:\"tplpart_2code\";s:0:\"\";s:3:\"SYS\";s:7:\"artcile\";s:8:\"rolltype\";s:10:\"scrollLeft\";s:8:\"rolltime\";s:1:\"3\";s:11:\"roll_height\";s:2:\"50\";s:5:\"width\";s:3:\"200\";s:6:\"height\";s:3:\"200\";s:7:\"newhour\";s:2:\"24\";s:7:\"hothits\";s:2:\"30\";s:7:\"amodule\";s:1:\"0\";s:7:\"tplpath\";s:22:\"/article/title_dig.jpg\";s:6:\"DivTpl\";i:1;s:5:\"fiddb\";N;s:5:\"stype\";s:1:\"t\";s:2:\"yz\";s:1:\"1\";s:7:\"hidefid\";N;s:10:\"timeformat\";s:11:\"Y-m-d H:i:s\";s:5:\"order\";s:10:\"A.digg_num\";s:3:\"asc\";s:4:\"DESC\";s:6:\"levels\";s:3:\"all\";s:7:\"rowspan\";s:1:\"5\";s:3:\"sql\";s:106:\" SELECT A.*,A.aid AS id FROM zc_article A  WHERE A.yz=1  AND A.mid=\'0\'   ORDER BY A.digg_num DESC LIMIT 5 \";s:4:\"sql2\";N;s:7:\"colspan\";s:1:\"1\";s:11:\"content_num\";s:2:\"60\";s:12:\"content_num2\";s:2:\"55\";s:8:\"titlenum\";s:2:\"60\";s:9:\"titlenum2\";s:2:\"26\";s:10:\"titleflood\";s:1:\"0\";s:10:\"c_rolltype\";s:1:\"0\";}',
				'divcode'=>'a:3:{s:5:\"div_w\";s:3:\"246\";s:5:\"div_h\";s:3:\"243\";s:11:\"div_bgcolor\";s:0:\"\";}'
				);
$TagDB['flfg']=array(
				'typesystem'=>'1',
				'type'=>'article',
				'code'=>'a:34:{s:13:\"tplpart_1code\";s:139:\"          <li>
            <h3><a href=\"#\">{$title}</a></h3>
            <p><a href=\"#\" target=\"_blank\">$content</a></p>
          </li>\";s:13:\"tplpart_2code\";s:0:\"\";s:3:\"SYS\";s:7:\"artcile\";s:13:\"RollStyleType\";s:0:\"\";s:7:\"fidtype\";s:1:\"0\";s:8:\"rolltype\";s:10:\"scrollLeft\";s:8:\"rolltime\";s:1:\"3\";s:11:\"roll_height\";s:2:\"50\";s:5:\"width\";s:3:\"250\";s:6:\"height\";s:3:\"187\";s:7:\"newhour\";s:2:\"24\";s:7:\"hothits\";s:3:\"100\";s:7:\"amodule\";s:1:\"0\";s:7:\"tplpath\";s:0:\"\";s:6:\"DivTpl\";i:1;s:5:\"fiddb\";s:2:\"72\";s:5:\"stype\";s:1:\"c\";s:2:\"yz\";s:1:\"1\";s:7:\"hidefid\";N;s:10:\"timeformat\";s:11:\"Y-m-d H:i:s\";s:5:\"order\";s:6:\"A.list\";s:3:\"asc\";s:4:\"DESC\";s:6:\"levels\";s:3:\"all\";s:7:\"rowspan\";s:1:\"5\";s:3:\"sql\";s:169:\" SELECT A.*,A.aid AS id,R.content FROM zc_article A LEFT JOIN zc_reply R ON A.aid=R.aid   WHERE A.yz=1  AND A.fid IN (72)   AND R.topic=1 ORDER BY A.list DESC LIMIT 0,5 \";s:4:\"sql2\";N;s:7:\"colspan\";s:1:\"1\";s:11:\"content_num\";s:2:\"80\";s:12:\"content_num2\";s:3:\"120\";s:8:\"titlenum\";s:2:\"20\";s:9:\"titlenum2\";s:2:\"40\";s:10:\"titleflood\";s:1:\"0\";s:9:\"start_num\";s:1:\"1\";s:10:\"c_rolltype\";s:1:\"0\";}',
				'divcode'=>'a:3:{s:5:\"div_w\";s:2:\"50\";s:5:\"div_h\";s:2:\"30\";s:11:\"div_bgcolor\";s:0:\"\";}'
				);
$TagDB['gqzcxm']=array(
				'typesystem'=>'1',
				'type'=>'article',
				'code'=>'a:34:{s:13:\"tplpart_1code\";s:126:\"<li><a href=\"#\">$title</a><span class=\"Mar01\">￥10000.00</span><span class=\"Mar02\">{$time_Y} -{$time_m}-{$time_d}</span></li>\";s:13:\"tplpart_2code\";s:0:\"\";s:3:\"SYS\";s:7:\"artcile\";s:13:\"RollStyleType\";s:0:\"\";s:7:\"fidtype\";s:1:\"0\";s:8:\"rolltype\";s:10:\"scrollLeft\";s:8:\"rolltime\";s:1:\"3\";s:11:\"roll_height\";s:2:\"50\";s:5:\"width\";s:3:\"250\";s:6:\"height\";s:3:\"187\";s:7:\"newhour\";s:2:\"24\";s:7:\"hothits\";s:3:\"100\";s:7:\"amodule\";s:1:\"0\";s:7:\"tplpath\";s:0:\"\";s:6:\"DivTpl\";i:1;s:5:\"fiddb\";s:2:\"63\";s:5:\"stype\";s:1:\"4\";s:2:\"yz\";s:1:\"1\";s:7:\"hidefid\";N;s:10:\"timeformat\";s:11:\"Y-m-d H:i:s\";s:5:\"order\";s:6:\"A.list\";s:3:\"asc\";s:4:\"DESC\";s:6:\"levels\";s:3:\"all\";s:7:\"rowspan\";s:1:\"9\";s:3:\"sql\";s:108:\" SELECT A.*,A.aid AS id FROM zc_article A  WHERE A.yz=1  AND A.fid IN (63)   ORDER BY A.list DESC LIMIT 0,9 \";s:4:\"sql2\";N;s:7:\"colspan\";s:1:\"1\";s:11:\"content_num\";s:2:\"80\";s:12:\"content_num2\";s:3:\"120\";s:8:\"titlenum\";s:2:\"70\";s:9:\"titlenum2\";s:2:\"40\";s:10:\"titleflood\";s:1:\"0\";s:9:\"start_num\";s:1:\"1\";s:10:\"c_rolltype\";s:1:\"0\";}',
				'divcode'=>'a:3:{s:5:\"div_w\";s:2:\"50\";s:5:\"div_h\";s:2:\"30\";s:11:\"div_bgcolor\";s:0:\"\";}'
				);
$TagDB['gz']=array(
				'typesystem'=>'1',
				'type'=>'article',
				'code'=>'a:34:{s:13:\"tplpart_1code\";s:41:\"          <li><a href=\"#\">$title</a></li>\";s:13:\"tplpart_2code\";s:0:\"\";s:3:\"SYS\";s:7:\"artcile\";s:13:\"RollStyleType\";s:0:\"\";s:7:\"fidtype\";s:1:\"0\";s:8:\"rolltype\";s:10:\"scrollLeft\";s:8:\"rolltime\";s:1:\"3\";s:11:\"roll_height\";s:2:\"50\";s:5:\"width\";s:3:\"250\";s:6:\"height\";s:3:\"187\";s:7:\"newhour\";s:2:\"24\";s:7:\"hothits\";s:3:\"100\";s:7:\"amodule\";s:1:\"0\";s:7:\"tplpath\";s:0:\"\";s:6:\"DivTpl\";i:1;s:5:\"fiddb\";s:2:\"66\";s:5:\"stype\";s:1:\"4\";s:2:\"yz\";s:1:\"1\";s:7:\"hidefid\";N;s:10:\"timeformat\";s:11:\"Y-m-d H:i:s\";s:5:\"order\";s:6:\"A.list\";s:3:\"asc\";s:4:\"DESC\";s:6:\"levels\";s:3:\"all\";s:7:\"rowspan\";s:1:\"5\";s:3:\"sql\";s:108:\" SELECT A.*,A.aid AS id FROM zc_article A  WHERE A.yz=1  AND A.fid IN (66)   ORDER BY A.list DESC LIMIT 0,5 \";s:4:\"sql2\";N;s:7:\"colspan\";s:1:\"1\";s:11:\"content_num\";s:2:\"80\";s:12:\"content_num2\";s:3:\"120\";s:8:\"titlenum\";s:2:\"50\";s:9:\"titlenum2\";s:2:\"40\";s:10:\"titleflood\";s:1:\"0\";s:9:\"start_num\";s:1:\"1\";s:10:\"c_rolltype\";s:1:\"0\";}',
				'divcode'=>'a:3:{s:5:\"div_w\";s:2:\"50\";s:5:\"div_h\";s:2:\"30\";s:11:\"div_bgcolor\";s:0:\"\";}'
				);
$TagDB['gz_pic']=array(
				'typesystem'=>'1',
				'type'=>'article',
				'code'=>'a:34:{s:13:\"tplpart_1code\";s:23:\"<img src=\"{$picurl} \"/>\";s:13:\"tplpart_2code\";s:0:\"\";s:3:\"SYS\";s:7:\"artcile\";s:13:\"RollStyleType\";s:0:\"\";s:7:\"fidtype\";s:1:\"0\";s:8:\"rolltype\";s:10:\"scrollLeft\";s:8:\"rolltime\";s:1:\"3\";s:11:\"roll_height\";s:2:\"50\";s:5:\"width\";s:3:\"250\";s:6:\"height\";s:3:\"187\";s:7:\"newhour\";s:2:\"24\";s:7:\"hothits\";s:3:\"100\";s:7:\"amodule\";s:1:\"0\";s:7:\"tplpath\";s:0:\"\";s:6:\"DivTpl\";i:1;s:5:\"fiddb\";s:2:\"67\";s:5:\"stype\";s:1:\"p\";s:2:\"yz\";s:1:\"1\";s:7:\"hidefid\";N;s:10:\"timeformat\";s:11:\"Y-m-d H:i:s\";s:5:\"order\";s:6:\"A.list\";s:3:\"asc\";s:4:\"DESC\";s:6:\"levels\";s:3:\"all\";s:7:\"rowspan\";s:1:\"5\";s:3:\"sql\";s:138:\" SELECT A.*,A.aid AS id FROM zc_article A  WHERE A.yz=1  AND A.fid IN (67)  AND A.ispic=1   AND A.ispic=1  ORDER BY A.list DESC LIMIT 0,5 \";s:4:\"sql2\";N;s:7:\"colspan\";s:1:\"1\";s:11:\"content_num\";s:2:\"80\";s:12:\"content_num2\";s:3:\"120\";s:8:\"titlenum\";s:2:\"20\";s:9:\"titlenum2\";s:2:\"40\";s:10:\"titleflood\";s:1:\"0\";s:9:\"start_num\";s:1:\"1\";s:10:\"c_rolltype\";s:1:\"0\";}',
				'divcode'=>'a:3:{s:5:\"div_w\";s:2:\"50\";s:5:\"div_h\";s:2:\"30\";s:11:\"div_bgcolor\";s:0:\"\";}'
				);
$TagDB['head_guides']=array(
				'typesystem'=>'0',
				'type'=>'code',
				'code'=>'      <div class=\"ico_guide bbs\"><a href=\"http://www_qibosoft_com/bbs/\" target=\'_blank\'>社区</a></div>
	  <div class=\"ico_guide post\"><a href=\"http://www_qibosoft_com/do/post.php\">投稿</a></div>
	  <div class=\"ico_guide sell\"><a href=\"http://www_qibosoft_com/do/buymoneycard.php?paytype=yeepay\">充值</a></div>
	  <div class=\"ico_guide jf\"><a href=\"http://www_qibosoft_com/do/jf.php\">积分</a></div>
	  <div class=\"ico_guide user\"><a href=\"http://www_qibosoft_com/do/list_form.php?mid=2\">招聘</a></div>
	  <div class=\"ico_guide search\"><a href=\"http://www_qibosoft_com/do/search.php\">搜索</a></div>
	  <div class=\"ico_guide book\"><a href=\"http://www_qibosoft_com/do/guestbook.php\">留言</a></div>
	  <div class=\"ico_guide digg\"><a href=\"http://www_qibosoft_com/do/listsp.php?fid=1\">专题</a></div>',
				'divcode'=>'a:4:{s:9:\"html_edit\";s:0:\"\";s:5:\"div_w\";s:3:\"700\";s:5:\"div_h\";s:2:\"50\";s:11:\"div_bgcolor\";s:0:\"\";}'
				);
$TagDB['head_search']=array(
				'typesystem'=>'0',
				'type'=>'code',
				'code'=>'<a href=\"http://www_qibosoft_com/do/search.php?keyword=齐博CMS\" class=\"b\">齐博CMS</a> 
        <a href=\"http://www_qibosoft_com/do/search.php?keyword=注册域名\" target=\"_blank\">注册域名</a> 
        <a href=\"http://www_qibosoft_com/do/search.php?keyword=CEO\" target=\"_blank\">CEO</a> 
        <a href=\"http://www_qibosoft_com/do/search.php?keyword=源码下载\" target=\"_blank\">源码下载</a> 
        <a href=\"http://www_qibosoft_com/do/search.php?keyword=IT资讯\" target=\"_blank\">IT资讯</a> 
        <a href=\"http://www_qibosoft_com/do/search.php?keyword=主机空间\" target=\"_blank\">主机空间</a> 
        <a href=\"http://www_qibosoft_com/do/search.php?keyword=建站手册\" class=\"b\" target=\"_blank\">建站手册</a> 
        <a href=\"http://www_qibosoft_com/do/search.php?keyword=论坛程序\" target=\"_blank\">论坛程序</a> 
        <a href=\"http://www_qibosoft_com/do/search.php?keyword=健康咨询\" class=\"b\" target=\"_blank\">健康咨询</a>',
				'divcode'=>'a:4:{s:9:\"html_edit\";N;s:5:\"div_w\";s:3:\"617\";s:5:\"div_h\";s:2:\"32\";s:11:\"div_bgcolor\";s:0:\"\";}'
				);
$TagDB['hotarticle']=array(
				'typesystem'=>'1',
				'type'=>'article',
				'code'=>'a:31:{s:13:\"tplpart_1code\";s:212:\"<div style=\"background:url($webdb[www_url]/images/default/i/$i.gif) no-repeat 0px 2px;height:23px;text-indent:1.3em;\"><A HREF=\"$url\" target=\'_blank\' style=\"$fontcolor;$fontweight;font-size:13px;\">$title</a></div>\";s:13:\"tplpart_2code\";s:0:\"\";s:3:\"SYS\";s:7:\"artcile\";s:8:\"rolltype\";s:10:\"scrollLeft\";s:8:\"rolltime\";s:1:\"3\";s:11:\"roll_height\";s:2:\"50\";s:5:\"width\";s:3:\"200\";s:6:\"height\";s:3:\"200\";s:7:\"newhour\";s:2:\"24\";s:7:\"hothits\";s:2:\"30\";s:7:\"amodule\";s:1:\"0\";s:7:\"tplpath\";s:27:\"/common_title/2title_i2.jpg\";s:6:\"DivTpl\";i:1;s:5:\"fiddb\";N;s:5:\"stype\";s:1:\"t\";s:2:\"yz\";s:3:\"all\";s:7:\"hidefid\";N;s:10:\"timeformat\";s:11:\"Y-m-d H:i:s\";s:5:\"order\";s:6:\"A.hits\";s:3:\"asc\";s:4:\"DESC\";s:6:\"levels\";s:3:\"all\";s:7:\"rowspan\";s:1:\"9\";s:3:\"sql\";s:97:\" SELECT A.*,A.aid AS id FROM zc_article A  WHERE 1  AND A.mid=\'0\'   ORDER BY A.hits DESC LIMIT 9 \";s:4:\"sql2\";N;s:7:\"colspan\";s:1:\"1\";s:11:\"content_num\";s:2:\"80\";s:12:\"content_num2\";s:3:\"120\";s:8:\"titlenum\";s:2:\"30\";s:9:\"titlenum2\";s:2:\"40\";s:10:\"titleflood\";s:1:\"0\";s:10:\"c_rolltype\";s:1:\"0\";}',
				'divcode'=>'a:3:{s:5:\"div_w\";s:3:\"228\";s:5:\"div_h\";s:3:\"204\";s:11:\"div_bgcolor\";s:0:\"\";}'
				);
$TagDB['hxwjr']=array(
				'typesystem'=>'1',
				'type'=>'article',
				'code'=>'a:34:{s:13:\"tplpart_1code\";s:37:\"<li>· <a href=\"#\">{$title} </a></li>\";s:13:\"tplpart_2code\";s:0:\"\";s:3:\"SYS\";s:7:\"artcile\";s:13:\"RollStyleType\";s:0:\"\";s:7:\"fidtype\";s:1:\"0\";s:8:\"rolltype\";s:10:\"scrollLeft\";s:8:\"rolltime\";s:1:\"3\";s:11:\"roll_height\";s:2:\"50\";s:5:\"width\";s:3:\"250\";s:6:\"height\";s:3:\"187\";s:7:\"newhour\";s:2:\"24\";s:7:\"hothits\";s:3:\"100\";s:7:\"amodule\";s:1:\"0\";s:7:\"tplpath\";s:0:\"\";s:6:\"DivTpl\";i:1;s:5:\"fiddb\";s:2:\"69\";s:5:\"stype\";s:1:\"4\";s:2:\"yz\";s:1:\"1\";s:7:\"hidefid\";N;s:10:\"timeformat\";s:11:\"Y-m-d H:i:s\";s:5:\"order\";s:6:\"A.list\";s:3:\"asc\";s:4:\"DESC\";s:6:\"levels\";s:3:\"all\";s:7:\"rowspan\";s:1:\"5\";s:3:\"sql\";s:108:\" SELECT A.*,A.aid AS id FROM zc_article A  WHERE A.yz=1  AND A.fid IN (69)   ORDER BY A.list DESC LIMIT 0,5 \";s:4:\"sql2\";N;s:7:\"colspan\";s:1:\"1\";s:11:\"content_num\";s:2:\"80\";s:12:\"content_num2\";s:3:\"120\";s:8:\"titlenum\";s:2:\"60\";s:9:\"titlenum2\";s:2:\"40\";s:10:\"titleflood\";s:1:\"0\";s:9:\"start_num\";s:1:\"1\";s:10:\"c_rolltype\";s:1:\"0\";}',
				'divcode'=>'a:3:{s:5:\"div_w\";s:2:\"50\";s:5:\"div_h\";s:2:\"30\";s:11:\"div_bgcolor\";s:0:\"\";}'
				);
$TagDB['index_5t2']=array(
				'typesystem'=>'0',
				'type'=>'code',
				'code'=>'	<span id=\"Span1\" onmouseover=\"ShowTab(1,1,6)\">文章</span>
            <span id=\"Span2\" onmouseover=\"ShowTab(2,1,6)\">图片</span>
            <span id=\"Span3\" onmouseover=\"ShowTab(3,1,6)\">影视</span>
            <span id=\"Span4\" onmouseover=\"ShowTab(4,1,6)\">商场</span>
            <span id=\"Span5\" onmouseover=\"ShowTab(5,1,6)\">flash</span>',
				'divcode'=>'a:4:{s:9:\"html_edit\";N;s:5:\"div_w\";s:0:\"\";s:5:\"div_h\";s:0:\"\";s:11:\"div_bgcolor\";s:0:\"\";}'
				);
$TagDB['index_ad1']=array(
				'typesystem'=>'0',
				'type'=>'pic',
				'code'=>'a:4:{s:6:\"imgurl\";s:32:\"label/1_20101109141123_k355a.jpg\";s:7:\"imglink\";s:36:\"http://www.chinaccnet.com/hyperv.php\";s:5:\"width\";s:3:\"740\";s:6:\"height\";s:2:\"70\";}',
				'divcode'=>'a:3:{s:5:\"div_w\";s:3:\"737\";s:5:\"div_h\";s:2:\"67\";s:11:\"div_bgcolor\";s:0:\"\";}'
				);
$TagDB['index_ad2']=array(
				'typesystem'=>'0',
				'type'=>'pic',
				'code'=>'a:4:{s:6:\"imgurl\";s:32:\"label/1_20101109141150_bnrt2.jpg\";s:7:\"imglink\";s:22:\"http://www.yeepay.com/\";s:5:\"width\";s:3:\"240\";s:6:\"height\";s:2:\"70\";}',
				'divcode'=>'a:3:{s:5:\"div_w\";s:3:\"240\";s:5:\"div_h\";s:2:\"68\";s:11:\"div_bgcolor\";s:0:\"\";}'
				);
$TagDB['index_ad3']=array(
				'typesystem'=>'0',
				'type'=>'pic',
				'code'=>'a:4:{s:6:\"imgurl\";s:32:\"label/1_20101027171006_q2b2q.gif\";s:7:\"imglink\";s:18:\"http://www.sudu.cn\";s:5:\"width\";s:3:\"220\";s:6:\"height\";s:2:\"50\";}',
				'divcode'=>'a:3:{s:5:\"div_w\";s:2:\"50\";s:5:\"div_h\";s:2:\"21\";s:11:\"div_bgcolor\";s:0:\"\";}'
				);
$TagDB['index_ad4']=array(
				'typesystem'=>'0',
				'type'=>'pic',
				'code'=>'a:4:{s:6:\"imgurl\";s:32:\"label/1_20101027171018_bzfar.gif\";s:7:\"imglink\";s:21:\"http://www.eydns.com/\";s:5:\"width\";s:3:\"220\";s:6:\"height\";s:2:\"50\";}',
				'divcode'=>'a:3:{s:5:\"div_w\";s:2:\"50\";s:5:\"div_h\";s:2:\"21\";s:11:\"div_bgcolor\";s:0:\"\";}'
				);
$TagDB['index_ad5']=array(
				'typesystem'=>'0',
				'type'=>'pic',
				'code'=>'a:4:{s:6:\"imgurl\";s:32:\"label/1_20101027171021_fndoi.gif\";s:7:\"imglink\";s:26:\"http://www.chinaccnet.com/\";s:5:\"width\";s:3:\"220\";s:6:\"height\";s:2:\"50\";}',
				'divcode'=>'a:3:{s:5:\"div_w\";s:2:\"50\";s:5:\"div_h\";s:2:\"21\";s:11:\"div_bgcolor\";s:0:\"\";}'
				);
$TagDB['index_ad7']=array(
				'typesystem'=>'0',
				'type'=>'pic',
				'code'=>'a:4:{s:6:\"imgurl\";s:32:\"label/1_20101109141121_uu6ot.gif\";s:7:\"imglink\";s:19:\"http://u.admin5.com\";s:5:\"width\";s:3:\"990\";s:6:\"height\";s:2:\"70\";}',
				'divcode'=>'a:3:{s:5:\"div_w\";s:3:\"991\";s:5:\"div_h\";s:2:\"68\";s:11:\"div_bgcolor\";s:0:\"\";}'
				);
$TagDB['index_ad8']=array(
				'typesystem'=>'0',
				'type'=>'pic',
				'code'=>'a:4:{s:6:\"imgurl\";s:32:\"label/1_20101109141128_eq3o1.jpg\";s:7:\"imglink\";s:26:\"http://www.chinaccnet.com/\";s:5:\"width\";s:3:\"270\";s:6:\"height\";s:2:\"60\";}',
				'divcode'=>'a:3:{s:5:\"div_w\";s:3:\"269\";s:5:\"div_h\";s:2:\"57\";s:11:\"div_bgcolor\";s:0:\"\";}'
				);
$TagDB['index_bfj3']=array(
				'typesystem'=>'0',
				'type'=>'code',
				'code'=>'<span id=\"Span11\" onmouseover=\"ShowTab(11,11,15)\">服装</span>
                    <span id=\"Span12\" onmouseover=\"ShowTab(12,11,15)\">数码</span>
                    <span id=\"Span13\" onmouseover=\"ShowTab(13,11,15)\">食品</span>
                    <span id=\"Span14\" onmouseover=\"ShowTab(14,11,15)\">美容</span>',
				'divcode'=>'a:4:{s:9:\"html_edit\";N;s:5:\"div_w\";s:0:\"\";s:5:\"div_h\";s:0:\"\";s:11:\"div_bgcolor\";s:0:\"\";}'
				);
$TagDB['index_c1']=array(
				'typesystem'=>'1',
				'type'=>'article',
				'code'=>'a:32:{s:13:\"tplpart_1code\";s:101:\"  <div class=\"list\"><a href=\"$url\" target=\"_blank\">$title</a><span>[{$time_m}/{$time_d}]</span></div>\";s:13:\"tplpart_2code\";s:719:\"<table width=\"100%\" border=\"0\" cellspacing=\"0\" cellpadding=\"0\">                          <tr>                                                <td class=\"img\"><a href=\"$url\" target=\"_blank\"><img src=\"$picurl\" onerror=\"this.src=\'$webdb[www_url]/images/default/nopic.jpg\'\" width=\"80\" height=\"60\"/></a></td>                            <td>                                                      <div class=\"t\"><a href=\"$url\" target=\"_blank\">$title</a></div>                                                      <div class=\"m\">　　{$content}<a href=\"$url\" target=\"_blank\">[详细]</a></div>                            </td>                          </tr>                        </table>                                       \";s:3:\"SYS\";s:7:\"artcile\";s:13:\"RollStyleType\";s:0:\"\";s:8:\"rolltype\";s:10:\"scrollLeft\";s:8:\"rolltime\";s:1:\"3\";s:11:\"roll_height\";s:2:\"50\";s:5:\"width\";s:3:\"250\";s:6:\"height\";s:3:\"187\";s:7:\"newhour\";s:2:\"24\";s:7:\"hothits\";s:3:\"100\";s:7:\"amodule\";s:1:\"0\";s:7:\"tplpath\";s:33:\"/common_zh_content/zh_content.jpg\";s:6:\"DivTpl\";i:1;s:5:\"fiddb\";N;s:5:\"stype\";s:1:\"t\";s:2:\"yz\";s:1:\"1\";s:7:\"hidefid\";N;s:10:\"timeformat\";s:11:\"Y-m-d H:i:s\";s:5:\"order\";s:6:\"A.list\";s:3:\"asc\";s:4:\"DESC\";s:6:\"levels\";s:3:\"all\";s:7:\"rowspan\";s:1:\"5\";s:3:\"sql\";s:163:\" SELECT A.*,A.aid AS id,R.content FROM zc_article A LEFT JOIN zc_reply R ON A.aid=R.aid   WHERE A.yz=1  AND A.mid=\'0\'   AND R.topic=1 ORDER BY A.list DESC LIMIT 6 \";s:4:\"sql2\";s:175:\" SELECT A.*,A.aid AS id,R.content FROM zc_article A LEFT JOIN zc_reply R ON A.aid=R.aid  WHERE A.yz=1  AND A.mid=\'0\'  AND A.ispic=1 AND R.topic=1 ORDER BY A.list DESC LIMIT 1 \";s:7:\"colspan\";s:1:\"1\";s:11:\"content_num\";s:2:\"80\";s:12:\"content_num2\";s:2:\"70\";s:8:\"titlenum\";s:2:\"36\";s:9:\"titlenum2\";s:2:\"40\";s:10:\"titleflood\";s:1:\"0\";s:10:\"c_rolltype\";s:1:\"0\";}',
				'divcode'=>'a:3:{s:5:\"div_w\";s:3:\"341\";s:5:\"div_h\";s:3:\"220\";s:11:\"div_bgcolor\";s:0:\"\";}'
				);
$TagDB['index_c2']=array(
				'typesystem'=>'1',
				'type'=>'article',
				'code'=>'a:32:{s:13:\"tplpart_1code\";s:101:\"  <div class=\"list\"><a href=\"$url\" target=\"_blank\">$title</a><span>[{$time_m}/{$time_d}]</span></div>\";s:13:\"tplpart_2code\";s:718:\"<table width=\"100%\" border=\"0\" cellspacing=\"0\" cellpadding=\"0\">                          <tr>                                                <td class=\"img\"><a href=\"$url\" target=\"_blank\"><img src=\"$picurl\" onerror=\"this.src=\'$webdb[www_url]/images/default/nopic.jpg\'\" width=\"80\" height=\"60\"/></a></td>                            <td>                                                      <div class=\"t\"><a href=\"$url\" target=\"_blank\">$title</a></div>                                                      <div class=\"m\">　　{$content}<a href=\"$url\" target=\"_blank\">[详细]</a></div>                            </td>                          </tr>                        </table>                                      \";s:3:\"SYS\";s:7:\"artcile\";s:13:\"RollStyleType\";s:0:\"\";s:8:\"rolltype\";s:10:\"scrollLeft\";s:8:\"rolltime\";s:1:\"3\";s:11:\"roll_height\";s:2:\"50\";s:5:\"width\";s:3:\"250\";s:6:\"height\";s:3:\"187\";s:7:\"newhour\";s:2:\"24\";s:7:\"hothits\";s:3:\"100\";s:7:\"amodule\";s:1:\"0\";s:7:\"tplpath\";s:33:\"/common_zh_content/zh_content.jpg\";s:6:\"DivTpl\";i:1;s:5:\"fiddb\";N;s:5:\"stype\";s:1:\"t\";s:2:\"yz\";s:1:\"1\";s:7:\"hidefid\";N;s:10:\"timeformat\";s:11:\"Y-m-d H:i:s\";s:5:\"order\";s:6:\"A.list\";s:3:\"asc\";s:3:\"ASC\";s:6:\"levels\";s:3:\"all\";s:7:\"rowspan\";s:1:\"5\";s:3:\"sql\";s:162:\" SELECT A.*,A.aid AS id,R.content FROM zc_article A LEFT JOIN zc_reply R ON A.aid=R.aid   WHERE A.yz=1  AND A.mid=\'0\'   AND R.topic=1 ORDER BY A.list ASC LIMIT 6 \";s:4:\"sql2\";s:174:\" SELECT A.*,A.aid AS id,R.content FROM zc_article A LEFT JOIN zc_reply R ON A.aid=R.aid  WHERE A.yz=1  AND A.mid=\'0\'  AND A.ispic=1 AND R.topic=1 ORDER BY A.list ASC LIMIT 1 \";s:7:\"colspan\";s:1:\"1\";s:11:\"content_num\";s:2:\"80\";s:12:\"content_num2\";s:2:\"70\";s:8:\"titlenum\";s:2:\"36\";s:9:\"titlenum2\";s:2:\"40\";s:10:\"titleflood\";s:1:\"0\";s:10:\"c_rolltype\";s:1:\"0\";}',
				'divcode'=>'a:3:{s:5:\"div_w\";s:3:\"346\";s:5:\"div_h\";s:3:\"229\";s:11:\"div_bgcolor\";s:0:\"\";}'
				);
$TagDB['index_cc1']=array(
				'typesystem'=>'0',
				'type'=>'code',
				'code'=>'<span>IT业界</span><a href=\"#\">更多&gt;&gt;</a>',
				'divcode'=>'a:4:{s:9:\"html_edit\";N;s:5:\"div_w\";s:0:\"\";s:5:\"div_h\";s:0:\"\";s:11:\"div_bgcolor\";s:0:\"\";}'
				);
$TagDB['index_cc2']=array(
				'typesystem'=>'0',
				'type'=>'code',
				'code'=>'<span>社会民生</span><a href=\"#\">更多&gt;&gt;</a>',
				'divcode'=>'a:4:{s:9:\"html_edit\";N;s:5:\"div_w\";s:0:\"\";s:5:\"div_h\";s:0:\"\";s:11:\"div_bgcolor\";s:0:\"\";}'
				);
$TagDB['index_digg']=array(
				'typesystem'=>'1',
				'type'=>'article',
				'code'=>'a:32:{s:13:\"tplpart_1code\";s:578:\"<table width=\"100%\" border=\"0\" cellspacing=\"0\" cellpadding=\"0\" class=\"listConcern\">                  <tr>                    <td class=\"L\"><div class=\"n\" id=\"DiggNum_$id\">$digg_num</div><div class=\"d\"><a href=\"$webdb[www_url]/do/job.php?job=digg&type=vote&id=$id\" target=\"DiggIframe_$id\">顶一下</a></div></td>                    <td class=\"R\"><a href=\"$url\" class=\"a$i\" target=\"_blank\">$title</a></td>                  </tr>                </table><div style=\"display:none;\"><iframe src=\"about:blank\" width=0 height=0 name=\"DiggIframe_$id\" id=\"DiggIframe_$id\"></iframe></div>\";s:13:\"tplpart_2code\";s:0:\"\";s:3:\"SYS\";s:7:\"artcile\";s:13:\"RollStyleType\";s:0:\"\";s:8:\"rolltype\";s:10:\"scrollLeft\";s:8:\"rolltime\";s:1:\"3\";s:11:\"roll_height\";s:2:\"50\";s:5:\"width\";s:3:\"250\";s:6:\"height\";s:3:\"187\";s:7:\"newhour\";s:2:\"24\";s:7:\"hothits\";s:3:\"100\";s:7:\"amodule\";s:1:\"0\";s:7:\"tplpath\";s:22:\"/article/title_dig.jpg\";s:6:\"DivTpl\";i:1;s:5:\"fiddb\";N;s:5:\"stype\";s:1:\"t\";s:2:\"yz\";s:1:\"1\";s:7:\"hidefid\";N;s:10:\"timeformat\";s:11:\"Y-m-d H:i:s\";s:5:\"order\";s:6:\"A.list\";s:3:\"asc\";s:4:\"DESC\";s:6:\"levels\";s:3:\"all\";s:7:\"rowspan\";s:1:\"4\";s:3:\"sql\";s:102:\" SELECT A.*,A.aid AS id FROM zc_article A  WHERE A.yz=1  AND A.mid=\'0\'   ORDER BY A.list DESC LIMIT 4 \";s:4:\"sql2\";N;s:7:\"colspan\";s:1:\"1\";s:11:\"content_num\";s:2:\"80\";s:12:\"content_num2\";s:3:\"120\";s:8:\"titlenum\";s:2:\"50\";s:9:\"titlenum2\";s:2:\"40\";s:10:\"titleflood\";s:1:\"0\";s:10:\"c_rolltype\";s:1:\"0\";}',
				'divcode'=>'a:3:{s:5:\"div_w\";s:3:\"223\";s:5:\"div_h\";s:3:\"232\";s:11:\"div_bgcolor\";s:0:\"\";}'
				);
$TagDB['index_down']=array(
				'typesystem'=>'1',
				'type'=>'article',
				'code'=>'a:32:{s:13:\"tplpart_1code\";s:91:\"<div class=\"listc$i\"><a href=\"$url\" target=\"_blank\">$title</a><span>{$hits}次</span></div>\";s:13:\"tplpart_2code\";s:0:\"\";s:3:\"SYS\";s:7:\"artcile\";s:13:\"RollStyleType\";s:0:\"\";s:8:\"rolltype\";s:10:\"scrollLeft\";s:8:\"rolltime\";s:1:\"3\";s:11:\"roll_height\";s:2:\"50\";s:5:\"width\";s:3:\"250\";s:6:\"height\";s:3:\"187\";s:7:\"newhour\";s:2:\"24\";s:7:\"hothits\";s:3:\"100\";s:7:\"amodule\";s:1:\"0\";s:7:\"tplpath\";s:0:\"\";s:6:\"DivTpl\";i:1;s:5:\"fiddb\";N;s:5:\"stype\";s:1:\"4\";s:2:\"yz\";s:1:\"1\";s:7:\"hidefid\";N;s:10:\"timeformat\";s:11:\"Y-m-d H:i:s\";s:5:\"order\";s:6:\"A.list\";s:3:\"asc\";s:4:\"DESC\";s:6:\"levels\";s:3:\"all\";s:7:\"rowspan\";s:2:\"10\";s:3:\"sql\";s:103:\" SELECT A.*,A.aid AS id FROM zc_article A  WHERE A.yz=1  AND A.mid=\'0\'   ORDER BY A.list DESC LIMIT 10 \";s:4:\"sql2\";N;s:7:\"colspan\";s:1:\"1\";s:11:\"content_num\";s:2:\"80\";s:12:\"content_num2\";s:3:\"120\";s:8:\"titlenum\";s:2:\"26\";s:9:\"titlenum2\";s:2:\"40\";s:10:\"titleflood\";s:1:\"0\";s:10:\"c_rolltype\";s:1:\"0\";}',
				'divcode'=>'a:3:{s:5:\"div_w\";s:3:\"206\";s:5:\"div_h\";s:3:\"254\";s:11:\"div_bgcolor\";s:0:\"\";}'
				);
$TagDB['index_hot1']=array(
				'typesystem'=>'1',
				'type'=>'article',
				'code'=>'a:32:{s:13:\"tplpart_1code\";s:68:\"<div class=\"listb$i\"><a href=\"$url\" target=\"_blank\">$title</a></div>\";s:13:\"tplpart_2code\";s:0:\"\";s:3:\"SYS\";s:7:\"artcile\";s:13:\"RollStyleType\";s:0:\"\";s:8:\"rolltype\";s:10:\"scrollLeft\";s:8:\"rolltime\";s:1:\"3\";s:11:\"roll_height\";s:2:\"50\";s:5:\"width\";s:3:\"250\";s:6:\"height\";s:3:\"187\";s:7:\"newhour\";s:2:\"24\";s:7:\"hothits\";s:3:\"100\";s:7:\"amodule\";s:1:\"0\";s:7:\"tplpath\";s:0:\"\";s:6:\"DivTpl\";i:1;s:5:\"fiddb\";N;s:5:\"stype\";s:1:\"4\";s:2:\"yz\";s:1:\"1\";s:7:\"hidefid\";N;s:10:\"timeformat\";s:11:\"Y-m-d H:i:s\";s:5:\"order\";s:6:\"A.list\";s:3:\"asc\";s:4:\"DESC\";s:6:\"levels\";s:3:\"all\";s:7:\"rowspan\";s:1:\"8\";s:3:\"sql\";s:102:\" SELECT A.*,A.aid AS id FROM zc_article A  WHERE A.yz=1  AND A.mid=\'0\'   ORDER BY A.list DESC LIMIT 8 \";s:4:\"sql2\";N;s:7:\"colspan\";s:1:\"1\";s:11:\"content_num\";s:2:\"80\";s:12:\"content_num2\";s:3:\"120\";s:8:\"titlenum\";s:2:\"34\";s:9:\"titlenum2\";s:2:\"40\";s:10:\"titleflood\";s:1:\"0\";s:10:\"c_rolltype\";s:1:\"0\";}',
				'divcode'=>'a:3:{s:5:\"div_w\";s:3:\"206\";s:5:\"div_h\";s:3:\"204\";s:11:\"div_bgcolor\";s:0:\"\";}'
				);
$TagDB['index_htjh']=array(
				'typesystem'=>'1',
				'type'=>'article',
				'code'=>'a:34:{s:13:\"tplpart_1code\";s:42:\"        <li>· <a href=\"#\">$title</a></li>\";s:13:\"tplpart_2code\";s:0:\"\";s:3:\"SYS\";s:7:\"artcile\";s:13:\"RollStyleType\";s:0:\"\";s:7:\"fidtype\";s:1:\"0\";s:8:\"rolltype\";s:10:\"scrollLeft\";s:8:\"rolltime\";s:1:\"3\";s:11:\"roll_height\";s:2:\"50\";s:5:\"width\";s:3:\"250\";s:6:\"height\";s:3:\"187\";s:7:\"newhour\";s:2:\"24\";s:7:\"hothits\";s:3:\"100\";s:7:\"amodule\";s:1:\"0\";s:7:\"tplpath\";s:0:\"\";s:6:\"DivTpl\";i:1;s:5:\"fiddb\";s:2:\"59\";s:5:\"stype\";s:1:\"4\";s:2:\"yz\";s:1:\"1\";s:7:\"hidefid\";N;s:10:\"timeformat\";s:11:\"Y-m-d H:i:s\";s:5:\"order\";s:6:\"A.list\";s:3:\"asc\";s:4:\"DESC\";s:6:\"levels\";s:3:\"all\";s:7:\"rowspan\";s:1:\"7\";s:3:\"sql\";s:108:\" SELECT A.*,A.aid AS id FROM zc_article A  WHERE A.yz=1  AND A.fid IN (59)   ORDER BY A.list DESC LIMIT 0,7 \";s:4:\"sql2\";N;s:7:\"colspan\";s:1:\"1\";s:11:\"content_num\";s:2:\"80\";s:12:\"content_num2\";s:3:\"120\";s:8:\"titlenum\";s:2:\"50\";s:9:\"titlenum2\";s:2:\"40\";s:10:\"titleflood\";s:1:\"0\";s:9:\"start_num\";s:1:\"1\";s:10:\"c_rolltype\";s:1:\"0\";}',
				'divcode'=>'a:3:{s:5:\"div_w\";s:2:\"50\";s:5:\"div_h\";s:2:\"30\";s:11:\"div_bgcolor\";s:0:\"\";}'
				);
$TagDB['index_j1']=array(
				'typesystem'=>'1',
				'type'=>'article',
				'code'=>'a:32:{s:13:\"tplpart_1code\";s:213:\"<div class=\"list$i\">                    	<span class=\"t\"><a href=\"$url\" target=\"_blank\">$title</a></span>                        <span class=\"c\">&nbsp;&nbsp;&nbsp;&nbsp;{$content}.</span>                    </div>\";s:13:\"tplpart_2code\";s:0:\"\";s:3:\"SYS\";s:7:\"artcile\";s:13:\"RollStyleType\";s:0:\"\";s:8:\"rolltype\";s:10:\"scrollLeft\";s:8:\"rolltime\";s:1:\"3\";s:11:\"roll_height\";s:2:\"50\";s:5:\"width\";s:3:\"250\";s:6:\"height\";s:3:\"187\";s:7:\"newhour\";s:2:\"24\";s:7:\"hothits\";s:3:\"100\";s:7:\"amodule\";s:1:\"0\";s:7:\"tplpath\";s:0:\"\";s:6:\"DivTpl\";i:1;s:5:\"fiddb\";N;s:5:\"stype\";s:1:\"c\";s:2:\"yz\";s:1:\"1\";s:7:\"hidefid\";N;s:10:\"timeformat\";s:11:\"Y-m-d H:i:s\";s:5:\"order\";s:6:\"A.list\";s:3:\"asc\";s:4:\"DESC\";s:6:\"levels\";s:3:\"all\";s:7:\"rowspan\";s:1:\"7\";s:3:\"sql\";s:163:\" SELECT A.*,A.aid AS id,R.content FROM zc_article A LEFT JOIN zc_reply R ON A.aid=R.aid   WHERE A.yz=1  AND A.mid=\'0\'   AND R.topic=1 ORDER BY A.list DESC LIMIT 7 \";s:4:\"sql2\";N;s:7:\"colspan\";s:1:\"1\";s:11:\"content_num\";s:2:\"94\";s:12:\"content_num2\";s:3:\"120\";s:8:\"titlenum\";s:2:\"40\";s:9:\"titlenum2\";s:2:\"40\";s:10:\"titleflood\";s:1:\"0\";s:10:\"c_rolltype\";s:1:\"0\";}',
				'divcode'=>'a:3:{s:5:\"div_w\";s:3:\"271\";s:5:\"div_h\";s:3:\"237\";s:11:\"div_bgcolor\";s:0:\"\";}'
				);
$TagDB['index_j2']=array(
				'typesystem'=>'1',
				'type'=>'comment',
				'code'=>'a:25:{s:9:\"tplpart_1\";s:285:\"<div class=\"list\"> <span class=\"t\"><em>{$username}</em> 于 {$time_m}-{$time_d}                       00:54 对 <a href=\"#\" target=\"_blank\">$article</a></span>                       <span class=\"a\">发表如下评论</span> <span class=\"c\">{$title}...</span>                     </div>\";s:13:\"tplpart_1code\";s:285:\"<div class=\"list\"> <span class=\"t\"><em>{$username}</em> 于 {$time_m}-{$time_d}                       00:54 对 <a href=\"#\" target=\"_blank\">$article</a></span>                       <span class=\"a\">发表如下评论</span> <span class=\"c\">{$title}...</span>                     </div>\";s:13:\"tplpart_2code\";s:0:\"\";s:3:\"SYS\";s:7:\"comment\";s:11:\"roll_height\";s:2:\"50\";s:3:\"url\";N;s:5:\"width\";s:3:\"200\";s:6:\"height\";s:3:\"200\";s:7:\"tplpath\";s:0:\"\";s:6:\"DivTpl\";i:1;s:5:\"fiddb\";N;s:5:\"stype\";s:1:\"4\";s:2:\"yz\";s:1:\"1\";s:7:\"hidefid\";N;s:10:\"timeformat\";s:11:\"Y-m-d H:i:s\";s:5:\"order\";N;s:3:\"asc\";N;s:6:\"levels\";s:3:\"all\";s:7:\"rowspan\";s:1:\"3\";s:3:\"sql\";s:149:\" SELECT A.*,A.content AS title,B.title AS article FROM zc_comment A LEFT JOIN zc_article B ON A.aid=B.aid  WHERE A.yz=1  ORDER BY A.cid DESC LIMIT 3 \";s:7:\"colspan\";s:1:\"1\";s:11:\"content_num\";s:2:\"80\";s:8:\"titlenum\";s:2:\"50\";s:10:\"titleflood\";s:1:\"0\";s:10:\"c_rolltype\";s:1:\"0\";}',
				'divcode'=>'a:3:{s:5:\"div_w\";s:3:\"407\";s:5:\"div_h\";s:3:\"194\";s:11:\"div_bgcolor\";s:0:\"\";}'
				);
$TagDB['index_j3']=array(
				'typesystem'=>'1',
				'type'=>'article',
				'code'=>'a:33:{s:13:\"tplpart_1code\";s:495:\"	<div class=\"listpic\">                                  <div class=\"img\"><a href=\"$url\" target=\"_blank\"><img src=\"$picurl\" onerror=\"this.src=\'$webdb[www_url]/images/default/nopic.jpg\'\" width=\"120\" height=\"90\"/></a></div>                                  <div class=\"t\"><a href=\"$url\" target=\"_blank\">$title</a></div>                    <div class=\"p\"><strike>市场价:￥{$martprice}</strike></div>                    <div class=\"p\"><em>现售价:￥{$nowprice}</em></div>                </div>\";s:13:\"tplpart_2code\";s:0:\"\";s:3:\"SYS\";s:7:\"artcile\";s:13:\"RollStyleType\";s:0:\"\";s:7:\"fidtype\";s:1:\"0\";s:8:\"rolltype\";s:10:\"scrollLeft\";s:8:\"rolltime\";s:1:\"3\";s:11:\"roll_height\";s:2:\"50\";s:5:\"width\";s:3:\"250\";s:6:\"height\";s:3:\"187\";s:7:\"newhour\";s:2:\"24\";s:7:\"hothits\";s:3:\"100\";s:7:\"amodule\";s:3:\"103\";s:7:\"tplpath\";s:0:\"\";s:6:\"DivTpl\";i:1;s:5:\"fiddb\";N;s:5:\"stype\";s:1:\"p\";s:2:\"yz\";s:1:\"1\";s:7:\"hidefid\";N;s:10:\"timeformat\";s:11:\"Y-m-d H:i:s\";s:5:\"order\";s:6:\"A.list\";s:3:\"asc\";s:4:\"DESC\";s:6:\"levels\";s:3:\"all\";s:7:\"rowspan\";s:1:\"5\";s:3:\"sql\";s:134:\" SELECT A.*,A.aid AS id FROM zc_article A  WHERE A.yz=1  AND A.mid=\'103\'  AND A.ispic=1   AND A.ispic=1  ORDER BY A.list DESC LIMIT 5 \";s:4:\"sql2\";N;s:7:\"colspan\";s:1:\"1\";s:11:\"content_num\";s:2:\"80\";s:12:\"content_num2\";s:3:\"120\";s:8:\"titlenum\";s:2:\"26\";s:9:\"titlenum2\";s:2:\"40\";s:10:\"titleflood\";s:1:\"0\";s:10:\"c_rolltype\";s:1:\"0\";}',
				'divcode'=>'a:3:{s:5:\"div_w\";s:3:\"739\";s:5:\"div_h\";s:3:\"180\";s:11:\"div_bgcolor\";s:0:\"\";}'
				);
$TagDB['index_j32']=array(
				'typesystem'=>'0',
				'type'=>'code',
				'code'=>'dd<br><br>这是演示内容,请自由添加其它内容<br><br><br><br>dd',
				'divcode'=>'a:4:{s:9:\"html_edit\";N;s:5:\"div_w\";s:2:\"50\";s:5:\"div_h\";s:2:\"21\";s:11:\"div_bgcolor\";s:0:\"\";}'
				);
$TagDB['index_j33']=array(
				'typesystem'=>'0',
				'type'=>'code',
				'code'=>'<br><br>这是演示内容,请自由添加其它内容<br><br><br><br>',
				'divcode'=>'a:4:{s:9:\"html_edit\";N;s:5:\"div_w\";s:0:\"\";s:5:\"div_h\";s:0:\"\";s:11:\"div_bgcolor\";s:0:\"\";}'
				);
$TagDB['index_j34']=array(
				'typesystem'=>'0',
				'type'=>'code',
				'code'=>'d<br><br>这是演示内容,请自由添加其它内容<br><br><br><br>',
				'divcode'=>'a:4:{s:9:\"html_edit\";N;s:5:\"div_w\";s:0:\"\";s:5:\"div_h\";s:0:\"\";s:11:\"div_bgcolor\";s:0:\"\";}'
				);
$TagDB['index_member']=array(
				'typesystem'=>'1',
				'type'=>'member',
				'code'=>'a:20:{s:9:\"tplpart_1\";s:419:\"<div class=\"listuser\">                	                <div class=\"img\"><a href=\"$webdb[www_url]/member/homepage.php?uid=$uid\" target=\"_blank\"><img src=\"$picurl\" onerror=\"this.src=\'$webdb[www_url]/images/default/nobody.gif\'\" width=\"50\" height=\"50\"/></a></div>                	                <div class=\"name\"><a href=\"$webdb[www_url]/member/homepage.php?uid=$uid\" target=\"_blank\">$title</a></div>                </div>\";s:13:\"tplpart_1code\";s:419:\"<div class=\"listuser\">                	                <div class=\"img\"><a href=\"$webdb[www_url]/member/homepage.php?uid=$uid\" target=\"_blank\"><img src=\"$picurl\" onerror=\"this.src=\'$webdb[www_url]/images/default/nobody.gif\'\" width=\"50\" height=\"50\"/></a></div>                	                <div class=\"name\"><a href=\"$webdb[www_url]/member/homepage.php?uid=$uid\" target=\"_blank\">$title</a></div>                </div>\";s:13:\"tplpart_2code\";s:0:\"\";s:7:\"group_1\";s:0:\"\";s:7:\"group_2\";s:0:\"\";s:13:\"RollStyleType\";s:0:\"\";s:7:\"tplpath\";s:0:\"\";s:6:\"DivTpl\";i:1;s:5:\"fiddb\";N;s:5:\"stype\";s:1:\"4\";s:2:\"yz\";s:3:\"all\";s:10:\"timeformat\";s:11:\"Y-m-d H:i:s\";s:5:\"order\";s:7:\"regdate\";s:3:\"asc\";s:3:\"ASC\";s:6:\"levels\";N;s:7:\"rowspan\";s:1:\"9\";s:3:\"sql\";s:134:\" SELECT D.*,D.username AS title,D.icon AS picurl,D.introduce AS content FROM zc_memberdata D  WHERE 1  ORDER BY D.regdate ASC LIMIT 9 \";s:7:\"colspan\";s:1:\"1\";s:8:\"titlenum\";s:2:\"20\";s:10:\"titleflood\";s:1:\"0\";}',
				'divcode'=>'a:3:{s:5:\"div_w\";s:3:\"223\";s:5:\"div_h\";s:3:\"252\";s:11:\"div_bgcolor\";s:0:\"\";}'
				);
$TagDB['index_new1']=array(
				'typesystem'=>'1',
				'type'=>'article',
				'code'=>'a:34:{s:13:\"tplpart_1code\";s:140:\"             <ul>
                      <h3><a href=\"#\">$title</a></h3>
                      <li>$content</li>
                    </ul>\";s:13:\"tplpart_2code\";s:0:\"\";s:3:\"SYS\";s:7:\"artcile\";s:13:\"RollStyleType\";s:0:\"\";s:7:\"fidtype\";s:1:\"0\";s:8:\"rolltype\";s:10:\"scrollLeft\";s:8:\"rolltime\";s:1:\"3\";s:11:\"roll_height\";s:2:\"50\";s:5:\"width\";s:3:\"250\";s:6:\"height\";s:3:\"187\";s:7:\"newhour\";s:2:\"24\";s:7:\"hothits\";s:3:\"100\";s:7:\"amodule\";s:1:\"0\";s:7:\"tplpath\";s:0:\"\";s:6:\"DivTpl\";i:1;s:5:\"fiddb\";s:2:\"48\";s:5:\"stype\";s:1:\"c\";s:2:\"yz\";s:1:\"1\";s:7:\"hidefid\";N;s:10:\"timeformat\";s:11:\"Y-m-d H:i:s\";s:5:\"order\";s:6:\"A.list\";s:3:\"asc\";s:4:\"DESC\";s:6:\"levels\";s:3:\"all\";s:7:\"rowspan\";s:1:\"3\";s:3:\"sql\";s:169:\" SELECT A.*,A.aid AS id,R.content FROM zc_article A LEFT JOIN zc_reply R ON A.aid=R.aid   WHERE A.yz=1  AND A.fid IN (48)   AND R.topic=1 ORDER BY A.list DESC LIMIT 0,3 \";s:4:\"sql2\";N;s:7:\"colspan\";s:1:\"1\";s:11:\"content_num\";s:3:\"200\";s:12:\"content_num2\";s:3:\"120\";s:8:\"titlenum\";s:2:\"60\";s:9:\"titlenum2\";s:2:\"40\";s:10:\"titleflood\";s:1:\"0\";s:9:\"start_num\";s:1:\"1\";s:10:\"c_rolltype\";s:1:\"0\";}',
				'divcode'=>'a:3:{s:5:\"div_w\";s:2:\"50\";s:5:\"div_h\";s:2:\"30\";s:11:\"div_bgcolor\";s:0:\"\";}'
				);
$TagDB['index_new2']=array(
				'typesystem'=>'1',
				'type'=>'article',
				'code'=>'a:34:{s:13:\"tplpart_1code\";s:280:\"                      <ul class=\"NewsBottomCC\">
                        <li class=\"Newsfl\"><a href=\"$url\"><img src=\"$picurl\"/ width=\"100\" height=\"100\"></a></li>
                        <li class=\"Newsfr\"><a href=\"$url\">$title</a><p>$content</p></li>
                      </ul>\";s:13:\"tplpart_2code\";s:0:\"\";s:3:\"SYS\";s:7:\"artcile\";s:13:\"RollStyleType\";s:0:\"\";s:7:\"fidtype\";s:1:\"0\";s:8:\"rolltype\";s:10:\"scrollLeft\";s:8:\"rolltime\";s:1:\"3\";s:11:\"roll_height\";s:2:\"50\";s:5:\"width\";s:3:\"250\";s:6:\"height\";s:3:\"187\";s:7:\"newhour\";s:2:\"24\";s:7:\"hothits\";s:3:\"100\";s:7:\"amodule\";s:1:\"0\";s:7:\"tplpath\";s:0:\"\";s:6:\"DivTpl\";i:1;s:5:\"fiddb\";s:2:\"49\";s:5:\"stype\";s:2:\"cp\";s:2:\"yz\";s:1:\"1\";s:7:\"hidefid\";N;s:10:\"timeformat\";s:11:\"Y-m-d H:i:s\";s:5:\"order\";s:6:\"A.list\";s:3:\"asc\";s:4:\"DESC\";s:6:\"levels\";s:3:\"all\";s:7:\"rowspan\";s:1:\"1\";s:3:\"sql\";s:199:\" SELECT A.*,A.aid AS id,R.content FROM zc_article A LEFT JOIN zc_reply R ON A.aid=R.aid   WHERE A.yz=1  AND A.fid IN (49)  AND A.ispic=1   AND A.ispic=1  AND R.topic=1 ORDER BY A.list DESC LIMIT 1,1 \";s:4:\"sql2\";N;s:7:\"colspan\";s:1:\"1\";s:11:\"content_num\";s:3:\"100\";s:12:\"content_num2\";s:3:\"120\";s:8:\"titlenum\";s:2:\"20\";s:9:\"titlenum2\";s:2:\"40\";s:10:\"titleflood\";s:1:\"0\";s:9:\"start_num\";s:1:\"2\";s:10:\"c_rolltype\";s:1:\"0\";}',
				'divcode'=>'a:3:{s:5:\"div_w\";s:2:\"50\";s:5:\"div_h\";s:2:\"30\";s:11:\"div_bgcolor\";s:0:\"\";}'
				);
$TagDB['index_new3']=array(
				'typesystem'=>'1',
				'type'=>'article',
				'code'=>'a:34:{s:13:\"tplpart_1code\";s:62:\"<li class=\"NewsBottomrightCCMar01\"><a href=\"#\">$title</a></li>\";s:13:\"tplpart_2code\";s:0:\"\";s:3:\"SYS\";s:7:\"artcile\";s:13:\"RollStyleType\";s:0:\"\";s:7:\"fidtype\";s:1:\"0\";s:8:\"rolltype\";s:10:\"scrollLeft\";s:8:\"rolltime\";s:1:\"3\";s:11:\"roll_height\";s:2:\"50\";s:5:\"width\";s:3:\"250\";s:6:\"height\";s:3:\"187\";s:7:\"newhour\";s:2:\"24\";s:7:\"hothits\";s:3:\"100\";s:7:\"amodule\";s:1:\"0\";s:7:\"tplpath\";s:0:\"\";s:6:\"DivTpl\";i:1;s:5:\"fiddb\";s:2:\"50\";s:5:\"stype\";s:1:\"4\";s:2:\"yz\";s:1:\"1\";s:7:\"hidefid\";N;s:10:\"timeformat\";s:11:\"Y-m-d H:i:s\";s:5:\"order\";s:6:\"A.list\";s:3:\"asc\";s:4:\"DESC\";s:6:\"levels\";s:3:\"all\";s:7:\"rowspan\";s:2:\"10\";s:3:\"sql\";s:109:\" SELECT A.*,A.aid AS id FROM zc_article A  WHERE A.yz=1  AND A.fid IN (50)   ORDER BY A.list DESC LIMIT 0,10 \";s:4:\"sql2\";N;s:7:\"colspan\";s:1:\"1\";s:11:\"content_num\";s:2:\"80\";s:12:\"content_num2\";s:3:\"120\";s:8:\"titlenum\";s:2:\"70\";s:9:\"titlenum2\";s:2:\"40\";s:10:\"titleflood\";s:1:\"0\";s:9:\"start_num\";s:1:\"1\";s:10:\"c_rolltype\";s:1:\"0\";}',
				'divcode'=>'a:3:{s:5:\"div_w\";s:2:\"50\";s:5:\"div_h\";s:2:\"30\";s:11:\"div_bgcolor\";s:0:\"\";}'
				);
$TagDB['index_new4']=array(
				'typesystem'=>'1',
				'type'=>'article',
				'code'=>'a:34:{s:13:\"tplpart_1code\";s:34:\"<li>· <a href=\"#\">$title</a></li>\";s:13:\"tplpart_2code\";s:0:\"\";s:3:\"SYS\";s:7:\"artcile\";s:13:\"RollStyleType\";s:0:\"\";s:7:\"fidtype\";s:1:\"0\";s:8:\"rolltype\";s:10:\"scrollLeft\";s:8:\"rolltime\";s:1:\"3\";s:11:\"roll_height\";s:2:\"50\";s:5:\"width\";s:3:\"250\";s:6:\"height\";s:3:\"187\";s:7:\"newhour\";s:2:\"24\";s:7:\"hothits\";s:3:\"100\";s:7:\"amodule\";s:1:\"0\";s:7:\"tplpath\";s:0:\"\";s:6:\"DivTpl\";i:1;s:5:\"fiddb\";s:2:\"51\";s:5:\"stype\";s:1:\"4\";s:2:\"yz\";s:1:\"1\";s:7:\"hidefid\";N;s:10:\"timeformat\";s:11:\"Y-m-d H:i:s\";s:5:\"order\";s:6:\"A.list\";s:3:\"asc\";s:4:\"DESC\";s:6:\"levels\";s:3:\"all\";s:7:\"rowspan\";s:1:\"3\";s:3:\"sql\";s:108:\" SELECT A.*,A.aid AS id FROM zc_article A  WHERE A.yz=1  AND A.fid IN (51)   ORDER BY A.list DESC LIMIT 0,3 \";s:4:\"sql2\";N;s:7:\"colspan\";s:1:\"1\";s:11:\"content_num\";s:2:\"80\";s:12:\"content_num2\";s:3:\"120\";s:8:\"titlenum\";s:2:\"50\";s:9:\"titlenum2\";s:2:\"40\";s:10:\"titleflood\";s:1:\"0\";s:9:\"start_num\";s:1:\"1\";s:10:\"c_rolltype\";s:1:\"0\";}',
				'divcode'=>'a:3:{s:5:\"div_w\";s:2:\"50\";s:5:\"div_h\";s:2:\"30\";s:11:\"div_bgcolor\";s:0:\"\";}'
				);
$TagDB['index_pic1']=array(
				'typesystem'=>'1',
				'type'=>'article',
				'code'=>'a:34:{s:13:\"tplpart_1code\";s:53:\"<li class=\"HotNewsPic_list\"><img src=\"$picurl\"/></li>\";s:13:\"tplpart_2code\";s:0:\"\";s:3:\"SYS\";s:7:\"artcile\";s:13:\"RollStyleType\";s:0:\"\";s:7:\"fidtype\";s:1:\"0\";s:8:\"rolltype\";s:10:\"scrollLeft\";s:8:\"rolltime\";s:1:\"3\";s:11:\"roll_height\";s:2:\"50\";s:5:\"width\";s:3:\"250\";s:6:\"height\";s:3:\"187\";s:7:\"newhour\";s:2:\"24\";s:7:\"hothits\";s:3:\"100\";s:7:\"amodule\";s:1:\"0\";s:7:\"tplpath\";s:0:\"\";s:6:\"DivTpl\";i:1;s:5:\"fiddb\";s:2:\"47\";s:5:\"stype\";s:1:\"p\";s:2:\"yz\";s:1:\"1\";s:7:\"hidefid\";N;s:10:\"timeformat\";s:11:\"Y-m-d H:i:s\";s:5:\"order\";s:6:\"A.list\";s:3:\"asc\";s:4:\"DESC\";s:6:\"levels\";s:3:\"all\";s:7:\"rowspan\";s:1:\"3\";s:3:\"sql\";s:138:\" SELECT A.*,A.aid AS id FROM zc_article A  WHERE A.yz=1  AND A.fid IN (47)  AND A.ispic=1   AND A.ispic=1  ORDER BY A.list DESC LIMIT 0,3 \";s:4:\"sql2\";N;s:7:\"colspan\";s:1:\"1\";s:11:\"content_num\";s:2:\"80\";s:12:\"content_num2\";s:3:\"120\";s:8:\"titlenum\";s:2:\"20\";s:9:\"titlenum2\";s:2:\"40\";s:10:\"titleflood\";s:1:\"0\";s:9:\"start_num\";s:1:\"1\";s:10:\"c_rolltype\";s:1:\"0\";}',
				'divcode'=>'a:3:{s:5:\"div_w\";s:4:\"1862\";s:5:\"div_h\";s:2:\"21\";s:11:\"div_bgcolor\";s:0:\"\";}'
				);
$TagDB['index_pic2']=array(
				'typesystem'=>'1',
				'type'=>'article',
				'code'=>'a:34:{s:13:\"tplpart_1code\";s:58:\"<ul class=\"RightBottomCenterTop\"><img src=\"$picurl\"/></ul>\";s:13:\"tplpart_2code\";s:0:\"\";s:3:\"SYS\";s:7:\"artcile\";s:13:\"RollStyleType\";s:0:\"\";s:7:\"fidtype\";s:1:\"0\";s:8:\"rolltype\";s:10:\"scrollLeft\";s:8:\"rolltime\";s:1:\"3\";s:11:\"roll_height\";s:2:\"50\";s:5:\"width\";s:3:\"250\";s:6:\"height\";s:3:\"187\";s:7:\"newhour\";s:2:\"24\";s:7:\"hothits\";s:3:\"100\";s:7:\"amodule\";s:1:\"0\";s:7:\"tplpath\";s:0:\"\";s:6:\"DivTpl\";i:1;s:5:\"fiddb\";s:2:\"56\";s:5:\"stype\";s:1:\"p\";s:2:\"yz\";s:1:\"1\";s:7:\"hidefid\";N;s:10:\"timeformat\";s:11:\"Y-m-d H:i:s\";s:5:\"order\";s:6:\"A.list\";s:3:\"asc\";s:4:\"DESC\";s:6:\"levels\";s:3:\"all\";s:7:\"rowspan\";s:1:\"1\";s:3:\"sql\";s:138:\" SELECT A.*,A.aid AS id FROM zc_article A  WHERE A.yz=1  AND A.fid IN (56)  AND A.ispic=1   AND A.ispic=1  ORDER BY A.list DESC LIMIT 0,1 \";s:4:\"sql2\";N;s:7:\"colspan\";s:1:\"1\";s:11:\"content_num\";s:2:\"80\";s:12:\"content_num2\";s:3:\"120\";s:8:\"titlenum\";s:2:\"20\";s:9:\"titlenum2\";s:2:\"40\";s:10:\"titleflood\";s:1:\"0\";s:9:\"start_num\";s:1:\"1\";s:10:\"c_rolltype\";s:1:\"0\";}',
				'divcode'=>'a:3:{s:5:\"div_w\";s:2:\"50\";s:5:\"div_h\";s:2:\"30\";s:11:\"div_bgcolor\";s:0:\"\";}'
				);
$TagDB['index_pk']=array(
				'typesystem'=>'0',
				'type'=>'hack_vote',
				'code'=>'<SCRIPT src=\'http://www_qibosoft_com/vote/vote.php?job=js&cid=10\'></SCRIPT>',
				'divcode'=>'a:4:{s:6:\"voteid\";s:2:\"10\";s:5:\"div_w\";s:3:\"253\";s:5:\"div_h\";s:3:\"163\";s:11:\"div_bgcolor\";s:0:\"\";}'
				);
$TagDB['index_rollpic']=array(
				'typesystem'=>'0',
				'type'=>'rollpic',
				'code'=>'a:6:{s:8:\"rolltype\";s:1:\"0\";s:5:\"width\";s:3:\"266\";s:6:\"height\";s:3:\"236\";s:6:\"picurl\";a:2:{i:1;s:32:\"label/1_20101109141150_sfgyo.jpg\";i:2;s:32:\"label/1_20101109141154_f28xx.jpg\";}s:7:\"piclink\";a:2:{i:1;s:19:\"http://www.sudu.cn/\";i:2;s:26:\"http://www.chinaccnet.com/\";}s:6:\"picalt\";a:2:{i:1;s:0:\"\";i:2;s:0:\"\";}}',
				'divcode'=>'a:3:{s:5:\"div_w\";s:3:\"265\";s:5:\"div_h\";s:3:\"232\";s:11:\"div_bgcolor\";s:0:\"\";}'
				);
$TagDB['index_t1']=array(
				'typesystem'=>'1',
				'type'=>'article',
				'code'=>'a:32:{s:13:\"tplpart_1code\";s:248:\"<div class=\"lista$i\"> <span class=\"t\"><a href=\"$url\" target=\"_blank\">$title</a></span>                 <span class=\"d\">[{$time_m}-{$time_d}]</span> <span class=\"c\">　{$content}<a href=\"$url\" target=\"_blank\">[详情]</a></span>               </div>\";s:13:\"tplpart_2code\";s:0:\"\";s:3:\"SYS\";s:7:\"artcile\";s:13:\"RollStyleType\";s:0:\"\";s:8:\"rolltype\";s:10:\"scrollLeft\";s:8:\"rolltime\";s:1:\"3\";s:11:\"roll_height\";s:2:\"50\";s:5:\"width\";s:3:\"250\";s:6:\"height\";s:3:\"187\";s:7:\"newhour\";s:2:\"24\";s:7:\"hothits\";s:3:\"100\";s:7:\"amodule\";s:1:\"0\";s:7:\"tplpath\";s:0:\"\";s:6:\"DivTpl\";i:1;s:5:\"fiddb\";N;s:5:\"stype\";s:1:\"c\";s:2:\"yz\";s:1:\"1\";s:7:\"hidefid\";N;s:10:\"timeformat\";s:11:\"Y-m-d H:i:s\";s:5:\"order\";s:6:\"A.list\";s:3:\"asc\";s:4:\"DESC\";s:6:\"levels\";s:3:\"all\";s:7:\"rowspan\";s:1:\"6\";s:3:\"sql\";s:163:\" SELECT A.*,A.aid AS id,R.content FROM zc_article A LEFT JOIN zc_reply R ON A.aid=R.aid   WHERE A.yz=1  AND A.mid=\'0\'   AND R.topic=1 ORDER BY A.list DESC LIMIT 6 \";s:4:\"sql2\";N;s:7:\"colspan\";s:1:\"1\";s:11:\"content_num\";s:3:\"130\";s:12:\"content_num2\";s:3:\"120\";s:8:\"titlenum\";s:2:\"54\";s:9:\"titlenum2\";s:2:\"40\";s:10:\"titleflood\";s:1:\"0\";s:10:\"c_rolltype\";s:1:\"0\";}',
				'divcode'=>'a:3:{s:5:\"div_w\";s:3:\"446\";s:5:\"div_h\";s:3:\"209\";s:11:\"div_bgcolor\";s:0:\"\";}'
				);
$TagDB['index_t2']=array(
				'typesystem'=>'1',
				'type'=>'article',
				'code'=>'a:32:{s:13:\"tplpart_1code\";s:298:\"<div class=\"listpic\">        	        <div class=\"img\"><a href=\"$url\" target=\"_blank\"><img src=\"$picurl\" onerror=\"this.src=\'$webdb[www_url]/images/default/nopic.jpg\'\" width=\"120\" height=\"90\"/></a></div>                    <div class=\"t\"><a href=\"$url\" target=\"_blank\">$title</a></div>        </div>\";s:13:\"tplpart_2code\";s:0:\"\";s:3:\"SYS\";s:7:\"artcile\";s:13:\"RollStyleType\";s:0:\"\";s:8:\"rolltype\";s:10:\"scrollLeft\";s:8:\"rolltime\";s:1:\"3\";s:11:\"roll_height\";s:2:\"50\";s:5:\"width\";s:3:\"250\";s:6:\"height\";s:3:\"187\";s:7:\"newhour\";s:2:\"24\";s:7:\"hothits\";s:3:\"100\";s:7:\"amodule\";s:1:\"0\";s:7:\"tplpath\";s:0:\"\";s:6:\"DivTpl\";i:1;s:5:\"fiddb\";N;s:5:\"stype\";s:1:\"p\";s:2:\"yz\";s:1:\"1\";s:7:\"hidefid\";N;s:10:\"timeformat\";s:11:\"Y-m-d H:i:s\";s:5:\"order\";s:6:\"A.list\";s:3:\"asc\";s:4:\"DESC\";s:6:\"levels\";s:3:\"all\";s:7:\"rowspan\";s:1:\"6\";s:3:\"sql\";s:132:\" SELECT A.*,A.aid AS id FROM zc_article A  WHERE A.yz=1  AND A.mid=\'0\'  AND A.ispic=1   AND A.ispic=1  ORDER BY A.list DESC LIMIT 6 \";s:4:\"sql2\";N;s:7:\"colspan\";s:1:\"1\";s:11:\"content_num\";s:2:\"80\";s:12:\"content_num2\";s:3:\"120\";s:8:\"titlenum\";s:2:\"30\";s:9:\"titlenum2\";s:2:\"40\";s:10:\"titleflood\";s:1:\"0\";s:10:\"c_rolltype\";s:1:\"0\";}',
				'divcode'=>'a:3:{s:5:\"div_w\";s:3:\"991\";s:5:\"div_h\";s:3:\"142\";s:11:\"div_bgcolor\";s:0:\"\";}'
				);
$TagDB['index_t22']=array(
				'typesystem'=>'0',
				'type'=>'code',
				'code'=>'<br><br>这是演示内容,请自由添加其它内容<br><br><br><br>',
				'divcode'=>'a:4:{s:9:\"html_edit\";N;s:5:\"div_w\";s:0:\"\";s:5:\"div_h\";s:0:\"\";s:11:\"div_bgcolor\";s:0:\"\";}'
				);
$TagDB['index_t23']=array(
				'typesystem'=>'0',
				'type'=>'code',
				'code'=>'<br><br>2 这是演示内容,请自由添加其它内容<br><br><br><br>',
				'divcode'=>'a:4:{s:9:\"html_edit\";N;s:5:\"div_w\";s:0:\"\";s:5:\"div_h\";s:0:\"\";s:11:\"div_bgcolor\";s:0:\"\";}'
				);
$TagDB['index_t24']=array(
				'typesystem'=>'0',
				'type'=>'code',
				'code'=>'<br><br>33这是演示内容,请自由添加其它内容<br><br><br><br>',
				'divcode'=>'a:4:{s:9:\"html_edit\";N;s:5:\"div_w\";s:0:\"\";s:5:\"div_h\";s:0:\"\";s:11:\"div_bgcolor\";s:0:\"\";}'
				);
$TagDB['index_t25']=array(
				'typesystem'=>'0',
				'type'=>'code',
				'code'=>'<br><br>44这是演示内容,请自由添加其它内容<br><br><br><br>',
				'divcode'=>'a:4:{s:9:\"html_edit\";N;s:5:\"div_w\";s:0:\"\";s:5:\"div_h\";s:0:\"\";s:11:\"div_bgcolor\";s:0:\"\";}'
				);
$TagDB['index_tr01']=array(
				'typesystem'=>'0',
				'type'=>'code',
				'code'=>'<table border=\"0\" cellspacing=\"0\" cellpadding=\"0\">
          <tr>
            <td class=\"choose\"><a href=\"#\" class=\"nbor\">文章</a></td>
            <td><a href=\"#\" class=\"nbor\">图片</a></td>
            <td><a href=\"#\">影视</a></td>
            <td><a href=\"#\">商场</a></td>
            <td><a href=\"#\">flash</a></td>
          </tr>
        </table> ',
				'divcode'=>'a:4:{s:9:\"html_edit\";N;s:5:\"div_w\";s:3:\"670\";s:5:\"div_h\";s:2:\"21\";s:11:\"div_bgcolor\";s:0:\"\";}'
				);
$TagDB['index_tr1']=array(
				'typesystem'=>'1',
				'type'=>'specialsort',
				'code'=>'a:35:{s:9:\"tplpart_1\";s:364:\"<div class=\"listzt\">        	<div class=\"img\"><a target=\"_blank\" href=\"$webdb[www_url]/do/showsp.php?fid=$fid&id=$id\"><img src=\"$picurl\" onerror=\"this.src=\'$webdb[www_url]/images/default/nopic.jpg\'\" width=\"120\" height=\"160\"/></a></div>            <div class=\"t\"><a target=\"_blank\" href=\"$webdb[www_url]/do/showsp.php?fid=$fid&id=$id\">$title</a></div>        </div>\";s:13:\"tplpart_1code\";s:364:\"<div class=\"listzt\">        	<div class=\"img\"><a target=\"_blank\" href=\"$webdb[www_url]/do/showsp.php?fid=$fid&id=$id\"><img src=\"$picurl\" onerror=\"this.src=\'$webdb[www_url]/images/default/nopic.jpg\'\" width=\"120\" height=\"160\"/></a></div>            <div class=\"t\"><a target=\"_blank\" href=\"$webdb[www_url]/do/showsp.php?fid=$fid&id=$id\">$title</a></div>        </div>\";s:13:\"tplpart_2code\";s:0:\"\";s:3:\"SYS\";s:11:\"specialsort\";s:13:\"RollStyleType\";s:0:\"\";s:11:\"roll_height\";s:2:\"50\";s:3:\"url\";s:45:\"$webdb[www_url]/do/showsp.php?fid=$fid&id=$id\";s:5:\"width\";s:3:\"250\";s:6:\"height\";s:3:\"187\";s:8:\"rolltype\";s:10:\"scrollLeft\";s:8:\"rolltime\";s:1:\"3\";s:3:\"fid\";s:0:\"\";s:7:\"newhour\";s:2:\"24\";s:7:\"hothits\";s:2:\"30\";s:7:\"amodule\";N;s:7:\"tplpath\";s:0:\"\";s:6:\"DivTpl\";i:1;s:5:\"fiddb\";N;s:5:\"stype\";s:1:\"4\";s:2:\"yz\";N;s:7:\"hidefid\";N;s:10:\"timeformat\";s:11:\"Y-m-d H:i:s\";s:5:\"order\";s:4:\"list\";s:3:\"asc\";s:4:\"DESC\";s:6:\"levels\";s:3:\"all\";s:7:\"rowspan\";s:1:\"6\";s:3:\"sql\";s:106:\" SELECT A.* FROM zc_special A  WHERE `ifbase`=0 AND yz=1  AND A.picurl!=\'\'   ORDER BY A.list DESC LIMIT 6 \";s:4:\"sql2\";s:0:\"\";s:7:\"colspan\";s:1:\"1\";s:11:\"content_num\";s:2:\"80\";s:12:\"content_num2\";s:0:\"\";s:8:\"titlenum\";s:2:\"28\";s:9:\"titlenum2\";s:0:\"\";s:10:\"titleflood\";s:1:\"0\";s:10:\"c_rolltype\";s:1:\"0\";}',
				'divcode'=>'a:3:{s:5:\"div_w\";s:3:\"985\";s:5:\"div_h\";s:3:\"208\";s:11:\"div_bgcolor\";s:0:\"\";}'
				);
$TagDB['index_tr12']=array(
				'typesystem'=>'0',
				'type'=>'code',
				'code'=>'1<br><br>这是演示内容,请自由添加其它内容<br><br><br><br>',
				'divcode'=>'a:4:{s:9:\"html_edit\";N;s:5:\"div_w\";s:0:\"\";s:5:\"div_h\";s:0:\"\";s:11:\"div_bgcolor\";s:0:\"\";}'
				);
$TagDB['index_tr13']=array(
				'typesystem'=>'0',
				'type'=>'code',
				'code'=>'2<br><br>这是演示内容,请自由添加其它内容<br><br><br><br>2',
				'divcode'=>'a:4:{s:9:\"html_edit\";N;s:5:\"div_w\";s:0:\"\";s:5:\"div_h\";s:0:\"\";s:11:\"div_bgcolor\";s:0:\"\";}'
				);
$TagDB['index_tr14']=array(
				'typesystem'=>'0',
				'type'=>'code',
				'code'=>'3<br><br>这是演示内容,请自由添加其它内容<br><br><br><br>3',
				'divcode'=>'a:4:{s:9:\"html_edit\";N;s:5:\"div_w\";s:0:\"\";s:5:\"div_h\";s:0:\"\";s:11:\"div_bgcolor\";s:0:\"\";}'
				);
$TagDB['index_tr15']=array(
				'typesystem'=>'0',
				'type'=>'code',
				'code'=>'4<br><br>这是演示内容,请自由添加其它内容<br><br><br><br>6',
				'divcode'=>'a:4:{s:9:\"html_edit\";N;s:5:\"div_w\";s:0:\"\";s:5:\"div_h\";s:0:\"\";s:11:\"div_bgcolor\";s:0:\"\";}'
				);
$TagDB['index_trrr1']=array(
				'typesystem'=>'0',
				'type'=>'code',
				'code'=>'<span id=\"Span6\" onmouseover=\"ShowTab(6,6,11)\">文章</span>
            <span id=\"Span7\" onmouseover=\"ShowTab(7,6,11)\">图片</span>
            <span id=\"Span8\" onmouseover=\"ShowTab(8,6,11)\">影视</span>
            <span id=\"Span9\" onmouseover=\"ShowTab(9,6,11)\">商场</span>
            <span id=\"Span10\" onmouseover=\"ShowTab(10,6,11)\">flash</span>',
				'divcode'=>'a:4:{s:9:\"html_edit\";N;s:5:\"div_w\";s:0:\"\";s:5:\"div_h\";s:0:\"\";s:11:\"div_bgcolor\";s:0:\"\";}'
				);
$TagDB['index_vote2']=array(
				'typesystem'=>'0',
				'type'=>'hack_vote',
				'code'=>'<SCRIPT src=\'http://www_qibosoft_com/vote/vote.php?job=js&cid=12\'></SCRIPT>',
				'divcode'=>'a:4:{s:6:\"voteid\";s:2:\"12\";s:5:\"div_w\";s:3:\"444\";s:5:\"div_h\";s:3:\"227\";s:11:\"div_bgcolor\";s:0:\"\";}'
				);
$TagDB['index_zczl']=array(
				'typesystem'=>'1',
				'type'=>'article',
				'code'=>'a:34:{s:13:\"tplpart_1code\";s:204:\"                <li class=\"RightTopCenterTopfl\"><a href=\"#\"><img src=\"$picurl\" width=\"90\" height=\"90\"/></a></li>
                <li class=\"RightTopCenterTopfr\"><a href=\"#\">$title</a><p>$content</p></li>\";s:13:\"tplpart_2code\";s:0:\"\";s:3:\"SYS\";s:7:\"artcile\";s:13:\"RollStyleType\";s:0:\"\";s:7:\"fidtype\";s:1:\"0\";s:8:\"rolltype\";s:10:\"scrollLeft\";s:8:\"rolltime\";s:1:\"3\";s:11:\"roll_height\";s:2:\"50\";s:5:\"width\";s:3:\"250\";s:6:\"height\";s:3:\"187\";s:7:\"newhour\";s:2:\"24\";s:7:\"hothits\";s:3:\"100\";s:7:\"amodule\";s:1:\"0\";s:7:\"tplpath\";s:0:\"\";s:6:\"DivTpl\";i:1;s:5:\"fiddb\";s:2:\"49\";s:5:\"stype\";s:2:\"cp\";s:2:\"yz\";s:1:\"1\";s:7:\"hidefid\";N;s:10:\"timeformat\";s:11:\"Y-m-d H:i:s\";s:5:\"order\";s:6:\"A.list\";s:3:\"asc\";s:4:\"DESC\";s:6:\"levels\";s:3:\"all\";s:7:\"rowspan\";s:1:\"1\";s:3:\"sql\";s:199:\" SELECT A.*,A.aid AS id,R.content FROM zc_article A LEFT JOIN zc_reply R ON A.aid=R.aid   WHERE A.yz=1  AND A.fid IN (49)  AND A.ispic=1   AND A.ispic=1  AND R.topic=1 ORDER BY A.list DESC LIMIT 0,1 \";s:4:\"sql2\";N;s:7:\"colspan\";s:1:\"1\";s:11:\"content_num\";s:2:\"80\";s:12:\"content_num2\";s:3:\"120\";s:8:\"titlenum\";s:2:\"40\";s:9:\"titlenum2\";s:2:\"40\";s:10:\"titleflood\";s:1:\"0\";s:9:\"start_num\";s:1:\"1\";s:10:\"c_rolltype\";s:1:\"0\";}',
				'divcode'=>'a:3:{s:5:\"div_w\";s:2:\"50\";s:5:\"div_h\";s:2:\"30\";s:11:\"div_bgcolor\";s:0:\"\";}'
				);
$TagDB['index_zczl1']=array(
				'typesystem'=>'1',
				'type'=>'article',
				'code'=>'a:34:{s:13:\"tplpart_1code\";s:56:\"<li><a href=\"#\">$title</a><span>（盐城）</span></li>\";s:13:\"tplpart_2code\";s:0:\"\";s:3:\"SYS\";s:7:\"artcile\";s:13:\"RollStyleType\";s:0:\"\";s:7:\"fidtype\";s:1:\"0\";s:8:\"rolltype\";s:10:\"scrollLeft\";s:8:\"rolltime\";s:1:\"3\";s:11:\"roll_height\";s:2:\"50\";s:5:\"width\";s:3:\"250\";s:6:\"height\";s:3:\"187\";s:7:\"newhour\";s:2:\"24\";s:7:\"hothits\";s:3:\"100\";s:7:\"amodule\";s:1:\"0\";s:7:\"tplpath\";s:0:\"\";s:6:\"DivTpl\";i:1;s:5:\"fiddb\";s:2:\"54\";s:5:\"stype\";s:1:\"4\";s:2:\"yz\";s:1:\"1\";s:7:\"hidefid\";N;s:10:\"timeformat\";s:11:\"Y-m-d H:i:s\";s:5:\"order\";s:6:\"A.list\";s:3:\"asc\";s:4:\"DESC\";s:6:\"levels\";s:3:\"all\";s:7:\"rowspan\";s:1:\"4\";s:3:\"sql\";s:108:\" SELECT A.*,A.aid AS id FROM zc_article A  WHERE A.yz=1  AND A.fid IN (54)   ORDER BY A.list DESC LIMIT 0,4 \";s:4:\"sql2\";N;s:7:\"colspan\";s:1:\"1\";s:11:\"content_num\";s:2:\"80\";s:12:\"content_num2\";s:3:\"120\";s:8:\"titlenum\";s:2:\"40\";s:9:\"titlenum2\";s:2:\"40\";s:10:\"titleflood\";s:1:\"0\";s:9:\"start_num\";s:1:\"1\";s:10:\"c_rolltype\";s:1:\"0\";}',
				'divcode'=>'a:3:{s:5:\"div_w\";s:2:\"50\";s:5:\"div_h\";s:2:\"30\";s:11:\"div_bgcolor\";s:0:\"\";}'
				);
$TagDB['index_zxzl2']=array(
				'typesystem'=>'1',
				'type'=>'article',
				'code'=>'a:34:{s:13:\"tplpart_1code\";s:34:\"<li>· <a href=\"#\">$title</a></li>\";s:13:\"tplpart_2code\";s:0:\"\";s:3:\"SYS\";s:7:\"artcile\";s:13:\"RollStyleType\";s:0:\"\";s:7:\"fidtype\";s:1:\"0\";s:8:\"rolltype\";s:10:\"scrollLeft\";s:8:\"rolltime\";s:1:\"3\";s:11:\"roll_height\";s:2:\"50\";s:5:\"width\";s:3:\"250\";s:6:\"height\";s:3:\"187\";s:7:\"newhour\";s:2:\"24\";s:7:\"hothits\";s:3:\"100\";s:7:\"amodule\";s:1:\"0\";s:7:\"tplpath\";s:0:\"\";s:6:\"DivTpl\";i:1;s:5:\"fiddb\";s:2:\"57\";s:5:\"stype\";s:1:\"4\";s:2:\"yz\";s:1:\"1\";s:7:\"hidefid\";N;s:10:\"timeformat\";s:11:\"Y-m-d H:i:s\";s:5:\"order\";s:6:\"A.list\";s:3:\"asc\";s:4:\"DESC\";s:6:\"levels\";s:3:\"all\";s:7:\"rowspan\";s:1:\"5\";s:3:\"sql\";s:108:\" SELECT A.*,A.aid AS id FROM zc_article A  WHERE A.yz=1  AND A.fid IN (57)   ORDER BY A.list DESC LIMIT 0,5 \";s:4:\"sql2\";N;s:7:\"colspan\";s:1:\"1\";s:11:\"content_num\";s:2:\"80\";s:12:\"content_num2\";s:3:\"120\";s:8:\"titlenum\";s:2:\"60\";s:9:\"titlenum2\";s:2:\"40\";s:10:\"titleflood\";s:1:\"0\";s:9:\"start_num\";s:1:\"1\";s:10:\"c_rolltype\";s:1:\"0\";}',
				'divcode'=>'a:3:{s:5:\"div_w\";s:2:\"50\";s:5:\"div_h\";s:2:\"30\";s:11:\"div_bgcolor\";s:0:\"\";}'
				);
$TagDB['jdxm']=array(
				'typesystem'=>'1',
				'type'=>'article',
				'code'=>'a:34:{s:13:\"tplpart_1code\";s:141:\"            <li ><a href=\"#\">{$title} </a><span class=\"Mar01\">￥10000.00</span><span class=\"Mar02\">{$time_Y}-{$time_m}-{$time_d}</span></li>\";s:13:\"tplpart_2code\";s:0:\"\";s:3:\"SYS\";s:7:\"artcile\";s:13:\"RollStyleType\";s:0:\"\";s:7:\"fidtype\";s:1:\"0\";s:8:\"rolltype\";s:10:\"scrollLeft\";s:8:\"rolltime\";s:1:\"3\";s:11:\"roll_height\";s:2:\"50\";s:5:\"width\";s:3:\"250\";s:6:\"height\";s:3:\"187\";s:7:\"newhour\";s:2:\"24\";s:7:\"hothits\";s:3:\"100\";s:7:\"amodule\";s:1:\"0\";s:7:\"tplpath\";s:0:\"\";s:6:\"DivTpl\";i:1;s:5:\"fiddb\";s:2:\"65\";s:5:\"stype\";s:1:\"4\";s:2:\"yz\";s:1:\"1\";s:7:\"hidefid\";N;s:10:\"timeformat\";s:11:\"Y-m-d H:i:s\";s:5:\"order\";s:6:\"A.list\";s:3:\"asc\";s:4:\"DESC\";s:6:\"levels\";s:3:\"all\";s:7:\"rowspan\";s:1:\"9\";s:3:\"sql\";s:108:\" SELECT A.*,A.aid AS id FROM zc_article A  WHERE A.yz=1  AND A.fid IN (65)   ORDER BY A.list DESC LIMIT 0,9 \";s:4:\"sql2\";N;s:7:\"colspan\";s:1:\"1\";s:11:\"content_num\";s:2:\"80\";s:12:\"content_num2\";s:3:\"120\";s:8:\"titlenum\";s:2:\"80\";s:9:\"titlenum2\";s:2:\"40\";s:10:\"titleflood\";s:1:\"0\";s:9:\"start_num\";s:1:\"1\";s:10:\"c_rolltype\";s:1:\"0\";}',
				'divcode'=>'a:3:{s:5:\"div_w\";s:2:\"50\";s:5:\"div_h\";s:2:\"30\";s:11:\"div_bgcolor\";s:0:\"\";}'
				);
$TagDB['jinjaad']=array(
				'typesystem'=>'0',
				'type'=>'hack_vote',
				'code'=>'<SCRIPT src=\'http://www_qibosoft_com/do/vote.php?job=js&cid=6\'></SCRIPT>',
				'divcode'=>'a:4:{s:6:\"voteid\";s:1:\"6\";s:5:\"div_w\";s:3:\"229\";s:5:\"div_h\";s:3:\"138\";s:11:\"div_bgcolor\";s:0:\"\";}'
				);
$TagDB['jlzcxm']=array(
				'typesystem'=>'1',
				'type'=>'article',
				'code'=>'a:34:{s:13:\"tplpart_1code\";s:126:\"<li ><a href=\"#\">$title</a><span class=\"Mar01\">￥10000.00</span><span class=\"Mar02\">{$time_Y}-{$time_m}-{$time_d}</span></li>\";s:13:\"tplpart_2code\";s:0:\"\";s:3:\"SYS\";s:7:\"artcile\";s:13:\"RollStyleType\";s:0:\"\";s:7:\"fidtype\";s:1:\"0\";s:8:\"rolltype\";s:10:\"scrollLeft\";s:8:\"rolltime\";s:1:\"3\";s:11:\"roll_height\";s:2:\"50\";s:5:\"width\";s:3:\"250\";s:6:\"height\";s:3:\"187\";s:7:\"newhour\";s:2:\"24\";s:7:\"hothits\";s:3:\"100\";s:7:\"amodule\";s:1:\"0\";s:7:\"tplpath\";s:0:\"\";s:6:\"DivTpl\";i:1;s:5:\"fiddb\";s:2:\"64\";s:5:\"stype\";s:1:\"4\";s:2:\"yz\";s:1:\"1\";s:7:\"hidefid\";N;s:10:\"timeformat\";s:11:\"Y-m-d H:i:s\";s:5:\"order\";s:6:\"A.list\";s:3:\"asc\";s:4:\"DESC\";s:6:\"levels\";s:3:\"all\";s:7:\"rowspan\";s:1:\"5\";s:3:\"sql\";s:108:\" SELECT A.*,A.aid AS id FROM zc_article A  WHERE A.yz=1  AND A.fid IN (64)   ORDER BY A.list DESC LIMIT 0,5 \";s:4:\"sql2\";N;s:7:\"colspan\";s:1:\"1\";s:11:\"content_num\";s:2:\"80\";s:12:\"content_num2\";s:3:\"120\";s:8:\"titlenum\";s:2:\"70\";s:9:\"titlenum2\";s:2:\"40\";s:10:\"titleflood\";s:1:\"0\";s:9:\"start_num\";s:1:\"1\";s:10:\"c_rolltype\";s:1:\"0\";}',
				'divcode'=>'a:3:{s:5:\"div_w\";s:2:\"50\";s:5:\"div_h\";s:2:\"30\";s:11:\"div_bgcolor\";s:0:\"\";}'
				);
$TagDB['listpic']=array(
				'typesystem'=>'1',
				'type'=>'article',
				'code'=>'a:31:{s:13:\"tplpart_1code\";s:316:\"<div  class=\"listpic\" style=\"padding:7px 9px 3px 17px;\">               <p class=img><a href=\"$url\" target=\"_blank\"><img width=\"120\" height=\"90\" src=\"$picurl\" border=\"0\"></a></p>              <p class=title style=\'text-align:center;\'><A HREF=\"$url\" title=\'$full_title\' target=\"_blank\">$title</A></p>            </div>\";s:13:\"tplpart_2code\";s:0:\"\";s:3:\"SYS\";s:7:\"artcile\";s:8:\"rolltype\";s:10:\"scrollLeft\";s:8:\"rolltime\";s:1:\"3\";s:11:\"roll_height\";s:2:\"50\";s:5:\"width\";s:3:\"200\";s:6:\"height\";s:3:\"200\";s:7:\"newhour\";s:2:\"24\";s:7:\"hothits\";s:3:\"100\";s:7:\"amodule\";s:1:\"0\";s:7:\"tplpath\";s:24:\"/common_pic/img_div1.jpg\";s:6:\"DivTpl\";i:0;s:5:\"fiddb\";s:2:\"33\";s:5:\"stype\";s:1:\"p\";s:2:\"yz\";s:1:\"1\";s:7:\"hidefid\";N;s:10:\"timeformat\";s:11:\"Y-m-d H:i:s\";s:5:\"order\";s:6:\"A.list\";s:3:\"asc\";s:4:\"DESC\";s:6:\"levels\";s:1:\"1\";s:7:\"rowspan\";s:1:\"2\";s:3:\"sql\";s:167:\" SELECT A.*,A.aid AS id FROM zc_article A  WHERE A.yz=1  AND A.levels=1  AND A.fid IN (33)  AND A.mid=\'0\'  AND A.ispic=1   AND A.ispic=1  ORDER BY A.list DESC LIMIT 6 \";s:4:\"sql2\";N;s:7:\"colspan\";s:1:\"3\";s:11:\"content_num\";s:2:\"80\";s:12:\"content_num2\";s:3:\"120\";s:8:\"titlenum\";s:2:\"20\";s:9:\"titlenum2\";s:2:\"40\";s:10:\"titleflood\";s:1:\"0\";s:10:\"c_rolltype\";s:1:\"0\";}',
				'divcode'=>'a:3:{s:5:\"div_w\";s:3:\"459\";s:5:\"div_h\";s:3:\"254\";s:11:\"div_bgcolor\";s:0:\"\";}'
				);
$TagDB['listpic2']=array(
				'typesystem'=>'1',
				'type'=>'article',
				'code'=>'a:29:{s:13:\"tplpart_1code\";s:316:\"<div  class=\"listpic\" style=\"padding:5px 9px 3px 17px;\">               <p class=img><a href=\"$url\" target=\"_blank\"><img width=\"120\" height=\"90\" src=\"$picurl\" border=\"0\"></a></p>              <p class=title style=\'text-align:center;\'><A HREF=\"$url\" title=\'$full_title\' target=\"_blank\">$title</A></p>            </div>\";s:13:\"tplpart_2code\";s:0:\"\";s:3:\"SYS\";s:7:\"artcile\";s:11:\"roll_height\";s:2:\"50\";s:5:\"width\";s:3:\"200\";s:6:\"height\";s:3:\"200\";s:7:\"newhour\";s:2:\"24\";s:7:\"hothits\";s:3:\"100\";s:7:\"amodule\";s:3:\"100\";s:7:\"tplpath\";s:24:\"/common_pic/img_div1.jpg\";s:6:\"DivTpl\";i:1;s:5:\"fiddb\";s:2:\"10\";s:5:\"stype\";s:1:\"p\";s:2:\"yz\";s:1:\"1\";s:7:\"hidefid\";N;s:10:\"timeformat\";s:11:\"Y-m-d H:i:s\";s:5:\"order\";s:5:\"A.aid\";s:3:\"asc\";s:4:\"DESC\";s:6:\"levels\";s:3:\"all\";s:7:\"rowspan\";s:1:\"6\";s:3:\"sql\";s:152:\" SELECT A.*,A.aid AS id FROM zc_article A  WHERE A.yz=1  AND A.fid IN (10)  AND A.mid=\'100\'  AND A.ispic=1   AND A.ispic=1  ORDER BY A.aid DESC LIMIT 6 \";s:4:\"sql2\";N;s:7:\"colspan\";s:1:\"1\";s:11:\"content_num\";s:2:\"80\";s:12:\"content_num2\";s:3:\"120\";s:8:\"titlenum\";s:2:\"20\";s:9:\"titlenum2\";s:2:\"40\";s:10:\"titleflood\";s:1:\"0\";s:10:\"c_rolltype\";s:1:\"0\";}',
				'divcode'=>'a:3:{s:5:\"div_w\";s:2:\"50\";s:5:\"div_h\";s:2:\"21\";s:11:\"div_bgcolor\";s:0:\"\";}'
				);
$TagDB['listpic3']=array(
				'typesystem'=>'1',
				'type'=>'article',
				'code'=>'a:29:{s:13:\"tplpart_1code\";s:316:\"<div  class=\"listpic\" style=\"padding:5px 9px 3px 17px;\">               <p class=img><a href=\"$url\" target=\"_blank\"><img width=\"120\" height=\"90\" src=\"$picurl\" border=\"0\"></a></p>              <p class=title style=\'text-align:center;\'><A HREF=\"$url\" title=\'$full_title\' target=\"_blank\">$title</A></p>            </div>\";s:13:\"tplpart_2code\";s:0:\"\";s:3:\"SYS\";s:7:\"artcile\";s:11:\"roll_height\";s:2:\"50\";s:5:\"width\";s:3:\"200\";s:6:\"height\";s:3:\"200\";s:7:\"newhour\";s:2:\"24\";s:7:\"hothits\";s:3:\"100\";s:7:\"amodule\";s:3:\"102\";s:7:\"tplpath\";s:24:\"/common_pic/img_div1.jpg\";s:6:\"DivTpl\";i:1;s:5:\"fiddb\";N;s:5:\"stype\";s:1:\"p\";s:2:\"yz\";s:1:\"1\";s:7:\"hidefid\";N;s:10:\"timeformat\";s:11:\"Y-m-d H:i:s\";s:5:\"order\";s:5:\"A.aid\";s:3:\"asc\";s:4:\"DESC\";s:6:\"levels\";s:3:\"all\";s:7:\"rowspan\";s:1:\"6\";s:3:\"sql\";s:133:\" SELECT A.*,A.aid AS id FROM zc_article A  WHERE A.yz=1  AND A.mid=\'102\'  AND A.ispic=1   AND A.ispic=1  ORDER BY A.aid DESC LIMIT 6 \";s:4:\"sql2\";N;s:7:\"colspan\";s:1:\"1\";s:11:\"content_num\";s:2:\"80\";s:12:\"content_num2\";s:3:\"120\";s:8:\"titlenum\";s:2:\"20\";s:9:\"titlenum2\";s:2:\"40\";s:10:\"titleflood\";s:1:\"0\";s:10:\"c_rolltype\";s:1:\"0\";}',
				'divcode'=>'a:3:{s:5:\"div_w\";s:2:\"50\";s:5:\"div_h\";s:2:\"30\";s:11:\"div_bgcolor\";s:0:\"\";}'
				);
$TagDB['listpic4']=array(
				'typesystem'=>'1',
				'type'=>'article',
				'code'=>'a:29:{s:13:\"tplpart_1code\";s:316:\"<div  class=\"listpic\" style=\"padding:5px 9px 3px 17px;\">               <p class=img><a href=\"$url\" target=\"_blank\"><img width=\"120\" height=\"90\" src=\"$picurl\" border=\"0\"></a></p>              <p class=title style=\'text-align:center;\'><A HREF=\"$url\" title=\'$full_title\' target=\"_blank\">$title</A></p>            </div>\";s:13:\"tplpart_2code\";s:0:\"\";s:3:\"SYS\";s:7:\"artcile\";s:11:\"roll_height\";s:2:\"50\";s:5:\"width\";s:3:\"200\";s:6:\"height\";s:3:\"200\";s:7:\"newhour\";s:2:\"24\";s:7:\"hothits\";s:3:\"100\";s:7:\"amodule\";s:3:\"103\";s:7:\"tplpath\";s:24:\"/common_pic/img_div1.jpg\";s:6:\"DivTpl\";i:1;s:5:\"fiddb\";N;s:5:\"stype\";s:1:\"p\";s:2:\"yz\";s:1:\"1\";s:7:\"hidefid\";N;s:10:\"timeformat\";s:11:\"Y-m-d H:i:s\";s:5:\"order\";s:5:\"A.aid\";s:3:\"asc\";s:4:\"DESC\";s:6:\"levels\";s:3:\"all\";s:7:\"rowspan\";s:1:\"6\";s:3:\"sql\";s:133:\" SELECT A.*,A.aid AS id FROM zc_article A  WHERE A.yz=1  AND A.mid=\'103\'  AND A.ispic=1   AND A.ispic=1  ORDER BY A.aid DESC LIMIT 6 \";s:4:\"sql2\";N;s:7:\"colspan\";s:1:\"1\";s:11:\"content_num\";s:2:\"80\";s:12:\"content_num2\";s:3:\"120\";s:8:\"titlenum\";s:2:\"20\";s:9:\"titlenum2\";s:2:\"40\";s:10:\"titleflood\";s:1:\"0\";s:10:\"c_rolltype\";s:1:\"0\";}',
				'divcode'=>'a:3:{s:5:\"div_w\";s:2:\"50\";s:5:\"div_h\";s:2:\"21\";s:11:\"div_bgcolor\";s:0:\"\";}'
				);
$TagDB['listpic5']=array(
				'typesystem'=>'1',
				'type'=>'article',
				'code'=>'a:29:{s:13:\"tplpart_1code\";s:316:\"<div  class=\"listpic\" style=\"padding:5px 9px 3px 17px;\">               <p class=img><a href=\"$url\" target=\"_blank\"><img width=\"120\" height=\"90\" src=\"$picurl\" border=\"0\"></a></p>              <p class=title style=\'text-align:center;\'><A HREF=\"$url\" title=\'$full_title\' target=\"_blank\">$title</A></p>            </div>\";s:13:\"tplpart_2code\";s:0:\"\";s:3:\"SYS\";s:7:\"artcile\";s:11:\"roll_height\";s:2:\"50\";s:5:\"width\";s:3:\"200\";s:6:\"height\";s:3:\"200\";s:7:\"newhour\";s:2:\"24\";s:7:\"hothits\";s:3:\"100\";s:7:\"amodule\";s:3:\"104\";s:7:\"tplpath\";s:24:\"/common_pic/img_div1.jpg\";s:6:\"DivTpl\";i:1;s:5:\"fiddb\";N;s:5:\"stype\";s:1:\"p\";s:2:\"yz\";s:1:\"1\";s:7:\"hidefid\";N;s:10:\"timeformat\";s:11:\"Y-m-d H:i:s\";s:5:\"order\";s:5:\"A.aid\";s:3:\"asc\";s:4:\"DESC\";s:6:\"levels\";s:3:\"all\";s:7:\"rowspan\";s:1:\"6\";s:3:\"sql\";s:133:\" SELECT A.*,A.aid AS id FROM zc_article A  WHERE A.yz=1  AND A.mid=\'104\'  AND A.ispic=1   AND A.ispic=1  ORDER BY A.aid DESC LIMIT 6 \";s:4:\"sql2\";N;s:7:\"colspan\";s:1:\"1\";s:11:\"content_num\";s:2:\"80\";s:12:\"content_num2\";s:3:\"120\";s:8:\"titlenum\";s:2:\"20\";s:9:\"titlenum2\";s:2:\"40\";s:10:\"titleflood\";s:1:\"0\";s:10:\"c_rolltype\";s:1:\"0\";}',
				'divcode'=>'a:3:{s:5:\"div_w\";s:2:\"50\";s:5:\"div_h\";s:2:\"30\";s:11:\"div_bgcolor\";s:0:\"\";}'
				);
$TagDB['mainnews']=array(
				'typesystem'=>'1',
				'type'=>'article',
				'code'=>'a:31:{s:13:\"tplpart_1code\";s:623:\"<table width=\"100%\" border=\"0\" cellspacing=\"0\" cellpadding=\"0\" style=\"margin-bottom:8px;\">  <tr>    <td align=\"center\" style=\"padding-bottom:5px;\"><a href=\"$url\" target=\"_blank\"><b><font color=\"#D50000\" style=\"font-size:16px;\">$title</font></b></a></td>  </tr>  <tr>    <td align=\"left\" height=\"18\" valign=\"middle\" style=\"border-bottom:1px dotted #ccc;line-height:150%;text-indent:2em;color:#929292;padding-bottom:3px;\">{$content} 共<font color=\"#D50000\">{$hits}</font>人关注  评论<font color=\"#D50000\">{$comments}</font>条       [<a href=\"$url\" style=\"color:#D50000;\" target=\"_blank\">详情</a>]</td>  </tr></table>\";s:13:\"tplpart_2code\";s:0:\"\";s:3:\"SYS\";s:7:\"artcile\";s:8:\"rolltype\";s:10:\"scrollLeft\";s:8:\"rolltime\";s:1:\"3\";s:11:\"roll_height\";s:2:\"50\";s:5:\"width\";s:3:\"200\";s:6:\"height\";s:3:\"200\";s:7:\"newhour\";s:2:\"24\";s:7:\"hothits\";s:2:\"30\";s:7:\"amodule\";s:2:\"-1\";s:7:\"tplpath\";s:24:\"/common_title/0title.jpg\";s:6:\"DivTpl\";i:1;s:5:\"fiddb\";s:2:\"31\";s:5:\"stype\";s:1:\"c\";s:2:\"yz\";s:1:\"1\";s:7:\"hidefid\";N;s:10:\"timeformat\";s:11:\"Y-m-d H:i:s\";s:5:\"order\";s:5:\"A.aid\";s:3:\"asc\";s:4:\"DESC\";s:6:\"levels\";s:3:\"all\";s:7:\"rowspan\";s:1:\"1\";s:3:\"sql\";s:166:\" SELECT A.*,A.aid AS id,R.content FROM zc_article A LEFT JOIN zc_reply R ON A.aid=R.aid   WHERE A.yz=1  AND A.fid IN (31)   AND R.topic=1 ORDER BY A.aid DESC LIMIT 1 \";s:4:\"sql2\";N;s:7:\"colspan\";s:1:\"1\";s:11:\"content_num\";s:3:\"120\";s:12:\"content_num2\";s:3:\"120\";s:8:\"titlenum\";s:2:\"60\";s:9:\"titlenum2\";s:2:\"40\";s:10:\"titleflood\";s:1:\"0\";s:10:\"c_rolltype\";s:1:\"0\";}',
				'divcode'=>'a:3:{s:5:\"div_w\";s:3:\"461\";s:5:\"div_h\";s:2:\"71\";s:11:\"div_bgcolor\";s:0:\"\";}'
				);
$TagDB['mainnews2']=array(
				'typesystem'=>'1',
				'type'=>'article',
				'code'=>'a:31:{s:13:\"tplpart_1code\";s:395:\"<div style=\"clear:both;padding-top:2px;margin-bottom:4px;\"><span style=\"float:left;font-size:13px;color:#ccc;\">·<A HREF=\"$list_url\" style=\"font-size:13px;\">{$fname}</A>| <A HREF=\"$url\" target=\'_blank\' style=\"$fontcolor;font-size:13px;\">$title</a>$new$hot</span>                         <span style=\"float:right;color:#993300;padding-right:3px;font-size:13px;\">[{$time_m}-{$time_d}]</span></div>\";s:13:\"tplpart_2code\";s:0:\"\";s:3:\"SYS\";s:7:\"artcile\";s:8:\"rolltype\";s:10:\"scrollLeft\";s:8:\"rolltime\";s:1:\"3\";s:11:\"roll_height\";s:2:\"50\";s:5:\"width\";s:3:\"200\";s:6:\"height\";s:3:\"200\";s:7:\"newhour\";s:2:\"24\";s:7:\"hothits\";s:3:\"100\";s:7:\"amodule\";s:1:\"0\";s:7:\"tplpath\";s:28:\"/common_fname/time_fname.jpg\";s:6:\"DivTpl\";i:1;s:5:\"fiddb\";s:2:\"32\";s:5:\"stype\";s:1:\"t\";s:2:\"yz\";s:1:\"1\";s:7:\"hidefid\";N;s:10:\"timeformat\";s:11:\"Y-m-d H:i:s\";s:5:\"order\";s:10:\"A.posttime\";s:3:\"asc\";s:4:\"DESC\";s:6:\"levels\";s:1:\"1\";s:7:\"rowspan\";s:1:\"5\";s:3:\"sql\";s:141:\" SELECT A.*,A.aid AS id FROM zc_article A  WHERE A.yz=1  AND A.levels=1  AND A.fid IN (32)  AND A.mid=\'0\'   ORDER BY A.posttime DESC LIMIT 5 \";s:4:\"sql2\";N;s:7:\"colspan\";s:1:\"1\";s:11:\"content_num\";s:2:\"80\";s:12:\"content_num2\";s:3:\"120\";s:8:\"titlenum\";s:2:\"48\";s:9:\"titlenum2\";s:2:\"40\";s:10:\"titleflood\";s:1:\"0\";s:10:\"c_rolltype\";s:1:\"0\";}',
				'divcode'=>'a:3:{s:5:\"div_w\";s:3:\"467\";s:5:\"div_h\";s:3:\"126\";s:11:\"div_bgcolor\";s:0:\"\";}'
				);
$TagDB['ptsj']=array(
				'typesystem'=>'1',
				'type'=>'article',
				'code'=>'a:34:{s:13:\"tplpart_1code\";s:65:\"<li><span class=\"OneColor\">1</span><a href=\"#\">{$title} </a></li>\";s:13:\"tplpart_2code\";s:0:\"\";s:3:\"SYS\";s:7:\"artcile\";s:13:\"RollStyleType\";s:0:\"\";s:7:\"fidtype\";s:1:\"0\";s:8:\"rolltype\";s:10:\"scrollLeft\";s:8:\"rolltime\";s:1:\"3\";s:11:\"roll_height\";s:2:\"50\";s:5:\"width\";s:3:\"250\";s:6:\"height\";s:3:\"187\";s:7:\"newhour\";s:2:\"24\";s:7:\"hothits\";s:3:\"100\";s:7:\"amodule\";s:1:\"0\";s:7:\"tplpath\";s:0:\"\";s:6:\"DivTpl\";i:1;s:5:\"fiddb\";s:2:\"68\";s:5:\"stype\";s:1:\"4\";s:2:\"yz\";s:1:\"1\";s:7:\"hidefid\";N;s:10:\"timeformat\";s:11:\"Y-m-d H:i:s\";s:5:\"order\";s:6:\"A.list\";s:3:\"asc\";s:4:\"DESC\";s:6:\"levels\";s:3:\"all\";s:7:\"rowspan\";s:1:\"5\";s:3:\"sql\";s:108:\" SELECT A.*,A.aid AS id FROM zc_article A  WHERE A.yz=1  AND A.fid IN (68)   ORDER BY A.list DESC LIMIT 0,5 \";s:4:\"sql2\";N;s:7:\"colspan\";s:1:\"1\";s:11:\"content_num\";s:2:\"80\";s:12:\"content_num2\";s:3:\"120\";s:8:\"titlenum\";s:2:\"60\";s:9:\"titlenum2\";s:2:\"40\";s:10:\"titleflood\";s:1:\"0\";s:9:\"start_num\";s:1:\"1\";s:10:\"c_rolltype\";s:1:\"0\";}',
				'divcode'=>'a:3:{s:5:\"div_w\";s:2:\"50\";s:5:\"div_h\";s:2:\"30\";s:11:\"div_bgcolor\";s:0:\"\";}'
				);
$TagDB['showinfo']=array(
				'typesystem'=>'0',
				'type'=>'code',
				'code'=>'<SCRIPT LANGUAGE=\"JavaScript\">
<!--
document.write(\'<span id=\"num_info\"><img alt=\"内容加载中,请稍候...\" src=\"http://www_qibosoft_com/images/default/ico_loading3.gif\"></span>\');
document.write(\'<div style=\"display:none;\"><iframe src=\"http://www_qibosoft_com/do/job.php?job=getinfo&iframeID=num_info\" width=0 height=0></iframe></div>\');
//-->
</SCRIPT>',
				'divcode'=>'a:4:{s:9:\"html_edit\";s:0:\"\";s:5:\"div_w\";s:3:\"235\";s:5:\"div_h\";s:2:\"55\";s:11:\"div_bgcolor\";s:0:\"\";}'
				);
$TagDB['show_34']=array(
				'typesystem'=>'1',
				'type'=>'article',
				'code'=>'a:31:{s:13:\"tplpart_1code\";s:785:\"<table  border=\"0\" cellspacing=\"0\" cellpadding=\"0\" style=\"float:left;width:160px;margin-top:15px;\">  <tr>    <td align=\"center\"><a href=\"$url\" target=\"_blank\" style=\"border:1px solid #ccc;display:block;width:120px;height:90px;\"><img style=\"border:1px solid #fff;\" src=\'$picurl\' border=0 width=\"120\" height=\"90\"></a></td>  </tr>  <tr>    <td align=\"center\" style=\"padding-top:5px;\"><a href=\"$url\" target=\"_blank\">$title</a></td>  </tr>  <tr>    <td align=\"center\" style=\"padding-top:3px;\"><strike><b>￥$martprice</b></strike> <b><font color=\"#FF0000\">￥$nowprice</font></b></td>  </tr>  <tr>    <td align=\"center\" style=\"padding-bottom:18px;padding-top:3px;\"><a href=\"$url\" target=\"_blank\"><img src=\"$webdb[www_url]/images/default/order_button.gif\" border=\"0\"></a></td>  </tr></table>\";s:13:\"tplpart_2code\";s:0:\"\";s:3:\"SYS\";s:7:\"artcile\";s:8:\"rolltype\";s:10:\"scrollLeft\";s:8:\"rolltime\";s:1:\"3\";s:11:\"roll_height\";s:2:\"50\";s:5:\"width\";s:3:\"250\";s:6:\"height\";s:3:\"187\";s:7:\"newhour\";s:2:\"24\";s:7:\"hothits\";s:3:\"180\";s:7:\"amodule\";s:3:\"103\";s:7:\"tplpath\";s:17:\"/article/shop.jpg\";s:6:\"DivTpl\";i:1;s:5:\"fiddb\";N;s:5:\"stype\";s:1:\"p\";s:2:\"yz\";s:1:\"1\";s:7:\"hidefid\";N;s:10:\"timeformat\";s:11:\"Y-m-d H:i:s\";s:5:\"order\";s:5:\"A.aid\";s:3:\"asc\";s:3:\"ASC\";s:6:\"levels\";s:3:\"all\";s:7:\"rowspan\";s:1:\"3\";s:3:\"sql\";s:132:\" SELECT A.*,A.aid AS id FROM zc_article A  WHERE A.yz=1  AND A.mid=\'103\'  AND A.ispic=1   AND A.ispic=1  ORDER BY A.aid ASC LIMIT 3 \";s:4:\"sql2\";N;s:7:\"colspan\";s:1:\"1\";s:11:\"content_num\";s:2:\"80\";s:12:\"content_num2\";s:3:\"120\";s:8:\"titlenum\";s:2:\"20\";s:9:\"titlenum2\";s:2:\"40\";s:10:\"titleflood\";s:1:\"0\";s:10:\"c_rolltype\";s:1:\"0\";}',
				'divcode'=>'a:3:{s:5:\"div_w\";s:3:\"450\";s:5:\"div_h\";s:3:\"200\";s:11:\"div_bgcolor\";s:0:\"\";}'
				);
$TagDB['Title01']=array(
				'typesystem'=>'0',
				'type'=>'code',
				'code'=>'热门文章',
				'divcode'=>'a:4:{s:9:\"html_edit\";s:0:\"\";s:5:\"div_w\";s:3:\"210\";s:5:\"div_h\";s:2:\"24\";s:11:\"div_bgcolor\";s:0:\"\";}'
				);
$TagDB['Title02']=array(
				'typesystem'=>'0',
				'type'=>'code',
				'code'=>'最受关注',
				'divcode'=>'a:4:{s:9:\"html_edit\";s:0:\"\";s:5:\"div_w\";s:3:\"234\";s:5:\"div_h\";s:2:\"23\";s:11:\"div_bgcolor\";s:0:\"\";}'
				);
$TagDB['Title04']=array(
				'typesystem'=>'0',
				'type'=>'code',
				'code'=>'访客留言',
				'divcode'=>'a:4:{s:9:\"html_edit\";s:0:\"\";s:5:\"div_w\";s:0:\"\";s:5:\"div_h\";s:0:\"\";s:11:\"div_bgcolor\";s:0:\"\";}'
				);
$TagDB['Title04d']=array(
				'typesystem'=>'0',
				'type'=>'code',
				'code'=>'推荐图文',
				'divcode'=>'a:4:{s:9:\"html_edit\";s:0:\"\";s:5:\"div_w\";s:3:\"215\";s:5:\"div_h\";s:2:\"26\";s:11:\"div_bgcolor\";s:0:\"\";}'
				);
$TagDB['Title05']=array(
				'typesystem'=>'0',
				'type'=>'code',
				'code'=>'商城购物',
				'divcode'=>'a:4:{s:9:\"html_edit\";s:0:\"\";s:5:\"div_w\";s:2:\"50\";s:5:\"div_h\";s:2:\"21\";s:11:\"div_bgcolor\";s:0:\"\";}'
				);
$TagDB['Title1']=array(
				'typesystem'=>'0',
				'type'=>'code',
				'code'=>'web新闻',
				'divcode'=>'a:4:{s:9:\"html_edit\";s:0:\"\";s:5:\"div_w\";s:3:\"220\";s:5:\"div_h\";s:2:\"23\";s:11:\"div_bgcolor\";s:0:\"\";}'
				);
$TagDB['Title2']=array(
				'typesystem'=>'0',
				'type'=>'code',
				'code'=>'求职招聘',
				'divcode'=>'a:4:{s:9:\"html_edit\";s:0:\"\";s:5:\"div_w\";s:3:\"255\";s:5:\"div_h\";s:2:\"26\";s:11:\"div_bgcolor\";s:0:\"\";}'
				);
$TagDB['Title3']=array(
				'typesystem'=>'0',
				'type'=>'code',
				'code'=>'软件下载',
				'divcode'=>'a:4:{s:9:\"html_edit\";s:0:\"\";s:5:\"div_w\";s:3:\"210\";s:5:\"div_h\";s:2:\"23\";s:11:\"div_bgcolor\";s:0:\"\";}'
				);
$TagDB['Title4']=array(
				'typesystem'=>'0',
				'type'=>'code',
				'code'=>'社会新闻',
				'divcode'=>'a:4:{s:9:\"html_edit\";s:0:\"\";s:5:\"div_w\";s:3:\"210\";s:5:\"div_h\";s:2:\"23\";s:11:\"div_bgcolor\";s:0:\"\";}'
				);
$TagDB['Title4d']=array(
				'typesystem'=>'0',
				'type'=>'code',
				'code'=>'搜索引擎之PK战',
				'divcode'=>'a:4:{s:9:\"html_edit\";s:0:\"\";s:5:\"div_w\";s:0:\"\";s:5:\"div_h\";s:0:\"\";s:11:\"div_bgcolor\";s:0:\"\";}'
				);
$TagDB['Title5']=array(
				'typesystem'=>'0',
				'type'=>'code',
				'code'=>'文章评论',
				'divcode'=>'a:4:{s:9:\"html_edit\";s:0:\"\";s:5:\"div_w\";s:3:\"455\";s:5:\"div_h\";s:2:\"24\";s:11:\"div_bgcolor\";s:0:\"\";}'
				);
$TagDB['Title5d']=array(
				'typesystem'=>'0',
				'type'=>'code',
				'code'=>'2008年中国站长八大热门',
				'divcode'=>'a:4:{s:9:\"html_edit\";s:0:\"\";s:5:\"div_w\";s:2:\"50\";s:5:\"div_h\";s:2:\"21\";s:11:\"div_bgcolor\";s:0:\"\";}'
				);
$TagDB['Title6']=array(
				'typesystem'=>'0',
				'type'=>'code',
				'code'=>'优秀会员',
				'divcode'=>'a:4:{s:9:\"html_edit\";s:0:\"\";s:5:\"div_w\";s:2:\"50\";s:5:\"div_h\";s:2:\"21\";s:11:\"div_bgcolor\";s:0:\"\";}'
				);
$TagDB['Title_jinjaad']=array(
				'typesystem'=>'0',
				'type'=>'code',
				'code'=>'投票调查',
				'divcode'=>'a:4:{s:9:\"html_edit\";s:0:\"\";s:5:\"div_w\";s:3:\"215\";s:5:\"div_h\";s:2:\"26\";s:11:\"div_bgcolor\";s:0:\"\";}'
				);
$TagDB['zchd_pic']=array(
				'typesystem'=>'1',
				'type'=>'article',
				'code'=>'a:34:{s:13:\"tplpart_1code\";s:223:\"        <ul>
          <li class=\"ThreeTTCenterLeft\"><a href=\"#\"><img src=\"{$picurl}\" width=\"90\" height=\"90\"/></a></li>
          <li class=\"ThreeTTCenterRight\"><a href=\"#\">{$title} </a><p>$content</p></li>
        </ul>\";s:13:\"tplpart_2code\";s:0:\"\";s:3:\"SYS\";s:7:\"artcile\";s:13:\"RollStyleType\";s:0:\"\";s:7:\"fidtype\";s:1:\"0\";s:8:\"rolltype\";s:10:\"scrollLeft\";s:8:\"rolltime\";s:1:\"3\";s:11:\"roll_height\";s:2:\"50\";s:5:\"width\";s:3:\"250\";s:6:\"height\";s:3:\"187\";s:7:\"newhour\";s:2:\"24\";s:7:\"hothits\";s:3:\"100\";s:7:\"amodule\";s:1:\"0\";s:7:\"tplpath\";s:0:\"\";s:6:\"DivTpl\";i:1;s:5:\"fiddb\";s:2:\"70\";s:5:\"stype\";s:2:\"cp\";s:2:\"yz\";s:1:\"1\";s:7:\"hidefid\";N;s:10:\"timeformat\";s:11:\"Y-m-d H:i:s\";s:5:\"order\";s:6:\"A.list\";s:3:\"asc\";s:4:\"DESC\";s:6:\"levels\";s:3:\"all\";s:7:\"rowspan\";s:1:\"4\";s:3:\"sql\";s:199:\" SELECT A.*,A.aid AS id,R.content FROM zc_article A LEFT JOIN zc_reply R ON A.aid=R.aid   WHERE A.yz=1  AND A.fid IN (70)  AND A.ispic=1   AND A.ispic=1  AND R.topic=1 ORDER BY A.list DESC LIMIT 0,4 \";s:4:\"sql2\";N;s:7:\"colspan\";s:1:\"1\";s:11:\"content_num\";s:2:\"80\";s:12:\"content_num2\";s:3:\"120\";s:8:\"titlenum\";s:2:\"60\";s:9:\"titlenum2\";s:2:\"40\";s:10:\"titleflood\";s:1:\"0\";s:9:\"start_num\";s:1:\"1\";s:10:\"c_rolltype\";s:1:\"0\";}',
				'divcode'=>'a:3:{s:5:\"div_w\";s:2:\"50\";s:5:\"div_h\";s:2:\"30\";s:11:\"div_bgcolor\";s:0:\"\";}'
				);
$TagDB['zcwdzl']=array(
				'typesystem'=>'1',
				'type'=>'article',
				'code'=>'a:34:{s:13:\"tplpart_1code\";s:44:\"          <li><a href=\"#\">{$title} </a></li>\";s:13:\"tplpart_2code\";s:0:\"\";s:3:\"SYS\";s:7:\"artcile\";s:13:\"RollStyleType\";s:0:\"\";s:7:\"fidtype\";s:1:\"0\";s:8:\"rolltype\";s:10:\"scrollLeft\";s:8:\"rolltime\";s:1:\"3\";s:11:\"roll_height\";s:2:\"50\";s:5:\"width\";s:3:\"250\";s:6:\"height\";s:3:\"187\";s:7:\"newhour\";s:2:\"24\";s:7:\"hothits\";s:3:\"100\";s:7:\"amodule\";s:1:\"0\";s:7:\"tplpath\";s:0:\"\";s:6:\"DivTpl\";i:1;s:5:\"fiddb\";s:2:\"71\";s:5:\"stype\";s:1:\"4\";s:2:\"yz\";s:1:\"1\";s:7:\"hidefid\";N;s:10:\"timeformat\";s:11:\"Y-m-d H:i:s\";s:5:\"order\";s:6:\"A.list\";s:3:\"asc\";s:4:\"DESC\";s:6:\"levels\";s:3:\"all\";s:7:\"rowspan\";s:1:\"5\";s:3:\"sql\";s:108:\" SELECT A.*,A.aid AS id FROM zc_article A  WHERE A.yz=1  AND A.fid IN (71)   ORDER BY A.list DESC LIMIT 0,5 \";s:4:\"sql2\";N;s:7:\"colspan\";s:1:\"1\";s:11:\"content_num\";s:2:\"80\";s:12:\"content_num2\";s:3:\"120\";s:8:\"titlenum\";s:2:\"50\";s:9:\"titlenum2\";s:2:\"40\";s:10:\"titleflood\";s:1:\"0\";s:9:\"start_num\";s:1:\"1\";s:10:\"c_rolltype\";s:1:\"0\";}',
				'divcode'=>'a:3:{s:5:\"div_w\";s:2:\"50\";s:5:\"div_h\";s:2:\"30\";s:11:\"div_bgcolor\";s:0:\"\";}'
				);
$TagDB['zxtz']=array(
				'typesystem'=>'1',
				'type'=>'article',
				'code'=>'a:34:{s:13:\"tplpart_1code\";s:39:\"<li>· <a href=\"{$url}\">$title</a></li>\";s:13:\"tplpart_2code\";s:0:\"\";s:3:\"SYS\";s:7:\"artcile\";s:13:\"RollStyleType\";s:0:\"\";s:7:\"fidtype\";s:1:\"0\";s:8:\"rolltype\";s:10:\"scrollLeft\";s:8:\"rolltime\";s:1:\"3\";s:11:\"roll_height\";s:2:\"50\";s:5:\"width\";s:3:\"250\";s:6:\"height\";s:3:\"187\";s:7:\"newhour\";s:2:\"24\";s:7:\"hothits\";s:3:\"100\";s:7:\"amodule\";s:1:\"0\";s:7:\"tplpath\";s:0:\"\";s:6:\"DivTpl\";i:1;s:5:\"fiddb\";s:2:\"61\";s:5:\"stype\";s:1:\"4\";s:2:\"yz\";s:1:\"1\";s:7:\"hidefid\";N;s:10:\"timeformat\";s:11:\"Y-m-d H:i:s\";s:5:\"order\";s:6:\"A.list\";s:3:\"asc\";s:4:\"DESC\";s:6:\"levels\";s:3:\"all\";s:7:\"rowspan\";s:1:\"7\";s:3:\"sql\";s:108:\" SELECT A.*,A.aid AS id FROM zc_article A  WHERE A.yz=1  AND A.fid IN (61)   ORDER BY A.list DESC LIMIT 0,7 \";s:4:\"sql2\";N;s:7:\"colspan\";s:1:\"1\";s:11:\"content_num\";s:2:\"80\";s:12:\"content_num2\";s:3:\"120\";s:8:\"titlenum\";s:2:\"50\";s:9:\"titlenum2\";s:2:\"40\";s:10:\"titleflood\";s:1:\"0\";s:9:\"start_num\";s:1:\"1\";s:10:\"c_rolltype\";s:1:\"0\";}',
				'divcode'=>'a:3:{s:5:\"div_w\";s:2:\"50\";s:5:\"div_h\";s:2:\"30\";s:11:\"div_bgcolor\";s:0:\"\";}'
				);
?>