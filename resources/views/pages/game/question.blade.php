@extends('layout.default')

@include('partials.menu.game')

@section('content')
<div class="home-content" style="background-image: url('{{ asset('img/'.$backgroundImage)}}')">
  <div class="valign-wrapper container">
    <div class="card" style="width: 100%">
      @yield('card')
    </div>
  </div>
</div>
@stop
