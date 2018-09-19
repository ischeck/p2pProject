<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>蓝润Eloan_用户登录</title>
    <!-- 引入bootstrap核心库 -->
    <link rel="stylesheet" href="./lib/bootstrap/css/bootstrap.min.css">
    <!-- 引入bootstrapValidator的样式 -->
    <link rel="stylesheet" href="./lib/bootstrapValidator/css/bootstrapValidator.min.css">
    <!-- 引入编译和压缩后的css文件 -->
    <link rel="stylesheet" href="./dist/css/minCss/login.min.css">
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
    ?>

    <!-- 主导航 -->
    <nav class="navbar navbar-default mainNav-box">
      <div class="container">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header clearfix">
          <a class="navbar-brand" href="./index.php">
            <img src="./images/logo.png" alt="网站logo"/>
          </a>
          <span class="pull-left">用户登录</span>
        </div>
      </div><!-- /.container-fluid -->
    </nav>

    <!-- 注册表单 -->
    <div class="container register_box">
      <div class="panel panel-default">
        <!-- 标题内容-->
        <div class="panel-heading clearfix">
          <span class="panel-title">用户登录</span>
        </div>
        <!-- 主要内容 -->
        <div class="panel-body">
          <form id="logForm" class="form-horizontal">
          <div class="form-group">
              <label for="inputEmail3" class="col-sm-3 control-label">用户名：</label>
              <div class="col-sm-9">
              <input type="text" class="form-control" name="username" placeholder="请输入用户名">
              </div>
          </div>
          <div class="form-group">
              <label for="inputPassword3" class="col-sm-3 control-label">密码：</label>
              <div class="col-sm-9">
              <input type="password" class="form-control" name="password" placeholder="请输入密码"  autocomplete='tel'>
              </div>
          </div>
          <div class="form-group">
              <div class="col-sm-offset-3 col-sm-9">
              <button type="submit" class="btn btn-primary">立即登录</button>
              <a href="./register.php" class="login_btn">没有账号,立即注册</a>
              </div>
          </div>
          </form>
        </div>
      </div>
    </div>
    <!-- 引入页脚 -->
    <?php
      require_once("./template/footer.php");
    ?>

    <!-- 模态框 -->
    <div class="modal fade" id="msgShowModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            <h4 class="modal-title" id="msgShowTitle">提示</h4>
          </div>
          <div class="modal-body clearfix" id="msgShowContent">
            <div class="pull-left">
              <span class="glyphicon " aria-hidden="true"></span>
            </div>
            <div class="pull-left">
              <span class="modal-text"></span>
            </div>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-default" data-dismiss="modal">立即进入</button>
          </div>
        </div>
      </div>
    </div>

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
