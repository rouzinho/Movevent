<div class="users view">
<h2><?php echo __('User'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($user['User']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Login'); ?></dt>
		<dd>
			<?php echo h($user['User']['login']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Password'); ?></dt>
		<dd>
			<?php echo h($user['User']['password']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Information User'); ?></dt>
		<dd>
			<?php echo $this->Html->link($user['InformationUser']['id'], array('controller' => 'information_users', 'action' => 'view', $user['InformationUser']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Service User'); ?></dt>
		<dd>
			<?php echo $this->Html->link($user['ServiceUser']['id'], array('controller' => 'service_users', 'action' => 'view', $user['ServiceUser']['id'])); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit User'), array('action' => 'edit', $user['User']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete User'), array('action' => 'delete', $user['User']['id']), array(), __('Are you sure you want to delete # %s?', $user['User']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Users'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User'), array('action' => 'add')); ?> </li>
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
<div class="related">
	<h3><?php echo __('Related Carpools'); ?></h3>
	<?php if (!empty($user['Carpool'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Event Id'); ?></th>
		<th><?php echo __('User Id'); ?></th>
		<th><?php echo __('Departure Town'); ?></th>
		<th><?php echo __('Arrival Town'); ?></th>
		<th><?php echo __('Date'); ?></th>
		<th><?php echo __('Price'); ?></th>
		<th><?php echo __('Num Place'); ?></th>
		<th><?php echo __('Description'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($user['Carpool'] as $carpool): ?>
		<tr>
			<td><?php echo $carpool['id']; ?></td>
			<td><?php echo $carpool['event_id']; ?></td>
			<td><?php echo $carpool['user_id']; ?></td>
			<td><?php echo $carpool['departure_town']; ?></td>
			<td><?php echo $carpool['arrival_town']; ?></td>
			<td><?php echo $carpool['date']; ?></td>
			<td><?php echo $carpool['price']; ?></td>
			<td><?php echo $carpool['num_place']; ?></td>
			<td><?php echo $carpool['description']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'carpools', 'action' => 'view', $carpool['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'carpools', 'action' => 'edit', $carpool['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'carpools', 'action' => 'delete', $carpool['id']), array(), __('Are you sure you want to delete # %s?', $carpool['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Carpool'), array('controller' => 'carpools', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php echo __('Related Couchsurfings'); ?></h3>
	<?php if (!empty($user['Couchsurfing'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('User Id'); ?></th>
		<th><?php echo __('Event Id'); ?></th>
		<th><?php echo __('Date'); ?></th>
		<th><?php echo __('Num Place'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($user['Couchsurfing'] as $couchsurfing): ?>
		<tr>
			<td><?php echo $couchsurfing['id']; ?></td>
			<td><?php echo $couchsurfing['user_id']; ?></td>
			<td><?php echo $couchsurfing['event_id']; ?></td>
			<td><?php echo $couchsurfing['date']; ?></td>
			<td><?php echo $couchsurfing['num_place']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'couchsurfings', 'action' => 'view', $couchsurfing['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'couchsurfings', 'action' => 'edit', $couchsurfing['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'couchsurfings', 'action' => 'delete', $couchsurfing['id']), array(), __('Are you sure you want to delete # %s?', $couchsurfing['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Couchsurfing'), array('controller' => 'couchsurfings', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
