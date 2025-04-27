<script>
  (function() {
    var w = window;
    if (w.ChannelIO) {
      return (window.console.error || window.console.log || function(){})('ChannelIO script included twice.');
    }
    var ch = function() {
      ch.c(arguments);
    };
    ch.q = [];
    ch.c = function(args) {
      ch.q.push(args);
    };
    w.ChannelIO = ch;
    function l() {
      if (w.ChannelIOInitialized) {
        return;
      }
      w.ChannelIOInitialized = true;
      var s = document.createElement('script');
      s.type = 'text/javascript';
      s.async = true;
      s.src = 'https://cdn.channel.io/plugin/ch-plugin-web.js';
      s.charset = 'UTF-8';
      var x = document.getElementsByTagName('script')[0];
      x.parentNode.insertBefore(s, x);
    }
    if (document.readyState === 'complete') {
      l();
    } else if (window.attachEvent) {
      window.attachEvent('onload', l);
    } else {
      window.addEventListener('DOMContentLoaded', l, false);
      window.addEventListener('load', l, false);
    }
  })();
  ChannelIO('boot', {
    "pluginKey": ""
  });
</script>

<!-- <a href="" target="_blank" class="fixBtn fixKakaoBtn"><img src="/assets/img/common/fixKakaoBtn.svg" alt="테헤란 특허법인 카카오톡 채널 바로가기"></a> -->
<!-- <button class="fixBtn fixUpBtn"><img src="/assets/img/common/fixUpBtn.svg" alt="화면 맨 위로 이동"></button> -->
<a href="tel:1800-8230" class="fixBtn fixCallBtn"><img src="/assets/img/common/fixCallBtn.svg" alt="1800-8230"></a>

<!-- quickMenu -->
<section id="quick">
  <div class="quickContainer">
    <div class="quickWrap">
      <div class="bg"></div>
      <div class="closeBtn">
          <div class="icon">
              <img src="/assets/img/common/rightCloseIco.png" alt="상담하기 팝업 닫기 버튼">
          </div>
      </div>
      <div class="temp v_scroll Scrollable">
        <div class="wrap1">
          <div class="btnWrap">
            <div class="btn consultBtn">
              <div class="off">
                <div class="icon"></div>
              </div>
              <div class="on" style="left: 100px;">
                <div class="icon"></div>
              </div>
            </div>
            <div class="btn talkBtn ga_side_talk">
              <div class="off ga_side_talk">
                <div class="icon ga_side_talk"></div>
              </div>
              <div class="on ga_side_talk" style="left: 100px;">
                <div class="icon ga_side_talk"></div>
              </div>
            </div>
            <div class="btn boardBtn">
              <div class="off">
                <div class="icon"></div>
              </div>
              <div class="on" style="left: 100px;">
                <div class="icon"></div>
              </div>
            </div>
            <div class="btn mailBtn">
              <div class="off">
                <div class="icon"></div>
              </div>
              <div class="on" style="left: 100px;">
                <div class="icon"></div>
              </div>
            </div>
            <div class="btn youtubeBtn ga_side_youtube">
              <div class="off ga_side_youtube">
                <div class="icon ga_side_youtube"></div>
              </div>
              <div class="on ga_side_youtube" style="left: 100px;">
                <div class="icon ga_side_youtube"></div>
              </div>
            </div>
          </div>
          <div class="notBtn logoBtn"></div>
          </div>
        </div>
        <div class="wrap2">
          <div class="ApplyBoxWrap">
            <div class="ApplyBox">
              <div class="boxInner">
                <div class="tit">
                  상세한 지식재산권 상담을<br />
                  도와드리겠습니다.
                </div>
                <div class="sub">
                  상담이 필요한 분야와 연락처를 남겨주세요.
                  <span>*상담에 비용이 발생하지 않습니다.</span>
                </div>
                <form action="">
                  <ul>
                    <li>
                      <select class="ipt" id="category" name="selectCategory">
                      <option value="">상담분야를 선택해주세요.</option>
                      <option value="특허">특허</option>
                      <option value="상표">상표</option>
                      <option value="디자인">디자인</option>
                      <option value="실용신안">실용신안</option>
                      <option value="기타">기타</option>
                      </select>
                    </li>
                    <li>
                      <label for="phone"><span>[필수]</span> 연락처를 입력해주세요.</label>
                      <input type="tel" id="phone" class="ipt" name="phone" placeholder="휴대폰 번호를 입력해주세요.">
                    </li>
                  </ul>
                  <div class="agreeBoxWrap">
                    <label class="agreeBox">
                      <input type="checkbox" name="personalAgree">
                      <div class="txt">개인정보 수집 동의&nbsp;<button type="button" class="popupBtn personalBtn">[보기]</button></div>
                    </label>
                    <label class="agreeBox">
                      <input type="checkbox" name="marketingAgree">
                      <div class="txt">(선택) 지식재산 소식 제공 및 뉴스레터 수신 동의&nbsp;<button type="button" class="popupBtn marketingBtn">[보기]</button></div>
                    </label>
                  </div>
                  <div class="btnWrap">
                    <button type="button" class="submitBtn ga_side_quick">신청하기</button>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
