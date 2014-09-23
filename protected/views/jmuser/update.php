<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>填写资料</title>
<link type="text/css" rel="stylesheet" href="css/style.css"/>
<script type="text/javascript" src="js/jquery-1.8.0.min.js"></script>
<script type="text/javascript" src="js/city.js"></script>
<script type="text/javascript" src="js/xg.js"></script>
<script type="text/javascript">
<?php
if (! empty($error)) echo "alert('{$error}');";
?>
</script>
<script type="text/javascript">
window.onload = function(){
    cities = city();
    xy();
    gy();    
    //这是调用代码
    var liandong=new CLASS_LIANDONG_YAO(cities); //设置数据源
    var value = liandong.firstSelectChange("根目录","s1"); //设置第一个选择框
    liandong.subSelectChange("s1","s2"); //设置子级选择框
    if (value) {
        liandong.optionChange(value, "s2")
    }

    value = liandong.firstSelectChange("根目录","s4"); //设置第一个选择框
    liandong.subSelectChange("s4","s5"); //设置子级选择框
    if (value) {
        liandong.optionChange(value, "s5")
    }
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
function CLASS_LIANDONG_YAO(cityinfo)
{
    //数组，联动的数据源
    this.cityinfo=cityinfo; 
    this.indexName='';
    this.obj='';
    //设置子SELECT
    // 参数：当前onchange的SELECT ID，要设置的SELECT ID
    this.subSelectChange=function(selectName1,selectName2) {
        var obj1=document.all[selectName1];
        var obj2=document.all[selectName2];
        var objName=this.toString();
        var me=this;
        obj1.onchange=function() {
            me.optionChange(this.options[this.selectedIndex].value, selectName2)
        }
    }
    //设置第一个SELECT
    // 参数：indexName指选中项,selectName指select的ID
    this.firstSelectChange=function(indexName,selectName)  {
        this.obj=document.all[selectName];
        this.indexName=indexName;
        return this.optionChange(this.indexName,this.obj.id);
    }

    // indexName指选中项,selectName指select的ID
    this.optionChange=function (indexName,selectName) {
        var value = null;
        var obj1=document.all[selectName];
        var me=this;
        obj1.length=0;
        obj1.options[0]=new Option("请选择",'');
        for(var i=0;i<this.cityinfo.length;i++)
        {	
            if(this.cityinfo[i][1]==indexName)
            {
                //alert(this.cityinfo[i][1]+" "+indexName);
                var node =new Option(this.cityinfo[i][2],this.cityinfo[i][0]);
                obj1.options[obj1.length] = node;
                if (obj1.getAttribute("value") == this.cityinfo[i][0]) {
                    node.selected = true;
                    value = this.cityinfo[i][0];
                }
            }
        }
        return value;
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
      <div class="Elements02">OA账号：<span><?php echo $user->oa; ?></span></div>
      <div class="main">
           <div class="main_Area01">
               <h2 class="mt00">一、个人信息（下列信息都为必填）</h2>
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
                              <span class="main_l">身份证号码：</span>
                              <span class="main_r"><?php echo $user->idcard; ?></span>
                         </li>
                         <li class="clearfix">
                              <span class="main_l">出生日期：</span>
                              <span class="main_r"><?php echo $user->birth(); ?></span>
                         </li>
                         <li class="clearfix">
                              <span class="main_l">年龄：</span>
                              <span class="main_r"><?php echo $user->age(); ?></span>
                         </li>
                         <li class="clearfix">
                              <span class="main_l">国籍：</span>
                              <span class="main_r"><input name="LoginForm[nation]" value="<?php echo $user->nation; ?>" type="text"/></span>
                         </li>
                         <li class="clearfix">
                              <span class="main_l">民族：</span>
                              <span class="main_r"><input name="LoginForm[race]" value="<?php echo $user->race; ?>" type="text"/></span>
                         </li>
                         <li class="clearfix">
                              <span class="main_l">联系电话：</span>
                              <span class="main_r"><input name="LoginForm[phone]" value="<?php echo $user->phone; ?>" type="text"/></span>
                         </li>
                    </ul>
                    <ul class="main01_02">
                         <li class="clearfix">
                             <span class="main_l2">家庭住址：</span>
                             <div class="main_r2 clearfix">
                                 <select id="s1" name="Extra[homecity]" value="<?php echo $user->extra['homecity']; ?>" class="main_rs">
                                     <option selected>请选择</option>
                                 </select>
                                 <select id="s2" name="Extra[homearea]" value="<?php echo $user->extra['homearea']; ?>" class="main_rs">
                                     <option selected>请选择</option>
                                 </select>
                                 <input type="text" name="Extra[homeaddr]" value="<?php echo $user->extra['homeaddr']; ?>" class="main_rT" placeholder="请输入详细地址"/>
                             </div>
                         </li>
                         <li class="clearfix">
                             <span class="main_l2">户籍所在地：</span>
                             <div class="main_r2 clearfix">
                                 <select id="s4" name="Extra[hukoucity]" value="<?php echo $user->extra['hukoucity']; ?>" class="main_rs">
                                     <option selected>请选择</option>
                                 </select>
                                 <select id="s5" name="Extra[hukouarea]" value="<?php echo $user->extra['hukouarea']; ?>" class="main_rs">
                                     <option selected>请选择</option>
                                 </select>
                                 <input type="text" name="Extra[hukouaddr]" value="<?php echo $user->extra['hukouaddr']; ?>" class="main_rT" placeholder="请输入详细地址"/>
                             </div>
                         </li>
                    </ul>
                    <ul class="main01_03 clearfix">
                         <li class="clearfix">
                              <span class="main_l">所属板块：</span>
                              <span class="main_r"><?php echo $user->bq; ?></span>
                         </li>
                         <li class="clearfix">
                              <span class="main_l">部门：</span>
                              <span class="main_r"><?php echo $user->depart; ?></span>
                         </li>
                         <li class="clearfix">
                              <span class="main_l">岗位职级：</span>
                              <span class="main_r"><?php echo $user->title; ?></span>
                         </li>
                         <li class="clearfix">
                              <span class="main_l">身高：</span>
                              <span class="main_r"><input name="LoginForm[height]" value="<?php echo $user->height; ?>" type="text"/></span>
                         </li>
                         <li class="clearfix">
                              <span class="main_l">体重：</span>
                              <span class="main_r"><input name="LoginForm[weight]" value="<?php echo $user->weight; ?>" type="text"/></span>
                         </li>
                         <li class="clearfix">
                              <span class="main_l">餐饮忌口：</span>
                              <span class="main_r">
                                     <select class="main_rsl" name="LoginForm[eat]">
                                        <option value="无">请选择</option>
                                        <option value="无" <?php if ($user->eat=="无") echo "selected=selected "; ?>
                                        >无</option>
                                        <option value="清真" <?php if ($user->eat=="清真") echo "selected=selected "; ?>
                                        >清真</option>
                                        <option value="素食" <?php if ($user->eat=="素食") echo "selected=selected "; ?>>素食</option>
                                     </select>
                              </span>
                         </li>
                         <li class="clearfix">
                              <span class="main_l">最高学历：</span>
                              <span class="main_r"><input type="text" name="Extra[education]" value="<?php echo $user->extra["education"]; ?>" /></span>
                         </li>
                         <li class="clearfix">
                              <span class="main_l">毕业院校：</span>
                              <span class="main_r"><input type="text" name="Extra[school]" value="<?php echo $user->extra["school"]; ?>" /></span>
                         </li>
                         <li class="clearfix">
                              <span class="main_l">专业：</span>
                              <span class="main_r"><input type="text" name="Extra[major]" value="<?php echo $user->extra["major"]; ?>" /></span>
                         </li>
                         <li class="clearfix">
                              <span class="main_l">毕业时间：</span>
                              <span class="main_r"><input type="text" name="Extra[graduate]" value="<?php echo $user->extra["graduate"]; ?>" placeholder="格式为：2014-06" /></span>
                         </li>

                    </ul>
                    <ul class="main01_04 clearfix">
                         <li class="clearfix">
                              <span class="main_l">紧急联络人姓名：</span>
                              <span class="main_r"><input name="LoginForm[friendname]" value="<?php echo $user->friendname; ?>" type="text"/></span>
                         </li>
                         <li class="clearfix">
                              <span class="main_l">紧急联络人电话：</span>
                              <span class="main_r"><input name="LoginForm[friendphone]" value="<?php echo $user->friendphone; ?>"type="text"/></span>
                         </li>
                         <li class="clearfix">
                              <span class="main_l">紧急联络人地址：</span>
                              <span class="main_r"><input name="LoginForm[friendaddr]" value="<?php echo $user->friendaddr; ?>"type="text"/></span>
                         </li>
                    </ul>
               </div>
           </div>

           <div class="main_Area02">
               <h2 class="mt00">二、证照信息</h2>
               <div class="main_Area02_In">
                     <div class="ma01i">
                          <div>
                              <h2 class="ma01i01">大陆居民往来台湾通行证（大通证）信息</h2>
                              <ul class="ma01i02 clearfix">
                                   <li class="clearfix mli">
                                        <span class="main_l">通行证号码：</span>
                                        <span class="main_r"><input type="text" name="Paper[twpassport]" value="<?php echo $user->paper['twpassport']; ?>"/></span>
                                   </li>
                                   <li class="clearfix mli">
                                        <span class="main_l">通行证签发地点：</span>
                                        <span class="main_r"><input type="text" name="Paper[twfrom]" value="<?php echo $user->paper['twfrom'];?>" /></span>
                                   </li>
                                   <li class="clearfix mli">
                                        <span class="main_l">通行证签发日期：</span>
                                        <span class="main_r">
                                               <input type="text" name="Paper[twstarttime]" value="<?php echo $user->paper['twstarttime'];?>"/>
                                        </span>
                                   </li>
                                   <li class="clearfix mli">
                                        <span class="main_l">通行证有效日期：</span>
                                        <span class="main_r">
                                               <input type="text" name="Paper[twendtime]" value="<?php echo $user->paper['twendtime'];?>"/>
                                        </span>
                                   </li>
                              </ul>
                          </div>
                          <div>
                              <h2 class="ma01i01">签注信息</h2>
                              <ul class="ma01i02 clearfix">
                                   <li class="clearfix mli">
                                        <span class="main_l">签注签发日期：</span>
                                        <span class="main_r">
                                        <input type="text" name="Paper[twendorsestart]" value="<?php echo $user->paper['twendorsestart'];?>"/>
                                        </span>
                                   </li>
                                   <li class="clearfix mli">
                                        <span class="main_l">签注有效期：</span>
                                        <span class="main_r">
                                        <input type="text" name="Paper[twendorseend]" value="<?php echo $user->paper['twendorseend'];?>"/>
                                        </span>
                                   </li>
                                   <li class="clearfix mli">
                                        <span class="main_l">签发地点：</span>
                                        <span class="main_r"><input type="text" name="Paper[twendorsefrom]" value="<?php echo $user->paper['twendorsefrom'];?>" /></span>
                                   </li>
                              </ul>
                          </div>
                     </div>
                     <div class="ma01i">
                          <div>
                              <h2 class="ma01i01">往来港澳通行证信息</h2>
                              <ul class="ma01i02 clearfix">
                                   <li class="clearfix mli">
                                        <span class="main_l">通行证号码：</span>
                                        <span class="main_r"><input type="text" name="Paper[hkpassport]" value="<?php echo $user->paper['hkpassport'];?>" /></span>
                                   </li>
                                   <li class="clearfix mli">
                                        <span class="main_l">通行证签发地点：</span>
                                        <span class="main_r"><input type="text" name="Paper[hkfrom]" value="<?php echo $user->paper['hkfrom'];?>" /></span>
                                   </li>
                                   <li class="clearfix mli">
                                        <span class="main_l">通行证签发日期：</span>
                                        <span class="main_r">
                                        <input type="text" name="Paper[hkstarttime]" value="<?php echo $user->paper['hkstarttime'];?>"/>
                                        </span>
                                   </li>
                                   <li class="clearfix mli">
                                        <span class="main_l">通行证有效日期：</span>
                                        <span class="main_r">
                                        <input type="text" name="Paper[hkendtime]" value="<?php echo $user->paper['hkendtime'];?>"/>
                                        </span>
                                   </li>
                              </ul>
                          </div>
                          <div>
                              <h2 class="ma01i01">香港签注信息</h2>
                              <ul class="ma01i02 clearfix">
                                   <li class="clearfix mli">
                                        <span class="main_l">签注签发日期：</span>
                                        <span class="main_r">
                                        <input type="text" name="Paper[hkendorsestart]" value="<?php echo $user->paper['hkendorsestart'];?>"/>
                                        </span>
                                   </li>
                                   <li class="clearfix mli">
                                        <span class="main_l">签注有效期：</span>
                                        <span class="main_r">
                                        <input type="text" name="Paper[hkendorseend]" value="<?php echo $user->paper['hkendorseend'];?>"/>
                                        </span>
                                   </li>
                                   <li class="clearfix mli">
                                        <span class="main_l">签发地点：</span>
                                        <span class="main_r"><input type="text" name="Paper[hkendorsefrom]" value="<?php echo $user->paper['hkendorsefrom'];?>" /></span>
                                   </li>
                                   <li class="clearfix mli">
                                        <span class="main_l">签注类型：</span>
                                        <span class="main_r">
                                             <select class="main_rsl" name="Paper[hkendorsetype]">
                                                <option value="G" <?php if($user->paper['hkendorsetype']=='G') {echo "selected=selected";} ?>>G签</option>
                                                <option value="L" <?php if($user->paper['hkendorsetype']=='L') {echo "selected=selected";} ?>>L签</option>
                                             </select>
                                        </span>
                                   </li>
                                   <li class="clearfix mli">
                                        <span class="main_l">签注次数：</span>
                                        <span class="main_r"><input type="text" name="Paper[hkendorsecnt]" value="<?php echo $user->paper['hkendorsecnt'];?>" /></span>
                                   </li>
                                   <li class="clearfix mli">
                                        <span class="main_l">已使用次数：</span>
                                        <span class="main_r"><input type="text" name="Paper[hkendorseused]" value="<?php echo $user->paper['hkendorseused'];?>" /></span>
                                   </li>
                              </ul>
                          </div>
                          <div>
                              <h2 class="ma01i01">护照信息</h2>
                              <ul class="ma01i02 clearfix">
                                   <li class="clearfix mli">
                                        <span class="main_l">护照号码：</span>
                                        <span class="main_r"><input type="text" name="Paper[cnpassport]" value="<?php echo $user->paper['cnpassport'];?>" /></span>
                                   </li>
                                   <li class="clearfix mli">
                                        <span class="main_l">护照签发日期：</span>
                                        <span class="main_r">
                                        <input type="text" name="Paper[cnstarttime]" value="<?php echo $user->paper['cnstarttime'];?>"/>
                                        </span>
                                   </li>
                                   <li class="clearfix mli">
                                        <span class="main_l">护照有效日期：</span>
                                        <span class="main_r">
                                        <input type="text" name="Paper[cnendtime]" value="<?php echo $user->paper['cnendtime'];?>"/>
                                        </span>
                                   </li>
                              </ul>
                          </div>
                     </div>
               </div>
           </div>
     
           <div class="main_Area03">
               <h2 class="mt00">二、路线选择</h2>
               <div class="main03">
                    <ul class="clearfix">
                         <li class="clearfix">
                         <label class="main03_01"><input type="radio" name="Extra[luxian]" value="台中线" class="DUIQI" <?php if($user->extra['luxian']=="台中线") echo 'checked="checked"'; ?> />
                              <span class="DUIQI">台中线</span></label>
                              <p class="main03_02">剩余数量：<span class="red"><?php echo $route[Jmroute::$R1]; ?></span></p>
                              <span class="main03_03">日月潭~埔里小镇<span class="main03_03_In">
<img src="images/nima.jpg"/><p class="main03_03_Inzi">日月潭位于中国台湾省南投县鱼池乡水社村，是台湾最大的天然湖，仅次于曾文水库的第二大湖泊，中国最美的湖泊之一，由玉山和阿里山之间的断裂盆地积水而成。</p>
                        </span></span>
                         </li>
                         <li class="clearfix">
                         <label class="main03_01"><input type="radio" name="Extra[luxian]" value="花莲线" class="DUIQI" <?php if($user->extra['luxian']=="花莲线") echo 'checked="checked"'; ?>/>
                            <span class="DUIQI">花莲线</span></label>
                              <p class="main03_02">剩余数量：<span class="red"><?php echo $route[Jmroute::$R2]; ?></span></p>
                              <span class="main03_03">太鲁阁公园~七星潭<span class="main03_03_In main03_03_In2">
<img src="images/nima.jpg"/> <p class="main03_03_Inzi">七星潭位于花莲县新城乡北埔村，在花莲机场的东侧，七星潭是一个突出于美仑鼻一侧的海湾；七星潭从前是花莲发展。</p>
 </span></span>
                         </li>
                         <li class="clearfix red">
                              <p>为了满足各位家人的游览需求，行程中特设一天可供您选择的行程。请您根据喜好自行选择，数量有限，先到先得哦！</p>
                         </li>
                    </ul>
               </div>
           </div>
      </div>
      <p class="Elements03"><input type="submit" class="anniu" value="确认修改"/></a></p>
      </form>
</div>
<div id="top"></div>
</body>
</html>
