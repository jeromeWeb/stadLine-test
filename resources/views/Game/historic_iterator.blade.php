<data data-page="{{isset($page)?$page:0}}"></data>
@foreach ($games as $game)
  @include('Game.historic_element', ['game' => $game])
@endforeach
