$(function () {

  $(".is-hamburger").on('click', function () {


    $(this).toggleClass("is-open")
    $(".p-black-bg").toggleClass("is-open")
    $(".l-sidebar").toggleClass("is-open");
    $("html").toggleClass("is-open")



  });
  // 背景をクリックしても消える設定
  $(".p-black-bg").on('click', function () {

    $(".l-sidebar").toggleClass("is-open");
    $(".p-black-bg").toggleClass("is-open")
    $("html").toggleClass("is-open")
    $(".is-hamburger").toggleClass("is-open")


  });








});