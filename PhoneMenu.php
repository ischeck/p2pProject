<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>手机端菜单</title>
    <!-- 引入bootstrap核心库 -->
    <link rel="stylesheet" href="./lib/bootstrap/css/bootstrap.min.css">
    <!-- 引入编译和压缩后的css文件 -->
    <link rel="stylesheet" href="./dist/css/minCss/PhoneMenu.min.css">
    <!-- 兼容IE9以下的浏览器 -->
    <!--[if lt IE 9]>
      <script src="https://cdn.bootcss.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://cdn.bootcss.com/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
    <!-- 控制按钮 -->
    <div class="activatebtn_box">
      <span class="btn_icon activatebtn glyphicon glyphicon-list"></span>
    </div>
    <!-- 菜单 -->
    <div class="PhoneMenu_box">
      <div class="PhoneMenu_list">
        <!-- 标题 -->
        <div class="PhoneMenu_list_title">
            <img class="PhoneMenu_list_title_img" src="./images/logo.png" alt="网站logo"/>
        </div>
        <!-- 一级菜单 -->
        <div class="PhoneMenu_list_item">
          <ul class="PhoneMenu_list_item_two_ul">
            <li class="PhoneMenu_list_item_one_li">
              <a class="PhoneMenu_list_item_one_li_a" href="javascript:;">投资项目<span class="glyphicon glyphicon-menu-right pull-right"></span></a>
              <ul class="PhoneMenu_list_item_two_ul" class="PhoneMenu_list_item_two_ul">
                <li class="PhoneMenu_list_item_two_li"><a href="invest.php?menuid=2?AccordionMenuid=1" class="PhoneMenu_list_item_two_li_a"><span>马上有钱</span></a></li>
                <li class="PhoneMenu_list_item_two_li"><a href="invest.php?menuid=2?AccordionMenuid=2" class="PhoneMenu_list_item_two_li_a"><span>财运滚滚</span></a></li>
                <li class="PhoneMenu_list_item_two_li"><a href="invest.php?menuid=2?AccordionMenuid=3" class="PhoneMenu_list_item_two_li_a"><span>财运广进</span></a></li>
              </ul>
            </li>
            <li class="PhoneMenu_list_item_one_li">
              <a class="PhoneMenu_list_item_one_li_a" href="javascript:;">借款项目<span class="glyphicon glyphicon-menu-right pull-right"></span></a>
              <ul class="PhoneMenu_list_item_two_ul">
                <li class="PhoneMenu_list_item_two_li"><a href="./borrow_apply.php?menuid=4?AccordionMenuid=4" class="PhoneMenu_list_item_two_li_a"><span>信用借款</span></a></li>
                <li class="PhoneMenu_list_item_two_li"><a href="./bid_request_list.php?menuid=4?AccordionMenuid=5" class="PhoneMenu_list_item_two_li_a"><span>借款项目</span></a></li>
                <li class="PhoneMenu_list_item_two_li"><a href="invest.php?menuid=2?AccordionMenuid=6" class="PhoneMenu_list_item_two_li_a"><span>还款明细</span></a></li>
              </ul>
            </li>
            <li class="PhoneMenu_list_item_one_li">
              <a class="PhoneMenu_list_item_one_li_a" href="javascript:;">我的账户<span class="glyphicon glyphicon-menu-right pull-right"></span></a>
              <ul class="PhoneMenu_list_item_two_ul">
                <li class="PhoneMenu_list_item_two_li"><a href="./personal.php?menuid=4?AccordionMenuid=7" class="PhoneMenu_list_item_two_li_a"><span>账户信息</span></a></li>
                <li class="PhoneMenu_list_item_two_li"><a href="./realauth.php?menuid=4?AccordionMenuid=8" class="PhoneMenu_list_item_two_li_a"><span>实名认证</span></a></li>
                <li class="PhoneMenu_list_item_two_li"><a href="invest.php?menuid=2?AccordionMenuid=9" class="PhoneMenu_list_item_two_li_a"><span>银行卡管理</span></a></li>
                <li class="PhoneMenu_list_item_two_li"><a href="invest.php?menuid=2?AccordionMenuid=10" class="PhoneMenu_list_item_two_li_a"><span>登陆记录</span></a></li>
              </ul>
            </li>
            <li class="PhoneMenu_list_item_one_li">
              <a class="PhoneMenu_list_item_one_li_a" href="javascript:;">资产详情<span class="glyphicon glyphicon-menu-right pull-right"></span></a>
              <ul class="PhoneMenu_list_item_two_ul">
                <li class="PhoneMenu_list_item_two_li"><a href="./accountFlow_list.php?menuid=4?AccordionMenuid=11" class="PhoneMenu_list_item_two_li_a"><span>账户流水</span></a></li>
                <li class="PhoneMenu_list_item_two_li"><a href="./recharge_list.php?menuid=4?AccordionMenuid=12" class="PhoneMenu_list_item_two_li_a"><span>充值明细</span></a></li>
                <li class="PhoneMenu_list_item_two_li"><a href="invest.php?menuid=2?AccordionMenuid=13" class="PhoneMenu_list_item_two_li_a"><span>提现记录</span></a></li>
                <li class="PhoneMenu_list_item_two_li"><a href="invest.php?menuid=2?AccordionMenuid=14" class="PhoneMenu_list_item_two_li_a"><span>收款明细</span></a></li>
              </ul>
            </li>
            <li class="PhoneMenu_list_item_one_li">
              <a class="PhoneMenu_list_item_one_li_a" href="javascript:;">个人资料<span class="glyphicon glyphicon-menu-right pull-right"></span></a>
              <ul class="PhoneMenu_list_item_two_ul">
                <li class="PhoneMenu_list_item_two_li"><a href="./userInfo.php?menuid=4?AccordionMenuid=15" class="PhoneMenu_list_item_two_li_a"><span>个人资料</span></a></li>
              </ul>
            </li>
          </ul>
        </div>
      </div>
      <div class="PhoneMenu_push">
      </div>

    </div>
    <!-- 引入jquery -->
    <script src="./lib/jquery/jquery.min.js"></script>
    <!-- 引入bootstrap核心库 -->
    <script src="./lib/bootstrap/js/bootstrap.min.js"></script>
    <!-- 组件库 -->
    <script src="./dist/js/module.min.js"></script>
    <script>
      // 开启动画
      $(".activatebtn_box").on("click",function(){
        $(".PhoneMenu_box").css("left","0px")
      })
      $(".PhoneMenu_push").on("click",function(){
        $(".PhoneMenu_box").css("left","-500px")
      })

      // 一级菜单效果
      $(document).on("click",".PhoneMenu_list_item_one_li_a",this,function(){
        if ($(this).siblings(".PhoneMenu_list_item_two_ul").css('display') == "none") {
          $('.PhoneMenu_list_item_one_li').children('ul').slideUp(300);
          $(this).next('ul').slideDown(300);
          $(this).parent('.PhoneMenu_list_item_one_li').addClass('active').siblings('.PhoneMenu_list_item_one_li').removeClass('active');
        } else {
          //收缩已展开
          $(this).next('ul').slideUp(300);
          $('.PhoneMenu_list_item_one_li').removeClass('active');
        }
      })
    </script>
  </body>
</html>
