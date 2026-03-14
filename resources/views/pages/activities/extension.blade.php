@extends('layouts.base')

@section('content')
  <div class="container">
    <div class="col-xs-12">
      <div class="page-header">
        <img class="img-responsive pull-right img-logo" src="{{ asset('images/tlon/logo.png') }}" />
        <h1>{{ trans('activities-extension.title') }} <small>{{ trans('activities-extension.subtitle') }}</small></h1>
        <div class="clearfix"></div>
      </div>
    </div>
    <div class="col-xs-12">
      <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
        @foreach($activities as $index => $activity)
          <div class="panel panel-default border-flat">
            <div class="panel-heading cursor-link" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapse-{{ $index }}" aria-expanded="true" aria-controls="collapse-{{ $index }}">
                <h4 class="panel-title" id="heading-{{ $index }}">
                    {{ $activity['short_name'] }}
                </h4>
            </div>
            <div id="collapse-{{ $index }}" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading-{{ $index }}">
              <div class="panel-body">
                <dl class="dl-horizontal">
                    <dt>{{ trans('activities-extension.name') }}</dt>
                    <dd>
                        {{ $activity['name'] }}
                    </dd>
                    <dt>{{ trans('activities-extension.description') }}</dt>
                    <dd>
                        {{ $activity['description'] }}
                    </dd>
                    <dt>{{ trans('activities-extension.date') }}</dt>
                    <dd>{{ $activity['date'] }}</dd>
                    <dt>{{ trans('activities-extension.location') }}</dt>
                    <dd>{{ $activity['location'] }}</dd>
                    <dt>{{ trans('activities-extension.instructors') }}</dt>
                    <dd>
                        @foreach($activity['instructors'] as $instructor)
                            <div class="col-xs-12">
                                <div class="row">
                                    {{ $instructor }}
                                </div>
                            </div>
                        @endforeach
                    </dd>
                    <dt>{{ trans('activities-extension.slides') }}</dt>
                    <dd><a target="_blank" href="{{ $activity['presentation_url'] }}">{{ $activity['presentation_name'] }}</a></dd>
                </dl>
              </div>
            </div>
          </div>
        @endforeach
      </div>
    </div>
  </div>
  <div class="clearfix"></div>
@stop
