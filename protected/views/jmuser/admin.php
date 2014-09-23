
      <div class="nav clearfix">
            <a  class="Export_Data" href="?r=jmuser/dump">导出数据</a>
	    	<form action="<?php echo $_SERVER["REQUEST_URI"];?>" method="post">
            <div class="Search_Data clearfix">
                <input class="S_00" type="text" name="Jmuser" />
                <input class="S_01 anniu" type="submit" value="搜索"/>
            </div>
            </form>
      </div>


<div class="table">
            <div class="thead clearfix">
                  <div class="td td_1 td_r td_b">员工编号</div>
                  <div class="td td_2 td_r td_b">员工姓名</div>
                  <div class="td td_3 td_r td_b">资料提交状态</div>
                  <div class="td td_4 td_r td_b">旅游线路</div>
                  <div class="td td_5 td_r td_b">入台方式</div>
                  <div class="td td_6 td_r td_b">操作</div>
            </div>
    
    <div class="tbody clearfix">

<?php
$data=$dataProvider->getData();
$n=count($data);

for($row=0;$row<$n;++$row) {
    $user = $data[$row];
    $status = "";
    if ($user->extra) {
        $status = $user->paper ? "已提交" : "个人资料已提交，证照未提交";
    } else {
        $status = $user->paper ? "证照已提交，个人资料未提交" : "未提交";
    }
    $extra = array();
    $method = "";
    if (  $user->extra) {
        $extra = json_decode($user->extra, true);
        $method = "个人旅游入台";
    }
    echo " <div class='Personal_Data'>
        <div class='td td_1 td_r td_b'>{$user->oa}</div>
        <div class='td td_2 td_r td_b'>{$user->name}</div>
        <div class='td td_3 td_r td_b'>{$status}</div>
        <div class='td td_4 td_r td_b'>{$extra['luxian']}</div>
        <div class='td td_5 td_r td_b'>{$method}</div>
        <div class='td td_6 td_r td_b'><a href='?r=jmuser/update&id={$user->oa}'>编辑</a></div>
        </div>";
}

?>
        </div>
