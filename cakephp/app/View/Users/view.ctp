
<div class="row">
	<div class="9u important(collapse)">
		<div class="content content-left">
		
			<!-- Content -->
	
				<article class="box page-content">

					<div class="users view">

						<table border="1">
							<tr>
								<td>
									<h2><?php echo h($user['User']['login']); ?>&nbsp;</h2>
								</td>
								<td rowspan="3"><img src="../../app/webroot/images/profil.jpg" alt="profil" style="width:64px; height:64px;" /> </td>
								<td>
								</td>
								<td>
									<h1><?php echo h($user['User']['car']); ?>&nbsp;</h1>
									
								</td>
								<td>
									<h1><?php echo h($user['User']['model']); ?>&nbsp;</h1>
								</td>
							</tr>
							<tr>
								<td>
									<h2><?php echo h($user['User']['age']); ?>&nbsp;ans</h2>
								</td>
								<td>
								</td>
								<td>
									<h1><?php echo h($user['User']['type']); ?>&nbsp;</h1>
								</td>
								<td>
									<?php
										if($user['User']['num_place'] > 0){
											echo "<h1 class='icon fa-child'  style='font-size:20px; text-align:left;' > ".h($user['User']['num_place'])." places</h1>";
										}
									?>
								
									</li>
								</td>
							</tr>
							<tr>
								<td>
									<h2><?php echo h($user['User']['city']); ?>&nbsp;</h2>
								</td>
								<td>
								</td>
								<td>
									<?php
										if($user['User']['smoker'] == 1){
											echo "<h1 class='fa fa-soundcloud'  style='font-size:20px; text-align:left;' >&nbsp;</h1>";
										}
									?>			
								</td>
								<td>
									<?php
										if($user['User']['animal'] == 1){
											echo "<h1 class='fa fa-github-alt'  style='font-size:20px; text-align:left;' >&nbsp;</h1>";
										}
									?>
									
								</td>
							</tr>
							<tr>
								<td>
									<?php 
										if($user['User']['lodge'] == 1){
											echo "<h1 class='icon fa-bed'  style='font-size:30px; text-align:left;' ></h1>";
										}
									?>
								</td>
								<td>
								</td>
								<td>
								</td>
								<td>
								</td>
								<td>
									
								</td>
							</tr>
							<tr>
								<td rowspan="4"><?php echo h($user['User']['description']); ?>&nbsp;
								</td>
							</tr>

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
									<h3><a href="#">A Subheading</a></h3>
									<ul class="meta">
										<li class="icon fa-clock-o">6 hours ago</li>
										<li class="icon fa-comments"><a href="#">34</a></li>
									</ul>
								</article>
							</li>
							<li>
								<article class="box post-summary">
									<h3><a href="#">Another Subheading</a></h3>
									<ul class="meta">
										<li class="icon fa-clock-o">9 hours ago</li>
										<li class="icon fa-comments"><a href="#">27</a></li>
									</ul>
								</article>
							</li>
							<li>
								<article class="box post-summary">
									<h3><a href="#">And Another</a></h3>
									<ul class="meta">
										<li class="icon fa-clock-o">Yesterday</li>
										<li class="icon fa-comments"><a href="#">184</a></li>
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
							Donec sagittis massa et leo semper scele risque metus faucibus. Morbi congue mattis mi. 
							Phasellus sed nisl vitae risus tristique volutpat. Cras rutrum sed commodo luctus blandit.
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
