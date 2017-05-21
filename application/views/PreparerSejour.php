
<link rel="stylesheet" href="<?= base_url() ?>assets/css/animate.min.css" type="text/css">

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
				<a href="#tarif" class="btn btn-ghost btn-lg" data-animation="animated fadeInLeft">Prendre un billet</a><a href="<?= base_url() ?>Accueil/NosUnivers" class="btn btn-primary btn-lg" data-animation="animated fadeInRight">D&eacute;couvrir</a>
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
					Visitez votre &eacute;poque favorite</h2>
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
					Vous vouliez faire une éscapade dans une autre vie pour 2 ou 3 jours?.
					<br>Cette offre est faite spécialement pour vous.
				</p>
				<a href="#contact" class="btn btn-primary btn-lg">Prendre le billet!</a>
			</div>
		</div>
		<div class="col-md-4 bg-darkgray">
			<div class="box">
				<h2>Tarif <b>Solutions</b></h2>
				<p>
					Si vous voulez vivre de bonnes expériences en famille ou à plusieurs, <i>Solution</i> est le mieux pour vous.
					<br> Une offre dédiée specialement aux aventures de groupe.
				</p>
				<a href="#contact" class="btn btn-warning btn-lg">Prendre le billet!</a>
			</div>
		</div>
		<div class="col-md-4 bg-gray">
			<div class="box">
				<h2>Enjoy <b>Life</b></h2>
				<p>
					L'offre la plus couteuse mais la meilleure. Son expérience est deux fois plus intéressante mais aussi deux fois plus confortable. Chaque détail comptera!
					<br> Alors, vous attendez quoi encore?
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
<section id="billet">
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
					<form method="post" action="<?php echo base_url(); ?>Ticket/ajouter"  class="text-left">
						<input type="hidden" name="type" value="1">
						<input type="hidden" name="iduser" value="<?php echo $idUser; ?>">
						<select name="tarif" type="text" class="col-md-6 norightborder" id="selectedbillet" required>
							<option disabled selected>Votre Tarif *</option>
							<?php foreach ($listeTarifs as $tarif){ ?>
								<option value="<?php echo $tarif->idtarif; ?>"><?php echo $tarif->designation; ?></option>
							<?php } ?>
						</select>
						<select name="monde" type="text" class="col-md-6 norightborder" placeholder="Votre tarif *" required>
							<option disabled selected>L'Epoque *</option>
							<?php foreach ($listeMonde as $monde){ ?>
								<option value="<?php echo $monde->idmonde; ?>"><?php echo $monde->designation; ?></option>
							<?php } ?>

						</select>
						<input name="quantite" type="number" class="col-md-4" placeholder="Nombre de personne *" min="1" required>
						<input name="date" type="date" class="col-md-8" placeholder="Date *" required>
						<?php if(isset($_SESSION["user"])){ ?>
							<input type="submit" id="test" class="contact submit btn btn-primary btn-xl" value="Acheter">
						<?php }else{ ?>
							<a href="<?php echo base_url(); ?>Utilisateur" id="test" class="contact submit btn btn-primary btn-xl" value="">Veuillez-vous connecter pour en acheter</a>
						<?php } ?>
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
						"Les ethiques Malgaches sans taches venant de l'extérieur. "
					</p>
				</div>
			</div>
		</div>
		<h2>CIT&Eacute; DES MILLES SOLDATS</h2>
		<p>
			Place du marché
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
						"Survivre et une chose, mais la famille c'en est une autre. "
					</p>
				</div>
			</div>
		</div>
		<h2>UN CAMPS DE FAMILLE</h2>
		<p>
			Les premiers artisans
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
			<img src="<?= base_url() ?>assets/img/landscape-war2.jpg" alt="" class="img-responsive">
			<div class="mask team_quote">
				<div class="port-zoom-link">
					<p>
						"Finissons la guerre pour faire l'amour après. "
					</p>
				</div>
			</div>
		</div>
		<h2>ATTAQUES D'ASSAUT</h2>
		<p>
			Des soldats qui ne reculeront devant rien
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
<section id="sejour">
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
					<form method="post" action="<?php echo base_url(); ?>Ticket/ajouter" id="contactform" class="text-left">
						<input type="hidden" name="type" value="2">
						<input type="hidden" name="iduser" value="<?php echo $idUser; ?>">
						<select name="tarif" type="text" class="col-md-6 norightborder" id="selectedbillet" required>
							<option disabled selected>Votre Tarif *</option>
							<?php foreach ($listeTarifs as $tarif){ ?>
								<option value="<?php echo $tarif->idtarif; ?>"><?php echo $tarif->designation; ?></option>
							<?php } ?>
						</select>
						<select name="monde" type="text" class="col-md-6 norightborder" placeholder="Votre tarif *" required>
							<option disabled selected>L'Epoque *</option>
							<?php foreach ($listeMonde as $monde){ ?>
								<option value="<?php echo $monde->idmonde; ?>"><?php echo $monde->designation; ?></option>
							<?php } ?>
						</select>
						<input name="quantite" type="number" class="col-md-4" placeholder="Nombre de personne *" min="1" required>
						<input name="date" type="date" class="col-md-4" placeholder="Date de début *" required>
						<input name="datefin" type="date" class="col-md-4" placeholder="Date de fin *" required>
						<?php if(isset($_SESSION["user"])){ ?>
							<input type="submit" id="submit" class="contact submit btn btn-primary btn-xl" value="R&eacute;server">
						<?php }else{ ?>
							<a href="<?php echo base_url(); ?>Utilisateur" id="test" class="contact submit btn btn-primary btn-xl" value="">Veuillez-vous connecter pour en acheter</a>
						<?php } ?>
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
								<i class="fa fa-thumbs-up"></i>
							</div>
							<h2 class="counter" data-from="0" data-to="294" data-speed="2500"></h2>
							<h4>Appréciation en ce mois</h4>
						</div>
					</div>
					<div class="col-md-3">
						<div class="funfacts text-center">
							<div class="icon">
								<i class="fa fa-thumbs-down"></i>
							</div>
							<h2 class="counter" data-from="0" data-to="5" data-speed="2500"></h2>
							<h4>Problèmes survenus</h4>
						</div>
					</div>
					<div class="col-md-3">
						<div class="funfacts text-center">
							<div class="icon">
								<i class="fa fa-send-o"></i>
							</div>
							<h2 class="counter" data-from="0" data-to="60" data-speed="2500"></h2>
							<h4>Jours d'activités</h4>
						</div>
					</div>
					<div class="col-md-3">
						<div class="funfacts text-center">
							<div class="icon">
								<i class="fa fa-group"></i>
							</div>
							<h2 class="counter" data-from="0" data-to="1268" data-speed="2500"></h2>
							<h4>Visiteurs</h4>
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
				<h2 class="section-heading"><b>Vos retours</b></h2>
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
								<h3>Andriatiana Baliaka</h3>
								<p>
									J'ai passé 3jours dans le monde de nos ancêtres, pourquoi je ne suis pas née à cette époque là.
									C'était vraiment formidable.
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
									Mars 2017
								</div>
								<h3>Anthony Ramanantsalama</h3>
								<p>
									Vivre de telles aventures épiques qu'à l'age de Pierre... Une expérience qui me tiendra à coeur.
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
									Mars 2017
								</div>
								<h3>Steave Leong</h3>
								<p>
									Rejoindre une armée, tenir une arme. A quelle point la tâche est - elle lourde?
									Même si cen'était qu'une simulation, j'ai appris tant de chose et j(ai vécu un moment sensationnel.
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
									Avril 2017
								</div>
								<h3>Andrianina Layton</h3>
								<p>
									Je n'ai pu passer u'une journée dans AndroidPark, j'ai pas eu le temps de bien savourer l'ensemble
									mai j'ai eu une super aperçue. J'ai hâte d'y revenir.
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