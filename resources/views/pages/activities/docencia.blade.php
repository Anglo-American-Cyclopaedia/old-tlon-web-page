@extends('layouts.base')

@section('content')
<div class="container">
  <div class="col-xs-12">
    <div class="page-header">
      <img class="img-responsive pull-right img-logo" src="{{ asset('images/tlon/logo.png') }}" />
      <h1>{{ trans('activities-teaching.title' )}} <small>{{ trans('activities-teaching.subtitle' )}}</small></h1>
      <div class="clearfix"></div>
    </div>
  </div>
  <div class="col-xs-12 text-dark">
    <div class="col-xs-12">
      <h3>{{ trans('activities-teaching.bacherlor.title' )}}</h3>
      <br>
      <div class="col-xs-12 col-sm-6">
        <a class="text-center">
          <h4 class="text-center">{{ trans('activities-teaching.bacherlor.stochastic-models.title' )}}</h4>
          <br>
          <p class="text-justify">
            {{ trans('activities-teaching.bacherlor.stochastic-models.description' )}}
          </p>
        </a>
      </div>
      <div class="col-xs-12 col-sm-6">
        <a class="text-center">
          <h4 class="text-center">{{ trans('activities-teaching.bacherlor.programming-languages.title' )}}</h4>
          <br>
          <p class="text-justify">
          {{ trans('activities-teaching.bacherlor.programming-languages.description' )}}
          </p>
        </a>
      </div>
    </div>

    <div class="clearfix"></div>
    <hr>
    <div class="col-xs-12">
      <h3>{{ trans('activities-teaching.master.title' )}}</h3>
      <br>
      <div class="col-xs-12 col-sm-6">
        <a class="text-center">
          <h4 class="text-center">{{ trans('activities-teaching.master.adhoc-networks.title' )}}</h4>
          <br>
          <p class="text-justify">
          {{ trans('activities-teaching.master.adhoc-networks.description' )}}
          </p>
        </a>
      </div>
      <div class="col-xs-12 col-sm-6">
        <a class="text-center">
          <h4 class="text-center">{{ trans('activities-teaching.master.stochastic-models.title' )}}</h4>
          <br>
          <p class="text-justify">
          {{ trans('activities-teaching.master.stochastic-models.description' )}}
          </p>
        </a>
      </div>
    </div>
  </div>
</div>
<div class="clearfix"></div>
@stop