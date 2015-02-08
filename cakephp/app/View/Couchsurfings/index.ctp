
<div class="couchsurfings index">
	<h2><?php echo __('Liste des Couchsurfings'); ?></h2>
	
	<?php foreach ($couchsurfings as $couchsurfing): ?>
		<section>
			<ul class="meta" style="font-size:30px;">
				<li> <?php echo $this->Html->link($couchsurfing['Event']['name'], array('controller' => 'events', 'action' => 'view', $couchsurfing['Event']['id'])); ?> </li>                  
				<li> <?php echo $this->Html->link($couchsurfing['User']['login'], array('controller' => 'users', 'action' => 'view', $couchsurfing['User']['id'])); ?> </li>
				
				<li class="icon fa-clock-o" style="font-size:20px;"  align="rigth"  > <td><?php echo h($couchsurfing['Couchsurfing']['date']); ?>&nbsp;</li>						 
				<li class="icon fa-child"  style="font-size:20px; text-align:center;" >   <?php echo h($couchsurfing['Couchsurfing']['num_place']); ?>&nbsp; places</li> 
				<?php ?>
			</ul>
		</section>>
<?php endforeach; ?>
	
	
	
	<!--</tbody>
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
		<li><?php echo $this->Html->link(__('New Couchsurfing'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Users'), array('controller' => 'users', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User'), array('controller' => 'users', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Events'), array('controller' => 'events', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Event'), array('controller' => 'events', 'action' => 'add')); ?> </li>
	</ul>
</div>
-->
