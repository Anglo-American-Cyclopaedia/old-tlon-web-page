@extends('layouts.base')

@section('content')
  <div class="container">
    <div class="col-xs-12">
      <div class="page-header">
        <img class="img-responsive pull-right img-logo" src="{{ asset('images/tlon/logo.png') }}" />
        <h1>{{ trans('activities-investigation.title') }} <small>{{ trans('activities-investigation.subtitle')}}</small></h1>
        <div class="clearfix"></div>
      </div>
    </div>
    <div class="col-xs-12">
      <div class="col-xs-12 col-sm-6">
        <p class="text-justify">
          <b>{{ trans('activities-investigation.activity-1.title') }}:</b> {{ trans('activities-investigation.activity-1.description') }}
        </p>
        <br>

        <p class="text-justify">
          <b>{{ trans('activities-investigation.activity-2.title') }}:</b> {{ trans('activities-investigation.activity-2.description') }}
        </p>
        <br>

        <p class="text-justify">
          <b>{{ trans('activities-investigation.activity-3.title') }}:</b> {{ trans('activities-investigation.activity-3.description') }}
        </p>
      </div>
      <div class="col-xs-12 col-sm-6">
        <p class="text-justify">
          <b>{{ trans('activities-investigation.activity-4.title') }}:</b> {{ trans('activities-investigation.activity-4.description') }}
        </p>
        <br>
        <p class="text-justify">
          <b>{{ trans('activities-investigation.activity-5.title') }}:</b> {{ trans('activities-investigation.activity-5.description') }}
        </p>
        <br>
        <p class="text-justify">
          <b>{{ trans('activities-investigation.activity-6.title') }}:</b> {{ trans('activities-investigation.activity-6.description') }}
        </p>
        <br>
        <p class="text-justify">
          <b>{{ trans('activities-investigation.activity-7.title') }}:</b> {{ trans('activities-investigation.activity-7.description') }}
        </p>
      </div>
      <div class="clearfix"></div>
      <br>

      <div class="border-flat">
        <object>
          <embed src="/files/PosterTLON.pdf" width="100%" height="1300px" pluginspage="http://www.adobe.com/products/acrobat/readstep2.html" internalinstanceid="25" title="">
        </object>
      </div>
    </div>
  </div>
  <div class="clearfix"></div>
@stop
