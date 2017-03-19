@extends('pages.game.question')

@section('card')
<form method="post" action="{{ url()->current() }}">
<div class="card-content">
  <span class="card-title">{{$pinball->name}} <small>{{ $pinball->quote }}</small></span>
  <strong>{{ $question->question_text }}</strong>
</div>
<div class="card-action">
  <button class="btn waves-effect waves-light" type="submit"><i class="material-icons left">check</i>{{ trans('messages.controleren') }}</button>
</div>
</form>
@stop
