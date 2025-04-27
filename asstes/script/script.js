// Document ready
$(() => {
	/* 기능 관련 */
	rightMenuToggle();
	// fixUpBtnToggle();
	pricyBtnToggle();
	commonSelect();
	// commonTelInput();
	mainReception();
	commonVisitCal();
	commonVisitTime();
	commonVisitApply();
	mobileApplyToggle();
	sideBarActive();
	sideBarApplyBox();
	commonheaderBg();
	
	/* 애니메이션 관련 */
	scollHandler();
	isScrolledToBottom();
	clickScrollEvent();

	// 푸터 영역 상담 신청 처리
	$(
		".applyMoSec .submitBtn"
	).on("click", (event) => {
		footerConsultation(event);
	});

	// 푸터 영역 패밀리 사이트
	$('.goToSite').click(function() {
		$(this).toggleClass('active');
		if ($(this).hasClass('active')) {
			$('.siteListWrap').show();
		} else {
			$('.siteListWrap').hide();
		}
	});

	/* 서브페이지 기능 관련 */
	proViewConsult();
	subProfilePrevNext();
});

document.addEventListener("DOMContentLoaded", function() {
    document.cookie.split(";").forEach((c) => {
        if (c.includes("smipChkCookieSmip")) {
            document.cookie = c.replace(/^ +/, "").replace(/=.*/, "=;expires=" + new Date(0).toUTCString() + ";path=/");
        }
    });
});

