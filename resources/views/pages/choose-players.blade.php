<h2 class="h3 moved">Veuillez indiquer les joueurs</h2>

<ul class="moved">
    @for ($i=0; $i < 5; $i++)
        <li>
            @include('components.input-player')
        </li>
    @endfor
</ul>
