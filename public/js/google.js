// Get datas when google account login
function onSignIn(googleUser) {
// Useful data for your client-side scripts:
var profile = googleUser.getBasicProfile();
console.log("ID: " + profile.getId()); // Don't send this directly to your server!
console.log('Full Name: ' + profile.getName());
console.log('Given Name: ' + profile.getGivenName());
console.log('Family Name: ' + profile.getFamilyName());
console.log("Image URL: " + profile.getImageUrl());
console.log("Email: " + profile.getEmail());

// The ID token you need to pass to your backend:
var id_token = googleUser.getAuthResponse().id_token;
console.log("ID Token: " + id_token);
};

$("#logout").on("click", function(){
  console.log(gapi.auth2.getAuthInstance().isSignedIn.Ab);
  gapi.auth2.getAuthInstance().disconnect();
});

  console.log("plop");
  function isConnect() {
    console.log(gapi.auth2.getAuthInstance().isSignedIn.Ab);
   var  isCo = gapi.auth2.getAuthInstance().isSignedIn.Ab
    return isCo;
  };
  console.log(isConnect());
  console.log(gapi.auth2.getAuthInstance().isSignedIn.Aia);
