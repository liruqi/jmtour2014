<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>登陆</title>
<link type="text/css" rel="stylesheet" href="css/style.css"/>
</head>
<body>
<div class="zmlogo"></div>
<div class="zmjt"></div>
<div id="page02" class="comWidth m_zhong">
      <h1 class="Main_Title">中脉科技2014员工台湾奖励旅游报名系统</h1>
  <div class="mian clearfix">
            <div class="m_r">
	    	<form id="login-form" action="<?php echo $_SERVER["REQUEST_URI"];?>" method="post">

                  <div class="u_01 u_00 clearfix">
                        <span class="u_00l">OA登录名:</span>
                        <div class="u_00r"><input type="text" name="LoginForm[oa]" class="Input_box"/></div>
                        <span class="u_tishi red">
            <?php if ($authCode == 1) { ?>
                        <i class="DUIQI">此登录名不存在</i>
            <?php } else { 
                        // <i class="u_tishi_t DUIQI"></i>
            } ?>
                        </span>
                  </div>
                  <div class="u_02 u_00 clearfix">
                        <span class="u_00l">密&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;码:</span>
                        <div class="u_00r"><input type="password" name="LoginForm[password]" class="Input_box"/></div>
                        <span class="u_tishi red">
            <?php if ($authCode == 2) { ?>
                    <i class="DUIQI">您输入的密码有误</i>
            <?php } else { 
                        //   <i class="u_tishi_t DUIQI"></i>
             } ?>
                        </span>
                  </div>
                  <a style="color: red" href="forget.html">忘记密码？</a>
                  </p>
                  <p class="Elements02"><input type="submit" class="anniu" value="登录"/></p>
		</form>
            </div>
      </div>
</div>
</body>
</html>
