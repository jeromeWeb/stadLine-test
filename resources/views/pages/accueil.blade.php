@extends('welcome')

@section('section')

    {{-- burger icon  --}}
    <input type="checkbox" name="navBurger" id="navBurger" class="burger-nav">
    <label for="navBurger"><span class="hide-text">Navigation</span></label>

    {{--  nav side--}}
    @include('layout.sidebar')


    {{--  Content --}}
    <h1 class="text-center">Le motton</h1>

    <a href="#" class="btn-play">Jouer</a>


@endsection
