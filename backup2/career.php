<?php 
require('app/app.php');
$title = 'Career';
require_once('layout/header.php');
?>

<?php 
require_once('layout/nav.php');
?>

        <section class="visual_section">
            <div class="career_wrap">
                <div class="career_txt">
                    <span>Career</span>
                    <div class="txt_desc">
                        <div>저희의 시작은 <br class="mobile_render">실력있는 IT경력자가</div>
                        <div>오랫동안 일 할 수 있는 환경을<br class="mobile_render" /> 제공하자는 고민에서 출발했습니다.</div>
                    </div>
                </div>
                <div class="career_visual">
                </div>
            </div>
        </section>

        <section class="sub01_section">
            <div class="sub01_bg">
                <div class="sub01_txt">
                    <span>Work with us</span>
                    <div class="txt_desc">
                        <div>지속 가능한 교류와<br class="mobile_render" /> 커뮤니케이션을 통해</div>
                        <div>일하고 싶은 사람이 일할 수 있는<br class="mobile_render" /> 구조를 만드는 선순환 구조를 채택하고 지향합니다.</div>
                        <div class="small_desc">
                            저희의 시작은 실력있는 IT경력자가<br class="tablet_render" /> 오랫동안 일 할 수 있는 환경을 제공하자는 고민에서
                            출발했습니다.<br />
                            분야별 경력자 그룹은 실력있는 워킹맘, 워킹대디와 경력단절자들에게<br />
                            차별없이 동등한 회사의 혜택과 복지를 제공합니다.
                        </div>
                    </div>
                </div>
                <div class="sub01_box">
                    <div>
                        <dl>
                            <dt>근무조건</dt>
                            <dd>
                                <ul>
                                    <li>주5일근무 / 정규직 / 연봉제</li>
                                    <li>9시 ~ 18시 근무</li>
                                    <li>오전 오후 워킹맘 / 워킹대디 재택근무 병행</li>
                                </ul>
                            </dd>
                        </dl>
                    </div>
                    <div>
                        <dl>
                            <dt>복리후생</dt>
                            <dd>
                                <ul>
                                    <li>연차휴가 / 4대보험</li>
                                    <li>자기계발비 지원(도서비, 컨퍼런스 등)</li>
                                    <li>생일 지원 / 휴가 지원 / 복지카드 지원</li>
                                    <li>분기 성과금 지급</li>
                                </ul>
                            </dd>
                        </dl>
                    </div>
                </div>
            </div>
        </section>

        <section class="sub02_section">
            <div class="sub02_bg">
            <div class="left_wrap">
                <div class="left_box">
                    <div class="left_pos">
                        <div class="left_txt">
                            <h2>Work with Us!</h2>
                            <ul>
                                <li>
                                    <p>자신만의 이력서를 올려주세요.<br class="mobile_render" />(양식 구분 없음)</p>
                                    <span>당신의 이력이 궁금합니다!</span>
                                </li>
                                <li>
                                    <p>신입 / 경력직 환영!!</p>
                                    <span>신입부터 경력직 모두 환영합니다!</span>
                                </li>
                                <li>
                                    <p>팀에 살고 팀에 죽는다!!</p>
                                    <span>우린 팀으로 움직입니다.<br class="mobile_render" /> 회사지만 팀으로 일합니다.</span>
                                </li>
                            </ul>
                        </div>
                        <div class="left_img">
                            <img src="assets/img/layout/career/company.png" alt="company">
                        </div>
                    </div>
                </div>
            </div>
            <div class="right_wrap">
                <div class="right_box">
                <form method="POST" id="file_area">
                    <ul>
                        <li>
                            <div class="list_pos">
                                <div>
                                    <h3>책임감 있고 디테일한 기획자를 모집합니다.</h3>
                                    <p>
                                        기획이 좋아서 시작했으나 내가 기획자인지 오퍼레이터인지 구분이 안가 제대로 배우고 일하고 싶은 신입부터<br />
                                        열정과 자부심으로 회사에 몸바쳐 일했지만 그만큼 인정과 대우를 못받는 경력자까지<br />
                                        멤버가 되실 분을 발굴하겠습니다.
                                    </p>
                                    <div class="result"></div>
                                </div>
                                <div class="file_box">
                                    <input type="file" class="add_file" id="resume01">
                                    <label for="resume01">이력서 첨부하기</label>
                                    <button type="button">파일 보내기</button>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="list_pos">
                                <div>
                                    <h3>경력 개발자를 모집합니다.</h3>
                                    <p>
                                        개발팀을 이끌어갈 실력과 겸손, 소통 능력을 갖춘 전문 개발자를 모십니다.<br />
                                        실력과 책임감만 있으시다면 워킹맘 / 워킹대디 환영합니다.
                                    </p>
                                    <div class="result"></div>
                                </div>


                                <div class="file_box">
                                    <input type="file" class="add_file" id="resume02">
                                    <label for="resume02">이력서 첨부하기</label>
                                    <button type="button">파일 보내기</button>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="list_pos">
                                <div>
                                    <h3>즐겁게 일하고 싶은 센스있는 디자이너를 모집합니다.</h3>
                                    <p>
                                        함께 호흡 맞춰 즐겁게 일할 수 있는 디자이너를 모집합니다.<br />
                                        신입부터 경력 3년차까지 지원 가능합니다.
                                    </p>
                                    <div class="result"></div>
                                </div>
                                <div class="file_box">
                                    <input type="file" class="add_file" id="resume03">
                                    <label for="resume03">이력서 첨부하기</label>
                                    <button type="button">파일 보내기</button>
                                </div>
                            </div>
                        </li>
                    </ul>
                </form>
                </div>
            </div>
        </div>
        </section>
        <script src="assets/js/layout/file.js"></script>
<?php 
    include('layout/footer.php');
?>