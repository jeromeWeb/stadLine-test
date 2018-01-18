
<header class="col-xs-12">
	<h2 class="h2 fw-black ">Prédiction</h2>
	<p class="h3">Tour {{$round->nb_round}} - {{$round->nb_card}} Cartes</p>
</header>

<section class="col-xs-12 col-sm-6 col-sm-push-3" id="bet-inputs">
@php $i = 1; @endphp
@foreach($game->players->pluck('user') as $player)
	<div class="players clearfix">
		<div class="pull-left">
			@include('components/avatar')
		</div>
		<div class="pull-left">
			<label for="player{{$i}}">{{$player->pseudo}}</label>
			<p class="txt-brand"><span class="fw-bold">0</span> point</p>
		</div>
		<div class="pull-right">
			<input class="pari" required id="player{{$i}}" data-id={{$player->id}} type="number" name="{{$player->pseudo}}" placeholder="pari">
		</div>
	</div>
	@php $i++; @endphp
@endforeach

<div id="error-bet" data-nbCarte={{$round->nb_card}}></div>
<div class="bet-btn">
	@include('switch-library.btn-library', ['target'=>'btn-principal-1', 'message'=>'Jouer', 'classJS'=>'showResult nextStepTour'])
</div>

</section>



{{-- @include('components.bet.paveNumerique') --}}
