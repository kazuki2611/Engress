

$(function () {
  $(".c-faq__wrap__titile").click(function () {




    $(".c-faq__wrap__titile").not(this).next().slideUp(300);
    $(".is-border").toggleClass("u-border")

    // $("c-faq__wrap__titile u-border").css('display', 'none');



    $(this).next().slideToggle(300);


  });
});