<?php 


   // setcookie("id",$_COOKIE['id'],time()-60*3);
   // setcookie("status","true",time()-60*3);

   session_start();
   unset($_SESSION['id']);
   unset($_SESSION['status']);
    //重新對伺服器發一次requst,並非在客戶端進行重整
    header("location:login_new.php");


?>