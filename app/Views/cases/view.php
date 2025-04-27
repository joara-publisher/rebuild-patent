<!-- 업무사례 상세 섹션 시작 { -->
<section class="sub sec_top">
  <article class="subContentArti ani">
    <div class="inner">
      <ul class="categoryBox">
        <li class="category">업무사례</li>
        <li class="date"><?= cu_conv_date($view['create_date'])?></li>
      </ul>
      <div class="titleBox">
        <span><?= $view['case_number'] ?></span>
      </div>
      <div class="contentBox"><!--가운데 정렬 원치 않을시, center클래스 지워주세요 -->
        <!-- 본문 내용 출력 -->
        <?php for ($i = 1; $i <= 5; $i++) { ?>
          <div class="cTitle ani" style="margin-bottom: 20px; font-size: 30px; font-weight: 600;"><?=$view['case_title'.$i]?></div>
          <div class="cContent ani" style="margin-bottom: 40px;"><?=$view['case_text'.$i]?></div>
        <?php } ?>
      </div>
      <div class="imgLinks ani02">
        <a href="/home#visit" class="goToApply" target="_blank" >상담신청 바로가기<img class="bottom_banner" src="/assets/img/sub/banChkIco.svg"></a>
        <a href="tel:1800-8230" class="clickToCall ga_roll_click_to_call">지금 바로 통화하기<img class="bottom_banner ga_roll_click_to_call" src="/assets/img/sub/banCallIco.svg"></a>
      </div>
    </div>
  </article>
  <?php if(!empty($view['name_ko'])){ ?>
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
  <?php } ?>
  <article class="emptyBox"></article>
</section>
<!-- } 업무사례 상세 섹션 끝-->