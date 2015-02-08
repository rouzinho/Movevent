<div class="events index">
	<table cellpadding="0" cellspacing="0">
	<tbody>
		<header>
			<h2>Résultat de la recherche</h2>
		</header>
	<?php foreach ($events as $event): ?>
	
		<section>
			<ul class="meta" style="font-size:30px;">
				<li> <?php    echo $this->Html->link(__($event['Event']['name']), array('controller' => 'users', 'action' => 'view'));  ?> </li>                  
				<li><?php echo h($event['Event']['theme']); ?> </li>
				<li class="icon fa-clock-o" style="font-size:20px;"  align="rigth"  > <?php echo h($event['Event']['start_time']); ?>  -- --  <?php echo h($event['Event']['end_time']); ?>
				</li>						 
				<li class="icon fa-university"  style="font-size:20px; text-align:center;" >   <?php echo h($event['Event']['city']); ?> </li> 
				
				
				
				<?php ?>
			</ul>
		</section>
	
<?php endforeach; ?>
	</tbody>
	</table>
</div>

