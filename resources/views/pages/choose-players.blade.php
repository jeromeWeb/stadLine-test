@php
   $j = 1;
@endphp

<h2 class="h3 moved">Veuillez saisir les pseudos</h2>

<form class="form-group choose-players" action="" >

  <ul class="moved text-center">

    <p class="info hidden"></p>
      @for ($i=0; $i < 5; $i++)
          <li>
            @if ($i == 0)
              <span class="info-click-js"></span>
              <p class="info-dealer">Le premier joueur ditribue à la première partie!</p>
            @endif

            @include('components.input-player',[$j => $j])
          </li>

          @php
              $j++;
          @endphp
      @endfor
  </ul>

</form>



<div class="padding-gutter text-center moved">

  @include('switch-library.btn-library', ['target'=>'btn-secondaire-1', 'message'=>'Démarrer', 'lien'=>'start-tour'])

</div>
