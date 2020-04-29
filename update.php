<?php 

$dsn = "mysql:host=localhost;charset=utf8;dbname=school";
$pdo = new PDO($dsn,"root","");
date_default_timezone_set("Asia/Taipei");

$sql = "update `student` set `name`='123' ,`birthday` =  '2017-04-08', `tel` = '0955335399' ,`update_time` = '".date("Y-m-d H:i:s")."' where `id`='7'";
$res = $pdo->exec($sql);

echo $sql;

if ($res >= 1 ) {
    echo $res;
    echo "更新成功";
}else{
    echo $res;
    echo "更新失敗";
}




?>