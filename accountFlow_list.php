<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>蓝润Eloan_</title>
    <!-- 引入bootstrap核心库 -->
    <link rel="stylesheet" href="./lib/bootstrap/css/bootstrap.min.css">
    <!-- 引入bootstrapValidator的样式 -->
    <link rel="stylesheet" href="./lib/bootstrapValidator/css/bootstrapValidator.min.css">
    <!-- 引入编译和压缩后的css文件 -->
    <link rel="stylesheet" href="./dist/css/minCss/bid_request_list.min.css">
    <!-- 兼容IE9以下的浏览器 -->
    <!--[if lt IE 9]>
      <script src="https://cdn.bootcss.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://cdn.bootcss.com/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body>
    <!-- 引入顶部导航 -->
    <?php
    require_once("./template/topNav.php");
    require_once("./template/mainNav.php");
    ?>

    <!-- 个人信息 -->
    <div class="container main_box">
      <div class="row">
        <div class="col-md-3">
          <!-- 引入左边个人信息菜单 -->
          <?php
            require_once("./template/accordionmenu.php");
          ?>
        </div>

        <div class="col-md-9">
          <div class="panel panel-default">
            <div class="panel-heading">
              <span class="panel-title">账户流水</span>
            </div>
            <div class="panel-body">
              <table class="table table-hover">
                <thead>
                <tr>
                    <th>发生额(¥)</th>
                    <th>账户余额(¥)</th>
                    <th>可用余额</th>
                    <th>冻结金额</th>
                    <th>发生时间</th>
                    <th>类型</th>
                </tr>
                </thead>
                  <tbody>
                    <c:forEach var="data" items="${pageResult.datas}">
                      <tr>
                        <td>8.53</td>
                        <td>2,451.43</td>
                        <td>881.43</td>
                        <td>1,570.00</td>
                        <td>2017-05-20 16:02:34</td>
                        <td>收款</td>
                      </tr>
                      <tr>
          							<td class="text-info">-0.05</td>
          							<td>2,442.90</td>
          							<td>872.90</td>
          							<td>1,570.00</td>
          							<td>2017-05-31 06:02:21</td>
          							<td>利息管理费</td>
          						</tr>
                    </c:forEach>
                  </tbody>
                </table>
            </div>
          </div>
        </div>

      </div>
    </div>
    <!-- 引入页脚 -->
    <?php
      require_once("./template/footer.php");
    ?>
    <!-- 引入jquery -->
    <script src="./lib/jquery/jquery.min.js"></script>
    <!-- 引入bootstrap核心库 -->
    <script src="./lib/bootstrap/js/bootstrap.min.js"></script>
    <!-- 引入bootstrapValidator的JS库 -->
    <script src="./lib/bootstrapValidator/js/bootstrapValidator.min.js"></script>
    <!-- 引入自定义的效果 -->
    <script src="./dist/js/p2p.min.js"></script>
    <!-- 表单验证的js效果 -->
    <script src="./dist/js/formcheck.min.js"></script>
</body>
</html>
