<?php include ('config.php'); ?>
<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
	<head>
		<?php include ('../../../files/includes/inc.web.head.php'); ?>
	</head>
	<body>
	<header>
		<?php include ('../../../files/includes/inc.web.nav.php'); ?>
	</header>
	<!-- Slider -->
	<!-- <div class="slider">
		<div class="flexslider">
		  <ul class="slides">
		    <li>
		      <img src="../../../skin/web/images/body/slider1.jpg" />
		    </li>
		    <li>
		      <img src="../../../skin/web/images/body/slider1.jpg" />
		    </li>
		    <li>
		      <img src="../../../skin/web/images/body/slider1.jpg" />
		    </li>
		    <li>
		      <img src="../../../skin/web/images/body/slider1.jpg" />
		    </li>
		  </ul>
		</div>
	</div> -->

	<?php include('../../../files/includes/inc.web.headsection.php'); ?><!-- Head Image Under Nav -->
	<div class="wrapper">
		<div class="container">
			<div class="row main-row">
				<div class="col-md-7">
				<!-- /////// CONTENT //////// -->
					<div class="row home-content-row">
					<h1>FEDERACI&Oacute;N DE ASOCIACIONES M&Eacute;DICAS HOMEOP&Aacute;TICAS ARGENTINAS</h1>
					<p>
						Los prop&oacute;sitos de la Federaci&oacute;n son: Nuclear a las instituciones vinculadas a la investigaci&oacute;n, docencia y difusi&oacute;n de la Doctrina M&eacute;dica Homeop&aacute;tica, brindar a sus asociados la m&aacute;s completa y actualizada comunicaci&oacute;n de los estudios y progresos cient&iacute;fico-terap&eacute;uticos en el campo de la Medicina homeop&aacute;tica y favorecer la implementaci&oacute;n de las actividades de sus afiliadas.
					</p>
					<p>
						<b>Personer&iacute;a Jur&iacute;dica Nro.: 001477/95</b>
					</p>
					</div>
					<hr>
					<div class="row home-content-row">
						<h2>PR&Oacute;XIMOS CONGRESOS</h2>
						<img src="../../../skin/web/images/body/pictures/congreso.jpg" alt="" class="img-responsive" />
					</div>
					<div class="row">
						<h4>71 &deg; Congreso LMHI</h4>
						<h4 class="second-color-txt">Agosto 24 al 27 de 2016 Buenos Aires</h4>
						<h4 class="second-color-txt">Homeopat&iacute;a, Medicina del Microcosmos</h4>
						<div class="left-divider"></div>
						<p>
							<b>Organiza: Escuela M&eacute;dica Homeop&aacute;tica Argentina "Tom&aacute;s Pablo Paschero"</b> <br>
							<b>Sede:</b> Scheraton Libertador Hotel | Av. C&oacute;rdoba 690 <br>
							(1054) Buenos Aires | Argentina
						</p>
					</div>
					<hr>




				<!-- //////// END CONTENT  //////// -->
				</div><!-- /.col-md-7 -->
				<!-- SIDEBAR-1 (has col-md-5 inside) -->
				<?php include('../../../files/includes/inc.web.sidebar.php'); ?>
				<!-- SIDEBAR-1 -->

			</div><!-- row -->
			<!-- container -->
		</div>


		<div class="container-fluid blue-back-c">
			<div class="container">
				<div class="row inner subscribe">
					<div class="col-lg-8 col-md-6 col-sm-12 col-xs-12">
						<img src="../../../skin/web/images/logos/logo-square.png" alt="" class="logo-subsc" />
						<span class="subscribe-txt">Suscribase a nuestro <b>Newsletter</b></span>
					</div>
					<div class="col-lg-4 col-md-6 col-sm-12 col-xs-12">
						<form class="form-inline" role="form">
							<div class="form-group">
							<input type="email" class="form-control" id="name" placeholder="Ingrese su E-Mail">
							</div>
							<button type="submit" class="btn btn-default">Subscribirse !</button>
						</form>
					</div>
				</div>
			</div>
		</div>
		<div class="container">
			<div class="row main-row">
				<div class="col-md-7">
				<!-- //////// SECOND CONTENT //////// -->
					<br>
					<div class="row img-text-item">
				    <img src="../../../skin/web/images/body/ads/ads1.jpg" alt=""  class="img-responsive"/>
				    <h4>Titulo del anuncio</h4>
				    <hr>
				    <p class="inner-text">
				      <b>Esto es el subtitulo del aviso lateral. <br>Deben ser dos l&iacute;neas</b><br>
				      Este es el texto descriptivo, tambien deben ser como m&aacute;ximo dos l&iacute;neas
				    </p>
				  </div>
					<div class="row img-text-item">
				    <img src="../../../skin/web/images/body/ads/ads1.jpg" alt=""  class="img-responsive"/>
				    <h4>Titulo del anuncio</h4>
				    <hr>
				    <p class="inner-text">
				      <b>Esto es el subtitulo del aviso lateral. <br>Deben ser dos l&iacute;neas</b><br>
				      Este es el texto descriptivo, tambien deben ser como m&aacute;ximo dos l&iacute;neas
				    </p>
				  </div>
				<!-- //////// /SECOND CONTENT //////// -->
				</div>
				<!-- SIDEBAR-2 (has col-md-5 inside) -->
				<?php include('../../../files/includes/inc.web.sidebar2.php'); ?>
				<!-- SIDEBAR-2 -->
			</div>
		</div>
		<?php include ('../../../files/includes/inc.web.links.php') ?>

	</div><!-- wrapper -->
	<?php include ('../../../files/includes/inc.web.contacto.php'); ?>
	<?php include ('../../../files/includes/inc.web.footer.php'); ?>
  <?php include ('../../../files/includes/inc.web.scripts.php'); ?>
	</body>
</html>
