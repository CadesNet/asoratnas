
  <div class="row-fluid">
    <section id="contenido">
   <section id="principal">
   	   	<?php if($this->Session->read('Auth.User.id')){ 
						echo $this->Html->link('Agregar imagen Carousel', array('controller' => 'Carousels', 'action' => 'add','1','1','1','recetas'),array('class'=>'btn btn-primary'));

	}?>
<article id="galeria-inicio">
         <div class="flexslider">
      <ul class="slides">
      <?php foreach ($carousel as $carousels) { ?>
    
        <li>
        	<?php if($this->Session->read('Auth.User.id')){ ?>
											
				<?php echo $this->Html->link(__("<i class='icon-pencil'></i>"), array('controller'=>'Carousels','action' => 'edit', $carousels['Carousel']['id'],'1','1','1','recetas'),array('class' => 'ok btn btn-info ','escape' => false)); ?>
				<?php echo $this->Form->postLink(__("<i class='icon-remove'></i>"), array('controller'=>'Carousels','action' => 'delete', $carousels['Carousel']['id'],'1','1','1','recetas'),array('class' => 'ok btn btn-info ','escape' => false), __('Are you sure you want to delete # %s?', $carousels['Carousel']['id'])); 
			}?>
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


	<div class="row-fluid">
		<div class="span9">
			<div class="row-fluid">
				
			
						<div class="span1">

							<h3 style="float: right;"><?php echo $this->Html->image("icon-recetas.jpg"); ?></h3>
						</div>
						<div class="span11">
									<h3 class = "recipetitle">Recetas<?php if($this->Session->read('Auth.User.id')){ 
								 echo " ".$this->Html->link('Agregar Receta', array('controller' => 'Recipes', 'action' => 'add','1','1','1','recetas'),array('class'=>'btn btn-primary'));


								}?></h3>
									
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
				<div class="span4 borderimg">
					<?php
	                	 		if($this->Session->read('Auth.User.id')){ 
								 echo $this->Html->link('Agregar imagenes', array('controller' => 'ImagesRecipes', 'action' => 'index',$recipes['Recipe']['id']),array('class'=>'btn btn-primary')); 
							}?>
						<?php 
						foreach ($recipes['ImagesRecipe'] as $ImagesRecipe) {
						echo $this->Html->image("images_recipe/filename/".$ImagesRecipe['filename']."",array('class'=>'recipeadsbeneficeimg'));
						break;
						} ?>
				</div>
				<div class="span7">
					<div class="row-fluid">
						<div class="span12">
							<h4 class = "recipeitemtitle"><?php echo  ((strlen(h($recipes['Recipe']['title']))>47) ? substr(h($recipes['Recipe']['title']), 0, 47)."..." : substr(h($recipes['Recipe']['title']), 0, 47));
							if($this->Session->read('Auth.User.id')){ 
							 echo $this->Html->link(__("<i class='icon-pencil'></i>"), array('controller' => 'Recipes','action' => 'edit',$recipes['Recipe']['id'],'1','1','1','recetas'),array('class' => 'ok btn btn-info ','escape' => false)); 
							 echo $this->Form->postLink(__("<i class='icon-remove'></i>"), array('controller'=>'Recipes','action' => 'delete', $recipes['Recipe']['id'],'1','1','1','recetas'),array('class' => 'ok btn btn-info ','escape' => false), __('Are you sure you want to delete # %s?',$recipes['Recipe']['id'])); }?></h4>
						</div>
					</div>
					<div class="row-fluid">
							<div class="span12">
							<p class = "recipetitledescription"> Tiempo de cocción:</p>
								<div><p class="textoinfo">&nbsp;<?php echo $recipes['Recipe']['time'] ?>&nbsp;min</p></div> 
							</div>
					</div>
					

					<div class="row-fluid">
							<div class="span12">
								<div><p class = "recipetitledescription"> Número de porciones:</p></div>
								<div><p  class="textoinfo">&nbsp;<?php echo $recipes['Recipe']['portion'] ?>&nbsp;personas</p></div> 
							</div>
					</div>
					
					<div class="row-fluid">
					<p class="visible-desktop visi1">&nbsp; </p>
					<br>
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
				echo "&nbsp;".$this->Paginator->numbers()."&nbsp;";
				echo $this->Paginator->next('Siguiente Receta »', null, null, array('class' => 'disabled'));

				// prints X of Y, where X is current page and Y is number of pages
				//echo $this->Paginator->counter();
				        ?>
			</div>
			</div>
			</div>

			

		</div>
		<div class="span3">
			<?php if($this->Session->read('Auth.User.id')){ 

			 echo $this->Html->link('ver todas', array('controller' => 'Ads', 'action' => 'index'),array('class'=>'btn btn-primary')); 
		} ?><?php if($this->Session->read('Auth.User.id')){ 
						echo $this->Html->link('Agregar noticias', array('controller' => 'Ads', 'action' => 'add','1','1','1','recetas'),array('class'=>'btn btn-primary'));
						
					}?>
		<div class="row-fluid">
		<?php foreach ($ads as $value) { ?>
			
				<div class="span12 " style="margin: 0;" >
				<?php if($this->Session->read('Auth.User.id')){ 
				 echo $this->Html->link(__("<i class='icon-pencil'></i>"), array('controller'=>'Ads','action' => 'edit',$value['Ad']['id'],'1','1','1','recetas'),array('class' => 'ok btn btn-info ','escape' => false)); 
				 echo $this->Form->postLink(__("<i class='icon-remove'></i>"), array('controller'=>'Ads','action' => 'delete', $value['Ad']['id'],'1','1','1','recetas'),array('class' => 'ok btn btn-info ','escape' => false), __('Are you sure you want to delete # %s?',$value['Ad']['id']));
				 }?>
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
