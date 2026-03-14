@extends('layouts.base')

@section('content')
<div class="container">
  <div class="col-xs-12">
    <div class="page-header">
      <img class="img-responsive pull-right img-logo" src="{{ asset('images/tlon/logo.png') }}" />
      <h1>{{ trans('tlon-project-concepts.title') }} <small>{{ trans('tlon-project-concepts.subtitle') }}</small></h1>
      <div class="clearfix"></div>
    </div>
  </div>
  <div class="col-xs-12 text-dark">
    <div class="row">
      <div class="col-xs-6">
        <h3>{{ trans('tlon-project-concepts.adhoc-networks.title') }}</h3>
        <br>
        <p class="text-justify">
          {{ trans('tlon-project-concepts.adhoc-networks.description-1') }}
        </p>
        <br>
        <p class="text-justify">
          {{ trans('tlon-project-concepts.adhoc-networks.description-2') }}
        </p>
        <br>
        <img class="img-responsive" src="{{ asset('images/tlon/red_adhoc.png') }}">
        <p class="text-center"><b>{{ trans('tlon-project-concepts.adhoc-networks.figure') }}</b> {{ trans('tlon-project-concepts.adhoc-networks.figure-description') }}</p>
      </div>
      <div class="col-xs-6">
        <h3>{{ trans('tlon-project-concepts.virtualization.title') }}</h3>
        <br>
        <p class="text-justify">
          {{ trans('tlon-project-concepts.virtualization.description-1') }}
        </p>
        <br>
        <p class="text-justify">
          {{ trans('tlon-project-concepts.virtualization.description-2') }}
        </p>
        <br>
        <p class="text-justify">
          {{ trans('tlon-project-concepts.virtualization.description-3') }}
        </p>
        <br>
        <img class="img-responsive" src="{{ asset('images/tlon/virtualizacion.png') }}">
        <p class="text-center"><b>{{ trans('tlon-project-concepts.virtualization.figure') }}</b> {{ trans('tlon-project-concepts.virtualization.figure-description') }}</p>
      </div>
      <div class="clearfix"></div>
      <br>
      <div class="col-xs-6">
        <h3>{{ trans('tlon-project-concepts.multiagent-system.title') }}</h3>
        <br>
        <p class="text-justify">
          {{ trans('tlon-project-concepts.multiagent-system.description-1') }}
        </p>
        <br>
        <p class="text-justify">
          {{ trans('tlon-project-concepts.multiagent-system.description-2') }}
        </p>
        <br>
        <img id="figure-3" class="img-responsive img-margin-auto" src="{{ asset('images/tlon/mas.png') }}">
        <p class="text-center"><b>{{ trans('tlon-project-concepts.multiagent-system.figure') }}</b> {{ trans('tlon-project-concepts.multiagent-system.figure-description') }}</p>
      </div>
      <div class="col-xs-6">
        <h3>{{ trans('tlon-project-concepts.language.title') }}</h3>
        <br>
        <p class="text-justify">
          {{ trans('tlon-project-concepts.language.description-1') }}
        </p>
        <br>
        <p class="text-justify">
          {{ trans('tlon-project-concepts.language.description-2') }}
        </p>
        <br>
        <p class="text-justify">
          {{ trans('tlon-project-concepts.language.description-3') }}
        </p>
        <br>
        <img id="figure-4" class="img-responsive img-margin-auto" src="{{ asset('images/tlon/lenguaje.png') }}">
        <p class="text-center"><b>{{ trans('tlon-project-concepts.language.figure') }}</b> {{ trans('tlon-project-concepts.language.figure-description') }}</p>
      </div>
      <div class="clearfix"></div>
      <br>
      <div class="col-xs-12">
        <h3>{{ trans('tlon-project-concepts.network-coding.title') }}</h3>
        <br>
        <p class="text-justify">
          {{ trans('tlon-project-concepts.network-coding.description-1') }}
        </p>
        <br>
        <p class="text-justify">
          {{ trans('tlon-project-concepts.network-coding.description-2') }}
        </p>
        <br>
        <div class="col-xs-12 col-xs-offset-0 col-sm-10 col-sm-offset-1">
          <img class="img-responsive img-thumbnail" src="{{ url('images/tlon/network_coding.png') }}" />
          <p class="text-center"><b>{{ trans('tlon-project-concepts.network-coding.figure') }}</b> {{ trans('tlon-project-concepts.network-coding.figure-description') }}</p>
        </div>
        <div class="clearfix"></div>
        <br>
        <p class="text-justify">
          {{ trans('tlon-project-concepts.network-coding.description-3') }}
        </p>
        <br>
        <p class="text-justify">
          {{ trans('tlon-project-concepts.network-coding.description-4') }}
        </p>
      </div>
    </div>
  </div>
</div>
<div class="clearfix"></div>
@stop