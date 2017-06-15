//输出当前系统时间到页面指定位置
window.onload = function(){
  showTime();     //网页一加载就调用showTime()函数；
}
function checkTime(i){  //补位处理
  if(i<10)
  {
     i="0"+i;     //当秒分小于10时，在左边补0；
  }
  return i;
}
function showTime(){
  var now=new Date();
  var year=now.getFullYear();
  var month=now.getMonth()+1; //js获取的月份是从0开始；
  var day=now.getDate();
  var h=now.getHours();
  var m=now.getMinutes();
  var s=now.getSeconds();
  m=checkTime(m)
  s=checkTime(s)

  var weekday=new Array(7)
  weekday[0]="星期日"
  weekday[1]="星期一"
  weekday[2]="星期二"
  weekday[3]="星期三"
  weekday[4]="星期四"
  weekday[5]="星期五"
  weekday[6]="星期六"
  var w=weekday[now.getDay()]; //js获取的星期是0~6,0是星期天；
  document.getElementById("TimeShow").innerHTML=""+year+"年"+month+"月"+day+"日 "+w+"  "+h+":"+m+":"+s;
  t=setTimeout('showTime()',500)
};

;(function () {
    // nav active
    var navActive = function () {
        var urlstr = location.href;
        var urlstatus=false;
        $("#side-menu a").each(function () {
            if ((urlstr + '/').indexOf($(this).attr('href')) > -1&&$(this).attr('href')!='') {
                $(this).parent().addClass('active');
                $(this).parent().parent().addClass('in');
                $(this).parent().parent().parent().addClass('active');
                urlstatus = true;
            } else {
                $(this).removeClass('active');
            }
        });
        if (!urlstatus) {$("#side-menu > li").eq(1).addClass("active"); }
    };

    $(function(){
        navActive();
    });
}());
