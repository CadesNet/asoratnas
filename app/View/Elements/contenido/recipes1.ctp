<<<<<<< HEAD

=======
<div class="container">
>>>>>>> b6abcb8f17127e7992c4b9391ac8f4dc08532886
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
<<<<<<< HEAD

=======
</div>
>>>>>>> b6abcb8f17127e7992c4b9391ac8f4dc08532886
<div class="container">
	<div class="row-fluid">
		<div class="span9">
			<div class="row-fluid">
				<div class="span1">
<<<<<<< HEAD
					<h3 style="float: right;"><?php echo $this->Html->image("icon-recetas.jpg")?></h3>
=======
					<h3><?php echo $this->Html->image("icon-recetas.jpg")?></h3>
>>>>>>> b6abcb8f17127e7992c4b9391ac8f4dc08532886
				</div>
				<div class="span11">
							<h3 class = "recipetitle">Recetas</h3>
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
<<<<<<< HEAD
						echo $this->Html->image(("images_recipe/filename/".$ImagesRecipe['filename'].""),array('class'=>'recipeadsbeneficeimg'));
=======
						echo $this->Html->image("images_recipe/filename/".$ImagesRecipe['filename']."");
>>>>>>> b6abcb8f17127e7992c4b9391ac8f4dc08532886
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
<<<<<<< HEAD
							<div class="span12">
								<div><p class = "recipetitledescription"> Tiempo de cocción:</p></div>
								<div><p  class="textoinfo">&nbsp;<?php echo $recipes['Recipe']['time'] ?>&nbsp;min</p></div> 
=======
							<div class="span2">
								<div class = "recipetitledescription"> Tiempo: </div>
							</div>
							<div class="span10">
								<p><?php echo $recipes['Recipe']['time'] ?> min</p>
>>>>>>> b6abcb8f17127e7992c4b9391ac8f4dc08532886
							</div>
					</div>
					

					<div class="row-fluid">
<<<<<<< HEAD
							<div class="span12">
								<div><p class = "recipetitledescription"> Número de porciones:</p></div>
								<div><p  class="textoinfo">&nbsp;<?php echo $recipes['Recipe']['portion'] ?>&nbsp;personas</p></div> 
							</div>
					</div>
					<p class="visible-desktop visi">&nbsp; </p>
                	 <p class="visible-desktop visi">&nbsp; </p>
					<br>


					<div class="row-fluid">
						<div class="span5">
							<?php echo $this->Html->link(__('Volver'), array('controller' => 'Recipes', 'action' => 'select'), array('class' => 'btn btn-info btn-large')); ?>
						</div>
					</div>
				</div>
				</div>
					<p class="visible-desktop">&nbsp; </p>
                	 <p class="visible-desktop">&nbsp; </p>
				<div class="row-fluid">
					<div class="span7">
						<h3 class = "recipeitemsubtitle">Ingredientes</h3>
						<?php foreach ($recipes['Ingredient'] as $ingredients) {?>
						<p class="textoinfo"> <?php echo $ingredients['amount']; ?> : <?php echo $ingredients['name']; ?> </p>
=======
							<div class="span2">
								<div class = "recipetitledescription"> Personas: </div>
							</div>
							<div class="span10">
								<p><?php echo $recipes['Recipe']['portion'] ?>Personas</p>
							</div>
					</div>
					<div class="row-fluid">
						<div class="span5">
							<?php echo $this->Html->link(__('Volver al recetario'), array('controller' => 'Recipes', 'action' => 'select'), array('class' => 'btn btn-info btn-large')); ?>
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
>>>>>>> b6abcb8f17127e7992c4b9391ac8f4dc08532886
							
						<?php } ?>
					</div>
					
				</div>
				<div class="row-fluid">
					<div class="span7">
						<h3 class = "recipeitemsubtitle">Preparacion</h3>
<<<<<<< HEAD
						<p class="textoinfo"><?php echo $recipes['Recipe']['preparation'] ?>personas</p>
=======
						<p><?php echo $recipes['Recipe']['preparation'] ?>personas</p>
>>>>>>> b6abcb8f17127e7992c4b9391ac8f4dc08532886
					</div>
				</div>
			</div>
			<?} ?>
<div class="paginator" style="float: right;">
<?php 


// Shows the next and previous links
echo $this->Paginator->prev('« Anterior Receta', null, null, array('class' => 'disabled'));
  //Shows the page numbers
<<<<<<< HEAD
echo "&nbsp;".$this->Paginator->numbers()."&nbsp;";
=======
echo $this->Paginator->numbers();
>>>>>>> b6abcb8f17127e7992c4b9391ac8f4dc08532886
echo $this->Paginator->next('Siguiente Receta »', null, null, array('class' => 'disabled'));

// prints X of Y, where X is current page and Y is number of pages
//echo $this->Paginator->counter();
        ?>
</div>


			
				</div>

			</div>

			

		</div>
		<div class="span3">
		
<<<<<<< HEAD
				<div class="row-fluid">
		<?php foreach ($ads as $value) { ?>
				<div class="span12 " style="margin: 0;" >

				<?php if($value['Ad']['type'] !='video'){
				echo $this->Html->image(('ad/filename/'.$value['Ad']['filename']),array('class'=>'noticias'));
				} else{ ?>
				<iframe class="noticiavideo" src= <?=$value['Ad']['link'] ?> frameborder="0" allowfullscreen></iframe>
				<?php } ?>
				<p > </p>

				</div>
			<?php } ?>	
		</div>
=======
				<?php foreach ($ads as $value) { ?> 
				<div class="span12 " style="margin: 0;"  >

				 <?php if($value['Ad']['type'] !='video'){ 
					 echo $this->Html->image(('ad/filename/'.$value['Ad']['filename']),array('style'=>'height:380px'));
				} else{ ?>
					<iframe width="100%" height="180px" src= <?=$value['Ad']['link'] ?> frameborder="0" allowfullscreen></iframe>
				 <?php } ?>
				
				<br>
				<br>
				<br>
				

			</div>
		<?php } ?>	
>>>>>>> b6abcb8f17127e7992c4b9391ac8f4dc08532886
	</div>
</div>
</div>
</div>

<<<<<<< HEAD

         <p>&nbsp; </p>
 <p>&nbsp; </p>
=======
<script type="text/javascript" >
            $('#demo1').videoUI();
        </script>
>>>>>>> b6abcb8f17127e7992c4b9391ac8f4dc08532886
