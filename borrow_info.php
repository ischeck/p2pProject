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
    <link rel="stylesheet" href="./dist/css/minCss/borrow_info.min.css">
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
    <div class="container main_box">
      <div class="row">
        <div class="col-sm-3">
          <div class="panel panel-default jiekuanren_box">
            <div class="panel-heading">
              <span class="panel-title">借款人</span>
            </div>
            <div class="panel-body">
              <img class="el-userhead" src="images/head_icon.jpg" />
							<p class="text-center"><a class="text-info" href="#">zs</a></p><br/>
							<div><span>籍贯： 四川 - 成都</span></div>
							<div><span>专职客服：<a href="#">码妹妹</a></span></div>
							<div><span>认证信息：</span>
							<label class="label label-success">
                <span class="glyphicon glyphicon-user"></span>
							</label>
							</div>
            </div>
          </div>
        </div>

        <div class="col-sm-6 jiekuanxiangqing_box">
          <h3 class="text-info">zs借款
            <small><label class="label label-primary">信</label></small>
          </h3>
          <div>
            <ul>
              <li><span>借款金额</span><span class="text-info">2,000.00</span></li>
              <li><span>年化利率</span><span class="text-info">10.00%</span></li>
              <li><span>借款期限</span><span class="text-info">3月</span></li>
              <li><span>投标奖励</span><span class="text-info">0.00</span></li>
              <li><span>还款方式</span><span class="text-info">按月分期还款</span></li>
              <li><span>最小投标</span><span class="text-info">20.00</span></li>
              <li><span>剩余时间</span><span class="text-info"></span></li>
            </ul>
          </div>
          </div>

        <div class="col-sm-3 jiekuanjindu_box">
          <ul>
            <li><span>投标总数</span><span class="text-info">2</span></li>
            <li><span>还需金额</span><span class="text-info">0.00元</span></li>
            <li><span>投标进度</span><span class="text-info"></span></li>
            <li>
              <div class="progress">
                <div class="progress-bar progress-bar-info progress-bar-striped active" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100" style="min-width: 2em;width: 100%">
                  <i>100%</i>
                </div>
              </div>
            </li>
            <li><h4 class="text-primary">还款中</h4></li>
          </ul>
        </div>
      </div>

      <div class="panel panel-default jiekuanrenxinxi_box">
        <div class="panel-heading">
          <span class="panel-title">借款人信息</span>
        </div>
        <div class="panel-body">
          <div class="row">
            <div class="col-sm-3">
              <p><span>注册时间</span><span class="text-info">2015-03-30</span></p>
            </div>

            <div class="col-sm-3">
              <p><span>借款额度</span><span class="text-info">2000</span></p>
            </div>

            <div class="col-sm-3">
              <p><span>性别</span><span class="text-info">男</span></p>
            </div>

            <div class="col-sm-3">
              <p><span>年龄</span><span class="text-info">25</span></p>
            </div>
          </div>
          <div class="row">
            <div class="col-sm-3">
              <p><span>文化程度</span><span class="text-info">硕士研究生</span></p>
            </div>
            <div class="col-sm-3">
              <p><span>每月收入</span><span class="text-info">3000-4999</span></p>
            </div>
          </div>
        </div>
      </div>

      <div class="panel panel-default shenherenzhenxinxi_box">
        <div class="panel-heading">
          <span class="panel-title">审核认证信息</span>
        </div>
        <div class="panel-body">
          <div class="row">
            <div class="col-sm-3">
              <p><span>认证时态度</span><span class="text-info">优</span></p>
            </div>

            <div class="col-sm-3">
              <p><span>信贷知识掌握情况</span><span class="text-info">优</span></p>
            </div>

            <div class="col-sm-3">
              <p><span>借款感言</span><span class="text-info">给我2000度过难关</span></p>
            </div>

          </div>
          <div class="row">
            <div class="col-sm-3">
              <p><span>审核员认证意见</span><span class="text-info">啊啊啊啊啊</span></p>
            </div>

          </div>
        </div>
      </div>

      <div class="panel panel-default cailiaoxinxi_box">
        <div class="panel-heading">
          <span class="panel-title">材料信息</span>
        </div>
        <div class="panel-body">
          <table class="table table-striped">
						<thead>
						<tr>
							<th>材料类型</th>
							<th>材料数量</th>
						</tr>
						</thead>
						<tbody>
						<tr style="cursor: pointer;">
							<td>本人身份证</td>
							<td class="text-info">2</td>
						</tr>
						</tbody>
					</table>
        </div>
      </div>

      <div class="panel panel-default huankuanqingkuang_box">
        <div class="panel-heading">
          <span class="panel-title">还款情况</span>
        </div>
        <div class="panel-body">
          <table class="table table-striped">
						<thead>
						<tr>
							<th>还款状态</th>
							<th>最近一周</th>
							<th>最近1月</th>
							<th>最近6月</th>
							<th>6个月前</th>
							<th>总计[?]</th>
						</tr>
						</thead>
						<tbody>
						<tr>
							<td>提前还款</td>
							<td>0</td>
							<td>0</td>
							<td>0</td>
							<td>0</td>
							<td>0</td>
						</tr>
						<tr>
							<td>准时还款</td>
							<td>0</td>
							<td>0</td>
							<td>0</td>
							<td>0</td>
							<td>0</td>
						</tr>
						<tr>
							<td>逾期已还</td>
							<td>0</td>
							<td>0</td>
							<td>0</td>
							<td>0</td>
							<td>0</td>
						</tr>
						<tr>
							<td>逾期未还</td>
							<td>0</td>
							<td>0</td>
							<td>0</td>
							<td>0</td>
							<td>0</td>
						</tr>
						</tbody>
					</table>
        </div>
      </div>

      <div class="panel panel-default toubiaoxinxi_box">
        <div class="panel-heading">
          <span class="panel-title">投标记录</span>
        </div>
        <div class="panel-body">
          <table class="table table-striped">
						<thead>
  						<tr>
  							<th>投标人</th>
  							<th>年利率 </th>
  							<th>有效金额(¥)</th>
  							<th>投标时间</th>
  							<th>类型</th>
  						</tr>
						</thead>
						<tbody>
  						<tr>
  							<td>si*****</td>
  							<td>10%</td>
  							<td style="padding-right:60px;" class="text-info">1,000.00</td>
  							<td>2016-05-11 06:42:11</td>
  							<td>手动投标</td>
  						</tr>
  						<tr>
  							<td>xia*****</td>
  							<td>10%</td>
  							<td style="padding-right:60px;" class="text-info">1,000.00</td>
  							<td>2016-05-12 13:44:01</td>
  							<td>手动投标</td>
  						</tr>
						</tbody>
					</table>
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
