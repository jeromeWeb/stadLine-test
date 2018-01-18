$(document).on('click', '.js-start-game', function(){
  var players = [];
  $('#player-inputs').find('li').children('input').each(function(){
    if($(this).val() && $(this).val() != ""){
      players.push($(this).val());
    }
  })

  if(players.length < 3){ $('.error-players').html("Veuillez entrer au moins trois noms"); }
  else{
    $.ajax({
      url: window.location.origin + '/game/create',
      type: 'POST',
      data:{
        players: JSON.stringify(players)
      },
      success: function(response){
        $('#main-section').html(response)
      }
    });
  }
})

$(document).on('click',".showGame",function(){
  newTurn();
})

$(document).on('click',".showResult",function(){
  var valOk = false;
  var nbCarte = 0;
  $.each($('.pari'), function() {
    if(($(this).val() <= 10 && $(this).val() >= 0 && $(this).val() != "")){
      valOk = true;
      nbCarte = nbCarte + $(this).val();
    }else{
      valOk = false;
      $("#error-bet").html("Veuillez saisir un pari entre 0 et 10");
      $("#error-beti").html("Veuillez saisir un pari entre 0 et 10");
      return false;
    }
  });
  if(valOk == true){
    fillBet();
  }
});


    $(document).on('click',".fillResult",function(){
      var results = {};
      $('#result-inputs').children('.players').each(function(){
        var input = $(this).find('input');
        results[input.data('id')]= input.val();
      });
      $.ajax({
        url: window.location.origin + '/game/nextTurn',
        type: 'POST',
        data:{
          game_id: $('#playing-game').data('game-id'),
          results:results
        },
        success: function(response){
          $('#bet-field').html(response);
          showGame();
        }
      });
    } )

    $(document).on('click',".showScore",function(){


})

function showGame(){
  $('.inputBet-js').slideDown(300);
  $('.dealer-js').slideUp(300);
}

function showResult(){
  $('.inputBet-js').slideUp(300, function() {
      $('body').scrollTop(0)
      $('.inputBetResult-js').slideDown(300);
  })
}

function showScore(){
  $('.inputBetResult-js').slideUp(300, function() {
      $('body').scrollTop(0)
      $('.score-js').slideDown(300);
  })
}

function newTurn(){
  $.ajax({
    url: window.location.origin + '/game/newTurn',
    type: 'POST',
    data:{
      game_id: $('#playing-game').data('game-id')
    },
    success: function(response){
      $('#bet-field').html(response);
      showGame();
    }
  });
}

function nextTurn(){
  var results = {};
  $('#result-inputs').children('.players').each(function(){
    var input = $(this).find('input');
    results[input.data('id')]= input.val();
  });
  $.ajax({
    url: window.location.origin + '/game/nextTurn',
    type: 'POST',
    data:{
      game_id: $('#playing-game').data('game-id'),
      results:results
    },
    success: function(response){

      $('#bet-field').html(response);

      showGame();
    }
  });
}

function fillBet(){
  var bets = {};
  $('#bet-inputs').children('.players').each(function(){
    var input = $(this).find('input');
    bets[input.data('id')]= input.val();
  })
  $.ajax({
    url: window.location.origin + '/game/fillBets',
    type: 'POST',
    data:{
      game_id: $('#playing-game').data('game-id'),
      bets:bets
    },
    success: function(response){
      $('#result-field').html(response);
      showResult();
    }
  });
}

function nextTurn(){
  showResult();
}