</section>

<!-- Mobile 하단 상담 신청하기 { -->
<section class="applyMoSec">
  <div class="inner">
    <button type="button" class="applyShowBtn">
      <div class="txt">빠른상담 신청하기 <img src="/assets/img/common/rightBlueArrow.svg" alt="화살표" class="icon" /></div>
      <img src="/assets/img/common/smallCloseBtn.svg" class="clostBtn" alt="닫기" />
    </button>

    <article class="applyArti">
      <div class="btnBox">
        <button type="button" class="closeBtn"><img src="/assets/img/common/ph_x-thin.png" alt="닫기" class="icon" /></button>
      </div>

      <form>
        <ul class="formList">
          <li>
            <div class="item">
              <label class="label" for="Mo_Category">분야</label>
              <select class="ipt" name="selectCategory" id="Mo_Category">
                <option value="">선택</option>
                <option value="특허/실용신안">특허/실용신안</option>
                <option value="상표">상표</option>
                <option value="디자인">디자인</option>
                <option value="저작권">저작권</option>
                <option value="해외">해외</option>
                <option value="기타">기타</option>
              </select>
            </div>
          </li>
          <li>
            <div class="item">
              <div class="label">이름</div>
              <input type="text" placeholder="이름입력" name="name" class="ipt" id="Mo_Name" />
            </div>
          </li>
          <li class="full">
            <div class="item">
              <div class="label">휴대폰 번호</div>
              <input type="tel" placeholder="휴대폰번호 입력" name="phone" class="ipt" id="Mo_Tel" />
            </div>
          </li>
        </ul>
        <div class="checkboxLabelWrap">
          <label class="checkboxLabel">
            <input type="checkbox" name="personalAgree" id="Mo_personalAgree">
            <div class="txt">개인정보 수집 동의&nbsp;<button type="button" class="popupBtn personalBtn">[보기]</button></div>
          </label>
          <label class="checkboxLabel">
            <input type="checkbox" name="marketingAgree">
            <div class="txt">(선택) 지식재산 소식 제공 및 뉴스레터 수신 동의&nbsp;<button type="button" class="popupBtn marketingBtn">[보기]</button></div>
          </label>
        </div>
        <div class="btn_wrap">
          <button type="button" class="submitBtn">상담신청하기</button>
        </div>
      </form>
    </article>
  </div>
</section>
<!-- }-->

<!--  PC 하단 상담 신청하기 { -->
<!-- <section class="applyPcSec">
  <div class="inner">
    <form>
      <label>
        <input type="checkbox" />
        <div class="txt">개인정보 수집 및 이용목적 동의</div>
      </label>
      <article class="applyBox">
        <ul class="iptList">
          <li>
            <div class="item">
              <label class="label" style="font-size:20px;margin-bottom:0px;" for="state">분야</label>
              <select class="ipt" id="state" name="selectCategory">
                <option value="">선택</option>
                <option value="특허/실용신안">특허/실용신안</option>
                <option value="상표">상표</option>
                <option value="디자인">디자인</option>
                <option value="저작권">저작권</option>
                <option value="해외">해외</option>
                <option value="기타">기타</option>
              </select>
            </div>
          </li>
          <li>
            <div class="item">
              <div class="label">이름</div>
              <input type="text" class="ipt" name="name" placeholder="이름입력">
            </div>
          </li>
          <li>
            <div class="item">
              <div class="label">휴대폰 번호</div>
              <input type="tel" class="ipt" name="phone" placeholder="휴대폰 번호">
            </div>
          </li>
          <li class="btnLi">
            <button type="button" class="submitBtn">상담신청하기 <img src="/assets/img/common/applyBtnArrow.svg" alt="화살표" class="icon" /></button>
          </li>
        </ul>
      </article>
    </form>
  </div>
</section> -->
<!-- }-->

