

<div class="row">
				<div class="9u important(collapse)">
							<div class="content content-left">
<!-- Content -->
						
									<article class="box page-content">

										<header>
											<h2><?php echo h($event['Event']['name']); ?></h2>

										</header>

										<section>
											<span class="image featured"><img src="images/pic05.jpg" alt="" /></span>
											<p>
												<?php echo h($event['Event']['description']); ?>
											</p>
										</section>
										<center><a href="#" class="button big">Participer à l'évènement</a>  </center>
									</article>

									
										<!-- Features -->
								<section class="box features">
									<h2 class="major"><span>Covoiturage & Couchsurfing</span></h2>
									<div>
										<div class="row">
											<div class="6u">
												
												<!-- Feature -->
													<section class="box feature">
														<h3><a href="#">Covoiturage</a></h3>
														<div id="gmap-route"    style=" height: 300px; width: 100%; "></div>  
														<h2>Route <strong id="km"></strong></h2>
														<br>
														<p style=" border-width:2px;  border-style:solid;  border-color:#ff707d;  -moz-border-radius:7px;-webkit-border-radius:7px; border-radius:7px;">
															 liste Covoiturage
														</p>
													</section>
										
											</div>
											<div class="6u">
												
												<!-- Feature -->
													<section class="box feature">
													<h3><a href="#">Couchsurfing</a></h3>
														<div id="gmap-circles"      style=" height: 300px; width: 100%; "   ></div>
														<h2></h2>
														<br>
														<br>
														<p style=" border-width:2px;  border-style:solid;  border-color:#ff707d;  -moz-border-radius:7px;-webkit-border-radius:7px; border-radius:7px;">
															 liste Couchsurfing
														</p>
													</section>
											</div>
										</div>
										<div class="row">
											<div class="12u">
												<ul class="actions">
													<li><a href="#" class="button ">Proposer un <br>covoiturage</a></li>
													<li><a href="#" class="button alt ">Alerte<br> covoiturage</a></li>
													<li><a href="#" class="button ">Proposer un <br>couchsurfing</a></li>
													<li><a href="#" class="button alt ">Alerte <br>couchsurfing</a></li>
												</ul>
											</div>
										</div>
									</div>
								</section>
										<script type="text/javascript">
										var LocsC = [
														{
															lat: 45.80,
															lon: 4.87,
															title: 'Couchsurfer A',
															html: ' couchsurfer A',
															icon: 'http://maps.google.com/mapfiles/markerA.png',
															show_infowindow: false
														},
														{
														lat: 45.74,
														lon: 4.90,
														title: 'Couchsurfer B',
														html: 'Couchsurfer B',
														icon: 'http://maps.google.com/mapfiles/markerB.png',
														show_infowindow: false
														},
														{
														lat: 45.75,
														lon: 4.85,
														title: 'Couchsurfer C',
														html: 'Couchsurfer C',
														icon: 'http://maps.google.com/mapfiles/markerC.png',
														show_infowindow: false
														}

														];
																var LocsD = [
														{
																lat: 48.58,
																lon: 7.75,
																title: 'Marché de Noel de Strasbourg',
																html: 'Différents marché de Noel dans toute la ville de Strasbourg au mois de décembre',
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
														}

														];
																	$(function() {
																	
																			new Maplace({
																					locations: LocsC,
																					map_div: '#gmap-circles',
																					start: 4,
																					view_all_text: 'Points of interest',
																					type: 'circle',
																					shared: {
																						zoom: 16,
																						html: '%index'
																					},
																					circleRadiusChanged: function(index, point, marker) {
																					  $('#radiusInfo').text(
																						' - point #' + (index+1) + ' size: ' + parseInt(marker.getRadius()) + 'mt.'
																					  );
																					}
																				}).Load();
																			
																			
																			new Maplace({
																			locations: LocsD,
																			map_div: '#gmap-route',
																			generate_controls: false,
																			show_markers: false,
																			type: 'directions',
																			draggable: true,
																			directions_panel: '#route',
																			afterRoute: function(distance) {
																				$('#km').text(': '+(distance/1000)+'km');
																			}
																		}).Load(); 
																	});
													</script>

		</div>
	</div>


						<div class="3u">
							<div class="sidebar">
							
								<!-- Sidebar -->
							
									<!-- Recent Posts -->
										<section>
											<h2 ><span>Information</span></h2> <br>
											<ul class="divided">
												<li>
													<article class="box post-summary">
														<h3><a href="#">Lieux : </a></h3>
														<ul class="meta">
															<li class="icon fa-clock-o"><?php echo h($event['Event']['city']); ?></li>
														</ul>
													</article>
												</li>
												<li>
													<article class="box post-summary">
														<h3><a href="#">Type :</a></h3>
														<ul class="meta">
															<li class="icon fa-clock-o"><?php echo h($event['Event']['theme']); ?></li>
														</ul>
													</article>
												</li>
												<li>
													<article class="box post-summary">
														<h3><a href="#">Date :</a></h3>
														<ul class="meta">
															<li class="icon fa-clock-o"><?php echo h($event['Event']['start_time']); ?></li>
															<li class="icon fa-clock-o"><?php echo h($event['Event']['end_time']); ?></li>
														</ul>
													</article>
												</li>
											</ul>

										</section>
							</div>
						</div>




