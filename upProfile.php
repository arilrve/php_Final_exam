<?php 
session_start();
$profileacc = $_SESSION['account'];
include("conn_profile.php");
$editname = $_POST['ProfileName'];
echo $editname;
$editpass = $_POST['ProfilePassword'];
$updatesql = "UPDATE `csrf_test` set `username` = '$editname',`userpass`='$editpass' where `username` = '$profileacc'";
if(isset($profileacc)){
    if(mysqli_query($link,$updatesql)){
        echo "Success";
        // echo '<meta http-equiv="refresh" content="1;url=\'Login.htm\'" />';
        unset($_SESSION['account']);
    }else{
        echo"Error";
    }
}else{
    echo "You have no permission to access the page !!! or Password not check !!!";
}
?>