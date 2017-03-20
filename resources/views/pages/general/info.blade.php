@extends('layout.default')

@include('partials.menu.menu')

@section('content')
<div class="home-content">
  <div class="valign-wrapper container">
    <div class="card" style="width: 100%">
      <div class="card-content">
        @yield('card-content')
      </div>
      <div class="card-action center-align">
        @yield('card-action')
      </div>
    </div>
  </div>
</div>
@stop
