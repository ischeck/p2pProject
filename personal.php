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
    <link rel="stylesheet" href="./dist/css/minCss/personal.min.css">
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
    <div class="container personal_box">
      <div class="row">
        <div class="col-md-3">
          <!-- 引入左边个人信息菜单 -->
          <?php
            require_once("./template/accordionmenu.php");
          ?>
        </div>

        <div class="col-md-9">
          <div class="panel panel-default">
            <div class="panel-body">
              <!-- 用户信息 -->
              <div class="userinfo_box clearfix">
                <!-- 头像 -->
                <div class="pull-left hpt_box">
                  <img src="images/head_icon.jpg" width="72px" alt="">
                </div>
                <!-- 内容 -->
                <div class="pull-left user_box">
                  <p>昵 称：源代码教育</p>
                  <p>用户名：小强</p>
                  <p>最后登录时间：2016-10-25 15:30:10</p>
                </div>
              </div>

              <!-- 额度信息 -->
              <div class="money_box">
                <div class="row">
								<div class="col-sm-4">
									总金额：<span class="text-primary">10000元</span>
								</div>
								<div class="col-sm-4">
									可用金额：<span class="text-primary">8000元</span>
								</div>
								<div class="col-sm-4">
									冻结金额：<span class="text-primary">2000元</span>
								</div>
							</div>
              </div>

              <!-- 充值提现按钮 -->
              <div class="CashValue_box">
                <div class="row">
                  <div class="col-xs-6 text-right"><a class="btn btn-primary btn-lg" href="recharge.html">账户充值</a></div>
                  <div class="col-xs-6 text-left"><a class="btn btn-danger btn-lg" href="moneyWithdraw_apply.html">账户提现</a></div>
                </div>
              </div>

              <!-- 账户信息 -->
              <div class="AccountInfo_box">
                <div class="row">
                  <div class="col-sm-4">
                    <!-- 实名认证 -->
										<div>
                      <div class="clearfix">
                        <!-- 图片 -->
                        <div class="leftimg pull-left">
                          <img src="images/shiming.png" alt="">
                        </div>
                        <!-- 标题+状态-->
                        <div class="pull-left">
  												<h5><strong>实名认证</strong></h5>
                          <p>未认证&nbsp;<a href="realAuth.html">马上认证</a></p>
  												<!-- <p>已认证&nbsp;<a href="realAuth.html">查看</a></p> -->
  											</div>
                      </div>
                      <!-- 介绍信息 -->
                      <p class="font13">实名认证之后才能在平台投资</p>
                    </div>
									</div>

                  <div class="col-sm-4">
                    <!-- 手机认证 -->
                    <div>
                      <div class="clearfix">
                        <!-- 图片 -->
                        <div class="leftimg pull-left">
                          <img src="images/shouji.jpg" alt="">
                        </div>
                        <!-- 标题+状态-->
                        <div class="pull-left">
                          <h5><strong>手机认证</strong></h5>
                          <p>已认证&nbsp;<a href="realAuth.html">查看</a></p>
                          <!-- <p>已认证&nbsp;<a href="realAuth.html">查看</a></p> -->
                        </div>
                      </div>
                      <!-- 介绍信息 -->
                      <p class="font13">可以收到系统操作信息,并增加使用安全性</p>
                    </div>
                  </div>

                  <div class="col-sm-4">
                    <!-- 邮箱认证 -->
                    <div>
                      <div class="clearfix">
                        <!-- 图片 -->
                        <div class="leftimg pull-left">
                          <img src="images/youxiang.jpg" alt="">
                        </div>
                        <!-- 标题+状态-->
                        <div class="pull-left">
                          <h5><strong>邮箱认证</strong></h5>
                          <p>已认证&nbsp;<a href="realAuth.html">查看</a></p>
                          <!-- <p>已认证&nbsp;<a href="realAuth.html">查看</a></p> -->
                        </div>
                      </div>
                      <!-- 介绍信息 -->
                      <p class="font13">您可以设置邮箱来接收重要信息</p>
                    </div>
                  </div>
                </div>

                <div class="row">
                  <div class="col-sm-4">
                    <!-- VIP会员 -->
                    <div>
                      <div class="clearfix">
                        <!-- 图片 -->
                        <div class="leftimg pull-left">
                          <img src="images/baozhan.jpg" alt="">
                        </div>
                        <!-- 标题+状态-->
                        <div class="pull-left">
                          <h5><strong>VIP会员</strong></h5>
                          <p>普通用户&nbsp;<a href="realAuth.html">查看</a></p>
                          <!-- <p>已认证&nbsp;<a href="realAuth.html">查看</a></p> -->
                        </div>
                      </div>
                      <!-- 介绍信息 -->
                      <p class="font13">VIP会员，让你更快捷的投资</p>
                    </div>
                  </div>
                </div>

              </div>
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
</body>
</html>
