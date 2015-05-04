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

	
	    //根据窗口大小选择字体大小
		$("body").css({"font-size":winWidth*(18/1900)});
		//根据窗口大小控制div大小
		$(".shidiv ").css({"height":winWidth*(500/1900)});

		});
	
}
hanshu();
window.onresize=hanshu;
//实时获取浏览器窗口大小并调整文本图片代	



$(function(){

$right1=$("#right");	
$left1=$("#left");
$window1=$(".shidivbao");
var x=$(".shidivbao1").size();
	var lc1 = 0;
	var rc1 =x-3; 
	
	$left1.click(function(){
		if (lc1 < 1) {
		
			return;
		}
		lc1--;
		rc1++;
		$window1.animate({left:'+=33.3%'}, 1000);
	});

	$right1.click(function(){
		if (rc1 < 1){
	
			return;
		}
		lc1++;
		rc1--;
		$window1.animate({left:'-=33.3%'}, 1000);
		
		
		
		

	});



//初始化
$(".shidivbao1f").eq(0).show(); 
})


function fangda(a)
{
	
	  $(".shidivbao1f").eq(a-1).show(); 
	  $(".shidivbao1f").eq(a-1).mouseout(function(){
	  $(this).hide();
		  });
}