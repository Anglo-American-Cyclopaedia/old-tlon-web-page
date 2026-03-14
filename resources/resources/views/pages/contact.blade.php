@extends('layouts.base')

@section('content')
  <div class="container">
    <div class="col-xs-12">
      <div class="page-header">
        <h1>{{ trans('contact.title') }}</h1>
      </div>
      <div class="col-xs-12 col-xs-offset-0 col-sm-10 col-sm-offset 1 col-md-8 col-md-offset-2">
        <div class="row">
          <div class="well border-flat">
            <p>{{ trans('contact.message') }}</p>
            <br>
            @if (isset($message))
              <div class="alert alert-success">
                {{ trans($message) }}
              </div>
            @endif
            <br>
            <form class="form form-horizontal" action="{{ url('contacto/') }}" method="post">
              <input type="hidden" name="_token" value="{{ csrf_token() }}">
              <div class="form-group">
                <label for="input-name" class="col-xs-12 col-sm-2 control-label">{{ trans('contact.name') }}</label>
                <div class="col-xs-12 col-sm-10">
                  <input type="text" name="name" class="form-control border-flat" id="input-name" placeholder="{{ trans('contact.name') }}" required>
                </div>
              </div>
              <div class="form-group">
                <label for="input-email" class="col-xs-12 col-sm-2 control-label">{{ trans('contact.email') }}</label>
                <div class="col-xs-12 col-sm-10">
                  <input type="email" name="email" class="form-control border-flat" id="input-email" placeholder="{{ trans('contact.email') }}" required>
                </div>
              </div>
              <div class="form-group">
                  <label for="input-asunto" class="col-xs-12 col-sm-2 control-label">{{ trans('contact.subject') }}</label>
                  <div class="col-xs-12 col-sm-10">
                    <input type="text" name="subject" class="form-control border-flat" id="input-asunto" placeholder="{{ trans('contact.subject') }}" required>
                  </div>
              </div>
              <div class="form-group">
                <label for="input-name" class="col-xs-12 col-sm-2 control-label">{{ trans('contact.description') }}</label>
                <div class="col-xs-12 col-sm-10">
                  <textarea class="form-control" name="description" id="input-description" rows="5"></textarea>
                </div>
              </div>
              <button type="submit" class="btn btn-unal btn-flat pull-right">{{ trans('contact.send') }}</button>
              <div class="clearfix"></div>
            </form>
          </div>
        </div>
      </div>
    </div>
    <div class="clearfix"></div>
  </div>

@stop
