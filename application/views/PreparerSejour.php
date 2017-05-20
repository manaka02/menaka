<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="">
	<meta name="author" content="">
	<title>Layana - HTML Bootstrap Theme</title>
	<!-- Bootstrap Core CSS -->
	<link rel="stylesheet" href="<?= base_url() ?>assets/css/bootstrap.min.css" type="text/css">
	<!-- Custom Fonts -->
	<link rel="stylesheet" href="<?= base_url() ?>assets/font-awesome/css/font-awesome.min.css" type="text/css">
	<!-- Plugin CSS -->
	<link rel="stylesheet" href="<?= base_url() ?>assets/css/animate.min.css" type="text/css">
	<!-- Custom CSS -->
	<link rel="stylesheet" href="<?= base_url() ?>assets/css/adri.css" type="text/css">
	<link rel="stylesheet" href="<?= base_url() ?>assets/css/gg-style.css" type="text/css">
	<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	<!--[if lt IE 9]>
	<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
	<script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
	<![endif]-->
</head>
<body id="page-top">

<!-- Section Intro Slider
================================================== -->
<div id="carousel-example-generic" class="carousel intro slide">
	<!-- Indicators -->
	<ol class="carousel-indicators">
		<li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
		<li data-target="#carousel-example-generic" data-slide-to="1"></li>
		<li data-target="#carousel-example-generic" data-slide-to="2"></li>
	</ol>
	<!-- Wrapper for slides -->
	<div class="carousel-inner" role="listbox">
		<!-- First slide -->
		<div class="item active" style="background-image:url(<?= base_url() ?>assets/img/prehistoire.jpg)">
			<div class="carousel-caption">
				<h2 data-animation="animated bounceInDown">
					Pr&eacute;parer votre s&eacute;jour </h2>
				<h1 data-animation="animated bounceInUp">
					Android Land</h1>
				<a href="#tarif" class="btn btn-ghost btn-lg" data-animation="animated fadeInLeft">Start Tour</a><a href="#" class="btn btn-primary btn-lg" data-animation="animated fadeInRight">Learn More</a>
			</div>
		</div>
		<!-- /.item -->
		<!-- Second slide -->
		<div class="item" style="background-image:url(<?= base_url() ?>assets/img/malagasy-fahiny-1.jpg)">
			<div class="carousel-caption">
				<h2 data-animation="animated bounceInDown">
					R&eacute;servez votre place </h2>
				<h1 data-animation="animated bounceInUp">
					Android Land</h1>
				<a href="#tarif" class="btn btn-ghost btn-lg" data-animation="animated bounceIn">Start Tour</a><a href="#" class="btn btn-primary btn-lg" data-animation="animated bounceIn">Learn More</a>
			</div>
		</div>
		<!-- /.item -->
		<!-- Third slide -->
		<div class="item"  style="background-image:url(<?= base_url() ?>assets/img/seconde-guerre-mondiale.jpg)">
			<div class="carousel-caption">
				<h2 data-animation="animated bounceInDown">
					Visitez votre &eacute;poque </h2>
				<h1 data-animation="animated bounceInUp">
					Android Land</h1>
				<a href="#tarif" class="btn btn-ghost btn-lg" data-animation="animated zoomInRight">Start Tour</a><a href="#" class="btn btn-primary btn-lg" data-animation="animated zoomInRight">Learn More</a>
			</div>
		</div>
		<!-- /.item -->
	</div>
	<!-- /.carousel-inner -->
	<!-- Controls (currently displayed none from adri.css)-->
	<a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
		<span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
		<span class="sr-only">Pr&eacute;c&eacute;dent</span>
	</a>
	<a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
		<span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
		<span class="sr-only">Suivant</span>
	</a>
</div>
<!-- /.carousel -->

<!-- Section About
================================================== -->
<section id="about">
	<div class="container">
		<div class="row">
			<div class="col-lg-10 col-lg-offset-1 text-center">
				<h2 class="section-heading">VIVEZ LE <br/>COMME SI C'&Eacute;TAIT <br> <b>VOUS</b></h2>
				<hr>
				<p>
					Ne tardez pas! R&eacute;servez d&egrave;s aujourdui vos places et vivez ces &egrave;res qui ont marqu&eacute; notre pays, notre monde.
					De la pr&eacute;histoire, &agrave; la guerre mondiale, jusqu'au r&egrave;gne de nos anciens souverains, ne ratez aucun d&eacute;tails, ils y seront !
				</p>
			</div>
		</div>
	</div>
</section>

