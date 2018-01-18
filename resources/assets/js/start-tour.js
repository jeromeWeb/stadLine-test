// Gestion du tour, boutons suivant

// $(document).on('click',".nextStepTour",function(){
//   $('body').scrollTop(0)
// } )

$(document).on('click',".showGame",function(){
    $('.inputBet-js').slideDown(300);
    $('.dealer-js').slideUp(300);
} )

$(document).on('click',".showResult",function(){
  $('.inputBet-js').slideUp(300, function() {
      $('body').scrollTop(0)
      $('.inputBetResult-js').slideDown(300);
  })
} )

$(document).on('click',".showScore",function(){
  $('.inputBetResult-js').slideUp(300, function() {
      $('body').scrollTop(0)
      $('.score-js').slideDown(300);
  })
} )
