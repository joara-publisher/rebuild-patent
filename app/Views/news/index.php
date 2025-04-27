<!-- 소식 섹션 시작 { -->
<section class="sub">
  <article class="newsArti ani">
    <div class="inner">
      <div class="mainTitleBox">
        <div class="t1">News</div>
        <div class="title">소식</div>
      </div>
    </div>
    <div class="slideContainer">
      <div class="inner">
        <div class="slideWrap">
          <div class="btnBox">
            <button type="button" class="slideBtn prevBtn"><img src="/assets/img/sub/bestArti/slidePrevBtn.svg" alt="이전" class="icon" /></button>
            <button type="button" class="slideBtn nextBtn"><img src="/assets/img/sub/bestArti/slideNextBtn.svg" alt="다음" class="icon" /></button>
          </div>
          <div class="swiper newsSwiper">
            <div class="swiper-wrapper">
              <!--
                슬라이드는 최대 5개까지 추가 가능하게 해주세요. 
                그이상 추가하면 레이아웃이 틀어집니다. 
              -->
              <?php foreach ($newsHead as $new) { ?>
              <div class="swiper-slide">
                <a href="/news/view/<?= $new['no'] ?>">
                <div class="itemBox">
                  <div class="imgBox img1" style="background-image: url('<?= $thumbUrl.$new['thumbnail'] ?>');"></div>
                  <div class="contentBox">
                    <div class="t1">
                    <?= $new['title'] ?>
                    </div>
                    <div class="name">
                    <?= strip_tags($new['contents']) ?>
                    </div>
                    <div class="date"><?=cu_conv_dateYear($new['create_date'])?></div>
                  </div>
                </div>
                </a>
              </div>
              <?php } ?>
            </div>
            <div class="swiper-pagination"></div>
          </div>
        </div>
      </div>
    </div>
  </article>
  
  <article class="newsArti2 ani">
    <div class="inner">
      <ul class="storyList">
      <?php foreach ($news as $new) { ?>
        <li>
          <a href="/news/view/<?= $new['no'] ?>">
            <div class="item">
              <div class="contentBox">
                <div class="tag"><?= $new['category'] ?></div>
                <div class="title"><?= $new['title'] ?></div>
                <div class="date"><?=cu_conv_dateYear($new['create_date'])?></div>
              </div>
              <div class="imgBox bg1" style="background-image: url('<?= $thumbUrl.$new['thumbnail'] ?>');"></div>
            </div>
          </a>
        </li>
        <?php } ?>
      </ul>

      <!-- 페이징 처리 -->
      <div class="pagingWrap">
      <?= $pagerNews->links('news', 'custom_pagin') ?>
      </div>
    </div>
  </article>
</section>
<!-- } 소식 섹션 끝-->
<!-- 전용 스크립트 -->
<script src="/assets/script/news.js"></script>