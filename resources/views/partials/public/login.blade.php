@extends('pages.general.home')

@section('card-content')
  <div class="row">
    <div class="input-field col s12">
      <input class="validate {{($errors->first('email'))?'invalid':''}}" id="email" type="email" name="email" value="{{ old('email') }}" />
      <label for="email" data-error="{{ ($errors->first('email'))? $errors->first('email'):trans('messages.ongeldigEmailAdres') }}">{{trans('messages.email')}}</label>
    </div>
  </div>
  <div class="row">
    <div class="input-field col s12">
      <input class="validate {{($errors->first('email-confirmed'))?'invalid':''}}" id="email-confirmed" type="email" name="email-confirmed" value="{{ old('email-confirmed') }}" />
      <label for="email-confirmed" data-error="{{ ($errors->first('email-confirmed'))? $errors->first('email-confirmed'):trans('messages.ongeldigEmailAdres') }}">{{trans('messages.herhaalEmail')}}</label>
    </div>
  </div>
  <div class="row">
    <div class="input-field col s12">
      <select name="alias">
        <!--<option value="" disabled selected>{{trans('messages.maakUwKeuze')}}</option>-->
        @foreach($aliases as $alias)
          <option value="{{$alias->id}}">{{$alias->name}}</option>
        @endforeach
      </select>
      <label>{{trans('messages.nickname')}}</label>
    </div>
  </div>
@stop

@section('card-action')
  <button class="btn waves-effect waves-light">{{trans('messages.starten')}}
    <i class="material-icons right">send</i>
  </button>
@stop
