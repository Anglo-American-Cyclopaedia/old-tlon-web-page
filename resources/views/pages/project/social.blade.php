@extends('layouts.base')

@section('content')
<div class="container">
  <div class="col-xs-12">
    <div class="page-header">
      <img class="img-responsive pull-right img-logo" src="{{ asset('images/tlon/logo.png') }}" />
      <h1>{{ trans('tlon-project-social-model.title') }} <small>{{ trans('tlon-project-social-model.subtitle') }}</small></h1>
      <div class="clearfix"></div>
    </div>
  </div>
  <div class="col-xs-12 text-dark text-center">
    <img class="img-responsive img-margin-auto" style="width: 60%;"  src="{{ asset('images/tlon/modelo_social.jpg') }}">
    <p class="text-center"><b>{{ trans('tlon-project-social-model.figure') }}</b> {{ trans('tlon-project-social-model.figure-description') }}</p>
  </div>
  <div class="col-xs-12">
    <br><br>
    <p class="text-justify">
      {{ trans('tlon-project-social-model.description-1') }}
    </p>
    <br>
    <p class="text-justify">
    {{ trans('tlon-project-social-model.description-2') }}
    </p>
    <br>
    <p class="text-justify">
      {{ trans('tlon-project-social-model.description-3') }}
    </p>
  </div>
</div>
<div class="clearfix"></div>
@stop