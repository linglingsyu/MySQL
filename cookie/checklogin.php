<?php

include("dbconnect.php");

if(!empty($_POST['acc'])){
    $acc = $_POST["acc"];
    $pw = $_POST["pw"]; 
    $sql = "select * from `student` where `acc`='$acc' && `pw` = '$pw'";
    $user = $pdo->query($sql)->fetch();
    if (!empty($user)){
        // echo "登入成功";
        setcookie("id",$user['id'],time()+60*3);
        setcookie("status","true",time()+60*3);
        header("location:list_user.php");
    } else{
        // echo "登入失敗";
        setcookie("status","false",time()+10);
        header("location:login_new.php");
    } 
}else{
    header("location:login_new.php");
}

?>