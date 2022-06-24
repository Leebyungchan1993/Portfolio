<?php 
require('app/app.php');
$title = 'board';
require_once('layout/header.php');
?>

<link rel="stylesheet" href="assets/css/scss/board/write.css">
</head>

<?php 
require_once('layout/nav.php');
$date = date("Ymd");
?>

<section class="write_section">
    <div class="write_wrap">
        <div class="write_txt">
            <h2>Board</h2>
            <div class="txt_desc">
                <div>무엇이든 물어보세요<br class="mobile_render" /> 답변해드립니다.</div>
                <div>공개/비공개 설정할 수 있으며<br class="mobile_render" /> 비공개 글 열람은 작성 시<br class="mobile_render" /> 비밀번호가
                    필요합니다.</div>
            </div>
        </div>
        <div class="write_form">
            <div>
                <div class="privacy_statement_box">
                    Lorem ipsum, dolor sit amet consectetur adipisicing elit. Ut magni possimus dolor vel
                    repellat, facere temporibus ex, autem illum assumenda at fugiat unde excepturi molestias
                    nostrum aperiam quod, eum quae sapiente. Eaque magnam ea, voluptatum libero blanditiis
                    fugit vel laboriosam praesentium corporis incidunt consectetur voluptatibus delectus
                    saepe, reiciendis sunt harum unde quo facere expedita? Possimus, sunt, soluta veritatis
                    ullam laudantium assumenda nobis amet eveniet excepturi saepe iure hic error ipsam
                    tempore vitae adipisci quod eius consectetur? Nostrum, vitae! Fugiat, facilis.
                </div>
                <div class="agree_box">
                    <input type="checkbox" id="agree_btn">
                    <label for="agree_btn">
                        <span class="material-icons">check</span>
                        개인정보취급방침에 동의합니다.
                    </label>
                </div>
            </div>
            <div class="form_wrap">
                <form action="./board/insert.php" method="POST">
                    <input type="hidden" name="date" id="date" value="<?php echo $date?>">
                    <input type="hidden" name="views" id="views" value="0">
                    <input type="hidden" name="reply" id="reply" value="0">
                    <div>
                        <dl>
                            <dt>작성자</dt>
                            <dd><input type="text" placeholder="홍길동" name="name" id="name" maxlength="16"></dd>
                        </dl>

                        <dl>
                            <dt>공개여부</dt>
                            <dd class="private_box">
                                <input type="radio" name="private" value="1" id="on_chk" checked>
                                <label for="on_chk">공개</label>
                                <input type="radio" name="private" value="2" id="no_chk">
                                <label for="no_chk">비공개</label>
                            </dd>
                        </dl>
                    </div>

                    <div>
                        <dl>
                            <dt>연락처</dt>
                            <dd class="phone_box">
                                <input type="text" placeholder="010" name="phone1" id="phone01" maxlength="3">
                                <span>-</span>
                                <input type="text" placeholder="1234" name="phone2" id="phone02" maxlength="4">
                                <span>-</span>
                                <input type="text" placeholder="5678" name="phone3" id="phone03" maxlength="4">
                            </dd>
                        </dl>

                        <dl class="email_box">
                            <dt>이메일</dt>
                            <dd><input type="email" placeholder="qudcks5078@naver.com" name="email" id="email">
                            </dd>
                        </dl>
                    </div>

                    <dl>
                        <dt>제목</dt>
                        <dd>
                            <input type="text" placeholder="제목을 입력해주세요." name="title" id="title" maxlength="12">
                        </dd>
                    </dl>
                    <dl>
                        <dt>비밀번호</dt>
                        <dd class="pw_box">
                            <input type="password" placeholder="비밀번호를 입력해주세요." name="password" id="password" maxlength="12">
                            <span>* 비밀번호를 입력하셔야 글쓰기, 삭제가 가능합니다.</span>
                        </dd>
                    </dl>
                    <dl>
                        <dt>부담없이 물어보기</dt>
                        <dd class="qna_box">
                            <textarea cols="30" rows="10" id="desc" name="answer"></textarea>
                        </dd>
                    </dl>
                    <dl>
                        <dt>첨부파일</dt>
                        <dd class="file_box">
                            <input type="file" id="add_file" name="file">
                            <label for="add_file">파일첨부</label>
                            <span>* 이미지 파일은 JPG또는 GIF 파일로 올려주시기 바랍니다.</span>
                            <div class="result">
                            </div>
                        </dd>
                    </dl>
                </form>
                <div class="submit_area">
                    <button id="submit_btn">등록</button>
                    <button id="cancle_btn" onclick="back()">취소</button>
                </div>
            </div>
        </div>
    </div>
</section>

<script src="assets/js/plugin/ckeditor.js"></script>
<script src="assets/js/layout/file.js"></script>
<script src="assets/js/layout/validator.js"></script>
<?php 
    include('layout/footer.php');
?>