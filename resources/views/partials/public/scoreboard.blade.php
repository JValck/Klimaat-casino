@extends('pages.general.info')

@section('card-content')
  <span class="card-title">{{trans('messages.scorebord')}}</span>
  <table>
    <thead>
      <tr>
        <th>#</th>
        <th>Speler</th>
        <th>Datum</th>
        <th>CO<sub>2</sub>-uitstoot</th>
      </tr>
    </thead>
    <tbody>
      @foreach($games as $game)
        <tr>
          <td>{{$loop->index + 1}}</td>
          <td>{{ App\PlayerAlias::find(App\Player::find($game->player_id)->player_alias_id)->name }}</td>
          <td>{{ date('d-m-Y H:i:s' ,strtotime($game->game_end)) }}</td>
          <td>{{ $game->emmission }}kg</td>
        </tr>
      @endforeach
    </tbody>
  </table>
@stop

@section('card-action')
<a href="{{ url('about') }}" class="waves-effect waves-light btn-large"><i class="material-icons left">info</i>{{ trans('messages.info') }}</a>
@stop
