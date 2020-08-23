$(function (){

    $(".form-horizontal").validate({
        rules:{
            uname:{
                required:true,
                minlength:5,
                remote:{
                    url:"/php/mvc/index.php/admin/reg/checkname",
                    type:"post",
                    data: {
                        uname: function (){
                            return $("input[name=uname]").val();
                        }

                    }
                }
            },
            pass:{
                required:true,
                rangelength:"[5,10]",
                equalTo:"#pass1"
            },
            pass1:{
                required:true,
                rangelength:"[5,10]",
                equalTo:"#pass"
            },

        },
        messages:{
            uname:{
                required:"用户名没有填写",
                minlength:"用户名至少为5位",
                remote:"用户名已经存在",
            },
            pass:{
                required:"密码没有填写",
                rangelength:"密码在5-10位之间",
                equalTo:"两次输入密码不一致"
            },
            pass1:{
                required:"密码没有填写",
                rangelength:"密码在5-10位之间",
                equalTo:"两次输入密码不一致"
            }
        }
    })

})