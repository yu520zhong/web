$(document).ready(function() {
    function initialization(){
        $('#fullpage').fullpage({
            sectionsColor: ['#f5f5f5', '#f5f5f5', '#f5f5f5', '#f5f5f5', '#f5f5f5'],
            anchors: ['firstPage', 'secondPage', '3rdPage', '4thpage', 'lastPage'],
            menu: '#menu',
            loopBottom: false,
            afterLoad: function(anchorLink, index){
                /*if(index == 1){
                    //animate
                    $(".slog").click(function(){
                        $.fn.fullpage.moveTo(2);
                    });
                }

                //section 2
                if(index == 2){
                    //animate
                    $(".slog").click(function(){
                        $.fn.fullpage.moveTo(3);
                    })
                }

                //section 3
                if(index == 3){
                    //moving the image
                    $(".slog").click(function(){
                        $.fn.fullpage.moveTo(4);
                    })
                }

                if(index == 4){
                    //moving the image
                    $(".slog").click(function(){
                        $.fn.fullpage.moveTo();
                    })
                }*/
            }
        });
    }
        initialization();

        $('.slog-down').click(function(e){
            e.preventDefault();
            $.fn.fullpage.moveSectionDown();
        });

        $('.slog-up').click(function(e){
            e.preventDefault();
            $.fn.fullpage.moveTo(1);
        });

});