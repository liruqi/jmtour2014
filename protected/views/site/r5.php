<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>资料确认</title>
<link type="text/css" rel="stylesheet" href="css/style.css"/>
<script type="text/javascript" src="js/jquery-1.4.2.min.js"></script>
<script type="text/javascript" src="js/base.js"></script>
<script type="text/javascript" src="js/xg.js"></script>
<script type="text/javascript" src="js/placeholder.js"></script>
<script type="text/javascript">
$(document).ready(function(){
    if($.browser.msie) { 
        $(":input[placeholder]").each(function(){
            $(this).placeholder();
        });
    }

    yy();
    xy();
});
</script>
</head>
<body>
<div class="zmlogo"></div>
<div class="zmjt"></div>
<div id="page06" class="comWidth m_zhong">
      <h1 class="Main_Title">中脉科技2014员工台湾奖励旅游报名系统</h1>
      <div class="Elements01 clearfix">
            <div class="El01_01"><img src="images/u3.png" width="77" height="73" /></div>
            <div class="El01_02">您好！<br />欢迎您参加【中脉科技2014员工台湾奖励旅游】，请于下方输入您的资料以完成报名流程，谢谢！</div>
      </div>
      <form action="<?php echo $_SERVER["REQUEST_URI"];?>" method="post">
      <div class="Elements02">OA账号：<span><?php echo $user->oa; ?></span></div>
      <div class="main">
           <div class="main_Area01">
               <h2 class="mt00">一、个人信息（请务必填写真实的信息）</h2>
               <div class="main01">
                    <ul class="main01_01 clearfix">
                         <li class="clearfix">
                              <span class="main_l">姓名：</span>
                              <span class="main_r"><?php echo $user->name; ?></span>
                         </li>
                         <li class="clearfix">
                              <span class="main_l">性别：</span>
                              <span class="main_r"><?php echo $user->gender; ?></span>
                         </li>
                         <li class="clearfix">
                              <span class="main_l">联系电话：</span>
                              <span class="main_r main_rin"><?php echo $user->phone; ?></span>
                         </li>
                    </ul>
                    <ul class="main01_03 clearfix">
                         <li class="clearfix">
                              <span class="main_l">所属板块：</span>
                              <span class="main_r">
                              <span class="main_rin"><?php echo $user->bq; ?></span>
                              </span>
                         </li>
                         <li class="clearfix">
                              <span class="main_l">部门：</span>
                              <span class="main_r">
                              <span class="main_rin"><?php echo $user->depart; ?></span>
                              </span>
                         </li>
                         <li class="clearfix">
                              <span class="main_l">餐饮忌口：</span>
                              <span class="main_r">
                                   <span class="main_rin"><?php echo $user->eat; ?></span>
                              </span>
                         </li>
                        <li class="clearfix">
                              <span class="main_l">服装尺寸：</span>
                              <span class="main_r">
                              <span class="main_rin"><?php echo $user->extra["clothes"]; ?></span>
                              </span>
                         </li>
                    </ul>
                    <ul class="main01_04 clearfix">
                         <li class="clearfix">
                              <span class="main_l">紧急联络人姓名：</span>
                              <span class="main_r">
                                   <span class="main_rin"><?php echo $user->friendname; ?></span>
                              </span>
                         </li>
                         <li class="clearfix">
                              <span class="main_l">紧急联络人电话：</span>
                              <span class="main_r">
                              <span class="main_rin"><?php echo $user->friendphone; ?></span>
                              </span>
                         </li>
                         <li class="clearfix">
                              <span class="main_l">紧急联络人地址：</span>
                              <span class="main_r main_rr">
                                   <span class="main_rin"><?php echo $user->friendaddr; ?></span>
                              </span>
                         </li>
                         </li>
                    </ul>
               </div>
           </div>
           <div class="main_Area02">
               <h2 class="mt00">二、证照信息&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</h2>
               <!--<label class="mt01 mt_xx"><input type="radio" name="zhuzhi" class="mt_01_01 DUIQI" checked="checked"/><span class="DUIQI">大陆居民往来台湾通行证信息</span></label>
               <label class="mt02 mt_xx"><input type="radio" name="zhuzhi" class="mt_02_01 DUIQI"/><span class="DUIQI">往来港澳通行证信息+护照信息</span></label>-->               
               <div class="main_Area02_In">
                              <ul class="ma01i02 clearfix">
                                   <li class="clearfix mli">
                                        <span class="main_l">签注类别：</span>
                                        <span class="main_r"><span class="main_rin"><?php echo $user->endorse; ?></span></span>
                                   </li>
                              </ul>
               </div> 
           </div>
           <div class="main_Area03">
               <h2 class="mt00">三、行程信息</h2>
               <ul class="ma01i02 clearfix">
                    <li class="clearfix mli">
                         <span class="main_l">出发口岸：</span>
                         <span class="main_r main_rr"><span class="main_rin"><?php echo $user->departureport; ?></span></span>
                    </li>
                    <li class="clearfix mli">
                         <span class="main_l">入住酒店：</span>
                         <span class="main_r main_rr"><span class="main_rin">
                            <?php echo ($user->wave=="批次1") ? "台北喜来登大酒店":"台北君悦大酒店"; ?></span></span>
                    </li>
                    <li class="clearfix mli">
                         <span class="main_l">同住人：</span>
                         <span class="main_r main_rr"><span class="main_rin"><?php echo $user->roommate; ?></span></span>
                    </li>
                    <li class="clearfix mli">
                         <span class="main_l">出发日期：</span>
                         <span class="main_r main_rr"><span class="main_rin"><?php echo ($user->wave=="批次1")?"12月10日":"12月12日"; ?></span></span>
                    </li>
                    <li class="clearfix mli">
                         <span class="main_l">返程日期：</span>
                         <span class="main_r main_rr"><span class="main_rin"><?php echo ($user->wave=="批次1")?"12月14日":"12月16日"; ?></span></span>
                    </li>
                    <li class="clearfix mli">
                         <span class="main_l">自选线路：</span>
                         <span class="main_r main_rr"><span class="main_rin"><?php echo $user->extra['luxian']; ?></span></span>
                    </li>
                    
                    <li class="clearfix mli">
                         <span class="main_l">分团号：</span>
                         <span class="main_r main_rr"><span class="main_rin"><?php echo $user->extra['分团号']; ?></span></span>
                    </li>
                    <li class="clearfix mli">
                         <span class="main_l">出入境领队：</span>
                         <span class="main_r main_rr"><span class="main_rin"><?php echo $user->extra['出入境领队']; ?></span></span>
                    </li>
                    <li class="clearfix mli">
                         <span class="main_l">游览陪同领队：</span>
                         <span class="main_r main_rr"><span class="main_rin"><?php echo $user->extra['游览陪同领队']; ?></span></span>
                    </li>
                    <li class="clearfix mli">
                         <span class="main_l">去程日期：</span>
                         <span class="main_r main_rr"><span class="main_rin"><?php echo $user->extra['去程日期']; ?></span></span>
                    </li>
                    <li class="clearfix mli">
                         <span class="main_l">去程航班：</span>
                         <span class="main_r main_rr"><span class="main_rin"><?php echo $user->extra['去程航班']; ?></span></span>
                    </li>
                    <li class="clearfix mli">
                         <span class="main_l">去程航班时间：</span>
                         <span class="main_r main_rr"><span class="main_rin"><?php echo $user->extra['去程航班时间']; ?></span></span>
                    </li>
                    <li class="clearfix mli">
                         <span class="main_l">回程日期：</span>
                         <span class="main_r main_rr"><span class="main_rin"><?php echo $user->extra['回程日期']; ?></span></span>
                    </li>
                    <li class="clearfix mli">
                         <span class="main_l">回程航班：</span>
                         <span class="main_r main_rr"><span class="main_rin"><?php echo $user->extra['回程航班']; ?></span></span>
                    </li>
                    <li class="clearfix mli">
                         <span class="main_l">回程航班时间：</span>
                         <span class="main_r main_rr"><span class="main_rin"><?php echo $user->extra['回程航班时间']; ?></span></span>
                    </li>
               </ul>
           </div>
      </div>
      </form>


      <p class="Elements03">
          <a href="?r=site/r1" class="anniu" >返回</a>
          <a class="anniu" href="javascript:void(0)" onClick="javascript:window.print()">打印</a>
      </p>

</div>
<div id="top"></div>

</body>
</html>
