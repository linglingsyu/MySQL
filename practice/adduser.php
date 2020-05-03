

<?php 

$dsn = "mysql:host=localhost;charset=utf8;dbname=school";
$pdo =  new PDO($dsn,"root","");
date_default_timezone_set("Asia/Taipei");

$acc = $_POST["acc"];
$pw = $_POST["pw"];
$name = $_POST["name"];
$tel = $_POST["tel"];
$birthday = $_POST["birthday"];
$email = $_POST["email"];

$sql = "INSERT INTO `student`(`id`,`acc`,`pw`,`name`,`tel`,`birthday`,`email`,`create_time`,`update_time`) values(null,'$acc','$pw','$name','$tel','$birthday','$email','".date("Y-m-d H:i:s")."','".date("Y-m-d H:i:s")."')";


$res = $pdo-> exec($sql);

if ($res > 0){
    echo "您已成功註冊";
}else{
    echo "註冊失敗";
    echo "<br>";
    echo $sql;
}

?>