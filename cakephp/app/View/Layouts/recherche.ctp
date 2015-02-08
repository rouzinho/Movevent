<!DOCTYPE HTML>

<html>
	<head>
		<title>Result recherch</title>
		<meta http-equiv="content-type" content="text/html; charset=utf-8" />
		<meta name="description" content="" />
		<meta name="keywords" content="" />
		<script src="js/jquery.min.js"></script>
		<script src="js/jquery.dropotron.min.js"></script>
		<script src="js/skel.min.js"></script>
		<script src="js/skel-layers.min.js"></script>
		<script src="js/init.js"></script>
		<noscript>
			<link rel="stylesheet" href="css/skel.css" />
			<link rel="stylesheet" href="css/style.css" />
			<link rel="stylesheet" href="css/style-desktop.css" />
		</noscript>

	</head>
	<body>

		<!-- Header -->
			<header id="header">
				<div class="logo container">
					<div>
						<h1><a href="index.html" id="logo"></a></h1>
					</div>
				</div>
			</header>


		<!-- Main -->
			<div id="main-wrapper">
				<div id="main" class="container">
					<div class="row">
						<div class="12u">
							<div class="content">
							
										<header>
											<h2>Résultat de la recherche</h2>
										</header>
										<section>
											 <ul class="meta" style="font-size:30px;">
											 <li>Nom  </li>                  <li>   Type d'évènement </li>
											 <li class="icon fa-clock-o" style="font-size:20px;"  align="rigth"  > date debut  -- --  date fin</li>
											 <li class="icon fa-university"  style="font-size:20px; text-align:center;" >   lieu des festivités </li> 
											 </ul>
											<?php echo $this->Session->flash(); ?>
											<?php echo $this->fetch('content'); ?>
										</section>
										<center><a align="rigth" style="margin:40px;" href="index.html" class="button big" >Retour</a> </center>
							</div>
						</div>
					</div>
				</div>
			</div>

		<!-- Footer -->
			<footer id="footer" class="container">
				<div class="row 200%">
					<div class="12u">

						<!-- About -->
							<section>
								<h2 class="major"><span>A propos</span></h2>
								<p>
								MovEEvent est un système de mise en relation de voyageurs souhaitant se rendre à un évènement bien précis, via le covoiturage. 
								De plus, le site propose une mise en relation de personnes habitant à proximité ou sur le lieu de la manifestation et qui proposent 
								gratuitement un hébergement pour la durée de cet évènement.
								</p>
							</section>

					</div>
				</div>
				<div class="row 200%">
					<div class="12u">

						<!-- Contact -->
							<section>
								<span></span>
								<ul class="contact">
									<li><a class="icon fa-facebook" href="https://www.facebook.com/"><span class="label">Facebook</span></a></li>
									<li><a class="icon fa-twitter" href="https://twitter.com/?lang=fr"><span class="label">Twitter</span></a></li>
									<li><a class="icon fa-instagram" href="http://instagram.com/#"><span class="label">Instagram</span></a></li>
									<li><a class="icon fa-dribbble" href="https://dribbble.com/"><span class="label">Dribbble</span></a></li>
									<li><a class="icon fa-google-plus" href="https://plus.google.com/"><span class="label">Google+</span></a></li>
								</ul>
							</section>
					
					</div>
				</div>

				<!-- Copyright -->
					<div id="copyright">
						<ul class="menu">
							<li>&copy; Moveevent. All rights reserved</li>
						</ul>
					</div>

			</footer>

	</body>
</html>