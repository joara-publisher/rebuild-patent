<!-- 게시판상담 상세보기 섹션 시작 { -->
<div class="sub">
	<div class="counsellingVEArti ani">
		<section class="viewWrap">
			<div class="inner">
				<div class="tabMenu">
					<ul>
						<li><a href="/counseling/visit">방문상담</a></li>
						<li class="active">게시판 상담</li>
					</ul>
				</div>
				<div class="tabCont">
					<div class="contTit">게시판 상담</div>
					<div class="contSubTit">당신의 모든 궁금증, 영웅에게 직접 물어보세요. </div>
					<div class="cont">
						<div class="viewInfo">
							<ul class="descWrap">
								<li class="cate"><?=$view['visit_location']?></li>
								<li class="date"><?=cu_conv_date($view['create_date'])?></li>
							</ul>
							<div class="tit"><?=$view['title']?></div>
						</div>
						<div class="viewInner">
							<div class="questionTxt"><?=$view['contents']?></div>
							<?=($view['attach1']) ? '<img class="img" src="/files/'.$view['attach1'].'" alt="리뷰 이미지">' : ''?>
							<?=($view['attach2']) ? '<img class="img" src="/files/'.$view['attach2'].'" alt="리뷰 이미지">' : ''?>
							<?=($view['attach3']) ? '<img class="img" src="/files/'.$view['attach3'].'" alt="리뷰 이미지">' : ''?>
							<?=($view['attach4']) ? '<img class="img" src="/files/'.$view['attach4'].'" alt="리뷰 이미지">' : ''?>
							<?=($view['attach5']) ? '<img class="img" src="/files/'.$view['attach5'].'" alt="리뷰 이미지">' : ''?>

							<div class="answerWrap">
								<div class="answerTit">답변 :</div>
								<?=(!empty($view['answer'])) ? $view['answer'] : '답변 준비중입니다.'?>
							</div>
						</div>
						<div class="viewBtm">
							<a class="moreBtn" href="/counseling/board">목록 보기</a>
							<div class="rightBtnWrap">
								<!-- <button class="csDel">삭제하기</button>
								<a class="csUpdate" href="/counseling/update">수정하기</a> -->
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
	</div>
</div>
<!-- 게시판상담 상세보기 섹션 끝 } -->