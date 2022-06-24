<?php 
require('app/app.php');
$title = 'Contact';
require_once('layout/header.php');
?>
    <link rel="stylesheet" href="assets/css/scss/contact.css">
<?php 
require_once('layout/nav.php');
?>

        <section class="form_section">
            <div class="contact_wrap">
                <div class="contact_bg">
                    <div class="contact_txt">
                        <h2>Request Projects & Operation</h2>
                        <div class="txt_desc">
                            <div>고객 비즈니스의 완성이<br class="mobile_render"/> 회사의 목표입니다.</div>
                            <div>프로젝트 문의 및 견적 의뢰 시<br class="mobile_render"/> 신속하게 답변드리겠습니다.</div>
                            <div>직접 상담이 필요한 경우<br class="mobile_render"/> <span>qudcks5078@naver.com</span>으로 문의 주십시오.</div>
                        </div>
                    </div>

                    <div class="contact_form">
                        <div class="form_bg">
                            <form action="" id="contact_form" method="POST">
                                <input type="hidden">
                                <dl>
                                    <dt>프로젝트명</dt>
                                    <dd>
                                        <input type="text" id="project_title" placeholder="프로젝트명을 입력해 주세요.">
                                    </dd>
                                </dl>
                                <dl id="project_type">
                                    <dt>프로젝트 분야 (복수 선택 가능)</dt>
                                    <dd>
                                        <ul>
                                            <li>
                                                <input type="checkbox" class="project_type" id="pchk01">
                                                <label for="pchk01">
                                                    <span>
                                                        브랜드 <br>웹사이트
                                                    </span>
                                                </label>
                                            </li>
                                            <li>
                                                <input type="checkbox" class="project_type" id="pchk02">
                                                <label for="pchk02">
                                                    <span>
                                                        기업 <br>웹사이트
                                                    </span>
                                                </label>
                                            </li>
                                            <li>
                                                <input type="checkbox" class="project_type" id="pchk03">
                                                <label for="pchk03">
                                                    <span>
                                                        병원 의원 <br>웹사이트
                                                    </span>
                                                </label>
                                            </li>
                                            <li>
                                                <input type="checkbox" class="project_type" id="pchk04">
                                                <label for="pchk04">
                                                    <span>
                                                        분양관련 <br>웹사이트
                                                    </span>
                                                </label>
                                            </li>
                                            <li>
                                                <input type="checkbox" class="project_type" id="pchk05">
                                                <label for="pchk05">
                                                    <span>
                                                        쇼핑몰
                                                    </span>
                                                </label>
                                            </li>
                                            <li>
                                                <input type="checkbox" class="project_type" id="pchk06">
                                                <label for="pchk06">
                                                    <span>
                                                        금융
                                                    </span>
                                                </label>
                                            </li>
                                            <li>
                                                <input type="checkbox" class="project_type" id="pchk07">
                                                <label for="pchk07">
                                                    <span>
                                                        기타
                                                    </span>
                                                </label>
                                            </li>
                                        </ul>
                                    </dd>
                                </dl>
                                <dl id="project_range">
                                    <dt>의뢰 범위 (복수 선택 가능)</dt>
                                    <dd>
                                        <ul>
                                            <li>
                                                <input type="checkbox" id="rchk01" class="project_range">
                                                <label for="rchk01">
                                                    <span>
                                                        신규 구축
                                                    </span>
                                                </label>
                                            </li>
                                            <li>
                                                <input type="checkbox" id="rchk02" class="project_range">
                                                <label for="rchk02">
                                                    <span>
                                                        리뉴얼<br>개편
                                                    </span>
                                                </label>
                                            </li>
                                            <li>
                                                <input type="checkbox" id="rchk03" class="project_range">
                                                <label for="rchk03">
                                                    <span>
                                                        부분리뉴얼<br>(부분개편)
                                                    </span>
                                                </label>
                                            </li>
                                            <li>
                                                <input type="checkbox" id="rchk04" class="project_range">
                                                <label for="rchk04">
                                                    <span>
                                                        SNS, 쇼핑몰<br>컨텐츠 디자인
                                                    </span>
                                                </label>
                                            </li>
                                            <li>
                                                <input type="checkbox" id="rchk05" class="project_range">
                                                <label for="rchk05">
                                                    <span>
                                                        운영<br>유지보수
                                                    </span>
                                                </label>
                                            </li>
                                            <li>
                                                <input type="checkbox" id="rchk06" class="project_range">
                                                <label for="rchk06">
                                                    <span>
                                                        기타
                                                    </span>
                                                </label>
                                            </li>
                                        </ul>
                                    </dd>
                                </dl>
                                <dl>
                                    <dt>프로젝트 의뢰정보</dt>
                                    <dd>
                                        <div class="request_box">
                                            <div>
                                                <ul>
                                                    <li><input type="text" id="project_name" placeholder="- 성함"></li>
                                                    <li><input type="text" id="project_company" placeholder="- 소속업체"></li>
                                                    <li><input type="text" id="project_class" placeholder="- 직위"></li>
                                                    <li><input type="text" id="project_phone" placeholder="- 연락처" maxlength="11"></li>
                                                    <li><input type="email" id="project_email" placeholder="- 이메일"></li>
                                                </ul>
                                            </div>
                                            <div>
                                                <textarea name="project_desc" id="project_desc" cols="30" rows="10" placeholder="프로젝트와 관련된 내용을 간략하게 설명해주세요."></textarea>
                                            </div>
                                        </div>
                                    </dd>
                                </dl>
                                <div class="privacy_statement_box">
                                    Lorem ipsum, dolor sit amet consectetur adipisicing elit. Ut magni possimus dolor vel repellat, facere temporibus ex, autem illum assumenda at fugiat unde excepturi molestias nostrum aperiam quod, eum quae sapiente. Eaque magnam ea, voluptatum libero blanditiis fugit vel laboriosam praesentium corporis incidunt consectetur voluptatibus delectus saepe, reiciendis sunt harum unde quo facere expedita? Possimus, sunt, soluta veritatis ullam laudantium assumenda nobis amet eveniet excepturi saepe iure hic error ipsam tempore vitae adipisci quod eius consectetur? Nostrum, vitae! Fugiat, facilis.
                                </div>
                                <div class="agree_box">
                                    <input type="checkbox" id="agree_btn">
                                    <label for="agree_btn">
                                        <span class="material-icons">check</span>
                                        개인정보취급방침에 동의합니다.</label>
                                </div>
                                <div class="submit_area">
                                    <button type="button" id="submit_btn">등록</button>
                                    <button type="button" id="cancle_btn">취소</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <script src="assets/js/layout/contact.js"></script>
<?php 
        include('layout/footer.php');
?>