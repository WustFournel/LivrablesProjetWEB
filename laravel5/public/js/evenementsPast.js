$('#past').click(function() {
  $('#content').load('pastEvents');
});

$('#future').click(function() {
  $('#content').load('futureEvents');
});

$('#encours').click(function() {
  $('#content').load('encoursEvents');
});

$('#idees').click(function() {
  $('#content').load('boiteidees');
});