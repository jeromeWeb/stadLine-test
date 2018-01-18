@extends('welcome')

@section('section')

<div class="clearfix">
	<header class="col-xs-12 col-sm-6 col-sm-push-3">
		<h2 class="h2 fw-black ">Résultat de la partie</h2>
	</header>
</div>

<section data-stape="scoreParty" class="col-xs-12 col-sm-6 col-sm-push-3">
@for ($i = 1; $i <= 5; $i++)
	<div class="players clearfix padding-gutter">
		<div class="pull-left">
			@include('components/avatar')
		</div>
		<div class="pull-left">
			<label class="padding-gutter" for="player{{$i}}">Pseudo{{$i}}</label>
			<p class="txt-brand"><span class="fw-bold padding-gutter">a gagné le badge</span></p>
		</div>
		<div class="pull-right padding-gutter">
			<p class="txt-ui-green ">20 points</p>
			{{-- <p class="txt-ui-red">+ 0 point</p> --}}
		</div>
	</div>
@endfor


<div class="bet-btn btn-principal-1-slack">
	@include('switch-library.btn-library', ['target'=>'btn-principal-1-slack', 'message'=>'Partager', 'classJS'=>''])
</div>

<div class="bet-btn">
	@include('switch-library.btn-library', ['target'=>'btn-principal-1', 'message'=>'Nouvelle partie', 'classJS'=>''])
</div>

</section>


@endsection