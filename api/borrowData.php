<?php
   header("Content-type:text/html;charset=utf-8");
   //1. 连接数据库
   require_once("./conn.php");

   //2. 构造查询的sql语句，根据用户的id来查询
   session_start();
   $userid=$_SESSION["userid"];
   $sql="select * from borrowinfo where userid=$userid";

   //3. 执行sql查询
   $result=mysqli_query($link,$sql); //有结果返回对象，没有结果false

   //数据
   $data=[
    ["value"=> 0,"name"=>'房易贷'],
    ["value"=> 0,"name"=> '车易贷'],
    ["value"=> 0,"name"=> '信用贷']
   ];

   //4. 遍历获取结果集
   //mysqli_fetch_assoc 有结果返回行记录的关联数组，没有结果null
   while ($rs=mysqli_fetch_assoc($result)) {
      //根据借款的类型，修改数据中的value值
      /*
      <option value="t1">信用贷</option>
	  <option value="t2">车易贷</option>
	  <option value="t3">房易贷</option>
      */
      if($rs["borrowType"]=="信用贷"){
         $data[2]["value"]+=$rs["borrowAmount"];
      }
      else if($rs["borrowType"]=="车易贷"){
        $data[1]["value"]+=$rs["borrowAmount"];
      }
      else if($rs["borrowType"]=="房易贷"){
        $data[0]["value"]+=$rs["borrowAmount"];
      }
   }



   //返回的结果
   $result=[
       "title"=>['房易贷','车易贷','信用贷'],
       "data"=>$data
   ];

   echo json_encode($result);
?>
