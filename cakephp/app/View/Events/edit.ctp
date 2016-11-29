<div class="events form">
<?php echo $this->Form->create('Event'); ?>
	<fieldset>
		<legend><?php echo __('Edit Event'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('name');
		echo $this->Form->input('theme');
		echo $this->Form->input('place');
		echo $this->Form->input('city');
		echo $this->Form->input('start_time');
		echo $this->Form->input('end_time');
		echo $this->Form->input('description');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Event.id')), array(), __('Are you sure you want to delete # %s?', $this->Form->value('Event.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Events'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Carpools'), array('controller' => 'carpools', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Carpool'), array('controller' => 'carpools', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Couchsurfings'), array('controller' => 'couchsurfings', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Couchsurfing'), array('controller' => 'couchsurfings', 'action' => 'add')); ?> </li>
	</ul>
</div>
