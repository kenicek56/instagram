$('#pushLeft').click(function(){
  var original = $('#one').css('left');
  var revised = original+50;
  $('#one').animate({
    'marginLeft': '-=50'
  },500)
});

$('#pushRight').click(function(){
  var original = $('#one').css('left');
  $('#one').animate({
    'marginLeft' : '+=50'
  },500)
});