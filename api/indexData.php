<?php
   header("Content-type:text/html;charset=utf-8");
   // 连接数据库
   require_once("./conn.php");
   // 构造查询所有数据语句
   $sql="select * from borrowinfo";
   // 执行sql查询
   $result=mysqli_query($link,$sql);
   // 获取总的记录数
   $total=mysqli_num_rows($result);
   // 接收分页参数
   $pageIndex=$_GET["pageIndex"];
   $pageSize=$_GET["pageSize"];
   // 构造分页的sql语句
   // limit n,m;	//跳过n条数据，限制输出m条数据
   $skipNum=$pageSize*$pageIndex; //跳过数据
   $sql.=" limit $skipNum,$pageSize";
   $result=mysqli_query($link,$sql);

   // 遍历获取结果集
   $indexData=[]; //当前页显示的数据
   // mysqli_fetch_assoc 每循环一次，指针下移一条，获取到一条数据
   while ($rs=mysqli_fetch_assoc($result)) {
      // array_push ( 源数组 , 添加的元素1 [, 添加的元素2 ]... ),把每次循环的数据添加到源数组
      array_push($indexData,$rs);
   }
   // 把结果集转换为json发给前端
   // 按照分页插件的要求封装结果
   $result=[
     // 总数据数
    "total"=> $total,
    "list"=> $indexData
   ];
   echo json_encode($result);
?>
