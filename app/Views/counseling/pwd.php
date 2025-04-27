<!-- 게시판 상담 비밀번호 시작 -->
<div class="sub">
    <div class="counsellingPwdArti">
        <section class="pwdWrap">
            <div class="inner">
                <img src="/assets/img/sub/counsellingArti/pwd_alert_img.png" alt="">
                <div class="tit">해당 글을 확인 하기 위해서는<br> 해당글의 비밀번호를 입력해야 합니다.</div>
                <form action="/counseling/view/<?=$no?>">
                    <label for="pwd"><span>[필수] </span>비밀번호</label>
                    <input type="hidden" name="no" value="<?=$no?>">
                    <input type="password" id="phone" class="ipt" name="pwd" placeholder="비밀번호를 입력해주세요.">
                    <button type="submit" class="btnPwdCheck">확인</button>
                </form>
                <a class="clickToCs" href="/counseling/board">게시판으로 돌아가기</a>
            </div>
        </section>
    </div>
</div>
<!-- 게시판 상담 비밀번호 끝  -->