<div class="container">
	<div class="row">
		<div class="span8">
			<div class="row">
				<div class="span8">
					<div class="row">
						<div class="span1">
							<?php foreach ($categories as $category): ?>
								
							
							<?php echo $this->Html->image("category/filename/".$category['Category']['filename']."")?>
						</div>
						<div class="span3">
							<div class="row">
								<div class="span3">
									<h3 style="line-height: 20px;"><?php echo $category['Category']['name'] ?></h3>
								</div>
							</div>
							<div class="row" >
								<div class="span2" style="height: 6px;
background-color: black;">
								</div>
							</div>
							<br>
						</div>
					</div>
				</div>
				<?php foreach ($category['Item'] as $item) { ?>
					
				
				<div class="span4" style="text-align: center;">
					<div class="row">
						<div class="span4">
							<?php foreach ($item['ImagesItem'] as $image): ?>
							<?php echo $this->Html->image("images_item/filename/".$image['filename']."") ?>
							<?php 
								break;
							endforeach ?>
						</div>
					</div>
					<div class="row">
						<div class="span4">
							<p><?php echo $item['name'] ?> </p>
						</div>
						<div class="span4">
							<p><?php echo $item['description'] ?> </p>
						</div>
						<div class="span4">
							<?php echo $this->Html->link(__('Saber mas..'), array('controller' => 'Quotes', 'action' => 'select',$category['Category']['id'],$item['id']), array('class' => 'btn')); ?>
						</div>
					</div>
				</div>	
			<?php } ?>

			<?php endforeach ?>

			</div>
		</div>
		<div class="span4">
		<div class="row">
			<div class="span3 offset1" style="text-align:center;">
				<?php echo $this->Html->image("noticias/1.png")?>
				<br>
				<br>
				<br>
			</div>
			<div class="span3 offset1" style="text-align:center;">
				<div class="row" style="">
					<div class="span3">
						<h2>la receta del dia</h2>
					</div>
					
				</div>
				<div class="row" style="">
					<div class="span3">
						<?php 
						foreach ($recipes['ImagesRecipe'] as $ImagesRecipe) {
						echo $this->Html->image("images_recipe/filename/".$ImagesRecipe['filename']."");
						break;
						}?>
					</div>
					
				</div>
				<div class="row" style="">
					<div class="span5">
						<h5><?=$recipes['Recipe']['title'] ?></h5>
					</div>
				</div>
				<div class="row" style="">
					<div class="span5">
						<h5><?=$recipes['Recipe']['information'] ?></h5>
					</div>
				</div>				
				<div class="row" style="">
					<div class="span5">
						<a class="btn" href="#">Ver receta</a>
					</div>
					
				</div>
			</div>			
		</div>
		</div>
	</div>
</div>