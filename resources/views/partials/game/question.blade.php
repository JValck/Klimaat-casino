@extends('pages.game.question')

@section('card')
<form method="post" action="{{ url()->current() }}">
  <input name="_token" hidden value="{!! csrf_token() !!}" />
  <input name="question" hidden value="{{ $question->id }}"/>
  <div class="card-content">
    <span class="card-title">{{$pinball->name}} <small>{{ $pinball->quote }}</small></span>
    <strong>{!! $question->question_text !!}</strong>
    <div class="input-field">
      <input type="text" class="validate" required name="answer" autocomplete="off"/>
      <label for="answer" data-error="{{trans('messages.ongeldigAntwoord')}}">{{trans('messages.answer')}}</label>
    </div>
  </div>
  <div class="card-action">
    <button class="btn waves-effect waves-light" type="submit"><i class="material-icons left">check</i>{{ trans('messages.controleren') }}</button>
  </div>
</form>
@stop
