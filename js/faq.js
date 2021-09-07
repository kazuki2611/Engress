

$(function () {
  $(".c-faq__wrap__title").click(function () {




   
        //クリックしたjs-accordion-title以外の全てのopenを取る
        $(".c-faq__wrap__title").not(this).removeClass("active");
        //クリックされたjs-accordion-title以外のcontentを閉じる
        $(".c-faq__wrap__title").not(this).next().slideUp(300);
        //thisにopenクラスを付与
        $(this).toggleClass("active");
        //thisのcontentを展開、開いていれば閉じる
        $(this).next().slideToggle(300);
      });
      
      /* 下記でもOK
       $(".js-accordion-title").on('click', function () {
         $(".js-accordion-title").not(this).removeClass("open").next().slideUp(300);
         $(this).toggleClass("open").next().slideToggle(300);
       });
       */
  

  


 
});
// $(function () {
//   $(".c-faq__wrap__title").click(function () {




//     $(".op_plus").not(this).removeClass("active");
//     $(".c-faq__wrap__title").not(this).next().slideUp(300);
   
//     // $(".c-faq__wrap__title").toggleClass("u-border")
//     // thisは押したボタンのみってこと
//     // .c-faq__wrap__titleを押した時に.op_plusを探してそこのみにクラス名をつける
//     // $(this).find(".op_plus").toggleClass('active');
//     $(".op_plus").toggleClass('active');
//     // $('.op_plus').toggleClass('active');
  
//     $(this).next().slideToggle(300);


  


//   });
// });
// $(function() {
//   $('.op_plus').click(function() {
//     $('.op_plus').toggleClass('active');
//   });
// });