$(document).ready(function(){
    // Submit Click
    let submit = $('#submit_btn');
    submit.click(function () {
        checkForm();
    });

    // 전화번호 Keypress
    let phone01 = $('#phone01');
    let phone02 = $('#phone02');
    let phone03 = $('#phone03');
    let phone = [phone01, phone02, phone03];
    let getNumber = RegExp(/^[0-9]+$/);
    function NumberChk(e){
        e.keypress(function(){
        if(!getNumber.test($(this).val())){
            $(this).val('');
        }
    });
    }
    phone.map(item => NumberChk(item));

    function checkForm() {
            let agreeBtn = $('#agree_btn'); 
            let name = $('#name');
            let getName= RegExp(/^[가-힣a-zA-Z]+$/);

            let phone01 = $('#phone01');
            let phone02 = $('#phone02');
            let phone03 = $('#phone03');
            let getphone = RegExp(/^[0-9]+$/);

            let email = $('#email');
            let getEmail = RegExp(/^([\w-]+(?:\.[\w-]+)*)@((?:[\w-]+\.)*\w[\w-]{0,66})\.([a-z]{2,6}(?:\.[a-z]{2})?)$/);

            let title = $('#title');
            let password = $('#password');

            function thisFocus(e){
                e.focus();
                return false;
            }

            // 개인정보 취급방침
            if((agreeBtn.is(":checked")) != true){
                alert('개인정보 동의에 체크해주세요');
                thisFocus(agreeBtn);
            }

            // 작성자 확인
            else if (name.val() == '') {
                alert('작성자를 입력해주세요.');
                thisFocus(name);
            }

            else if (!getName.test(name.val())) {
                alert("작성자는 한글과 영문만 가능합니다.");
                name.val("");
                thisFocus(name);
            }

            // 연락처 확인
            else if (phone01.val() == '') {
                alert('연락처를 입력해주세요.');
                phone01.val('');
                thisFocus(phone01);
            }

            else if(phone01.val().length < 2 || phone01.val().length > 4){
                alert('연락처 형식이 맞지 않습니다.');
                thisFocus(phone01);
            }

            else if (phone02.val() == '') {
                alert('연락처를 입력해주세요.');
                phone02.val('');
                thisFocus(phone02);
            }
            
            else if(phone02.val().length < 3 || phone02.val().length > 4){
                alert('연락처 형식이 맞지 않습니다.');
                thisFocus(phone02);
            }

            else if (phone03.val() == '') {
                alert('연락처를 입력해주세요.');
                phone03.val('');
                thisFocus(phone03);
            }

            else if(phone03.val().length < 3 || phone03.val().length > 4){
                alert('연락처 형식이 맞지 않습니다.');
                thisFocus(phone03);
            }

            // 이메일 확인
            else if (email.val() == '') {
                alert('이메일을 입력해주세요.');
                thisFocus(email);
            }
            
            else if(!getEmail.test(email.val())){
                alert('이메일 형식이 아닙니다.');
                email.val('');
                thisFocus(email);
            }

            // 제목 확인
            else if (title.val() == '') {
                alert('제목을 입력해주세요.');
                thisFocus(title);
            }
            
            // 패스워드 확인
            
            else if (password.val().length > 16) {
                alert('비밀번호는 16글자 이하만 이용 가능합니다.');
                password.val('');
                thisFocus(password);
            }
            
            else{
                $('form').submit();
            }
        }
})