<!-- [메인] 방문상담 신청하기 { -->
<section class="popup visitApplyComplete">
  <div class="inner">
    <img src="/assets/img/main/visitArti/visit_check_ico.png" alt="visit_check_ico">
    <div class="popupTit">
      감사합니다<br />
      방문상담 신청이 접수되었어요.</div>
    <div class="popupSubtit">
      예약날짜: <span class="date">0000년 00월 00일</span><br />
      시간: <span class="time">0:00</span>
    </div>
    <button class="btn popup_close_btn">확인</button>
  </div>
</section>

<!-- [공통] 개인정보 처리방침 팝업 { -->
<section class="privacyPopupSec" id="privacyPopup">
  <div class="inner">
    <article class="popupContentArti">
      <div class="titleBox">
        <p class="txt">개인정보처리방침</p>
        <button type="button" class="closeBtn"><img src="/assets/img/common/popupCloseBtn.svg" alt="닫기" class="icon" /></button>
      </div>
      <div class="contentBox">
        
        <div class="contentBoxInner">
          특허법인 테헤란(이하 ‘회사’라 한다)은 개인정보 보호법 제30조에 따라 정보주체의 개인정보를 보호하고 이와 관련한 고충을 신속하고 원활하게 처리할 수 있도록 하기 위하여 다음과 같이 개인정보 처리지침을 수립·공개합니다. <br /><br />

          <b>제1조 (개인정보의 처리목적)</b><br />
          회사는 다음의 목적을 위하여 개인정보를 처리합니다. 처리하고 있는 개인정보는 다음의 목적 이외의 용도로는 이용되지 않으며, 이용 목적이 변경되는 경우에는 개인정보보호법 제18조에 따라 별도의 동의를 받는 등 필요한 조치를 이행할 예정입니다.<br /><br />

          1. 홈페이지 회원 가입 및 관리<br />
          회원 가입의사 확인, 회원제 서비스 제공에 따른 본인 식별·인증, 회원자격 유지·관리, 제한적 본인확인제 시행에 따른 본인확인, 서비스 부정이용 방지, 만 14세 미만 아동의 개인정보처리시 법정대리인의 동의여부 확인, 각종 고지·통지, 고충처리 등을 목적으로 개인정보를 처리합니다.<br /><br />

          2. 재화 또는 서비스 제공<br />
          물품배송, 서비스 제공, 계약서·청구서 발송, 콘텐츠 제공, 맞춤서비스 제공, 본인인증, 연령인증, 요금결제,정산, 채권추심 등을 목적으로 개인정보를 처리합니다.<br /><br />

          3. 고충처리<br />
          민원인의 신원 확인, 민원사항 확인, 사실조사를 위한 연락·통지, 처리결과 통보 등의 목적으로 개인정보를 처리합니다.<br /><br />

          <b>제2조 (개인정보의 처리 및 보유기간)</b><br />
          ① 회사는 법령에 따른 개인정보 보유·이용기간 또는 정보주체로부터 개인정보를 수집시에 동의받은 개인정보 보유·이용기간 내에서 개인정보를 처리·보유합니다.<br />
          ② 각각의 개인정보 처리 및 보유 기간은 다음과 같습니다.<br /><br />

          1. 홈페이지 회원 가입 및 관리 : 사업자/단체 홈페이지 탈퇴시까지<br />
          다만, 다음의 사유에 해당하는 경우에는 해당 사유 종료시까지<br />
          1) 관계 법령 위반에 따른 수사·조사 등이 진행중인 경우에는 해당 수사·조사 종료시까지<br />
          2) 홈페이지 이용에 따른 채권·채무관계 잔존시에는 해당 채권·채무관계 정산시까지<br /><br />

          <b>제5조(정보주체의 권리·의무 및 행사방법)</b><br />

          ① 정보주체는 회사에 대해 언제든지 다음 각 호의 개인정보 보호 관련 권리를 행사할 수 있습니다.<br />
          1. 개인정보 열람요구<br />
          2. 오류 등이 있을 경우 정정 요구<br />
          3. 삭제요구<br />
          4. 처리정지 요구<br />
          ② 제1항에 따른 권리 행사는 회사에 대해 서면, 전화, 전자우편, 모사전송(FAX) 등을 통하여 하실 수 있으며 회사는 이에 대해 지체없이 조치하겠습니다.<br />
          ③ 정보주체가 개인정보의 오류 등에 대한 정정 또는 삭제를 요구한 경우에는 회사는 정정 또는 삭제를 완료할 때까지 당해 개인정보를 이용하거나 제공하지 않습니다.<br />
          ④ 제1항에 따른 권리 행사는 정보주체의 법정대리인이나 위임을 받은 자 등 대리인을 통하여 하실 수 있습니다. 이 경우 개인정보 보호법 시행규칙 별지 제11호 서식에 따른 위임장을 제출하셔야 합니다.<br />
          ⑤ 정보주체는 개인정보 보호법 등 관계법령을 위반하여 회사가 처리하고 있는 정보주체 본인이나 타인의 개인정보 및 사생활을 침해하여서는 아니됩니다.<br /><br />


          <b>제6조(처리하는 개인정보 항목)</b><br />
          회사는 다음의 개인정보 항목을 처리하고 있습니다.<br /><br />

          1. 인터넷 서비스 이용과정에서 아래 개인정보 항목이 자동으로 생성되어 수집될 수 있습니다.<br />
          IP주소, 쿠키, MAC주소, 서비스 이용기록, 방문기록, 불량 이용기록 등<br /><br />

          <b>제7조(개인정보의 파기)</b><br />
          ① 회사는 개인정보 보유기간의 경과, 처리목적 달성 등 개인정보가 불필요하게 되었을 때에는 지체없이 해당 개인정보를 파기합니다.<br />
          ② 정보주체로부터 동의받은 개인정보 보유기간이 경과하거나 처리목적이 달성되었음에도 불구하고 다른 법령에 따라 개인정보를 계속 보존하여야 하는 경우에는, 해당 개인정보를 별도의 데이터베이스(DB)로 옮기거나 보관장소를 달리하여 보존합니다.<br />
          ③ 개인정보 파기의 절차 및 방법은 다음과 같습니다.<br />
          1. 파기절차<br />
          회사는 파기 사유가 발생한 개인정보를 선정하고, 회사의 개인정보 보호책임자의 승인을 받아 개인정보를 파기합니다.<br />
          2. 파기방법<br />
          회사는 전자적 파일 형태로 기록·저장된 개인정보는 기록을 재생할 수 없도록 로우레밸포멧(Low Level Format) 등의 방법을 이용하여 파기하며, 종이 문서에 기록·저장된 개인정보는 분쇄기로 분쇄하거나 소각하여 파기합니다.<br /><br />

          <b>제8조(개인정보의 안전성 확보조치)</b><br />
          회사는 개인정보의 안전성 확보를 위해 다음과 같은 조치를 취하고 있습니다.<br />
          1. 관리적 조치 : 내부관리계획 수립·시행, 정기적 직원 교육 등<br />
          2. 기술적 조치 : 개인정보처리시스템 등의 접근권한 관리, 접근통제시스템 설치, 고유식별정보 등의 암호화, 보안프로그램 설치<br />
          3. 물리적 조치 : 전산실, 자료보관실 등의 접근통제<br /><br />

          <b>제9조(개인정보 자동 수집 장치의 설치·운영 및 거부에 관한 사항)</b><br />
          ① 회사는 이용자에게 개별적인 맞춤서비스를 제공하기 위해 이용정보를 저장하고 수시로 불러오는 ‘쿠키(cookie)’를 사용합니다.<br />
          ② 쿠키는 웹사이트를 운영하는데 이용되는 서버(http)가 이용자의 컴퓨터 브라우저에게 보내는 소량의 정보이며 이용자들의 PC 컴퓨터내의 하드디스크에 저장되기도 합니다.<br />
          가. 쿠키의 사용목적: 이용자가 방문한 각 서비스와 웹 사이트들에 대한 방문 및 이용형태, 인기 검색어, 보안접속 여부, 등을 파악하여 이용자에게 최적화된 정보 제공을 위해
          사용됩니다.<br />
          나. 쿠키의 설치·운영 및 거부 : 웹브라우저 상단의 도구&gt;인터넷 옵션&gt;개인정보 메뉴의 옵션 설정을 통해 쿠키 저장을 거부 할 수 있습니다.<br />
          다. 쿠키 저장을 거부할 경우 맞춤형 서비스 이용에 어려움이 발생할 수 있습니다.<br /><br />

          <b>제10조(개인정보 보호책임자)</b><br />
          ① 회사는 개인정보 처리에 관한 업무를 총괄해서 책임지고, 개인정보 처리와 관련한 정보주체의 불만처리 및 피해구제 등을 위하여 아래와 같이 개인정보 보호책임자를 지정하고 있습니다.<br /><br />

          ▶ 개인정보 보호책임자<br />
          성명 : 백상희<br />
          직책 : 대표<br />
          연락처 : &lt;전화번호&gt;010-8000-6240, &lt;이메일&gt;kikak_2000@hanmail.net, &lt;팩스번호&gt;02-6499-3678<br />
          ※ 개인정보 보호 담당부서로 연결됩니다.<br /><br />

          ▶ 개인정보 보호 담당부서<br />
          부서명 : 마케팅부서<br />
          담당자 : 백상희<br />
          연락처 : &lt;전화번호&gt;010-8000-6240, &lt;이메일&gt;bsh@in-consulting.co.kr, &lt;팩스번호&gt;02-6499-3678<br /><br />

          ② 정보주체께서는 회사의 서비스(또는 사업)을 이용하시면서 발생한 모든 개인정보 보호 관련 문의, 불만처리, 피해구제 등에 관한 사항을 개인정보 보호책임자 및 담당부서로 문의하실 수 있습니다. 회사는 정보주체의 문의에 대해 지체없이 답변 및 처리해드릴 것입니다.<br /><br />

          <b>제11조(개인정보 열람청구)</b><br />
          정보주체는 개인정보 보호법 제35조에 따른 개인정보의 열람 청구를 아래의 부서에 할 수 있습니다. 회사는 정보주체의 개인정보 열람청구가 신속하게 처리되도록 노력하겠습니다.<br /><br />

          ▶ 개인정보 열람청구 접수·처리 부서<br />
          부서명 : 마케팅부서<br />
          담당자 : 백상희<br />
          연락처 : &lt;전화번호&gt;010-8000-6240, &lt;이메일&gt;bsh@in-consulting.co.kr, &lt;팩스번호&gt;02-6499-3678<br /><br />

          <b>제12조(권익침해 구제방법)</b><br />
          정보주체는 아래의 기관에 대해 개인정보 침해에 대한 피해구제, 상담 등을 문의하실 수 있습니다.<br /><br />

          ▶ 개인정보 침해신고센터 (한국인터넷진흥원 운영)<br />
          - 소관업무 : 개인정보 침해사실 신고, 상담 신청<br />
          - 홈페이지 : privacy.kisa.or.kr<br />
          - 전화 : (국번없이) 118<br />
          - 주소 : (58324) 전남 나주시 진흥길 9(빛가람동 301-2) 3층 개인정보침해신고센터<br /><br />

          ▶ 개인정보 분쟁조정위원회<br />
          - 소관업무 : 개인정보 분쟁조정신청, 집단분쟁조정 (민사적 해결)<br />
          - 홈페이지 : www.kopico.go.kr<br />
          - 전화 : (국번없이) 1833-6972<br />
          - 주소 : (03171)서울특별시 종로구 세종대로 209 정부서울청사 4층<br /><br />

          ▶ 대검찰청 사이버범죄수사단 : 02-3480-3573 (www.spo.go.kr)<br />
          ▶ 경찰청 사이버안전국 : 182 (http://cyberbureau.police.go.kr)<br /><br />


          <b>제13조(개인정보 처리방침 시행 및 변경)</b><br />
          이 개인정보 처리방침은 2020. 06. 01부터 적용됩니다.
        </div>
      </div>
    </article>
  </div>
</section>
<!-- } 개인정보 처리방침 팝업 끝-->

