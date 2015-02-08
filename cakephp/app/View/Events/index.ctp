<div class="events index">
	<table cellpadding="0" cellspacing="0">
	<tbody>
	<?php foreach ($events as $event): ?>
	<tr>
		<td><?php echo h($event['Event']['id']); ?>&nbsp;</td>
		<td><?php echo h($event['Event']['name']); ?>&nbsp;</td>
		<td><?php echo h($event['Event']['theme']); ?>&nbsp;</td>
		<td><?php echo h($event['Event']['place']); ?>&nbsp;</td>
		<td><?php echo h($event['Event']['city']); ?>&nbsp;</td>
		<td><?php echo h($event['Event']['start_time']); ?>&nbsp;</td>
		<td><?php echo h($event['Event']['end_time']); ?>&nbsp;</td>
		<td><?php echo h($event['Event']['description']); ?>&nbsp;</td>
	</tr>
<?php endforeach; ?>
	</tbody>
	</table>
</div>

