<?php 

/* 還未輸入資料連到adduser.php的話 直接導向reg.php輸入資料 */
if(empty($_POST)){
    header("Location:reg.html"); 
    exit();
}
$dsn = "mysql:host=localhost;charset=utf8;dbname=school";
$pdo = new PDO($dsn,"root","");
date_default_timezone_set("Asia/Taipei");


$acc = $_POST['acc'];
$pw = $_POST['pw'];
$name = $_POST['name'];
$email = $_POST['email'];
$tel = $_POST['tel'];
$bir = $_POST['bir'];

$sql = "insert into `student`(`acc`,`pw`,`name`,`email`,`tel`,`creat_time`,`update_time`,`birthday`) values ('$acc','$pw','$name','$email','$tel','".date("Y-m-d H:i:s")."','".date("Y-m-d H:i:s")."','$bir')";

$res = $pdo -> exec($sql);

if ($res >= 1){
    echo $res;
    echo "新增成功";
}else{
    echo $res;
    echo "新增失敗";
}



?>