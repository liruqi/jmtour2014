<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>密码修改</title>
<link type="text/css" rel="stylesheet" href="css/style.css"/>
<script type="text/javascript" src="js/jquery-1.10.2.min.js"></script>

</head>
<body>
<div class="zmlogo"></div>
<div class="zmjt"></div>
<div id="page14" class="comWidth m_zhong">
    <h1 class="Main_Title">中脉科技2014员工台湾奖励旅游报名系统</h1>
    <form id="login-form" action="<?php echo $_SERVER["REQUEST_URI"];?>" method="post">
    <div class="Elements01">
<div class="u_01 u_00 clearfix">
<span class="u_00l">管理员帐号:</span>
<div class="u_00r"><input type="text" name="LoginForm[username]" class="Input_box"/></div>
<span class="u_tishi red">
<!--
<i class="DUIQI">此账号不存在</i>
-->
</span>
</div>
<div class="u_02 u_00 clearfix">
<span class="u_00l">管理员密码:</span>
<div class="u_00r"><input type="password" name="LoginForm[password]" class="Input_box"/></div>
<span class="u_tishi red">
<?php 
if ("POST" == $_SERVER['REQUEST_METHOD']) {
    echo '<i class="DUIQI">您输入的密码有误</i>';
} 
?>
</span>

</div>
</div>
<p class="Elements02"><input type="submit" class="anniu" value="登录"/></p>
</form>
</div>
</body>
</html>

