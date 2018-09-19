// PC端功能菜单激活状态功能=============================================================================================================
$(function() {
  // 获取网址
  var MenureqUrl = location.href;
  // 获取导航ID
  var AccordionMenuid = MenureqUrl.split("AccordionMenuid=")[1];
  // 添加类名
  $(".AccordionMenu li").eq(AccordionMenuid - 1).addClass("active").siblings("li").removeClass("active");
});

// 移动端侧边栏功能==============================================================================================================
$(function() {

  // 开启隐藏动画
  $(".activatebtn_box").on("click", function() {
    $(".PhoneMenu_box").css("left", "0px");
  });
  $(document).on("click", function(e) {
    var pageX = e.pageX;
    if ($(".PhoneMenu_box").css("left") == "0px" && pageX > 250) {
      $(".PhoneMenu_box").css("left", "-250px");
    }
  });

  // 一级菜单点击动画
  $(document).on("click", ".PhoneMenu_list_item_one_li_a", this, function() {
    if ($(this).siblings(".PhoneMenu_list_item_two_ul").css('display') == "none") {
      $('.PhoneMenu_list_item_one_li').children('ul').slideUp(300);
      $(this).next('ul').slideDown(300);
      $(this).parent('.PhoneMenu_list_item_one_li').addClass('active').siblings('.PhoneMenu_list_item_one_li').removeClass('active');
    } else {
      $(this).next('ul').slideUp(300);
      $('.PhoneMenu_list_item_one_li').removeClass('active');
    }
  });
});

// 移动端滑动开启侧边栏功能==============================================================================================================
$(function() {
  // 起点全局变量
  var x1,
    y1;
  $(window).on("touchstart", function(e) {
    // 点击时获取起点坐标
    x1 = e.originalEvent.changedTouches[0].clientX;
    y1 = e.originalEvent.changedTouches[0].clientY;
  });

  $(window).on("touchend", function(e) {
    // 松开时获取终点坐标
    var x2 = e.originalEvent.changedTouches[0].clientX;
    var y2 = e.originalEvent.changedTouches[0].clientY;
    //计算滑动的距离
    var dx = x2 - x1;
    //横向滑动距离大于100触发事件
    if (Math.abs(dx) >= 80 && $(".PhoneMenu_box").css("left") == "-250px") {
      // 如果菜单没显示就显示菜单
      $(".activatebtn_box").click();
    } else if (Math.abs(dx) >= 80 && $(".PhoneMenu_box").css("left") == "0px") {
      // 如果菜单已显示就隐藏
      $(".PhoneMenu_box").css("left", "-250px");
    }
  });
});

// 二级导航激活状态功能==============================================================================================================
$(function() {
  // 获取网址
  var TwoNavreqUrl = location.href;
  // 获取导航ID
  var menuid = TwoNavreqUrl.split("menuid=")[1];
  if (menuid) {
    var menuid = menuid.split("?")[0];
  }
  // 添加类名
  $("#mainMenu li").eq(menuid - 1).addClass("active").siblings("li").removeClass("active");
})

// 个人中心加载数据功能==============================================================================================================
$.get("./api/checkState.php", function(data) {
  if (data.isSuccess) {
    //成功显示登陆用户名数据
    $("#username").text(data.username)
  } else {
    //失败显示数据
    $("#username").text("获取失败")
  }
}, "json");

// 我要借款类型判断功能==============================================================================================================
$(function() {
  var BorrowreqUrl = location.href;
  var borrowType = BorrowreqUrl.split("borrowtypeid=")[1];
  if (borrowType == "t1") {
    borrowType = "信用贷"
  } else if (borrowType == "t2") {
    borrowType = "车易贷"
  } else if (borrowType == "t3") {
    borrowType = "房易贷"
  }
  $("#borrowType").val(borrowType);
});
