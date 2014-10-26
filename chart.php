<?php
$sqlbool=require("dataconfig.php");
if (!$sqlbool)
{
    die("FATAL ERROR DATABASE CONNECT FAIL!!");
}
/*至此连接已完全建立，就可对当前数据库进行相应的操作了*/
//执行sql语句
$i=0;
$sql = "SELECT NAME ,  STARTTIME , ENDTIME FROM  classmates";
$query = @mysql_query($sql, $sqllink)
or die("查询失败！");
	
    //数组初始化
    
    for($i=1;$i<=31;$i++){
    $day_7[$i]=(
    array(
    0=>$i,
    1=>0
    )
    );
    }
    for($i=1;$i<=31;$i++){
    $day_8[$i]=(
    array(
    0=>$i,
    1=>0
    )
    );
    }
    for($i=1;$i<=30;$i++){
    $day_9[$i]=(
    array(
    0=>$i,
    1=>0
    )
    );
    }

    
    while($dataresult=mysql_fetch_array($query)){
    $starttimec=$dataresult["STARTTIME"];
    $endtimec=$dataresult["ENDTIME"];
    list($sy,$sm,$sd)=explode('-',$starttimec);
    list($ey,$em,$ed)=explode('-',$endtimec);
    //echo $em."-".$ed."<br>";
    //echo $sm."-".$sd."<br>";
    $sy=(int)$sy;
    $sm=(int)$sm;
    $sd=(int)$sd;
    $ey=(int)$ey;
    $em=(int)$em;
    $ed=(int)$ed;
    if($sm==7&&$em==7){//在七月份以内
    for($i=$sd;$i<=ceil($ed);$i++){
    $day_7[$i]=(
    array(
    0=>$i,
    1=>$day_7[$i][1]+1
    )
    );
    }
    }
    
    elseif($sm==7&&$em==8){//7到8月份
    for($i=$sd;$i<=31;$i++){
    
    $day_7[$i]=(
    array(
    0=>$i,
    1=>$day_7[$i][1]+1
    )
    );
    }
    
    for($i=1;$i<=$ed;$i++){
     $day_8[$i]=(
   array(
    0=>$i,
    1=>$day_8[$i][1]+1
    )
    );
    
    }
    }
    
     elseif($sm==8&&$em==8){//在8月份以内
    for($i=$sd;$i<=$ed;$i++){
    $day_8[$i]=(
    array(
    0=>$i,
    1=>$day_7[$i][1]+1
    )
    );
    }
    }
    elseif($sm==8&&$em==9){//8到9月份
    for($i=$sd;$i<=31;$i++){
    $day_8[$i]=(
     array(
    0=>$i,
    1=>$day_8[$i][1]+1
    )
    
    );
    }
    for($i=1;$i<$ed;$i++){
     $day_9[$i]=(
    array(
    0=>$i,
    1=>$day_9[$i][1]+1
    )
    
    );
    
    }
    }
    elseif($sm==7&&$em==9){//7到9月份
    for($i=$sd;$i<=31;$i++){
    $day_7[$i]=(
     array(
    0=>$i,
    1=>$day_7[$i][1]+1
    )
    
    );
    }
     for($i=1;$i<=31;$i++){
    $day_8[$i]=(
     array(
    0=>$i,
    1=>$day_8[$i][1]+1
    )
    
    );
    }
    for($i=1;$i<$ed;$i++){
     $day_9[$i]=(
    array(
    0=>$i,
    1=>$day_9[$i][1]+1
    )
    
    );
    
    }
    }
    
    
    
    }
/*显式关闭连接，非必须*/
mysql_close($sqllink);
?>

 

<script type="text/javascript" src="js/chart/fusioncharts.js"></script>
<script type="text/javascript" src="js/chart/themes/fusioncharts.theme.zune.js"></script>
<script type="text/javascript">
FusionCharts.ready(function(){
    var revenueChart = new FusionCharts({
      type: "column2d",
      renderAt: "chartContainer1",
      width: "100%",
      height: "300",
      dataFormat: "json",
      dataSource: {
       "chart": {
          "caption": "小伙伴们自由的时间",
          "subCaption": "7月放假时间人数统计",
          "xAxisName": "7月份",
          "yAxisName": "人数",
          "theme": "zune"
       },
       "data": [
                    <?php
              foreach($day_7 as $label_7=>$value_7){
           echo "{label:'7-$value_7[0]',value:$value_7[1]},"; 
          }
          ?>
        ]
      }
 
  });
  revenueChart.render("chartContainer1");
}); 
 
 FusionCharts.ready(function(){
    var revenueChart = new FusionCharts({
      type: "column2d",
      renderAt: "chartContainer2",
      width: "100%",
      height: "300",
      dataFormat: "json",
      dataSource: {
       "chart": {
          "caption": "小伙伴们自由的时间",
          "subCaption": "8月放假时间人数统计",
          "xAxisName": "8月份",
          "yAxisName": "人数",
          "theme": "zune"
       },
       "data": [
                   <?php
              foreach($day_8 as $label_8=>$value_8){//lable_7是第一个一维数组的索引value_7是第二层数组的引用
           echo "{label:'8-$value_8[0]',value:$value_8[1]},"; 
          }
          ?>
                   
        ]
      }
 
  });
  revenueChart.render("chartContainer2");
}); 
 
 
 FusionCharts.ready(function(){
    var revenueChart = new FusionCharts({
      type: "column2d",
      renderAt: "chartContainer3",
      width: "100%",
      height: "300",
      dataFormat: "json",
      dataSource: {
       "chart": {
          "caption": "小伙伴们自由的时间",
          "subCaption": "9月放假时间人数统计",
          "xAxisName": "9月份",
          "yAxisName": "人数",
          "theme": "zune"
       },
       "data": [
                   <?php
              foreach($day_9 as $label_9=>$value_9){//lable_7是第一个一维数组的索引value_7是第二层数组的引用
           echo "{label:'9-$value_9[0]',value:$value_9[1]},"; 
          }
          ?>
                   
        ]
      }
 
  });
  revenueChart.render("chartContainer3");
}); 
 
</script>
<div class="container">
<div class="row">
<h6 class="text-center">小伙伴们什么时候有空？</h6>
<div class="chartcontainer">
<div id="chartContainer1">7月放假人数统计（如果你看到这个，说明你的浏览器很垃圾，要升级啦）</div>
<div id="chartContainer2">8月放假人数统计（如果你看到这个，说明你的浏览器很垃圾，要升级啦）</div>
<div id="chartContainer3">9月放假人数统计（如果你看到这个，说明你的浏览器很垃圾，要升级啦）</div>
</div>
</div>
</div>
