/*<p>Pagination part? borrowed from <a href='/JoshBlackwood/'>Joshua Blackwood</a>'s Pen <a href='/JoshBlackwood/pen/yoLBJ/'>yoLBJ</a>.</p>*/

var accordWithPage =  function() {

 var faqDiv = $('#faq-links div');


$(function () {

faqDiv.on("click", function() {

  var hideSec = 'faq-hide';
      var $this = $(this),
      $id = $this.attr('id'),
      $class = '.' + $('.about-' + $id).attr('class').replace(hideSec, '');

  $('#faq-wrapper').addClass(hideSec);
  $('.about-' + $id).removeClass(hideSec);
  $('div[class*=about]').not($class).addClass(hideSec);

 });

});

$(function () {

        var faqselect = 'faq-selected';

        faqDiv.click(function () {

        if ($(this).hasClass(faqselect)) {
            $(this).removeClass(faqselect);
        } else {
            $('#faq-links .faq-selected').removeClass(faqselect);
            $(this).addClass(faqselect);
        }
    }); //faq link selected
});



//Accordion

$(function () {

  var faqexpand = 'expanded';
  var faqcontent = $('.faq-content');
        //FAQ Accordion
        $('.faq-accordion > li > a').click(function (e) {
        		e.preventDefault();
        if ($(this).hasClass(faqexpand)) {
            $(this).removeClass(faqexpand);
//          $('.faq-accordion > li > a > div').not(this).css('opacity', '1');//returns li back to normal state
            $(this).parent().children('ul').stop(true, true).slideUp();
        } else {
//            $('.faq-accordion > li > a > div').not(this).css('opacity', '0.5');//dims inactive li
            $('.faq-accordion > li > a.expanded').removeClass(faqexpand);
            $(this).addClass(faqexpand);
            faqcontent.filter(":visible").slideUp();
            $(this).parent().children('ul').stop(true, true).slideDown();
        }
    }); //accordion function

    faqcontent.hide();

});

}

accordWithPage();

/*$(function () {
   $("#faq-links div").click(function () {
    $('.slide-left').fadeOut( "slow", "linear" );
     $('.slide-left').fadeIn( "slow", "linear" );
    }); //faq link fade in and out
  }); //document ready*/



  $(document).ready(function () {

  var monthNames = [ "Enero", "Febrero", "Marzo", "Abril", "Mayo", "Junio", "Julio", "Agosto", "Septiembre", "Octubre", "Noviembre", "Diciembre" ];
  var dayNames= [ "Domingo","Lunes","Martes","Miercoles","Jueves","Viernes","Dabado" ];

  var newDate = new Date();
  newDate.setDate(newDate.getDate());

  setInterval( function() {
  	var hours = new Date().getHours();
  	$(".hour").html(( hours < 10 ? "0" : "" ) + hours);
      var seconds = new Date().getSeconds();
  	$(".second").html(( seconds < 10 ? "0" : "" ) + seconds);
      var minutes = new Date().getMinutes();
  	$(".minute").html(( minutes < 10 ? "0" : "" ) + minutes);

      $(".month span,.month2 span").text(monthNames[newDate.getMonth()]);
      $(".date span,.date2 span").text(newDate.getDate());
      $(".day span,.day2 span").text(dayNames[newDate.getDay()]);
      $(".year span").html(newDate.getFullYear());
  }, 1000);



  $(".outer").on({
      mousedown:function(){
          $(".dribbble").css("opacity","1");
      },
      mouseup:function(){
          $(".dribbble").css("opacity","0");
      }
  });



  });
