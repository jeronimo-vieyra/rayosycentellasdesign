<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
    <head>
		<!-- BASICS -->
        <meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title>Rayos&Centellas Design</title>
        <meta name="description" content="">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<link rel="stylesheet" type="text/css" href="{{ asset('/css/isotope.css') }}" media="screen" />
		<link rel="stylesheet" href="{{ asset('/js/fancybox/jquery.fancybox.css') }}" type="text/css" media="screen" />
		<link href="{{ asset('/css/app.css') }}" rel="stylesheet">
        <link rel="stylesheet" href="{{ asset('/css/style.css') }}">
        <link rel="stylesheet" href="{{ asset('/css/estilos.css') }}">
        <link rel="stylesheet" href="{{ asset('/fonts/akzidenz_condensed/stylesheet.css') }}">
        <link rel="icon" href="{{ asset('/img/favicon.png') }}" type="image/x-icon">
		<!-- skin -->
		<link rel="stylesheet" href="{{ asset('/skin/default.css') }}">
    </head>


<!-- S C R I P T   D E  I S S U -->
        <!-- <script type="text/javascript" src="//e.issuu.com/embed.js" async="true"></script> -->

    <body>
		<section id="header" class="appear">
		</section>



<!-- M E N U -->
		<div class="navbar navbar-fixed-top" role="navigation" data-0="line-height:100px; height:60px; background-color:rgba(0,0,0,0.3);" data-300="line-height:60px; height:60px; background-color:rgba(0,0,0,1);">
			 <div class="container">

				<div class="navbar-header">
					<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
						<span class="fa fa-bars color-white"></span>
					</button>
					<h1><a class="navbar-brand" href="{{ url('/') }}" data-0="line-height:90px;" data-300="line-height:50px;">
					<span><img src="img/rayito_blanco.png" /></span>
					RAYOS&CENTELLAS
					</a></h1>
				</div>


				<div class="navbar-collapse collapse">
					<ul class="nav navbar-nav" data-0="margin-top:20px;" data-300="margin-top:5px;">
						 <!-- <li class="active"><a href="index.html">Home</a></li> -->
						<li><a href="#section-que_hacemos">Qué hacemos</a></li>
						<li><a href="#section-portfolio">Portfolio</a></li>
						<li><a href="#section-contacto">Contacto</a></li>
						<a href="#section-kepot"><img id="AADD_kepot" src="img/AADD_kepot.png" /></a><!-- B O T O N    K E P O T -->
					</ul>
				</div><!--/.navbar-collapse -->

			</div>
		</div>




<!-- H O M E -->

		<!-- <div class="col-xs-12"><img class="img-responsive center-block" src="img/fondo_papelnegro.jpg" alt=""/> -->
<!-- 			<section class="featured">
				<div class="container">
					<div class="row mar-bot40">

						<div class="col-md-6 col-md-offset-3">
							<div class="align-center">
								<img src="img/logo_RC.png" class="img-responsive center-block" alt=""/>
								  <h2 class="slogan">Welcome to Amoeba</h2>
								<p> Lorem ipsum dolor sit amet, natum bonorum expetendis usu ut.
								Eum impetus offendit disputationi eu, at vim aliquip lucilius praesent.
								Alia laudem antiopam te ius, sed ad munere integre, ubique facete sapientem nam ut.
								</p>
							</div>
						</div>

					</div>
				</div>
			</section> -->


@extends('carousel')
@extends('que_hacemos')

<!-- Q U I E N E S  S O M O S -->
		<section id="testimonials" class="section" data-stellar-background-ratio="0.5">
		<div class="container">
			<div class="row">
					<div class="col-lg-8 col-lg-offset-2">
							<div class="align-center">
										<div class="pad-top40 pad-bot40 clearfix"> <!-- testimonial  -->
											<h3>Rayos y Centellas es un grupo de diseñadores egresados de la Universidad Nacional de La Plata, cuyo objetivo es generar proyectos creativos, al reunir varias disciplinas presentes en el mundo del diseño.
											</h3>
											<br/>
											<span class="author">&mdash; MIKE DOE <a href="#">www.siteurl.com</a></span>
										</div>

								</div>
							</div>
					</div>

			</div>
		</div>
		</section>







		<!-- about -->
