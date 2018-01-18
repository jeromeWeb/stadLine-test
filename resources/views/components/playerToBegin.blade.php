<div class="text-center">
  @include('components.avatar')
</div>

<div class="text-center">
  <p>C'est à {{$dealer}} de distribuer !</p>
</div>

<div class="padding-gutter text-center">
  @include('switch-library.btn-library', ['target'=>'btn-principal-1', 'message'=>'Commencer le tour', 'classJS'=>'showGame nextStepTour'])
</div>