// 모바일 빠른상담 신청 처리
const footerConsultation = (event) => {
	let name = $(event.target)
		.parents("form")
		.find("input[name='name']")
		.val();
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

	// 특허법인 테헤란에서는 
	let contents = $(event.target)
		.parents("form")
		.find("textarea[name='content']")
		.val();

	let visitLocation = $(event.target)
		.parents("form")
		.find("select[name='selectVisitLocation']")
		.val();
	let counsellingDate = $("#reservationDate").val();
	let counsellingTime = $(".dateTime input[type='checkbox']:checked").val();

	if (!category) {
		Swal.fire({
			icon: "warning",
			text: "분야를 선택하세요.",
			confirmButtonColor: "#2B4039",
			confirmButtonText: "확인",
		});
	} 
	// else if (!name) {
	// 	Swal.fire({
	// 		icon: "warning",
	// 		text: "이름을 입력하세요.",
	// 		confirmButtonColor: "#2B4039",
	// 		confirmButtonText: "확인",
	// 	});
	// } 
	else if (!phone) {
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

		if (!contents) {
			contents = "";
		}
		if (!visitLocation) {
			visitLocation = "";
		}
		if (!counsellingDate) {
			counsellingDate = "";
		}
		if (!counsellingTime) {
			counsellingTime = "";
		}

		const sendData = {
			category: category,
			name: name,
			phone: phone,
			content: contents,
			location: visitLocation,
			date: counsellingDate,
			time: counsellingTime,
			sites: "특허법인 테헤란",
			type: "quick",
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
};

// 모바일 빠른상담 신청 버튼 클릭 이벤트
const mobileApplyToggle = () => {
	$(".applyMoSec .applyShowBtn").click(function () {
		$(".applyMoSec .applyArti").addClass("show");
		$(".mobileCloseBg").addClass("show");
		$(".applyMoSec .applyShowBtn").addClass("hide");
	});
	$(".applyMoSec .applyArti .btnBox .closeBtn").click(function () {
		$(".applyMoSec .applyArti").removeClass("show");
		$(".applyMoSec .applyShowBtn").removeClass("hide");
		$(".mobileCloseBg").removeClass("show");
	});
	$(".applyMoSec .applyShowBtn .clostBtn").click(function (e) {
		e.stopPropagation();
		$(".mobileCloseBg").addClass("show");
		$(".applyMoSec .applyShowBtn").addClass("hide");
	});
	$(".mobileCloseBg").click(function () {
		$(".applyMoSec .applyArti").removeClass("show");
		$(".applyMoSec .applyShowBtn").removeClass("hide");
	});

	// 모두 입력 되었을 때 버튼 활성화
	const checkFormValues = () => {
		const categoryValue = $('.applyMoSec #Mo_Category').val(); // category 값
		const telValue = $('.applyMoSec #Mo_Tel').val();    // tel 값
		const personalChecked = $('.applyMoSec #Mo_personalAgree').is(':checked'); // 개인정보 수집 동의 체크 값

		// 모든 조건이 충족되었는지 확인
		if (categoryValue && telValue && personalChecked) {
			$('.applyMoSec .applyArti .submitBtn').addClass('active');
		} else {
			$('.applyMoSec .applyArti .submitBtn').removeClass('active');
		}
    };

	$(document).on('change', '#Mo_Category, #Mo_personalAgree', function() {
        checkFormValues();
    });

	$(document).on('input', '#Mo_Name, #Mo_Tel', function() {
        checkFormValues();
    });
};

$(document).ready(function(){
	document.addEventListener("scroll", function () {
		/* 스크롤 애니메이션 */
		scollHandler();
		isScrolledToBottom();
	});
});

const scollHandler = () => {
    const scroll_y = window.scrollY + window.innerHeight / 1.5;
    const animationContainer = document.querySelectorAll(".ani");

	if(window.scrollY != 0) {
		$('header').addClass('scroll');
	}else {
		$('header').removeClass('scroll');
	}

    animationContainer.forEach((element) => {
        const itemTop = element.getBoundingClientRect().top + window.scrollY;

        // 스크롤 위치에 따라 'on' 클래스 추가/제거
        if (scroll_y > itemTop) {
            element.classList.add("on");
        } else {
            element.classList.remove("on");
        }
    });

	// 게시글 상세보기를 위한 애니메이션
	if($('.subContentArti').length > 0) {
		const animationContainer02 = document.querySelectorAll(".ani02");
		const profileArti = document.querySelector(".profileArti");

		animationContainer02.forEach((element) => {
			const itemTop = element.getBoundingClientRect().top + window.scrollY;
			const triggerPoint = window.scrollY + (window.innerHeight * (99 / 100)); // 화면의 90/100(99%) 지점

			// 스크롤 위치에 따라 'on' 클래스 추가/제거
			if (triggerPoint > itemTop) {
				element.classList.add("on");

				// profileArti가 존재하는 경우에만 on 추가
				if (profileArti) {
					profileArti.classList.add("on");
				}
			} else {
				element.classList.remove("on");
				
				// profileArti가 존재하는 경우에만 on 제거
				if (profileArti) {
					profileArti.classList.remove("on");
				}
			}
		});
	}
};

function isScrolledToBottom() {
	var container = document.documentElement; // 스크롤할 컨테이너 선택 (document.documentElement는 페이지의 최상위 요소, 즉 <html> 요소를 의미합니다.)
	var scrollTop =
		container.scrollTop || window.pageYOffset || document.body.scrollTop;
	var containerHeight =
		container.clientHeight || window.innerHeight || document.body.clientHeight;
	var totalHeight = container.scrollHeight || document.body.scrollHeight;
	var isAtBottom = scrollTop + containerHeight >= totalHeight;

	// 결과를 콘솔에 출력
	if (isAtBottom) {
		//제일 하단
		// $(".applyPcSec .inner").addClass("hide");
		$(".applyMoSec .applyShowBtn").addClass("hide");
	} else {
		// $(".applyPcSec .inner").removeClass("hide");
		$(".applyMoSec .applyShowBtn").removeClass("hide");
	}

	// 결과 반환
	return isAtBottom;
}

const clickScrollEvent = () => {
	$(".scroll_move").click(function (e) {
		e.preventDefault();
		$("html,body").animate({ scrollTop: $(this.hash).offset().top }, 1000);
		$(".mobileCloseBg").removeClass("show");
		$(".rightMenuArti .menuSec").removeClass("show");
		$(".topMenuSec .menuBg").removeClass("show");
		$("header").removeClass("bg");
		$("header .btnBox .menuBtn").removeClass("on");
	});
};

// 공통 팝업 이벤트
const pricyBtnToggle = () => {
	$(".privacyBtn").click(function () {
		$("#privacyPopup").addClass("show");
	});
	$(".termsBtn").click(function () {
		$("#termsPopup").addClass("show");
	});
	$(".personalBtn").click(function () {
		$("#personalPopup").addClass("show");
	});
	$(".marketingBtn").click(function () {
		$("#marketingPopup").addClass("show");
	});


	$(".privacyPopupSec").click(function () {
		$(".privacyPopupSec").removeClass("show");
	});
	$(".privacyPopupSec .popupContentArti").click(function (e) {
		e.stopPropagation();
	});
	$(".privacyPopupSec .popupContentArti .titleBox .closeBtn").click(
		function () {
			$(".privacyPopupSec").removeClass("show");
		}
	);
};

const rightMenuToggle = () => {
	$("header .btnBox .menuBtn").click(function () {
		$(".mobileCloseBg").addClass("show");
		$(".rightMenuArti .menuSec").addClass("show");
		$(".topMenuSec .menuBg").toggleClass("show");
		$("header").toggleClass("bg");
		$("header .btnBox .menuBtn").toggleClass("on");
	});
	$(".rightMenuArti .menuSec .titleBox .closeBtn").click(function () {
		$(".mobileCloseBg").removeClass("show");
		$(".rightMenuArti .menuSec").removeClass("show");
		$(".topMenuSec .menuBg").removeClass("show");
		$("header").removeClass("bg");
		$("header .btnBox .menuBtn").removeClass("on");
	});
	$(".mobileCloseBg").click(function () {
		$(".mobileCloseBg").removeClass("show");
		$(".rightMenuArti .menuSec").removeClass("show");
		$(".topMenuSec .menuBg").removeClass("show");
		$("header").removeClass("bg");
		$("header .btnBox .menuBtn").removeClass("on");
	});
};

// const fixUpBtnToggle = () => {
// 	$('.fixUpBtn').click(function(){
// 		$("html,body").animate({ scrollTop: 0 }, 1000);
// 	});
// };

const commonSelect = () => {
	$(document).on('change', 'form select', function () {
		if($(this).val() != '' || $(this).val() == 'undefined') {
			$(this).addClass('active');
		} else {
			$(this).removeClass('active');
		}
	});
};

// const commonTelInput = () => {
// 	$(document).on("keyup", "input[type='tel']", function() {
// 		$(this).val( $(this).val().replace(/[^0-9]/g, "").replace(/(^02|^0505|^1[0-9]{3}|^0[0-9]{2})([0-9]+)?([0-9]{4})$/,"$1-$2-$3").replace("--", "-") ); 
// 	});
// };

const mainReception = () => {
	// 자가진단
	$(document).on("click","#reception input:radio", function() {
		$(this).parents('.select_wrapper').find('.item').removeClass('on');
		$(this).parent().addClass('on');
	});

	$('.sian').click(function(){
		var $root= $(this).closest('.teherans');
		var value = $root.find('input:checked').val();

        if(typeof(value)=='undefined'){ 
			Swal.fire({
				title: "항목 미선택",
				text: "항목을 선택해주세요.",
				icon: "warning",
				buttons: "확인",
			});
			return false;
		} else {
			$('.teherans').hide();
			$('.guestol').show();
		}
    });

	const sendData = [];
	$('.self_update_check').click(function(){
		sendData.push($('.housec1').find('input[type=radio]:checked').val());

		// 입력 값 검증
		const phoneReg = /^01([0|1|6|7|8|9])-?([0-9]{3,4})-?([0-9]{4})$/;
		var f = document.guestols;
		
		if (f.name.value.trim() == "") {
			Swal.fire({
				title: "입력값 확인",
				text: "성명을 입력해주세요.",
				icon: "warning",
				buttons: "확인",
			});
			f.name.focus();
			return false;
		} else if(f.phone.value.trim() == "") {
			Swal.fire({
				title: "항목 미입력",
				text: "휴대전화 번호를 입력해주세요.",
				icon: "warning",
				buttons: "확인",
			});
			f.phone.focus();
			return false;
		} else if(!f.personalAgree.checked) {
			Swal.fire({
				title: "항목 미입력",
				text: "개인정보 수집 동의에 체크해주세요.",
				icon: "warning",
				buttons: "확인",
			});
			f.personalAgree.focus();
			return false;
		} 
		
		let email = f.email.value.trim();
		if (email == "") {
			email = "";
		}

		// sendData.push(f.intro.value.trim());
		// sendData.push(f.name.value.trim());
		// sendData.push(f.phone.value.trim());
		// sendData.push(email);
		// sendData.push(f.personalAgree.checked);
		// sendData.push(f.marketingAgree.checked);

		const sendData = {
			intro: f.intro.value.trim(),
			name: f.name.value.trim(),
			phone: f.phone.value.trim(),
			email: email,
			personal: f.personalAgree.checked,
			marketing: f.marketingAgree.checked
		};

		self_update_form_act(sendData);
	});

	function self_update_form_act(data) {
		let { intro, name, phone, email, personal, marketing } = data;

		// Extract the remaining values
		// let remainingValues = sendData.slice(2);

		// Convert the remaining values to a single string with a space separator
		// let remainingString = remainingValues.join(' / ');

		console.log(personal, marketing) // 개인정보 처리 방침, 마케팅 동의 여부 아래 추가해주세요.

		$.ajax({
			data : {
				content: intro,
				type: 'ex_self',
				sites: '특허법인 테헤란',
				name: name,
				phone: phone,
				email: email,
				personal: personal,
				marketing: marketing
			},
			async : false,
			url : "",
			type : "post",
			success: (data) => {
				Swal.fire({
					title: "상담신청 완료",
					text: "신청이 완료되었습니다.",
					icon: "success",
					buttons: "확인",
				}).then((value) => {
					location.reload();
				});
			}
		});
	}
};

const commonVisitCal = () => {
	var natDays = []; // 공휴일 배열
	var isInitialLoad = true; // 첫 로딩 여부

	// 여러 연도의 공휴일 데이터를 가져오는 함수
	function fetchHolidays(years) {
		years.forEach(function(year) {
			$.ajax({
				url: `https://date.nager.at/api/v3/PublicHolidays/${year}/KR`, // 공휴일 API 주소
				method: "GET",
				success: function (data) {
					// 가져온 공휴일 데이터를 natDays 배열에 저장
					data.forEach(function (holiday) {
						var date = new Date(holiday.date);
						natDays.push([date.getFullYear(), date.getMonth() + 1, date.getDate()]);
					});
					// datepicker 초기화
					$("#reservation_date").datepicker("refresh");
				},
				error: function () {
					console.error(`${year}년 공휴일 데이터를 불러오는 데 실패했습니다.`);
				}
			});
		});
	}

	// 2025년과 2026년 공휴일 데이터를 로드
	fetchHolidays([2025, 2026]);

	$("#reservation_date").datepicker({
		dateFormat: "yy-mm-dd", // 년-월-일 형식으로 설정
		dayNames: ["일", "월", "화", "수", "목", "금", "토"], // 요일 이름을 한글로 지정
		dayNamesShort: ["일", "월", "화", "수", "목", "금", "토"], // 요일 이름을 한글로 짧게 지정
		monthNames: ["01", "02", "03", "04", "05", "06", "07", "08", "09", "10", "11", "12"],
		monthNamesShort: ["1", "2", "3", "4", "5", "6", "7", "8", "9", "10", "11", "12"],
		dayNamesMin: ["일", "월", "화", "수", "목", "금", "토"],
		minDate: 0, // 오늘 이전의 날짜 선택 불가능
		showMonthAfterYear: true, // 년 월 순서 바꿈

		// 날짜 클릭 시 동작
		onSelect: function (dateText) {
			var selectedDate = new Date(dateText);
			var year = selectedDate.getFullYear();
			var month = selectedDate.getMonth() + 1;
			var day = selectedDate.getDate();
			$('#reserved_date').val(`${year}-${month}-${day}`);
			$('.date_select').addClass('active');
			$('.date_select span').text(`${year}년 ${month}월 ${day}일`);
			$('.visit_apply_complete').find('.date').text(`${year}년 ${month}월 ${day}일`);
		},

		// 날짜 렌더링 시 동작
		beforeShowDay: function (date) {
			var day = date.getDay();
			
			// 공휴일 확인
			for (var i = 0; i < natDays.length; i++) {
				if (date.getFullYear() === natDays[i][0] && date.getMonth() + 1 === natDays[i][1] && date.getDate() === natDays[i][2]) {
					return [false, "holiday", ""];
				}
			}

			// 주말 비활성화
			if (day === 0) {
				return [false, "sunday", ""];
			} else if (day === 6) {
				return [false, "saturday", ""];
			}

			// 첫 로딩 시 활성화 상태 제거
			if (isInitialLoad) {
				setTimeout(function () {
					$(".ui-state-active").removeClass("ui-state-active");
				}, 1);
				isInitialLoad = false;
			}
			
			return [true, "", ""];
		}
	});
};

const commonVisitTime = () => {
	$(".visitArti .dateTime label input[type='checkbox']").click(function () {
		// 현재 라디오 버튼의 체크 상태 확인
		$(".visitArti .dateTime label input[type='checkbox']").not(this).prop("checked", false);
		$("#reservationTime").val($(this).val());
	});
};

const commonVisitApply = () => {
	$(".rvWrap .submitBtn").on("click", (event) => {
		visitApply(event);
	});

	const visitApply = (event) => {
		let date = $(event.target)
			.parents("form")
			.find("input[name='date']")
			.val();
		let time = $(event.target)
			.parents("form")
			.find("input[name='time']")
			.val();
		let name = $(event.target)
			.parents("form")
			.find("input[name='name']")
			.val();
		let phone = $(event.target)
			.parents("form")
			.find("input[name='phone']")
			.val();
		let category = $(event.target)
			.parents("form")
			.find("select[name='selectCategory']")
			.val();
		let content = $(event.target)
			.parents("form")
			.find("textarea[name='content']")
			.val();
		let personal = $(event.target)
			.parents("form")
			.find("input[name='personalAgree']")
			.is(':checked');
		let marketing = $(event.target)
			.parents("form")
			.find("input[name='marketingAgree']")
			.is(':checked');

		if (!date) {
			Swal.fire({
				icon: "warning",
				text: "날짜를 선택하세요.",
				confirmButtonColor: "#2B4039",
				confirmButtonText: "확인",
			});
		} else if (!time) {
			Swal.fire({
				icon: "warning",
				text: "시간을 선택하세요.",
				confirmButtonColor: "#2B4039",
				confirmButtonText: "확인",
			});
		} else if (!name) {
			Swal.fire({
				icon: "warning",
				text: "이름을 입력하세요.",
				confirmButtonColor: "#2B4039",
				confirmButtonText: "확인",
			});
		}else if (!phone) {
			Swal.fire({
				icon: "warning",
				text: "휴대폰 번호를 입력하세요.",
				confirmButtonColor: "#2B4039",
				confirmButtonText: "확인",
			});
		} else if (!category) {
			Swal.fire({
				icon: "warning",
				text: "상담분야를 선택하세요.",
				confirmButtonColor: "#2B4039",
				confirmButtonText: "확인",
			});
		}  else if (!personal) {
			Swal.fire({
				icon: "warning",
				text: "개인정보 수집 동의에 체크해주세요.",
				confirmButtonColor: "#2B4039",
				confirmButtonText: "확인",
			});
		} else {
			console.log(personal, marketing) // 개인정보 처리 방침, 마케팅 동의 여부 아래 추가해주세요.

			const sendData = {
				date: date,
				time: time,
				name: name,
				phone: phone,
				selectCategory: category,
				content: content,
				type: "visit",
				sites: "특허법인 테헤란",
				personal: personal,
				marketing: marketing
			};

			// 성공하면 뜨는 팝업
			const transDate = date.replace(/-/g, "년 ").replace(/(\d{4}년 )(\d{2})/, "$1$2월 ").replace(/(\d{2})$/, "$1일");

			$('.visitApplyComplete').addClass('active');
			$('.visitApplyComplete').find('.date').text(transDate);
			$('.visitApplyComplete').find('.time').text(time);

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
			});
		}
	};

	$('.visitApplyComplete .popup_close_btn').click(function() {
		$('.visitApplyComplete').removeClass('active');
	});
};

