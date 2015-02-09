
<div class="row">
	<div class="9u important(collapse)">
		<div class="content content-left">
		
			<!-- Content -->
	
				<article class="box page-content">

					<div class="users view">

						<article class="box page-content">

										<header>
										<img  src="../../app/webroot/images/profil.jpg" alt="profil" style="width:100px; height:100px; float:right;" />
											<h2><?php echo h($user['User']['login']); ?>&nbsp;</h2>
											<h3><?php echo h($user['User']['age']); ?>&nbsp;ans</h3>
											<h3><?php echo h($user['User']['city']); ?>&nbsp;</h3>
											<?php
												$tab = explode(",", $user['User']['interest']);
												echo "<h3>";
												foreach($tab as $hobbie){
													echo "$hobbie ";
												}
												echo "</h3>";
											?>
										</header>

									
										<h2 class="major"><span></span></h2>
										<section>
											<h3 style="font-size:30px">Covoiturage </h3>
											<?php
												if( $user['User']['carpool'] == 1){
													echo "<h1>Marque :          ".h($user['User']['car'])."</h1>";
													echo "<h1>Modèle  :          ".h($user['User']['model'])."</h1>";
													echo "<h1>Catégorie  :         ".h($user['User']['type'])."</h1>";
													if( $user['User']['animal'] == 1){
														
													}else{
													
													}
													if($user['User']['carpool'] == 1){
													
													}else{
													
													}
												}else{
													echo "<h1>Aucun covoiturage</h1>";
												}
											
											?>
											
											<?php
												if($user['User']['num_place'] > 0){
													echo "<h1 class='icon fa-child'  style='font-size:30px; text-align:left;' > ".h($user['User']['num_place'])." places</h1>";
												}
											?>
											<?php
												if($user['User']['smoker'] == 1){
													echo "<h1 class='fa fa-soundcloud'  style='font-size:30px; text-align:left;' >&nbsp;</h1>";
												}
											?>	
											<?php
													if($user['User']['animal'] == 1){
														echo "<h1 class='fa fa-github-alt'  style='font-size:30px; text-align:left;' >&nbsp;</h1>";
													}
											?>
											<?php
													if($user['User']['baggage'] == 1){
														echo "<h1 class='fa fa-suitcase'  style='font-size:30px; text-align:left;' >&nbsp;</h1>";
													}
											?>
										</section>
										<h2 class="major"><span></span></h2>
										<section>
											<h3 style="font-size:30px">Couchsurfing</h3>
											<?php 
												if($user['User']['lodge'] == 1){
													echo "<h1 class='icon fa-bed'   >  Loge des personnes</h1>";
												}else{
														 echo "<h1> Ne loge aucune personnes</h1>";
												}
											?>
											<p rowspan="4"><?php echo h($user['User']['description']); ?>&nbsp;</p>
										</section>

									</article>
							<h2 class="major"><span> </span></h2>
						</table>
					</div>
				</article>

		</div>
	</div>
	<div class="3u">
		<div class="sidebar">
		
			<!-- Sidebar -->
		
				<!-- Recent Posts -->
					<section>
						<h2 ><span>Dernières notifications</span></h2> <br>
						<ul class="divided">
							<li>
								<article class="box post-summary">
									<h3><a href="#">Covoiturage accepté</a></h3>
									<ul class="meta">
										<li class="icon fa-clock-o">Il y a 6 heures</li>
										<li class="icon fa-comments"><a href="#">1 message</a></li>
									</ul>
								</article>
							</li>
							<li>
								<article class="box post-summary">
									<h3><a href="#">Covoiturage refusé</a></h3>
									<ul class="meta">
										<li class="icon fa-clock-o">Hier</li>
										<li class="icon fa-comments"><a href="#">1 message</a></li>
									</ul>
								</article>
							</li>
						</ul>
						<a href="#" class="button alt">Historique</a>
					</section>

				<!-- Something -->
					<section>
						<h3 class="major"><span>évènement proposé</span></h3>
						<a href="#" class="image featured"><img src="images/pic03.jpg" alt="" /></a>
						<p>
						<h1><a href="#">NUITS SONORES 2015</a></h1>
							Festival-Electro <br>
							Rhône-Alpes<br>
							Du 13/05/2015 au  17/05/2015
						</p>
						<a href="#" class="button alt">En savoir plus</a>
						
					</section>


		</div>
	</div>
</div>






<!--
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit User'), array('action' => 'edit', $user['User']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete User'), array('action' => 'delete', $user['User']['id']), array(), __('Are you sure you want to delete # %s?', $user['User']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Users'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User'), array('action' => 'atr')); ?> </li>
	</ul>
</div>
-->
