<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>蓝润Eloan_账户充值</title>
    <!-- 引入bootstrap核心库 -->
    <link rel="stylesheet" href="./lib/bootstrap/css/bootstrap.min.css">
    <!-- 引入bootstrapValidator的样式 -->
    <link rel="stylesheet" href="./lib/bootstrapValidator/css/bootstrapValidator.min.css">
    <!-- 引入编译和压缩后的css文件 -->
    <link rel="stylesheet" href="./dist/css/minCss/recharge.min.css">
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
          <a class="navbar-brand" href="#">
            <img src="./images/logo.png" alt="网站logo"/>
          </a>
          <span class="pull-left">账户充值</span>
        </div>
      </div><!-- /.container-fluid -->
    </nav>

    <!-- 主体内容 -->
    <div class="container main_box">
      <!-- 顶部提示 -->
      <div class="panel panel-default topmsg_box">
        <div class="panel-body">
          <div class="zhanghuchongzhi_box">
            <h3 class="text-info">账户充值</h3>
            <p>1. 由于银行系统的限制，充值功能建议使用 IE 内核（IE8及以上）的浏览器。</p>
            <p>2. 请注意：为打击信用卡套现行为，充值资金必须经过投资回款后方能允许提现。</p>
          </div>
        </div>
      </div>
      <!-- 充值 -->
      <div class="chongzhi_box" role="tabpanel">
        <!-- 选项卡标题 -->
        <ul class="nav nav-tabs" role="tablist">
          <li role="presentation" class="active"><a href="#home" aria-controls="home" role="tab" data-toggle="tab">线上充值（第三方平台）</a></li>
          <li role="presentation"><a href="#profile" aria-controls="profile" role="tab" data-toggle="tab">线下充值</a></li>
        </ul>

        <!-- 选项卡内容 -->
        <div class="tab-content">
          <div role="tabpanel" class="tab-pane active" id="home">
            <p class="text-danger text-center">系统暂不支持，请采用线下充值</p>
          </div>
          <div role="tabpanel" class="tab-pane" id="profile">
            <table class="table el-recharge-table">
              <thead>
              <tr>
                <th>银行名称</th>
                <th>开户人姓名</th>
                <th>银行帐号</th>
                <th>开户行支行名称</th>
              </tr>
              </thead>
              <tbody>
              <tr>
                <td><span class="el-bank el-bank01"></span></td>
                <td>源代码</td>
                <td>62170038233428412750</td>
                <td>府城大道支行</td>
              </tr>
              <tr>
                <td><span class="el-bank el-bank02"></span></td>
                <td>源代码</td>
                <td>6217003834411112750</td>
                <td>成都天府新谷支行</td>
              </tr>
              <tr>
                <td><span class="el-bank el-bank03"></span></td>
                <td>源代码</td>
                <td>6212303810028412750</td>
                <td>成都高新天府大道支行</td>
              </tr>
              </tbody>
            </table>
            <div>
                <p class="text-primary h4" style="padding: 0px;margin: 0px;;">第一步:</p>
                <p class="text-primary">请选择往以上一个账号汇款或转账您所要充值的金额（若您是跨行转账，推荐选择建行）。注：请保存您的交易记录信息。</p>
                <p class="text-primary h4" style="padding: 0px;margin: 0px;;">第二步:</p>
                <p class="text-primary">款或转账成功后，再选择你所汇款或转账的账号，并填写以下完整的信息后，提交您的线下充值申请。我们将会在下个工作日核对您的申请。</p>
                <form id="rechargeForm" class="form-horizontal el-recharge-form" action="rechargeOffline_save.html" method="post">
                  <div class="form-group">
                      <label class="control-label col-sm-2">银行</label>
                      <div class="col-sm-5">
                        <select class="form-control" name="bankInfo.id">
                          <option value="1">工商银行62170038233428412750(府城大道支行)</option>
                          <option value="2">农业银行6217003834411112750(成都天府新谷支行)</option>
                          <option value="3">招商银行6212303810028412750(成都高新天府大道支行)</option>
                        </select>
                      </div>
                  </div>
                    <div class="form-group">
                        <label class="control-label col-sm-2">交易号</label>
                        <div class="col-sm-5">
                            <input class="form-control" name="tradeCode">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-sm-2">充值时间</label>
                        <div class="col-sm-5">
                            <input class="form-control datepicker" name="tradeTime">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-sm-2">充值金额</label>
                        <div class="col-sm-5">
                            <input class="form-control" name="amount">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-sm-2">说明</label>
                        <div class="col-sm-8">
                            <textarea style="resize: none;" class="form-control" name="note"></textarea>
                        </div>
                    </div>
                    <div class="form-group btn_box">
                      <label class="control-label col-sm-2"></label>
                      <div class="col-sm-8">
                        <button type="submit" class="col-sm-offset-2 btn btn-primary">确认提交</button>
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
