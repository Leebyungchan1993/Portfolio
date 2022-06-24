
        <footer>
            <div class="footer_wrap">
                <div class="address">
                    <ul>
                        <li>사업자등록번호 : 123-45-67890</li>
                        <li>서울 금천구 가산동 123,<br class="mobile_render" /> 4층 567호</li>
                        <li><a href="#;">qudcks5078@naver.com</a></li>
                        <li>Mon-Fri : 09:00 AM – 6:00 PM</li>
                        <li><a href="#;">TEL : 02-3442-2003</a></li>
                    </ul>
                </div>
                <div class="copyright">
                    © Copyright 2022 Lsj1993 All Rights Reserved
                </div>
            </div>
        </footer>

        <div id="top_area">
            <button class="material-icons" id="send_btn">contact_support</button>
            <button class="material-icons" id="top_btn">north</button>
        </div>

        <div id="live_chat">
            <a id="chat_close" class="material-icons">close</a>
            <div class="chat_wrap">
                <ul>
                    <li class="you on">
                        <div>
                            <p class="msg">문의사항을 남겨주세요</p>
                            <span class="time">
                                <script>
                                    var date = new Date();
                                    var hh = date.getHours();
                                    var mm = date.getMinutes();
                                    var apm = hh > 12 ? "오후" : "오전";
                                    var ct = apm + " " + hh + ":" + mm + "";
                                    document.write(ct);
                                </script>
                            </span>
                        </div>
                    </li>
                </ul>
            </div>

            <div class="submit_chat">
                <input type="text" id="chat_input" class="me" placeholder=" 메시지를 입력해주세요" />
                <button id="chat_submit">확인</button>
            </div>
        </div>
    </div>
</body>
</html>