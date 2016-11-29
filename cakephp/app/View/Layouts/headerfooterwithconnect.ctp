<!DOCTYPE HTML>

<html>
	<head>
		<title>Result recherch</title>
		

	</head>
	<?php echo $this->Html->css(array('skel','style','style-desktop'));?>
	<?php echo $this->Html->script(array('jquery.min','jquery.dropotron.min','skel.min','skel-layers.min','init'));?>
	<body>
		<div id="headerButton">
				<label class="button" for="modalCheck"><?php echo $this->Html->link(__('Modifier profil'), array('controller' => 'users', 'action' => 'edit',$user['User']['id'])); ?></label>
				<label class="button" for="modalCheck">Deconnexion</label>
				
			</div>
		<!-- Header -->
			<header id="header">
				<div class="logo container">
					<div>
						<h1><a href="index.html" id="logo"></a></h1>
					</div>
				</div>
			</header>
			
			
		</div>


		<!-- Main -->
			<div id="main-wrapper">
				<div id="main" class="container">
					<div class="row">
						<div class="12u">
							<div class="content">
										<?php echo $this->Session->flash(); ?>
											<?php echo $this->fetch('content'); ?>
										<center><a align="rigth" style="margin:40px;" href="../" class="button big" >Retour</a> </center>
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