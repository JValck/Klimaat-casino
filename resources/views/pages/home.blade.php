@extends('layout.default')

@include('partials.menu.menu')

@section('content')
<div class="home-content">
  <div class="valign-wrapper row login-box">
    <div class="col card hoverable s10 pull-s1 m6 pull-m3 l4 pull-l4">
      <div class="card-content">
        <h3 class="center-align">{!! trans('messages.probeerZoVeelMogelijkVanJeCO2KwijtTeSpelen') !!}</h3 class="center-align">
        </div>
        <div class="card-action center-align">
          <a class="waves-effect waves-light btn-large" href="start"><i class="material-icons right">launch</i>{{ trans('messages.spelen') }}</a>
        </div>
      </div>
    </div>
  </div>
  @stop
