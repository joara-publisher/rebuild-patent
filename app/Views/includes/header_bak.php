<?php 
if (isset($_COOKIE)) {
  foreach ($_COOKIE as $key => $value) {
      if (strpos($key, 'smipChkCookieSmip') === 0) {
          setcookie($key, '', time() - 3600, '/');
          unset($_COOKIE[$key]);
      }
  }
}
?>
<!DOCTYPE html>
<html lang="ko">

<head>
  <!-- BORAWARE LOG SCRIPT. -->
	<script type="text/javascript">
	var protect_id = 'f873';
	</script>
	<script async type="text/javascript" src="//script.boraware.kr/protect_script_v2.js"></script>
	<!-- END OF BORAWARE LOG SCRIPT -->

  <!-- Google tag (gtag.js) -->
  <script async src="https://www.googletagmanager.com/gtag/js?id=G-TJ4V7GXFCK"></script>
  <script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());

    gtag('config', 'G-TJ4V7GXFCK');
  </script>

	<!-- Google Tag Manager -->
  <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
  new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
  j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
  'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
  })(window,document,'script','dataLayer','GTM-N6VC3SLL');</script>
  <!-- End Google Tag Manager -->
  
  <meta charset="utf-8">
  <meta name="naver-site-verification" content="fec0b98120acf0abd4a2d23f26aeab8ecfa4f1d9" />
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>특허법인 테헤란</title>
  <meta name="title" content="특허법인 테헤란" />
  <meta name="keywords" content="특허권, 상표권, 디자인권, 실용신안, 특허출원, 상표출원, 디자인출원, 특허등록, 상표등록, 디자인등록, 지식재산권, 저작권, 변리사, 특허사무소, 특허법인, 특허청">
  <meta name="description" content="특허법인 테헤란 공식 홈페이지입니다.">
  <meta property="og:title" content="특허법인 테헤란" />
  <meta property="og:keywords" content="특허권, 상표권, 디자인권, 실용신안, 특허출원, 상표출원, 디자인출원, 특허등록, 상표등록, 디자인등록, 지식재산권, 저작권, 변리사, 특허사무소, 특허법인, 특허청" />
  <meta property="og:description" content="특허법인 테헤란 공식 홈페이지입니다." />
  <meta property="og:image" content="/assets/img/common/og_image_title.jpg" />
  <meta property="og:locale" content="ko_KR">
  <link rel="apple-touch-icon" href="/assets/img/common/favi.png" />
	<link rel="shortcut icon" href="/assets/img/common/favi.png" type="image/x-icon">

  <meta name="naver-site-verification" content="4d9ba782f3aa9b5a2167b0529a53431104f867f1" />

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>

  <!--스타일-->
  <link rel="stylesheet" href="/assets/style/default.css">
  <link rel="stylesheet" href="/assets/style/font.css">
  <link rel="stylesheet" href="/assets/style/style.css">
  <link rel="stylesheet" href="/assets/style/swiper.min.css">
  <link rel="stylesheet" href="/assets/style/animation.css">
  <link rel="stylesheet" href="/assets/style/sweetalert2.min.css">
  <link rel="stylesheet" href="//cdn.jsdelivr.net/npm/xeicon@2.3.3/xeicon.min.css">

  <!-- 산돌 폰트 -->
  <link rel="stylesheet" href="https://qns2c88qif.execute-api.ap-northeast-2.amazonaws.com/v1/api/css/drop_fontstream_css/?sid=gAAAAABnPE0XjHoVRf3-VIs_sDFbwfO0LBBTa8ft1Lpj8sigsTcbbWChUFfiFc8CC9rIfJtHUHw_95SU6ezHQc8Yppz8vnTLYzdVTT12WefeibWL0EiaF6505AtXtQCfjsOWkCCDgspas7COlko7vyBpRLdquZkE6PPeVJMHOCRGs1TNN4pEscBzKTQ2kA3yeSTVbdk3quTzKNje1u2oLvW3eb8HPQRATZc3IMdoo9qcUVTBmNUxLHjRvdPAtHr0jvNTVpNfXVSb" charset="utf-8"></link>

  <!--스크립트-->
  <script type="text/javascript" src="/assets/script/jquery-3.7.1.min.js"></script>
  <script type="text/javascript" src="/assets/script/script.js"></script>
  <script type="text/javascript" src="/assets/script/swiper.min.js"></script>
  <script type="text/javascript" src="/assets/script/sweetalert2.all.min.js"></script>
  <script type="text/javascript" src="/assets/script/gsap.min.js"></script>
  <script type="text/javascript" src="/assets/script/melon.js"></script>
  <script type="text/javascript" src="/assets/script/jquery.metadata.js"></script>

  <!--datepicker-->
  <link rel="stylesheet" href="https://code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>

  <script src="https://cdnjs.cloudflare.com/ajax/libs/three.js/r128/three.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/three@0.128.0/examples/js/loaders/GLTFLoader.js"></script>

  <!-- 접속한 기기가 태블릿인지 체크 -->
  <script src="/assets/script/mobile-detect.min.js"></script>
  <script>
    let connectionDevice = new MobileDetect(navigator.userAgent);

    if (connectionDevice.tablet()) {
      // viewport 설정하여 가로 크기 모바일로 고정
      let meta = document.createElement('meta');
      meta.name = 'viewport';
      meta.content = 'width=580';
      document.getElementsByTagName('head')[0].appendChild(meta);
    }
  </script>
