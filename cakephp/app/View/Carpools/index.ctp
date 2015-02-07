<div class="carpools index">
	<h2><?php echo __('Carpools'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<thead>
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('event_id'); ?></th>
			<th><?php echo $this->Paginator->sort('user_id'); ?></th>
			<th><?php echo $this->Paginator->sort('departure_town'); ?></th>
			<th><?php echo $this->Paginator->sort('arrival_town'); ?></th>
			<th><?php echo $this->Paginator->sort('date'); ?></th>
			<th><?php echo $this->Paginator->sort('price'); ?></th>
			<th><?php echo $this->Paginator->sort('num_place'); ?></th>
			<th><?php echo $this->Paginator->sort('description'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	</thead>
	<tbody>
	<?php foreach ($carpools as $carpool): ?>
	<tr>
		<td><?php echo h($carpool['Carpool']['id']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($carpool['Event']['name'], array('controller' => 'events', 'action' => 'view', $carpool['Event']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($carpool['User']['id'], array('controller' => 'users', 'action' => 'view', $carpool['User']['id'])); ?>
		</td>
		<td><?php echo h($carpool['Carpool']['departure_town']); ?>&nbsp;</td>
		<td><?php echo h($carpool['Carpool']['arrival_town']); ?>&nbsp;</td>
		<td><?php echo h($carpool['Carpool']['date']); ?>&nbsp;</td>
		<td><?php echo h($carpool['Carpool']['price']); ?>&nbsp;</td>
		<td><?php echo h($carpool['Carpool']['num_place']); ?>&nbsp;</td>
		<td><?php echo h($carpool['Carpool']['description']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $carpool['Carpool']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $carpool['Carpool']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $carpool['Carpool']['id']), array(), __('Are you sure you want to delete # %s?', $carpool['Carpool']['id'])); ?>
		</td>
	</tr>
<?php endforeach; ?>
	</tbody>
	</table>
	<p>
	<?php
	echo $this->Paginator->counter(array(
	'format' => __('Page {:page} of {:pages}, showing {:current} records out of {:count} total, starting on record {:start}, ending on {:end}')
	));
	?>	</p>
	<div class="paging">
	<?php
		echo $this->Paginator->prev('< ' . __('previous'), array(), null, array('class' => 'prev disabled'));
		echo $this->Paginator->numbers(array('separator' => ''));
		echo $this->Paginator->next(__('next') . ' >', array(), null, array('class' => 'next disabled'));
	?>
	</div>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('New Carpool'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Events'), array('controller' => 'events', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Event'), array('controller' => 'events', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Users'), array('controller' => 'users', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User'), array('controller' => 'users', 'action' => 'add')); ?> </li>
	</ul>
</div>
