    var txt = document.getElementById("word");
    var oUl = document.getElementById("list");
    txt.onkeyup = function(){
        var val = txt.value;
        var oScript = document.createElement("script");//动态创建script标签
        oScript.src = "https://sp0.baidu.com/5a1Fazu8AA54nxGko9WTAnF6hhy/su?wd="+val+"&cb=callback";
        //添加链接及回调函数
        document.body.appendChild(oScript);//添加script标签
        document.body.removeChild(oScript);//删除script标签
    }
    //回调函数
    function callback(data){
        var str="";
        for(var i=0;i<data.s.length;i++){
            str += "<li><a target='_blank' href=\"https://www.baidu.com/s?wd="+data.s[i]+"\">"+data.s[i]+"</a></li>";
        }
        //console.log(str);
        oUl.innerHTML=str;
        oUl.style.display="block";

        if(document.getElementById("word").value =="" || !str) {
            oUl.style.display="none";
        }
    }

    $(function(){
        $("#netWork").click(function() {
            var word = $("#word").val();
            var item = "http://www.baidu.com/s?word="+word;
            window.open(item);
            return false;
        });

        //点击关键词跳转
        $('#home').click(function() {
            location.href = ThinkPHP['MODULE'] + '/other/search?keywords=' + $("#word").val();
        });

        //点击关键词跳转
        $('.tag li a').click(function() {
            window.open( ThinkPHP['MODULE'] + '/other/search?keywords=' + $(this).text());
        });

        //搜索框回车跳转
        $('#word').bind('keypress',function(event) {
            if (event.keyCode == "13") {
                location.href = ThinkPHP['MODULE'] + '/other/search?keywords=' + $(this).val();
            }
        });
    });