<!--
<div class="events view">
<h2><?php echo __('Event'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($event['Event']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Name'); ?></dt>
		<dd>
			<?php echo h($event['Event']['name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Theme'); ?></dt>
		<dd>
			<?php echo h($event['Event']['theme']); ?><?php echo h($event['Event']['theme']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Place'); ?></dt>
		<dd>
			<?php echo h($event['Event']['place']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('City'); ?></dt>
		<dd>
			<?php echo h($event['Event']['city']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Start Time'); ?></dt>
		<dd>
			<?php echo h($event['Event']['start_time']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('End Time'); ?></dt>
		<dd>
			<?php echo h($event['Event']['end_time']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Description'); ?></dt>
		<dd>
			<?php echo h($event['Event']['description']); ?>
			&nbsp;
		</dd>
	</dl>
</div>

	


<!--
<div class="related">
	<h3><?php echo __('Related Carpools'); ?></h3>
	<?php if (!empty($event['Carpool'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Event Id'); ?></th>
		<th><?php echo __('User Id'); ?></th>
		<th><?php echo __('Departure Town'); ?></th>
		<th><?php echo __('Arrival Town'); ?></th>
		<th><?php echo __('Date'); ?></th>
		<th><?php echo __('Price'); ?></th>
		<th><?php echo __('Num Place'); ?></th>
		<th><?php echo __('Description'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($event['Carpool'] as $carpool): ?>
		<tr>
			<td><?php echo $carpool['id']; ?></td>
			<td><?php echo $carpool['event_id']; ?></td>
			<td><?php echo $carpool['user_id']; ?></td>
			<td><?php echo $carpool['departure_town']; ?></td>
			<td><?php echo $carpool['arrival_town']; ?></td>
			<td><?php echo $carpool['date']; ?></td>
			<td><?php echo $carpool['price']; ?></td>
			<td><?php echo $carpool['num_place']; ?></td>
			<td><?php echo $carpool['description']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'carpools', 'action' => 'view', $carpool['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'carpools', 'action' => 'edit', $carpool['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'carpools', 'action' => 'delete', $carpool['id']), array(), __('Are you sure you want to delete # %s?', $carpool['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Carpool'), array('controller' => 'carpools', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php echo __('Related Couchsurfings'); ?></h3>
	<?php if (!empty($event['Couchsurfing'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('User Id'); ?></th>
		<th><?php echo __('Event Id'); ?></th>
		<th><?php echo __('Date'); ?></th>
		<th><?php echo __('Num Place'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($event['Couchsurfing'] as $couchsurfing): ?>
		<tr>
			<td><?php echo $couchsurfing['id']; ?></td>
			<td><?php echo $couchsurfing['user_id']; ?></td>
			<td><?php echo $couchsurfing['event_id']; ?></td>
			<td><?php echo $couchsurfing['date']; ?></td>
			<td><?php echo $couchsurfing['num_place']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'couchsurfings', 'action' => 'view', $couchsurfing['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'couchsurfings', 'action' => 'edit', $couchsurfing['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'couchsurfings', 'action' => 'delete', $couchsurfing['id']), array(), __('Are you sure you want to delete # %s?', $couchsurfing['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Couchsurfing'), array('controller' => 'couchsurfings', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
-->