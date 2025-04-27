<!-- 고객스토리 상세 섹션 시작 { -->
<section class="sub sec_top">
  <article class="subContentArti ani">
    <div class="inner">
      <ul class="categoryBox">
        <li class="category">고객후기</li>
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
      </div>
    </div>
  </article>
  <article class="emptyBox"></article>
</section>
<!-- } 고객스토리 상세 섹션 끝-->