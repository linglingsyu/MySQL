<?php

//1.取得post過來的資料 _POST[name欄位的值]
$id = $_POST['id'];
$acc = $_POST['acc'];
$pw = $_POST['pw'];
$name = $_POST['name'];
$email = $_POST['email'];
$tel = $_POST['tel'];
$birthday = $_POST['birthday'];
//2.建立連線
$dsn = "mysql:host=localhost;charset=utf8;dbname=school";
$pdo = new PDO($dsn,"root","");
date_default_timezone_set("Asia/Taipei");
//3.建立更新的SQL語法
$sql = "update `student` set `acc`='$acc',`pw`='$pw',`name`='$name',`email`='$email',`tel`='$tel',`update_time`='".date("Y-m-d H:i:s")."',`birthday`='$birthday' where `id` ='$id'" ;
//4.執行更新,成功跳回會員列表
$res = $pdo->exec($sql);
if ($res >= 1){
    header("location:list_user.php");
} else {
    echo "更新失敗";
    echo $sql;
}


?>