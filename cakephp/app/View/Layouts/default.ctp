
<!DOCTYPE HTML>

<html>
	<head>
		<title>Moveevent</title>
		<meta http-equiv="content-type" content="text/html; charset=utf-8" />
		<meta name="description" content="" />
		<meta name="keywords" content="" />
		<script src="js/jquery.min.js"></script>
		<script src="js/jquery.dropotron.min.js"></script>
		<script src="js/skel.min.js"></script>
		<script src="js/skel-layers.min.js"></script>
		<script src="js/init.js"></script>
		<script type="text/javascript" src="js/jquery-1.2.6.min.js"></script>
		<noscript>
			<link rel="stylesheet" href="css/skel.css" />
			<link rel="stylesheet" href="css/style.css" />
			<link rel="stylesheet" href="css/style-desktop.css" />
			<link rel="stylesheet" href="css/popup.css" />
		</noscript>

		
		
			<script type="text/javascript">

				// slide image
				function slideSwitch() {
					var $active = $('#slideshow IMG.active');
					if ( $active.length == 0 ) $active = $('#slideshow IMG:last');
					var $next =  $active.next().length ? $active.next()
						: $('#slideshow IMG:first');

						$active.addClass('last-active');

						$next.css({opacity: 0.0})
							.addClass('active')
							.animate({opacity: 1.0}, 1000, function() {
								$active.removeClass('active last-active');
							});
					}

					$(function() {
						setInterval( "slideSwitch()", 5000 );
					});

	</script>
		
		
		
	</head>
	<body class="homepage">

		<!-- Header -->
		<!-- Bouton de connexion + pop up -->
		<div id="headerButton">
			<label class="button" for="modalCheck">Connexion</label>
			<input type="checkbox" id="modalCheck" />
			<div class="modalLayer">
				<div class="popup_block">
					<label for="modalCheck"><img alt="Fermer" title="Fermer la fenêtre" class="btn_close" src="images/close_pop.png"></label>
					<img style="float: right; margin: 0 0 0 20px;" alt="bulle" src="images/bulle5.png">
					<center>
					<h2>Connexion</h2>
					
					<div class="input-group margin-bottom-sm">
						<span class="input-group-addon"><i class="fa fa-envelope-o fa-fw"></i></span>
						<input class="form-control" type="text" placeholder="Addresse email">
					</div>
					
					<div class="input-group">
						  <span class="input-group-addon"><i class="fa fa-key fa-fw"></i></span>
						  <input class="form-control" type="password" placeholder="Mot de passe">
					</div>
					
					<br>
					<a href="inscription.html" class="button">Inscription</a>     
					<a href="#" class="button">Connexion</a>
					</center>
				</div>
			</div>
		</div>
			
			
			
			
			


			<!-- fond du header-->
			<header id="header">
				<div class="logo container">
				</div>
			</header>



		
		<!-- Banner -->
			<div id="banner-wrapper">
			
					<section id="banner">
					
					<div id="slideshow">
					
						<img src="images/image1.jpg" style="width:100%;height:100%" alt="Slideshow Image 1" class="active" />
						<img src="images/image2.jpg" style="width:100%;height:100%"  alt="Slideshow Image 2" />
						<img src="images/image3.jpg" style="width:100%;height:100%"  alt="Slideshow Image 3" />
						<img src="images/image4.jpg" style="width:100%;height:100%"  alt="Slideshow Image 2" />
						<img src="images/image5.jpg" style="width:100%;height:100%"  alt="Slideshow Image 3" />
						<img src="images/image6.jpg" style="width:100%;height:100%"  alt="Slideshow Image 2" />
						<img src="images/image7.jpg" style="width:100%;height:100%"  alt="Slideshow Image 3" />
						<img src="images/image8.jpg" style="width:100%;height:100%"  alt="Slideshow Image 2" />
						<img src="images/image9.jpg" style="width:100%;height:100%"  alt="Slideshow Image 3" />

				<br><br>
						<h2>Partager</h2>
						<h2>Rencontrer</h2>
						<h2>S'évader</h2>
					</div>
					</section>
			</div>

		<!-- Main -->
			<div id="main-wrapper">
				<div id="main" class="container">


			<?php echo $this->Session->flash(); ?>

			<?php echo $this->fetch('content'); ?>
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