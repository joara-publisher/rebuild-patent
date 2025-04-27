// Document ready
$(() => {
    subNewsSlide();
});

const subNewsSlide = () => {
    var swiper = new Swiper(".sub .newsArti .slideContainer .newsSwiper", {
        effect: "fade",
        loop: true,
        autoplay: {
            delay: 3000,
            disableOnInteraction: false,
        },
        navigation: {
            nextEl: ".sub .newsArti .slideContainer .slideWrap .btnBox .nextBtn",
            prevEl: ".sub .newsArti .slideContainer .slideWrap .btnBox .prevBtn",
        },
        pagination: {
            el: ".sub .newsArti .swiper-pagination",
            clickable: true,
            renderBullet: function (index, className) {
                return '<span class="' + className + '">' + (index + 1) + "</span>";
            },
        },
    });
};
