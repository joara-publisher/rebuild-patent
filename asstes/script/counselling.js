// search 
// search delete btn
if ($('.searchBox').length > 0) {
    if($('.searchBox input').val().length > 0) $('.searchBox').find('.deleteBtn').show();
}

$('.searchBox input').on('keydown, keyup', function () {
    var searchWord = $(this).val();
    var searchLength = searchWord.length;
    if (searchLength > 0) {
        $(this).parents('.searchBox').find('.deleteBtn').show();

    } else {
        $(this).parents('.searchBox').find('.deleteBtn').hide();
    }
});

$('.searchBox .deleteBtn').click(function() {
    $(this).siblings('input').val('');
    $(this).hide();
    return false;
});

// search input enter key
$(".searchBox input").keydown(function(key) {
    if (key.keyCode == 13) {
        $('.searchBox form').submit();
    }
});

if($('.search').length > 0) {
    function getParameterByName(name) {
        name = name.replace(/[\[]/, "\\[").replace(/[\]]/, "\\]");
        var regex = new RegExp("[\\?&]" + name + "=([^&#]*)"),
                results = regex.exec(location.search);
        return results == null ? "" : decodeURIComponent(results[1].replace(/\+/g, " "));
    }

    // search title 
    const searchTxt = getParameterByName('search');
    $('.searchWrap .searchTit span').text("' " + searchTxt + " '");
    $('.searchBox input').val(searchTxt);
    console.log(searchTxt)
}

// counselling write 
$('.agreeWrap').click(function(e) {
    $(this).toggleClass('active');
});

$(".counsellingWrArti form input[type='file']").change(function(e){
    $(this).parent().find('.uploadBtn').hide();
    $(this).parent().find('.delBtn').show();
    $(this).parents('.fileWrap').find('.ipt').val($(this)[0].files[0].name);
});
$('.counsellingWrArti form .delBtn').click(function() {
    $(this).parent().find('.delBtn').hide();
    $(this).parent().find('.uploadBtn').show();
    $(this).parents('.fileWrap').find('.ipt').val('');
    $(this).parent().find('input[type=file]').val('');
});

$(".counsellingWrArti .btnCsApply").on("click", (event) => {
    csApply(event);
});

const csApply = (event) => {
    let name = $(event.target)
        .parents("form")
        .find("input[name='name']")
        .val();
    let pwd = $(event.target)
        .parents("form")
        .find("input[name='pwd']")
        .val();	
    let phone = $(event.target)
        .parents("form")
        .find("input[name='phone']")
        .val();
    let category = $(event.target)
        .parents("form")
        .find("select[name='category']")
        .val();
    let title = $(event.target)
        .parents("form")
        .find("input[name='title']")
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
    let file1 = $(event.target)
        .parents("form")
        .find("input[name='file1']")
        .val();
    let file2 = $(event.target)
        .parents("form")
        .find("input[name='file2']")
        .val();
    let file3 = $(event.target)
        .parents("form")
        .find("input[name='file3']")
        .val();
    let file4 = $(event.target)
        .parents("form")
        .find("input[name='file4']")
        .val();
    let file5 = $(event.target)
        .parents("form")
        .find("input[name='file5']")
        .val();
    let captcha = $(event.target)
        .parents("form")
        .find("input[name='captcha']")
        .val()

    if (!name) {
        Swal.fire({
            icon: "warning",
            text: "이름을 입력하세요.",
            confirmButtonColor: "#2B4039",
            confirmButtonText: "확인",
        });
    }	else if (!pwd) {
            Swal.fire({
                icon: "warning",
                text: "비밀번호를 입력하세요.",
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
    } else if (!category) {
        Swal.fire({
            icon: "warning",
            text: "상담분야를 선택하세요.",
            confirmButtonColor: "#2B4039",
            confirmButtonText: "확인",
        });
    }   else if (!personal) {
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
            pwd: pwd,
            phone: phone,
            category: category,
            title: title,
            content: content,
            file1: file1,
            file2: file2,
            file3: file3,
            file4: file4,
            file5: file5,
            personal: personal,
            marketing: marketing
        };

        console.log(sendData);

        // $.ajax({
			// 	type: "POST",
			// 	url: "",
			// 	data: sendData,
			// 	success: (response) => {
			// 		const responseJson = JSON.parse(response);
	
			// 		if (responseJson.status) {
			// 			Swal.fire({
			// 				icon: "success",
			// 				html: "상담 신청이 완료되었습니다.",
			// 				confirmButtonColor: "#2B4039",
			// 				confirmButtonText: "확인",
			// 			}).then(() => {
			// 				location.reload();
			// 			});
			// 		} else {
			// 			Swal.fire({
			// 				icon: "error",
			// 				html: "처리 중 오류가 발생하였습니다.<br>잠시 후 다시 시도해주세요.",
			// 				confirmButtonColor: "#2B4039",
			// 				confirmButtonText: "확인",
			// 			});
	
			// 			console.log(response);
			// 		}
			// 	},
			// 	error: (response) => {
			// 		Swal.fire({
			// 			icon: "error",
			// 			html: "처리 중 오류가 발생하였습니다.<br>잠시 후 다시 시도해주세요.",
			// 			confirmButtonColor: "#2B4039",
			// 			confirmButtonText: "확인",
			// 		});
	
			// 		console.log(response);
			// 	},
			// });
	}
};

