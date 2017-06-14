$(function() {
    //search show hide
    $('#navbar-search > a').on('click', function() {
        $('#navbar-search > a > i').toggleClass('u-search u-cuowutishi');
        $("#navbar-search-box").toggleClass('show hidden animated fadeInUp');

        return false;
    });

    //点击关键词跳转
    $('.searchbar').click(function() {
        location.href = ThinkPHP['MODULE'] + '/other/search?keywords=' + $('#keywords').val();
    });

    //搜索框回车跳转
    $('#keywords').bind('keypress',function(event) {
        if (event.keyCode == "13") {
            location.href = ThinkPHP['MODULE'] + '/other/search?keywords=' + $(this).val();
        }
    });
})