<!-- [공통] 면책공고 팝업 { -->
<section class="privacyPopupSec" id="termsPopup">
  <div class="inner">
    <article class="popupContentArti">
      <div class="titleBox">
        <p class="txt">면책공고</p>
        <button type="button" class="closeBtn"><img src="/assets/img/common/popupCloseBtn.svg" alt="닫기" class="icon" /></button>
      </div>
      <div class="contentBox">
        <div class="contentBoxInner">
          본 웹사이트에 등록된 모든 내용은 일반적인 정보를 제공할 목적으로 이해를 돕기 위해 작성된 내용입니다.<br />
          법률적인 자문이나 제안을 위한 것이 아니며 특정한 사안에 관한 법률적인 자문 또는 해석을 제공하지 않음을 알립니다.<br />
          본 웹사이트에 게재된 자료상의 견해는 저자들의 개인적인 의견이며 당 법인의 공식적인 견해가 아님을 유념하시기 바랍니다.<br />
          웹사이트에서 취득한 정보로 인해 문제가 발생하여 직·간접적으로 손해를 입었다 하더라도 당 법인 및 구성원 전원은 어떠한 법적 책임도 지지 않음을 사전에 알려 드립니다.<br />
          모든 사건은 상황과 시기에 따라 다르게 해석될 수 있기에, 웹사이트에서 제공하는 정보에 기반하여 판단을 내리기에 앞서 반드시 당 법인에 법률적 자문을 구하시기 바랍니다.<br />
          법령은 시간이 경과함에 따라 변화하므로 콘텐츠 작성일 이후 제·개정되어 내용이 일치하지 않을 수 있습니다.<br />
          개별적인 사안에 빠른 상담이 필요하다면, 당 법인에 문의를 주시기 바랍니다. 또한, 본 웹사이트에 게재된 내용들은 당 법인의 사전동의 없이 어떠한 형태로도 복사, 배포, 재생될 수 없음을 알립니다.
        </div>
      </div>
    </article>
  </div>
</section>
<!-- } 면책공고 팝업 끝-->

