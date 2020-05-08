<?php 

    //刪除cookie只要設現在時間減掉一秒也可以
    setcookie("id",$_COOKIE['id'],time()-60*3);
    setcookie("status","true",time()-60*3);
    /*在伺服器端執行了刪除cookie後,client端還是會繼續執行下面的html(有帶cookie值)
    所以在頁面上雖然真的有執行"登出"的動作,但是要重整後才會生效(但此時重整後的網址是login_new.php?logout=1會報錯)
    所以再導回真的登入頁面,就完成登出了
    */

    //重新對伺服器發一次requst,並非在客戶端進行重整
    header("location:login_new.php");


?>