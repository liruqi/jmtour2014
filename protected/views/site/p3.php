<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>免责条款</title>
<link type="text/css" rel="stylesheet" href="css/style.css"/>
<script type="text/javascript" src="js/jquery-1.8.0.min.js"></script>
<script language="javascript"> 
   //表单验证 
   function check(){               
      var ids = document.getElementsByName("LoginForm[accept]");               
      var flag = false ;               
      for(var i=0;i<ids.length;i++){ 
         if(ids[i].checked){ 
            flag = true ; 
            break ; 
         } 
      } 
      if(!flag){ 
         alert("您尚未同意本条款！"); 
         return false ; 
      }else{
          window.location.href='5资料填写.html';
         return false ; 
         }
   } 
</script> 

</head>
<body>
<div class="zmlogo"></div>
<div class="zmjt"></div>
<div id="page05" class="comWidth m_zhong">
      <h1 class="Main_Title">中脉科技2014员工台湾奖励旅游报名系统</h1>
      <h2 class="Elements01">中脉科技2014员工台湾奖励旅游悉知</h2>
      <p class="Elements02">
         尊敬的各位家人：<br />
         公司为了保障各位家人的出行安全，已为所有出行家人购买高额境外保险，但为了此次活动的完美执行，以下悉知请您详细阅读并根据自身实际情况作出决定：<br /><br />
         1、本人身体健康，经过医院体检和医生确认，没有任何不适宜参加此次台湾旅游的情形，本人确认完全具备参加台湾活动的行为能力，本人将根据自身健康状况谨慎选择台湾活动中的任何活动项目，自行承担活动中可能导致人身及财产损害的一切风险。旅行途中的交通工具包含但不限于火车、汽车、飞机等；公司出于对您身体的考虑，禁止怀有身孕的家人参加此次旅游。公司已尽告知义务，如因您隐瞒实情而导致您的身体不适，其产生的一切后果由您个人承担。<br /><br />
         2、本人在此承诺将按时亲临台湾活动并接受公司交通安排，于出发当日自行携带所需证件及物资依照集合时间、地点统一办理报到手续。如个人原因当日未能出席，将被视为自愿放弃参加台湾活动的资格，不会向公司及其关联机构提出任何补偿要求，且愿意承担由于自身没有及时告知取消出席而产生的包含但不限于：机票、酒店、餐食、门票等的费用。<br /><br />
         3、本人自行选择并自愿参加具有危险性活动，保证遵守该类活动过程中所有注意事项，积极配合相关人员工作的指导，自行承担因个人原因产生的全部风险。<br /><br />
         4、本人如属70岁以上老年人，必须自行请医生开具本人就详细健康证明，证明本人现在阶段适合出行旅游，能乘坐长途飞机、巴士等交通工具。且本人承诺，自行承担相关的任何及全部的风险。<br /><br />
         5、本人已知悉台湾活动的相关风险，知悉公司作为台湾活动的组织者，仅负责活动的行程并合理限度范围内提醒活动参与者，注意人身和财产安全，本人保证遵守活动过程中的所有注意事项，积极配合工作人员安排。<br /><br />
         6、本人理解本确认函仅提供出行报名所需，最终出行资格及解释权归公司所有。<br /><br /><br />
      </p>
      <p class="Elements03">中脉科技<br />2014年8月29日</p>
      
	<form id="login-form" action="<?php echo $_SERVER["REQUEST_URI"];?>" method="post">
      		<div class="Elements04"><label class="El04_01"><input name="LoginForm[accept]" type="checkbox" checked="checked" class="El04_02"/><span class="El04_03 red">本人代表上述参加人对本活动的所有内容予以认可并愿意承担相应的法律责任</span></label></div>
		<p class="Elements05"><input type="submit" class="anniu" value="报名参加"/></p>
		</form>
</div>
</body>
</html>