<!-- 		<section id="section-about" class="section appear clearfix">
		<div class="container">

				<div class="row mar-bot40">
					<div class="col-md-offset-3 col-md-6">
						<div class="section-header">
							<h2 class="section-heading animated" data-animation="bounceInUp">Our Team</h2>
							<p>Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet consectetur, adipisci velit, sed quia non numquam.</p>
						</div>
					</div>
				</div>

					<div class="row align-center mar-bot40">
						<div class="col-md-3">
							<div class="team-member">
								<figure class="member-photo"><img src="img/team/member1.jpg" alt="" /></figure>
								<div class="team-detail">
									<h4>Jason Doe</h4>
									<span>User experiences</span>
								</div>
							</div>
						</div>
						<div class="col-md-3">
							<div class="team-member">
								<figure class="member-photo"><img src="img/team/member2.jpg" alt="" /></figure>
								<div class="team-detail">
									<h4>Timothy Clark</h4>
									<span>Web developer</span>
								</div>
							</div>
						</div>
						<div class="col-md-3">
							<div class="team-member">
								<figure class="member-photo"><img src="img/team/member3.jpg" alt="" /></figure>
								<div class="team-detail">
								<h4>Vicky Tan</h4>
									<span>Web designer</span>
								</div>
							</div>
						</div>
						<div class="col-md-3">
							<div class="team-member">
								<figure class="member-photo"><img src="img/team/member4.jpg" alt="" /></figure>
								<div class="team-detail">
								<h4>Kevin Peterson</h4>
									<span>UI designer</span>
								</div>
							</div>
						</div>
					</div>

		</div>
		</section> -->
		<!-- /about -->






		<!-- spacer section:stats -->
	<!-- 	<section id="parallax1" class="section pad-top40 pad-bot40" data-stellar-background-ratio="0.5">
			<div class="container">
            <div class="align-center pad-top40 pad-bot40">
                <blockquote class="bigquote color-white">Indoctum accusamus comprehensam</blockquote>
				<p class="color-white">Bootstraptaste</p>
            </div>
			</div>
		</section> -->




