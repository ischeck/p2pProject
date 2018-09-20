<?php
   header("Content-type:text/html;charset=utf-8");
   // 连接数据库
   require_once("./conn.php");
   // 构造sql语句查询所有借款信息
   session_start();
   $userid=$_SESSION["userid"];
   $sql="select * from borrowinfo";
   // 执行sql查询
   $result=mysqli_query($link,$sql); //有结果返回对象，没有结果false
   // 遍历获取结果集
   $borrowData=[];
   // 每循环一次，指针下移一条，获取到一条数据
   while ($rs=mysqli_fetch_assoc($result)) {
   // 把每一次执行的行的数据添加的数据数组里面
      array_push($borrowData,$rs);
   }
   // 把结果集转换为json发给前端
   echo json_encode($borrowData);
?>
