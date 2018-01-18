@switch($target)

    @case('btn-principal-1')
      <button type="button" name="button" class="btn btn-principal-1">{{$message}}</button>
    @breakswitch

    @case('btn-principal-2')
      <button type="button" name="button" class="btn btn-principal-2">{{$message}}</button>
    @breakswitch

    @case('btn-secondaire-1')
      <button type="button" name="button" class="btn btn-secondaire-1">{{$message}}</button>
    @breakswitch

    @case('btn-secondaire-2')
      <button type="button" name="button" class="btn btn-secondaire-2">{{$message}}</button>
    @breakswitch

@endswitch
