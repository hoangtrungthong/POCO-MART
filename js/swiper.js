var swiper = 
    new Swiper(
        '.swiper-container',
        {
            slidesPerView: '1',
            spaceBetween: 0,
            autoplay: false,
            slidesPerView: 'auto',
            grabCursor: true,
            grabbingCursor: true,
            navigation: 
            {
                nextEl: '.swiper-button-next',
                prevEl: '.swiper-button-prev',
            },
        }
    );
    function reinitSwiper(swiper) {
        setTimeout(function () {
         swiper.update();
        }, 500);
      }
