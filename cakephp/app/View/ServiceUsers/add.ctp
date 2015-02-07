<div class="serviceUsers form">
<?php echo $this->Form->create('ServiceUser'); ?>
	<fieldset>
		<legend><?php echo __('Add Service User'); ?></legend>
	<?php
		echo $this->Form->input('carpool');
		echo $this->Form->input('car');
		echo $this->Form->input('model');
		echo $this->Form->input('type');
		echo $this->Form->input('num_place');
		echo $this->Form->input('smoker');
		echo $this->Form->input('animal');
		echo $this->Form->input('baggage');
		echo $this->Form->input('lodge');
		echo $this->Form->input('interest');
		echo $this->Form->input('description');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Service Users'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Users'), array('controller' => 'users', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User'), array('controller' => 'users', 'action' => 'add')); ?> </li>
	</ul>
</div>
