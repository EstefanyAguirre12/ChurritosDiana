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



var card12 = document.querySelector(".card--12");

card12.addEventListener('mousemove', function (e) {

  var wh = window.innerHeight / 2,
  ww = window.innerWidth / 2;
  card12.style.setProperty('--mouseX12', (e.clientX - ww) / 25);
  card12.style.setProperty('--mouseY12', (e.clientY - wh) / 25);

});

card12.addEventListener('mouseleave', function (e) {

  card12.style.setProperty('--mouseX12', 0);
  card12.style.setProperty('--mouseY12', 0);

});
