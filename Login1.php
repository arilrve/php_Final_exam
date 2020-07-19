<?php
session_start();
include("db_conn.php");
$account = $_POST["account"];
// echo $account;
$userPW = $_POST["passwd"];
// echo $userPW;
$sql= "SELECT * FROM `csrf_test` where `username` = '$account' AND `userpass` = '$userPW'";
if($result=mysqli_query($link,$sql)){
    if(mysqli_num_rows($result) >= 1){
        $_SESSION['account'] = $account;
        header('Location:index.php');
    }else{
        echo"<h1 style='color: blue;text-align: center;'>Wrong Account or Password</h1><br/>";
        echo '<meta http-equiv="refresh" content="3;url=\'Login.htm\'" />';
    }
}else{
        echo"<h1 style='color: blue;text-align: center;'>Database connection error</h1><br/>";
        echo '<meta http-equiv="refresh" content="3;url=\'Login.htm\'" />';
    }
