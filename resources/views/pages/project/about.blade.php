@extends('layouts.base')

@section('content')
<div class="container">
  <div class="col-xs-12">
    <div class="page-header">
      <img class="img-responsive pull-right img-logo" src="{{ asset('images/tlon/logo.png') }}" />
      <h1>{{ trans('tlon-project-about.title') }} <small>{{ trans('tlon-project-about.subtitle') }}</small></h1>
      <div class="clearfix"></div>
    </div>
  </div>
  <div class="col-xs-12 text-dark">
    <div class="col-xs-12 col-xs-offset-0 col-sm-10 col-sm-offset-1">
      <img id="figure-1" class="img-responsive" src="{{ asset('images/tlon/modelo_capas.png') }}" />
      <p class="text-center"><b>{{ trans('tlon-project-about.figure') }}</b> {{ trans('tlon-project-about.figure-description') }}</p>
    </div>
    <div class="clearfix"></div>
    <br><br>
    <p class="text-justify">
      {{ trans('tlon-project-about.description') }}
    </p>
    <br>
    <p class="text-justify">
      {{ trans('tlon-project-about.description-2') }}
    </p>
  </div>
</div>
<div class="clearfix"></div>
@stop