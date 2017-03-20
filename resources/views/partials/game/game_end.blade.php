@extends('pages.game.question')

@section('card')
<div class="card-content">
  <span class="card-title">{{trans('messages.eindeVanHetSpel')}}</span>
  <p>Je CO<sub>2</sub>-uitstoot bedraagt <strong>{{$uitstoot}}</strong>kg.</p>
  <br/>
  <p>Je eindigt op de <strong>{{$rank}}</strong><sup>e</sup> plaats!</p>
</div>
<div class="card-action">
  <a class="btn waves-effect waves-light" type="submit" href="{{ url('start') }}"><i class="material-icons right"></i>{{ trans('messages.opnieuwSpelen') }}</a>
</div>
@stop
