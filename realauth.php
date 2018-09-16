<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>蓝润Eloan_</title>
    <!-- 引入bootstrap核心库 -->
    <link rel="stylesheet" href="./lib/bootstrap/css/bootstrap.min.css">
    <!-- 引入bootstrapValidator的样式 -->
    <link rel="stylesheet" href="./lib/bootstrapValidator/css/bootstrapValidator.min.css">
    <!-- 引入编译和压缩后的css文件 -->
    <link rel="stylesheet" href="./dist/css/minCss/realauth.min.css">
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

    <!-- 个人信息 -->
    <div class="container main_box">
      <div class="row">
        <div class="col-md-3">
          <!-- 引入左边个人信息菜单 -->
          <?php
            require_once("./template/accordionmenu.php");
          ?>
        </div>

        <div class="col-md-9">
          <div class="panel panel-default">
            <div class="panel-heading">
              <span class="panel-title">实名认证</span>
            </div>
            <div class="panel-body">
              <form id="regForm" class="form-horizontal">
              <div class="form-group">
                  <label for="inputEmail3" class="col-sm-3 control-label">用户名：</label>
                  <div class="col-sm-9">
                  <p class="mt7">小强</p>
                  </div>
              </div>
              <div class="form-group">
                  <label for="inputPassword3" class="col-sm-3 control-label">姓名：</label>
                  <div class="col-sm-4">
                  <input type="text" class="form-control" name="username" placeholder="请输入姓名">
                  </div>
              </div>
              <div class="form-group">
                  <label for="inputPassword3" class="col-sm-3 control-label">性别：</label>
                  <div class="col-sm-4">
                    <select id="sex" class="form-control" name="sex" size="1">
											<option value="0">男</option>
											<option value="1">女</option>
										</select>
                  </div>
              </div>
              <div class="form-group">
                  <label for="inputPassword3" class="col-sm-3 control-label">证件类型：</label>
                  <div class="col-sm-4">
                    <select id="idType" class="form-control" name="idtype" class="select_common" size="1">
											<option value="0">身份证</option>
											<option value="1">驾驶证</option>
											<option value="2">军官证</option>
										</select>
                  </div>
              </div>
              <div class="form-group">
                  <label for="inputPassword3" class="col-sm-3 control-label">证件号码：</label>
                  <div class="col-sm-4">
                  <input type="text" class="form-control" name="idnumber" placeholder="请输入您的身份证">
                  </div>
              </div>
              <div class="form-group">
                  <label for="inputPassword3" class="col-sm-3 control-label">出生日期：</label>
                  <div class="col-sm-4">
                  <input type="text" class="form-control" name="birthdate" placeholder="请输入您的出生日期">
                  </div>
              </div>
              <div class="form-group">
                  <label for="inputPassword3" class="col-sm-3 control-label">证件地址：</label>
                  <div class="col-sm-6">
                  <input type="text" class="form-control" name="address" placeholder="请输入您的身份证地址">
                  </div>
              </div>
              <div class="form-group">
                <label class="col-sm-3  control-label" for="address">身份证照片</label>
			        		<div class="col-sm-9 clearfix">
			        			<p class="text-help text-primary mt7">请点击“选择图片”,选择证件的正反两面照片。</p>
			        			<div class="idCardItem pull-left left_box">
			        				<div class="a_box">
			        					<a href="javascript:;" id="uploa""dBtn1" >上传正面</a>
			        				</div>
                      <div class="img_box">
                        <img alt="" src="./images/upload_source_2.jpg" class="uploadImg" id="uploadImg1" />
                      </div>
			        				<input type="hidden" value="" name="papersimg01" />
			        			</div>
			        			<div class="idCardItem pull-left">
			        				<div class="a_box">
			        					<a href="javascript:;" id="uploadBtn2" >上传反面</a>
			        				</div>
                      <div class="img_box">
                        <img alt="" src="./images/upload_source_2_1.jpg" class="uploadImg" id="uploadImg2"/>
                      </div>
			        				<input type="hidden" value="" name="papersimg02" />
			        			</div>
                      <a href="#" class="a_look">查看样板</a>
				        	</div>
              </div>
              <div class="form-group btn_box">
				        	<button type="submit" id="asubmit" class="btn btn-primary col-sm-offset-4" data-loading-text="正在提交"><i class="icon-ok"></i> 提交认证</button>
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
</body>
</html>