const sideBarActive = () => {
	// 변수 초기화
	var quick_currentBtn = undefined;
	var $closeBtn = $(".quickWrap .closeBtn");

	var openX = 635;
	var closeX = 0;

	function makeDisabledSquare() {
		$("body").append("<div class='disabledSquare'></div>");
		$(".disabledSquare").css({ opacity: 0 }).stop().animate({ opacity: 0.7 }, 500, "easeOutQuint");
	}

	function quickClose() {
		$(".quickWrap .wrap1 .btnWrap .btn .on").stop().animate({ left: 100 }, 500, "easeInOutQuint");
		$(".quickWrap .wrap1 .btnWrap .btn").css({ cursor: "pointer" });
		// $("#quick").stop().animate({ right: closeX }, 800, "easeInOutQuint").css({ zIndex: "998"});
		$("#quick").stop().animate({ right: closeX }, 800, "easeInOutQuint");
	}

	$closeBtn.on({
		mouseenter: function () {
			$(this).find(".icon").css({
				transition: "transform 0.6s",
				transform: "rotate(180deg)"
			});
		},
		mouseleave: function () {
			$(this).find(".icon").css({
				transition: "transform 0.6s",
				transform: "rotate(0deg)"
			});
		},
		click: function () {
			$(this).css({ cursor: "default" });
			$(".disabledSquare").trigger("click");
		}
	});

	$(document).on("click", ".disabledSquare", function () {
		quick_currentBtn = undefined;
		quickClose();
		$(this).stop().animate({ opacity: 0 }, 500, "easeInOutQuint", function () {
			$(this).remove();
		});
		$closeBtn.css({ cursor: "default" }).stop().animate({ opacity: 0, marginLeft: 0 }, 500, "easeInOutQuint", function () {
			$(this).css({ display: "none" });
		});
	});

	$(".quickWrap .wrap1 .btnWrap .btn").on({
		mouseenter: function () {
			if (quick_currentBtn !== $(this).index()) {
				$(this).find(".on").stop().animate({ left: 0 }, 500, "easeOutQuint");
			}
		},
		mouseleave: function () {
			if (quick_currentBtn !== $(this).index()) {
				$(this).find(".on").stop().animate({ left: 100 }, 500, "easeInOutQuint");
			}
			if (quick_currentBtn !== undefined) {
				$(".quickWrap .wrap1 .btnWrap .btn:eq(" + quick_currentBtn + ") .on").stop().animate({ left: 0 }, 500, "easeOutQuint");
			}
		},
		click: function (e) {
			if ($(this).index() === 0) { // 1. 상담신청
				if ($(this).index() !== quick_currentBtn) {
					makeDisabledSquare();
					// $("#quick").stop().animate({ right: openX }, 800, "easeOutQuint").css({ zIndex: "999"});
					$("#quick").stop().animate({ right: openX }, 800, "easeOutQuint");
					$closeBtn.css({ cursor: "pointer", opacity: 0, display: "block" }).stop().animate({ opacity: 1, marginLeft: -150 }, 500, "easeInOutCubic");

					$(".quickWrap .wrap1 .btnWrap .btn:eq(" + quick_currentBtn + ") .on").stop().animate({ left: 100 }, 500, "easeInOutQuint");

					quick_currentBtn = $(this).index();

					$(this).css({ cursor: "default" });
					$(".quickWrap .wrap1 .btnWrap .btn").not($(this)).css({ cursor: "pointer" });
				}
			} else if ($(this).index() === 1) { // 2. 채팅상담
				window.open("https://thrlawip.channel.io/home", "_target");
			} else if ($(this).index() === 2) { // 3. 게시판문의
				window.location.href = "/counseling/board";
			} else if ($(this).index() === 3) { // 4. 이메일문의
				// window.location.href = "mailto:patent@thrlaw.co.kr";

				// 이메일 주소 정의
				const email = "patent@thrlaw.co.kr";

				// 클립보드 복사 기능
				const tempInput = document.createElement("input");
				tempInput.value = email;
				document.body.appendChild(tempInput);
				tempInput.select();
				document.execCommand("copy");
				document.body.removeChild(tempInput);
			
				// 알림 표시
				alert('복사 되었습니다.');
			} else if ($(this).index() === 4) { // 5. 유튜브
				window.open("https://www.youtube.com/@TEHERAN-PATENT", "_target");
			}
		}
	});
}

