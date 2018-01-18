{{$user->name}}

{{dd($game->getPlayers())}}

@foreach($badges as $badge)
  {{$badge->type}}/{{$badge->step}}
  {{App\Enums\Badges::getName($badge)}}
@endforeach
