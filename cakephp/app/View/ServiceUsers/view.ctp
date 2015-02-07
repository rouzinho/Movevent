<div class="serviceUsers view">
<h2><?php echo __('Service User'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($serviceUser['ServiceUser']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Carpool'); ?></dt>
		<dd>
			<?php echo h($serviceUser['ServiceUser']['carpool']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Car'); ?></dt>
		<dd>
			<?php echo h($serviceUser['ServiceUser']['car']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Model'); ?></dt>
		<dd>
			<?php echo h($serviceUser['ServiceUser']['model']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Type'); ?></dt>
		<dd>
			<?php echo h($serviceUser['ServiceUser']['type']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Num Place'); ?></dt>
		<dd>
			<?php echo h($serviceUser['ServiceUser']['num_place']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Smoker'); ?></dt>
		<dd>
			<?php echo h($serviceUser['ServiceUser']['smoker']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Animal'); ?></dt>
		<dd>
			<?php echo h($serviceUser['ServiceUser']['animal']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Baggage'); ?></dt>
		<dd>
			<?php echo h($serviceUser['ServiceUser']['baggage']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Lodge'); ?></dt>
		<dd>
			<?php echo h($serviceUser['ServiceUser']['lodge']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Interest'); ?></dt>
		<dd>
			<?php echo h($serviceUser['ServiceUser']['interest']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Description'); ?></dt>
		<dd>
			<?php echo h($serviceUser['ServiceUser']['description']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Service User'), array('action' => 'edit', $serviceUser['ServiceUser']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Service User'), array('action' => 'delete', $serviceUser['ServiceUser']['id']), array(), __('Are you sure you want to delete # %s?', $serviceUser['ServiceUser']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Service Users'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Service User'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Users'), array('controller' => 'users', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User'), array('controller' => 'users', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Users'); ?></h3>
	<?php if (!empty($serviceUser['User'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Login'); ?></th>
		<th><?php echo __('Password'); ?></th>
		<th><?php echo __('Information User Id'); ?></th>
		<th><?php echo __('Service User Id'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($serviceUser['User'] as $user): ?>
		<tr>
			<td><?php echo $user['id']; ?></td>
			<td><?php echo $user['login']; ?></td>
			<td><?php echo $user['password']; ?></td>
			<td><?php echo $user['information_user_id']; ?></td>
			<td><?php echo $user['service_user_id']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'users', 'action' => 'view', $user['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'users', 'action' => 'edit', $user['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'users', 'action' => 'delete', $user['id']), array(), __('Are you sure you want to delete # %s?', $user['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New User'), array('controller' => 'users', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
