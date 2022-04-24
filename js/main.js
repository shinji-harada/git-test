/*--------------------------
    SP-MENU
---------------------------*/

$(function () {
  $('.sp__btn').click(function () {
    $('.line').toggleClass('is_active');
    $('.sp__btn').toggleClass('is_active');
    $('.sp__menu').toggleClass('is_open');
  })
});

// ===========================
// swiper  
// ===========================
var swiper = new Swiper(".swiper", {
  loop: true,
  effect: "fade",
  speed: 3000, //3秒かけながら次の画像へ移動
  allowTouchMove: false,
  autoplay: {
    delay: 3000,
  },
  centeredSlides: true,
  slidesPerView: 1,
  // If we need pagination
  pagination: {
    el: '.swiper-pagination',
  },
});