<!-- Section after about
================================================== -->
<section class="no-padding" id="tarif">
	<div class="equal-heights w-middle">
		<div class="col-md-4 bg-primary">
			<div class="box">
				<h2>Tarif <b>Time Traveler</b></h2>
				<p>
					Vous voulez passer plus de temps dans l'&egrave;re d'autrefois?
					<br><i>Time Traveler</i> est fait pour vous!
					Ce tarif vous fera traverser trois &eacute;poques d&eacute;cisives sur notre pays.
				</p>
				<a href="#contact" class="btn btn-round btn-white btn-xl">Prendre le billet!</a>
			</div>
		</div>
		<div class="col-md-4">
			<img src="<?= base_url() ?>assets/img/malagasy-fahiny.jpg" alt="">
		</div>
		<div class="col-md-4 bg-dark">
			<div class="box">
				<h2>Tarif <b>Thief of Time</b></h2>
				<p>
					Voler un peu du temps d'avant vous laissera vous &eacute;vader dans un ancien monde.
					<br><i>Thief of Time</i> est l'id&eacute;al pour vous. Volez un peu du temps d'avant pour divertir un bout du votre.
				</p>
				<a id="thiefoftime" href="#contact" class="btn btn-round btn-white btn-xl">Prendre le billet!</a>
			</div>
		</div>
	</div>
	<div class="equal-heights w-middle">
		<div class="col-md-4 bg-gray">
			<div class="box">
				<h2>Tarif <b>Junior</b></h2>
				<p>
					When we give cheerfully and accept gratefully, everyone is blessed. A bone to the dog is not charity. Charity is the bone shared with the dog, when you are just as hungry as the dog.
				</p>
				<a href="#contact" class="btn btn-primary btn-lg">Prendre le billet!</a>
			</div>
		</div>
		<div class="col-md-4 bg-darkgray">
			<div class="box">
				<h2>Tarif <b>Solutions</b></h2>
				<p>
					The simplest acts of kindness are by far more powerful then a thousand heads bowing in prayer. Let us not forget that the real solution lies in a world in which charity will be unnecessary.
				</p>
				<a href="#contact" class="btn btn-warning btn-lg">Prendre le billet!</a>
			</div>
		</div>
		<div class="col-md-4 bg-gray">
			<div class="box">
				<h2>Enjoy <b>Life</b></h2>
				<p>
					The simplest acts of kindness are by far more powerful then a thousand heads bowing in prayer. Let us not forget that the real solution lies in a world in which charity will be unnecessary.
				</p>
				<a href="#contact" class="btn btn-primary btn-lg">Prendre le billet!</a>
			</div>
		</div>
	</div>
</section>
<div class="clearfix">
</div>


<!-- Section Contact
================================================== -->
<section id="contact">
	<div class="container">
		<div class="row">
			<div class="col-md-8 col-md-offset-2 text-center">
				<h2 class="section-heading">VENEZ <b>R&Eacute;SERVEZ</b> VOS BILLETS</h2>
				<hr class="primary">
				<p>
					Pr&ecirc;t &agrave; vivre une <b>incroyable exp&eacute;rience</b> ? Compl&eacute;tez votre formulaire de r&eacute;servation en quelques temps et n'attendez plus! Rejoignez nous !
				</p>
				<div class="regularform">
					<div class="done">
						<div class="alert alert-success">
							<button type="button" class="close" data-dismiss="alert">×</button>
							Votre billet a bien &eacute;t&eacute; enregistr&eacute;!
						</div>
					</div>
					<form method="post" action="contact.php" id="contactform" class="text-left">
						<select name="name" type="text" class="col-md-6 norightborder" id="selectedbillet" required>
							<option disabled selected>Votre Tarif *</option>
							<option value="1">Time Traveller</option>
							<option value="2">Thief of Time</option>
							<option value="3">Junior</option>
						</select>
						<select name="name" type="text" class="col-md-6 norightborder" placeholder="Votre tarif *">
							<option disabled selected>L'Epoque *</option>
							<option>Toutes</option>
							<option>Pr&eacute;histoire</option>
							<option>Seconde guerre mondiale</option>
							<option>Royaut&eacute; malgache</option>
						</select>
						<input name="quantite" type="number" class="col-md-4" placeholder="Quantite *">
						<input name="date" type="date" class="col-md-8" placeholder="Date *">
						<input type="submit" id="submit" class="contact submit btn btn-primary btn-xl" value="Acheter">
					</form>
				</div>
			</div>
		</div>
	</div>
</section>