const sideBarApplyBox = () => {
	// 팝업창 입력 시 이벤트

	// 모두 입력 되었을 때 버튼 활성화
	const checkFormValues = () => {
		const selectValue = $('.ApplyBoxWrap #category').val(); // category 값
		const inputValue = $('.ApplyBoxWrap #phone').val();    // phone 값
		const personalChecked = $('.ApplyBoxWrap input[name="personalAgree"]').is(':checked'); // 개인정보 수집 동의 체크 값

		// 모든 조건이 충족되었는지 확인
		if (selectValue && inputValue && personalChecked) {
			$('.ApplyBoxWrap .btnWrap .submitBtn').addClass('active');
		} else {
			$('.ApplyBoxWrap .btnWrap .submitBtn').removeClass('active');
		}
    };

	$(document).on('change', '#category, input[name="personalAgree"]', function() {
        checkFormValues();
    });

	$(document).on('input', '#phone', function() {
        checkFormValues();
    });

	// 신청하기 버튼 클릭
	$(document).on('click', '.ApplyBoxWrap .submitBtn', function (event) {
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
				type: "quick",
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
}

// 전문가 소개 빠른상담 신청
const proViewConsult = () => {
	$(".consultBox .clickToConsult").on("click", (event) => {
		subApply(event);
	});

	const subApply = (event) => {
		event.preventDefault(); 
		
		let name = $(event.target)
			.parents("form")
			.find("input[name='name']")
			.val();
		let phone = $(event.target)
			.parents("form")
			.find("input[name='phone']")
			.val();
		let personal = $(event.target)
			.parents("form")
			.find("input[name='personalAgree']")
			.is(':checked');
		let marketing = $(event.target)
			.parents("form")
			.find("input[name='marketingAgree']")
			.is(':checked');

		if (!phone) {
			Swal.fire({
				icon: "warning",
				text: "휴대폰 번호를 입력하세요.",
				confirmButtonColor: "#2B4039",
				confirmButtonText: "확인",
			});
		}  else if (!personal) {
			Swal.fire({
				icon: "warning",
				text: "개인정보 수집 동의에 체크해주세요.",
				confirmButtonColor: "#2B4039",
				confirmButtonText: "확인",
			});
		} else {
			console.log(personal, marketing) // 개인정보 처리 방침, 마케팅 동의 여부 아래 추가해주세요.

			const sendData = {
				name: name,
				phone: phone,
				type: "intro_realtime",
				sites: "특허법인 테헤란",
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
			});
		}
	};
}

const subProfilePrevNext = () => {
	$(".sub .profileArti .moreBtn").click(function () {
		$(".sub .profileArti .moreBtn").toggleClass("active");
		$(".sub .profileArti .fullBox").toggleClass("active");
	});
};

const commonheaderBg = () => {
	if($('.sub.project').length > 0 ) {
		$('header').addClass('white');
	}
}