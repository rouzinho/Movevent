<div class="users form">
<?php echo $this->Form->create('User'); ?>
	<fieldset>
		<legend><?php echo __('Edit User'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('login');
		echo $this->Form->input('password');
		echo $this->Form->input('first_name');
		echo $this->Form->input('last_name');
		echo $this->Form->input('age');
		echo $this->Form->input('mail');
		echo $this->Form->input('adress');
		echo $this->Form->input('city');
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

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('User.id')), array(), __('Are you sure you want to delete # %s?', $this->Form->value('User.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Users'), array('action' => 'index')); ?></li>
	</ul>
</div>
