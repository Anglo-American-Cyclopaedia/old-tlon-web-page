<footer class="clear">
	<nav class="col-md-3 col-lg-3 col-sm-3 col-xs-4 col-xxs-6 gobiernoLinea">
		<a href="http://www.legal.unal.edu.co" target="_top">{{ trans('footer.legal-regime') }}</a>
		<a href="https://personal.unal.edu.co" target="_top">{{ trans('footer.human-resources') }}</a>
		<a href="https://portaladquisiciones.unal.edu.co" target="_top">{{ trans('footer.hiring') }}</a>
		<a href="https://personal.unal.edu.co" target="_top">{{ trans('footer.vacancies') }}</a>
		<a href="https://launalcuenta.unal.edu.co" target="_top">{{ trans('footer.accountability') }}</a>
		<a href="https://docentes.unal.edu.co/concurso-profesoral/" target="_top">{{ trans('footer.teacher-contest') }}</a>
		<a href="https://pagovirtual.unal.edu.co" target="_top">{{ trans('footer.online-payment') }}</a>
		<a href="https://controlinterno.unal.edu.co" target="_top">{{ trans('footer.internal-control') }}</a>
		<a href="https://siga.unal.edu.co" target="_top">{{ trans('footer.quality') }}</a>
		<a href="https://unal.edu.co/buzon-de-notificaciones/" target="_self">{{ trans('footer.notification-mailbox') }}</a>
	</nav>
	<nav class="col-md-3 col-lg-3 col-sm-3 col-xs-4 col-xxs-6 gobiernoLinea">
		<a href="https://smartkey.xertica.com/cloudkey/a/unal.edu.co/user/login" target="_top">{{ trans('footer.institutional-email') }}</a>
		<a href="https://unal.edu.co/mapa-del-sitio">{{ trans('footer.site-map') }}</a>
		<a href="https://redessociales.unal.edu.co" target="_top">{{ trans('footer.social-networks') }}</a>
		<a href="https://unal.edu.co/faq">{{ trans('footer.faq') }}</a>
		<a href="https://quejasyreclamos.unal.edu.co" target="_self">{{ trans('footer.complaints-claims') }}</a>
		<a href="https://unal.edu.co/atencion-en-linea/" target="_self">{{ trans('footer.online-attention') }}</a>
		<a href="https://unal.edu.co/egresados" target="_self">{{ trans('footer.poll') }}</a>
		<a href="https://unal.edu.co/contactenos">{{ trans('footer.contact-us') }}</a>
		<a href="https://estadisticas.unal.edu.co/home/" target="_top">{{ trans('footer.statistics') }}</a>
		<a href="https://unal.edu.co/glosario">{{ trans('footer.glossary') }}</a>
	</nav>
	<div class="col-md-4 col-lg-4 col-sm-4 col-xs-4 col-xxs-12 footer-info">
		<p class="col-sm-12 col-md-6 contacto">
			<b>{{ trans('footer.contact.home') }}:<br /></b>Carrera 30 # 45 - 03<br />{{ trans('footer.contact.building') }} 453 -&nbsp;Of. 110<br />Bogotá D.C.,&nbsp; Colombia<br />(+57 601) &nbsp;316 5000 Ext. 14011
		</p>
		<p class="col-sm-12 col-md-6 derechos">
			&copy; Copyright {{ date('Y') }}<br /> {{ trans('footer.contact.rights') }}.<br />
			<a title="Comuníquese con el administrador de este sitio web" href="mailto:tlon@unal.edu.co">tlon@unal.edu.co</a><br />
			<a href="https://unal.edu.co/acerca-de-este-sitio-web">{{ trans('footer.contact.about-website') }}</a><br /> {{ trans('footer.contact.updated') }}: {{ date('d/m/Y') }}
		</p>
	</div>

	<div class="col-md-2 col-lg-2 col-sm-2 col-xs-12 logos">
		<div class="col-xs-6 col-sm-12 col-md-6 no-padding">
			<a class="col-xs-6 col-sm-12" href="https://orgullo.unal.edu.co/" target="_blank">
				<img class="hidden-print" alt="Orgullo UN" src="{{ asset('images/log_orgullo.png') }}" width="78" height="21" />
				<img class="visible-print" alt="Orgullo UN" src="{{ asset('images/log_orgullo_black.png') }}" width="94" height="37" />
			</a>

			<a class="col-xs-6 col-sm-12 imgAgencia" href="https://agenciadenoticias.unal.edu.co/" target="_blank">
				<img class="hidden-print" alt="Agencia de noticias" src="{{ asset('images/log_agenc.png') }}" width="94" height="25" />
				<img class="visible-print" alt="Agencia de noticias" src="{{ asset('images/log_agenc_black.png') }}" width="94" height="37" />
			</a>
		</div>
		<div class="col-xs-6 col-sm-12 col-md-6 no-padding">
			<a class="col-xs-6 col-sm-12" href="https://www.gov.co/" target="_blank">
				<img alt="Trámites en línea" src="{{ asset('images/log_gobiern.png') }}" width="67" height="51" />
			</a>

			<a class="col-xs-6 col-sm-12" href="https://www.contaduria.gov.co/" target="_blank">
				<img alt="Contaduría general de la republica" src="{{ asset('images/log_contra.png') }}" width="67" height="51" />
			</a>
		</div>

	</div>
</footer>