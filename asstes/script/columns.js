// Document ready
$(() => {
  subBestSlide();
});

// 엄선된 칼럼 swiper
const subBestSlide = () => {
  var swiper = new Swiper(".sub .bestArti .slideWrap .bestSwiper", {
      effect: "fade",
      loop: false, // 무한 루프 활성화
      initialSlide: 0, // 첫 번째 슬라이드에서 시작
      autoplay: {
          delay: 3000,
          disableOnInteraction: false,
      },
      navigation: {
          nextEl: ".sub .bestArti .slideWrap .slideBtnWrap .nextBtn",
          prevEl: ".sub .bestArti .slideWrap .slideBtnWrap .prevBtn",
      },
      pagination: {
          clickable: true,
          el: ".sub .bestArti .swiper-pagination",
      },
      scrollbar: {
          el: ".swiper-scrollbar",
          hide: false,
          draggable: true,
      },
      on: {
          init: function () {
              this.slideToLoop(0, 0, false); // 첫 번째 슬라이드로 강제 이동
              this.scrollbar.updateSize();  // 스크롤바 동기화
          },
      },
  });
};
