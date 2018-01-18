<header class="col-xs-12">
	<h2>Resultat</h2>
	<p>Fin du 1er Tour - 10 Cartes</p>
</header>

<section class="col-xs-12 col-sm-6 col-sm-push-3">
@for ($i = 1; $i <= 5; $i++)
	<div class="players">
		@include('components/avatar') 
		<label for="player{{$i}}">Pseudo{{$i}}</label>
		<div class="bet-result">
			<input disabled id="player{{$i}}" type="number" name="player" value="0">
			<input required id="player{{$i}}" type="number" name="Resultplayer" value="0">
		</div>
	</div>
@endfor<div class="bet-btn">
	@include('components/btn-play')
</div>

</section>
