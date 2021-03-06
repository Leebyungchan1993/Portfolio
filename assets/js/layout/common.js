$(document).ready(function () {

    // Top Js
    $('#top_btn').click(function () {
        $('html,body').animate({
            scrollTop: '0'
        }, 500);
    });

    // Chta JS
    let WindowWidth = $(window).width();

    $('#send_btn').click(function () {
        $('#chat_close').show();
        $('#live_chat').show();

        if (WindowWidth > 768) {
            $('#live_chat').css({
                'width': '300px',
                'height': '450px',
                'opacity': '1',
            })
        } else {
            $('#live_chat').css({
                'width': '300px',
                'height': '300px',
                'opacity': '1',
            })
        }
    })

    $('#chat_close').click(function () {
        $(this).hide();
        $('#live_chat').css({
            'width': '1px',
            'height': '1px',
            'opacity': '0',
        })
    })

    $("#chat_input").keypress(function (e) {
        if (e.keyCode == 13 && $(this).val().length) {
            _val = $(this).val();
            _class = $(this).attr('class');
            $(this).val('');
            _tar = $('.chat_wrap > ul').append('<li class="' + _class + '"><div><p class="msg">' + _val + '</p><span class="time">' + currentTime() + '</span></div></li>');
            chatLast();
        }
    })

    $(document).on('click', '#chat_submit', function () {
        if ($('#chat_input').val().length) {
            _val = $('#chat_input').val();
            _class = $('#chat_input').attr('class');
            $('#chat_input').val('');
            _tar = $('.chat_wrap > ul').append('<li class="' + _class + '"><div><p class="msg">' + _val + '</p><span class="time">' + currentTime() + '</span></div></li>');
            chatLast();
        }
    })

    function chatLast() {
        setTimeout(function () {
            $('.chat_wrap > ul').find('li:last').addClass('on');
        }, 10)
        $('.chat_wrap').stop().animate({
            scrollTop: $('.chat_wrap').height()
        }, 500);
    }

    var currentTime = function () {
        var date = new Date();
        var hh = date.getHours();
        var mm = date.getMinutes();
        var apm = hh > 12 ? "??????" : "??????";
        var ct = apm + " " + hh + ":" + mm + "";
        return ct;
    }

    // Text Animation Js
    let descLeng = $('.txt_desc div').length;

    for (let i = 0; i < descLeng; i++) {
        $('.txt_desc div').eq(i).delay(i * 500).animate({
            'opacity': '1',
            'top': '0',
        }, 700)
    }
})

    // Back Btn
    function backAlert() {
        let con_agree = confirm('?????? ???????????? ??????');
        if(con_agree == true){
            history.go(-1);
        }
    }

    function back() {
            history.go(-1);
    }

    function listback() {
        location.href = "board_view.php";
}