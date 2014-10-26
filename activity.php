    <div class="activity_box">
    <div class="row">
        <div class="col-md-9 col-sm-12 activity_init">我们近期有以下活动：详情请点击！</div>
 <?php 
 $sqlbool=require("dataconfig.php");
if (!$sqlbool)
{
    die("FATAL ERROR DATABASE CONNECT FAIL!!");
}
 //$sql_activity = "SELECT ID,wp_title,guid,post_excerpt FROM wp_posts WHERE post_type LIKE 'post' ";
$sql_activity = "SELECT * FROM wp_posts WHERE post_type LIKE 'post' ORDER BY ID DESC LIMIT 5";
$query_activity = @mysql_query($sql_activity, $sqllink)
or die("查询失败！");
$postid=1;
while($activity=mysql_fetch_array($query_activity)){
    if($activity["post_status"]=="publish"){
    echo "<div class=\"col-md-9 col-sm-12 activity_item\"><p><a href=\"".$activity["guid"]."\">No.".$postid.": ".$activity["post_title"]."</a></p></div>";
    $postid+=1;}
}

/*显式关闭连接，非必须*/
mysql_close($sqllink);

    ?>
<!--
    <div class="imgshow clo-md-12 ">
    <img src="./images/basketball.png" alt="basketball" class="img-thumbnail img-responsive pull-right">
    </div>
-->
</div>
</div>