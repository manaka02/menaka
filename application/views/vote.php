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
		<div class="item active" style="background-image:url(<?= base_url() ?>assets/img/futuristic-lab.jpg)">
			<div class="carousel-caption">
				<h2 data-animation="animated bounceInDown">
					Trois nouveaux mondes &agrave; l'horizon ! Batissons les ensemble </h2>
				<h1 data-animation="animated bounceInUp">
					Android Land</h1>
			</div>
		</div>
		<div class="item" style="background-image:url(<?= base_url() ?>assets/img/futuristic-lab-2.jpg)">
			<div class="carousel-caption">
				<h2 data-animation="animated bounceInDown">
					Trois nouveaux mondes &agrave; l'horizon ! Batissons les ensemble </h2>
				<h1 data-animation="animated bounceInUp">
					Android Land</h1>
			</div>
		</div>
		<div class="item" style="background-image:url(<?= base_url() ?>assets/img/futuristic-lab-3.jpg)">
			<div class="carousel-caption">
				<h2 data-animation="animated bounceInDown">
					Trois nouveaux mondes &agrave; l'horizon ! Batissons les ensemble </h2>
				<h1 data-animation="animated bounceInUp">
					Android Land</h1>
			</div>
		</div>
	</div>
</div>
<!-- /.carousel -->

<!-- Section About
================================================== -->
<section id="about">
	<div class="container">
		<div class="row">
			<div class="col-lg-10 col-lg-offset-1 text-center">
				<h2 class="section-heading">PROPOSEZ NOUS VOS <br/>BONNES <br> <b>ID&Eacute;ES</b></h2>
				<hr>
				<p>
					Pour toujours plus vous faire r&eacute;ver &eacute;veill&eacute;, de nouveaux univers sont dans nos plans! Mais ces &eacute;poques ne pourront se faire sans vous.
					<br> Pour cela, proposez nous vos plus grandes imaginations !
					Mais seules les trois suggestions les plus acclam&eacute;es seront r&eacute;alis&eacute;es !
					Partagez donc au maximum votre id&eacute;e et elle aura les plus grandes chances d'&ecirc;tre v&eacute;cue !
				</p>

				<div class="regularform">
					<div class="done">
						<div class="alert alert-success">
							<button type="button" class="close" data-dismiss="alert">×</button>
							Votre billet a bien &eacute;t&eacute; enregistr&eacute;!
						</div>
					</div>
					<form method="post" action="<?= base_url() ?>Accueil/insertMonde"class="text-left">
						<input name="designation" type="text" class="col-md-12" placeholder="L'&egrave;re de votre r&egrave;ve *" required>
						<textarea name="description" class="col-md-12" placeholder="Une description de vos de votre d&eacute;sir *" required></textarea>
						<input type="submit" class="contact submit btn btn-primary btn-xl" value="Proposer">
					</form>
				</div>
			</div>
			<div class="col-lg-10 col-lg-offset-1 text-center">
				<h2 class="section-heading">LES <b>IDEES</b> ID&Eacute;ES D&Eacute;J&Agrave; SOUMISES</h2>
				<hr>
				<!--/.Card-->
				<div ng-controller="myCtrl">
					<?php  foreach($listeMonde as $monde) { ?>

					<div class="w3-card w3-white row" ng-repeat="lt in listeVote">
						<div class="media col-sm-8">
							<div class="media-left media-middle">
								<img src="<?= base_url() ?>assets/img/point.png" class="media-object" style="width:80px">
							</div>
							<div class="media-body">
								<h4 class="media-heading"><?php echo $monde->designation; ?></h4>
								<p><?php echo $monde->description; ?></p>
							</div>
						</div>
						<div class="col-sm-4 text-center row">
							<h3><i><b>5 </b></i> Vote(s)</h3>
							<?php if(isset($_SESSION["user"])){ ?>
								<button ng-click="myFunction('{{lt.idmonde}}','{{lt.iduser}}')" class="btn btn-primary btn-lg" data-animation="animated fadeInRight">Voter</button>
							<?php }else{ ?>
								<a href="<?php echo base_url(); ?>Utilisateur" id="test" class="btn btn-primary btn-lg" value="">Veuillez-vous connecter pour en acheter</a>
							<?php } ?>
						</div>
					</div>
					<?php } ?>

<!--					<div class="w3-card w3-white row" ng-repeat="lt in listeVote">-->
<!--						<div class="media col-sm-8">-->
<!--							<div class="media-left media-middle">-->
<!--								<img src="img_avatar1.png" class="media-object" style="width:80px">-->
<!--							</div>-->
<!--							<div class="media-body">-->
<!--								<h4 class="media-heading">{{lt.designation}}</h4>-->
<!--								<p>{{lt.description}}</p>-->
<!--							</div>-->
<!--						</div>-->
<!--						<div class="col-sm-4 text-center row">-->
<!--							<h3><i><b>{{lt.totalvote + --><?//= $ajoutVote ?><!--}}</b></i> Vote(s)</h3>-->
<!--							--><?php //if(isset($_SESSION["user"])){ ?>
<!--								<button ng-click="myFunction('{{lt.idmonde}}','{{lt.iduser}}')" class="btn btn-primary btn-lg" data-animation="animated fadeInRight">Voter</button>-->
<!--							--><?php //}else{ ?>
<!--								<a href="--><?php //echo base_url(); ?><!--Utilisateur" id="test" class="btn btn-primary btn-lg" value="">Veuillez-vous connecter pour en acheter</a>-->
<!--							--><?php //} ?>
<!--						</div>-->
<!--					</div>-->
				</div>
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
<?= base_url() ?>Accueil/effectuerVote/ ?>
	<script>
		var app = angular.module('myApp', []);
		app.controller('myCtrl', function($scope,$http) {
			$scope.totalvote = 3;
			$scope.myFunction = function(id,iduser) {
				$http.get("<?= base_url() ?>Accueil/effectuerVote/"+id+"/"+iduser)
					.then(function(response) {
//						$scope.vote = $scope.vote+1;
					}),(function(error) {
//					$scope.myWelcome = response.data;
					});
			}

			$http.get("<?= base_url() ?>Accueil/listeVote")
				.then(function(response) {
						$scope.listeVote = response.data.votevue;
				}),(function(error) {
//					$scope.myWelcome = response.data;
			});
		});
	</script>