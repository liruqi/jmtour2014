<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>密码修改</title>
<link type="text/css" rel="stylesheet" href="css/style.css"/>
<script type="text/javascript" src="js/jquery-1.10.2.min.js"></script>
<script type="text/javascript" src="js/iepng.js"></script>
<script type="text/javascript">
	EvPNG.fix('body,div,ul,li,ol,dl,dt,dd,img,input,span,p,h1,h2,h3,h4,a,textarea');
</script>
<script type="text/javascript">
    window.onload = function(){

	  }
</script>
</head>
<body>
<div class="zmlogo"></div>
<div class="zmjt"></div>
<div id="page03" class="comWidth m_zhong">
      <h1 class="Main_Title">中脉科技2014员工台湾奖励旅游报名系统</h1>
      	<form id="login-form" action="<?php echo $_SERVER["REQUEST_URI"];?>" method="post">
      <div class="Elements01">
              <div class="u_01 u_00 clearfix">
                    <span class="u_00l">请重置登录密码:</span>
                    <div class="u_00r"><input name="LoginForm[password]" type="password" class="Input_box"/></div>
                    <span class="u_tishi red">请输入新密码</span>
              </div>
              <div class="u_02 u_00 clearfix">
                    <span class="u_00l">请再次输入密码:</span>
                    <div class="u_00r"><input name="LoginForm[passwd]" type="password" class="Input_box"/></div>
                    <span class="u_tishi red">两次输入的密码不一致</span>
              </div>
      </div>
      <p class="Elements02"><a href="3密码修改成功.html"><input type="submit" class="anniu" value="提交修改"/></a></p>
	</form>
</div>
</body>
</html>
