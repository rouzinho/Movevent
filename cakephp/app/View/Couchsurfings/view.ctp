<?php print_r($couchsurfing); ?>
<div class="couchsurfings view">
<h2><?php echo __('Couchsurfing'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($couchsurfing['Couchsurfing']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('User'); ?></dt>
		<dd>
			<?php echo $this->Html->link($couchsurfing['User']['id'], array('controller' => 'users', 'action' => 'view', $couchsurfing['User']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Event'); ?></dt>
		<dd>
			<?php echo $this->Html->link($couchsurfing['Event']['name'], array('controller' => 'events', 'action' => 'view', $couchsurfing['Event']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Date'); ?></dt>
		<dd>
			<?php echo h($couchsurfing['Couchsurfing']['date']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Num Place'); ?></dt>
		<dd>
			<?php echo h($couchsurfing['Couchsurfing']['num_place']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Couchsurfing'), array('action' => 'edit', $couchsurfing['Couchsurfing']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Couchsurfing'), array('action' => 'delete', $couchsurfing['Couchsurfing']['id']), array(), __('Are you sure you want to delete # %s?', $couchsurfing['Couchsurfing']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Couchsurfings'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Couchsurfing'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Users'), array('controller' => 'users', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User'), array('controller' => 'users', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Events'), array('controller' => 'events', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Event'), array('controller' => 'events', 'action' => 'add')); ?> </li>
	</ul>
</div>
