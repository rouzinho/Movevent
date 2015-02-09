<?php
  $posts = $this->requestAction('events/index');
  $i = 1;
  $n = ".png";
  $m = "images/";
?>
<div class="row">
<?php foreach ($posts as $post):?>
	<?php if($i == 5)
	break;?>
      <div class="3u">								
				<!-- Feature -->
				<section class="box feature">
					<a href="#" class="image info"><img src= "<?php echo "images/".$i.".png" ?>" alt="" /></a>
						<h3><a href="#"><?php echo $post['Event']['name']?></a></h3>
							<p>
								<?php echo $post['Event']['theme']?> <br>
								<?php echo $post['Event']['description']?>
								
							</p>
				</section>
		</div>
		<?php $i = $i + 1;?>

<?php endforeach; ?> 
</div>


