@extends('layout.default')

@include('partials.menu.menu')

@section('content')
<div class="home-content">
  <div class="valign-wrapper row">
    <div class="col card hoverable s10 pull-s1 m6 pull-m3 l4 pull-l4">
      <form action="{{$action}}" method="post">
        <input name="_token" hidden value="{!! csrf_token() !!}" />
        <div class="card-content">
          @yield('card-content')
        </div>
        <div class="card-action center-align">
          @yield('card-action')
        </div>
      </form>
    </div>
  </div>
</div>
@stop
