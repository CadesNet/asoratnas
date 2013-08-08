<div class="container">
	<div class="row-fluid">
		<div class="span8">
			<div class="row-fluid">
				<div class="span8">
					<div class="row-fluid">
						<div class="span1">
							<?php foreach ($categories as $category): ?>
								
							
							<?php echo $this->Html->image("category/filename/".$category['Category']['filename']."")?>
						</div>
						<div class="span10">
							<div class="row-fluid">
								<div class="span12">
									<h2 class = "producttitle"><?php echo $category['Category']['name'] ?></h2>
								</div>
							</div>
							<div class="row-fluid" >
								<div class="span2" >
								</div>
							</div>
							<br>
						</div>
					</div>
				</div>

				<div class = "row-fluid">
				<?php foreach ($category['Item'] as $item) { ?>
					
			
				<div class="span6 cuadroproducto">
					<div class="row-fluid">
						<div class="span6 offset3">
							<?php foreach ($item['ImagesItem'] as $image): ?>
							<?php echo $this->Html->image("images_item/filename/".$image['filename']."") ?>
							<?php 
								break;
							endforeach ?>
						</div>
					</div>
					<div class="row-fluid">
						<div class="span4">
							<p><?php echo $item['name'] ?> </p>
						</div>
						<div class="span4">
							<p><?php echo $item['description'] ?> </p>
						</div>
						<div class="span4">
							<?php echo $this->Html->link(__('Saber mas..'), array('controller' => 'Quotes', 'action' => 'select5',$category['Category']['id'],$item['id']), array('class' => 'btn')); ?>
						</div>
					</div>

				</div>	
			
			<?php } ?>

			<?php endforeach ?>
			</div>

			</div>
		</div>
		<div class="span4">
		<div class="row-fluid">
			<div class="span12" >
				<?php echo $this->Html->image("noticias/1.png")?>
				<br>
				<br>
				<br>
			</div>
			<div class="span12" >
				
					
						<h2>la receta del dia</h2>
					
					
				</div>
				
					<div class="span12">
						<?php 
						foreach ($recipes['ImagesRecipe'] as $ImagesRecipe) {
						echo $this->Html->image("images_recipe/filename/".$ImagesRecipe['filename']."");
						break;
						}?>
					</div>
					
				
				
					<div class="span12">
						<h3><?=$recipes['Recipe']['title'] ?></h3>
					</div>
				
				
					<div class="span12">
						<h4><?=$recipes['Recipe']['information'] ?></h4>
					</div>
						
				
					<div class="span12">
						<a class="btn" href="#">Ver receta</a>
					</div>
					
				
		
		</div>
		</div>
	</div>
</div>