<!DOCTYPE HTML>

<html>
	<head>
		<title>Evenement</title>
		<meta http-equiv="content-type" content="text/html; charset=utf-8" />
		<meta name="description" content="" />
		<meta name="keywords" content="" />
		<?php echo $this->Html->css(array('skel','style','style-desktop'));?>
		<?php echo $this->Html->script(array('jquery.min','jquery.dropotron.min','skel.min','skel-layers.min','init'));?>
		<?php echo $this->Html->script(array('http://maps.google.com/maps/api/js?sensor=false&libraries=geometry&v=3.7','http://code.jquery.com/jquery-1.9.0.min.js','maplace.min.js'));?>
		<?php echo $this->Html->css(array('skel','style','style-desktop'));?>
	</head>
	<body>


		<!-- Main -->
			<div id="main-wrapper">
				<div id="main" class="container">
		
						<?php echo $this->Session->flash(); ?>
						<?php echo $this->fetch('content'); ?>
						<center><a align="rigth" style="margin:40px;" href="./" class="button big" >Retour</a> </center>
								
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