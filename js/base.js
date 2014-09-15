$(function(){
	//中文名验证
	$(".name").blur(function(){
		var val=$(this).val();
		var reg=/^[\u4E00-\u9FA5]+$/;
		if(reg.test(val)){
			$(this).parent().find(".i_right").css("display","inline-block");
			$(this).parent().find(".error").hide();
		}else{
			$(this).parent().find(".i_right").hide();
			$(this).parent().find(".error").show();
		}
	});
	$(".a").click(function(){
		var _left=$(this).offset().left;
		var _top=$(this).offset().top;
		$(".pop_1").css({"display":"block","left":_left+$(this).width()+10,"top":_top-20});
	});
	$(".a").siblings("input").click(function(){
		$(".pop_1").hide();
	});
	
	$(".b").click(function(){
		var _left=$(this).offset().left;
		var _top=$(this).offset().top;
		$(".pop_2").css({"display":"block","left":_left+$(this).width()+10,"top":_top-20});
	});
	$(".b").siblings("input").click(function(){
		$(".pop_2").hide();
	});
		/*添加于2013.12.12*/
	$(".c").click(function(){
		var _left=$(this).offset().left;
		var _top=$(this).offset().top;
		$(".pop_5").css({"display":"block","left":_left+$(this).width()+10,"top":_top-20});
	});
	$(".c").siblings("input").click(function(){
		$(".pop_5").hide();
	});
	$(".d").click(function(){
		var _left=$(this).offset().left;
		var _top=$(this).offset().top;
		$(".pop_6").css({"display":"block","left":_left+$(this).width()+10,"top":_top-20});
	});
	$(".d").siblings("input").click(function(){
		$(".pop_6").hide();
	});
/*添加于2013.12.12结束*/
	//身份证验证
	$(".id").blur(function(){
		var val=$(this).val();
		if(IdentityCodeValid(val)){
			$(this).parent().find(".i_right").css("display","inline-block");
			$(this).parent().find(".error").hide();
		}else{
			$(this).parent().find(".i_right").hide();
			$(this).parent().find(".error").show();
		}
	});
	//手机验证
	$(".mobile").blur(function(){
		var val=$(this).val();
		var reg=/^1[3,5]\d{9}$/;
		if(reg.test(val)){
			$(this).parent().find(".i_right").css("display","inline-block");
			$(this).parent().find(".error").hide();
		}else{
			$(this).parent().find(".i_right").hide();
			$(this).parent().find(".error").show();
		}
	});
	$(".mobile_sure").blur(function(){
		var val=$(this).val();
		var mail_val=$(this).parents(".first").find(".mobile").val();
		if(!val){return};
		if(val==mail_val){
			$(this).parent().find(".i_right").css("display","inline-block");
			$(this).parent().find(".error").hide();
		}else{
			$(this).parent().find(".i_right").hide();
			$(this).parent().find(".error").show();
		}
	});
	//邮箱验证
	$(".mail").blur(function(){
		var val=$(this).val();
		var reg=/^\w+([-+.]\w+)*@\w+([-.]\w+)*\.\w+([-.]\w+)*$/;
		if(reg.test(val)){
			$(this).parent().find(".i_right").css("display","inline-block");
			$(this).parent().find(".error").hide();
		}else{
			$(this).parent().find(".i_right").hide();
			$(this).parent().find(".error").show();
		}
	});
	$(".mail_sure").blur(function(){
		var val=$(this).val();
		var mail_val=$(this).parents(".first").find(".mail").val();
		if(!val){return};
		if(val==mail_val){
			$(this).parent().find(".i_right").css("display","inline-block");
			$(this).parent().find(".error").hide();
		}else{
			$(this).parent().find(".i_right").hide();
			$(this).parent().find(".error").show();
		}
	});

	$(".num").click(function(){
		if($(this).attr("checked")&&$(this).index()==1){
			$(".second").css("display","none");
		}else{
			$(".second").css("display","block");
		}
	});

	$(".close").click(function(){
		$(this).parents(".pop").hide();
	});
	var time_1,time_2,time_3,time_4;
	$(".pop_text_1").hover(function(){
		var _left=$(this).offset().left;
		var _top=$(this).offset().top;
		$(".pop_1").css({"display":"block","left":_left+$(this).width()+10,"top":_top-20})
	},function(){
		time_1=setTimeout(function(){
			$(".pop_1").hide();
		},300);
	});
	$(".pop_1").hover(function(){
		clearTimeout(time_1);
	},function(){
		$(".pop_1").hide();
	});

	$(".pop_text_2").hover(function(){
		var _left=$(this).offset().left;
		var _top=$(this).offset().top;
		$(".pop_2").css({"display":"block","left":_left+$(this).width()+10,"top":_top-20});
	},function(){
		time_2=setTimeout(function(){
			$(".pop_2").hide();
		},300);
	});
	$(".pop_2").hover(function(){
		clearTimeout(time_2);
	},function(){
		$(".pop_2").hide();
	});

	$(".pop_text_3").hover(function(){
		var _left=$(this).offset().left;
		var _top=$(this).offset().top;
		$(".pop_3").css({"display":"block","left":_left+$(this).width()+10,"top":_top-20})
	},function(){
		time_3=setTimeout(function(){
			$(".pop_3").hide();
		},300);
	});
	$(".pop_3").hover(function(){
		clearTimeout(time_3);
	},function(){
		$(".pop_3").hide();
	});

	$(".pop_text_4 input").click(function(){
		var _left=$(this).offset().left;
		var _top=$(this).offset().top;
		$(".pop_4").css({"display":"block","left":_left+$(this).width()+10,"top":_top-20})
	});
	$(".pop_text_4").siblings("input").click(function(){
		$(".pop_4").hide();
	});
	$(".pop_4").hover(function(){
		clearTimeout(time_4);
	},function(){
		$(".pop_4").hide();
	});
/*添加2013.12.12*/
$(".pop_text_5 input").click(function(){
		var _left=$(this).offset().left;
		var _top=$(this).offset().top;
		$(".pop_5").css({"display":"block","left":_left+$(this).width()+10,"top":_top-20})
	});
	$(".pop_text_5").siblings("input").click(function(){
		$(".pop_5").hide();
	});
	$(".pop_5").hover(function(){
		clearTimeout(time_4);
	},function(){
		$(".pop_5").hide();
	});
	$(".pop_text_6 input").click(function(){
		var _left=$(this).offset().left;
		var _top=$(this).offset().top;
		$(".pop_6").css({"display":"block","left":_left+$(this).width()+10,"top":_top-20})
	});
	$(".pop_text_6").siblings("input").click(function(){
		$(".pop_6").hide();
	});
	$(".pop_6").hover(function(){
		clearTimeout(time_4);
	},function(){
		$(".pop_6").hide();
	});
/*添加2013.12.12结束*/

});




