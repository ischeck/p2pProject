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
    <link rel="stylesheet" href="./dist/css/minCss/borrow.min.css">
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
    <!-- 贷款分类 -->
    <div class="container BorrowMoney_box">
      <div class="row">
        <div class="col-sm-4">
          <div class="panel panel-default">
            <div class="panel-heading xinyongdai">
              <span class="panel-title">信用贷</span>
            </div>
            <div class="panel-body">
              <p class="money">可借金额 <i>¥ 2,000.00</i></p>
    					<a href="#" class="text-primary">申请条件</a>
    					<p class="help-block">仅限成都地区</p>
    					<ul>
    						<li>填写基本资料</li>
    						<li>身份认证</li>
    						<li>视频认证</li>
    					</ul>
    					<a href="borrow_apply.php?menuid=4?borrowtypeid=t1" class="el-borrow-apply">立刻申请</a>
            </div>
          </div>
        </div>
        <div class="col-sm-4">
          <div class="panel panel-default">
            <div class="panel-heading cheyidai">
              <span class="panel-title">车易贷</span>
            </div>
            <div class="panel-body">
              <p class="money">可借金额 <i>¥ 2,000.00</i></p>
    					<a href="#" class="text-primary">申请条件</a>
    					<p class="help-block">仅限成都地区</p>
    					<ul>
    						<li>填写基本资料</li>
    						<li>身份认证</li>
    						<li>视频认证</li>
    					</ul>
    					<a href="borrow_apply.php?menuid=4?borrowtypeid=t2" class="el-borrow-apply">立刻申请</a>
            </div>
          </div>
        </div>
        <div class="col-sm-4">
          <div class="panel panel-default">
            <div class="panel-heading fangyidai">
              <span class="panel-title">房易贷</span>
            </div>
            <div class="panel-body">
              <p class="money">可借金额 <i>¥ 12,000.00</i></p>
    					<a href="#" class="text-primary">申请条件</a>
    					<p class="help-block">仅限成都地区</p>
    					<ul>
    						<li>填写基本资料</li>
    						<li>身份认证</li>
    						<li>视频认证</li>
    					</ul>
    					<a href="borrow_apply.php?menuid=4?borrowtypeid=t3" class="el-borrow-apply">立刻申请</a>
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
    <!-- 组件库 -->
    <script src="./dist/js/module.min.js"></script>
</body>
</html>
