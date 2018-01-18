<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="google-signin-scope" content="profile email">
        <meta name="google-signin-client_id" content="996656444072-6irn35okejaesihhtgoi8hnv1d30i8et.apps.googleusercontent.com">
        <script src="https://apis.google.com/js/platform.js" async defer></script>
        <meta name="csrf-token" content="{{ csrf_token() }}" />
        <title>Motton</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Work+Sans:400,500,600,900" rel="stylesheet">

        <!-- Styles -->
          <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    </head>
    <body>
        <div class="flex-center position-ref full-height">
                <div class="top-right links">
                      <div class="g-signin2" data-onsuccess="onSignIn" data-theme="dark"></div>

                            <input type="button" id="logout"  value="Logout" />
                            <input id="image" type="image" src=""/>
        </div>

        <div class="container nopadding">
            @yield('section')
        </div>


        <script
            src="https://code.jquery.com/jquery-3.2.1.min.js"
            integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4="
            crossorigin="anonymous">
        </script>
        <script
            src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.11.1/jquery-ui.min.js">
        </script>
         <script src="{{ URL::to('js/app.js') }}"></script>
         @push('footer_js_variables')
            var  isCo = false;
         @endpush

         <script>
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
           $('#image').attr("src", profile.getImageUrl());
           // The ID token you need to pass to your backend:
           var id_token = googleUser.getAuthResponse().id_token;
           console.log("ID Token: " + id_token);
           }
         </script>
    </body>
</html>
