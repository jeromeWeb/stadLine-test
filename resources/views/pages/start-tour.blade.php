@extends('welcome')

@section('section')

@section('meta_title')
{{ __('Motton') }}
@endsection

@include('components.settings')

<div class="dealer-js">
  @include('components.playerToBegin', ['dealer'=>'manu'])
</div>

<div class="hidden inputBet-js">
      <div class="bet clearfix">
         @include('components/bet/input-bet')
      </div>
</div>

<div class="hidden inputBetResult-js">
    <div class="bet clearfix">
       @include('components/bet/input-betResult')
    </div>
</div>

<div class="hidden score-js">
    <div class="bet clearfix">
       @include('components/bet/score')
    </div>
</div>

@endsection
