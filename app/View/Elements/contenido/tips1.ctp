<?php echo $this->element('carusel/carrusel2'); ?>
<div class="container">
	<div class="row-fluid">
		<div class="span9">
			<div class="row-fluid">
				
			
						<div class="span1">
							<?php echo $this->Html->image("sugerencia.png")?>
						</div>
						<div class="span11">
							<div class="row-fluid">
								<div class="span12">
									<h3 class = "recipetitle">nam e</h3>
								</div>
							</div>
							
							<br>
					
				</div>
			</div>

			<div class="row-fluid">
				<div class="span11 offset1">
					<?php
						$coun = 1;
					 foreach ($tips as $tip) { ?>
			<div class= "itemreceta">
				<div  class="row-fluid">
				<div class="span5">
				<?php echo $this->Html->image("tip/filename/".$tip['Tip']['filename'].""); ?>
				</div>
				<div class="span7">
					<div class="row-fluid">
						<div class="span12">
							<h3 class = "recipeitemtitle"><?php echo $tip['Tip']['title'] ?></h3>
						</div>
					</div>
					
					<div class="row-fluid">
						<div class="span5">
							<?php echo $this->Html->link(__('Volver a los Beneficios para la salud'), array('controller' => 'Tips', 'action' => 'select1'), array('class' => 'btn btn-info ')); ?>
						</div>
					</div>
				</div>
				<div class="span1">
					
				</div>
				</div>
				<div class="row-fluid">
					<div class="span7">
						<?php echo $tip['Tip']['description'] ?>
					</div>
					
				</div>
			
			</div>
			<?} ?>
<div class="paginator">
<?php 


// Shows the next and previous links
echo $this->Paginator->prev('« Anterior Receta', null, null, array('class' => 'disabled'));
  //Shows the page numbers
echo $this->Paginator->numbers();
echo $this->Paginator->next('Siguiente Receta »', null, null, array('class' => 'disabled'));

// prints X of Y, where X is current page and Y is number of pages
//echo $this->Paginator->counter();
        ?>
</div>


			
				</div>

			</div>

			

		</div>
		<div class="span3">
		
			<?php foreach ($ads as $value) { ?> 
			<div class="span12 " >

				 <?php if($value['Ad']['type'] !='video'){ 
					 echo $this->Html->image('ad/filename/'.$value['Ad']['filename']);
				} else{ ?>
					<iframe width="560" height="315" src= <?=$value['Ad']['filename'] ?> frameborder="0" allowfullscreen></iframe>
				 <?php } ?>
				
				<br>
				<br>
				<br>
				

			</div>		
		<?php } ?>
		
	</div>
</div>
</div>
</div>
