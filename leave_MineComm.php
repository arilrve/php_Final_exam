<?php
    include("conn_MineComment.php");
    date_default_timezone_set('Asia/Taipei');
    $Name=$_POST['name'];
    $Comment=$_POST['comment'];
    $Time=date("Y-m-d H:i:s");
    $Leave=$_POST['postbtn'];
    $sql = "INSERT INTO `minecraftcomment`(`Name`,`Comment`,`Time`) VALUES ('$Name','$Comment','$Time')";
if(isset($Leave)){
    mysqli_query($link,$sql);
}
header("Location:mincraft.php");
?>