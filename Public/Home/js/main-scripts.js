var Script = function () {
/*
//  window.scroll
    var nt = !1;
    $(window).bind("scroll",function() {
        var st = $(document).scrollTop();//取到当前下拉往下滚的高度
        nt = nt ? nt: $("#J_m_nav").offset().top;//获取的导航头部的高度

        // document.title=st;
        var sel=$("#J_m_nav");
        if (nt < st) {
            sel.addClass("nav_fixed");
        } else {
            sel.removeClass("nav_fixed");
        }
    });
*/
// js跳转到搜索结果页面
$('.table_sign span').click(function() {
    location.href = ThinkPHP['MODULE'] + '/other/search?keywords=' + $(this).text();
});


}();

(function() {
    var options = {
        container:  'body',
        trigger:    'hover',
    };
    $(".previous a,.next a").tooltip(options);
})();

;(function () {
    // Smooth Scroll Top
    var sScrollTop = function () {
        $(window).scroll(function(){
            if ($(window).scrollTop() > 100 ) {
                $('#toTop').fadeIn();
            } else {
                $('#toTop').fadeOut();
            }
        });
        $('#toTop').click(function(event){

            $('html, body').animate({
                scrollTop: 0
            }, 2500);

            event.preventDefault();
            return false;
        });
    };

    $(function(){
        sScrollTop();
    });
}());





