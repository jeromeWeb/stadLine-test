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

<button class="js-valid-players" type="button" name="button">Commencer</button>
