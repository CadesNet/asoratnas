<div class="container">
  <div class="row-fluid">
    <section id="contenido">
   <section id="principal">
<article id="galeria-inicio">
         <div class="flexslider">
      <ul class="slides">
      <?php foreach ($carousel as $carousels) { ?>
    
        <li>
               <?php echo $this->Html->image("carousel/filename/".$carousels['Carousel']['filename']."");  
               if($carousels['Carousel']['description']!=""){
               ?> 
               <p class="flex-caption">
                <?php echo $carousels['Carousel']['description'] ?>
               </p>
               <?php } ?>
        </li>
       <?php } ?>
      </ul>
         </div>
      </article>
   </section>
</section>
  </div>
</div>
<div class="container">
	<div class="row-fluid">
		<div class="span9">
			<div class="row-fluid">
				<div class="span1">
					<h3><?php echo $this->Html->image("sugerencia.PNG")?></h3>
				</div>
				<div class="span11">
							<h3 class = "recipetitle">nam e</h3>
					<br>					
				</div>
			</div>

			<div class="row-fluid">
				<div class="span11 offset1">
					<?php
						$coun = 1;
					 foreach ($recipes as $recipes) { ?>
			<div class= "itemreceta">
				<div  class="row-fluid">
				<div class="span5">
						<?php 
						foreach ($recipes['ImagesRecipe'] as $ImagesRecipe) {
						echo $this->Html->image("images_recipe/filename/".$ImagesRecipe['filename']."");
						break;
						} ?>
				</div>
				<div class="span7">
					<div class="row-fluid">
						<div class="span12">
							<h3 class = "recipeitemtitle"><?php echo $recipes['Recipe']['title'] ?></h3>
						</div>
					</div>
					<div class="row-fluid">
							<div class="span2">
								<div class = "recipetitledescription"> Tiempo: </div>
							</div>
							<div class="span10">
								<p><?php echo $recipes['Recipe']['time'] ?> min</p>
							</div>
					</div>
					

					<div class="row-fluid">
							<div class="span2">
								<div class = "recipetitledescription"> Personas: </div>
							</div>
							<div class="span10">
								<p><?php echo $recipes['Recipe']['portion'] ?>Personas</p>
							</div>
					</div>
					<div class="row-fluid">
						<div class="span5">
							<?php echo $this->Html->link(__('Volver al recetario'), array('controller' => 'Recipes', 'action' => 'select'), array('class' => 'btn btn-info ')); ?>
						</div>
					</div>
				</div>
				<div class="span1">
					
				</div>
				</div>
				<div class="row-fluid">
					<div class="span7">
						<h3 class = "recipeitemsubtitle">ingredientes</h3>
						<?php foreach ($recipes['Ingredient'] as $ingredients) {?>
						<p> <?php echo $ingredients['amount']; ?> : <?php echo $ingredients['name']; ?> </p>
							
						<?php } ?>
					</div>
					
				</div>
				<div class="row-fluid">
					<div class="span7">
						<h3 class = "recipeitemsubtitle">Preparacion</h3>
						<p><?php echo $recipes['Recipe']['preparation'] ?>personas</p>
					</div>
				</div>
			</div>
			<?} ?>
<div class="paginator" style="float: right;">
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
			<div class="span12 " style="margin: 0;"  >

				 <?php if($value['Ad']['type'] !='video'){ 
					 echo $this->Html->image('ad/filename/'.$value['Ad']['filename']);
				} else{ ?>
					<iframe width="100%" height="100%" src= <?=$value['Ad']['link'] ?> frameborder="0" allowfullscreen></iframe>
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

<script type="text/javascript" >
            $('#demo1').videoUI();
        </script>