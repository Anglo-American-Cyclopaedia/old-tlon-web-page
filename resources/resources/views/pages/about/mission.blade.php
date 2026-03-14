@extends('layouts.base')

@section('content')
  <div class="container">
    <div class="col-xs-12">
      <div class="page-header">
        <img class="img-responsive pull-right img-logo" src="{{ asset('images/tlon/logo.png') }}" />
        <h1>{{ trans('about-mission-vision.title') }} <small>{{ trans('about-mission-vision.subtitle') }}</small></h1>
        <div class="clearfix"></div>
      </div>
    </div>
    <div class="col-xs-12">
      <div class="row">
        <div class="col-xs-12 col-sm-6">
          <div class="well border-flat">
            <h3 class="text-center">{{ trans('about-mission-vision.mission.title') }}</h3>
            <br>
            <p class="text-justify">{{ trans('about-mission-vision.mission.description') }}</p>
          </div>
        </div>
        <div class="col-xs-12 col-sm-6">
          <div class="well border-flat">
            <h3 class="text-center">{{ trans('about-mission-vision.vision.title') }}</h3>
            <br>
            <p class="text-justify">{{ trans('about-mission-vision.vision.description') }}</p>
          </div>
        </div>
        <div class="col-xs-12">
          <h3>{{ trans('about-mission-vision.presentation')}}</h3>
          <br>
          <div class="border-flat">
            <object>
              <embed src="/files/Tlon2017.pdf" width="100%" height="600px" pluginspage="http://www.adobe.com/products/acrobat/readstep2.html" internalinstanceid="6" title="">
            </object>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="clearfix"></div>
@stop
