<!doctype html>
<html lang="zh-hans">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
   <?php
 
/*替换为你自己的数据库名*/
$dbname = 'lGmOegEWNNeaKBtIpDdV';
/*填入数据库连接信息*/
$host = 'sqld.duapp.com';
$port = 4050;
$user = 'kmFXQLrAnA0r8QHKRyj88zaN';//用户名(api key)
$pwd = 'tOtDWuREGWSoxb4Hv41NyOqUAUUaNC1k';//密码(secret key)
 /*以上信息都可以在数据库详情页查找到*/
 
/*接着调用mysql_connect()连接服务器*/
$sqllink = @mysql_connect("{$host}:{$port}",$user,$pwd,true);
mysql_query('set names utf8', $sqllink);
if(!$sqllink) {
    die("Connect Server Failed: " . mysql_error());
}
/*连接成功后立即调用mysql_select_db()选中需要连接的数据库*/
if(!mysql_select_db($dbname,$sqllink)) {
    return false;
    die("Select Database Failed: " . mysql_error($sqllink));
}
else 
{
 return true;
 }
 

?> 
</body>
</html>
 