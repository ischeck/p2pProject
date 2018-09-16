<!-- 顶部导航 -->
<nav class="navbar navbar-inverse">
  <div class="container">
      <!-- Brand and toggle get grouped for better mobile display -->
      <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
          <span class="sr-only">Toggle navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="#"><span class="glyphicon glyphicon-phone-alt"></span>028-86261949</a>
      </div>

      <!-- Collect the nav links, forms, and other content for toggling -->
      <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav navbar-right">
          <li id="homepage"><a href="./index.php">首页</a></li>
          <li><a href="#">帮助</a></li>
          <li><a href="#" data-toggle="tooltip" data-placement="bottom" data-html="true" title="<img src='./images/contract.png'/>">联系客服</a></li>
      </ul>
      </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>

<!-- 模态框 -->
<div class="modal fade" id="msgShowModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="msgShowTitle">提示</h4>
      </div>
      <div class="modal-body clearfix" id="msgShowContent">
        <div class="pull-left">
          <span class="glyphicon " aria-hidden="true"></span>
        </div>
        <div class="pull-left">
          <span class="modal-text"></span>
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">确定</button>
      </div>
    </div>
  </div>
</div>

<!-- 引入jquery -->
<script src="./lib/jquery/jquery.min.js"></script>
<!-- 根据登录的状态显示不同的菜单 -->
<script>
    $.get("./api/checkState.php",function (data) {
        //处理业务逻辑
        if(data.isSuccess){
            //显示登录后菜单
            var htmlStr=`<li><a href="./personal.php">${data.username}</a></li>
            <li><a href="#">赶快充值</a></li>
            <li><a class="logout" href="#">注销</a></li>`;

            // 父亲中插入儿子
            // append() - 在被选元素的结尾插入内容
            // prepend() - 在被选元素的开头插入内容
            // 兄弟前后插入兄弟
            // after() - 在被选元素之后插入内容
            // before() - 在被选元素之前插入内容

            $("#homepage").after(htmlStr);
        }
        else{
            //显示登录前菜单
            var htmlStr=`<li><a href="./register.php">注册</a></li>
            <li><a href="./login.php">登录</a></li>`;
            $("#homepage").after(htmlStr);
        }
    },"json");

    // 弹出蒙层
    // 设置蒙层标题
    $(document).on("click",".logout",function(){
      $("#msgShowTitle").text("退出成功");
      // 设置蒙层内容
      $(".glyphicon").addClass("glyphicon-ok-sign");
      $(".modal-text").text("退出成功,点击确定跳转到登陆页");

      $('#msgShowModal').on('hidden.bs.modal', function (e) {
        location.href="./api/loginOut.php";
        $(".glyphicon").removeClass("glyphicon-ok-sign");
      });
      // 显示蒙层
      $('#msgShowModal').modal('show');

    });


</script>
