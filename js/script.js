$(function () {

  $(".is-hamburger").on('click', function () {


    $(this).toggleClass("is-open")
    $(".p-black-bg").toggleClass("is-open")
    $(".l-header__wrap").toggleClass("is-open");
    $("html").toggleClass("is-open")



  });
  // 背景をクリックしても消える設定
  $(".p-black-bg").on('click', function () {

    $(".l-header__wrap").toggleClass("is-open");
    $(".p-black-bg").toggleClass("is-open")
    $("html").toggleClass("is-open")
    $(".is-hamburger").toggleClass("is-open")


  });








});