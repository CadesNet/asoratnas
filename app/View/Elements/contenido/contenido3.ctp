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
							
							<br>
						</div>
					</div>
			
					<div class="row-fluid">

				
				<?php foreach ($category['Item'] as $item) { ?>
					
		
				<div class="span4  offset1 cuadroproducto">
					<div class="row-fluid">

						<div class="span12">
							<?php foreach ($item['ImagesItem'] as $image): ?>
							<?php echo $this->Html->image("images_item/filename/".$image['filename']."") ?>
							<?php 
								break;
							endforeach ?>
						</div>
				
					
						<div class="span12 ">
							<h3 class = "itemname"><?php echo $item['name'] ?> </h3>
						</div>
						<div class="span12 ">
							<p class = "itemdescription"><?php echo $item['description'] ?> </p>
						</div>
						<div class="span12">
							<?php echo $this->Html->link(__('Saber mas..'), array('controller' => 'Quotes', 'action' => 'select',$category['Category']['id'],$item['id']), array('class' => 'btn btn-danger')); ?>
						</div>
					</div>

				</div>	
			
			<?php } ?>

			<?php endforeach ?>
			</div>

			
		</div>
		<div class="span3">
		<div class="row-fluid" >
			<div class="span12" style="text-align:center;">
				<?php echo $this->Html->image('ad/filename/'.$ads['Ad']['filename'])?>
				<br>
				<br>
				<br>
			</div>

			



			<div class="span12" style="text-align:center;">
				<div class="row-fluid" >
					<div class="span12">
						<h2>La receta del dia</h2>
					</div>
					
				</div>
				<div class="row-fluid" >
					<div class="span12">
						<?php 
						foreach ($recipes['ImagesRecipe'] as $ImagesRecipe) {
						echo $this->Html->image("images_recipe/filename/".$ImagesRecipe['filename']."");
						break;
						}
						?>
					</div>
					
				</div>
				<div class="row-fluid" >
					<div class="span12">
						<h3><?php echo $recipes['Recipe']['title'] ?></h3>
					</div>
				</div>
				<div class="row-fluid" >
					<div class="span12">
						<h5><?php echo $recipes['Recipe']['time'] ?> Minitos - <?=$recipes['Recipe']['portion'] ?> Personas</h5>
					</div>
				</div>				
				<div class="row-fluid">
					<div class="span12">
						<?php echo $this->Html->link(__('Ver receta'), array('controller' => 'Recipes', 'action' => 'select1',$recipes['Recipe']['id'],1), array('class' => 'btn btn-info btn-large'));
							 ?>
					</div>
					
				</div>
			</div>		
		</div>
		</div>
	</div>
</div>