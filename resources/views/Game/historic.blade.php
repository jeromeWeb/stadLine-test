@extends('welcome')
<div class="historic">
  <div id="historic-filters">
    <input class="js-filter-user" type="text" name="" value="">
    <label for="just-me">Dans lesquels j'ai joué</label>
    <input id="just-me" type="checkbox" name="just-me" value="">
    <select class="js-sort-games" name="sort-games">
      <option value="last">Les plus récents</option>
      <option value="first">Les plus anciens</option>
    </select>
  </div>
  <div id="games-pool">
    @include('Game.historic_iterator', ['games' => $games])
  </div>
</div>
