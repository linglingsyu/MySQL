<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>會員資料維護</title>
    <style>
        h1{
            text-align: center;
        }
        table,tr,td{
            text-align: center;
            margin:  0 auto;
        }

        tr,td{
            border:1px solid #000;
            border-collapse: collapse;
        }


    </style>
</head>

<body>
    <h1>編輯會員</h1>
    <?php
    $dsn = "mysql:host=localhost;charset=utf8;dbname=school";
    $pdo = new PDO($dsn, "root", "");
    date_default_timezone_set("Asia/Taipei");

    $id = $_GET["user"];
    $sql = "select * from `student` where `id`='$id'";
    $user = $pdo->query($sql)->fetch();

    ?>


    <table>
        <form action="update_user.php" method="post">
            <input type="hidden" name="id" value="<?=$user['id'];?>">
            <tr>
                <td>帳號：</td>
                <td><input type="text" name="acc" value="<?=$user['acc'];?>"></td>
            </tr>
            <tr>
                <td>密碼：</td>
                <td><input type="password" name="pw" value="<?=$user['pw'];?>"></td>
            </tr>
            <tr>
                <td>姓名：</td>
                <td><input type="text" name="name" value="<?=$user['name'];?>"></td>
            </tr>
            <tr>
                <td>E-mail：</td>
                <td><input type="email" name="email" value="<?=$user['email'];?>"></td>
            </tr>
            <tr>
                <td>電話：</td>
                <td><input type="text" name="tel" value="<?=$user['tel'];?>"></td>
            </tr>
            <tr>
                <td>生日：</td>
                <td><input type="date" name="birthday" value="<?=$user['birthday'];?>"></td>
            </tr>
            <tr>
                <td><input type="submit" value="送出">
                    <input type="reset" value="重寫"></td>
            </tr>
        </form>
    </table>
</body>

</html>