<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>蓝润Eloan_首页</title>
    <!-- 引入bootstrap核心库 -->
    <link rel="stylesheet" href="./lib/bootstrap/css/bootstrap.min.css">
    <!--  1. 引入插件的css -->
    <link rel="stylesheet" href="./lib/JqueryPagination/jquery.pagination.css">
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
              <th class="text-center table_user">借款人</th>
              <th class="text-center table_title">借款标题</th>
              <th class="text-center table_apr">年利率</th>
              <th class="text-center table_money">金额</th>
              <th class="text-center table_loantype">贷款类型</th>
              <th class="text-center table_schedule">进度</th>
              <th class="text-center table_operation">操作</th>
              </tr>
          </thead>
          <tbody id="indexData">

          </tbody>
        </table>
        <!-- 此处是分页插件  4. 拷贝页面结构-->
        <div class="box_center">
            <div id="page" class="m-pagination"></div>
        </div>
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
    <!-- 引入jqueryTemplate模板引擎的库文件 -->
    <script src="./lib/jqueryTemplate/jquery.tmpl.js"></script>
    <!-- 3. 引入插件的js库 -->
    <script src="./lib/JqueryPagination/jquery.pagination-1.2.7.min.js"></script>
    <!-- 引入bootstrap核心库 -->
    <script src="./lib/bootstrap/js/bootstrap.min.js"></script>
    <!-- 组件库 -->
    <script src="./dist/js/module.min.js"></script>
    <!-- 定义模板： 渲染数据投资列表 -->
    <script id="indextTmpl" type="text/html">
        <tr>
            <td class="text-center table_user"><a href="borrow_info.php?menuid=4">张三</a></td>
            <td class="text-center table_title">${borrowTitle}</td>
            <td class="text-center table_apr text-info">${currentRate}%</td>
            <td class="text-center table_money text-info">${borrowAmount}</td>
            <td class="text-center table_loantype">${borrowType}</td>
            <td class="text-center table_schedule">100.00%</td>
            <td class="text-center table_operation"><a class="btn btn-danger btn-sm" href="borrow_info.php?menuid=4">查看</a></td>
        </tr>
    </script>
    <script>
      //5. 配置插件的参数
      if ($(document).width()<415) {
        $("#page").page({
            debug: false, //开启调试
            showInfo: false, //显示调试信息
            pageSize: 5, //定义每页的数据条数
            pageBtnCount: 5,
            showJump: false, //开启跳转功能
            showPageSizes: true, //用户自定义每页大小
            jumpBtnText: "跳转",
            // showInfo: true,
            remote: {
                //请求数据的地址
                url: './api/indexData.php', //请求的数据
                //请求成功的回调函数
                success: function (data) {
                    //渲染模板
                    var htmlStr=$("#indextTmpl").tmpl(data.list);
                    //把渲染后的结果更新到页面
                    $("#indexData").html(htmlStr);
                    //$("#eventLog").append(' remote callback : ' + JSON.stringify(data) + '<br />');
                }
            }
        });
      } else {
        $("#page").page({
            debug: false, //开启调试
            showInfo: false, //显示调试信息
            pageSize: 5, //定义每页的数据条数
            pageBtnCount: 5,
            showJump: true, //开启跳转功能
            showPageSizes: true, //用户自定义每页大小
            jumpBtnText: "跳转",
            // showInfo: true,
            remote: {
                //请求数据的地址
                url: './api/indexData.php', //请求的数据
                //请求成功的回调函数
                success: function (data) {
                    //渲染模板
                    var htmlStr=$("#indextTmpl").tmpl(data.list);
                    //把渲染后的结果更新到页面
                    $("#indexData").html(htmlStr);
                    //$("#eventLog").append(' remote callback : ' + JSON.stringify(data) + '<br />');
                }
            }
        });
      }
      $("#page").on("pageClicked", function (event, pageIndex) {
          //$("#eventLog").append('EventName = pageClicked , pageIndex = ' + pageIndex + '<br />');
      }).on('jumpClicked', function (event, pageIndex) {
          //$("#eventLog").append('EventName = jumpClicked , pageIndex = ' + pageIndex + '<br />');
      }).on('pageSizeChanged', function (event, pageSize) {
          //$("#eventLog").append('EventName = pageSizeChanged , pageSize = ' + pageSize + '<br />');
      });
    </script>
</body>
</html>
