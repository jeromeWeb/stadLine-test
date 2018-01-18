<table class='result'>
  <thead>
    <tr>
      @foreach($pseudo as $name)
        <td>
            {{$name}}
        </td>
      @enforeach
    </tr>
  </thead>
  <tbody>
  @foreach($data_array as $ligne)
    <tr>
        @foreach($ligne as $data_player)
        <td>
          @include('pages.soustableau', ['data_player' => $data_player])
        </td>
        @endforeach
    </tr>
  @endforeach
  </tbody>
</table>
