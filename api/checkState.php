<?php
  // 一定要开启，否则无法取到值
   session_start();
   if(isset($_SESSION["username"])){
        $username=$_SESSION["username"];
        $result=["isSuccess"=>true,"msg"=>"登录成功!","username"=>$username];
        echo json_encode($result);
   }
   else{
        $result=["isSuccess"=>false,"msg"=>"你没有登录,请登录后再使用!"];
        echo json_encode($result);
   }
?>
