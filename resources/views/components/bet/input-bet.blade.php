
<header class="col-xs-12">
	<h2 class="h2 fw-black ">Prédiction</h2>
	<p class="h3">1er Tour - 10 Cartes</p>
</header>

<section class="col-xs-12 col-sm-6 col-sm-push-3">
@for ($i = 1; $i <= 5; $i++)
	<div class="players clearfix">
		<div class="pull-left">
			@include('components/avatar')
		</div>
		<div class="pull-left">
			<label for="player{{$i}}">Pseudo{{$i}}</label>
			<p class="txt-brand"><span class="fw-bold">0</span> point</p>
		</div>
		<div class="pull-right">
			<input required id="player{{$i}}" type="number" name="player" placeholder="pari">
		</div>
	</div>
@endfor<div class="bet-btn">
	@include('switch-library.btn-library', ['target'=>'btn-principal-1', 'message'=>'Jouer', 'classJS'=>'showResult nextStepTour'])
</div>

</section>



{{-- @include('components.bet.paveNumerique') --}}
