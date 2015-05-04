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
		//$("body").css({"font-size":winWidth*(15/1900)});
	   
		});
	
}
hanshu();
window.onresize=hanshu;
//实时获取浏览器窗口大小并调整文本图片代码结束


$(function(){
	
	
   $(".div1a").mouseover(function(){
	   $(".div2a").show();
	   });
   $(".div1a").mouseout(function(){
	   $(".div2a").hide();
	   });
	   
	   
   $(".div1b").mouseover(function(){
	   $(".div2b").show();
	   });
   $(".div1b").mouseout(function(){
	   $(".div2b").hide();
	   });
	   
	   
   $(".div1c").mouseover(function(){
	   $(".div2c").show();
	   });
   $(".div1c").mouseout(function(){
	   $(".div2c").hide();
	   });
	   
	   	  	   
   $(".div1d").mouseover(function(){
	   $(".div2d").show();
	   });
   $(".div1d").mouseout(function(){
	   $(".div2d").hide();
	   });	
	})