function IdentityCodeValid(code) { 
           var city={11:"北京",12:"天津",13:"河北",14:"山西",15:"内蒙古",21:"辽宁",22:"吉林",23:"黑龙江 ",31:"上海",32:"江苏",33:"浙江",34:"安徽",35:"福建",36:"江西",37:"山东",41:"河南",42:"湖北 ",43:"湖南",44:"广东",45:"广西",46:"海南",50:"重庆",51:"四川",52:"贵州",53:"云南",54:"西藏 ",61:"陕西",62:"甘肃",63:"青海",64:"宁夏",65:"新疆",71:"台湾",81:"香港",82:"澳门",91:"国外 "};
           var tip = "";
           var pass= true;
           
           if(!code || !/^\d{6}(18|19|20)?\d{2}(0[1-9]|1[12])(0[1-9]|[12]\d|3[01])\d{3}(\d|X)$/i.test(code)){
               tip = "身份证号格式错误";
               pass = false;
           }
           
          else if(!city[code.substr(0,2)]){
               tip = "地址编码错误";
               pass = false;
           }
           else{
               //18位身份证需要验证最后一位校验位
               if(code.length == 18){
                   code = code.split('');
                   //∑(ai×Wi)(mod 11)
                   //加权因子
                   var factor = [ 7, 9, 10, 5, 8, 4, 2, 1, 6, 3, 7, 9, 10, 5, 8, 4, 2 ];
                   //校验位
                   var parity = [ 1, 0, 'X', 9, 8, 7, 6, 5, 4, 3, 2 ];
                   var sum = 0;
                   var ai = 0;
                   var wi = 0;
                   for (var i = 0; i < 17; i++)
                   {
                       ai = code[i];
                       wi = factor[i];
                       sum += ai * wi;
                   }
                   var last = parity[sum % 11];
                   if(parity[sum % 11] != code[17]){
                       tip = "校验位错误";
                       pass =false;
                   }
               }
           }
           //if(!pass) alert(tip);
           return pass;
       }

























