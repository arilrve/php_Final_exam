<?php 
session_start(); 
?>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<?php 
include('db_conn.php');//連結資料庫
$userAC = $_POST ['name'];//post獲取表單裡的name
$userID = $_POST ['user'];//post獲取表單裡的user
$userPW = $_POST ['passwd'];//post獲取表單裡的password
$useremail = $_POST['email'];
// header("Content-Type: text/html; charset=utf8");
if(!isset($_POST['button'])){
exit("錯誤執行");
}//判斷是否有submit操作

$sql = "INSERT INTO `signup` (`account`,`username`, `userpass`,`email`) VALUES ( '$userAC','$userID', '$userPW','$useremail')";//向資料庫插入表單傳來的值的sql

$reslut = mysqli_query($link,$sql);//執行sql
$rows = @mysqli_fetch_row($result);

if (!@$reslut){
die('Error: ' . error_reporting());//如果sql執行失敗輸出錯誤
}else{
echo "註冊成功";//成功輸出註冊成功
}
echo '<meta http-equiv="refresh" content="1;url=Login.html"/>';
mysqli_close($link);//關閉數據庫
?>
