var Script = function () {


//    fixed-scroll
    $(function() {
        var elm = $('#fixedScroll');
        var startPos = $(elm).offset().top;
        $.event.add(window, "scroll", function() {
            var p = $(window).scrollTop();
            $(elm).css('position',((p) > startPos) ? 'fixed' : 'static');
            $(elm).css('top',((p) > startPos) ? '90px' : '');
        });
    });



}();