@extends('layouts.base')

@section('content')
<div class="container">
  <div class="col-xs-12">
  @include('partials.breadcrumbs')
    <div class="page-header">
      <img class="img-responsive pull-right img-logo" src="{{ asset('images/tlon/logo_tlon.jpg') }}" />
      <h1>Acerca de Nosotros</h1>
      <div class="clearfix"></div>
    </div>
  </div>
  <div class="col-xs-12">
    <ul class="nav nav-tabs nav-justified" role="tablist">
      <li role="presentation" class="active"><a href="#mision-vision" aria-controls="mision-vision" role="tab" data-toggle="tab">Misión - Visión</a></li>
      <li role="presentation"><a href="#historia" aria-controls="historia" role="tab" data-toggle="tab">Historia</a></li>
      <li role="presentation"><a href="#cuento-tlon" aria-controls="cuento-tlon" role="tab" data-toggle="tab">Cuento TLÖN</a></li>
    </ul>

    <div class="tab-content">
      <div role="tabpanel" class="tab-pane fade in active" id="mision-vision">
        <div class="col-xs-12">
          <div class="row">
            <div class="col-xs-12 col-sm-6">
              <h3 class="text-center">Misión</h3>
              <p class="text-justify">Ser uno de los más importantes grupos de investigación en ingeniería de Sistemas reconocido a nivel nacional e internacional, con la capacidad de materializar los resultados teóricos obtenidos, en aportes específicos en el área de las Telecomunicaciones y acordes a las exigencias propias de la academia.</p>
            </div>
            <div class="col-xs-12 col-sm-6">
              <h3 class="text-center">Visión</h3>
              <p class="text-justify">El grupo TLÖN busca plantear soluciones de integración e intercambio de información en ambientes heterogéneos y distribuidos con el fin de resolver las problemáticas planteadas por las nuevas tecnologías, generar conocimiento y aprovechar oportunidades brindadas por tecnología informática y así aumentar la competitividad de la academia y las empresas colombianas. Esto se logra por medio de la adquisición, generación, y transferencia de conocimiento en las líneas de investigación.</p>
            </div>
            <div class="col-xs-12">
              <h3>Presentación</h3>
              <br>
              <div class="border-flat">
                <object>
                  <embed src="/files/Tlon2017.pdf" width="100%" height="600px" pluginspage="http://www.adobe.com/products/acrobat/readstep2.html" internalinstanceid="6" title="">
                </object>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div role="tabpanel" class="tab-pane fade" id="historia">
        <div class="col-xs-12">
          <div class="list-group">
            <a class="list-group-item">
              <h4 class="list-group-item-heading">2003</h4>
              <p class="list-group-item-text">Inicia la investigación formal sobre redes Ad-hoc en el departamento de Sistemas de la Universidad Nacional de Colombia – Sede Bogotá, en el marco de la Maestría en Ingeniería de Telecomunicaciones, esta investigación nace a partir de los trabajos del profesor Jorge Eduardo Ortiz y el ingeniero Jaime Leonardo Bobadilla Molina en sistemas dinámicos y estocásticos, como las redes ad hoc y su impacto en las telecomunicaciones inalámbricas. Como resultado de este proceso se empiezan a publicar trabajos relacionados con modelos de movilidad y protocolos de enrutamiento.</p>
            </a>
            <a class="list-group-item">
              <h4 class="list-group-item-heading">2014</h4>
              <p class="list-group-item-text">Debido a un número representativo de trabajos dirigidos sobre redes ad hoc, redes Mesh y redes de sensores, el profesor Jorge Eduardo Ortiz, toma la iniciativa de reunir a sus estudiantes de pregrado y posgrado, para invitarlos conformar un nuevo grupo de investigación, de esta manera nace el grupo TLÖN - Grupo de investigación en redes de Telecomunicaciones Dinámicas &amp; Lenguajes de Programación Distribuidos, orientado a la investigación de los fundamentos filosóficos y teóricos de Sistemas Distribuidos sobre redes Ad Hoc, con un enfoque social inspirado, validando las metodologías para su implementación y desarrollo. Durante este año se da la creación y registro en el Sistema de Gestión de la Investigación  - Hermes de la Universidad Nacional sede Bogotá. Se participó en eventos de divulgación científica.</p>
            </a>
            <a class="list-group-item">
              <h4 class="list-group-item-heading">2015</h4>
              <p class="list-group-item-text">Después de realizar el proceso definido y la documentación solicitada por la Vicedecanatura de Investigación y Extensión de la Facultad de Ingeniería, El grupo de investigación obtiene el Aval de la Universidad Nacional de Colombia, como grupo de investigación, cumpliendo con los proyectos de investigación, publicaciones, miembros y demás requisitos exigidos por la universidad para ostentar la categorías e grupo de investigación. Se participó en eventos de divulgación científica y se finalizaron tesis de pregrado y posgrado.</p>
            </a>
            <a class="list-group-item active">
              <h4 class="list-group-item-heading">2016</h4>
              <p class="list-group-item-text">Se presentan los primeros proyectos de Doctorado del proyecto principal del Grupo, denominado Proyecto TLÖN, los cuales son aprobados y se presenta la propuesta del modelo social inspirado como base de la computación distribuida inalámbrica propuesta en este proyecto. En este momento el grupo cuenta con cuatro estudiantes de Doctorado, nueve estudiantes de maestría, y 10 de pregrado.</p>
            </a>
          </div>
        </div>
      </div>
      <div role="tabpanel" class="tab-pane fade" id="cuento-tlon">
        <div class="col-xs-12">
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
</div>

@stop