</head>

<body>
  <!-- Google Tag Manager (noscript) -->
  <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-N6VC3SLL"
  height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
  <!-- End Google Tag Manager (noscript) -->
  
  <!-- [공통] 헤더 시작 { -->
  <header>
    <div class="inner">
      <div class="logoBox">
        <a href="/home">
          <img src="/assets/img/common/logo.png" alt="특허법인 테헤란, TEHERAN" class="logo" />
        </a>
      </div>
      <section class="topMenuSec">
        <div class="menuListWrap">
          <ul class="menuList">
            <!--메인에서만 scroll_move 클래스 추가 -->
            <li class="<?php echo ($menu=='professional')? 'active':'' ;?>">
              <a href="/professional">
                <div class="item">
                  <p class="t2">전문가소개</p>
                </div>
              </a>
            </li>
            <li class="<?php echo ($menu=='story')? 'active':'' ;?>">
              <a href="/story">
                <div class="item">
                  <p class="t2">고객후기</p>
                </div>
              </a>
            </li>
            <li class="<?php echo ($menu=='cases')? 'active':'' ;?>">
              <a href="/cases">
                <div class="item">
                  <p class="t2">업무사례</p>
                </div>
              </a>
            </li>
            <li class="<?php echo ($menu=='columns')? 'active':'' ;?>">
              <a href="/columns">
                <div class="item">
                  <p class="t2">칼럼</p>
                </div>
              </a>
            </li>
            <li class="<?php echo ($menu=='board')? 'active':'' ;?>">
              <a href="/counseling/board">
                <div class="item">
                  <p class="t2">게시판문의</p>
                </div>
              </a>
            </li>
            <li class="<?php echo ($menu=='news')? 'active':'' ;?>">
              <a href="/news">
                <div class="item">
                  <p class="t2">소식</p>
                </div>
              </a>
            </li>
            <li class="<?php echo ($menu=='project')? 'active':'' ;?>">
              <a href="/project">
                <div class="item">
                  <p class="t2">지원사업</p>
                </div>
              </a>
            </li>
          </ul>
          <div class="btnWrap">
            <a href="tel:1800-8230" class="clickToCall ga_click_to_call_side">1800-8230</a>
          </div>
        </div>
      </section>
      <div class="btnBox">
        <button type="button" class="menuBtn">
          <img src="/assets/img/common/menuBtn.svg" alt="메뉴 버튼" class="icon open" />
          <img src="/assets/img/common/closeBtn.svg" alt="닫기 버튼" class="icon close" />
        </button>
      </div>
    </div>
  </header>
  <section class="mobileCloseBg"></section>
  <section class="rightMenuArti">
    <article class="menuSec">
      <div class="titleBox">
        <img src="/assets/img/common/white_logo.png" alt="특허법인 테헤란, TEHERAN" class="logo" />
        <button type="button" class="closeBtn"><img src="/assets/img/common/closeBtn.svg" alt="닫기" class="icon" /></button>
      </div>
      <ul class="menuList">
        <li>
          <a href="/professional" class="">
            <div class="item">
              <div class="txt">전문가소개</div>
              <img src="/assets/img/common/right-arrow.png" alt="바로가기" class="icon" />
            </div>
          </a>
        </li>
        <li>
          <a href="/story" class="">
            <div class="item">
              <div class="txt">고객후기</div>
              <img src="/assets/img/common/right-arrow.png" alt="바로가기" class="icon" />
            </div>
          </a>
        </li>
        <li>
          <a href="/cases" class="">
            <div class="item">
              <div class="txt">업무사례</div>
              <img src="/assets/img/common/right-arrow.png" alt="바로가기" class="icon" />
            </div>
          </a>
        </li>
        <li>
          <a href="/columns" class="">
            <div class="item">
              <div class="txt">칼럼</div>
              <img src="/assets/img/common/right-arrow.png" alt="바로가기" class="icon" />
            </div>
          </a>
        </li>
        <li>
          <a href="/counseling/board" class="">
            <div class="item">
              <div class="txt">게시판문의</div>
              <img src="/assets/img/common/right-arrow.png" alt="바로가기" class="icon" />
            </div>
          </a>
        </li>
        <li>
          <a href="/news" class="">
            <div class="item">
              <div class="txt">소식</div>
              <img src="/assets/img/common/right-arrow.png" alt="바로가기" class="icon" />
            </div>
          </a>
        </li>
        <li>
          <a href="/project" class="">
            <div class="item">
              <div class="txt">지원사업</div>
              <img src="/assets/img/common/right-arrow.png" alt="바로가기" class="icon" />
            </div>
          </a>
        </li>
      </ul>
      <div class="btnWrap">
        <a href="tel:1800-8230" class="clickToCall ga_click_to_call_side">1800-8230</a>
      </div>
    </article>
  </section>
  <!-- } 헤더 끝 -->