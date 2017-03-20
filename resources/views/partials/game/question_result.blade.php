@extends('pages.game.question')

@section('card')
<div class="card-content">
  <span class="card-title">{{$pinball->name}} <small>{{ $pinball->quote }}</small></span>
  <strong>{{$valid?trans('messages.proficiat'):trans('messages.helaas')}}</strong><br />
  @if($valid)
    Je antwoord was juist!
  @else
    Je antwoord is helaas fout.
  @endif
  <p>Momenteel bedraagt je CO<sub>2</sub>-uitstoot <strong>{{$uitstoot}}</strong>kg.</p>
</div>
<div class="card-action">
  <a class="btn waves-effect waves-light" type="submit" href="{{ url('pinball/'.$id) }}"><i class="material-icons right">skip_next</i>{{ trans('messages.volgendePinball') }}</a>
</div>
@stop
