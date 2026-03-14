@extends('layouts.base')

@section('content')
  <div class="container">
    <div class="col-xs-12">
      <div class="page-header">
        <img class="img-responsive pull-right img-logo" src="{{ asset('images/tlon/logo.png') }}" />
        <h1>{{ trans('tlon-project-projects.title') }} <small>{{ trans('tlon-project-projects.subtitle') }}</small></h1>
        <div class="clearfix"></div>
      </div>
    </div>
    <div class="col-xs-12 text-dark">
      <ul class="nav nav-pills nav-unal" role="tablist">
          <li role="presentation" class="active"><a href="#redes-virtualizacion" aria-controls="redes-virtualizacion" role="tab" data-toggle="tab">{{ trans('tlon-project-projects.tabs.adhoc-virtualization') }}</a></li>
          <li role="presentation"><a href="#sistema-multiagente" aria-controls="sistema-multiagente" role="tab" data-toggle="tab">{{ trans('tlon-project-projects.tabs.multiagent-system') }}</a></li>
          <li role="presentation"><a href="#lenguaje" aria-controls="lenguaje" role="tab" data-toggle="tab">{{ trans('tlon-project-projects.tabs.programming-languages') }}</a></li>
      </ul>
      <br>
      <div class="tab-content">
          <div role="tabpanel" class="tab-pane fade in active" id="redes-virtualizacion">
              <div class="col-xs-12">
                  <table class="table table-bordered table-striped table-condensed">
                      <tbody>
                          <tr><td colspan="2" class="text-strong text-center"><h4>{{ trans('tlon-project-projects.adhoc-networks') }}</h4></td></tr>
                          <tr>
                              <td class="text-strong">{{ trans('tlon-project-projects.table.title') }}</td>
                              <td class="text-strong">{{ trans('tlon-project-projects.table.responsable') }}</td>
                          </tr>
                          @foreach($projects['adhoc'] as $project)
                          <tr>
                              <td>{{ $project['title'] }}</td>
                              <td>{{ $project['author'] }}</td>
                          </tr>
                          @endforeach
                          <tr><td colspan="2" class="text-strong text-center"><h4>{{ trans('tlon-project-projects.virtualization') }}</h4></td></tr>
                          <tr>
                              <td class="text-strong">{{ trans('tlon-project-projects.table.title') }}</td>
                              <td class="text-strong">{{ trans('tlon-project-projects.table.responsable') }}</td>
                          </tr>
                          @foreach($projects['virtualization'] as $project)
                          <tr>
                              <td>{{ $project['title'] }}</td>
                              <td>{{ $project['author'] }}</td>
                          </tr>
                          @endforeach
                      </tbody>
                  </table>
              </div>
          </div>
          <div role="tabpanel" class="tab-pane fade" id="sistema-multiagente">
              <div class="col-xs-12">
                  <table class="table table-bordered table-striped table-condensed">
                    <tbody>
                      <tr>
                          <td class="text-strong">{{ trans('tlon-project-projects.table.title') }}</td>
                          <td class="text-strong">{{ trans('tlon-project-projects.table.responsable') }}</td>
                      </tr>
                      <tr>
                        <td>Un modelo de justicia computacional para la distribución de recursos en redes ad hoc.</td>
                        <td>Juan Pablo Ospina</td>
                      </tr>
                      <tr>
                        <td>Construcción de un módulo de registro para comunidades de agentes a través del concepto de robustez en redes ad hoc.</td>
                        <td>Lina Alfonso</td>
                      </tr>
                      <tr>
                        <td>Cooperación en agentes artificiales a través de modelos de confianza distribuida.</td>
                        <td>Diego Vega Vega</td>
                      </tr>
                      <tr>
                        <td>Simpatía y compromiso, emotividad en la toma de decisiones cooperativas en redes estocásticas de siguiente generación.</td>
                        <td>Julián Latorre</td>
                      </tr>
                      <tr>
                        <td>Modelos de representación de conocimiento y ontologías en sistemas multi-agente.</td>
                        <td>Miguel Torres</td>
                      </tr>
                    </tbody>
                  </table>
              </div>
          </div>
          <div role="tabpanel" class="tab-pane fade" id="lenguaje">
              <div class="col-xs-12">
                  <table class="table table-bordered table-striped table-condensed">
                    <tbody>
                      <tr><td colspan="2" class="text-strong text-center"><h4>{{ trans('tlon-project-projects.phd') }}</h4></td></tr>
                      <tr>
                          <td class="text-strong">{{ trans('tlon-project-projects.table.title') }}</td>
                          <td class="text-strong">{{ trans('tlon-project-projects.table.responsable') }}</td>
                      </tr>
                      <tr>
                        <td>Prototipo de un lenguaje de programación para la implementación de servicios a través de comunidades  de agentes social inspirados sobre redes Ad-hoc.</td>
                        <td>Joaquín Sánchez</td>
                      </tr>
                      <tr><td colspan="2" class="text-strong text-center"><h4>{{ trans('tlon-project-projects.master') }}</h4></td></tr>
                      <tr>
                          <td class="text-strong">{{ trans('tlon-project-projects.table.title') }}</td>
                          <td class="text-strong">{{ trans('tlon-project-projects.table.responsable') }}</td>
                      </tr>
                      <tr>
                        <td>Implementación de un Prototipo de Red Ad Hoc tipo Clúster dentro del Campus Universitario de la Universidad Nacional.</td>
                        <td>Jhon Alexander López Velazco</td>
                      </tr>
                      <tr>
                        <td>Modelo de direccionamiento IPv6 para redes Ad-hoc basadas en comunicaciones tipo máquina a máquina.</td>
                        <td>Giuseppe Roa</td>
                      </tr>
                      <tr><td colspan="2" class="text-strong text-center"><h4>{{ trans('tlon-project-projects.undergraduate') }}</h4></td></tr>
                      <tr>
                          <td class="text-strong">{{ trans('tlon-project-projects.table.title') }}</td>
                          <td class="text-strong">{{ trans('tlon-project-projects.table.responsable') }}</td>
                      </tr>
                      <tr>
                        <td>Generados de analizadores léxicos para el lenguaje TLÖN.</td>
                        <td>Juan Sebastian Pardo</td>
                      </tr>
                      <tr>
                        <td>Generador de analizadores sintacticos para el lenguaje TLÖN.</td>
                        <td>Jorge Quiñonez</td>
                      </tr>
                    </tbody>
                  </table>
              </div>
          </div>
      </div>
    </div>
  </div>
  <div class="clearfix"></div>
@stop