<!-- [공통] 개인정보 수집 동의 팝업 { -->
<section class="privacyPopupSec" id="personalPopup">
  <div class="inner">
    <article class="popupContentArti">
      <div class="titleBox">
        <p class="txt">개인정보 수집 동의</p>
        <button type="button" class="closeBtn"><img src="/assets/img/common/popupCloseBtn.svg" alt="닫기" class="icon" /></button>
      </div>
      <div class="contentBox">
        <div class="contentBoxInner">
          <?php
          echo nl2br(session()->get('agree')['agree1']);
          ?>
        </div>
      </div>
    </article>
  </div>
</section>
<!-- } 개인정보 수집 동의 팝업 끝-->

<!-- [공통] 지식재산 소식 제공 및 뉴스레터 수신 동의 팝업 { -->
<section class="privacyPopupSec" id="marketingPopup">
  <div class="inner">
    <article class="popupContentArti">
      <div class="titleBox">
        <p class="txt">지식재산 소식 제공 및<br class="mBr" /> 뉴스레터 수신 동의</p>
        <button type="button" class="closeBtn"><img src="/assets/img/common/popupCloseBtn.svg" alt="닫기" class="icon" /></button>
      </div>
      <div class="contentBox">
        <div class="contentBoxInner">
          <?php
            echo nl2br(session()->get('agree')['agree2']);
          ?>
        </div>
      </div>
    </article>
  </div>
</section>
<!-- } 지식재산 소식 제공 및 뉴스레터 수신 동의 팝업 끝-->