<!-- Section Team
================================================== -->
<section class="no-padding">
	<div class="col-md-4 bg-primary no-padding teambox">
		<div class="team-thumb overlay-image view-overlay">
			<img src="<?= base_url() ?>assets/img/malagasy-fahiny-carre.jpg" alt="" class="img-responsive">
			<div class="mask team_quote">
				<div class="port-zoom-link">
					<p>
						Its is great to work in such company, some other projects will be started in the same format!
					</p>
				</div>
			</div>
		</div>
		<h2>BEVERLY GARCIA</h2>
		<p>
			VOLUNTEER WORK
		</p>
		<div class="team-social">
			<a href="#"><i class="fa fa-twitter"></i></a>
			<a href="#"><i class="fa fa-linkedin"></i></a>
			<a href="#"><i class="fa fa-facebook"></i></a>
			<a href="#"><i class="fa fa-google-plus"></i></a>
			<a href="#"><i class="fa fa-skype"></i></a>
		</div>
	</div>
	<div class="col-md-4 bg-dark no-padding teambox">
		<div class="team-thumb overlay-image view-overlay">
			<img src="<?= base_url() ?>assets/img/prehistoire-carre.jpg" alt="" class="img-responsive">
			<div class="mask team_quote">
				<div class="port-zoom-link">
					<p>
						Its is great to work in such company, some other projects will be started in the same format!
					</p>
				</div>
			</div>
		</div>
		<h2>MARY LACOSTE</h2>
		<p>
			LAYANA FOUNDER
		</p>
		<div class="team-social">
			<a href="#"><i class="fa fa-twitter"></i></a>
			<a href="#"><i class="fa fa-linkedin"></i></a>
			<a href="#"><i class="fa fa-facebook"></i></a>
			<a href="#"><i class="fa fa-google-plus"></i></a>
			<a href="#"><i class="fa fa-skype"></i></a>
		</div>
	</div>
	<div class="col-md-4 bg-primary no-padding teambox">
		<div class="team-thumb overlay-image view-overlay">
			<img src="<?= base_url() ?>assets/img/seconde-guerre-mondiale-carre.jpg" alt="" class="img-responsive">
			<div class="mask team_quote">
				<div class="port-zoom-link">
					<p>
						Its is great to work in such company, some other projects will be started in the same format!
					</p>
				</div>
			</div>
		</div>
		<h2>CAROL STEPHENS</h2>
		<p>
			PUBLIC RELATIONS
		</p>
		<div class="team-social">
			<a href="#"><i class="fa fa-twitter"></i></a>
			<a href="#"><i class="fa fa-linkedin"></i></a>
			<a href="#"><i class="fa fa-facebook"></i></a>
			<a href="#"><i class="fa fa-google-plus"></i></a>
			<a href="#"><i class="fa fa-skype"></i></a>
		</div>
	</div>
</section>
<div class="clearfix">
</div>

<!-- Section Contact
================================================== -->
<section id="contact">
	<div class="container">
		<div class="row">
			<div class="col-md-8 col-md-offset-2 text-center">
				<h2 class="section-heading">VENEZ <b>R&Eacute;SERVEZ</b> VOTRE SEJOUR</h2>
				<hr class="primary">
				<p>
					Vous avez un peu plus de temps pour vous ? Un s&eacute;jour c'est l'id&eacute;al pour avoir une <i>FULL</i> exp&eacute;rience. AndroidLand a ses propres chambres en lit Twin, et même ses suites familiales.
				</p>
				<div class="regularform">
					<div class="done">
						<div class="alert alert-success">
							<button type="button" class="close" data-dismiss="alert">×</button>
							Votre r&eacute;servation de s&eacute;jour a bien &eacute;t&eacute; enregistr&eacute;!
						</div>
					</div>
					<form method="post" action="contact.php" id="contactform" class="text-left">
						<select name="name" type="text" class="col-md-6 norightborder" id="selectedbillet" required>
							<option disabled selected>Votre Tarif *</option>
							<option value="1">Time Traveller</option>
							<option value="2">Thief of Time</option>
							<option value="3">Junior</option>
						</select>
						<select name="name" type="text" class="col-md-6 norightborder" placeholder="Votre tarif *">
							<option disabled selected>L'Epoque *</option>
							<option>Toutes</option>
							<option>Pr&eacute;histoire</option>
							<option>Seconde guerre mondiale</option>
							<option>Royaut&eacute; malgache</option>
						</select>
						<input name="quantite" type="number" class="col-md-4" placeholder="Nombre de personne *">
						<input name="date" type="date" class="col-md-4" placeholder="Date *">
						<input name="datefin" type="date" class="col-md-4" placeholder="Date de fin *">
						<input type="submit" id="submit" class="contact submit btn btn-primary btn-xl" value="R&eacute;server">
					</form>
				</div>
			</div>
		</div>
	</div>
