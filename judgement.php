<div id="judgearea">
     <div class="container">
     <div class="row" >
     <?php
$sqlbool=require("dataconfig.php");
if (!$sqlbool)
{
    die("FATAL ERROR DATABASE CONNECT FAIL!!");
}
/*至此连接已完全建立，就可对当前数据库进行相应的操作了*/
//执行sql语句
$sql = "SELECT NAME ,  STARTTIME , ENDTIME FROM  classmates WHERE  NAME LIKE  '$name'";
$query = @mysql_query($sql, $sqllink)
or die("查询失败！");
$dataresult=mysql_fetch_array($query);
$starttimej=$dataresult["STARTTIME"];
$endtimej=$dataresult["ENDTIME"];

?>

<?php if($query):?>
<div class="holiday"><span class="col-md-12">你的放假日期为：<?php echo $starttimej." 到 ".$endtimej;?></span>
<?php      

list($sy,$sm,$sd)=explode('-',$starttimej);
list($ey,$em,$ed)=explode('-',$endtimej);

$sumdays=ceil((mktime(0,0,0,$em,$ed,$ey)-mktime(0,0,0,$sm,$sd,$sy))/3600/24);
if($sumdays<=0){
echo "<div class=\"col-md-12\">你简直在逗我，这种放假的日期你能接受吗？";
}
else{
echo "<div class=\"col-md-12\">你一共可以休息：".$sumdays." 天";//这就能输入实满年龄：5岁
}
    ?></div>

</div>
    <div class="judgeprocess">
    <div class="col-md-12 text-left">
        <h6>你的假期给力吗？<small>（以90天为基准）</small></h6>
    </div>
        <div class="col-md-6 progress_style">
        <div class="progress">
            <div class="progress-bar" role="progressbar" aria-valuenow="<?php echo $sumdays/90*100 ?>" aria-valuemin="0" aria-valuemax="100" style="width: <?php echo $sumdays/90*100?>%;">
              <?php echo ceil($sumdays/90*100)."%"?>
                <span class="sr-only"><?php echo ceil($sumdays/90) ?>% 的假期评价</span>
            </div>
        </div>
    </div>
    <div class="col-md-12">
    <?php 
    if(ceil($sumdays/90*100)<33){
    echo "才".ceil($sumdays/90*100)."%呀，还差得远呢！";
    
    }
    elseif(ceil($sumdays/90*100)>=33&&ceil($sumdays/90*100)<66){
    echo "有".ceil($sumdays/90*100)."%呢，哎哟，还不错！";
    }
    else{
    echo "哇靠，".ceil($sumdays/90*100)."%，我好羡慕你！";
    }
    
    ?>
    </div>
    </div>


<?php else: ?>
<?php echo "<div class=\"col-md-12\">错误！您选择的时间有误，我没有办法识别呀！</div>";?>


<?php endif;?>
<?php 
/*显式关闭连接，非必须*/

?>
</div>
</div>

   