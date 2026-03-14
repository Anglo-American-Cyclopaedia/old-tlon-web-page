@extends('layouts.base')

@section('content')
<div class="container">
  <div class="col-xs-12">
    @include('partials.breadcrumbs')
    <div class="page-header">
      <h1>Actividades</h1>
      <div class="clearfix"></div>
    </div>
  </div>

  <div class="col-xs-12">
    <ul class="nav nav-tabs nav-justified" role="tablist">
      <li role="presentation" class="active"><a href="#docencia" aria-controls="docencia" role="tab" data-toggle="tab">Docencia</a></li>
      <li role="presentation"><a href="#investigacion" aria-controls="investigacion" role="tab" data-toggle="tab">Investigación</a></li>
      <li role="presentation"><a href="#extension" aria-controls="extension" role="tab" data-toggle="tab">Extensión</a></li>
      <li role="presentation"><a href="#otras" aria-controls="otras" role="tab" data-toggle="tab">Otras</a></li>
    </ul>

    <div class="tab-content">
      <div role="tabpanel" class="tab-pane fade active in text-dark" id="docencia">
        <div class="col-xs-12">
          <h3 class="text-center">Pregrado</h3>
          <br>
          <div class="col-xs-12 col-sm-6">
            <a class="text-center">
              <h4 class="text-center">Modelos Estocásticos y Simulación en Computación y Comunicaciones</h4>
              <br>
              <p class="text-justify">
                La posibilidad de modelar el comportamiento de los actuales sistemas de cómputo incluye la utilización de diferentes modelos teóricos que permiten la descripción de los componentes y sus relaciones durante su etapa de operación. En
                caso de los sistemas de telecomunicaciones, donde el comportamiento generalmente estocástico y dinámico una de las maneras de analizar este tipo de sistemas es la teoría de la probabilidad y procesos estocásticos. Estos modelos
                permiten analizar los flujos de tráfico, los modelos de movilidad, topologías, modelos de colas y relación oferta-demanda.
              </p>
            </a>
          </div>
          <div class="col-xs-12 col-sm-6">
            <a class="text-center">
              <h4 class="text-center">Lenguajes de Programación</h4>
              <br>
              <p class="text-justify">
                Un lenguaje de programación es un lenguaje formal diseñado para realizar procesos a través de equipos de cómputo. Estos pueden utilizarse para crear programas que controlen el comportamiento físico y lógico de una máquina, para
                expresar algoritmos con precisión, o como mecanismo para la comunicación humana. Los lenguajes de programación están formado por un conjunto de símbolos y reglas sintácticas y semánticas que definen la estructura y el significado de
                sus elementos y expresiones. Para lograr comprender los elementos relacionados a la construcción de un lenguaje de programación, en este curso se estudia la estructura de un compilador la cual se presentan a través de capas
                funcionales. Estas capas definen las operaciones y el tratamiento de las instrucciones del usuario y lo traducen a lenguaje de la maquina en donde se ejecuta el programa fuente. Por otro lado se define los conceptos de paradigma de
                programación y el impacto que tienen estos aspectos sobre el diseño de un lenguaje de programación específico.
              </p>
            </a>
          </div>
        </div>

        <div class="clearfix"></div>

        <div class="col-xs-12">
          <h3 class="text-center">Posgrado</h3>
          <br>
          <div class="col-xs-12 col-sm-6">
            <a class="text-center">
              <h4 class="text-center">Redes Ad hoc</h4>
              <br>
              <p class="text-justify">
                Las redes ad hoc son sistemas computacionales descentralizados, formados por un conjunto de nodos que se comunican entre sí a través de enlaces inalámbricos y que no dependen de una infraestructura preexistente para funcionar. Su
                naturaleza auto-organizante facilita su despliegue en ambientes de operación adversos donde no es posible contar con una infraestructura preestablecida para el funcionamiento de la red. De hecho, esta propiedad se convierte en una
                ventaja frente a las redes tradicionales, ya que permite adaptar la estructura de la red a diferentes contextos de operación. En este curso se presentan las principales características de las redes ad hoc y se analizan fenómenos como
                patrones de movilidad, flujos de tráfico a través de simulación e implementaciones sobre dispositivos embebidos.
              </p>
            </a>
          </div>
          <div class="col-xs-12 col-sm-6">
            <a class="text-center">
              <h4 class="text-center">Modelos Estocásticos, Simulación y Optimización en Redes y Telecomunicaciones</h4>
              <br>
              <p class="text-justify">
                La posibilidad de modelar el comportamiento de los actuales sistemas de cómputo incluye la utilización de diferentes modelos teóricos que permiten la descripción de los componentes y sus relaciones durante su etapa de operación. En
                en caso de los sistemas de telecomunicaciones, donde el comportamiento generalmente estocástico y dinámico una de las maneras de analizar este tipo de sistemas es la teoría de la probabilidad y procesos estocásticos. Estos modelos
                permiten analizar los flujos de tráfico, los modelos de movilidad, topologías, modelos de colas y relación oferta-demanda.
              </p>
            </a>
          </div>
        </div>
      </div>
      <div role="tabpanel" class="tab-pane fade" id="investigacion">
        <div class="col-xs-12">

          <div class="col-xs-12 col-sm-6">
            <ul>
              <li>
                <p class="text-justify">
                  <b>Reunión general del grupo de investigación:</b> es un espacio en donde se reúnen los integrantes del grupo y se realiza las presentaciones de avances o temas a fines al grupo de investigación. Se debaten las presentaciones y se
                  da re alimentación.
                </p>
              </li>
              <li>
                <p class="text-justify">
                  <b>Reuniones satélites grupos de trabajo:</b> en estas reuniones se discuten las propuestas de los diferentes grupos de trabajos al interior del grupo. Se han debates sobre los procedimiento, realizaciónes y avances en las
                  diferentes áreas. Son llevados los temas principales a las reuniones generales
                </p>
              </li>
              <li>
                <p class="text-justify">
                  <b>Pasantías de investigación:</b> se busca que los estudiantes participen en esta actividades en otras instituciones a nivel nacional o internacional, para reforzar los conceptos y adelantar las diferentes propuestas de
                  investigación
                </p>
              </li>
            </ul>
          </div>
          <div class="col-xs-12 col-sm-6">
            <ul>
              <li>
                <p class="text-justify">
                  <b>Reuniones con otros grupos de investigación:</b> en estar reuniones se buscan temas en común y se explora la posibilidad de generar trabajo colaborativo.
                </p>
              </li>
              <li>
                <p class="text-justify">
                  <b>Participación en congresos académicos:</b> la divulgación del trabajo adelantado al interior del grupo de investigación y los avances parciales de los diferentes propuestas de investigación.
                </p>
              </li>
              <li>
                <p class="text-justify">
                  <b>Escritura de artículos con resultados de investigación:</b> es un ejercicio académico en donde se hace reporte de los resultados de las diferentes propuestas de investigación que se desarrollan dentro del grupo
                </p>
              </li>
              <li>
                <p class="text-justify">
                  <b>Debates de conceptos del grupo de investigación:</b> son reuniones en donde se hace la argumentación de los conceptos y las bases del grupo de investigación y se toma decisiones sobre las acciones a realizar dentro del proyecto
                  principal del grupo de investigación.
                </p>
              </li>
            </ul>
          </div>

          <div class="border-flat">
            <object>
              <embed src="/files/PosterTLON.pdf" width="100%" height="1300px" pluginspage="http://www.adobe.com/products/acrobat/readstep2.html" internalinstanceid="25" title="">
            </object>
          </div>
        </div>
      </div>
      <div role="tabpanel" class="tab-pane fade" id="extension">

        <div class="col-xs-12">
          <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
            @foreach($activities['extension'] as $index => $activity)
            <div class="panel panel-default border-flat">
              <div class="panel-heading cursor-link" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapse-{{ $index }}" aria-expanded="true" aria-controls="collapse-{{ $index }}">
                <h4 class="panel-title" id="heading-{{ $index }}">
                  {{ $activity['short_name'] }}
                </h4>
              </div>
              <div id="collapse-{{ $index }}" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading-{{ $index }}">
                <div class="panel-body">
                  <dl class="dl-horizontal">
                    <dt>Nombre</dt>
                    <dd>
                      {{ $activity['name'] }}
                    </dd>
                    <dt>Descripción</dt>
                    <dd>
                      {{ $activity['description'] }}
                    </dd>
                    <dt>Fecha de Realización</dt>
                    <dd>{{ $activity['date'] }}</dd>
                    <dt>Lugar</dt>
                    <dd>{{ $activity['location'] }}</dd>
                    <dt>Instructores</dt>
                    <dd>
                      @foreach($activity['instructors'] as $instructor)
                      <div class="col-xs-12">
                        <div class="row">
                          {{ $instructor }}
                        </div>
                      </div>
                      @endforeach
                    </dd>
                    <dt>Presentación</dt>
                    <dd><a target="_blank" href="{{ $activity['presentation_url'] }}">{{ $activity['presentation_name'] }}</a></dd>
                  </dl>
                </div>
              </div>
            </div>
            @endforeach
          </div>
        </div>
      </div>
      <div role="tabpanel" class="tab-pane fade" id="otras">
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
    </div>
  </div>
  <div class="clearfix"></div>


  <div class="col-xs-12">
    <div class="col-xs-12">

    </div>
  </div>

  <div class="clearfix"></div>
</div>

@stop
