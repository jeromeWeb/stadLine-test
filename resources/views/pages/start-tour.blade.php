{{-- @extends('welcome')

@section('section')

@section('meta_title')
{{ __('Motton') }}
@endsection --}}
<div id="playing-game" data-game-id="{{$game->id}}">
  <div class="dealer-js">
    @include('components.playerToBegin', ['dealer'=>'manu'])
  </div>

  <div class="hidden inputBet-js">
        <div class="bet clearfix" id="bet-field">
           {{-- @include('components/bet/input-bet') --}}
        </div>
  </div>

  <div class="hidden inputBetResult-js">
      <div class="bet clearfix" id="result-field">
         {{-- @include('components/bet/input-betResult') --}}
      </div>
  </div>

  <div class="hidden score-js">
      <div class="bet clearfix" id="score-field">
         {{-- @include('components/bet/score') --}}
      </div>
  </div>
</div>


{{-- @endsection --}}
