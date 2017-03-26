@extends('pages.general.home')

@section('card-content')
  <span class="card-title">{{$pinball->name}} <small>{{ $pinball->quote }}</small></span>
  <p>Hoeveel kg CO<sub>2</sub> wil je inzetten voor een vraag van flipperkast "{{$pinball->name}}"?</p>
  <p>{{ trans('messages.aantalKilo') }}</p>
  <p class="range-field">
    <input type="range" min="{{ $minBet }}" max="{{ $maxBet }}" name="bet" />
  </p>
@stop

@section('card-action')
<button type="submit" class="waves-effect waves-light btn-large"><i class="material-icons left">done</i>{{ trans('messages.OK') }}</button>
@stop
