@extends('layout.default')

@include('partials.menu.menu')

@section('content')
<div class="home-content" style="height: auto">
  <div class="valign-wrapper container">
    <div class="row">
      @foreach($aliases as $alias)
        <div class="col s12 m6">
          <div class="card">
            <div class="card-content">
              <span class="card-title">{{$alias->name}}</span>
              <p>{{$alias->description}}</p>
            </div>
          </div>
        </div>
      @endforeach
    </div>
  </div>
  <div class="container row">
    <div class="card" style="width=100%">
      <div class="card-content">
        <span class="card-title">Over</span>
        <p>Deze klimaat casino software is geschreven door J. De Valck, student aan de UCLeuven-Limburg hogeschool.</p>
      </div>
    </div>
  </div>
</div>
@stop
