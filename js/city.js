function city(){
//例子1-------------------------------------------------------------
//数据源
var array=new Array();
  array[0]=new Array("北京","根目录","北京"); //数据格式 ID，父级ID，名称
  array[1]=new Array("上海","根目录","上海"); //数据格式 ID，父级ID，名称
  array[2]=new Array("天津","根目录","天津"); //数据格式 ID，父级ID，名称
  array[3]=new Array("重庆","根目录","重庆"); //数据格式 ID，父级ID，名称
  array[4]=new Array("河北省","根目录","河北省"); //数据格式 ID，父级ID，名称
  array[5]=new Array("山西省","根目录","山西省"); //数据格式 ID，父级ID，名称
  array[6]=new Array("辽宁省","根目录","辽宁省"); //数据格式 ID，父级ID，名称
  array[7]=new Array("吉林省","根目录","吉林省"); //数据格式 ID，父级ID，名称
  array[8]=new Array("黑龙江省","根目录","黑龙江省"); //数据格式 ID，父级ID，名称
  array[9]=new Array("江苏省","根目录","江苏省"); //数据格式 ID，父级ID，名称
  array[10]=new Array("浙江省","根目录","浙江省"); //数据格式 ID，父级ID，名称
  array[11]=new Array("安徽省","根目录","安徽省"); //数据格式 ID，父级ID，名称
  array[12]=new Array("江西省","根目录","江西省"); //数据格式 ID，父级ID，名称
  array[13]=new Array("山东省","根目录","山东省"); //数据格式 ID，父级ID，名称
  array[14]=new Array("河南省","根目录","河南省"); //数据格式 ID，父级ID，名称
  array[15]=new Array("湖北省","根目录","湖北省"); //数据格式 ID，父级ID，名称
  array[16]=new Array("湖南省","根目录","湖南省"); //数据格式 ID，父级ID，名称
  array[17]=new Array("广东省","根目录","广东省"); //数据格式 ID，父级ID，名称
  array[18]=new Array("海南省","根目录","海南省"); //数据格式 ID，父级ID，名称
  array[19]=new Array("四川省","根目录","四川省"); //数据格式 ID，父级ID，名称
  array[20]=new Array("贵州省","根目录","贵州省"); //数据格式 ID，父级ID，名称
  array[21]=new Array("云南省","根目录","云南省"); //数据格式 ID，父级ID，名称
  array[22]=new Array("陕西省","根目录","陕西省"); //数据格式 ID，父级ID，名称
  array[23]=new Array("甘肃省","根目录","甘肃省"); //数据格式 ID，父级ID，名称
  array[24]=new Array("青海省","根目录","青海省"); //数据格式 ID，父级ID，名称
  array[25]=new Array("台湾","根目录","台湾"); //数据格式 ID，父级ID，名称
  array[26]=new Array("内蒙古自治区","根目录","内蒙古自治区"); //数据格式 ID，父级ID，名称
  array[27]=new Array("西藏自治区","根目录","西藏自治区"); //数据格式 ID，父级ID，名称
  array[28]=new Array("广西壮族自治区","根目录","广西壮族自治区"); //数据格式 ID，父级ID，名称
  array[29]=new Array("宁夏回族自治区","根目录","宁夏回族自治区"); //数据格式 ID，父级ID，名称
  array[30]=new Array("新疆维吾尔自治区","根目录","新疆维吾尔自治区"); //数据格式 ID，父级ID，名称
  array[31]=new Array("香港特别行政区","根目录","香港特别行政区"); //数据格式 ID，父级ID，名称
  array[32]=new Array("澳门特别行政区","根目录","澳门特别行政区"); //数据格式 ID，父级ID，名称
  /*北京区*/
  array[33]=new Array("昌平区","北京","昌平区");
  array[34]=new Array("朝阳区","北京","朝阳区");
  array[35]=new Array("海淀区","北京","海淀区");
  array[36]=new Array("延庆区","北京","延庆区");
  array[37]=new Array("宣武区","北京","宣武区");
  array[38]=new Array("西城区","北京","西城区");
  array[39]=new Array("东城区","北京","东城区");
  array[40]=new Array("崇文区","北京","崇文区");
  array[41]=new Array("丰台区","北京","丰台区");
  array[42]=new Array("房山区","北京","房山区");
  array[43]=new Array("石景山区","北京","石景山区");
  array[44]=new Array("顺义区","北京","顺义区");
  array[45]=new Array("门头沟区","北京","门头沟区");
  array[46]=new Array("平谷区","北京","平谷区");
  array[47]=new Array("通州区","北京","通州区");
  array[48]=new Array("怀柔区","北京","怀柔区");
  array[49]=new Array("密云区","北京","密云区");
  /*上海区*/
  array[50]=new Array("浦东新区","上海","浦东新区");
  array[51]=new Array("徐汇区","上海","徐汇区");
  array[52]=new Array("长宁区","上海","长宁区");
  array[53]=new Array("普陀区","上海","普陀区");
  array[54]=new Array("闸北区","上海","闸北区");
  array[55]=new Array("虹口区","上海","虹口区");
  array[56]=new Array("杨浦区","上海","杨浦区");
  array[57]=new Array("黄浦区","上海","黄浦区");
  array[58]=new Array("卢湾区","上海","卢湾区");
  array[59]=new Array("静安区","上海","静安区");
  array[60]=new Array("宝山区","上海","宝山区");
  array[61]=new Array("闵行区","上海","闵行区");
  array[62]=new Array("嘉定区","上海","嘉定区");
  array[63]=new Array("金山区","上海","金山区");
  array[64]=new Array("松江区","上海","松江区");
  array[65]=new Array("青浦区","上海","青浦区");
  array[66]=new Array("南汇区","上海","南汇区");
  array[67]=new Array("奉贤区","上海","奉贤区");
  array[68]=new Array("崇明县","上海","崇明县");
  /*天津区*/
  array[69]=new Array("和平区","天津","和平区");
  array[70]=new Array("河西区","天津","河西区");
  array[71]=new Array("河东区","天津","河东区");
  array[72]=new Array("南开区","天津","南开区");
  array[73]=new Array("河北区","天津","河北区");
  array[74]=new Array("东丽区","天津","东丽区");
  array[75]=new Array("西青区","天津","西青区");
  array[76]=new Array("津南区","天津","津南区");
  array[77]=new Array("北辰区","天津","北辰区");
  array[78]=new Array("塘沽区","天津","塘沽区");
  array[79]=new Array("大港区","天津","大港区");
  array[80]=new Array("汉沽区","天津","汉沽区");
  array[81]=new Array("宝坻区","天津","宝坻区");
  array[82]=new Array("武清区","天津","武清区");
  array[83]=new Array("蓟县","天津","蓟县");
  array[84]=new Array("郊县","天津","郊县");
  array[85]=new Array("宁河","天津","宁河");
  array[86]=new Array("静海","天津","静海");
  /*重庆区*/
  //array[52000]=new Array("a","重庆","a");
  array[87]=new Array("万州区","重庆","万州区");
  array[88]=new Array("涪陵区","重庆","涪陵区");
  array[89]=new Array("渝中区","重庆","渝中区");
  array[90]=new Array("大渡口区","重庆","大渡口区");
  array[91]=new Array("江北区","重庆","江北区");
  array[92]=new Array("沙坪坝区","重庆","沙坪坝区");
  array[93]=new Array("九龙坡区","重庆","九龙坡区");
  array[94]=new Array("南岸区","重庆","南岸区");
  array[95]=new Array("北碚区","重庆","北碚区");
  array[96]=new Array("万盛区","重庆","万盛区");
  array[97]=new Array("双桥区","重庆","双桥区");
  array[98]=new Array("渝北区","重庆","渝北区");
  array[99]=new Array("巴南区","重庆","巴南区");
  array[100]=new Array("黔江区","重庆","黔江区");
  array[101]=new Array("长寿区","重庆","长寿区");
  array[102]=new Array("江津市","重庆","江津市");
  array[103]=new Array("合川市","重庆","合川市");
  array[104]=new Array("永川市","重庆","永川市");
  array[105]=new Array("南川市","重庆","南川市");
  array[106]=new Array("綦江县","重庆","綦江县");
  array[107]=new Array("潼南县","重庆","潼南县");
  array[108]=new Array("铜梁县","重庆","铜梁县");
  array[109]=new Array("大足县","重庆","大足县");
  array[110]=new Array("荣昌县","重庆","荣昌县");
  array[111]=new Array("璧山县","重庆","璧山县");
  array[112]=new Array("梁平县","重庆","梁平县");
  array[113]=new Array("城口县","重庆","城口县");
  array[114]=new Array("丰都县","重庆","丰都县");
  array[115]=new Array("垫江县","重庆","垫江县");
  array[116]=new Array("武隆县","重庆","武隆县");
  array[117]=new Array("忠县","重庆","忠县");
  array[118]=new Array("开县","重庆","开县");
  array[119]=new Array("云阳县","重庆","云阳县");
  array[120]=new Array("奉节县","重庆","奉节县");
  array[121]=new Array("巫山县","重庆","巫山县");
  array[122]=new Array("巫溪县","重庆","巫溪县");
  array[123]=new Array("石柱土家族自治县","重庆","石柱土家族自治县");
  array[124]=new Array("秀山土家族苗族自治县","重庆","秀山土家族苗族自治县");
  array[125]=new Array("酉阳土家族苗族自治县","重庆","酉阳土家族苗族自治县");
  array[126]=new Array("彭水苗族土家族自治县","重庆","彭水苗族土家族自治县");
  /*河北省区*/
  array[127]=new Array("石家庄市","河北省","石家庄市");
  array[128]=new Array("邯郸市","河北省","邯郸市");
  array[129]=new Array("保定市","河北省","保定市");
  array[130]=new Array("承德市","河北省","承德市");
  array[131]=new Array("唐山市","河北省","唐山市");
  array[132]=new Array("廊坊市","河北省","廊坊市");
  array[133]=new Array("沧州市","河北省","沧州市");
  array[134]=new Array("衡水市","河北省","衡水市");
  array[135]=new Array("邢台市","河北省","邢台市");
  array[136]=new Array("秦皇岛市","河北省","秦皇岛市");
  /*山西省区*/
  array[137]=new Array("太原市","山西省","太原市");
  array[138]=new Array("古交市","山西省","古交市");
  array[139]=new Array("大同市","山西省","大同市");
  array[140]=new Array("阳泉市","山西省","阳泉市");
  array[141]=new Array("长治市","山西省","长治市");
  array[142]=new Array("潞城市","山西省","潞城市");
  array[143]=new Array("晋城市","山西省","晋城市");
  array[144]=new Array("高平市","山西省","高平市");
  array[145]=new Array("朔州市","山西省","朔州市");
  array[146]=new Array("晋中市","山西省","晋中市");
  array[147]=new Array("介休市","山西省","介休市");
  array[148]=new Array("运城市","山西省","运城市");
  array[149]=new Array("河津市","山西省","河津市");
  array[150]=new Array("永济市","山西省","永济市");
  array[151]=new Array("忻州市","山西省","忻州市");
  array[152]=new Array("原平市","山西省","原平市");
  array[153]=new Array("临汾市","山西省","临汾市");
  array[154]=new Array("侯马市","山西省","侯马市");
  array[155]=new Array("吕梁市","山西省","吕梁市");
  array[156]=new Array("孝义市","山西省","孝义市");
  array[157]=new Array("汾阳市","山西省","汾阳市");
  /*辽宁省区*/
  array[158]=new Array("沈阳市","辽宁省","沈阳市");
  array[159]=new Array("大连市","辽宁省","大连市");
  array[160]=new Array("鞍山市","辽宁省","鞍山市");
  array[161]=new Array("抚顺市","辽宁省","抚顺市");
  array[162]=new Array("本溪市","辽宁省","本溪市");
  array[163]=new Array("丹东市","辽宁省","丹东市");
  array[164]=new Array("锦州市","辽宁省","锦州市");
  array[165]=new Array("营口市","辽宁省","营口市");
  array[166]=new Array("阜新市","辽宁省","阜新市");
  array[167]=new Array("辽阳市","辽宁省","辽阳市");
  array[168]=new Array("盘锦市","辽宁省","盘锦市");
  array[169]=new Array("铁岭市","辽宁省","铁岭市");
  array[170]=new Array("朝阳市","辽宁省","朝阳市");
  array[171]=new Array("葫芦岛市","辽宁省","葫芦岛市");
  /*吉林省区*/
  array[172]=new Array("长春市","吉林省","长春市");
  array[173]=new Array("吉林市","吉林省","吉林市");
  array[174]=new Array("四平市","吉林省","四平市");
  array[175]=new Array("辽源市","吉林省","辽源市");
  array[176]=new Array("通化市","吉林省","通化市");
  array[177]=new Array("白山市","吉林省","白山市");
  array[178]=new Array("松原市","吉林省","松原市");
  array[179]=new Array("白城市","吉林省","白城市");
  array[180]=new Array("延边朝鲜族自治州","吉林省","延边朝鲜族自治州");
  array[181]=new Array("延吉市","吉林省","延吉市");
  array[182]=new Array("图们市","吉林省","图们市");
  array[183]=new Array("敦化市","吉林省","敦化市");
  array[184]=new Array("珲春市","吉林省","珲春市");
  array[185]=new Array("龙井市","吉林省","龙井市");
  /*黑龙江省区*/
  //
  array[186]=new Array("哈尔滨市","黑龙江省","哈尔滨市");
  array[187]=new Array("齐齐哈尔市","黑龙江省","齐齐哈尔市");
  array[188]=new Array("牡丹江市","黑龙江省","牡丹江市");
  array[189]=new Array("佳木斯市","黑龙江省","佳木斯市");
  array[190]=new Array("大庆市","黑龙江省","大庆市");
  array[191]=new Array("伊春市","黑龙江省","伊春市");
  array[192]=new Array("鸡西市","黑龙江省","鸡西市");
  array[193]=new Array("鹤岗市","黑龙江省","鹤岗市");
  array[194]=new Array("双鸭山市","黑龙江省","双鸭山市");
  array[195]=new Array("七台河市","黑龙江省","七台河市");
  array[196]=new Array("绥化市","黑龙江省","绥化市");
  array[197]=new Array("黑河市","黑龙江省","黑河市");
  array[198]=new Array("大兴安岭地区","黑龙江省","大兴安岭地区");
  array[199]=new Array("绥芬河市市","黑龙江省","绥芬河市市");
  array[200]=new Array("抚远县市","黑龙江省","抚远县市");
  /*江苏省区*/
  array[201]=new Array("南京市","江苏省","南京市");
  array[202]=new Array("无锡市","江苏省","无锡市");
  array[203]=new Array("徐州市","江苏省","徐州市");
  array[204]=new Array("常州市","江苏省","常州市");
  array[205]=new Array("苏州市","江苏省","苏州市");
  array[206]=new Array("南通市","江苏省","南通市");
  array[207]=new Array("连云港市","江苏省","连云港市");
  array[208]=new Array("淮安市","江苏省","淮安市");
  array[209]=new Array("盐城市","江苏省","盐城市");
  array[210]=new Array("扬州市","江苏省","扬州市");
  array[211]=new Array("镇江市","江苏省","镇江市");
  array[212]=new Array("泰州市","江苏省","泰州市");
  array[213]=new Array("宿迁市","江苏省","宿迁市");
  /*浙江省区*/
  array[214]=new Array("杭州市","浙江省","杭州市");
  array[215]=new Array("宁波市","浙江省","宁波市");
  array[216]=new Array("温州市","浙江省","温州市");
  array[217]=new Array("嘉兴市","浙江省","嘉兴市");
  array[218]=new Array("湖州市","浙江省","湖州市");
  array[219]=new Array("绍兴市","浙江省","绍兴市");
  array[220]=new Array("金华市","浙江省","金华市");
  array[221]=new Array("衢州市","浙江省","衢州市");
  array[222]=new Array("舟山市","浙江省","舟山市");
  array[223]=new Array("台州市","浙江省","台州市");
  array[224]=new Array("丽水市","浙江省","丽水市");
  /*安徽省区*/
  array[225]=new Array("合肥市","安徽省","合肥市");
  array[226]=new Array("芜湖市","安徽省","芜湖市");
  array[227]=new Array("蚌埠市","安徽省","蚌埠市");
  array[228]=new Array("淮南市","安徽省","淮南市");
  array[229]=new Array("马鞍山市","安徽省","马鞍山市");
  array[230]=new Array("淮北市","安徽省","淮北市");
  array[231]=new Array("铜陵市","安徽省","铜陵市");
  array[232]=new Array("安庆市","安徽省","安庆市");
  array[233]=new Array("黄山市","安徽省","黄山市");
  array[234]=new Array("滁州市","安徽省","滁州市");
  array[235]=new Array("阜阳市","安徽省","阜阳市");
  array[236]=new Array("宿州市","安徽省","宿州市");
  array[237]=new Array("巢湖市","安徽省","巢湖市");
  array[238]=new Array("六安市","安徽省","六安市");
  array[239]=new Array("亳州市","安徽省","亳州市");
  array[240]=new Array("池州市","安徽省","池州市");
  array[241]=new Array("宣城市","安徽省","宣城市");
  /*江西省区*/
  array[242]=new Array("南昌市","江西省","南昌市");
  array[243]=new Array("景德镇市","江西省","景德镇市");
  array[244]=new Array("萍乡市","江西省","萍乡市");
  array[245]=new Array("九江市","江西省","九江市");
  array[246]=new Array("新余市","江西省","新余市");
  array[247]=new Array("鹰潭市","江西省","鹰潭市");
  array[248]=new Array("赣州市","江西省","赣州市");
  array[249]=new Array("吉安市","江西省","吉安市");
  array[250]=new Array("宜春市","江西省","宜春市");
  array[251]=new Array("抚州市","江西省","抚州市");
  array[252]=new Array("上饶市","江西省","上饶市");
  /*山东省区*/
  array[253]=new Array("济南市","山东省","济南市");
  array[254]=new Array("青岛市","山东省","青岛市");
  array[255]=new Array("淄博市","山东省","淄博市");
  array[256]=new Array("枣庄市","山东省","枣庄市");
  array[257]=new Array("东营市","山东省","东营市");
  array[258]=new Array("烟台市","山东省","烟台市");
  array[259]=new Array("潍坊市","山东省","潍坊市");
  array[260]=new Array("济宁市","山东省","济宁市");
  array[261]=new Array("泰安市","山东省","泰安市");
  array[262]=new Array("威海市","山东省","威海市");
  array[263]=new Array("日照市","山东省","日照市");
  array[264]=new Array("莱芜市","山东省","莱芜市");
  array[265]=new Array("临沂市","山东省","临沂市");
  array[266]=new Array("德州市","山东省","德州市");
  array[267]=new Array("聊城市","山东省","聊城市");
  array[268]=new Array("滨州市","山东省","滨州市");
  array[269]=new Array("荷泽市","山东省","荷泽市");
  /*河南省区*/
  array[270]=new Array("郑州市","河南省","郑州市");
  array[271]=new Array("开封市","河南省","开封市");
  array[272]=new Array("洛阳市","河南省","洛阳市");
  array[273]=new Array("平顶山市","河南省","平顶山市");
  array[274]=new Array("安阳市","河南省","安阳市");
  array[275]=new Array("鹤壁市","河南省","鹤壁市");
  array[276]=new Array("新乡市","河南省","新乡市");
  array[277]=new Array("焦作市","河南省","焦作市");
  array[278]=new Array("濮阳市","河南省","濮阳市");
  array[279]=new Array("许昌市","河南省","许昌市");
  array[280]=new Array("漯河市","河南省","漯河市");
  array[281]=new Array("三门峡市","河南省","三门峡市");
  array[282]=new Array("南阳市","河南省","南阳市");
  array[283]=new Array("商丘市","河南省","商丘市");
  array[284]=new Array("信阳市","河南省","信阳市");
  array[285]=new Array("周口市","河南省","周口市");
  array[286]=new Array("驻马店市","河南省","驻马店市");
  /*湖北省区*/
  array[287]=new Array("武汉市","湖北省","武汉市");
  array[288]=new Array("黄石市","湖北省","黄石市");
  array[289]=new Array("十堰市","湖北省","十堰市");
  array[290]=new Array("宜昌市","湖北省","宜昌市");
  array[291]=new Array("襄樊市","湖北省","襄樊市");
  array[292]=new Array("鄂州市","湖北省","鄂州市");
  array[293]=new Array("荆门市","湖北省","荆门市");
  array[294]=new Array("孝感市","湖北省","孝感市");
  array[295]=new Array("荆州市","湖北省","荆州市");
  array[296]=new Array("黄冈市","湖北省","黄冈市");
  array[297]=new Array("咸宁市","湖北省","咸宁市");
  array[298]=new Array("随州市","湖北省","随州市");
  array[299]=new Array("恩施土家族苗族自治州","湖北省","恩施土家族苗族自治州");
  array[300]=new Array("省直辖行政单位","湖北省","省直辖行政单位");
  /*湖南省区*/
  array[301]=new Array("长沙市","湖南省","长沙市");
  array[302]=new Array("株洲市","湖南省","株洲市");
  array[303]=new Array("湘潭市","湖南省","湘潭市");
  array[304]=new Array("衡阳市","湖南省","衡阳市");
  array[305]=new Array("邵阳市","湖南省","邵阳市");
  array[306]=new Array("岳阳市","湖南省","岳阳市");
  array[307]=new Array("益阳市","湖南省","益阳市");
  array[308]=new Array("常德市","湖南省","常德市");
  array[309]=new Array("张家界市","湖南省","张家界市");
  array[310]=new Array("郴州市","湖南省","郴州市");
  array[311]=new Array("永州市","湖南省","永州市");
  array[312]=new Array("怀化市","湖南省","怀化市");
  array[313]=new Array("娄底市","湖南省","娄底市");
  array[314]=new Array("湘西土家族苗族自治州","湖南省","湘西土家族苗族自治州");
  
  /*广东省区*/
  array[315]=new Array("广州市","广东省","广州市");
  array[316]=new Array("韶关市","广东省","韶关市");
  array[317]=new Array("深圳市","广东省","深圳市");
  array[318]=new Array("珠海市","广东省","珠海市");
  array[319]=new Array("汕头市","广东省","汕头市");
  array[320]=new Array("佛山市","广东省","佛山市");
  array[321]=new Array("江门市","广东省","江门市");
  array[322]=new Array("湛江市","广东省","湛江市");
  array[323]=new Array("茂名市","广东省","茂名市");
  array[324]=new Array("肇庆市","广东省","肇庆市");
  array[325]=new Array("惠州市","广东省","惠州市");
  array[326]=new Array("梅州市","广东省","梅州市");
  array[327]=new Array("汕尾市","广东省","汕尾市");
  array[328]=new Array("河源市","广东省","河源市");
  array[329]=new Array("阳江市","广东省","阳江市");
  array[330]=new Array("清远市","广东省","清远市");
  array[331]=new Array("东莞市","广东省","东莞市");
  array[332]=new Array("中山市","广东省","中山市");
  array[333]=new Array("潮州市","广东省","潮州市");
  array[334]=new Array("揭阳市","广东省","揭阳市");
  array[335]=new Array("云浮市","广东省","云浮市");
  /*海南省区*/
  array[336]=new Array("海口市","海南省","海口市");
  array[337]=new Array("三亚市","海南省","三亚市");
  array[338]=new Array("省直辖县级行政单位","海南省","省直辖县级行政单位");
  /*四川省区*/
  array[339]=new Array("成都市","四川省","成都市");
  array[340]=new Array("自贡市","四川省","自贡市");
  array[341]=new Array("攀枝花市","四川省","攀枝花市");
  array[342]=new Array("泸州市","四川省","泸州市");
  array[343]=new Array("德阳市","四川省","德阳市");
  array[344]=new Array("绵阳市","四川省","绵阳市");
  array[345]=new Array("广元市","四川省","广元市");
  array[346]=new Array("遂宁市","四川省","遂宁市");
  array[347]=new Array("内江市","四川省","内江市");
  array[348]=new Array("乐山市","四川省","乐山市");
  array[349]=new Array("南充市","四川省","南充市");
  array[350]=new Array("眉山市","四川省","眉山市");
  array[351]=new Array("宜宾市","四川省","宜宾市");
  array[352]=new Array("广安市","四川省","广安市");
  array[353]=new Array("达州市","四川省","达州市");
  array[354]=new Array("雅安市","四川省","雅安市");
  array[355]=new Array("巴中市","四川省","巴中市");
  array[356]=new Array("资阳市","四川省","资阳市");
  array[357]=new Array("阿坝藏族羌族自治州","四川省","阿坝藏族羌族自治州");
  array[358]=new Array("甘孜藏族自治州","四川省","甘孜藏族自治州");
  array[359]=new Array("凉山彝族自治州","四川省","凉山彝族自治州");
  /*贵州省区*/
  array[360]=new Array("贵阳市","贵州省","贵阳市");
  array[361]=new Array("六盘水市","贵州省","六盘水市");
  array[362]=new Array("遵义市","贵州省","遵义市");
  array[363]=new Array("安顺市","贵州省","安顺市");
  array[364]=new Array("铜仁地区","贵州省","铜仁地区");
  array[365]=new Array("黔西南布依族苗族自治州","贵州省","黔西南布依族苗族自治州");
  array[366]=new Array("毕节地区","贵州省","毕节地区");
  array[367]=new Array("黔东南苗族侗族自治州","贵州省","黔东南苗族侗族自治州");
  array[368]=new Array("黔南布依族苗族自治州","贵州省","黔南布依族苗族自治州");
  /*云南省区*/
  array[369]=new Array("昆明市","云南省","昆明市");
  array[370]=new Array("曲靖市","云南省","曲靖市");
  array[371]=new Array("玉溪市","云南省","玉溪市");
  array[372]=new Array("保山市","云南省","保山市");
  array[373]=new Array("昭通市","云南省","昭通市");
  array[374]=new Array("丽江市","云南省","丽江市");
  array[375]=new Array("思茅市","云南省","思茅市");
  array[376]=new Array("临沧市","云南省","临沧市");
  array[377]=new Array("楚雄彝族自治州","云南省","楚雄彝族自治州");
  array[378]=new Array("红河哈尼族彝族自治州","云南省","红河哈尼族彝族自治州");
  array[379]=new Array("文山壮族苗族自治州","云南省","文山壮族苗族自治州");
  array[380]=new Array("西双版纳傣族自治州","云南省","西双版纳傣族自治州");
  array[381]=new Array("大理白族自治州","云南省","大理白族自治州");
  array[382]=new Array("德宏傣族景颇族自治州","云南省","德宏傣族景颇族自治州");
  array[383]=new Array("怒江傈僳族自治州","云南省","怒江傈僳族自治州");
  array[384]=new Array("迪庆藏族自治州","云南省","迪庆藏族自治州");
  /*陕西省区*/
  array[385]=new Array("西安市","陕西省","西安市");
  array[386]=new Array("铜川市","陕西省","铜川市");
  array[387]=new Array("宝鸡市","陕西省","宝鸡市");
  array[388]=new Array("咸阳市","陕西省","咸阳市");
  array[389]=new Array("渭南市","陕西省","渭南市");
  array[390]=new Array("延安市","陕西省","延安市");
  array[391]=new Array("汉中市","陕西省","汉中市");
  array[392]=new Array("榆林市","陕西省","榆林市");
  array[393]=new Array("安康市","陕西省","安康市");
  array[394]=new Array("商洛市","陕西省","商洛市");
  /*甘肃省区*/
  array[395]=new Array("兰州市","甘肃省","兰州市");
  array[396]=new Array("嘉峪关市","甘肃省","嘉峪关市");
  array[397]=new Array("金昌市","甘肃省","金昌市");
  array[398]=new Array("白银市","甘肃省","白银市");
  array[399]=new Array("天水市","甘肃省","天水市");
  array[400]=new Array("武威市","甘肃省","武威市");
  array[401]=new Array("张掖市","甘肃省","张掖市");
  array[402]=new Array("平凉市","甘肃省","平凉市");
  array[403]=new Array("酒泉市","甘肃省","酒泉市");
  array[404]=new Array("庆阳市","甘肃省","庆阳市");
  array[405]=new Array("定西市","甘肃省","定西市");
  array[406]=new Array("陇南市","甘肃省","陇南市");
  array[407]=new Array("临夏回族自治州","甘肃省","临夏回族自治州");
  array[408]=new Array("甘南藏族自治州","甘肃省","甘南藏族自治州");
  /*青海省区*/
  array[409]=new Array("西宁市","青海省","西宁市");
  array[410]=new Array("海东地区","青海省","海东地区");
  array[411]=new Array("海北藏族自治州","青海省","海北藏族自治州");
  array[412]=new Array("黄南藏族自治州","青海省","黄南藏族自治州");
  array[413]=new Array("海南藏族自治州","青海省","海南藏族自治州");
  array[414]=new Array("果洛藏族自治州","青海省","果洛藏族自治州");
  array[415]=new Array("玉树藏族自治州","青海省","玉树藏族自治州");
  array[416]=new Array("海西蒙古族藏族自治州","青海省","海西蒙古族藏族自治州");
  /*台湾区*/
  array[417]=new Array("基隆","台湾","基隆");
  array[418]=new Array("新竹","台湾","新竹");
  array[419]=new Array("台中","台湾","台中");
  array[420]=new Array("嘉义","台湾","嘉义");
  array[421]=new Array("台南","台湾","台南");
  /*内蒙古自治区*/
  array[422]=new Array("呼和浩特市","内蒙古自治区","呼和浩特市");
  array[423]=new Array("包头市","内蒙古自治区","包头市");
  array[424]=new Array("乌海市","内蒙古自治区","乌海市");
  array[425]=new Array("赤峰市","内蒙古自治区","赤峰市");
  array[426]=new Array("通辽市","内蒙古自治区","通辽市");
  array[427]=new Array("鄂尔多斯市","内蒙古自治区","鄂尔多斯市");
  array[428]=new Array("呼伦贝尔市","内蒙古自治区","呼伦贝尔市");
  array[429]=new Array("巴彦淖尔市","内蒙古自治区","巴彦淖尔市");
  array[430]=new Array("乌兰察布市","内蒙古自治区","乌兰察布市");
  array[431]=new Array("兴安盟","内蒙古自治区","兴安盟");
  array[432]=new Array("锡林郭勒盟","内蒙古自治区","锡林郭勒盟");
  array[433]=new Array("阿拉善盟","内蒙古自治区","阿拉善盟");
  /*西藏自治区*/
  array[434]=new Array("拉萨市","西藏自治区","拉萨市");
  array[435]=new Array("昌都地区","西藏自治区","昌都地区");
  array[436]=new Array("山南地区","西藏自治区","山南地区");
  array[437]=new Array("日喀则地区","西藏自治区","日喀则地区");
  array[438]=new Array("那曲地区","西藏自治区","那曲地区");
  array[439]=new Array("阿里地区","西藏自治区","阿里地区");
  array[440]=new Array("林芝地区","西藏自治区","林芝地区");
  /*广西壮族自治区*/
  array[441]=new Array("南宁市","广西壮族自治区","南宁市");
  array[442]=new Array("柳州市","广西壮族自治区","柳州市");
  array[443]=new Array("桂林市","广西壮族自治区","桂林市");
  array[444]=new Array("梧州市","广西壮族自治区","梧州市");
  array[445]=new Array("北海市","广西壮族自治区","北海市");
  array[446]=new Array("防城港市","广西壮族自治区","防城港市");
  array[447]=new Array("钦州市","广西壮族自治区","钦州市");
  array[448]=new Array("贵港市","广西壮族自治区","贵港市");
  array[449]=new Array("玉林市","广西壮族自治区","玉林市");
  array[450]=new Array("百色市","广西壮族自治区","百色市");
  array[451]=new Array("贺州市","广西壮族自治区","贺州市");
  array[452]=new Array("河池市","广西壮族自治区","河池市");
  array[453]=new Array("来宾市","广西壮族自治区","来宾市");
  array[454]=new Array("崇左市","广西壮族自治区","崇左市");
  /*宁夏回族自治区*/
  array[455]=new Array("银川市","宁夏回族自治区","银川市");
  array[456]=new Array("石嘴山市","宁夏回族自治区","石嘴山市");
  array[457]=new Array("吴忠市","宁夏回族自治区","吴忠市");
  array[458]=new Array("固原市","宁夏回族自治区","固原市");
  array[459]=new Array("中卫市","宁夏回族自治区","中卫市");
  /*新疆维吾尔自治区*/
  array[460]=new Array("乌鲁木齐市","新疆维吾尔自治区","乌鲁木齐市");
  array[461]=new Array("克拉玛依市","新疆维吾尔自治区","克拉玛依市");
  array[462]=new Array("吐鲁番地区","新疆维吾尔自治区","吐鲁番地区");
  array[463]=new Array("哈密地区","新疆维吾尔自治区","哈密地区");
  array[464]=new Array("昌吉回族自治州","新疆维吾尔自治区","昌吉回族自治州");
  array[465]=new Array("博尔塔拉蒙古自治州","新疆维吾尔自治区","博尔塔拉蒙古自治州");
  array[466]=new Array("巴音郭楞蒙古自治州","新疆维吾尔自治区","巴音郭楞蒙古自治州");
  array[467]=new Array("阿克苏地区","新疆维吾尔自治区","阿克苏地区");
  array[468]=new Array("克孜勒苏柯尔克孜自治州","新疆维吾尔自治区","克孜勒苏柯尔克孜自治州");
  array[469]=new Array("喀什地区","新疆维吾尔自治区","喀什地区");
  array[470]=new Array("和田地区","新疆维吾尔自治区","和田地区");
  array[471]=new Array("伊犁哈萨克自治州","新疆维吾尔自治区","伊犁哈萨克自治州");
  array[472]=new Array("塔城地区","新疆维吾尔自治区","塔城地区");
  array[473]=new Array("阿勒泰地区","新疆维吾尔自治区","阿勒泰地区");
  array[474]=new Array("省直辖行政单位","新疆维吾尔自治区","省直辖行政单位");
  /*香港特别行政区*/
  array[475]=new Array("新界","香港特别行政区","新界");
  array[476]=new Array("九龙","香港特别行政区","九龙");
  array[477]=new Array("港岛","香港特别行政区","港岛");
  array[478]=new Array("离岛区","香港特别行政区","离岛区");
  /*澳门特别行政区*/
  array[479]=new Array("澳门","澳门特别行政区","澳门");


return array;
  

	}
