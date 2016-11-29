
<div class="users index">
	<h2><?php echo __('Liste des utilisateurs'); ?></h2>
	
	<?php foreach ($users as $user): ?>
		<section>
			<ul class="meta" style="font-size:30px;">
				<li> <?php echo $this->Html->link($user['User']['login'], array('controller' => 'users', 'action' => 'view', $user['User']['id'])); ?> </li>                  
				<li> <?php echo h($user['User']['age']); ?>&nbsp; </li>
				<li> <?php echo h($user['User']['city']); ?>&nbsp; </li>
				<?php
					if($user['User']['carpool'] == 1){
						echo "<li class='icon fa-car' style='font-size:20px;'  align='rigth'> </li>";
					}
					
					if($user['User']['lodge'] == 1){
						echo "<li class='icon fa-bed' style='font-size:20px;'  align='rigth'> </li>";
					}
				?>
				<li> <?php echo h($user['User']['interest']); ?>&nbsp;</li>
			</ul>
		</section>
<?php endforeach; ?>


