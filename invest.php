<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>蓝润Eloan_</title>
    <!-- 引入bootstrap核心库 -->
    <link rel="stylesheet" href="./lib/bootstrap/css/bootstrap.min.css">
    <!--  1. 引入插件的css -->
    <link rel="stylesheet" href="./lib/JqueryPagination/jquery.pagination.css">
    <!-- 引入编译和压缩后的css文件 -->
    <link rel="stylesheet" href="./dist/css/minCss/register.min.css">
    <link rel="stylesheet" href="./dist/css/minCss/invest.min.css">
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
    <!-- 投资项目内容 -->
    <div class="container register_box">
      <div class="panel panel-default">
        <!-- 标题内容-->
        <div class="panel-heading clearfix">
          <span class="panel-title">投资列表</span>
        </div>
        <!-- 主要内容 -->
        <div class="panel-body">
          <ul class="nav nav-tabs" role="tablist">
            <li role="presentation" class="active"><a href="#home" aria-controls="home" role="tab" data-toggle="tab">全部</a></li>
            <li role="presentation"><a href="#profile" aria-controls="profile" role="tab" data-toggle="tab">招标中</a></li>
            <li role="presentation"><a href="#messages" aria-controls="messages" role="tab" data-toggle="tab">还款中</a></li>
          </ul>

          <!-- Tab panes -->
          <div class="tab-content">
            <div role="tabpanel" class="tab-pane active" id="home">
              <!-- 全部 -->
              <table class="table el-table table-hover">
          			<thead id="gridHead">
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
          			<tbody id="invesData">

          			</tbody>
          		</table>
              <!-- 此处是分页插件  4. 拷贝页面结构-->
              <div class="box_center">
                  <div id="page" class="m-pagination"></div>
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
    <!-- 引入jqueryTemplate模板引擎的库文件 -->
    <script src="./lib/jqueryTemplate/jquery.tmpl.js"></script>
    <!-- 3. 引入插件的js库 -->
    <script src="./lib/JqueryPagination/jquery.pagination-1.2.7.min.js"></script>
    <!-- 引入bootstrap核心库 -->
    <script src="./lib/bootstrap/js/bootstrap.min.js"></script>
    <!-- 引入自定义的效果 -->
    <script src="./dist/js/p2p.min.js"></script>
    <!-- 组件库 -->
    <script src="./dist/js/module.min.js"></script>
    <!-- 定义模板： 渲染数据投资列表 -->
    <script id="investTmpl" type="text/html">
        <tr>
            <td class="text-center table_user"><a href="borrow_info.php?menuid=4">zs</a><span class="label label-primary">信</span></td>
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
              url: './api/borrowAll.php', //请求的数据
              //请求成功的回调函数
              success: function (data) {
                  //渲染模板
                  var htmlStr=$("#investTmpl").tmpl(data.list);
                  //把渲染后的结果更新到页面
                  $("#invesData").html(htmlStr);
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
              url: './api/borrowAll.php', //请求的数据
              //请求成功的回调函数
              success: function (data) {
                  //渲染模板
                  var htmlStr=$("#investTmpl").tmpl(data.list);
                  //把渲染后的结果更新到页面
                  $("#invesData").html(htmlStr);
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
