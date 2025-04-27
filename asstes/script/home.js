$(() => {
	memberTabMenu();
	memberconsultBtn();
    storySwiper();
});

const memberconsultBtn = () => {
	// 팝업창 열고 닫고
	$(".main .memberArti2 .goToConsult").click(function () {
		let targetContainer;
		if($(window).width() > 650) {
			targetContainer = $(this).closest('.tabContainer');
		} else {
			targetContainer = $('.main')
		}
		
		if (targetContainer.length && $('.consultingBoxWrap').length === 0) {
			targetContainer.append(`
				<div class="consultingBoxWrap">
					<button type="button" class="closeBtn">
						<img src="/assets/img/main/memberArti/consultCloseBtn.svg" alt="상담신청 닫기 버튼">
					</button>
					<div class="consultingBox">
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
								<div class="consultBtnWrap">
									<button type="button" class="submitBtn">신청하기</button>
								</div>
							</form>
						</div>
					</div>
				</div>
			`);

			setTimeout(() => {
				$('.consultingBoxWrap').addClass('show');
			}, 10);
		} 
	});

	$(document).on('click', '.consultingBoxWrap .closeBtn', function () {
		$('.consultingBoxWrap').removeClass('show');
		setTimeout(() => {
			$(this).closest('.consultingBoxWrap').remove();
		}, 500);
	});

	// 모두 입력 되었을 때 버튼 활성화
	const checkFormValues = () => {
		const selectValue = $('.consultingBox #category').val(); // category 값
		const inputValue = $('.consultingBox #phone').val();    // phone 값
		const personalChecked = $('.consultingBox input[name="personalAgree"]').is(':checked'); // 개인정보 수집 동의 체크 값

		// 모든 조건이 충족되었는지 확인
		if (selectValue && inputValue && personalChecked) {
			$('.consultingBox .consultBtnWrap .submitBtn').addClass('active');
		} else {
			$('.consultingBox .consultBtnWrap .submitBtn').removeClass('active');
		}
    };

	$(document).on('change', '#category, input[name="personalAgree"]', function() {
        checkFormValues();
    });

	$(document).on('input', '#phone', function() {
        checkFormValues();
    });

	// 신청하기 버튼 클릭
	$(document).on('click', '.consultingBoxWrap .submitBtn', function (event) {
		let phone = $(event.target)
			.parents("form")
			.find("input[name='phone']")
			.val();
		let category = $(event.target)
			.parents("form")
			.find("select[name='selectCategory']")
			.val();
		let personal = $(event.target)
			.parents("form")
			.find("input[name='personalAgree']")
			.is(':checked');
		let marketing = $(event.target)
			.parents("form")
			.find("input[name='marketingAgree']")
			.is(':checked');

		if (!category) {
			Swal.fire({
				icon: "warning",
				text: "분야를 선택하세요.",
				confirmButtonColor: "#2B4039",
				confirmButtonText: "확인",
			});
		} else if (!phone) {
			Swal.fire({
				icon: "warning",
				text: "휴대폰 번호를 입력하세요.",
				confirmButtonColor: "#2B4039",
				confirmButtonText: "확인",
			});
		} else if (!personal) {
			Swal.fire({
				icon: "warning",
				text: "개인정보 수집 동의에 체크해주세요.",
				confirmButtonColor: "#2B4039",
				confirmButtonText: "확인",
			});
		} else {
			console.log(personal, marketing) // 개인정보 처리 방침, 마케팅 동의 여부 아래 추가해주세요.

			const sendData = {
				category: category,
				phone: phone,
				sites: "특허법인 테헤란",
				type: "main_realtime",
				personal: personal,
				marketing: marketing
			};
			
			$.ajax({
				type: "POST",
				url: "",
				data: sendData,
				success: () => {
					Swal.fire({
						icon: "success",
						html: "상담 신청이 완료되었습니다.",
						confirmButtonColor: "#2B4039",
						confirmButtonText: "확인",
					}).then(() => {
						location.reload();
					});
				},
				error: () => {
					Swal.fire({
						icon: "error",
						html: "처리 중 오류가 발생하였습니다.<br>잠시 후 다시 시도해주세요.",
						confirmButtonColor: "#2B4039",
						confirmButtonText: "확인",
					});
	
				},
			});
		}
	});

	// 공통 팝업 이벤트 (동적 바인딩으로 변경)
	$(document).on("click", ".personalBtn", function () {
		$("#personalPopup").addClass("show");
	});
	$(document).on("click", ".marketingBtn", function () {
		$("#marketingPopup").addClass("show");
	});

	$(document).on("click", ".privacyPopupSec", function () {
		$(".privacyPopupSec").removeClass("show");
	});

	// 팝업 내부 클릭 시 닫히지 않도록 설정
	$(document).on("click", ".privacyPopupSec .popupContentArti", function (e) {
		e.stopPropagation();
	});

	$(document).on("click", ".privacyPopupSec .popupContentArti .titleBox .closeBtn", function () {
		$(".privacyPopupSec").removeClass("show");
	});
}

