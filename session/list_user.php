<?php 

//任何頁面要使用session都要宣告start
session_start();

if(!isset($_SESSION['id'])){
        //不是經由登入而來到此頁面的
        header("location:login_new.php");
        exit;
}

?> 


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>會員列表</title>
    <style>
        h1{
            text-align: center;
        }
        table,tr,td{
            text-align: center;
            border:1px solid #000;
            margin:  0 auto;
        }
        tr,td{
            border-collapse: collapse;
        }
        .back{
            margin: 10px;
            text-align:center;
        }
        .back a{
            display: inline-block;
            width:10vw;
            height:50px;
            color:#000000;
            text-decoration: none;
        }
    </style>
</head>
<body>
    
<?php 
//取得資料
include "dbconnect.php";
$sql = "select * from `student` where `id` = '".$_SESSION['id']."'";
$user = $pdo ->query($sql)->fetch();
echo "<h1>歡迎您回來！" . $user['name'] . "</h1>";


$sql = "select * from `student`";
$rows = $pdo->query($sql)->fetchAll();
?>

<h1>會員列表</h1>
<table>
    <tr>
        <td>ID</td>
        <td>帳號</td>
        <td>密碼</td>
        <td>姓名</td>
        <td>Email</td>
        <td>手機</td>
        <td>生日</td>
        <td>註冊日期</td>
        <td>操作</td>
    </tr>
<?php
foreach($rows as $row){
echo "<tr>"; 
    echo "<td>". $row['id'] ."</td>";
    echo "<td>". $row['acc'] ."</td>";
    echo "<td>". $row['pw'] ."</td>";
    echo "<td>". $row['name'] ."</td>";
    echo "<td>". $row['email'] ."</td>";
    echo "<td>". $row['tel'] ."</td>";
    echo "<td>". $row['birthday'] ."</td>";
    echo "<td>". $row['creat_time'] ."</td>";
    echo "<td>";
    echo "<button><a href='edit_user.php?user=".$row['id']."'>編輯</a></button>";
    echo "<button><a href='delete.php?user=".$row['id']."'>刪除</a></button>";
    echo "</td>";
    echo "</tr>";
}
?>
</table>
<div class="back">
    <a href="login_new.php">回登入頁面</a>
</div>
</body>
</html>