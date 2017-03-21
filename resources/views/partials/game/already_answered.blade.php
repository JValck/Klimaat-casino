@extends('pages.game.question')

@section('card')
<div class="card-content">
  <span class="card-title">{{$pinball->name}} <small>{{ $pinball->quote }}</small></span>
  <strong>{{trans('messages.oeps')}}!</strong><br />
  <p>{{trans('messages.pinballAlBeantwoord')}}</p>
</div>
<div class="card-action">
  <a class="btn waves-effect waves-light" type="submit" href="{{ url($next) }}"><i class="material-icons right">skip_next</i>{{ $end? trans('messages.opnieuwSpelen'):trans('messages.volgendePinball') }}</a>
</div>
@stop
