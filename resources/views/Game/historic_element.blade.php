<a class="game-summary" data-game-id="{{$game->id}}">
  <span>{{$game->updated_at}}</span>
  <span>
    @php $nbPlayer = $game->countPlayers(); @endphp
    @foreach ($game->players->pluck('user') as $player)
      @php $nbPlayer--; @endphp
      {{$player->pseudo}} @if($nbPlayer > 0) , @endif
    @endforeach
  </span>
  {{-- <span>Gagnant(s):
    @foreach ($game->winners as $winner)
      {{$winner->user->pseudo}}
    @endforeach
  </span> --}}
</a>
