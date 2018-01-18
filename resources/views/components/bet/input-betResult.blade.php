<header class="col-xs-12">
	<h2 class="h2 fw-black ">En cours</h2>
	<p class="h3">Fin du 1er Tour - 10 Cartes</p>
</header>

<section class="col-xs-12 col-sm-6 col-sm-push-3">
@for ($i = 1; $i <= 5; $i++)
	<div class="players clearfix">
		{{-- <div class="bet-result">
			<input disabled id="player{{$i}}" type="number" name="player" value="0">
			<input required id="player{{$i}}" type="number" name="Resultplayer" value="0">
		</div> --}}
		<div class="pull-left">
			@include('components/avatar')
		</div>
		<div class="pull-left">
			<label for="player{{$i}}">Pseudo{{$i}}</label>
			<p class="txt-brand"><span class="fw-bold">0</span> point</p>
		</div>
		<div class="pull-right bet-result">
			<div class="pull-left">
				<label>Prédit</label>
				<p>2</p>
			</div>
			<div class="pull-left">
				<label>Résultat</label>
				<input required id="player{{$i}}" type="number" name="Resultplayer">
			</div>
		</div>
	</div>
@endfor
<div class="bet-btn">
	@include('switch-library.btn-library', ['target'=>'btn-principal-1', 'message'=>'Voir les scores','classJS'=>'showScore'])
</div>

</section>
