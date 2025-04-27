<!-- 소식 상세 섹션 시작 { -->
<section class="sub sec_top">
  <article class="subContentArti ani">
    <div class="inner">
      <ul class="categoryBox">
        <li class="category">소식</li>
        <li class="date"><?=cu_conv_dateYear($view['create_date'])?></li>
      </ul>
      <div class="titleBox">
      <?= $view['title'] ?>
      </div>
      <div class="contentBox"><!--가운데 정렬 원치 않을시, center클래스 지워주세요 -->
      <?= $view['contents'] ?>
      </div>
      <div class="imgLinks ani02" style="text-align:center;">
        <a href="/home#visit" class="goToApply" target="_blank">상담신청 바로가기<img class="bottom_banner" src="/assets/img/sub/banChkIco.svg"></a>
        <a href="tel:1800-8230" class="clickToCall ga_roll_click_to_call">지금 바로 통화하기<img class="bottom_banner ga_roll_click_to_call" src="/assets/img/sub/banCallIco.svg"></a>
        <!-- 기사 링크 필요 -->
        <a href="<?=$view['page_id']?>" class="goToLink" target="_blank">기사 바로가기<img class="bottom_banner" src="/assets/img/sub/banArticleIco.svg"></a>
      </div>
    </div>
  </article>
  <!-- <article class="profileArti ani">
    <div class="inner">
      <div class="halfBox">
        <button type="button" class="moreBtn"></button>
        <div class="imgBox pc exampleImg" style="background-image: url('');"></div>
        <div class="imgBox mo exampleImg" style="background-image: url('');"></div>
        <div class="contentList">
          <div class="leftBox">
            <div class="enName">PARK JIN U</div>
            <div class="krName">
              <div class="big">박진우</div>
              <div class="txt">대표 변호사</div>
            </div>
          </div>
          <div class="rightBox pc">
            <div class="produceBox">
              <div class="title">학력</div>
              <ul class="dotList">
                연세대학교 법학과 졸업<br>
                경희대학교 법학전문대학원 졸업              
              </ul>
            </div>
            <div class="produceBox">
              <div class="title">경력</div>
              <ul class="dotList">
                現) 법률사무소 영웅 대표변호사<br><br>
                前) 법무법인 대륜 수석변호사<br>
                前) 대법원 국선변호인<br>
                前) 법무법인 로엘<br>
                前) 법무법인 명천<br>
                前) 법무법인 이래              
              </ul>
            </div>
          </div>
        </div>
      </div>
      <div class="fullBox">
        <div class="contentList">
          <div class="rightBox">
            <div class="produceBox">
              <div class="title">학력</div>
              <ul class="dotList">
                연세대학교 법학과 졸업<br>
                경희대학교 법학전문대학원 졸업       
              </ul>
            </div>
            <div class="produceBox">
              <div class="title">경력</div>
              <ul class="dotList">
                現) 법률사무소 영웅 대표변호사<br><br>
                前) 법무법인 대륜 수석변호사<br>
                前) 대법원 국선변호인<br>
                前) 법무법인 로엘<br>
                前) 법무법인 명천<br>
                前) 법무법인 이래     
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
  </article> -->
  <article class="emptyBox"></article>
</section>
<!-- } 소식 상세 섹션 끝-->