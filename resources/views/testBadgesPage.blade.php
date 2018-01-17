{{$user->name}}

@foreach($badges as $badge)
  {{$badge->type}}/{{$badge->step}}
  {{App\Enums\Badges::getName($badge)}}
@endforeach
