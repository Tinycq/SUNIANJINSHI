<?php require_once("header.php")?>

 
<?php session_start();
    if(isset($_SESSION["name"])){
    $name=$_SESSION["name"];
    $flag=$_SESSION["flag"];
    $class=$_SESSION["class"];}
else{
    header("location:index.php");
    }
    ?>
    
    <?php if($flag==true&&$class==8):?>       
 <div class="user_info">
    <div class="avatar">
        <img src="images/packman.png" alt="avatar" class="img-thumbnail">
    </div>
    <div class="welcome_info">
    <span class="name">
        <span class="glyphicon-cloud"></span>
        <?php echo $name ?>
    </span>
    <span class="welcome">欢迎你，我们已经恭候多时！欢迎回到高三8班大家庭！<a href="loginout.php">注销</a></span>
    </div>
</div>
    
    <?php require_once("judgement.php")?>
    <?php require_once("pickdays.php") ?>
    <?php require_once("activity.php")?>
     <?php require_once("chart.php")?>
     <?php elseif($flag==true&&$class==11):?>
      <div class="user_info">
    <div class="avatar">
        <img src="images/packman.png" alt="avatar" class="img-thumbnail">
    </div>
    <div class="welcome_info">
    <span class="name">
        <span class="glyphicon-cloud"></span>
        <?php echo $name ?>
    </span>
    <span class="welcome">欢迎你，我们已经恭候多时！欢迎回到高一11班大家庭！<a href="loginout.php">注销</a></span>
    </div>
</div>
    
     <?php require_once("judgement.php")?>
    <?php require_once("pickdays.php") ?>
    <?php require_once("activity.php")?>
     <?php require_once("chart.php")?>
    <?php else:?>
    <?php echo "<div class=\"col-md-6 col-md-offset-3\">对不起,".$name."，你不是永康一中2012届高一(11)/高二/三(8)班的童鞋，请联系管理员!</div>";?>
    <?php endif;?>

<?php require_once("footer.php")?>
