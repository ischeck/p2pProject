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
    <!-- 引入jquery -->
    <script src="./lib/jquery/jquery.min.js"></script>
    <!-- 验证用户身份是否合法 -->
    <script src="./dist/js/userStateCheck.min.js"></script>
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
              <span class="panel-title">借款项目</span>
            </div>
            <div class="panel-body">
              <table class="table table-hover">
                <thead>
                    <tr>
                    <th class="table_title text-center">标题</th>
                    <th class="table_time text-center">时间</th>
                    <th class="table_money text-center">借款金额(元)</th>
                    <th class="table_deadline text-center">期限</th>
                    <th class="table_rate text-center">利率</th>
                    <th class="table_state text-center">状态</th>
                    </tr>
                </thead>
                <tbody id="borrowData">

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
    <!-- 引入jqueryTemplate模板引擎的库文件 -->
    <script src="./lib/jqueryTemplate/jquery.tmpl.js"></script>
    <!-- 引入bootstrap核心库 -->
    <script src="./lib/bootstrap/js/bootstrap.min.js"></script>
    <!-- 引入自定义的效果 -->
    <script src="./dist/js/p2p.min.js"></script>
    <!-- 组件库 -->
    <script src="./dist/js/module.min.js"></script>
    <!-- 定义模板： 用户渲染数据 -->
    <script id="borrowTmpl" type="text/html">
        <tr>
            <td class="table_title text-center">
              <a href="borrow_info.php?menuid=4">${borrowTitle}</a>
              <span class="label label-primary">信</span>
            </td>
            <td class="table_time text-center">${submitDatetime}</td>
            <td class="table_money text-center">${borrowAmount}</td>
            <td class="table_deadline text-center">${monthes2Return}</td>
            <td class="table_rate text-center">${currentRate}%</td>
            <td class="table_state text-center">
                <label class="text-muted">待发布</label>
            </td>
        </tr>
    </script>
    <!-- 借款信息的逻辑 -->
    <script src="./dist/js/borrow.min.js"></script>
</body>
</html>
