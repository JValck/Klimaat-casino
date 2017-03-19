@extends('pages.general.home')

@section('card-content')
  <h3 class="center-align">{!! trans('messages.probeerZoVeelMogelijkVanJeCO2KwijtTeSpelen') !!}</h3>
@stop

@section('card-action')
<a class="waves-effect waves-light btn-large" href="start"><i class="material-icons right">launch</i>{{ trans('messages.spelen') }}</a>
@stop