const memberTabMenu = () => {
	let currentCnt = 0;

	$(".main .memberArti2 .tabContainer .btnList > li .itemBtn").click(function (){
		const index = $(this).parent().index();
		currentCnt = index;
		$(".main .memberArti2 .tabContainer .btnList > li .itemBtn").removeClass(
			"active"
		);
		$(".main .memberArti2 .tabContainer .btnList > li")
			.eq(index)
			.children(".itemBtn")
			.addClass("active");
		$(".main .memberArti2 .tabContainer .contentList > li").removeClass(
			"active"
		);
		$(".main .memberArti2 .tabContainer .contentList > li")
			.eq(index)
			.addClass("active");
	});

    $('.memberArti2 .btnWrap button').click(function() {
		let moveW = $('.main .memberArti2 .tabContainer .btnWrap').width();

		if ($(this).hasClass('btnNext')) {
			if(currentCnt == 3) currentCnt = 0;
			else currentCnt++;

			// 버튼 transform
			if (currentCnt == 3) {
				$(".main .memberArti2 .tabContainer .btnList").css("transform", "translateX(-"+ moveW +"px)");
			} else if (currentCnt == 0) {
				$(".main .memberArti2 .tabContainer .btnList").css("transform", "translateX(0)");
			}
		}else if($(this).hasClass('btnPrev')) {
			if(currentCnt == 0) currentCnt = 3;
			else currentCnt--;

			if (currentCnt == 3) {
				console.log(currentCnt)
				$(".main .memberArti2 .tabContainer .btnList").css("transform", "translateX(-"+ moveW +"px)");
			} else if (currentCnt == 2) {
				$(".main .memberArti2 .tabContainer .btnList").css("transform", "translateX(0)");
			}
		}

		$(".main .memberArti2 .tabContainer .btnList > li .itemBtn").removeClass(
				"active"
			);
			$(".main .memberArti2 .tabContainer .btnList > li")
				.eq(currentCnt)
				.children(".itemBtn")
				.addClass("active");
			$(".main .memberArti2 .tabContainer .contentList > li").removeClass(
				"active"
			);
			$(".main .memberArti2 .tabContainer .contentList > li")
				.eq(currentCnt)
				.addClass("active");
    });
};

const storySwiper = () => {
	var swiper = new Swiper('.main .storySlideWrap', {
		slidesPerView: 4, // 한 화면에 보이는 슬라이드 수
    	slidesPerGroup: 4, // 한 번에 넘어가는 슬라이드 수
		spaceBetween: 14,
		navigation: {
			nextEl: '.storyArti .swiperBtnNext', 
			prevEl: '.storyArti .swiperBtnPrev'
		},
		pagination: {
			el: '.storyArti .PaginWrap .pagin', bulletElement: 'li', clickable: true,
			renderBullet: function (index, className) {
				return '<li class="' + className + '"><a href="">' + (index + 1) + '</a></li>';
			}
		},
		breakpoints: {
			1300: {
				slidesPerView: 3, // 한 화면에 보이는 슬라이드 수
    			slidesPerGroup: 3, // 한 번에 넘어가는 슬라이드 수
			},
			800: {
				slidesPerView: 2, // 한 화면에 보이는 슬라이드 수
    			slidesPerGroup: 2, // 한 번에 넘어가는 슬라이드 수
			},
			650: {
				slidesPerView: 'auto', // 한 화면에 보이는 슬라이드 수
    			slidesPerGroup: 1, // 한 번에 넘어가는 슬라이드 수
				spaceBetween: 8,
			}
		}
	});
}

