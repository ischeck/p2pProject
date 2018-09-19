//借款信息的前端业务逻辑的处理
//1. 提交按钮的事件监听
$("#btnSubmit").on("click", function() {
  //2. 获取表单元素的值
  var formData = $("#borrowForm").serialize(); //a=1&b=2&c=3
  //3. 发起ajax请求
  $.post("./api/borrowAdd.php", formData, function(result) {

    //4. 根据后端api返回的结果处理前端的业务逻辑
    if (result.isSuccess) {
      // 模态框标题
      $("#msgShowTitle").text("提交成功");
      // 模态框状态图标
      $(".glyphicon").addClass("glyphicon-ok-sign");
      // 模态框内容
      $(".modal-text").text(result.msg + ",3秒后自动跳转到申请列表");
      // 模态框按钮内容
      $(".btn-default").text("立即查看");
      //定时器修改等待数字
      var num = 3;
      var timesID = setInterval(() => {
        num--;
        $(".modal-text").text(result.msg + "," + num + "秒后自动跳转到申请列表");
        if (num == 0) {
          clearInterval(timesID);
          location.href = "bid_request_list.php?menuid=4?AccordionMenuid=5";
        }
      }, 1000);
      // 模态框关闭事件
      $('#msgShowModal').on('hidden.bs.modal', function(e) {
        location.href = "bid_request_list.php?menuid=4?AccordionMenuid=5";
        $(".glyphicon").removeClass("glyphicon-ok-sign");
      });
    } else {
      // 模态框标题
      $("#msgShowTitle").text("提交失败");
      // 模态框状态图标
      $(".glyphicon").addClass("glyphicon-remove-sign");
      // 模态框内容
      $(".modal-text").text(result.msg);
      // 模态框按钮内容
      $(".btn-default").text("返回");
    }
    // 显示模态框
    $('#msgShowModal').modal('show');
  }, "json");
});


$(function(){
  //借款页面加载时自动发起ajax请求到后台的api获取当前登录用户的借款信息
  if ($("#borrowTmpl").length>=1) {
    $.get("./api/borrowList.php",function (result) {
        var htmlStr = $("#borrowTmpl").tmpl(result);
        //把渲染后的html更新到页面
        $("#borrowData").html(htmlStr);
    },"json");
  };
})
