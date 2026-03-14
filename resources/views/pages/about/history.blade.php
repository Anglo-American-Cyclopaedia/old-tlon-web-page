@extends('layouts.base')

@section('content')
  <div class="container">
    <div class="col-xs-12">
      <div class="page-header">
        <img class="img-responsive pull-right img-logo" src="{{ asset('images/tlon/logo_tlon.jpg') }}" />
        <h1>{{ trans('about-history.title') }} <small>{{ trans('about-history.subtitle')}}</small></h1>
        <div class="clearfix"></div>
      </div>
    </div>
    <div class="col-xs-12">
      <div class="row">
        <div class="list-group">
          <a class="list-group-item">
            <h4 class="list-group-item-heading">2003</h4>
            <p class="list-group-item-text">{{ trans('about-history.2003') }}</p>
          </a>
          <a class="list-group-item">
            <h4 class="list-group-item-heading">2014</h4>
            <p class="list-group-item-text">{{ trans('about-history.2014') }}</p>
          </a>
          <a class="list-group-item">
            <h4 class="list-group-item-heading">2015</h4>
            <p class="list-group-item-text">{{ trans('about-history.2015') }}</p>
          </a>
          <a class="list-group-item active">
            <h4 class="list-group-item-heading">2016</h4>
            <p class="list-group-item-text">{{ trans('about-history.2016') }}</p>
          </a>
        </div>
      </div>
    </div>
  </div>
  <div class="clearfix"></div>
@stop
