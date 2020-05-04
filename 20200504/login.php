<?php 

$dsn = "mysql:host=localhost;charset=utf8;dbname=school";
$pdo = new PDO($dsn,"root","");
date_default_timezone_set("Asia/Taipei");

if(!empty($_POST['acc'])){
    // echo "有送出資料";
    $acc = $_POST["acc"];
    $pw = $_POST["pw"];
    // $sql = "select * from `student` where `acc`='$acc' && `pw` = '$pw'";
    /*count(*)回傳有幾筆帳密一樣的資料，如果count不為0代表資料庫有資料,有資料=帳密符合 */
    $sql = "select count(*) from `student` where `acc`='$acc' && `pw` = '$pw'";
    /*使用 fetchColumn() 只會返回一個指定的欄位值(由0開始計算位置) */
    $user = $pdo->query($sql)->fetchColumn();

    /* 這邊不需要多做驗證判斷,因為去資料庫搜尋的時候已經驗證過帳密,$user才會有資料
       如果沒資料就代表帳密錯誤,而且如果登入失敗時,$user這邊資料庫回傳的會是空值,
       if判斷式就會報錯:Notice: Trying to access array offset on value of type bool 
       使用下面方式就不會有這個報錯 */
    // if($acc == $user['acc'] && $pw == $user['pw']){
    //     echo "登入成功";
    // }else{
    //     echo "帳號密碼錯誤，請重新輸入";
    // }
    
    /* $user是空的=帳密錯誤,有資料=帳密正確 */
    if (!empty($user)){
        echo "登入成功！";
    }else{
        echo "帳號密碼錯誤，請重新輸入";
        echo $sql;
    }


}else{
    // echo "請輸入帳號密碼";
}


?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+TC&display=swap" rel="stylesheet">
    <!-- <style>
        *{
            margin: 0;
            padding: 0;
            list-style: none;
        }
        html,body{
            height: 100%;
        }
        body{
            background: url(http://www.photoeyes.com.tw/wp-content/uploads/2015/09/night-sky-stars.jpg) no-repeat center center / cover;
            display: flex;
            justify-content: center;
            align-items: center;
        }
        .form{
            width: 400px;
            color: rgb(88, 216, 255);
            font-family: 'Noto Sans TC', sans-serif;
        }
        .form h2 {
            margin-bottom: 20px;
            border-bottom: 1px solid #fff;
            padding-bottom: 5px;
        }
        .form .group{
            margin-bottom: 20px;
        }
        .form label{
            line-height: 2.5;
        }
        .form input[type="text"],.form input[type="password"]{
            width: 100%;
            border: 1px solid rgb(88, 216, 255);
            line-height: 2;
            border-radius: 5px;
            padding-left:15px;
        }

        .form input[type="text"]:focus,.form input[type="password"]:focus{
            outline: none;
        }

        .form .btn-group{
            font-size: 0;
            margin-top: 40px;
        }

        .form input[type="submit"],.form input[type="reset"]{
            font-family: 'Noto Sans TC', sans-serif;
            font-size: 16px;
            border-radius: 5px;
            border: none;
            background-color: rgba(0, 119, 255);
            width: 190px;
            padding: 10px 0;
            color: rgb(255, 255, 255);
        }

        .form input[type="submit"]:hover,.form input[type="reset"]:hover{
            opacity: 0.8;
        }

        .form .btn + input{
            margin-left: 20px;
        }


        .login{
            display: flex;
            justify-content: center;
            align-items: center;
            width: 500px;
            height: 400px;
            background-color: rgba(255, 255, 255,0.2);
            border-radius: 10px;
            border: 3px solid rgb(181, 222, 230);
            box-shadow: 0 0 60px rgb(177, 175, 209);
            backdrop-filter: blur(2px);

        }
        .forget{
            text-align: center;
            margin-top: 10px;

        }
        .forget a{
            font-size: 12px;
            color: rgb(194, 190, 190);
            text-decoration: none;
        }
        .forget a:hover{
            color: rgb(0, 225, 255);
        }


    </style> -->
</head>
<body>
    
    <div class="login">
        <form action="login.php" method="POST" class="form">
            <h2>會員登入</h2>
            <div class="group">
                <label for="acc">帳號</label>
                <input type="text" name="acc" id="acc">
            </div>
            <div class="group">
                <label for="pw">密碼</label>
                <input type="password" name="pw" id="pw">
            </div>
            <div class="btn-group">
                <input class="btn" type="reset" value="取消">
                <input class="btn" type="submit" value="登入">
            </div>
            <div class="forget">
                <a href="#">立即註冊</a>
                <span>|</span>
                <a href="#">忘記密碼?</a>
            </div>
        </form>



    </div>

</body>
</html>