					<script src="http://maps.google.com/maps/api/js?sensor=false&libraries=geometry&v=3.7"></script>
					<script src="http://code.jquery.com/jquery-1.9.0.min.js"></script>
					<script src="js/maplace.min.js"></script>


					<div class="row 50%">
						<div class="12u">
							
							<!-- Highlight -->
								<section class="box highlight">
									<ul class="special">
									
										<li><a href="./couchsurfings" class="icon fa-bed "><span class="label">bed</span></a></li>
										<li><a href="./carpools" class="icon fa-car"><span class="label">car</span></a></li>
										<li><a href="#" class="icon fa-child"><span class="label">child</span></a></li>
										<li><a href="./users" class="icon fa-users"><span class="label">users</span></a></li>
									</ul>


								</section>

						</div>
					</div>
					
					<div class="row 200%">
						<div class="12u">
							<!-- Blog -->
								<section class="box blog">
									<h2 class="major"><span>Evènement à la carte</span></h2>
									<div>
										<div class="row">
											<div class="9u">
												<div class="content content-left">
												
													<div id="gmap-menu"style=" height: 500px; width: 800px; "></div>

													<script type="text/javascript">
																var LocsA = [
														{
																lat: 48.58,
																lon: 7.75,
																title: 'Marché de Noël de Strasbourg',
																html: 'Différents marché de Noël dans toute la ville de Strasbourg au mois de décembre',
																icon: 'http://maps.google.com/mapfiles/markerA.png'
														},
														{
														lat: 48.86,
														lon: 2.33,
														title: 'Festival Solidays à Paris',
														html: 'Le festival solidaire Solidays à Paris à la fin du mois de juin',
														icon: 'http://maps.google.com/mapfiles/markerB.png',
														},
														{
														lat: 45.75,
														lon: 4.85,
														title: 'Fête des lumières de Lyon',
														html: 'Fête des lumières dans toute la ville de lyon le premier week-end de décembre',
														icon: 'http://maps.google.com/mapfiles/markerC.png',
														},
														{
														lat: 45.65,
														lon: 0.16,
														title: 'Festival de la BD à Angoulème',
														html: 'Festival international de la BD à Angoulème le 30 et 31 janvier',
														icon: 'http://maps.google.com/mapfiles/markerD.png',
														},
														];
																	$(function() {
																			new Maplace({
																				locations: LocsA
																				,
																				map_div: '#gmap-menu',
																				controls_type: 'list',
																				controls_on_map: false
																			}).Load(); 
																	});
													</script>


													<center>
															<br>
															<a href="./Events/add" class="button big">Créer un événement</a></center>
												
												</div>

											</div>
											<div class="3u">
												<div class="sidebar">
													<div id="controls"></div>
													<br>
													<br>
												<a href="./Events" class="button big">Recherche</a>
												</div>
											</div>
									</div>
								</section>
							
						</div>
					</div>
					
					<div class="row 200%">
						<div class="12u">

							<!-- Features -->
								<section class="box features">
									<h2 class="major"><span>événements à l'affiche</span></h2>
									<div>
										<div class="row">
											<div class="3u">
												
												<!-- Feature -->
													<section class="box feature">
														<a href="#" class="image info"><img src="images/eventWeather.png" alt="" /></a>
														<h3><a href="#">WEATHER WINTER</a></h3>
														<p>
															NUITS SONORES 2015 <br>
															Festival-Electro
														</p>
													</section>
										
											</div>
											<div class="3u">
												
												<!-- Feature -->
													<section class="box feature">
														<a href="#" class="image info"><img src="images/eventNuits.png"  alt="" /></a>
														<h3><a href="#">NUITS SONORES 2015</a></h3>
														<p>
															 
															Festival-Electro <br>
															Rhône-Alpes<br>
															Du 13/05/2015 au  17/05/2015
														</p>
													</section>
										
											</div>
											<div class="3u">
												
												<!-- Feature -->
													<section class="box feature">
														<a href="#" class="image info"><img src="images/pic03.jpg" alt="" /></a>
														<h3><a href="#">And Another</a></h3>
														<p>
															Phasellus quam turpis, feugiat sit amet ornare in, a hendrerit in 
															lectus dolore. Praesent semper mod quis eget sed etiam eu ante risus.
														</p>
													</section>
										
											</div>
											<div class="3u">
												
												<!-- Feature -->
													<section class="box feature">
														<a href="#" class="image info"><img src="images/pic04.jpg" alt="" /></a>
														<h3><a href="#">And One More</a></h3>
														<p>
															Phasellus quam turpis, feugiat sit amet ornare in, a hendrerit in 
															lectus dolore. Praesent semper mod quis eget sed etiam eu ante risus.
														</p>
													</section>
										
											</div>
										</div>
									</div>
								</section>

						</div>
					</div>
					
					
					
				</div>
			</div>