</section>

<!-- Section Fun Facts
================================================== -->
<section id="funfacts" class="parallax parallax-image" style="background-image:url(<?= base_url() ?>assets/img/landscape-prehistoric.jpg)">
	<div class="wrapsection">
		<div class="container">
			<div class="parallax-content">
				<div class="row">
					<div class="col-md-3">
						<div class="funfacts text-center">
							<div class="icon">
								<i class="fa fa-tint"></i>
							</div>
							<h2 class="counter" data-from="0" data-to="294" data-speed="2500"></h2>
							<h4>Happy Clients</h4>
						</div>
					</div>
					<div class="col-md-3">
						<div class="funfacts text-center">
							<div class="icon">
								<i class="fa fa-trophy"></i>
							</div>
							<h2 class="counter" data-from="0" data-to="163" data-speed="2500"></h2>
							<h4>Awards Received</h4>
						</div>
					</div>
					<div class="col-md-3">
						<div class="funfacts text-center">
							<div class="icon">
								<i class="fa fa-send-o"></i>
							</div>
							<h2 class="counter" data-from="0" data-to="317" data-speed="2500"></h2>
							<h4>Letters Sent</h4>
						</div>
					</div>
					<div class="col-md-3">
						<div class="funfacts text-center">
							<div class="icon">
								<i class="fa fa-user"></i>
							</div>
							<h2 class="counter" data-from="0" data-to="458" data-speed="2500"></h2>
							<h4>Hired People</h4>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<div class="clearfix">
</div>

<!-- Section Timeline
================================================== -->
<section id="tline">
	<div class="container">
		<div class="row">
			<div class="col-lg-12 text-center">
				<h2 class="section-heading"><b>Timeline</b></h2>
			</div>
		</div>
	</div>
	<br/>
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<ul class="tline-holder">
					<!-- tline ITEM-->
					<li class="tline-item-left wow fadeInLeft">
						<div class="tline-item-content">
							<div class="date-icon fa fa-rocket">
							</div>
							<div class="tline-item-txt text-right">
								<div class="meta">
									January 2017
								</div>
								<h3>Love Fashion</h3>
								<p>
									It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.
								</p>
							</div>
						</div>
					</li>
					<!-- /tline-->
					<!-- tline-->
					<li class="tline-item-right wow fadeInRight">
						<div class="tline-item-content">
							<div class="date-icon fa fa-camera">
							</div>
							<div class="tline-item-txt text-left">
								<div class="meta">
									December 2016
								</div>
								<h3>Green is Health</h3>
								<p>
									It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.
								</p>
							</div>
						</div>
					</li>
					<!-- /tline-->
					<!-- tline-->
					<li class="tline-item-left wow fadeInLeft">
						<div class="tline-item-content">
							<div class="date-icon fa fa-user">
							</div>
							<div class="tline-item-txt text-right">
								<div class="meta">
									November 2016
								</div>
								<h3>Why you love us</h3>
								<p>
									It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.
								</p>
							</div>
						</div>
					</li>
					<!-- /tline-->
					<!-- tline-->
					<li class="tline-item-right wow fadeInRight">
						<div class="tline-item-content">
							<div class="date-icon fa fa-bullhorn">
							</div>
							<div class="tline-item-txt text-left">
								<div class="meta">
									September 2016
								</div>
								<h3>Save our Planet</h3>
								<p>
									It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.
								</p>
							</div>
						</div>
					</li>
					<!-- /tline-->
					<li class="tline-start">
						<div class="tline-start-content">
							<div class="tline-start-icon">
							</div>
							<a href="#" class="btn btn-primary bgn-xl wow zoomIn">START</a>
						</div>
					</li>
				</ul>
			</div>
		</div>
	</div>
</section>

<script src="<?= base_url('assets/js/jquery.js')?>"></script>
<script src="<?= base_url('assets/js/bootstrap.min.js')?>"></script>
<script src="<?= base_url() ?>assets/js/angular.min.js"></script>
<script src="<?= base_url() ?>assets/js/parallax.js"></script>
<script src="<?= base_url() ?>assets/js/contact.js"></script>
<script src="<?= base_url() ?>assets/js/countto.js"></script>
<script src="<?= base_url() ?>assets/js/jquery.easing.min.js"></script>
<script src="<?= base_url() ?>assets/js/wow.min.js"></script>
<script src="<?= base_url() ?>assets/js/common.js"></script>