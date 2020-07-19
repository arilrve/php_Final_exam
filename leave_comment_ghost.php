<?php
    include("conn_CommentGhost.php");
    date_default_timezone_set('Asia/Taipei');
    $Name=$_POST['gname'];
    $Comment=$_POST['gcomment'];
    $Time=date("Y-m-d H:i:s");
    $Leave=$_POST['gpostbtn'];
    $sql = "INSERT INTO `commentghost`(`Name`,`Comment`,`Time`) VALUES ('$Name','$Comment','$Time')";
if(isset($Leave)){
    mysqli_query($link,$sql);
}
header("Location:ghost.php");
?>