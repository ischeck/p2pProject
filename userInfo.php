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
  <link rel="stylesheet" href="./dist/css/minCss/userinfo.min.css">
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
            <span class="panel-title">个人资料</span>
          </div>
          <div class="panel-body">
            <form id="userInfoForm" class="form-horizontal" action="/userInfo_save.html" method="post">
              <div class="form-group">
                <label class="col-sm-4 control-label">用户名</label>
                <div class="col-sm-6">
                  <p class="form-control-static">xiaoq</p>
                </div>
              </div>
              <div class="form-group">
                <label class="col-sm-4 control-label">真实姓名</label>
                <div class="col-sm-6">
                  <p class="form-control-static">小强</p>
                </div>
              </div>
              <div class="form-group">
                <label class="col-sm-4 control-label">证件号码</label>
                <div class="col-sm-6">
                  <p class="form-control-static">512************4646</p>
                </div>
              </div>
              <div class="form-group">
                <label class="col-sm-4 control-label">手机号码</label>
                <div class="col-sm-4">
                  <input type="text" name="phone" class="form-control" value="">
                </div>
              </div>
              <div class="form-group">
                <label class="col-sm-4 control-label">联系电话</label>
                <div class="col-sm-4">
                  <input type="text" name="tel" class="form-control" value="">
                </div>
              </div>
              <div class="form-group">
                <label class="col-sm-4 control-label">个人学历</label>
                <div class="col-sm-4">
                  <select class="form-control" name="edu">
                      <option value="1">初中</option>
                      <option value="2">中专/高中</option>
                      <option value="3">专科</option>
                      <option value="4">本科</option>
                      <option value="5">硕士研究生</option>
                      <option value="6">博士研究生</option>
                  </select>
                </div>
              </div>
              <div class="form-group">
                <label class="col-sm-4 control-label">个人收入</label>
                <div class="col-sm-4">
                  <select class="form-control" name="salaryLevel">
                      <option value="1">1000元以下</option>
                      <option value="2">1000元-1999元</option>
                      <option value="3">2000元-2999元</option>
                      <option value="4">3000-4999</option>
                      <option value="5">5000-8999</option>
                      <option value="6">10000以上</option>
                  </select>
                </div>
              </div>
              <div class="form-group">
                <label class="col-sm-4 control-label">联系地址</label>
                <div class="col-sm-6">
                  <input type="text" name="address" class="form-control" value="">
                </div>
              </div>
              <div class="form-group btn_box">
                <label class="col-sm-4 control-label"></label>
                <div class="col-sm-3 input-group btn_center">
                <button id="submitBtn" type="submit" class="btn btn-primary " data-loading-text="数据保存中。。。">保存信息</button>
                </div>
              </div>
            </form>
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
