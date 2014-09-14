<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>填写资料</title>
<link type="text/css" rel="stylesheet" href="css/style.css"/>
<script type="text/javascript" src="js/jquery-1.4.2.min.js"></script>
<script type="text/javascript" src="js/iepng.js"></script>
<script type="text/javascript" src="js/city.js"></script>
<script type="text/javascript" src="js/xg.js"></script>
<script type="text/javascript">
	EvPNG.fix('body,div,ul,li,ol,dl,dt,dd,img,input,span,p,h1,h2,h3,h4,a,textarea');
</script>
<script type="text/javascript">
    window.onload = function(){
           city();
           sy();
	  }
</script>
<script type="text/javascript" src="js/placeholder.js"></script>
<script type="text/javascript">
	$(document).ready(function(){
		if($.browser.msie) { 
		$(":input[placeholder]").each(function(){
		$(this).placeholder();
		});}
	});
</script>
<script language="javascript" >
/*  
**    ====================================
**    类名：CLASS_LIANDONG_YAO  
**    功能：多级联动菜单  
**    作者：YAODAYIZI     
**/  	
  function CLASS_LIANDONG_YAO(array)
  {
   //数组，联动的数据源
  	this.array=array; 
  	this.indexName='';
  	this.obj='';
  	//设置子SELECT
	// 参数：当前onchange的SELECT ID，要设置的SELECT ID
      this.subSelectChange=function(selectName1,selectName2)
  	{
  	//try
  	//{
    var obj1=document.all[selectName1];
    var obj2=document.all[selectName2];
    var objName=this.toString();
    var me=this;
    obj1.onchange=function()
    {
    	me.optionChange(this.options[this.selectedIndex].value,obj2.id)
    }
  	}
  	//设置第一个SELECT
	// 参数：indexName指选中项,selectName指select的ID
  	this.firstSelectChange=function(indexName,selectName)  
  	{
  	this.obj=document.all[selectName];
  	this.indexName=indexName;
  	this.optionChange(this.indexName,this.obj.id)
  	}
  // indexName指选中项,selectName指select的ID
  	this.optionChange=function (indexName,selectName)
  	{
    var obj1=document.all[selectName];
    var me=this;
    obj1.length=0;
    obj1.options[0]=new Option("请选择",'');
    for(var i=0;i<this.array.length;i++)
    {	
    	if(this.array[i][1]==indexName)
    	{
    	//alert(this.array[i][1]+" "+indexName);
      obj1.options[obj1.length]=new Option(this.array[i][2],this.array[i][0]);
    	}
    }
  	}	
  }
  </script>
