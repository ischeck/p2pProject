$(function (){
//发起ajax请求到后端API验证是否登录
$.get("./api/checkState.php",function (data) {
    //处理前端的业务逻辑
    if(!data.isSuccess){
      // 模态框标题
      $("#msgShowTitle").text("温馨提示");
      // 模态框状态图标
      $(".glyphicon").addClass("glyphicon-ok-sign");
      // 模态框内容
      $(".modal-text").text(data.msg);
      // 模态框按钮内容
      $(".btn-default").text("立即登录");
      // 模态框关闭事件
      $('#msgShowModal').on('hidden.bs.modal', function (e) {
        location.href="login.php?menuid=1";
        $(".glyphicon").removeClass("glyphicon-ok-sign");
      });
      // 显示模态框
      $('#msgShowModal').modal('show');
    }
},"json");
});
