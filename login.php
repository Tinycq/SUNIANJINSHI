<?php
//获得来自 URL 的 q 参数
//$name=$_POST["namev"];
//$class=$_POST["classv"];
//echo $name."<br/>".$class;
?>
<?php 
//setcookie("user", "Alex Porter", time()+3600);
?>
<?php
$sqlbool=require("dataconfig.php");
if (!$sqlbool)
{
    die("FATAL ERROR DATABASE CONNECT FAIL!!");
}
/*至此连接已完全建立，就可对当前数据库进行相应的操作了*/
//创建一个数据库表
$name=$_POST["name"];
$class=$_POST["class"];
$sql = "SELECT * FROM classmates";
$query = @mysql_query($sql, $sqllink)
or die("查询失败！");

if ($query === false) {
	die("Select Table Failed: " . mysql_error($sqllink));
} else {
	session_start();
	$_SESSION["class"]=$class;
	while($isname=mysql_fetch_array($query)){
    if( $name==$isname['NAME']){
    $_SESSION["name"]=$name;
    $_SESSION["flag"]=true;
    header("location:myclass.php");
    break;
    }
    else if ($name!=$isname['NAME']){
    $_SESSION["name"]=$name;
    $_SESSION["flag"]=false;
    header("location:myclass.php");
    }
    };
}


    
        

/*显式关闭连接，非必须*/
mysql_close($sqllink);

?>