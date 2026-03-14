@extends('layouts.base')

@section('content')
  <div class="container">
    <div class="col-xs-12">
      <div class="page-header">
        <img class="img-responsive pull-right img-logo" src="{{ asset('images/tlon/logo_tlon.jpg') }}" />
        <h1>{{ trans('about-story.title') }} <small>{{ trans('about-story.subtitle') }}</small></h1>
        <div class="clearfix"></div>
      </div>
    </div>
    <div class="col-xs-12">
      <div class="row">
          <div class="border-flat">
            <object>
              <embed src="/files/Infografia de TLON.pdf" width="100%" height="400px"  pluginspage="http://www.adobe.com/products/acrobat/readstep2.html">
            </object>
          </div>
          <br><br>
          <div class="border-flat">
            <object>
              <embed src="/files/tlon_texto.pdf" width="100%" height="600px"  pluginspage="http://www.adobe.com/products/acrobat/readstep2.html">
            </object>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="clearfix"></div>
@stop
