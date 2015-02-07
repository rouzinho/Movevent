<div class="users form">
<?php echo $this->Form->create('User'); ?>
	<fieldset>
		<legend><?php echo __('Edit User'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('login');
		echo $this->Form->input('password');
		echo $this->Form->input('information_user_id');
		echo $this->Form->input('service_user_id');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('User.id')), array(), __('Are you sure you want to delete # %s?', $this->Form->value('User.id'))); ?></li>
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
