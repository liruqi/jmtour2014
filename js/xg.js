//top
function xy(){
	//top
	 $("#top").click(
		  function(){
			   $("html,body").animate(
				{
					"scrollTop": 0
				}
				, 500);
			  }
	 );
}
function yy(){
	//top
	 $("#fz_02_turn").click(
		  function(){
			   $("#fz").css("display","block");
			  }
	  );
	 $("#fz_02_close").click(
		  function(){
			   $("#fz").css("display","none");
			  }
	  );
}
function ty(){
	//top
	 $("#page15_close").click(
		  function(){
			   $("#fz").css("display","block");
			  }
	  );
	 $("#fz_02_close").click(
		  function(){
			   $("#fz").css("display","none");
			  }
	  );
}
