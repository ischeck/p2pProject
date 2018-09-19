<?php
   header("Content-type:text/html;charset=utf-8");
   //1. 连接数据库
   require_once("./conn.php");

   //2. 构造查询的sql语句，根据用户的id来查询
   session_start();
   $userid=$_SESSION["userid"];
   $sql="select * from borrowinfo";
   //3. 执行sql查询
   $result=mysqli_query($link,$sql); //有结果返回对象，没有结果false

   //4. 遍历获取结果集
   //mysqli_fetch_assoc 有结果返回行记录的关联数组，没有结果null
   $borrowData=[];
   //每循环一次，指针下移一条，获取到一条数据
   while ($rs=mysqli_fetch_assoc($result)) {
      //语法： array_push ( 源数组 , 添加的元素1 [, 添加的元素2 ]... )
      array_push($borrowData,$rs);//把每一次执行的行的数据添加的数据数组里面
   }

   //5. 把结果集转换为json发给前端
   echo json_encode($borrowData);
?>
