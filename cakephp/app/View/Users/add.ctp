rhfgfgfhhgfhg<div class="users form">
<?php echo $this->Form->create('User'); ?>
	<fieldset>
		<legend><?php echo __('Add User'); ?></legend>
	<?php
		echo $this->Form->input('login');
		echo $this->Form->input('password');
		echo $this->Form->input('information_user_id');
		echo $this->Form->input('service_user_id');
	?>
	</fieldset>
<article class="box page-content">

										<header>
											<h2>Inscription</h2>
											 <p>Pas encore membre ? Inscrivez-vous gratuitement </p>
										</header>
										<ul >
			
										<li >
										<span>
										<label>Prénom</label>
											<input id="prenom" name= "prenom" class="element text" maxlength="255" size="8" value=""/>
										</span>
										<span>
											<label>Nom</label>
											<input id="nom" name= "nom" class="element text" maxlength="255" size="14" value=""/>
										</span> 
										</li>		
										<li >
										<label class="description" for="element_1">Pseudo  </label>
										<div>
			
												<?php
		echo $this->Form->input('login',array('class'=>'element text medium"'));
	?>
										</div> 
										</li>	
										<li >
										<label class="description" for="element_2">Mot de passe </label>
										<div>
											<input id="mdp" name="mdp" class="element text medium" type="text" maxlength="255" value=""/> 
										</div> 
										</li>		<li >
										<label class="description" for="element_3">Email </label>
										<div>
											<input id="email" name="email" class="element text medium" type="text" maxlength="255" value=""/> 
										</div> 
										</li>		<li >
										<label class="description" for="element_4">Age </label>
										<div>
											<input id="age" name="age" class="element text medium" type="text" maxlength="255" value=""/> 
										</div> 
										</li>		<li  >
										<label class="description" for="element_5">Numero </label>
										<div>
											<input id="numTel" name="numTel" class="element text medium" type="text" maxlength="255" value=""/> 
										</div> 
										</ul>
									
									
									

									</article>	
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Users'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Information Users'), array('controller' => 'information_users', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Information User'), array('controller' => 'information_users', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Service Users'), array('controller' => 'service_users', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Service User'), array('controller' => 'service_users', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Carpools'), array('controller' => 'carpools', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Carpool'), array('controller' => 'carpools', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Couchsurfings'), array('controller' => 'couchsurfings', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Couchsurfing'), array('controller' => 'couchsurfings', 'action' => 'add')); ?> </li>
	</ul>
</div>
