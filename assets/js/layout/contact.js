$(function(){
    $('#submit_btn').click(function(){
        let headerHeight = $('header').height();

        let confirmTrue = confirm('등록하시겠습니까?');

        let p_title = $('#project_title');
        
        let p_type = $('.project_type');
        let p_typeLeng = $('#project_type input:checkbox:checked').length;

        let p_range = $('.project_range');
        let p_rangeLeng = $('#project_range input:checkbox:checked').length;

        let p_name = $('#project_name');
        let p_getName= RegExp(/^[가-힣a-zA-Z]+$/);

        let p_company = $('#project_company');
        let p_class = $('#project_class');

        let p_phone = $('#project_phone');
        let p_getphone = RegExp(/^[0-9]+$/);

        let p_email = $('#project_email');
        let p_getEmail = RegExp(/^([\w-]+(?:\.[\w-]+)*)@((?:[\w-]+\.)*\w[\w-]{0,66})\.([a-z]{2,6}(?:\.[a-z]{2})?)$/);

        let p_desc = $('#project_desc');
        let agree = $('#agree_btn');


        if(!confirmTrue){
            return false;
        }
        else if(p_title.val() == ''){
            alert('프로젝트명을 입력해주세요.');
            thisFocus(p_title);
        }

        else if(p_typeLeng <= 0){
            alert('프로젝트 분야를 선택해주세요.')
            let p_typeHeight = (($('#project_type').offset().top) - headerHeight );

            $('html,body').animate({
                scrollTop: p_typeHeight
            }, 0);
            thisFocus(p_type);
        }

        else if(p_rangeLeng <= 0){
            alert('의뢰 범위를 선택해주세요.')
            let p_rangeHeight = (($('#project_range').offset().top) - headerHeight);

            $('html,body').animate({
                scrollTop: p_rangeHeight
            }, 0);
            thisFocus(p_range);
        }

        else if(p_name.val() == ''){
            alert('성함을 입력해주세요.')
            thisFocus(p_name);
        }

        else if (!p_getName.test(p_name.val())) {
            alert("작성자는 한글과 영문만 가능합니다.");
            p_name.val("");
            thisFocus(p_name);
        }

        else if(p_company.val() == ''){
            alert('소속업체를 입력해주세요.')
            thisFocus(p_company);
        }

        else if(p_class.val() == ''){
            alert('직위를 입력해주세요.')
            thisFocus(p_class);
        }

        else if(p_phone.val() == ''){
            alert('연락처를 입력해주세요.')
            thisFocus(p_phone);
        }

        else if(!p_getphone.test(p_phone.val())){
            alert('연락처 형식이 아닙니다.');
            p_phone.val('');
            thisFocus(p_phone);
        }

        else if((p_phone.val().length) < 9|| (p_phone.val().length) > 11){
            alert('연락처 형식이 아닙니다.');
            thisFocus(p_phone);
        }

        else if(p_email.val() == ''){
            alert('이메일을 입력해주세요.')
            thisFocus(p_email);
        }

        else if(!p_getEmail.test(p_email.val())){
            alert('이메일 형식이 아닙니다.');
            p_email.val('');
            thisFocus(p_email);
        }

        else if(p_desc.val() == ''){
            alert('프로젝트와 관련된 내용을 입력해주세요.')
            thisFocus(p_desc)
        }

        else if(agree.is(":checked") != true){
            alert('개인정보 동의에 체크해주세요')
            thisFocus(agree);
        } 
        
        else{
            alert('등록되었습니다.');
            $('#contact_form').submit();
        }
    })

    function thisFocus(e, msg){
        e.focus();
        return false;
    }

    $('#cancle_btn').click(function(){
        let confirmTrue = confirm('취소하시겠습니까?');

        if(!confirmTrue){
            return false;
        }else{
            location.href = "index.php";
        }
    })
})