<!-- 게시판상담 섹션 시작 { -->
<div class="sub">
    <div class="counsellingWrArti ani">
        <section class="inner">
            <div class="formWrap">
                <!-- <div class="formSubTit"></div> -->
                <div class="formTit">
                    무엇이든 물어보세요.<br>
                    익명 100% 보장, <br class="mBr" />모든 상담은 변리사가 직접 답변 드립니다.
                </div>
                <form action="/counseling/upload" method="POST" enctype="multipart/form-data">
                    <ul class="formList">
                        <li>
                            <label for="name"><span>[필수] </span>이름</label>
                            <input type="text" id="name" class="ipt" name="name" placeholder="이름을 입력해주세요.">
                        </li>
                        <li>
                            <label for="pwd"><span>[필수] </span>비밀번호</label>
                            <input type="password" id="pwd" class="ipt" name="pwd" placeholder="비밀번호 입력해주세요.">
                        </li>
                        <li>
                            <label for="phone"><span>[필수] </span>휴대폰 번호</label>
                            <input type="text" id="phone" class="ipt" name="phone" placeholder="휴대폰 번호를 입력해주세요.">
                        </li>
                        <li>
                            <label for="category"><span>[필수] </span> 상담분야</label>
                            <select class="ipt" id="category" name="category">
                                <option value="">상담분야를 선택해주세요.</option>
                                <option value="특허/실용신안">특허/실용신안</option>
                                <option value="상표">상표</option>
                                <option value="디자인">디자인</option>
                                <option value="저작권">저작권</option>
                                <option value="해외">해외</option>
                                <option value="기타">기타</option>
                            </select>
                        </li>
                        <li>
                            <label for="title">제목</label>
                            <input type="text" id="title" class="ipt" name="title" placeholder="제목을 작성해주세요.">
                        </li>
                        <li>
                            <label for="content">문의내용</label>
                            <textarea class="ipt" id="content" name="content" placeholder="상담 받으실 내용을 입력해주세요."></textarea>
                        </li>
                        <li>
                            <label for="file1">첨부파일1</label>
                            <div class="fileWrap">
                                <input type="text" id="fake_file1" class="ipt" name="fake_file1" placeholder="첨부파일을 등록해주세요.">
                                <div class="file-input">
                                    <button type="button" class="uploadBtn"></button>
                                    <button type="button" class="delBtn"></button>
                                    <input type="file" name="file1" value="" class="file_hidden">
                                </div>
                            </div>
                        </li>
                        <li>
                            <label for="file2">첨부파일2</label>
                            <div class="fileWrap">
                                <input type="text" id="fake_file2" class="ipt" name="fake_file2" placeholder="첨부파일을 등록해주세요.">
                                <div class="file-input">
                                    <button type="button" class="uploadBtn"></button>
                                    <button type="button" class="delBtn"></button>
                                    <input type="file" name="file2" value="" class="file_hidden">
                                </div>
                            </div>
                        </li>
                        <li>
                            <label for="file3">첨부파일3</label>
                            <div class="fileWrap">
                                <input type="text" id="fake_file3" class="ipt" name="fake_file3" placeholder="첨부파일을 등록해주세요.">
                                <div class="file-input">
                                    <button type="button" class="uploadBtn"></button>
                                    <button type="button" class="delBtn"></button>
                                    <input type="file" name="file3" value="" class="file_hidden">
                                </div>
                            </div>
                        </li>
                        <li>
                            <label for="file4">첨부파일4</label>
                            <div class="fileWrap">
                                <input type="text" id="fake_file4" class="ipt" name="fake_file4" placeholder="첨부파일을 등록해주세요.">
                                <div class="file-input">
                                    <button type="button" class="uploadBtn"></button>
                                    <button type="button" class="delBtn"></button>
                                    <input type="file" name="file4" value="" class="file_hidden">
                                </div>
                            </div>
                        </li>
                        <li>
                            <label for="file5">첨부파일5</label>
                            <div class="fileWrap">
                                <input type="text" id="fake_file5" class="ipt" name="fake_file5" placeholder="첨부파일을 등록해주세요.">
                                <div class="file-input">
                                    <button type="button" class="uploadBtn"></button>
                                    <button type="button" class="delBtn"></button>
                                    <input type="file" name="file5" value="" class="file_hidden">
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="agreeWrap">
                                개인정보 수집 동의 
                                <label class="agreeBox">
                                    <input type="checkbox" name="personalAgree">
                                    <div class="txt">개인정보 수집에 동의합니다.</div>
                                </label>
                            </div>
                            <div class="agreeCont">
                                <div class="agreeContInner">
                                    특허법인 테헤란(이하 ‘회사’)는 상담 및 서비스 제공을 위해 아래와 같이 개인정보를 수집·이용합니다.<br /><br />
                                    - 수집 항목 : 이름, 연락처(전화번호·이메일), 문의 내용<br />
                                    - 수집 목적 : 상담 응대, 서비스 제공 및 안내
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="agreeWrap marketing">
                                (선택) 지식재산 소식 제공 및 뉴스레터 수신 동의
                                <label class="agreeBox">
                                    <input type="checkbox" name="marketingAgree">
                                    <div class="txt">지식재산 소식 제공 및 뉴스레터 수신에 동의합니다.</div>
                                </label>
                            </div>
                            <div class="agreeCont">
                                <div class="agreeContInner">
                                    특허법인 테헤란(이하 ‘회사’)는 개인정보 보호법 등 관련 법령에 따라, 문의하신 고객을 대상으로 마케팅 및 광고성 정보를 전송하기 위해 사전 동의를 받고 있습니다.<br />
                                    회사는 신규 서비스 및 맞춤형 혜택, 이벤트 및 할인 정보, 뉴스레터 등의 광고성 정보를 SMS, 푸시 알림, 이메일 등을 통해 제공할 수 있습니다.<br />
                                    마케팅 정보 수신을 원하지 않는 경우, 고객센터 또는 이메일을 통해 언제든지 철회할 수 있습니다.
                                </div>
                            </div>
                        </li>
                        <!-- <li>
                            <label for="captcha"><span>[필수] </span>자동등록방지</label>
                            <input type="text" id="captcha" class="ipt" name="captcha" placeholder="입력해주세요.">
                            <img src="/img/consult/cap_ex.gif" alt="">
                        </li> -->
                    </ul>
                    <button type="submit" class="btnCsApply ga_board">상담신청완료</button>
                </form>
            </div>
        </section>
    </div>
</div>
<!-- 게시판상담 섹션 끝 } -->

<!-- 전용 스크립트 -->
<script src="/assets/script/counselling.js"></script>