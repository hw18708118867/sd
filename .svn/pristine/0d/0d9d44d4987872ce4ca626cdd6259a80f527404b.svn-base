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
		//$("body").css({"font-size":winWidth*(18/1900)});
		//根据窗口大小控制div大小
/*		$(".an_div2a").css({"height":winWidth*(370/1900)});
		$(".an_div1").css({"height":winWidth*(170/1900)});	*/
		});
	
}
hanshu();
window.onresize=hanshu;
//实时获取浏览器窗口大小并调整文本图片代	

/*function shipin(a)
{
	$(".bao").eq(a).show();
		$(".bao").eq(a).mouseout(function(){$(this).hide();});
}*/
$(function(){
    $('.an_div2adt1').mouseenter(function(){
        $(this).children('.bao').show();
    })
        .mouseleave(function(){
        $(this).children('.bao').hide();
    });
});
$(function(){
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
});