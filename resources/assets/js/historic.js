// npm run watch

$(function(){

  $(document).on('change', '#just-me', function(){
    loadHistoric('justMe', $(this).is(':checked'));
  })

  $(document).on('change', '.js-sort-games', function(){
    loadHistoric('sorter', $(this).val());
  })

})

function loadHistoric(changed_type, changed_value){
   $.ajax({
     url: baseUrl + '/historic/load',
     type: 'POST',
     data:{
       page: changed_type == 'page'?changed_value:$('#games-pool').find('data').data('page'),
       justMe : changed_type == 'justMe'?changed_value:$('#just-me').is(':checked'),
       sorter : changed_type == 'sorter'?changed_value:$('.js-sort-games').val()
     },
     success: function(response){
       $('#games-pool').html(response)
     }
   });
}
