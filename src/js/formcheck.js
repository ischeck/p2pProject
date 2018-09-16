$(function() {
  // 注册验证
  $('#regForm').bootstrapValidator({
    message: 'This value is not valid', //全局的出错消息配置
    feedbackIcons: {
      valid: 'glyphicon glyphicon-ok', //验证成功的图标
      invalid: 'glyphicon glyphicon-remove', //验证失败的图标
      validating: 'glyphicon glyphicon-refresh' //异步验证ajax
    },
    //对那些字段做验证，注意使用name属性
    fields: {
      //对用户名做验证
      username: {
        message: '用户名验证失败',
        //验证的规则
        validators: {
          //非空
          notEmpty: {
            message: '用户名必须填写'
          },
          //长度
          stringLength: {
            min: 6, //最小
            max: 12, //最大
            message: '用户名长度必须在6~12位之间'
          }
        }
      },
      password: {
        message: '密码验证失败',
        //验证的规则
        validators: {
          //非空
          notEmpty: {
            message: '密码必须填写'
          },
          //长度
          stringLength: {
            min: 6, //最小
            max: 18, //最大
            message: '密码长度必须在6~18位之间'
          }
        }
      },
      repeatPassword: {
        message: '确认密码验证失败',
        //验证的规则
        validators: {
          //非空
          notEmpty: {
            message: '确认密码必须填写'
          },
          //长度
          stringLength: {
            min: 6, //最小
            max: 18, //最大
            message: '确认密码长度必须在6~18位之间'
          },
          //密码相同性的验证
          identical: {
            field: 'password', //对哪个字段做比较
            message: '两次输入的密码不一致'
          }
        }
      },
      email: {
        message: '电子邮件验证失败',
        //验证的规则
        validators: {
          //非空
          notEmpty: {
            message: '电子邮件必须填写'
          },
          //电子邮件的规则
          emailAddress: {
            message: '电子邮件格式不正确'
          }
        }
      },
      mobile: {
        message: '手机号码验证失败',
        //验证的规则
        validators: {
          //非空
          notEmpty: {
            message: '手机号码必须填写'
          },
          //手机号码正则表达式验证
          regexp: {
            regexp: /^((1[358][0-9])|(14[57])|(17[0678])|(19[7]))\d{8}$/,
            message: '手机号码格式不正确'
          }
        }
      }
    }
  })
  .on('success.form.bv', function(e) {
    // 阻止表单的默认提交行为
    e.preventDefault();
    // 获取表单实例
    var $form = $(e.target);
    // 获取验证实例
    var bv = $form.data('bootstrapValidator');

    // 使用AJAX提交表单数据
    /*
      jquery发起ajax语法：$.post(url,data,success(data, textStatus, jqXHR),dataType)
      参数说明
       url   请求的地址
       data  发送的数据，建议对象格式，也可以是字符串的拼接
       success(data, textStatus, jqXHR)  成功的回调函数
       dataType 返回的数据类型json

       表单对象.serialize() 方法： 批量获取表单元素的值，拼接为字符串 a=1&b=2&c=3
     */
    const reqUrl="./api/userAdd.php"; //请求地址
    const data=$form.serialize(); //表单数据
    $.post(reqUrl, data, function(result) {
        //根据后端的结果处理前端的业务逻辑
        if(result.isSuccess){
            alert(result.msg);
            location.href="./login.php"; //跳转到登录页面
        }
        else{
            alert(result.msg);
        }
    }, 'json');
  });

  //登陆验证
  $('#logForm').bootstrapValidator({
    message: 'This value is not valid', //全局的出错消息配
    feedbackIcons: {
      valid: 'glyphicon glyphicon-ok', //验证成功的图标
      invalid: 'glyphicon glyphicon-remove', //验证失败的图标
      validating: 'glyphicon glyphicon-refresh' //异步验证ajax
    },
    //对那些字段做验证，注意使用name属性
    fields: {
      //对用户名做验证
      username: {
        message: '用户名验证失败',
        //验证的规则
        validators: {
          //非空
          notEmpty: {
            message: '用户名必须填写'
          },
          //长度
          stringLength: {
            min: 6, //最小
            max: 12, //最大
            message: '用户名长度必须在6~12位之间'
          }
        }
      },
      password: {
        message: '密码验证失败',
        //验证的规则
        validators: {
          //非空
          notEmpty: {
            message: '密码必须填写'
          },
          //长度
          stringLength: {
            min: 6, //最小
            max: 18, //最大
            message: '密码长度必须在6~18位之间'
          }
        }
      }

    }
  }).on('success.form.bv', function(e) {
    // 阻止表单的默认提交行为
    e.preventDefault();

    // 获取表单实例
    var $form = $(e.target);

    // 获取验证实例
    var bv = $form.data('bootstrapValidator');
    // 使用AJAX提交表单数据
    const reqUrl="./api/userCheck.php"; //请求地址
    const data=$form.serialize(); //表单数据
    $.post(reqUrl, data, function(result) {
        //根据后端的结果处理前端的业务逻辑
        if(result.isSuccess){
            // 设置蒙层标题
            $("#msgShowTitle").text("登陆成功");
            // 设置蒙层内容
            $(".glyphicon").addClass("glyphicon-ok-sign");
            $(".modal-text").text(result.msg+",3秒后自动跳转到登陆页面");
            $(".btn-default").text("立即进入");

            //定时器修改等待数字
            var num=3;
            var timesID=setInterval(()=>{
               num--;
               $(".modal-text").text(result.msg+","+num+"秒后自动跳转到登陆页面");
               if(num==0){
                   clearInterval(timesID);
                   location.href="./personal.php";//跳转到登录页面
               }
            },1000);
            $('#msgShowModal').on('hidden.bs.modal', function (e) {
              location.href="./personal.php";//跳转到登录页面
              $(".glyphicon").removeClass("glyphicon-ok-sign");
              })
        }else{
          // 设置蒙层标题
          $("#msgShowTitle").text("登陆失败");
          // 设置蒙层内容
          $(".glyphicon").addClass("glyphicon-remove-sign");
          $(".modal-text").text(result.msg);
          $('#msgShowModal').on('hide.bs.modal', function (e) {
            $('#logForm').bootstrapValidator('disableSubmitButtons', false);
            $(".glyphicon").removeClass("glyphicon-remove-sign");
            })
        }
        // 显示蒙层
        $('#msgShowModal').modal('show')
    }, 'json');
  });
});
