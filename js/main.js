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