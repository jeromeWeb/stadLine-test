

$("#logout").on("click", function(){
  // console.log(gapi.auth2.getAuthInstance().isSignedIn.Ab);
  gapi.auth2.getAuthInstance().disconnect();
  $('.abcRioButtonIconImage').removeClass("abcRioButtonIconImageHide");
  $('.abcRioButtonIcon').removeClass("noPadding");
  $('#googleImage').remove();
});

  function getDivGoogleImg(){
    setTimeout(function() {
      console.log(2);
      var div = $(".abcRioButtonContentWrapper").children()[0];
      isConnect(div);
    }, 500);
  }

  var isCo = false;

  function isConnect(div) {
      console.log(2);
    console.log($(div));
    console.log($(div).hasClass("noPadding"));
      if($(div).hasClass("noPadding")){
        console.log(3);
        isCo = true;
      }
      return isCo;
}

console.log(isCo);

function isLoggin(){
  if(!getDivGoogleImg()){
    console.log(false);
    $("#logout").addClass("hide");
  }else{
    console.log(true);
    $("#logout").removeClass("hide");
  }
}

isLoggin();
