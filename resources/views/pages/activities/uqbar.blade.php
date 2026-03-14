@extends('layouts.base')

@section('content')
<div class="container">
  <div class="col-xs-12">
    <div class="page-header">
      <img class="img-responsive pull-right img-logo" src="{{ asset('images/tlon/logo_tlon.jpg') }}" />
      <img style="margin-right: 1rem;" class="img-responsive pull-right img-logo" src="{{ asset('images/tlon/uqbar/uqbar_logo_2024.png') }}" />
      <h1>{{ trans('activities-uqbar.title') }} <small>{{ trans('activities-uqbar.subtitle') }}</small></h1>
      <div class="clearfix"></div>
    </div>
  </div>
  <div class="col-xs-12">
    <p class="text-justify">
      {{ trans('activities-uqbar.description.1') }}
    </p>
    <br><br>
    <div class="col-xs-12 col-sm-6">
      <img class="img-responsive" src="{{ asset('images/tlon/uqbar/uqbar_miembros_2023.jpg') }}" />
    </div>
    <div class="col-xs-12 col-sm-6">
      <p class="text-justify">
        {{ trans('activities-uqbar.description.2') }}
      </p>
      <br>
      <p class="text-justify">
        {{ trans('activities-uqbar.description.3') }}
      </p>
      <br>
      <p class="text-justify">
        {{ trans('activities-uqbar.description.4') }}
      </p>
      <br>
      <p class="text-justify">
        {{ trans('activities-uqbar.description.5') }} <a href="https://linktr.ee/uqbarun" target="_blank" rel="noopener noreferrer">https://linktr.ee/uqbarun</a>
      </p>
    </div>
  </div>
  <div class="clearfix"></div>
  <br>
  <div class="col-xs-12">
    <br>
    <h3>{{ trans('activities-uqbar.members') }}</h3>

    <div class="col-xs-12">
      <div class="clearfix"></div>
      <br>
      <div class="col-xs-12">
        <h4>{{ trans('activities-uqbar.teachers') }}</h4>
        <br>
        <table class="table">
          <tbody>
            <tr>
              <td>Jorge Eduardo Ortiz Triviño</td>
            </tr>
            <tr>
              <td>Henry Zárate Ceballos</td>
            </tr>
            <tr>
              <td>Oscar Agudelo Rojas</td>
            </tr>
          </tbody>
        </table>
      </div>
      <div class="col-xs-12">
        <h4>{{ trans('activities-uqbar.undergraduate-students') }}</h4>
        <br>
        <table class="table table-stripped table-condensed table-bordered">
          <thead>
            <tr>
              <th>{{ trans('activities-uqbar.name') }}</th>
              <th>{{ trans('activities-uqbar.career') }}</th>
            </tr>
          </thead>
          <tbody>
            @foreach($members as $member)
            <tr>
              <td>{{ $member['name'] }}</td>
              <td>{{ trans($member['program']) }}</td>
            </tr>
            @endforeach
          </tbody>
        </table>
      </div>
    </div>
  </div>
  <div class="clearfix"></div>
  <div class="col-xs-12">
    <h3>{{ trans('activities-uqbar.activities-2017.title') }}</h3>
    <br>
    <ol>
      <li>{{ trans('activities-uqbar.activities-2017.1') }}</li>
      <br>
      <li>{{ trans('activities-uqbar.activities-2017.2') }}</li>
      <br>
      <li>{{ trans('activities-uqbar.activities-2017.3') }}</li>
    </ol>
  </div>
</div>
<div class="clearfix"></div>
@stop