</head>
<body>
<div class="zmlogo"></div>
<div class="zmjt"></div>
<div id="page06" class="comWidth m_zhong">
      <h1 class="Main_Title">中脉科技2014员工台湾奖励旅游报名系统</h1>
      <h2 class="Main_Bx"></h2>
      <div class="Elements01 clearfix">
            <div class="El01_01"><img src="images/u3.png" width="77" height="73" /></div>
            <div class="El01_02">您好！<br />欢迎您参加【中脉科技2014员工台湾奖励旅游】，请于下方输入您的资料以完成报名流程，谢谢！</div>
      </div>
      <form action="<?php echo $_SERVER["REQUEST_URI"];?>" method="post">
      <div class="Elements02">OA账号：<span>101017028</span></div>
      <div class="main">
           <div class="main_Area01">
               <h2 class="mt00">一、个人信息（下列信息都为必填）</h2>
               <div class="main01">
                    <ul class="main01_01 clearfix">
                         <li class="clearfix">
                              <span class="main_l">姓名：</span>
                              <span class="main_r">张三</span>
                         </li>
                         <li class="clearfix">
                              <span class="main_l">性别：</span>
                              <span class="main_r">男</span>
                         </li>
                         <li class="clearfix">
                              <span class="main_l">身份证号码：</span>
                              <span class="main_r">231121198411290053</span>
                         </li>
                         <li class="clearfix">
                              <span class="main_l">出生日期：</span>
                              <span class="main_r">1984-11-29</span>
                         </li>
                         <li class="clearfix">
                              <span class="main_l">年龄：</span>
                              <span class="main_r">30</span>
                         </li>
                         <li class="clearfix">
                              <span class="main_l">国籍：</span>
                              <span class="main_r"><input name="LoginForm[nation]" type="text"/></span>
                         </li>
                         <li class="clearfix">
                              <span class="main_l">民族：</span>
                              <span class="main_r"><input type="text"/></span>
                         </li>
                         <li class="clearfix">
                              <span class="main_l">联系电话：</span>
                              <span class="main_r"><input type="text"/></span>
                         </li>
                    </ul>
                    <ul class="main01_02">
                         <li class="clearfix">
                             <span class="main_l2">家庭住址：</span>
                             <div class="main_r2 clearfix">
                                 <select id="s1" name="s1" class="main_rs">
                                     <option selected>请选择</option>
                                 </select>
                                 <select id="s2" name="s2" class="main_rs">
                                     <option selected>请选择</option>
                                 </select>
                                 <input type="text" class="main_rT" placeholder="请输入详细地址"/>
                             </div>
                         </li>
                         <li class="clearfix">
                             <span class="main_l2">户籍所在地：</span>
                             <div class="main_r2 clearfix">
                                 <select id="s4" name="s4" class="main_rs">
                                     <option selected>请选择</option>
                                 </select>
                                 <select id="s5" name="s5" class="main_rs">
                                     <option selected>请选择</option>
                                 </select>
                                 <input type="text" class="main_rT" placeholder="请输入详细地址"/>
                             </div>
                         </li>
                    </ul>
                    <ul class="main01_03 clearfix">
                         <li class="clearfix">
                              <span class="main_l">所属板块：</span>
                              <span class="main_r">总裁办</span>
                         </li>
                         <li class="clearfix">
                              <span class="main_l">部门：</span>
                              <span class="main_r">研发部</span>
                         </li>
                         <li class="clearfix">
                              <span class="main_l">岗位职级：</span>
                              <span class="main_r">总监</span>
                         </li>
                         <li class="clearfix">
                              <span class="main_l">身高：</span>
                              <span class="main_r"><input type="text"/></span>
                         </li>
                         <li class="clearfix">
                              <span class="main_l">体重：</span>
                              <span class="main_r"><input type="text"/></span>
                         </li>
                         <li class="clearfix">
                              <span class="main_l">餐饮忌口：</span>
                              <span class="main_r">
                                     <select class="main_rsl">
                                         <option>请选择</option>
                                         <option>无</option>
                                         <option>清真</option>
                                         <option>素食</option>
                                     </select>
                              </span>
                         </li>
                    </ul>
                    <ul class="main01_04 clearfix">
                         <li class="clearfix">
                              <span class="main_l">紧急联络人姓名：</span>
                              <span class="main_r"><input type="text"/></span>
                         </li>
                         <li class="clearfix">
                              <span class="main_l">紧急联络人电话：</span>
                              <span class="main_r"><input type="text"/></span>
                         </li>
                         <li class="clearfix">
                              <span class="main_l">紧急联络人地址：</span>
                              <span class="main_r"><input type="text"/></span>
                         </li>
                         </li>
                    </ul>
               </div>
           </div>
           <div class="main_Area03">
               <h2 class="mt00">二、路线选择</h2>
               <div class="main03">
                    <ul class="clearfix">
                         <li class="clearfix">
                              <label class="main03_01"><input type="radio" name="luxian" class="DUIQI" checked="checked"/><span class="DUIQI">养生之旅</span></label>
                              <p class="main03_02">剩余数量：<span class="red">275</span></p>
                              <span class="main03_03">线路介绍<span class="main03_03_In"><img src="images/_u160.png"/></span></span>
                         </li>
                         <li class="clearfix">
                              <label class="main03_01"><input type="radio" name="luxian" class="DUIQI"/><span class="DUIQI">文化之旅</span></label>
                              <p class="main03_02">剩余数量：<span class="red">128</span></p>
                              <span class="main03_03">线路介绍<span class="main03_03_In main03_03_In2"><img src="images/_u162.png"/></span></span>
                         </li>
                    </ul>
               </div>
           </div>
      </div>
      <p class="Elements03"><input type="submit" class="anniu" value="提交报名"/></a></p>
      </form>
</div>
<div id="top"></div>
</body>
</html>
