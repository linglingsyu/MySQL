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
    </style>
</head>
<body>
    
<?php 
//取得資料
$dsn = "mysql:host=localhost;charset=utf8;dbname=school";
$pdo = new PDO($dsn,"root","");
date_default_timezone_set("Asia/Taipei");

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


</body>
</html>