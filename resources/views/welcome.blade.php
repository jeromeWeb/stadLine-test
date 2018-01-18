<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="google-signin-scope" content="profile email">
        <meta name="google-signin-client_id" content="996656444072-6irn35okejaesihhtgoi8hnv1d30i8et.apps.googleusercontent.com">
        <script src="https://apis.google.com/js/platform.js" async defer></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

        <!-- Styles -->
          <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    </head>
    <body>
        <div class="flex-center position-ref full-height">
                <div class="top-right links">
                        <div class="g-signin2" id="signin-button" data-theme="dark"></div>
                            <input type="button" id="logout"  value="Logout" />
        </div>

            <div class="content">
                <div class="title m-b-md">
                    Laravel
                </div>

                <div class="links">
                    <a href="https://laravel.com/docs">Documentation</a>
                    <a href="https://laracasts.com">Laracasts</a>
                    <a href="https://laravel-news.com">News</a>
                    <a href="https://forge.laravel.com">Forge</a>
                    <a href="https://github.com/laravel/laravel">GitHub</a>
                </div>
            </div>
        </div>

         <script src="{{ URL::to('js/app.js') }}"></script>
         @push('footer_js_variables')
            var isConnect = isConnect();
         @endpush
         <script>

         /**
          * The Sign-In client object.
          */
         var auth2;

         /**
          * Initializes the Sign-In client.
          */
         $("#signin-button").on("click", function() {
           console.log("init");
             gapi.load('auth2', function(){
                 /**
                  * Retrieve the singleton for the GoogleAuth library and set up the
                  * client.
                  */
                 auth2 = gapi.auth2.init({
                     client_id: '996656444072-6irn35okejaesihhtgoi8hnv1d30i8et.apps.googleusercontent.com'
                 });
                 console.log(auth2);
                 // Attach the click handler to the sign-in button
                 var button = $('#signin-button');
                 console.log(button);
                 auth2.attachClickHandler(button, {}, onSuccess, onFailure);
             });
         });

         /**
          * Handle successful sign-ins.
          */
         function onSuccess(user) {
           console.log("success");
             console.log('Signed in as ' + user.getBasicProfile().getName());
          };

         /**
          * Handle sign-in failures.
          */
         function onFailure(error) {
           console.log("error");
             console.log(error);
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


         </script>


    </body>
</html>