<!-- P O R T F O L I O -->
		<section id="section-portfolio" class="section appear clearfix">
			<div class="container">

				<div class="row mar-bot40">
					<div class="col-md-offset-3 col-md-6">
						<div class="section-header">
							<h2 class="section-heading animated" data-animation="bounceInUp">Portfolio</h2>
							<p>Estos son algunos de nuestros últimos trabajos</p>
						</div>
					</div>
				</div>

                        <div class="row">
                          <nav id="filter" class="col-md-12 text-center">
                            <ul>
                              <li><a href="#" class="current btn-theme btn-small" data-filter="*">todos</a></li>
                              <li><a href="#"  class="btn-theme btn-small" data-filter=".webdesign" >gráfica</a></li>
                              <li><a href="#"  class="btn-theme btn-small" data-filter=".photography">industrial</a></li>
                              <li><a href="#" class="btn-theme btn-small" data-filter=".print">make-up</a></li>
                              <li><a href="#" class="btn-theme btn-small" data-filter=".print">fotografía</a></li>
                            </ul>
                          </nav>
                          <div class="col-md-12">
                            <div class="row">
                              <div class="portfolio-items isotopeWrapper clearfix" id="3">

                                <article class="col-md-4 isotopeItem webdesign">
									<div class="portfolio-item">
										<img src="img/portfolio/img1.jpg" alt="" />
										 <div class="portfolio-desc align-center">
											<div class="folio-info">
												<h5><a href="#">Portfolio name</a></h5>
												<a href="img/portfolio/img1.jpg" class="fancybox"><i class="fa fa-plus fa-2x"></i></a>
											 </div>
										 </div>
									</div>
                                </article>

                                <article class="col-md-4 isotopeItem photography">
									<div class="portfolio-item">
										<img src="img/portfolio/img2.jpg" alt="" />
										 <div class="portfolio-desc align-center">
											<div class="folio-info">
												<h5><a href="#">Portfolio name</a></h5>
												<a href="img/portfolio/img2.jpg" class="fancybox"><i class="fa fa-plus fa-2x"></i></a>
											 </div>
										 </div>
									</div>
                                </article>


                                <article class="col-md-4 isotopeItem photography">
									<div class="portfolio-item">
										<img src="img/portfolio/img3.jpg" alt="" />
										 <div class="portfolio-desc align-center">
											<div class="folio-info">
												<h5><a href="#">Portfolio name</a></h5>
												<a href="img/portfolio/img3.jpg" class="fancybox"><i class="fa fa-plus fa-2x"></i></a>
											 </div>
										 </div>
									</div>
                                </article>

                                <article class="col-md-4 isotopeItem print">
									<div class="portfolio-item">
										<img src="img/portfolio/img4.jpg" alt="" />
										 <div class="portfolio-desc align-center">
											<div class="folio-info">
												<h5><a href="#">Portfolio name</a></h5>
												<a href="img/portfolio/img4.jpg" class="fancybox"><i class="fa fa-plus fa-2x"></i></a>
											 </div>
										 </div>
									</div>
                                </article>

                                <article class="col-md-4 isotopeItem photography">
									<div class="portfolio-item">
										<img src="img/portfolio/img5.jpg" alt="" />
										 <div class="portfolio-desc align-center">
											<div class="folio-info">
												<h5><a href="#">Portfolio name</a></h5>
												<a href="img/portfolio/img5.jpg" class="fancybox"><i class="fa fa-plus fa-2x"></i></a>
											 </div>
										 </div>
									</div>
                                </article>

                                <article class="col-md-4 isotopeItem webdesign">
									<div class="portfolio-item">
										<img src="img/portfolio/img6.jpg" alt="" />
										 <div class="portfolio-desc align-center">
											<div class="folio-info">
												<h5><a href="#">Portfolio name</a></h5>
												<a href="img/portfolio/img6.jpg" class="fancybox"><i class="fa fa-plus fa-2x"></i></a>
											 </div>
										 </div>
									</div>
                                </article>

                                <article class="col-md-4 isotopeItem print">
									<div class="portfolio-item">
										<img src="img/portfolio/img7.jpg" alt="" />
										 <div class="portfolio-desc align-center">
											<div class="folio-info">
												<h5><a href="#">Portfolio name</a></h5>
												<a href="img/portfolio/img7.jpg" class="fancybox"><i class="fa fa-plus fa-2x"></i></a>
											 </div>
										 </div>
									</div>
                                </article>

                                <article class="col-md-4 isotopeItem photography">
									<div class="portfolio-item">
										<img src="img/portfolio/img8.jpg" alt="" />
										 <div class="portfolio-desc align-center">
											<div class="folio-info">
												<h5><a href="#">Portfolio name</a></h5>
												<a href="img/portfolio/img8.jpg" class="fancybox"><i class="fa fa-plus fa-2x"></i></a>
											 </div>
										 </div>
									</div>
                                </article>

                                <article class="col-md-4 isotopeItem print">
									<div class="portfolio-item">
										<img src="img/portfolio/img9.jpg" alt="" />
										 <div class="portfolio-desc align-center">
											<div class="folio-info">
												<h5><a href="#">Portfolio name</a></h5>
												<a href="img/portfolio/img9.jpg" class="fancybox"><i class="fa fa-plus fa-2x"></i></a>
											 </div>
										 </div>
									</div>
                                </article>
                                </div>

							</div>


							</div>
                        </div>

			</div>
		</section>



