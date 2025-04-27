<!-- 업무사례 섹션 시작 { -->
<section class="sub">
  <article class="caseArti2 ani" id="case">
    <div class="inner">
      <!-- <div class="titleBox">
        <div class="mainTitleBox">
          <div class="t1">Case</div>
          <div class="title">업무사례</div>
          <div class="content">법률사무소 영웅을 통해 도움을 받은 실제 사례를 만나보세요.</div>
        </div>
      </div> -->
      <div class="searchBox">
        <div class="searchWrap">
          <form method="GET">
            <input type="text" name="searchText" class="ipt" placeholder="키워드 검색" value="<?=$searchText?>" />
            <button type="submit" class="searchBtn"><img src="/assets/img/sub/caseArti2/searchIcon.svg" alt="검색" class="icon" /></button>
          </form>
        </div>
      </div>
    </div>
    <div class="tabContainer">
      <div class="inner">
        <ul class="tabBtnList">
          <li><button type="button" class="item <?= $tags === "" || !$tags ? "active" : "" ?>" value="">전체</button></li>
          <li><button type="button" class="item <?= $tags === "특허" ? "active" : "" ?>" value="특허">특허</button></li>
          <li><button type="button" class="item <?= $tags === "상표" ? "active" : "" ?>" value="상표">상표</button></li>
          <li><button type="button" class="item <?= $tags === "디자인" ? "active" : "" ?>" value="디자인">디자인</button></li>
          <li><button type="button" class="item <?= $tags === "해외" ? "active" : "" ?>" value="해외">해외</button></li>
        </ul>
      </div>
      <div class="brownBg">
        <div class="inner">
          <ul class="cateTabContentList">
            <li class="active">
              <ul class="caseList ul-victim">
              <?php foreach ($cases as $case) { ?>
                <li>
                  <a href="/cases/view/<?= $case['no'] ?>">
                    <div class="item">
                      <div class="imgBox bg1" style="background-image: url('<?= $thumbUrl.$case['thumbnail'] ?>');"></div>
                      <div class="contentBox">
                        <div class="t1">
                          <div class="txt"><?= $case['case_number'] ?></div>
                          <img src="/assets/img/sub/caseArti2/arrow.svg" alt="화살표" class="icon" />
                        </div>
                        <!-- 수정된 부분 시작 250410 -->
                        <div class="btm">
                          <div class="date"><?=cu_conv_date($case['create_date'])?></div>
                          <div class="count">조회수&nbsp;000회</div>  
                        </div>
                        <!-- 수정된 부분 끝 250410 -->
                      </div>
                    </div>
                  </a>
                </li>
                <?php } ?>
              </ul>
            </li>
          </ul>

        </div>
      </div>
    </div>

    <div class="inner">
      <div class="pagingWrap">
      <?= $pagerCases->links('cases', 'custom_pagin') ?>
      </div>
    </div>
  </article>
</section>
<!-- } 업무사례 섹션 끝-->

<!-- 전용 스크립트 -->
<script src="/assets/script/cases.js"></script>