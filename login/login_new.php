<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+TC&display=swap" rel="stylesheet">
    <style>
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
            margin-bottom: 10px;
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
        .status span{
            color:red;
            font-size: 12px;
        }

    </style>
</head>
<body>

    <div class="login">
        <form action="checklogin.php" method="POST" class="form">
            <h2>會員登入</h2>
            <div class="status">
                <?php 
                    if(isset($_GET['status'])){
                        switch($_GET['status']){
                            case "0":{
                                echo "<span>帳號密碼錯誤，請重新輸入</span>";
                            break;
                            }
                            case "1":{
                                echo "get=".$_GET['id'];
                                header("location:list_user.php?id=".$_GET['id']);
                            break;
                            }
                        }
                    }      
                ?>
            </div>
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