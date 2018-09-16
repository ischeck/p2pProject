<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>蓝润Eloan_首页</title>
    <!-- 引入bootstrap核心库 -->
    <link rel="stylesheet" href="./lib/bootstrap/css/bootstrap.min.css">
    <!-- 引入编译和压缩后的css文件 -->
    <link rel="stylesheet" href="./dist/css/minCss/index.min.css">
    <!-- 兼容IE9以下的浏览器 -->
    <!--[if lt IE 9]>
      <script src="https://cdn.bootcss.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://cdn.bootcss.com/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body>
    <!-- 引入导航 -->
    <?php
    require_once("./template/topNav.php");
    require_once("./template/mainNav.php");
    ?>
    <!-- 轮播图 -->
    <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
        <!-- 原点提示当前在那张图片 -->
        <ol class="carousel-indicators">
            <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
            <li data-target="#carousel-example-generic" data-slide-to="1"></li>
        </ol>

        <!-- 滚动的内容 -->
        <div class="carousel-inner" role="listbox">
            <!-- 第一图 -->
            <div class="item active">
                <img src="./images/banner01.jpg" alt="第一图">
                <div class="carousel-caption"></div>
            </div>

            <!-- 第二图 -->
            <div class="item">
                <img src="./images/banner02.jpg" alt="第二图">
                <div class="carousel-caption"></div>
            </div>
        </div>

        <!-- 左右的控制按钮 -->
        <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
            <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
            <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>

    <!-- 三大特色 -->
    <div class="special_snack row container center-block">
      <div class="col-sm-4 col-xs-12">
        <dl class="feature_bg1">
          <dt class="feature_title">高收益率</dt>
          <dd class="feature_text">稳定投资、高收益、短期限，易融贷先行赔付，保障投资人权益。</dd>
        </dl>
      </div>
      <div class="col-sm-4 col-xs-12">
        <dl class="feature_bg2">
          <dt class="feature_title">行业第一</dt>
          <dd class="feature_text">稳定投资、高收益、短期限，易融贷先行赔付，保障投资人权益。</dd>
        </dl>
      </div>
      <div class="col-sm-4 col-xs-12">
        <dl class="feature_bg3">
          <dt class="feature_title">投资理财</dt>
          <dd class="feature_text">稳定投资、高收益、短期限，易融贷先行赔付，保障投资人权益。</dd>
        </dl>
      </div>
    </div>

    <!-- 进行中的借款 -->
    <div class="container">
      <div class="panel panel-default underway">
        <!-- 标题内容-->
        <div class="panel-heading clearfix">
          <span class="panel-title">进行中借款</span>
          <a href="#" class="pull-right">进行中借款</a>
        </div>
        <!-- 表格 -->
        <table class="table table-hover">
          <thead>
              <tr>
              <th>借款人</th>
              <th class="hideTitle">借款标题</th>
              <th>年利率</th>
              <th>金额</th>
              <th class="hideTitle">还款方式</th>
              <th>进度</th>
              <th>操作</th>
              </tr>
          </thead>
          <tbody>
              <tr>
              <td>张三</td>
              <td class="hideTitle">给我2000度过难关</td>
              <td>10.00%</td>
              <td>2,000.00</td>
              <td class="hideTitle">按月分期还款</td>
              <td>78.00%</td>
              <td><button type="button" class="btn btn-danger btn-sm">查看</button></td>
              </tr>
              <tr>
              <td>李四</td>
              <td class="hideTitle">给我2000度过难关</td>
              <td>10.00%</td>
              <td>2,000.00</td>
              <td class="hideTitle">按月分期还款</td>
              <td>78.00%</td>
              <td><button type="button" class="btn btn-danger btn-sm">查看</button></td>
              </tr>
              <tr>
              <td>王五</td>
              <td class="hideTitle">给我2000度过难关</td>
              <td>10.00%</td>
              <td>2,000.00</td>
              <td class="hideTitle">按月分期还款</td>
              <td>78.00%</td>
              <td><button type="button" class="btn btn-danger btn-sm">查看</button></td>
              </tr>
              <tr>
              <td>赵六</td>
              <td class="hideTitle">给我2000度过难关</td>
              <td>10.00%</td>
              <td>2,000.00</td>
              <td class="hideTitle">按月分期还款</td>
              <td>78.00%</td>
              <td><button type="button" class="btn btn-danger btn-sm">查看</button></td>
              </tr>
              <tr>
              <td>李四</td>
              <td class="hideTitle">给我2000度过难关</td>
              <td>10.00%</td>
              <td>2,000.00</td>
              <td class="hideTitle">按月分期还款</td>
              <td>78.00%</td>
              <td><button type="button" class="btn btn-danger btn-sm">查看</button></td>
              </tr>
          </tbody>
        </table>
      </div>
    </div>

    <!-- 新闻文章 -->
    <div class="container News_articles">
      <div class="row">
          <div class="col-md-6 col-sm-12 col-xs-12">
              <div class="panel panel-default underway">
              <!-- 标题内容-->
              <div class="panel-heading clearfix">
                  <span class="panel-title">企业最新资讯</span>
                  <a href="#" class="pull-right">更多资讯</a>
              </div>
              <div class="panel-body">
                  <ul>
                      <li><a href="#">央视力挺互联网金融<span class="pull-right">发表日期：2015-03-23</span></a></li>
                      <li><a href="#">央视力挺互联网金融<span class="pull-right">发表日期：2015-03-23</span></a></li>
                      <li><a href="#">央视力挺互联网金融<span class="pull-right">发表日期：2015-03-23</span></a></li>
                  </ul>
              </div>
              </div>
          </div>

          <div class="col-md-6 col-sm-12 col-xs-12">
              <div class="panel panel-default underway">
              <!-- 标题内容-->
              <div class="panel-heading clearfix">
                  <span class="panel-title">用户反馈</span>
                  <a href="#" class="pull-right">更多资讯</a>
              </div>
              <div class="panel-body">
                  <ul>
                      <li><a href="#">央视力挺互联网金融<span class="pull-right">发表日期：2015-03-23</span></a></li>
                      <li><a href="#">央视力挺互联网金融<span class="pull-right">发表日期：2015-03-23</span></a></li>
                      <li><a href="#">央视力挺互联网金融<span class="pull-right">发表日期：2015-03-23</span></a></li>
                  </ul>
              </div>
              </div>
          </div>

          <div class="col-md-6 col-sm-12 col-xs-12">
              <div class="panel panel-default underway">
              <!-- 标题内容-->
              <div class="panel-heading clearfix">
                  <span class="panel-title">理财经验</span>
                  <a href="#" class="pull-right">更多资讯</a>
              </div>
              <div class="panel-body">
                  <ul>
                      <li><a href="#">央视力挺互联网金融<span class="pull-right">发表日期：2015-03-23</span></a></li>
                      <li><a href="#">央视力挺互联网金融<span class="pull-right">发表日期：2015-03-23</span></a></li>
                      <li><a href="#">央视力挺互联网金融<span class="pull-right">发表日期：2015-03-23</span></a></li>
                  </ul>
              </div>
              </div>
          </div>

          <div class="col-md-6 col-sm-12 col-xs-12">
              <div class="panel panel-default underway">
              <!-- 标题内容-->
              <div class="panel-heading clearfix">
                  <span class="panel-title">活动分享</span>
                  <a href="#" class="pull-right">更多资讯</a>
              </div>
              <div class="panel-body">
                  <ul>
                      <li><a href="#">央视力挺互联网金融<span class="pull-right">发表日期：2015-03-23</span></a></li>
                      <li><a href="#">央视力挺互联网金融<span class="pull-right">发表日期：2015-03-23</span></a></li>
                      <li><a href="#">央视力挺互联网金融<span class="pull-right">发表日期：2015-03-23</span></a></li>
                  </ul>
              </div>
              </div>
          </div>
      </div>
    </div>

    <!--引入页脚 -->
    <?php
    require_once("./template/footer.php")
    ?>

    <!-- 引入jquery -->
    <script src="./lib/jquery/jquery.min.js"></script>
    <!-- 引入bootstrap核心库 -->
    <script src="./lib/bootstrap/js/bootstrap.min.js"></script>
    <!-- 引入自定义的效果 -->
    <script src="./dist/js/p2p.min.js"></script>
</body>
</html>
