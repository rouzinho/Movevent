<div class="couchsurfings form">
<?php echo $this->Form->create('Couchsurfing'); ?>
	<fieldset>
		<legend><?php echo __('Add Couchsurfing'); ?></legend>
	<?php
		echo $this->Form->input('user_id');
		echo $this->Form->input('event_id');
		echo $this->Form->input('date');
		echo $this->Form->input('num_place');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Couchsurfings'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Users'), array('controller' => 'users', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User'), array('controller' => 'users', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Events'), array('controller' => 'events', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Event'), array('controller' => 'events', 'action' => 'add')); ?> </li>
	</ul>
</div>
