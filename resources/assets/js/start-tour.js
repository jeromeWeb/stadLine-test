$(document).on('click',".showGame",function(){
  $('.inputBet-js').slideToggle(300);
  $('.dealer-js').slideUp(300)
} )

$(document).on('click',".showResult",function(){
  $('.inputBetResult-js').slideToggle(300);
  $('.inputBet-js').slideUp(300)
} )

$(document).on('click',".showScore",function(){
  $('.score-js').slideToggle(300);
  $('.inputBetResult-js').slideUp(300)
} )
