@extends('welcome')

@section('section')

    {{-- burger icon  --}}
    <input type="checkbox" name="navBurger" id="navBurger" class="burger-nav">
    <label for="navBurger"><span class="hide-text">Navigation</span></label>

    {{--  nav side--}}
    @include('layout.sidebar')


    {{--  Content --}}
    <div class="wrap-home js-home">
        <div class="wrap-scale text-center">
            <img src="img/logo.png" alt="logo Stadline" class="logo moved">
            <h1 class="title moved txt-brand">Le Motton</h1>
            <h2 class="p txt-light-grey moved subtitle">Et si on commençait à jouer ?</h2>

            @include('components.btn-play')
        </div>
    </div>

    <div class="wrap-chose-players padding-gutter text-center">
        @include('pages.choose-players')

        <a id="backHome" class="back-home opaq">Retour</a>
    </div>



@endsection
