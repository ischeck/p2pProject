<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>蓝润Eloan_信用借款</title>
    <!-- 引入bootstrap核心库 -->
    <link rel="stylesheet" href="./lib/bootstrap/css/bootstrap.min.css">
    <!-- 引入bootstrapValidator的样式 -->
    <link rel="stylesheet" href="./lib/bootstrapValidator/css/bootstrapValidator.min.css">
    <!-- 引入编译和压缩后的css文件 -->
    <link rel="stylesheet" href="./dist/css/minCss/borrow_apply.min.css">
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
    <!-- 信用借款 -->
    <div class="container main_box">
      <div class="row">
        <div class="col-md-3">
          <!-- 引入左边个人信息菜单 -->
          <?php
            require_once("./template/accordionmenu.php");
          ?>
        </div>
        
        <div class="col-md-9">
          <div class="panel panel-default right_box">
            <div class="panel-body">
              <div class="money">
                <h3>信用借款</h3>
                <p>
                  <span class="text-info">授信额度：</span><span class="text-danger">2000 </span> &emsp;&emsp;&emsp;
                  <span class="text-info">可借金额：</span><span class="text-danger">2000</span>
                </p>
              </div>

              <div class="page-header lead">
                <span>借款信息</span>
        				<label class="label label-primary">信用标</label>
        			</div>

              <div class="BorrowMoneyInfo_box">
                <form id="borrowForm" class="form-horizontal">
                  <div class="form-group">
										<label class="col-sm-3 control-label">
											借款类型
										</label>
                    <div class="col-sm-3  input-group">
                      <select class="form-control" name="borrowType" id="borrowType">
  											<option value="信用贷">信用贷</option>
  											<option value="车易贷">车易贷</option>
  											<option value="房易贷">房易贷</option>
  										</select>
                    </div>
									</div>
                <div class="form-group">
        					<label class="col-sm-3 control-label">
        						借款金额
        					</label>
        					<div class="col-sm-3  input-group">
        						<input class="form-control" name="borrowAmount" />
        						<span class="input-group-addon">元</span>
        					</div>
        				</div>
        				<div class="form-group">
        					<label class="col-sm-3 control-label">
        						借款利息
        					</label>
        					<div class="col-sm-3  input-group">
        						<input class="form-control" name="currentRate" />
        						<span class="input-group-addon">%</span>
        					</div>
        				</div>
        				<div class="form-group">
        					<label class="col-sm-3 control-label">
        						借款期限
        					</label>
        					<div class="col-sm-3 input-group">
        						<select class="form-control" name="monthes2Return">
        							<option value="1">1</option>
        							<option value="3">3</option>
        							<option value="6">6</option>
        							<option value="9">9</option>
        							<option value="12">12</option>
        							<option value="24">24</option>
        						</select>
        						<span class="input-group-addon">月</span>
        					</div>
        				</div>
        				<div class="form-group">
        					<label class="col-sm-3 control-label">
        						还款方式
        					</label>
        					<label class="radio-inline">
        						<input type="radio" value="0" checked="checked" name="repayment" />
        						按月分期
        					</label>
        					<label class="radio-inline">
        						<input type="radio" value="1" name="repayment" />
        						按月到期
        					</label>
        				</div>

        				<div class="form-group">
        					<label class="col-sm-3 control-label">
        						最小投标
        					</label>
        					<div class="col-sm-3  input-group">
        						<input class="form-control" name="minAmount" />
        						<span class="input-group-addon">元</span>
        					</div>
        				</div>

                <div class="form-group">
        					<label class="col-sm-3 control-label">
        						最大投标
        					</label>
        					<div class="col-sm-3  input-group">
        						<input class="form-control" name="maxAmount" />
        						<span class="input-group-addon">元</span>
        					</div>
        				</div>

        				<div class="form-group">
        					<label class="col-sm-3 control-label">
        						投标奖金
        					</label>
        					<div class="col-sm-3  input-group">
        						<input class="form-control" name="rewardAmount" value="0" />
        						<span class="input-group-addon">%</span>
        					</div>
        				</div>
        				<div class="form-group">
        					<label class="col-sm-3 control-label">
        						招标天数
        					</label>
        					<div class="col-sm-3 input-group">
        						<select class="form-control" name="disableDays">
        							<option value="1">1</option>
        							<option value="2">2</option>
        							<option value="3">3</option>
        							<option value="4">4</option>
        							<option value="5">5</option>
        							<option value="6">6</option>
        							<option value="7">7</option>
        							<option value="8">8</option>
        							<option value="9">9</option>
        							<option value="10">10</option>
        							<option value="11">11</option>
        							<option value="12">12</option>
        						</select>
        						<span class="input-group-addon">天</span>
        					</div>
        				</div>
        				<div class="form-group">
        					<label class="col-sm-3 control-label">
        						借款标题
        					</label>
        					<div class="col-sm-3 input-group">
        						<input name="borrowTitle" class="form-control" />
        					</div>
        				</div>
        				<div class="form-group">
        					<label class="col-sm-3 control-label">
        						借款描述
        					</label>
        					<div class="col-sm-6  input-group">
        						<textarea name="description" rows="4" class="form-control" style="resize: none;"></textarea>
        					</div>
        				</div>

                <div class="form-group btn_box">
                  <label class="control-label col-sm-3"></label>
                  <div class="col-sm-3 input-group">
                    <button class="btn btn-primary" id="btnSubmit" type="button" data-loading-text="提交">提交申请</button>
                  </div>
                </div>

        				<div class="el-borrow-form-tip">
        					<h4>相关费用</h4>
        					<p>
        						<span class="text-info">利息</span>
        						<span class="el-borrow-cost" id="cost01">--</span>
        					</p>
        					<p>
        						<span class="text-info">奖金</span>
        						<span class="el-borrow-cost" id="cost02">--</span>
        					</p>
        					<p>
        						<span class="text-info">管理费</span>
        						<span class="el-borrow-cost" id="cost03">--</span>
        					</p>
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
    <!-- 借款信息的逻辑 -->
    <script src="./dist/js/borrow.min.js"></script>
</body>
</html>
