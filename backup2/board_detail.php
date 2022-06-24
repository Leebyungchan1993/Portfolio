<?php 
require('app/app.php');
$title = 'board-detail';
require_once('layout/header.php');
?>

<?php 
require_once('layout/nav.php');
?>

<?php 

$seq = $_GET['seq'];
$view_sql = "UPDATE board set views = views + 1 where seq = $seq";
$view_result = mysqli_query($conn, $view_sql);

$sql = "SELECT * FROM board WHERE seq = $seq";
$result = mysqli_query($conn, $sql);
?>

<script>
    $(function () {
        let url = $(location).attr('href');
        $('#url').val(url);

        $('#comment_btn').click(function () {
            let confirmTrue = confirm('댓글을 작성하시겠습니까?')

            if ($('#comment').val() == '') {
                alert('글을 입력해주세요.');
                return false;
            } else if (confirmTrue) {
                $('#comment_form').submit();
            } else {
                return false;
            }
        })
    })
</script>

<script>
    $(document).ready(function () {
        $('.del_btn').click(function () {
            delAlert();
        })

        function delAlert() {
            let con_delete = confirm('삭제하시겠습니까?');
            if (con_delete == true) {
                $('.edit_btn_area form').submit();
            }
        }
    })
</script>

<section class="qna_section">
    <div class="qna_wrap">
        <div class="img_wrap">
            <div class="img_title">
                <h3><span>Board</span></h3>
            </div>
            <div class="img_box">
                <img src="assets/img/common/icon/ico_coun1.png" alt="img">
                <img src="assets/img/common/icon/ico_coun2.png" alt="img">
                <img src="assets/img/common/icon/ico_coun3.png" alt="img">
                <img src="assets/img/common/icon/ico_coun4.png" alt="img">
                <img src="assets/img/common/icon/ico_coun5.png" alt="img">
                <img src="assets/img/common/icon/qna_big.png" alt="img" class="qna_title_img">
            </div>

        </div>
        <div class="txt_wrap">
            <div class="txt_01">
                <p>RFP 작성은 어떻게 하는건가요?<br class="mobile_render" />
                    견적서 작성을 해야 하는데 아무리 찾아봐도 <br class="mobile_render" /> 알려주는 곳이 없어요.</p>
                <p>갑자기 PM을 맡게 되었어요.<br class="mobile_render" /> WBS는 어떻게 작성하면 되나요?</p>
                <p>웹기획자가 되고 싶은데 어떻게 배우면 되나요?<br class="mobile_render" /> 디자인 벤치마킹은 어떻게 하면 되죠?</p>
                <p>퍼블리싱을 시작하고 싶은데 어떻게 해야할지 모르겠어요.제가 만든 개발소스를 검수 받고 싶어요.</p>
                <p>테스트 시나리오 샘플이 필요한데<br class="mobile_render" /> 어디서 구할 수 있나요?</p>
            </div>
            <div class="txt_02">
                <p>프로젝트, 운영, 마케팅, 영업,<br class="mobile_render" /> 고객사 실무 담당자들의 모든 궁금증</p>
                <p><span>문의주시면 답변해드립니다.</span></p>
            </div>
        </div>
    </div>
</section>

<section class="board_detail_section">
    <div class="board_detail_wrap">
        <div class="delete"></div>
            <div class="table_wrap">
                <div class="table_result">
                    <ul>
                    <li>
                        <?php
                    if($row = mysqli_fetch_array($result)){
                        if($row['private'] == '2'){
                            $lock = 'class="lock"';
                        }else{
                            $lock = '';
                        }

                        if($row['reply'] == '1'){
                            $row['reply'] = '답변완료';
                            $answer_complete = ' answer_complete';
                        }else{
                            $row['reply'] = '미확인';
                            $answer_complete = '';
                        }
                        
                        if($row['comment'] == '0'){
                            $row['comment'] = '';
                        }
                    ?>
                        <div class="num"><?= $row['seq']?></div>
                        <div class="title"><a href="board_detail.php?seq=<?= $row['seq']?>"><span <?= $lock?>><span><?= $row['title']?></span></span></a></div>
                        <div class="name"><?= $row['name'] ?></div>
                        <div class="result_info">
                            <div class="view"><?= $row['views']?></div>
                            <div class="date"><?= $row['date']?></div>
                            <div class="status<?=$answer_complete?>"><span><span><?= $row['reply']?></span></span></div>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
        <div class="board_detail_area">
            <div class="answer">
                <?php
                        echo $row['answer'];
                    ?>
            </div>
            <div class="edit_btn_area">
                <div>
                    <a href="board_write_update.php?seq=<?=$row['seq']?>">수정</a>
                    <a href="board/delete.php?seq=<?=$row['seq']?>" class="del_btn">삭제</a>
                </div>
            </div>

            <dl class="reply">
                <dt>
                    <span class="material-icons">question_answer</span>
                    안녕하세요.
                </dt>
                <dd>
                    <div>
                        <p class="comment_start">
                            <?php
                    echo $row['comment'];

                    }
                    mysqli_close($conn);
                    ?>
                        </p>
                    </div>
                </dd>
            </dl>

            <div class="comment_area">
                <form action="board/comment.php" method="POST" id="comment_form">
                    <input type="hidden" id="seq" name="seq"  value="<?= $seq ?>">
                    <input type="hidden" id="url" name="url">
                    <input type="hidden" id="reply" name="reply" value="1">

                    <div class="reply_submit">
                        <textarea name="comment" id="comment"></textarea>
                        <button id="comment_btn" type="button">댓글달기</button>
                    </div>
                </form>
            </div>
        </div>
        <div class="btn_area">
            <a class="list_btn" onclick="listback()">목록으로</a>
        </div>
    </div>
</section>

<script src="assets/js/plugin/jquery.nice-select.js"></script>
<?php 
    include('layout/footer.php');
?>