//toggleでヒント・答え表示
$('.hint').click(function() {
  $(this).children('.hint__txt').slideToggle(200);
});

$('.answer').click(function() {
  $(this).children('.answer__txt').slideToggle(200);
});
