@extends('welcome')

@section('section')

    {{-- burger icon  --}}
    <input type="checkbox" name="navBurger" id="navBurger" class="burger-nav">
    <label for="navBurger"><span class="hide-text">Navigation</span></label>

    {{--  nav side--}}
    @include('layout.sidebar')


    {{--  Content --}}
    <div class="wrap-home-scale">
        <h1 class="text-center h2">Le Motton</h1>

        @include('components.btn-play')
    </div>


@endsection