<!-- K E P O T -->
		<div id="section-kepot">
			<section id="parallax2" class="section parallax" data-stellar-background-ratio="0.5">
	            <div class="align-center pad-top40 pad-bot40">
	                <!-- <blockquote class="bigquote color-white">Indoctum accusamus comprehensam</blockquote> -->
	                <img src="img/logo_kepot.png" alt=""/>
					<!-- <p class="color-white">Nuestro primer producto</p> -->
	            </div>
			</section>
		</div>

		<section>
				<div class="zona_kepot">
					<div class="col-md-8 col-md-offset-2">
						<!-- I S S U U -->
						<iframe width="650" height="325" src="http://e.issuu.com/embed.html#15172967/12193464" frameborder="0" allowfullscreen></iframe>
		                <div class="row">
							<div class="row mar-bot40">
								<div class="col-md-2 col-md-offset-1" >
									<div class="align-center">
										<img class="padding_110" src="img/kepot/boceta.png" alt=""/>
										<h4 class="text-bold color-white">BOCETA</h4>
									</div>
								</div>

								<div class="col-md-2" >
									<div class="align-center">
										<img class="padding_110" src="img/kepot/banquetinas.png" alt=""/>
										<h4 class="text-bold color-white">BANQUETINAS</h4>
									</div>
								</div>

								<div class="col-md-2" >
									<div class="align-center">
										<img class="padding_110"src="img/kepot/meciza.png" alt=""/>
										<h4 class="text-bold color-white">MECIZA</h4>
									</div>
								</div>

								<div class="col-md-2" >
									<div class="align-center">
										<img class="padding_110" src="img/kepot/bauleta.png" alt=""/>
										<h4 class="text-bold color-white">BAULETA</h4>
									</div>
								</div>

								<div class="col-md-2" >
									<div class="align-center">
										<img src="img/kepot/elevato.png" alt=""/>
										<h4 class="text-bold color-white">ELEVATO</h4>
									</div>
								</div>
							</div>
						</div>

							<p class="color-white" align="justify">Los muebles Kepot son objetos pensados para niños de entre dos y siete años, con el objetivo de promover el desarrollo lúdico y creativo. El cuerpo de cada mueble está realizado en madera procesada, pintada artesanalmente, con terminación superficial satinada, duradera y resistente, y conserva la pureza de los colores seleccionados para cada Kepot. Las patas cónicas, elementos distintivos de este diseño, están realizadas en madera maciza, forradas con telas diseñadas y serigrafiadas por distintos emprendedores del diseño textil argentino. Los muebles no sólo proponen creatividad en su uso, sino también en la génesis del propio Kepot ya que permite la combinación de diversos colores y géneros.</p>
					</div>
				</div>
		</section>


