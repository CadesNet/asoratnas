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
	<div class="row">
		<div class="span9">
			<div class="row-fluid">
				
			
						<div class="span1">

<<<<<<< HEAD
							<h3 style="float: right;"><?php echo $this->Html->image("icon-recetas.jpg"); ?></h3>
=======
							<h3><?php echo $this->Html->image("icon-recetas.jpg"); ?></h3>
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
<<<<<<< HEAD
				<div class="span4">
						<?php 
						foreach ($recipes['ImagesRecipe'] as $ImagesRecipe) {
						echo $this->Html->image("images_recipe/filename/".$ImagesRecipe['filename']."",array('class'=>'recipeadsbeneficeimg'));
						break;
						} ?>
				</div>
				<div class="span8">
=======
				<div class="span5">
						<?php 
						foreach ($recipes['ImagesRecipe'] as $ImagesRecipe) {
						echo $this->Html->image("images_recipe/filename/".$ImagesRecipe['filename']."");
						break;
						} ?>
				</div>
				<div class="span7">
>>>>>>> b6abcb8f17127e7992c4b9391ac8f4dc08532886
					<div class="row-fluid">
						<div class="span12">
							<h3 class = "recipeitemtitle"><?php echo $recipes['Recipe']['title'] ?></h3>
						</div>
					</div>
					<div class="row-fluid">
<<<<<<< HEAD
							<div class="span12">
								<div><p class = "recipetitledescription"> Tiempo de cocción:</p></div>
								<div><p class="textoinfo">&nbsp;<?php echo $recipes['Recipe']['time'] ?>&nbsp;min</p></div> 
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
=======
							<div class="span2">
								<div class = "recipetitledescription"> Personas: </div>
							</div>
							<div class="span10">
								<p><?php echo $recipes['Recipe']['portion'] ?>Personas</p>
>>>>>>> b6abcb8f17127e7992c4b9391ac8f4dc08532886
							</div>
					</div>
					
					<div class="row-fluid">
<<<<<<< HEAD
					<p class="visible-desktop visi1">&nbsp; </p>
                	 
=======
						<br>
						<br>
						<br>
						<br>
>>>>>>> b6abcb8f17127e7992c4b9391ac8f4dc08532886
						<div class="span12">
							<?php echo $this->Html->link(__('Ver receta'), array('controller' => 'Recipes', 'action' => 'select1',$recipes['Recipe']['id'],$coun++), array('class' => 'btn btn-info btn-large')); ?>
						</div>
					</div>
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
		<div class="row-fluid">
<<<<<<< HEAD
		<?php foreach ($ads as $value) { ?>
				<div class="span12 " style="margin: 0;" >

				<?php if($value['Ad']['type'] !='video'){
				echo $this->Html->image(('ad/filename/'.$value['Ad']['filename']),array('class'=>'noticias'));
				} else{ ?>
				<iframe class="noticiavideo" src= <?=$value['Ad']['link'] ?> frameborder="0" allowfullscreen></iframe>
				<?php } ?>
				<p> </p>

				</div>
			<?php } ?>	
		</div>
		</div>
	</div>
</div>
<p>&nbsp; </p>
 <p>&nbsp; </p>
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
		</div>
		</div>
	</div>
</div><script type="text/javascript" >
            $('#demo1').videoUI();
        </script>
>>>>>>> b6abcb8f17127e7992c4b9391ac8f4dc08532886
