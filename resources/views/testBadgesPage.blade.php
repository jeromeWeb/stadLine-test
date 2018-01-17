{{$user->name}}

@foreach($badges as $badge)
  {{$badge->user}}/{{$badge->step}}
@endforeach
