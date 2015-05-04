// JavaScript Document
var winWidth = 0;
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
           shu=$(".shidivbao1").size();
	    //根据窗口大小选择字体大小
		//$("body").css({"font-size":winWidth*(18/1900)});
		//根据窗口大小控制div大小
		$(".shidiv").css({"height":winWidth*(500/1900)});
		
		
		$(".shidivbao1").css({"width":winWidth*0.8/3});
		$(".shidivbao").css({"width":(winWidth*0.8/3)*shu});
		//$(".shidivbao1f").css({"width":winWidth*0.8*0.8});
x=document.getElementById('top1').offsetHeight;
y=document.getElementById('top2').offsetHeight;

if(y>x)
	{$('#top1').css("height",y-10);
$(".shidivbao1fjia_dt2").css("height",y);}
else
	{$('#top2').css("height",x-20);
$(".shidivbao1fjia_dt2").css("height",x);}
		
		});
	
}
hanshu();
window.onresize=hanshu;
//实时获取浏览器窗口大小并调整文本图片代	









$(function(){
	
var w=$(".shidivbao1").outerWidth(true);
var z=$(".shidivbao1").size();
$(".shidivbao1f").eq(1).fadeIn(1000);

$right1=$("#right");	
$left1=$("#left");
$window1=$("#dong");
	
	$right1.click(function(){
		   

   $window1.animate({'margin-left':-w},function()
    {
     $(".shidivbao1").eq(0).appendTo($(".shidivbao"));
     $window1.css({'margin-left':0});
    });
	
	
   $(".shidivbao1f").hide();
   $(".shidivbao1f").eq(2).fadeIn(1000);
   
	});


	$left1.click(function(){
		

    $(".shidivbao1").last().prependTo($(".shidivbao"));
    $window1.css({'margin-left':-w});
    $window1.animate({'margin-left':0});
	$(".shidivbao1f").hide();
    $(".shidivbao1f").eq(1).fadeIn(1000);
	
	});


	$(".div2_dt1").eq(2).addClass("div2_dt1f2");
			
		//导航
 	$(".div2_dt1").eq(0).mouseover(function(){
		$(".div2_dt1").eq(2).removeClass("div2_dt1f2");
		$(".div2_dt1").eq(2).addClass("div2_dt1");
		$(this).removeClass("div2_dt1");
		$(this).addClass("div2_dt1f");
		});	
	$(".div2_dt1").eq(0).mouseout(function(){
		//$(".div2_dt1").eq(1).removeClass("div2_dt1");
		$(".div2_dt1").eq(1).addClass("div2_dt1f2");
		$(this).removeClass("div2_dt1f");
		$(this).addClass("div2_dt1");
		});
  	$(".div2_dt1").eq(1).mouseover(function(){
				$(".div2_dt1").eq(2).removeClass("div2_dt1f2");
		$(".div2_dt1").eq(2).addClass("div2_dt1");
		$(this).removeClass("div2_dt1");
		$(this).addClass("div2_dt1f1");
		});	
	$(".div2_dt1").eq(1).mouseout(function(){
		$(".div2_dt1").eq(1).addClass("div2_dt1f2");
		$(this).removeClass("div2_dt1f1");
		$(this).addClass("div2_dt1");
		});
  	//$(".div2_dt1").eq(2).mouseover(function(){
				//$(".div2_dt1").eq(1).removeClass("div2_dt1f1");
		//$(".div2_dt1").eq(1).addClass("div2_dt1");
		//$(this).removeClass("div2_dt1");
		//$(this).addClass("div2_dt1f2");
		//});	
	//$(".div2_dt1").eq(2).mouseout(function(){
		//$(".div2_dt1").eq(1).addClass("div2_dt1f1");
		//$(this).removeClass("div2_dt1f2");
		//$(this).addClass("div2_dt1");
		//});
  	$(".div2_dt1").eq(3).mouseover(function(){
				$(".div2_dt1").eq(2).removeClass("div2_dt1f2");
		$(".div2_dt1").eq(2).addClass("div2_dt1");
		$(this).removeClass("div2_dt1");
		$(this).addClass("div2_dt1f3");
		});	
	$(".div2_dt1").eq(3).mouseout(function(){
		$(".div2_dt1").eq(2).addClass("div2_dt1f2");
		$(this).removeClass("div2_dt1f3");
		$(this).addClass("div2_dt1");
		});
  	$(".div2_dt1").eq(4).mouseover(function(){
				$(".div2_dt1").eq(2).removeClass("div2_dt1f2");
		$(".div2_dt1").eq(2).addClass("div2_dt1");
		$(this).removeClass("div2_dt1");
		$(this).addClass("div2_dt1f4");
		});	
	$(".div2_dt1").eq(4).mouseout(function(){
		$(".div2_dt1").eq(2).addClass("div2_dt1f2");
		$(this).removeClass("div2_dt1f4");
		$(this).addClass("div2_dt1");
		});



})






