<?php

include("dbconnect.php");

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
        echo "<script> {window.alert('登入成功');location.href='../20200429login/list_user.php'} </script>";
    } else{
        echo "<script> {window.alert('帳號密碼錯誤，請重新輸入');location.href='login_new.html'} </script>";
    }
}
?>