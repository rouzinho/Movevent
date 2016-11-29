<div class="carpools form">
<?php echo $this->Form->create('Carpool'); ?>
	<fieldset>
		<legend><?php echo __('Add Carpool'); ?></legend>
	<?php
		echo $this->Form->input('event_id');
		echo $this->Form->input('user_id');
		echo $this->Form->input('departure_town');
		echo $this->Form->input('arrival_town');
		echo $this->Form->input('date');
		echo $this->Form->input('price');
		echo $this->Form->input('num_place');
		echo $this->Form->input('description');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Carpools'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Events'), array('controller' => 'events', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Event'), array('controller' => 'events', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Users'), array('controller' => 'users', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User'), array('controller' => 'users', 'action' => 'add')); ?> </li>
	</ul>
</div>
