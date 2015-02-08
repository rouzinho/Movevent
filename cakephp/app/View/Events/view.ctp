<div class="events view">
<h2><?php echo __('Event'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($event['Event']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Name'); ?></dt>
		<dd>
			<?php echo h($event['Event']['name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Theme'); ?></dt>
		<dd>
			<?php echo h($event['Event']['theme']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Place'); ?></dt>
		<dd>
			<?php echo h($event['Event']['place']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('City'); ?></dt>
		<dd>
			<?php echo h($event['Event']['city']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Start Time'); ?></dt>
		<dd>
			<?php echo h($event['Event']['start_time']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('End Time'); ?></dt>
		<dd>
			<?php echo h($event['Event']['end_time']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Description'); ?></dt>
		<dd>
			<?php echo h($event['Event']['description']); ?>
			&nbsp;
		</dd>
	</dl>
</div>

<!--

<div class="related">
	<h3><?php echo __('Related Carpools'); ?></h3>
	<?php if (!empty($event['Carpool'])): ?>
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
	<?php foreach ($event['Carpool'] as $carpool): ?>
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
	<?php if (!empty($event['Couchsurfing'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('User Id'); ?></th>
		<th><?php echo __('Event Id'); ?></th>
		<th><?php echo __('Date'); ?></th>
		<th><?php echo __('Num Place'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($event['Couchsurfing'] as $couchsurfing): ?>
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
-->