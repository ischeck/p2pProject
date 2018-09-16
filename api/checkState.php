<?php
   //如果不存在就会报错 Notice: Undefined variable: _SESSION
   session_start(); //一定要开启，否则无法取到值
   if(isset($_SESSION["username"])){
        $username=$_SESSION["username"];
        $result=["isSuccess"=>true,"msg"=>"登录成功!","username"=>$username];
        echo json_encode($result);
   }
   else{
        $result=["isSuccess"=>false,"msg"=>"登录失败!"];
        echo json_encode($result);
   }  
?>