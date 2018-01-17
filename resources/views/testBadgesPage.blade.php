{{$user->name}}

@foreach($badges as $badge)
  {{$badge->type}}/{{$badge->step}}
@endforeach
