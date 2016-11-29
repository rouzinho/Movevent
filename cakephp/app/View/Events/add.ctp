<div class="events form">

<h2 class="major"><span>Créer un événement</span></h2>
<?php echo $this->Form->create('Event'); ?>
	<fieldset>
		
	<?php
		echo $this->Form->input('name');
		echo $this->Form->input('theme');
		echo $this->Form->input('place');
		echo $this->Form->input('city');
		echo $this->Form->input('start_time');
		echo $this->Form->input('end_time');
		echo $this->Form->input('description');
	?>
	</fieldset>
	<br> <center >
<?php echo $this->Form->end(__('Submit')); ?></center>
</div>
<!--
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Events'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Carpools'), array('controller' => 'carpools', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Carpool'), array('controller' => 'carpools', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Couchsurfings'), array('controller' => 'couchsurfings', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Couchsurfing'), array('controller' => 'couchsurfings', 'action' => 'add')); ?> </li>
	</ul>
</div>
-->