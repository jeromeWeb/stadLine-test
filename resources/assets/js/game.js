$(function(){

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
})
