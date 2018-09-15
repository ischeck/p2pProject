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
    // Prevent form submission
    e.preventDefault();

    // Get the form instance
    var $form = $(e.target);

    // Get the BootstrapValidator instance
    var bv = $form.data('bootstrapValidator');

    // Use Ajax to submit form data
    $.post($form.attr('action'), $form.serialize(), function(result) {
      console.log(result);
    }, 'json');
  });

  //注册验证
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
    // Prevent form submission
    e.preventDefault();

    // Get the form instance
    var $form = $(e.target);

    // Get the BootstrapValidator instance
    var bv = $form.data('bootstrapValidator');

    // Use Ajax to submit form data
    $.post($form.attr('action'), $form.serialize(), function(result) {
      console.log(result);
    }, 'json');
  });
});
