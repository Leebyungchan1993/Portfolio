$(document).ready(function(){
    // File Append JS
        let file = $('.file_box > input');
        let result = $('.result');
        file.each(function () {
            $(this).on('change', function (index) {
                let fileVal = $(this).val().split("\\");
                let fileIndex = $('.add_file').index(this);
    
                if (fileVal.length > 0) {
                    let fileName = fileVal[fileVal.length - 1]; //파일명
                    if (fileName.length > 0) {
                        result.eq(fileIndex).show();
                        result.eq(fileIndex).html('<div><a class="material-icons">attachment</a><span>' +
                            fileName +
                            '</span><button type="button" class="file_del material-icons">close</button></div>'
                        );
                        $(this).parent().find('button').show();
                    } else {
                        result.eq(fileIndex).hide();
                        result.eq(fileIndex).html('');
                    }
                }
            })
        });
    
        $('.file_box > button').each(function(){
            $(this).click(function(){
                let confirmTrue = confirm('파일을 보내시겠습니까?');
                if(file.val() == ''){
                    return false;
                }else if(!confirmTrue){
                    return false;
                }else{
                    $('#file_area').submit();
                }
            })
        })
    
        $(document).on('click', '.file_del', function () {
            let thisIndex = $(this).parents('li').index();
            $(this).parent().remove();
            $('.right_box > form > ul > li').eq(thisIndex).find('button').hide();
        });
    })