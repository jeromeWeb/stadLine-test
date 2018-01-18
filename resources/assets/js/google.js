

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

  function isConnect(div) {
      console.log(2);
    var isCo = false;
    console.log($(div));
    console.log($(div).hasClass("noPadding"));
      if($(div).hasClass("noPadding")){
        console.log(3);
        isCo = true;
      }
      return isCo;
}

console.log(getDivGoogleImg());

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
