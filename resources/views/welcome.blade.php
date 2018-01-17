<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Work+Sans:400,500,600" rel="stylesheet">

        <!-- Styles -->
          <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    </head>
    <body>
      <div class="container">
         @yield('section')
         <div class="row">
            <div class="avatar col-xs-12">
               @include('components/avatar')
            </div>
         </div>   

         <div class="row">
            <div class="bet col-xs-12">
               @include('components/bet/input-bet')
            </div>
         </div>
      </div>
         <script src="{{ URL::to('js/app.js') }}"></script>
    </body>
</html>
