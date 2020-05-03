<?php 
//新增資料
$dsn = "mysql:host=localhost;charset=utf8;dbname=school";
$pdo = new PDO($dsn,"root",""); //設置資料庫的帳號密碼
date_default_timezone_set("Asia/Taipei");
$sql = "insert into student(`id`,`acc`,`pw`,`name`,`email`,`tel`,`creat_time`,`update_time`,`birthday`) 
                            values(null,
                                    'zzxcv741',
                                    'a1234',
                                    '許瑞玲',
                                    'zzxcv741@hotmail.com',
                                    '0955335369',
                                    '".date("Y-m-d H:i:s")."',
                                    '".date("Y-m-d H:i:s")."',
                                    '1988-11-26')";

echo $sql;
echo "<br>";
// $pdo->query($sql); 會回傳資料
$pdo -> exec($sql);  // 不回傳資料，但回傳成功或失敗(0或1)
echo "新增成功"; 



?>