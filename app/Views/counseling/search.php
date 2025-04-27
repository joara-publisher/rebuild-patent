<!-- 게시판상담 섹션 시작 { -->
<div class="sub">
    <article class="counsellingArti search ani">
        <div class="inner">
            <div class="tabMenu">
                <ul>
                    <li><a href="/counseling/visit">방문상담</a></li>
                    <li class="active">게시판 상담</li>
                </ul>
            </div>
            <div class="tabCont">
                <div class="contWrap">
                <div class="contTit">게시판 상담</div>
                <div class="contSubTit">모든 상담은 변리사가 직접 답변 드립니다. </div>
                <div class="cont">
                    <div class="searchBox">
                        <form action="/counseling/search">
                            <input type="text" name="search" placeholder="검색해보세요" value="">
                            <button class="deleteBtn"></button>
                            <button class="searchBtn"></button>
                        </form>
                    </div>
                    <div class="btnWrap">
                        <a class="goToCounselling" href="/counseling/write">게시판 상담 신청하기</a>
                    </div>
                    <div class="tableWrap pcTable">
                        <table style="table-layout: fixed">
                            <thead>
                                <tr>
                                    <th>번호</th>
                                    <th>제목</th>
                                    <th>작성자</th>
                                    <th>작성일</th>
                                    <th>상담여부</th>
                                </tr>
                            </thead>
                            <tbody>
                            <?php
                                $i = 1;
                                foreach($boards as $b):
                                ?>
                                    <tr onClick="location.href='/consult/check/<?=$b['no']?>'">
                                        <td><?=sprintf('%04d', $i);?></td>
                                        <td style="width:65%; text-overflow:ellipsis; overflow:hidden; white-space:nowrap"><?=cu_highlight_matches($b['title'],$search)?></td>
                                        <td><?=cu_mask_name($b['name'])?></td>
                                        <td><?=cu_conv_date($b['create_date'])?></td>
                                        <td><div class="status <?=($b['status']=='complete')? '' : 'not_' ?>complete"><?=($b['status']=='complete')? '접수완료' : '상담신청' ?></div></td>
                                    </tr>
                                <?php 
                                $i++;
                                endforeach 
                            ?>
                            </tbody>
                        </table>
                    </div>
                    <div class="tableWrap moTable">
                        <table style="table-layout: fixed">
                            <thead>
                                <tr>
                                    <th>번호</th>
                                    <th>제목</th>
                                    <th>작성자</th>
                                    <th>작성일</th>
                                    <th>상담여부</th>
                                </tr>
                            </thead>
                            <tbody>
                            <?php
                                $i = 1;
                                foreach($boards as $b):
                                ?>
                                    <tr onClick="location.href='/consult/check/<?=$b['no']?>'">
                                        <td><?=sprintf('%04d', $i);?></td>
                                        <td style="width:65%; text-overflow:ellipsis; overflow:hidden; white-space:nowrap"><?=cu_highlight_matches($b['title'],$search)?></td>
                                        <td><?=cu_mask_name($b['name'])?></td>
                                        <td><?=cu_conv_date($b['create_date'])?></td>
                                        <td><div class="status <?=($b['status']=='complete')? '' : 'not_' ?>complete"><?=($b['status']=='complete')? '접수완료' : '상담신청' ?></div></td>
                                    </tr>
                                <?php 
                                $i++;
                                endforeach 
                            ?>
                            </tbody>
                        </table>
                    </div>
                    <div class="pagin">
                    <?= $pagerBoards->links('boards', 'custom_pagin') ?>
                    </div>
                    <button class="moreBtn">더보기</button>
                </div>
                </div>
            </div>
        </div>
    </article>
</div>
<!-- 게시판상담 섹션 끝 } -->

<!-- 전용 스크립트 -->
<script src="/assets/script/counselling.js"></script>
