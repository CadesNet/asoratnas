<?php echo $this->element('carusel/carrusel2'); ?>
<div class="container">
	<div class="row-fluid">
		<div class="span9">
			
					<div class="row-fluid">
						<div class="span1">
							<?php foreach ($categories as $category): ?>
								
							
							<?php echo $this->Html->image("category/filename/".$category['Category']['filename']."")?>
						</div>
						<div class="span11">
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
			

				
				<?php foreach ($category['Item'] as $item) { ?>
					
			
				<div class="span5 cuadroproducto">
					
						<div class="span6 offset3">
							<?php foreach ($item['ImagesItem'] as $image): ?>
							<?php echo $this->Html->image("images_item/filename/".$image['filename']."") ?>
							<?php 
								break;
							endforeach ?>
						</div>
				
					<div class = "">
						<div class="span12 ">
							<h3 class = "itemname"><?php echo $item['name'] ?> </h3>
						</div>
						<div class="span12 ">
							<p class = "itemdescription"><?php echo $item['description'] ?> </p>
						</div>
						<div class="span6 offset3">
							<?php echo $this->Html->link(__('Saber mas..'), array('controller' => 'Quotes', 'action' => 'select',$category['Category']['id'],$item['id']), array('class' => 'btn btn-danger btn-large')); ?>
						</div>
					</div>

				</div>	
			
			<?php } ?>

			<?php endforeach ?>
			

			
		</div>
		<div class="span3">
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
					
				
				
					<div class="span12 recipetitle">
						<h3><?=$recipes['Recipe']['title'] ?></h3>
					</div>
				
				
					<div class="span12">
						<h4><h5><?=$recipes['Recipe']['time'] ?> Minitos - <?=$recipes['Recipe']['portion'] ?> Personas</h5></h4>
					</div>
						
				
					<div class="span12">
						<a class="btn" href="#">Ver receta</a>
					</div>
					
				
		
		</div>
		</div>
	</div>
</div>