<!-- [공통] 푸터 시작 { -->
<footer>
  <div class="footerPC">
    <div class="inner">
      <div class="topWrap">
        <div class="logoWrap">
          <img src="/assets/img/common/footer_logo_renew.png" alt="TEHERAN, 특허법인 테헤란" class="logo" />
        </div>
        <div class="linkWrap">
          <ul>
            <li class="clickToDownload"><a href="/assets/broshure.pdf" download="특허법인 테헤란 회사소개서" role="button">회사소개서 다운로드</a></li>
						<li class="goToConsult"><a href="/#visit">상담신청 하기</a></li>
						<li class="goToSite">
              테헤란 패밀리사이트 <img class="ico" src="/assets/img/common/ftSiteIco.svg" alt="ftSiteIco">
							<div class="siteListWrap">
								<ul>
									<li><a href="https://thr-pat.co.kr">특허법인 테헤란</a></li>
									<li><a href="https://thr-tax.co.kr" target="_blank">세무법인 테헤란</a></li>
								</ul>
							</div>
						</li>
					</ul>
        </div>
      </div>
      <div class="btmWrap">
        <div class="leftBox">
          <div class="contentBox">
            <div class="title">대표변리사</div>
            <div class="content">윤웅채 백상희</div>
          </div>
          <div class="contentBox">
            <div class="title">광고 책임변리사</div>
            <div class="content">백상희</div>
          </div>
          <div class="etcBox">
            <div class="popupBtnBox">
              <button type="button" class="popupBtn termsBtn">면책공고</button>
              <button type="button" class="popupBtn privacyBtn">개인정보 처리방침</button>
            </div>
            <div class="copyRightBox">
              Copyright ⓒ 2019-2025 특허법인 테헤란. All rights reserved.
            </div>
          </div>
        </div>
        <div class="centerBox">
          <div class="row">
            <div class="contentBox">
              <div class="title">대표번호</div>
              <div class="content">1800-8230</div>
            </div>
            <div class="contentBox">
              <div class="title">사업자 등록번호</div>
              <div class="content">724-87-01028</div>
            </div>
          </div>
          <div class="row">
            <div class="contentBox">
              <div class="title">FAX</div>
              <div class="content">02-2038-0879</div>
            </div>
            <div class="contentBox">
              <div class="title">E-mail</div>
              <div class="content">patent@thrlaw.co.kr</div>
            </div>
          </div>
          <div class="row">
            <div class="contentBox">
              <div class="title">주소</div>
              <div class="content">서울특별시 강남구 테헤란로 420, 9층 (KT 선릉타워 West)</div>
            </div>
          </div>
        </div>
        <div class="rightBox">
          <div class="menuList">
            <ul class="menu">
              <li><a href="/professional">전문가소개</a></li>
              <li><a href="/story">고객후기</a></li>
              <li><a href="/cases">업무사례</a></li>
              <li><a href="/columns">칼럼</a></li>
              <li><a href="/counseling/board">게시판문의</a></li>
              <li><a href="/news">소식</a></li>
              <li><a href="/project">지원사업</a></li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="footerMo">
    <div class="inner">
      <div class="topWrap">
        <div class="logoWrap">
          <img src="/assets/img/common/footer_logo_renew.png" alt="TEHERAN, 특허법인 테헤란" class="logo" />
        </div>
        <div class="linkWrap">
          <ul>
            <li class="goToConsult"><a href="/#visit">상담신청 하기</a></li>
            <li class="goToSite">
              테헤란 패밀리사이트 <img class="ico" src="/assets/img/common/ftSiteIco.svg" alt="ftSiteIco">
              <div class="siteListWrap">
                <ul>
                  <li><a href="https://thr-pat.co.kr">특허법인 테헤란</a></li>
                  <li><a href="https://thr-tax.co.kr" target="_blank">세무법인 테헤란</a></li>
                </ul>
              </div>
            </li>
          </ul>
        </div>
      </div>
      <div class="centerBox">
        <div class="contentBox">
          <div class="title">대표변리사</div>
          <div class="content">윤웅채 백상희</div>
        </div>
        <div class="contentBox">
          <div class="title">광고책임변리사</div>
          <div class="content">백상희</div>
        </div>
        <div class="contentBox">
          <div class="title">대표번호</div>
          <div class="content">1800-8230</div>
        </div>
        <div class="contentBox">
          <div class="title">사업자 번호</div>
          <div class="content">724-87-01028</div>
        </div>
        <div class="contentBox">
          <div class="title">FAX</div>
          <div class="content">02-2038-0879</div>
        </div>
        <div class="contentBox">
          <div class="title">E-mail</div>
          <div class="content">patent@thrlaw.co.kr</div>
        </div>
        <div class="contentBox">
          <div class="title">주소</div>
          <div class="content">서울특별시 강남구 테헤란로 420, 9층 (KT 선릉타워 West)</div>
        </div>
      </div>
      <div class="rightBox">
        <div class="menuList">
          <ul class="menu">
            <li><a href="/professional">전문가소개</a></li>
            <li><a href="/story">고객후기</a></li>
            <li><a href="/cases">업무사례</a></li>
            <li><a href="/columns">칼럼</a></li>
            <li><a href="/counseling/board">게시판문의</a></li>
            <li><a href="/news">소식</a></li>
            <li><a href="/project">지원사업</a></li>
          </ul>
        </div>
      </div>
      <div class="downloadBox">
        <a href="/assets/broshure.pdf" download="특허법인 테헤란 회사소개서" role="button">회사소개서 다운로드</a>
      </div>
      <div class="etcBox">
        <div class="popupBtnBox">
          <button type="button" class="popupBtn privacyBtn">개인정보 처리방침</button>
          <button type="button" class="popupBtn termsBtn">면책공고</button>
        </div>
        <div class="copyRightBox">
          Copyright ⓒ 2019-2025 특허법인 테헤란. All rights reserved.
        </div>
      </div>
    </div>
  </div>
</footer>
<!-- } 푸터 끝 -->

