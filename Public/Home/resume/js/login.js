$(function () {

    //登录页背景轮播
    ;(function(){ 
        var defaultInd = 0;
        var list = $('#js_ban_content').children();
        var count = 0;
        var change = function(newInd, callback){
            if(count) return;
            count = 2;
            $(list[defaultInd]).fadeOut(400, function(){
                count--;
                if(count <= 0){
                    if(start.timer) window.clearTimeout(start.timer);
                    callback && callback();
                }
            });
            $(list[newInd]).fadeIn(400, function(){
                defaultInd = newInd;
                count--;
                if(count <= 0){
                    if(start.timer) window.clearTimeout(start.timer);
                    callback && callback();
                }
            });
        }
        
        var next = function(callback){
            var newInd = defaultInd + 1;
            if(newInd >= list.length){
                newInd = 0;
            }
            change(newInd, callback);
        }
        
        var start = function(){
            if(start.timer) window.clearTimeout(start.timer);
            start.timer = window.setTimeout(function(){
                next(function(){
                    start();
                });
            }, 8000);
        }
        
        start();
        
        $('#js_ban_button_box').on('click', 'a', function(){
            var btn = $(this);
            if(btn.hasClass('right')){
                //next
                next(function(){
                    start();
                });
            }
            else{
                //prev
                var newInd = defaultInd - 1;
                if(newInd < 0){
                    newInd = list.length - 1;
                }
                change(newInd, function(){
                    start();
                });
            }
            return false;
        });
        
    })();


   
    $("#register").validate({
        submitHandler: function(form) {
            $(form).ajaxSubmit({
                url : ThinkPHP['MODULE'] + '/User/register',
                type : 'POST',
                clearForm:true,　//提交成功后清空表单中的字段值
            });
        },
        rules : {
            username : {
                required : true,
                minlength : 2,
                maxlength : 20,
            },
            password : {
                required : true,
                minlength : 6,
                maxlength : 30,
            },
            repassword : {
                required : true,
                equalTo : '#password',
            },
            email : {
                required : true,
                email : true,
            },
        },
        messages : {
            username : {
                required : '帐号不得为空！',
                minlength : $.format('帐号不得小于{0}位！'),
                maxlength : $.format('帐号不得大于{0}位！'),
                remote : '帐号被占用！',
            },
            password : {
                required : '密码不得为空！',
                minlength : $.format('密码不得小于{0}位！'),
                maxlength : $.format('密码不得大于{0}位！'),
            },
            repassword : {
                required : '密码确认不得为空！',
                equalTo : '密码和密码确认不一致',
            },
            email : {
                required : '邮箱不得为空！',
                email : '邮箱格式不正确',
                remote : '邮箱被占用！',
            },
        },


    });


 $("#login").validate({
        submitHandler: function(form) {
            $(form).ajaxSubmit({
                url : ThinkPHP['MODULE'] + '/User/login',
                type : 'POST',
                clearForm:true,　//提交成功后清空表单中的字段值
            });
        },
        rules : {
            username : {
                required : true,
                minlength : 2,
                maxlength : 20,
            },
            password : {
                required : true,
                minlength : 6,
                maxlength : 30,
            },
             verify : {
                required : true,
            },
        },
        messages : {
            username : {
                required : '帐号不得为空！',
                minlength : $.format('帐号不得小于{0}位！'),
                maxlength : $.format('帐号不得大于{0}位！'),
                remote : '帐号被占用！',
            },
            password : {
                required : '密码不得为空！',
                minlength : $.format('密码不得小于{0}位！'),
                maxlength : $.format('密码不得大于{0}位！'),
            },
            verify : {
                required : '验证码不得为空！',
            },
        },


    });



    //邮箱补全功能
    $('#email').autocomplete({
        delay : 0,
        autoFocus : true,
        source : function (request, response) {
            //获取用户输入的内容
            //alert(request.term);
            //绑定数据源的
            //response(['aa', 'aaaa', 'aaaaaa', 'bb']);
            
            var hosts = ['qq.com', '163.com', '263.com', 'sina.com.cn','gmail.com', 'hotmail.com'],
                term = request.term,        //获取用户输入的内容
                name = term,                //邮箱的用户名
                host = '',                  //邮箱的域名
                ix = term.indexOf('@'),     //@的位置
                result = [];                //最终呈现的邮箱列表
                
                
            result.push(term);
            
            //当有@的时候，重新分别用户名和域名
            if (ix > -1) {
                name = term.slice(0, ix);
                host = term.slice(ix + 1);
            }
            
            if (name) {
                //如果用户已经输入@和后面的域名，
                //那么就找到相关的域名提示，比如bnbbs@1，就提示bnbbs@163.com
                //如果用户还没有输入@或后面的域名，
                //那么就把所有的域名都提示出来
                
                var findedHosts = (host ? $.grep(hosts, function (value, index) {
                        return value.indexOf(host) > -1
                    }) : hosts),
                    findedResult = $.map(findedHosts, function (value, index) {
                    return name + '@' + value;
                });
                
                result = result.concat(findedResult);
            }
            
            response(result);
        },  
    });

    /*//点击更换验证码
    var verifyimg = $('.verifyimg').attr('src');
    $(".changeimg").click(function() {
        if(verifyimg.indexOf('?') > 0) {
            $('.verifyimg').attr('src', verifyimg + '&random=' + Math.random() );
        } else {
            $('.verifyimg').attr('src', verifyimg + '?random=' + Math.random() );
        }
    })*/

    
});

