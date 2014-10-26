    <div class="container">
     <?php
$sqlbool=require_once("dataconfig.php");
if (!$sqlbool)
{
    die("FATAL ERROR DATABASE CONNECT FAIL!!");
}
/*至此连接已完全建立，就可对当前数据库进行相应的操作了*/
//创建一个数据库表
$starttime=$_POST["starttime"];
$endtime=$_POST["endtime"];
$name=$_POST["name"];     

list($sy,$sm,$sd)=explode('-',$starttime);
list($ey,$em,$ed)=explode('-',$endtime);

$sumdays=ceil((mktime(0,0,0,$em,$ed,$ey)-mktime(0,0,0,$sm,$sd,$sy))/3600/24);
if($sumdays<=0){
echo "你简直在逗我，这种放假的日期你能接受吗？";
}
else{

$sql = "UPDATE  `classmates` SET  `STARTTIME` =  '$starttime',`ENDTIME` =  '$endtime' WHERE  `NAME` LIKE  '$name'";
$query = mysql_query($sql, $sqllink);
if($query){
echo "数据更新成功!<br>";
 require_once("judgement.php");
}
}
?>

        <p face=Arial color=#666 size=2>滚回首页...</p>
                <div class="progress">
            <div class="progress-bar" id="loading" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100" style="width: 0%">
                <span class="sr-only">跳转</span>
            </div>
        </div>
        <script language="javascript">
            var per = 0;
            function count() {
                per = per + 4
                var perval=per + "%"
                document.getElementById('loading').style.width=perval;
                if (per < 100) {
                    setTimeout("count()", 50);
                } else {
                   window.location = "myclass.php";
                }
            }
            count();
        </script>


</div>

   