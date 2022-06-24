$(document).ready(function () {

    // 비주얼 이미지
    let WindowWidth = $(window).width();
    let WindowInner = $(window).innerHeight();

    // Bottom Anchor
    let limenu = $('.bottom_anchor > ul > li');
    let contents = $('.sticky_section > .content');

    limenu.click(function (event) {
        // event.preventDefault();
        let idx = $(this).index();
        let tt = contents.eq(idx).offset().top;

        // 해당 위치 이동
        $('html, body').animate({
            scrollTop: tt
        });
    })

    //     if(WindowWidth > 768){
    //     $(window).scroll(function(){
    //         let contents = $('.content');
    //         let DocHeight = $(this).scrollTop();
    //         let scrollPos = $(window).scrollTop();
    //         let Wheight = window.innerHeight;
    //         let headerHeight = $('header').height();

    //         contents.each(function(i){
    //             let tg = $(this);
    //             let Nexttg = $(this).next();

    //             if(tg.offset().top - 100 < (DocHeight + headerHeight)){
    //                 tg.find('.content_pos').children().addClass('active').find('.inner').removeClass('active');
    //             }else{
    //                 tg.find('.content_pos').children().removeClass('active').find('.inner').addClass('active');
    //             }
    //         })
    //     })
    // }

    if (WindowWidth > 768) {
        $(window).scroll(function () {
            let scrollPos = $(window).scrollTop();
            let contents = $('.content');

            contents.each(function (index) {
                let contentHeight = $(this).height();
                let contentOffset = $(this).offset().top;


                if (scrollPos > contentOffset - contentHeight / 2) {
                    $(this).find('.content_pos').children().addClass('active').find('.inner').removeClass('active');
                } 

                else if (scrollPos < contentOffset - contentHeight / 2) {
                    $(this).find('.content_pos').children().removeClass('active').find('.inner').addClass('active')

                }
                
                if($(this).index() == 2){
                    if(scrollPos > contentOffset){
                        $(this).find('.content_pos').children().removeClass('active').find('.inner').removeClass('active');
                    }else if(scrollPos > contentOffset){
                        $(this).find('.content_pos').children().removeClass('active').find('.inner').addClass('active');
                    }
                }else{
                 if (scrollPos > contentOffset + contentHeight - (contentHeight / 2)) {
                    $(this).find('.content_pos').children().removeClass('active').find('.inner').addClass('active');
                }
            }



            })
            
        })
    }
});