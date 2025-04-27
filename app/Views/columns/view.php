<!-- 칼럼 상세 섹션 시작 { -->
<section class="sub sec_top">
  <article class="subContentArti ani">
    <div class="inner">
      <ul class="categoryBox">
        <li class="category">칼럼</li>
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
  <article class="profileArti">
    <div class="inner">
      <div class="halfBox">
        <button type="button" class="moreBtn"></button>
        <div class="imgBox pc exampleImg" style="background-image: url('<?= $view['expert_thumbnail'] ?>');"></div>
        <div class="imgBox mo exampleImg" style="background-image: url('<?= $view['expert_thumbnail'] ?>');"></div>
        <div class="contentList">
          <div class="leftBox">
            <div class="enName"><?= $view['name_en'] ?></div>
            <div class="krName">
              <div class="big"><?= $view['name_ko'] ?></div>
              <div class="txt"><?= $view['position'] ?></div>
            </div>
          </div>
          <div class="rightBox pc">
            <div class="produceBox">
              <div class="title">학력</div>
              <ul class="dotList">
              <?= nl2br($view['achievement']) ?>
              </ul>
            </div>
            <div class="produceBox">
              <div class="title">경력</div>
              <ul class="dotList">
              <?= nl2br($view['histories']) ?>
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
              <?= nl2br($view['achievement']) ?>
              </ul>
            </div>
            <div class="produceBox">
              <div class="title">경력</div>
              <ul class="dotList">
              <?= nl2br($view['histories']) ?>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
  </article>
  <article class="emptyBox"></article>
</section>
<!-- } 칼럼 상세 섹션 끝-->