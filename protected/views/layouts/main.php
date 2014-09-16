<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>报名管理</title>
<link type="text/css" rel="stylesheet" href="css/style.css"/>
<script type="text/javascript" src="js/jquery-1.10.2.min.js"></script>
<script type="text/javascript" src="js/xg.js"></script>

</head>

<body>
<div class="zmlogo"></div>
<div class="zmjt"></div>

<div id="page15" class="comWidth m_zhong">
    <a href="?r=site/logout"> 
        <input type="submit" id="page15_close" class="Drop_Out anniu" name="<?php echo Yii::app()->user->name; ?>" value="退出"/>
    </a>
    <h1 class="Main_Title">中脉科技2014员工台湾奖励旅游报名系统</h1>

    <?php echo $content; ?>
</div>

</body>
</html>
