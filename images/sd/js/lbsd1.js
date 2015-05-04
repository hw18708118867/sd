// JavaScript Document
//正文第一部分图片滑动特效
//$(function(){
//	var zong1= $('#jangp .lb_joinus8').size();
//	var dx1=0;
//	var dy1=parseInt(zong1/1);	
//
//$(".lb_joinus15").click(function(){
//if (dx1 < 1)
// {
//			alert("已经是第一页了");
//			return;
// }
//		dx1--;
//		dy1++;
//		$("#jangp").animate({left:'+=100%'}, 1000);
//
//});
//
//
//
//
//$(".lb_joinus16").click(function(){
//	
//		if (dy1<= 1){
//			alert("已经是最后一页了");
//			return;
//		}
//		dx1++;
//		dy1--;
//		$("#jangp").animate({left:'-=100%'}, 1000);
//		
//});	
//
//
//});



var winWidth = 0;  //控制整个页面字体大小
var winHeight = 0;
function hanshu() 
{
     //获取窗口宽度
     if (window.innerWidth)
    winWidth = window.innerWidth;
     else if ((document.body) && (document.body.clientWidth))
    winWidth = document.body.clientWidth;
    //获取窗口高度
     if (window.innerHeight)
     winHeight = window.innerHeight;
    else if ((document.body) && (document.body.clientHeight))
     winHeight = document.body.clientHeight;
     //通过深入Document内部对body进行检测，获取窗口大小
    if (document.documentElement  && document.documentElement.clientHeight && document.documentElement.clientWidth)
     {
     winHeight = document.documentElement.clientHeight;
     winWidth = document.documentElement.clientWidth;
    }
	
	
	//根据窗口变化调整网页各版块高度
	$(function(){

	    //根据窗口大小选择字体大小
		//$("body").css({"font-size":winWidth*(16/1920)});	
		//$(".div2").css({"font-size":winWidth*(18/1900)});
		
		});
	
}
hanshu();
window.onresize=hanshu;
$(function(){
  
		//$(".div2_dt1").eq(1).removeClass("div2_dt1");
		$(".div2_dt1").eq(3).addClass("div2_dt1f3");
		
		
		//导航
 	$(".div2_dt1").eq(0).mouseover(function(){
		$(".div2_dt1").eq(3).removeClass("div2_dt1f3");
		$(".div2_dt1").eq(3).addClass("div2_dt1");
		$(this).removeClass("div2_dt1");
		$(this).addClass("div2_dt1f");
		});	
	$(".div2_dt1").eq(0).mouseout(function(){
		//$(".div2_dt1").eq(1).removeClass("div2_dt1");
		$(".div2_dt1").eq(2).addClass("div2_dt1f3");
		$(this).removeClass("div2_dt1f");
		$(this).addClass("div2_dt1");
		});
  	$(".div2_dt1").eq(1).mouseover(function(){
				$(".div2_dt1").eq(3).removeClass("div2_dt1f3");
		$(".div2_dt1").eq(3).addClass("div2_dt1");
		$(this).removeClass("div2_dt1");
		$(this).addClass("div2_dt1f1");
		});	
	$(".div2_dt1").eq(1).mouseout(function(){
		$(".div2_dt1").eq(2).addClass("div2_dt1f3");
		$(this).removeClass("div2_dt1f1");
		$(this).addClass("div2_dt1");
		});
  	$(".div2_dt1").eq(2).mouseover(function(){
				$(".div2_dt1").eq(3).removeClass("div2_dt1f3");
		$(".div2_dt1").eq(3).addClass("div2_dt1");
		$(this).removeClass("div2_dt1");
		$(this).addClass("div2_dt1f2");
		});	
	$(".div2_dt1").eq(2).mouseout(function(){
		$(".div2_dt1").eq(2).addClass("div2_dt1f3");
		$(this).removeClass("div2_dt1f2");
		$(this).addClass("div2_dt1");
		});
  	/*$(".div2_dt1").eq(3).mouseover(function(){
				$(".div2_dt1").eq(1).removeClass("div2_dt1f1");
		$(".div2_dt1").eq(1).addClass("div2_dt1");
		$(this).removeClass("div2_dt1");
		$(this).addClass("div2_dt1f3");
		});	
	$(".div2_dt1").eq(3).mouseout(function(){
		$(".div2_dt1").eq(1).addClass("div2_dt1f1");
		$(this).removeClass("div2_dt1f3");
		$(this).addClass("div2_dt1");
		});*/
  	$(".div2_dt1").eq(4).mouseover(function(){
				$(".div2_dt1").eq(3).removeClass("div2_dt1f3");
		$(".div2_dt1").eq(3).addClass("div2_dt1");
		$(this).removeClass("div2_dt1");
		$(this).addClass("div2_dt1f4");
		});	
	$(".div2_dt1").eq(4).mouseout(function(){
		$(".div2_dt1").eq(3).addClass("div2_dt1f3");
		$(this).removeClass("div2_dt1f4");
		$(this).addClass("div2_dt1");
		});
		
	$(".div2").css("background-color","#F9F7F7");
});