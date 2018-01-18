@extends('welcome')
@section('meta_title')
  {{ __('Choose-players') }}
@endsection

@section('section')

<h2>Veuillez saisir les pseudos</h2>

@php
    $j = 1;
@endphp

@for ($i=0; $i < 5; $i++)
  <div class="container">
      @include('components.input-player',[$j => $j])
  </div>
  @php
      $j++;
  @endphp

@endfor


@endsection
