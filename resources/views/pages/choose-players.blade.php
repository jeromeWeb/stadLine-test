@php
   $j = 1;
@endphp

<h2 class="h3 moved">Veuillez indiquer les joueurs</h2>

<ul class="moved">
    @for ($i=0; $i < 5; $i++)
        <li>
            @include('components.input-player',[$j => $j])
        </li>

        @php
            $j++;
        @endphp
    @endfor
</ul>

<<<<<<< HEAD
<div class="padding-gutter text-center">
  @include('switch-library.btn-library', ['target'=>'btn-secondaire-1', 'message'=>'Démarrer', 'lien'=>'start-tour'])
=======
<div class="padding-gutter text-center moved">
  @include('switch-library.btn-library', ['target'=>'btn-secondaire-1', 'message'=>'Démarrer'])
>>>>>>> frontGeneral
</div>
