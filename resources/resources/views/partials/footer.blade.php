<footer class="clear">
	<nav class="col-md-3 col-lg-3 col-sm-3 col-xs-4 col-xxs-6 gobiernoLinea">
		<a href="http://www.legal.unal.edu.co" target="_top">{{ trans('footer.legal-regime') }}</a>
		<a href="http://personal.unal.edu.co" target="_top">{{ trans('footer.human-resources') }}</a>
		<a href="http://contratacion.unal.edu.co" target="_top">{{ trans('footer.hiring') }}</a>
		<a href="http://personal.unal.edu.co" target="_top">{{ trans('footer.vacancies') }}</a>
		<a href="http://rendiciondecuentas.unal.edu.co/" target="_top">{{ trans('footer.accountability') }}</a>
		<a href="http://docentes.unal.edu.co/concurso-profesoral/" target="_top">{{ trans('footer.teacher-contest') }}</a>
		<a href="http://www.pagovirtual.unal.edu.co/" target="_top">{{ trans('footer.online-payment') }}</a>
		<a href="http://controlinterno.unal.edu.co/" target="_top">{{ trans('footer.internal-control') }}</a>
		<a href="http://siga.unal.edu.co" target="_top">{{ trans('footer.quality') }}</a>
		<a href="http://unal.edu.co/buzon-de-notificaciones/" target="_self">{{ trans('footer.notification-mailbox') }}</a>
	</nav>
	<nav class="col-md-3 col-lg-3 col-sm-3 col-xs-4 col-xxs-6 gobiernoLinea">
		<a href="http://correo.unal.edu.co" target="_top">{{ trans('footer.institutional-email') }}</a>
		<a href="index.html#">{{ trans('footer.site-map') }}</a>
		<a href="http://redessociales.unal.edu.co" target="_top">{{ trans('footer.social-networks') }}</a>
		<a href="index.html#">{{ trans('footer.faq') }}</a>
		<a href="http://unal.edu.co/quejas-y-reclamos/" target="_self">{{ trans('footer.complaints-claims') }}</a>
		<a href="http://unal.edu.co/atencion-en-linea/" target="_self">{{ trans('footer.online-attention') }}</a>
		<a href="http://unal.edu.co/encuesta/" target="_self">{{ trans('footer.poll') }}</a>
		<a href="index.html#">{{ trans('footer.contact-us') }}</a>
		<a href="http://www.onp.unal.edu.co" target="_top">{{ trans('footer.statistics') }}</a>
		<a href="index.html#">{{ trans('footer.glossary') }}</a>
	</nav>
	<div class="col-md-4 col-lg-4 col-sm-4 col-xs-4 col-xxs-12 footer-info">
		<p class="col-sm-12 col-md-6 contacto">
			<b>{{ trans('footer.contact.home') }}:<br /></b>Carrera 30 # 45 - 03<br />{{ trans('footer.contact.building') }} 453 -&nbsp;Of. 110<br />Bogotá D.C.,&nbsp; Colombia<br />(+57 1) &nbsp;316 5000 Ext. 14011
		</p>
		<p class="col-sm-12 col-md-6 derechos">
			&copy; Copyright 2014<br /> {{ trans('footer.contact.rights') }}.<br />
			<a title="Comuníquese con el administrador de este sitio web" href="mailto:tlon@unal.edu.co">tlon@unal.edu.co</a><br />
			<a href="index.html#">{{ trans('footer.contact.about-website') }}</a><br /> {{ trans('footer.contact.updated') }}: 03/05/2020
		</p>
	</div>

	<div class="col-md-2 col-lg-2 col-sm-2 col-xs-12 logos">
		<div class="col-xs-6 col-sm-12 col-md-6 no-padding">
			<a class="col-xs-6 col-sm-12" href="http://www.orgulloun.unal.edu.co">
				<img class="hidden-print" alt="Orgullo UN" src="{{ asset('images/log_orgullo.png') }}" width="78" height="21" />
				<img class="visible-print" alt="Orgullo UN" src="{{ asset('images/log_orgullo_black.png') }}" width="94" height="37" />
			</a>

			<a class="col-xs-6 col-sm-12 imgAgencia" href="http://www.agenciadenoticias.unal.edu.co/inicio.html">
				<img class="hidden-print" alt="Agencia de noticias" src="{{ asset('images/log_agenc.png') }}" width="94" height="25" />
				<img class="visible-print" alt="Agencia de noticias" src="{{ asset('images/log_agenc_black.png') }}" width="94" height="37" />
			</a>
		</div>
		<div class="col-xs-6 col-sm-12 col-md-6 no-padding">
			<a class="col-xs-6 col-sm-12" href="https://www.sivirtual.gov.co/memoficha-entidad/-/entidad/T0356">
				<img alt="Trámites en línea" src="{{ asset('images/log_gobiern.png') }}" width="67" height="51" />
			</a>

			<a class="col-xs-6 col-sm-12" href="http://www.contaduria.gov.co/">
				<img alt="Contaduría general de la republica" src="{{ asset('images/log_contra.png') }}" width="67" height="51" />
			</a>
		</div>

	</div>
</footer>