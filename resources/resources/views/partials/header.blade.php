<header id="unalTop">
	<div class="logo">
		<a href="http://unal.edu.co">
			<!--[if (gte IE 9)|!(IE)]><!-->
			<svg width="93%" height="93%">
				<image xlink:href="{{ asset('images/escudoUnal.svg') }}" width="100%" height="100%" class="hidden-print" />
			</svg>

			<!--<![endif]-->
			<!--[if lt IE 9]>
	<img src="{{ asset('images/escudoUnal.png') }}" width="93%" height="auto" class="hidden-print"/>
<![endif]-->
			<img src="{{ asset('images/escudoUnal_black.png') }}" class="visible-print" />
		</a>
	</div>
	<div class="seal">
		<img class="hidden-print" alt="Escudo de la República de Colombia" src="{{ asset('images/sealColombia.png') }}" width="66" height="66" />

		<img class="visible-print" alt="Escudo de la República de Colombia" src="{{ asset('images/sealColombia_black.png') }}" width="66" height="66" />
	</div>
	<div class="firstMenu">

		<button class="navbar-toggle collapsed" type="button" data-toggle="collapse" data-target="#bs-navbar" aria-controls="bs-navbar" aria-expanded="false">
			<span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span>
		</button>
		<div class="btn-group languageMenu hidden-xs">
			<div class="btn btn-default dropdown-toggle" data-toggle="dropdown">{{ session('locale') }}<span class="caret"></span></div>
			<ul class="dropdown-menu">
				<li><a href="{{ url('setLocale/es') }}">es</a></li>
				<li><a href="{{ url('setLocale/en') }}">en</a></li>
				<li><a href="{{ url('setLocale/it') }}">it</a></li>
			</ul>
		</div>
		<ul class="socialLinks hidden-xs">
			<li>
				<a href="https://www.facebook.com/UNColombia" target="_blank" class="facebook" title="Página oficial en Facebook"></a>
			</li>
			<li>
				<a href="https://twitter.com/UNColombia" target="_blank" class="twitter" title="Cuenta oficial en Twitter"></a>
			</li>
			<li>
				<a href="https://www.youtube.com/channel/UCnE6Zj2llVxcvL5I38B0Ceg" target="_blank" class="youtube" title="Canal oficial de Youtube"></a>
			</li>
			<li>
				<a href="http://agenciadenoticias.unal.edu.co/nc/sus/type/rss2.html" target="_blank" class="rss" title="Suscripción a canales de información RSS"></a>
			</li>
		</ul>
		<div class="navbar-default">
			<nav id="profiles">
				<ul class="nav navbar-nav dropdown-menu">
					<li class="item_Aspirantes #>"><a href="index.html#">{{ trans('header.aspirants') }}</a></li>
					<li class="item_Estudiantes #>"><a href="index.html#">{{ trans('header.students') }}</a></li>
					<li class="item_Egresados #>"><a href="index.html#">{{ trans('header.graduates') }}</a></li>
					<li class="item_Docentes #>"><a href="index.html#">{{ trans('header.teachers') }}</a></li>
					<li class="item_Administrativos #>"><a href="index.html#">{{ trans('header.administratives') }}</a></li>
				</ul>
			</nav>
		</div>
	</div>
	<div id="bs-navbar" class="navbar-collapse collapse navigation">
		<div class="site-url">
			<a href="http://tlon.unal.edu.co/">tlon.unal.edu.co</a>
		</div>
		<div class="buscador">
			<div class="gcse-searchbox-only" data-resultsUrl="http://unal.edu.co/resultados-de-la-busqueda/" data-newWindow="true"></div>
		</div>
		<div class="mainMenu">

			<div class="btn-group">
				<a href="{{ url('/') }}" class="btn btn-default">{{ trans('header.home') }}</a>
			</div>
			<div class="btn-group">
				<div class="btn btn-default dropdown-toggle" data-toggle="dropdown">{{ trans('header.about-us.title') }}<span class="caret"></span>
				</div>
				<ul class="dropdown-menu">
					<li><a href="{{ url('quienes-somos/mision') }}">{{ trans('header.about-us.mission-vision') }}</a></li>
					<li><a href="{{ url('quienes-somos/historia') }}">{{ trans('header.about-us.history') }}</a></li>
					<li><a href="{{ url('quienes-somos/cuento') }}">{{ trans('header.about-us.tlon-story') }}</a></li>
			</div>
			<div class="btn-group">
				<div class="btn btn-default dropdown-toggle" data-toggle="dropdown">{{ trans('header.tlon-project.title') }}<span class="caret"></span>
				</div>
				<ul class="dropdown-menu">
					<li><a href="{{ url('proyecto-tlon/acerca') }}">{{ trans('header.tlon-project.about') }}</a></li>
					<li><a href="{{ url('proyecto-tlon/conceptos-generales') }}">{{ trans('header.tlon-project.general-concepts') }}</a></li>
					<li><a href="{{ url('proyecto-tlon/modelo-social') }}">{{ trans('header.tlon-project.social-model') }}</a></li>
					<li><a href="{{ url('proyecto-tlon/proyectos') }}">{{ trans('header.tlon-project.projects') }}</a></li>
			</div>
			<div class="btn-group">
				<a href="{{ url('produccion-intelectual') }}" class="btn btn-default">{{ trans('header.intellectual-production') }}</a>
			</div>
			<div class="btn-group">
				<div class="btn btn-default dropdown-toggle" data-toggle="dropdown">{{ trans('header.activities.title') }} <span class="caret"></span>
				</div>
				<ul class="dropdown-menu">
					<li><a href="{{ url('actividades/docencia') }}">{{ trans('header.activities.teaching') }}</a></li>
					<li><a href="{{ url('actividades/investigacion') }}">{{ trans('header.activities.investigation') }}</a></li>
					<li><a href="{{ url('actividades/semillero-uqbar') }}">{{ trans('header.activities.uqbar') }}</a></li>
					<li><a href="{{ url('actividades/extension') }}">{{ trans('header.activities.extension') }}</a></li>
					<li><a href="{{ url('actividades/otras') }}">{{ trans('header.activities.other') }}</a></li>
			</div>
			<div class="btn-group">
				<div class="btn btn-default dropdown-toggle" data-toggle="dropdown">
					{{ trans('header.links.title') }} <span class="caret"></span>
				</div>
				<ul class="dropdown-menu">
					<li><a href="http://www.hermes.unal.edu.co/pages/Consultas/Grupo.xhtml;jsessionid=FB1A312865AB9D08AB40C7880AD61D07.tomcat8?idGrupo=2220&opcion=1" target="_blank" class="no-style">{{ trans('header.links.hermes') }}</a></li>
				</ul>
			</div>
			<div class="btn-group">
				<a href="{{ url('contacto') }}" class="btn btn-default">{{ trans('header.contact') }}</a>
			</div>
			<div class="btn-group"></div>
		</div>
		<div class="btn-group hidden-sm hidden-md hidden-lg hidden-print">
			<div class="btn btn-default dropdown-toggle" data-toggle="dropdown" id="unalOpenMenuServicios" data-target="#services">Servicios<span class="caret"> </span>
			</div>
		</div>
		<div class="btn-group hidden-sm hidden-md hidden-lg hidden-print">
			<div class="btn btn-default dropdown-toggle" data-toggle="dropdown" id="unalOpenMenuPerfiles" data-target="#profiles">Perfiles<span class="caret"> </span>
			</div>
		</div>
	</div>

</header>