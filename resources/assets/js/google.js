
$("#logout").on("click", function(){
  // console.log(gapi.auth2.getAuthInstance().isSignedIn.Ab);
  gapi.auth2.getAuthInstance().disconnect();
  $('.abcRioButtonIconImage').removeClass("abcRioButtonIconImageHide");
  $('.abcRioButtonIcon').removeClass("noPadding");
  $('#googleImage').remove();
});

function getDivGoogleImg(){
  setTimeout(function() {
    var div = $(".abcRioButtonContentWrapper").children()[0];
    isConnect(div);
  }, 500);
}

var isCo = false;

function isConnect(div) {
  if($(div).hasClass("noPadding")){
    isCo = true;
  }
  return isCo;
}


function isLoggin(){
  if(!getDivGoogleImg()){
    $("#logout").addClass("hide");
  }else{
    $("#logout").removeClass("hide");
  }
}

isLoggin();
