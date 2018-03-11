document.querySelector('.img__btn').addEventListener('click', function() {
  document.querySelector('.cont').classList.toggle('s--signup');
});


$('button').on('click', function() {
  if($(this).hasClass('nav-button')) {
    $('nav div').addClass('show');
  } else if($(this).hasClass('exit-menu')) {
    $('nav div').removeClass('show');
  } 
  else if($(this).hasClass('to-top')) {
    $('html,body').animate({scrollTop:0}, 'slow');
  }
});