<!-- C O N T A C T O -->
		<section id="section-contacto" class="section appear clearfix">
			<div class="container">

				<div class="row mar-bot40">
					<div class="col-md-offset-3 col-md-6">
						<div class="section-header">
							<h2 class="section-heading animated" data-animation="bounceInUp">CONTACTO</h2>
							<p>¿consultas? ¿presupuestos? ¿críticas? ¿elogios?</p>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-md-8 col-md-offset-2">
						<div class="cform" id="contact-form">
							<div id="sendmessage">
								 Your message has been sent. Thank you!
							</div>
							<form action="contact/contact.php" method="post" role="form" class="contactForm">
							  <div class="form-group">
								<label for="name">Nombre</label>
								<input type="text" name="name" class="form-control" id="name" placeholder="Nombre" data-rule="maxlen:4" data-msg="Please enter at least 4 chars" />
								<div class="validation"></div>
							  </div>
							  <div class="form-group">
								<label for="email">E-mail</label>
								<input type="email" class="form-control" name="email" id="email" placeholder="E-mail" data-rule="email" data-msg="Please enter a valid email" />
								<div class="validation"></div>
							  </div>
							  <div class="form-group">
								<label for="subject">Asunto</label>
								<input type="text" class="form-control" name="subject" id="subject" placeholder="Asunto" data-rule="maxlen:4" data-msg="Please enter at least 8 chars of subject" />
								<div class="validation"></div>
							  </div>
							  <div class="form-group">
								<label for="message">Mensaje</label>
								<textarea class="form-control" name="message" rows="5" data-rule="required" data-msg="Please write something for us"></textarea>
								<div class="validation"></div>
							  </div>

							  <button type="submit" class="btn btn-theme pull-left">ENVIAR MENSAJE</button>
							</form>

						</div>
					</div>
					<!-- ./span12 -->
				</div>

			</div>
		</section>

	<section id="footer" class="section footer">
		<div class="container">
			<div class="row animated opacity mar-bot20" data-andown="fadeIn" data-animation="animation">
				<div class="col-sm-12 align-center">
                    <ul class="social-network social-circle">
                        <li><a href="https://www.facebook.com/estudioryc?ref=hl" target="_blanck" class="icoFacebook" title="Facebook"><i class="fa fa-facebook"></i></a></li>
                       <!--
                        <li><a href="#" class="icoRss" title="Rss"><i class="fa fa-rss"></i></a></li>
                        <li><a href="#" class="icoTwitter" title="Twitter"><i class="fa fa-twitter"></i></a></li>
                        <li><a href="#" class="icoGoogle" title="Google +"><i class="fa fa-google-plus"></i></a></li>
                        <li><a href="#" class="icoLinkedin" title="Linkedin"><i class="fa fa-linkedin"></i></a></li> -->
                    </ul>
				</div>
			</div>

			<div class="row align-center copyright">
					<div class="col-sm-12"><p>hola@rayosycentellasdesign.com<a href="http://bootstraptaste.com">221 5741715</a></p></div>
			</div>
		</div>

	</section>



<!-- A A D D   H O M E -->

	<a href="#header" class="scrollup"><i class="fa fa-chevron-up"></i></a>


<!-- S C R I P T S  -->

	<script src="js/modernizr-2.6.2-respond-1.1.0.min.js"></script>
	<script src="js/jquery.js"></script>
	<script src="js/jquery.easing.1.3.js"></script>
    <script src="js/bootstrap.min.js"></script>
	<!-- <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyASm3CwaK9qtcZEWYa-iQwHaGi3gcosAJc&sensor=false"></script> -->
	<script src="js/jquery.isotope.min.js"></script>
	<script src="js/jquery.nicescroll.min.js"></script>
	<script src="js/fancybox/jquery.fancybox.pack.js"></script>
	<script src="js/skrollr.min.js"></script>
	<script src="js/jquery.scrollTo-1.4.3.1-min.js"></script>
	<script src="js/jquery.localscroll-1.2.7-min.js"></script>
	<script src="js/stellar.js"></script>
	<script src="js/jquery.appear.js"></script>
	<script src="js/validate.js"></script>
    <script src="js/main.js"></script>
        <script type="text/javascript">
            // When the window has finished loading create our google map below
            // google.maps.event.addDomListener(window, 'load', init);

            function init() {
                // Basic options for a simple Google Map
                // For more options see: https://developers.google.com/maps/documentation/javascript/reference#MapOptions
                var mapOptions = {
                    // How zoomed in you want the map to start at (always required)
                    zoom: 11,

                    // The latitude and longitude to center the map (always required)
                    center: new google.maps.LatLng(40.6700, -73.9400), // New York

                    // How you would like to style the map.
                    // This is where you would paste any style found on Snazzy Maps.
                    styles: [	{		featureType:"all",		elementType:"all",		stylers:[		{			invert_lightness:true		},		{			saturation:10		},		{			lightness:30		},		{			gamma:0.5		},		{			hue:"#1C705B"		}		]	}	]
                };

                // Get the HTML DOM element that will contain your map
                // We are using a div with id="map" seen below in the <body>
                var mapElement = document.getElementById('map');

                // Create the Google Map using out element and options defined above
                var map = new google.maps.Map(mapElement, mapOptions);
            }
        </script>


	</body>
</html>