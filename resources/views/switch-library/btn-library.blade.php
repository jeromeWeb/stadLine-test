@switch($target)

    @case('btn-principal-1')
      <a class="btn btn-principal-1 {{$classJS}}">{{$message}}</a>
    @breakswitch

    @case('btn-principal-2')
      <a class="btn btn-principal-2">{{$message}}</a>
    @breakswitch

    @case('btn-secondaire-1')
      <a href="{{route($lien)}}" class="btn btn-secondaire-1">{{$message}}</a>
    @breakswitch

    @case('btn-secondaire-2')
      <a class="btn btn-secondaire-2">{{$message}}</a>
    @breakswitch

@endswitch
