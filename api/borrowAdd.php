<?php
   //1. 接收前端传入的值
   $borrowType=$_POST["borrowType"];//s
   $borrowAmount=$_POST["borrowAmount"];
   $currentRate=$_POST["currentRate"];
   $monthes2Return=$_POST["monthes2Return"];
   $repayment=$_POST["repayment"];//s
   $minAmount=$_POST["minAmount"];
   $maxAmount=$_POST["maxAmount"];
   $rewardAmount=$_POST["rewardAmount"];
   $disableDays=$_POST["disableDays"];
   $borrowTitle=$_POST["borrowTitle"];//s
   $description=$_POST["description"];//s
   session_start();
   $userid=$_SESSION["userid"]; //笨办法，前端通过ajax取获取，然后赋给隐藏域，再通过表单post到后端接收

   //2. 构造sql语句【仔细】
   $sql="insert into borrowinfo(borrowType,borrowAmount,currentRate,monthes2Return,repayment,minAmount,maxAmount,rewardAmount,disableDays,borrowTitle,description,userid)values('$borrowType',$borrowAmount,$currentRate,$monthes2Return,'$repayment',$minAmount,$maxAmount,$rewardAmount,$disableDays,'$borrowTitle','$description',$userid)";

   //3. 连接数据库
   require_once("./conn.php");

   //4. 执行sql语句
   $result=mysqli_query($link,$sql);

   //5. 根据执行的结果，封装json数据返回前端
   if($result){
       //成功
       $rsArray=["isSuccess"=>true,"msg"=>"借款信息提交成功!"];
       echo json_encode($rsArray);
   }
   else{
       //失败
       $rsArray=["isSuccess"=>false,"msg"=>"借款信息提交失败!"];
       echo json_encode($rsArray);
   }

   //6. 关闭数据库连接
   require_once("./freeClose.php");
?>
