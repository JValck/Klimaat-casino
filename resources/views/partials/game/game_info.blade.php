@extends('pages.general.home')

@section('card-content')
  <span class="card-title">{{trans('messages.doelVanHetSpel')}}</span>
  <p>Probeer zo veel mogelijk CO<sub>2</sub>-uitstoot kwijt te spelen door vragen op te lossen bij de flipperkasten.</p>
  <p>Alvorens je de vraag kan beantwoorden, moet je CO<sub>2</sub> inzetten. Is je antwoord correct, dan gaat dit van je CO<sub>2</sub>-uitstoot af.
  Was je antwoord fout, dan verandert er niets.</p>
  <p>Momenteel bedraagt je CO<sub>2</sub>-uitstoot <strong>{{$uitstoot}}</strong>kg.</p>
@stop

@section('card-action')
<a class="waves-effect waves-light btn-large" href="pinball/{{$id}}"><i class="material-icons left">done</i>{{ trans('messages.OK') }}</a>
@stop
