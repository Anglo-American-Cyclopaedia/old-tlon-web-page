@extends('layouts.base')

@section('content')
  <div class="container">
    <div class="col-xs-12">
      <div class="page-header">
        <img class="img-responsive pull-right img-logo" src="{{ asset('images/tlon/logo.png') }}" />
        <h1>{{ trans('activities-other.title') }} <small>{{ trans('activities-other.subtitle') }}</small></h1>
        <div class="clearfix"></div>
      </div>
    </div>
    <div class="col-xs-12">
      <ul class="nav nav-pills nav-unal" role="tablist">
          <li role="presentation" class="active"><a href="#chicaque" aria-controls="chicaque" role="tab" data-toggle="tab">Chicaque</a></li>
          <li role="presentation"><a href="#pionono" aria-controls="pionono" role="tab" data-toggle="tab">Pionono</a></li>
          <li role="presentation"><a href="#chorrera" aria-controls="chorrera" role="tab" data-toggle="tab">La Chorrera</a></li>
          <li role="presentation"><a href="#siecha" aria-controls="siecha" role="tab" data-toggle="tab">Siecha</a></li>
      </ul>
      <br>
      <div class="tab-content">
        <div role="tabpanel" class="tab-pane fade in active" id="chicaque">
          <div id="carousel-chicaque" class="carousel slide" data-ride="carousel">
            <!-- Wrapper for slides -->
            <div class="carousel-inner" role="listbox">
              <div class="item active">
                <img src={{ asset('images/tlon/activities/chicaque/1.jpg') }}>
              </div>
              <div class="item">
                <img src={{ asset('images/tlon/activities/chicaque/2.jpg') }}>
              </div>
              <div class="item">
                <img src={{ asset('images/tlon/activities/chicaque/3.jpg') }}>
              </div>
              <div class="item">
                <img src={{ asset('images/tlon/activities/chicaque/4.jpg') }}>
              </div>
              <div class="item">
                <img src={{ asset('images/tlon/activities/chicaque/5.jpg') }}>
              </div>
            </div>

            <!-- Controls -->
            <a class="left carousel-control" href="#carousel-chicaque" role="button" data-slide="prev">
              <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
              <span class="sr-only">Anterior</span>
            </a>
            <a class="right carousel-control" href="#carousel-chicaque" role="button" data-slide="next">
              <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
              <span class="sr-only">Siguiente</span>
            </a>
          </div>
        </div>
        <div role="tabpanel" class="tab-pane fade" id="pionono">
          <div id="carousel-pionono" class="carousel slide" data-ride="carousel">
            <!-- Wrapper for slides -->
            <div class="carousel-inner" role="listbox">
              <div class="item active">
                <img src={{ asset('images/tlon/activities/pionono/1.jpg') }}>
              </div>
              <div class="item">
                <img src={{ asset('images/tlon/activities/pionono/2.jpg') }}>
              </div>
              <div class="item">
                <img src={{ asset('images/tlon/activities/pionono/3.jpg') }}>
              </div>
              <div class="item">
                <img src={{ asset('images/tlon/activities/pionono/4.jpg') }}>
              </div>
            </div>

            <!-- Controls -->
            <a class="left carousel-control" href="#carousel-pionono" role="button" data-slide="prev">
              <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
              <span class="sr-only">Anterior</span>
            </a>
            <a class="right carousel-control" href="#carousel-pionono" role="button" data-slide="next">
              <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
              <span class="sr-only">Siguiente</span>
            </a>
          </div>
        </div>
        <div role="tabpanel" class="tab-pane fade" id="chorrera">
          <div id="carousel-chorrera" class="carousel slide" data-ride="carousel">
            <!-- Wrapper for slides -->
            <div class="carousel-inner" role="listbox">
              <div class="item active">
                <img src={{ asset('images/tlon/activities/chorrera/1.jpg') }}>
              </div>
              <div class="item">
                <img src={{ asset('images/tlon/activities/chorrera/2.jpg') }}>
              </div>
              <div class="item">
                <img src={{ asset('images/tlon/activities/chorrera/3.jpg') }}>
              </div>
            </div>

            <!-- Controls -->
            <a class="left carousel-control" href="#carousel-chorrera" role="button" data-slide="prev">
              <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
              <span class="sr-only">Anterior</span>
            </a>
            <a class="right carousel-control" href="#carousel-chorrera" role="button" data-slide="next">
              <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
              <span class="sr-only">Siguiente</span>
            </a>
          </div>
        </div>
        <div role="tabpanel" class="tab-pane fade" id="siecha">
          <div id="carousel-siecha" class="carousel slide" data-ride="carousel">
            <!-- Wrapper for slides -->
            <div class="carousel-inner" role="listbox">
              <div class="item active">
                <img src={{ asset('images/tlon/activities/siecha/1.jpg') }}>
              </div>
              <div class="item">
                <img src={{ asset('images/tlon/activities/siecha/2.jpg') }}>
              </div>
              <div class="item">
                <img src={{ asset('images/tlon/activities/siecha/3.jpg') }}>
              </div>
              <div class="item">
                <img src={{ asset('images/tlon/activities/siecha/4.jpg') }}>
              </div>
              <div class="item">
                <img src={{ asset('images/tlon/activities/siecha/5.jpg') }}>
              </div>
              <div class="item">
                <img src={{ asset('images/tlon/activities/siecha/6.jpg') }}>
              </div>
              <div class="item">
                <img src={{ asset('images/tlon/activities/siecha/7.jpg') }}>
              </div>
            </div>

            <!-- Controls -->
            <a class="left carousel-control" href="#carousel-siecha" role="button" data-slide="prev">
              <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
              <span class="sr-only">Anterior</span>
            </a>
            <a class="right carousel-control" href="#carousel-siecha" role="button" data-slide="next">
              <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
              <span class="sr-only">Siguiente</span>
            </a>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="clearfix"></div>
@stop
