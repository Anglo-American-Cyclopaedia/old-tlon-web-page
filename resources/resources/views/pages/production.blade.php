@extends('layouts.base')

@section('content')
<div class="container">
    <div class="col-xs-12">
        @include('partials.breadcrumbs')
        <div class="page-header">
            <h1>{{ trans('intellectual-production.title') }}</h1>
            <div class="clearfix"></div>
        </div>
    </div>

    <div class="col-xs-12">
        @foreach($articles as $idx => $article)
        @if ($idx % 2 == 0)
        <div class="clearfix"></div>
        @endif
        <div class="col-xs-12 col-sm-6">
            <div class="panel {{ $article['panel'] }}">
                <div class="panel-heading">
                    <h3 class="panel-title">
                        <b>{{ strtoupper(trans($article['type'])) }}:</b> {{ $article['name'] }}
                    </h3>
                </div>
                <div class="panel-body">
                    <h4 class="text-italic">{{ $article['authors'] }}</h4>
                    <p>{{ $article['newspaper'] }}</p>
                    <br>
                    @if ($article['url'] != '')
                    <a class="btn btn-default pull-right" target="_blank" href="{{ $article['url'] }}">{{ strtoupper(trans('intellectual-production.document-link')) }}</a>
                    @endif
                    <div class="clearfix"></div>
                </div>
            </div>
        </div>
        @endforeach
    </div>


    <div class="clearfix"></div>
</div>

@stop