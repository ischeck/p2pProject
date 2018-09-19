<?php
   header("Content-type:text/html;charset=utf-8");
   // 连接数据库
   require_once("./conn.php");

   // 构造查询所有数据语句
   $sql="select * from borrowinfo";

   //3. 执行sql查询
   $result=mysqli_query($link,$sql); //有结果返回对象，没有结果false

   //获取总的记录数
   $total=mysqli_num_rows($result);

   //接收分页参数
   $pageIndex=$_GET["pageIndex"];
   $pageSize=$_GET["pageSize"];

   //构造分页的sql语句
   //limit n,m;	//跳过n条数据，限制输出m条数据
   $skipNum=$pageSize*$pageIndex; //跳过数据
   $sql.=" limit $skipNum,$pageSize";
   $result=mysqli_query($link,$sql);

   //4. 遍历获取结果集
   //mysqli_fetch_assoc 有结果返回行记录的关联数组，没有结果null
   $borrowData=[]; //当前页显示的数据
   //每循环一次，指针下移一条，获取到一条数据
   while ($rs=mysqli_fetch_assoc($result)) {
      //语法： array_push ( 源数组 , 添加的元素1 [, 添加的元素2 ]... )
      array_push($borrowData,$rs);//把每一次执行的行的数据添加的数据数组里面
   }

   //5. 把结果集转换为json发给前端
   //按照分页插件的要求封装结果
   $result=[
    "total"=> $total,
    "list"=> $borrowData
   ];
   echo json_encode($result);
?>
