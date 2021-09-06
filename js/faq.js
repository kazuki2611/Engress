

$(function () {
  $(".c-faq__wrap__title").click(function () {




    $(".c-faq__wrap__title").not(this).next().slideUp(300);
    // $(".c-faq__wrap__title").toggleClass("u-border")
    // $('.op_plus').toggleClass('active');
    // thisは押したボタンのみってこと
    // .c-faq__wrap__titleを押した時に.op_plusを探してそこのみにクラス名をつける
    $(this).find(".op_plus").toggleClass('active');
  


    $(this).next().slideToggle(300);
  


  });
});
$(function() {
  $('.op_plus').click(function() {
    $('.op_plus').toggleClass('active');
  });
});