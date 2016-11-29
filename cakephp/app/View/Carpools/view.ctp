<div class="carpools view">
<h2><?php echo __('Carpool'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($carpool['Carpool']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Event'); ?></dt>
		<dd>
			<?php echo $this->Html->link($carpool['Event']['name'], array('controller' => 'events', 'action' => 'view', $carpool['Event']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('User'); ?></dt>
		<dd>
			<?php echo $this->Html->link($carpool['User']['id'], array('controller' => 'users', 'action' => 'view', $carpool['User']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Departure Town'); ?></dt>
		<dd>
			<?php echo h($carpool['Carpool']['departure_town']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Arrival Town'); ?></dt>
		<dd>
			<?php echo h($carpool['Carpool']['arrival_town']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Date'); ?></dt>
		<dd>
			<?php echo h($carpool['Carpool']['date']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Price'); ?></dt>
		<dd>
			<?php echo h($carpool['Carpool']['price']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Num Place'); ?></dt>
		<dd>
			<?php echo h($carpool['Carpool']['num_place']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Description'); ?></dt>
		<dd>
			<?php echo h($carpool['Carpool']['description']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Carpool'), array('action' => 'edit', $carpool['Carpool']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Carpool'), array('action' => 'delete', $carpool['Carpool']['id']), array(), __('Are you sure you want to delete # %s?', $carpool['Carpool']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Carpools'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Carpool'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Events'), array('controller' => 'events', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Event'), array('controller' => 'events', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Users'), array('controller' => 'users', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User'), array('controller' => 'users', 'action' => 'add')); ?> </li>
	</ul>
</div>
