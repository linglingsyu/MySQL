<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>使用者列表</title>
    <style>

    table{
        text-align: center;
    }
    td{
        padding: 5px;
    }
    </style>
</head>
<body>
    <h2>使用者列表</h2>
    <div class="wrap">
        <table>
            <tr>
        <td>ID</td>
        <td>帳號</td>
        <td>密碼</td>
        <td>姓名</td>
        <td>電話</td>
        <td>生日</td>
        <td>信箱</td>
        <td>註冊日期</td>
        <td>更新日期</td>
        <td>操作</td>
        </tr>
    <?php 
    
    $dsn = "mysql:host=localhost;charset=utf8;dbname=school";
    $pdo = new PDO($dsn,"root","");
    $sql = "select * from `student`";
    $rows = $pdo->query($sql)->fetchAll(PDO::FETCH_ASSOC);
    // for ($i = 0; $i < count($rows); $i++){
    //     //print_r($row[$i])
    //     for($j = 0; $j <td count($rows[$i]); $j++){
    //         echo $rows[$i][$j];
    //         echo "<br>";
    //     }
    //     echo "<br>";
    // }


    foreach ($rows as $data){
        echo "<tr>";
        foreach($data as $key => $value){
            echo "<td>" . $value ."</td>";
        }
        echo "<td>"."<a href='#'>編輯</a>"."</td>";
        echo "<td>"."<a href='#'>刪除</a>"."</td>";
        echo "</tr>";
    }

    

    
    ?>


    </table>
</body>
</html>