
<div class="carpools index">
	<h2><?php echo __('Liste des covoiturages'); ?></h2>
	
	<?php foreach ($carpools as $carpool): ?>
		<section>
			<ul class="meta" style="font-size:30px;">
				<li> <?php echo $this->Html->link($carpool['Event']['name'], array('controller' => 'events', 'action' => 'view', $carpool['Event']['id'])); ?> </li>                  
				<li> <?php echo $this->Html->link($carpool['User']['login'], array('controller' => 'users', 'action' => 'view', $carpool['User']['id'])); ?> </li>
				
				
				<li><?php echo h($carpool['Carpool']['departure_town']); ?>&nbsp; --> 
				<?php echo h($carpool['Carpool']['arrival_town']); ?>&nbsp;</li>
				
				<li class="icon fa-clock-o" style="font-size:20px;"  align="rigth"  > <td><?php echo h($carpool['Carpool']['date']); ?>&nbsp;</li>	
				<li class="icon fa-eur"  style="font-size:20px; text-align:center;" ><?php echo h($carpool['Carpool']['price']); ?>&nbsp;</li>
					
				<li class="icon fa-child"  style="font-size:20px; text-align:center;" >   <?php echo h($carpool['Carpool']['num_place']); ?>&nbsp; places</li> 
				<br><li><?php echo h($carpool['Carpool']['description']); ?>&nbsp; </li>
			</ul>
		</section>
<?php endforeach; ?>

