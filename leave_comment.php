<?php
    include("conn_comment.php");
    date_default_timezone_set('Asia/Taipei');
    $Name=$_POST['name'];
    $Title=$_POST['gametitle'];
    $Comment=$_POST['comment'];
    $Time=date("Y-m-d H:i:s");
    $Leave=$_POST['postbtn'];
    $sql = "INSERT INTO `comment`(`Name`,`Class`,`Comment`,`Time`) VALUES ('$Name','$Title','$Comment','$Time')";
if(isset($Leave)){
    mysqli_query($link,$sql);
}
header("Location:single-post.php");
?>