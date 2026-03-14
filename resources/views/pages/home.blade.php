@extends('layouts.base')

@section('content')
<div class="container">
    <div class="col-xs-12">
		@include('partials.breadcrumbs')
        <div class="page-header">
            <h1 class="text-center">{{ trans('home.name') }}</h1>
        </div>
        <p class="text-justify">
            {{ trans('home.description') }}
        </p>
        <div class="col-xs-12">
            <img  class="img-responsive" src="{{ asset('images/tlon/abstraccion_tlon.png') }}">
        </div>
    </div>
    <div class="col-xs-12">
        <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
            <div class="panel panel-default border-flat">
                <div class="panel-heading cursor-link" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                    <h4 class="panel-title" id="headingOne">
                        {{ trans('home.general-info.home') }}
                    </h4>
                </div>
                <div id="collapseOne" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
                    <div class="panel-body">
                    <dl class="dl-horizontal">
                        <dt>{{ trans('home.general-info.state') }}</dt>
                        <dd>{{ trans('home.general-info.state-registered') }}</dd>
                        <dt>{{ trans('home.general-info.classification') }}</dt>
                        <dd>
                            <a target="_blank" href="{{ asset('images/tlon/categorizacion.png') }}">{{ trans('home.general-info.classification-c') }}</a>
                        </dd>
                        <dt>{{ trans('home.general-info.plans') }}</dt>
                        <dd>
                            {{ trans('home.general-info.plans-systems-engineering') }}
                        </dd>
                        <dt>{{ trans('home.general-info.area') }}</dt>
                        <dd>
                        <p>{{ trans('home.general-info.area-exact-sciences') }}</p>
                        </dd>
                        <dt>{{ trans('home.general-info.research-lines.home') }}</dt>
                        <dd>
                            {{ trans('home.general-info.research-lines.applied-computing') }} <br>
                            {{ trans('home.general-info.research-lines.smart-systems') }}
                        </dd>
                    </dl>
                    </div>
                </div>
            </div>
            <div class="panel panel-default border-flat">
                <div class="panel-heading cursor-link" role="tab" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
                    <h4 class="panel-title" id="headingTwo">
                        {{ trans('home.contact.home') }}
                    </h4>
                </div>
                <div id="collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
                    <div class="panel-body">
                        <dl class="dl-horizontal">
                            <dt>{{ trans('home.contact.contact') }}</dt>
                            <dd>
                                Jorge Eduardo Ortiz Triviño - Director
                            </dd>
                            <dt>Dirección</dt>
                            <dd>
                                {{ trans('home.contact.address.building') }}. 453 - Of. 110
                                {{ trans('home.contact.address.department') }} <br>
                                {{ trans('home.contact.address.university') }} <br>
                                {{ trans('home.contact.address.zone') }} - Carrera 45 # 26-85 <br>
                                Bogotá D.C., Colombia
                            </dd>
                            <dt>{{ trans('home.contact.phone') }}</dt>
                            <dd>(+57) (1)  316 5000 - ext. 14075</dd>
                        </dl>
                    </div>
                </div>
            </div>
            <div class="panel panel-default border-flat">
                <div class="panel-heading cursor-link" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseThree" aria-expanded="true" aria-controls="collapseThree">
                    <h4 class="panel-title" id="headingThree">
                        {{ trans('home.members.home') }}
                    </h4>
                </div>
                <div id="collapseThree" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">
                    <div class="panel-body">
                        @foreach ($data as $type => $members)
                        <table class="table table-striped table-bordered">
                            <thead>
                                <tr>
                                    <td class="text-center text-strong" colspan="2">
                                        <h4 class="text-strong">{{ trans($type) }}</h4>
                                    </td>
                                </tr>
                            </thead>
                            <tbody>
                            	@foreach ($members as $member)
	                                <tr>
	                                    <td>{{ $member['name'] }}</td>
	                                    <td class="">{{ trans($member['program']) }}</td>
	                                </tr>
                            	@endforeach
                            </tbody>
                        </table>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
        <div class="clearfix"></div>
    </div>
</div>

@stop
