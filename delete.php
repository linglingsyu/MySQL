<?php 

$dsn = "mysql:host=localhost;charset=utf8;dbname=school";
$pdo = new PDO($dsn,"root","");
date_default_timezone_set("Asia/Taipei");

$sql = "delete from `student` WHERE `id`= 8";

$res = $pdo->exec($sql);

if ($res >= 1) {
    echo $res;
    echo "更新成功";
}else{
    echo $res;
    echo "更新失敗";
}

?>