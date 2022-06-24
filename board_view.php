<?php 
require('app/app.php');
$title = 'board';
require_once('layout/header.php');
?>

<link rel="stylesheet" href="assets/css/plugin/nice-select.css">
<link rel="stylesheet" href="assets/css/scss/board.css">
</head>

<?php 
require_once('layout/nav.php');
?>

<?php 


if(isset($_GET['search'])){
    $search = $_GET['search'];
    $sql = "SELECT * FROM board WHERE title LIKE '%$search%'";
}else{
    $sql = "SELECT * FROM board";
}

$result = mysqli_query($conn, $sql);
$list = '';

while($row = mysqli_fetch_array($result)){
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

    $list = $list.
    "<li>
        <div class='num'>{$row['seq']}</div>
        <div class='title'><a href=\"board_detail.php?seq={$row['seq']}&views={$row['views']}\"><span $lock><span>{$row['title']}</span></span></a></div>
        <div class='name'>{$row['name']}</div>
        <div class='result_info'>
            <div class='view'>{$row['views']}</div>
            <div class='date'>{$row['date']}</div>
            <div class='status$answer_complete'><span><span>{$row['reply']}</span></span></div>
        </div>
    </li>";
}
?>
        <section class="qna_section">
        <h2 class="section_hide">Qna Section</h2>
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

        <section>
        <h2 class="section_hide">Board</h2>
            <div class="board_wrap">
                <div class="search_area">
                    <form action="board_view.php" method="GET">
                    <div class="search_box">
                            <div class="search_pos">
                                <div class="search">
                                    <input type="text" name="search" id="search" placeholder="키워드로 검색하세요.">
                                    <button type="submit" id="search_btn" class="material-icons">search</button>
                                </div>
                                <a href="board_write.php">그냥 물어보기</a>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="table_wrap">
                    <div class="table_result">
                        <ul>
                        <?php 
                            echo $list;
                            ?>
                        </ul>
                    </div>

                    <div class="table_pagination">
                        <button type="button" class="material-icons">keyboard_arrow_left</button>
                        <a href="#;" class="on">1</a>
                        <a href="#;" class="">2</a>
                        <a href="#;" class="">3</a>
                        <a href="#;" class="">4</a>
                        <a href="#;" class="">5</a>
                        <button type="button" class="material-icons">chevron_right</button>
                    </div>
                </div>
            </div>
        </section>

        <script>
            $(function(){
                $('.table_pagination > a').click(function(){
                    $(this).addClass('on').siblings().removeClass('on');
                })
            })
        </script>

        <script src="assets/js/plugin/jquery.nice-select.js"></script>
<?php 
    include('layout/footer.php');
?>