<!-- AceCounter Log Gathering Script V.8.0.AMZ2019080601 -->
<script language='javascript'>
	var _AceGID=(function(){var Inf=['gtp7.acecounter.com','8080','AH2A44667583806','AW','0','NaPm,Ncisy','ALL','0']; var _CI=(!_AceGID)?[]:_AceGID.val;var _N=0;var _T=new Image(0,0);if(_CI.join('.').indexOf(Inf[3])<0){ _T.src ="https://"+ Inf[0] +'/?cookie'; _CI.push(Inf);  _N=_CI.length;} return {o: _N,val:_CI};})();
	var _AceCounter=(function(){var G=_AceGID;var _sc=document.createElement('script');var _sm=document.getElementsByTagName('script')[0];if(G.o!=0){var _A=G.val[G.o-1];var _G=(_A[0]).substr(0,_A[0].indexOf('.'));var _C=(_A[7]!='0')?(_A[2]):_A[3];var _U=(_A[5]).replace(/\,/g,'_');_sc.src='https:'+'//cr.acecounter.com/Web/AceCounter_'+_C+'.js?gc='+_A[2]+'&py='+_A[4]+'&gd='+_G+'&gp='+_A[1]+'&up='+_U+'&rd='+(new Date().getTime());_sm.parentNode.insertBefore(_sc,_sm);return _sc.src;}})();
</script>
<!-- AceCounter Log Gathering Script End -->

<!-- 리포트2.0 로그분석코드 시작 -->
<script type="text/javascript">
  var sTime = new Date().getTime();
  (function(i,s,o,g,r,a,m){i['webObject']=g;i['webUid']=r;a=s.createElement(o),m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)})
  (window,document,'script','//thrlaw3.weblog.cafe24.com/weblog.js?v='+sTime,'thrlaw3_1');
</script>
<!-- 리포트2.0 로그분석코드 완료 -->

<script>
	var smipHomeCode = "smip20240822S3362T0966";
</script>
<script src="//xn--hz2b15nw6b91c77vqrd.com/smip_log.js"></script>
<noscript><img src="//xn--hz2b15nw6b91c77vqrd.com/ip_collect/insert.html?smipHomeCode=smip20240822S3362T0966" style="display:none;width:0;height:0;" referrerpolicy="unsafe-url"></noscript>
<!--// smip End //--> 

</body>

</html>