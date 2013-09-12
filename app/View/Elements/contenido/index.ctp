
  <div class="row-fluid">
  	<div class="span12">
    <section id="contenido">
   <section id="principal">
   	<?php if($this->Session->read('Auth.User.id')){ 
						echo $this->Html->link('Agregar imagen Carousel', array('controller' => 'Carousels', 'action' => 'add','1'),array('class'=>'btn btn-primary'));

					}?>
<article id="galeria-inicio">
         <div class="flexslider">
      <ul class="slides">
      <?php foreach ($carousel as $carousels) { ?>
    
        <li>
        	<?php if($this->Session->read('Auth.User.id')){ ?>
											
				<?php echo $this->Html->link(__("<i class='icon-pencil'></i>"), array('controller'=>'Carousels','action' => 'edit', $carousels['Carousel']['id'],'1'),array('class' => 'ok btn btn-info ','escape' => false)); ?>
				<?php echo $this->Form->postLink(__("<i class='icon-remove'></i>"), array('controller'=>'Carousels','action' => 'delete', $carousels['Carousel']['id'],'1'),array('class' => 'ok btn btn-info ','escape' => false), __('Are you sure you want to delete # %s?', $carousels['Carousel']['id'])); 
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
  </div>


<div class="container">
    <div class="row-fluid">
		<div class="span7" >
			<div class="row-fluid" >
					<h3 class = "benefitstitle">Beneficios para la salud<?php if($this->Session->read('Auth.User.id')){ 
								 echo " ".$this->Html->link('Agregar Beneficio', array('controller' => 'Benefits', 'action' => 'add','index'),array('class'=>'btn btn-primary'));
								}?></h3>
			</div>
			<?php 
			
			$coun=0;
			foreach($benefits as $benefit): ?>
			<div class="row-fluid" >		
			<div class= "benefitsbody">		
						<div class="span3" style="">
							<a href=""><?php echo $this->Html->image("benefit/filename/".$benefit['Benefit']['filename']."",array('class'=>'recipeadsbeneficeimg'))?></a>
							<br><br>
						</div>
						<div class="span9" >
							<div class="row-fluid" >
								<h4 class = "benefitssubtitle"><? echo $benefit['Benefit']['title']." ";
							 if($this->Session->read('Auth.User.id')){ 
							 echo $this->Html->link(__("<i class='icon-home'></i>"), array('Controller' => 'Benefits','action' => 'edit',$benefit['Benefit']['id'],'index'),array('class' => 'ok btn btn-info ','escape' => false)); 
							 echo $this->Form->postLink(__("<i class='icon-home'></i>"), array('Controller'=>'Benefits','action' => 'delete', $benefit['Benefit']['id'],'index'),array('class' => 'ok btn btn-info ','escape' => false), __('Are you sure you want to delete # %s?',$benefit['Benefit']['id'])); }?></h4>
							</div>
							<div class="row-fluid" style="">
								<p class ="benefitsdescription">
								<?php echo substr($benefit['Benefit']['description'], 0, 140) ?> 
								</p>
							</div>
							<div class="row-fluid" style="">

							<?php echo $this->Html->link(__('Saber mas..'), array('controller' => 'Benefits', 'action' => 'select2',$benefit['Benefit']['id'],$coun++), array('class' => 'btn btn-warning btn-large'));
							 ?>
								
							</div>
							<br>

						</div>
					</div>
			</div>
			<?php endforeach; ?>
				<br>
			
				<div class="row-fluid" style="text-align: right;border-bottom: 6px #E7E3E3 solid;">
				<?php echo $this->Html->link(__('Leer todos los articulos'), array('controller' => 'Benefits', 'action' => 'select1'),array('style'=>'text-decoration: inherit;color: #147E67;'));
							 ?>
				</div>
				
				<div class="row-fluid" style="">
					<p style="color: #889091;">Encuentranos en:</p>
				</div>

				<div class="row-fluid">
					<div class="span12">
						<?php if($this->Session->read('Auth.User.id')){ 
								 echo " ".$this->Html->link('Ver supermercados', array('controller' => 'Supermarkets', 'action' => 'index'),array('class'=>'btn btn-primary'));
								}?>
						<div class="list_carousel responsive" style="height:70px">

							<ul id="foo5" style="height:100%">
								<?php foreach($supermarkets as $supermarket) { ?>
									<li style="width:80px">
									<?php 
								echo $this->Html->link($this->Html->image("supermarket/filename/".$supermarket['Supermarket']['filename'], array("alt" => "Empresa")),$supermarket['Supermarket']['link'],array('escape' => false , 'class' => 'brand'));  
						    	    ?>
									</li>
									<?php }	 ?>
								<?php foreach($supermarkets as $supermarket) { ?>
									<li style="width:80px">
									<?php 
								echo $this->Html->link($this->Html->image("supermarket/filename/".$supermarket['Supermarket']['filename'], array("alt" => "Empresa")),$supermarket['Supermarket']['link'],array('escape' => false , 'class' => 'brand'));  
						    	    ?>
									</li>
									<?php }	 ?>

							</ul>
						</div>
					</div>	
				</div>
			
			</div>
			<div class="span5">

				<div class="row-fluid">

					<div class="span12 cuadrorecetad" style="text-align:center;">
						<?php if($this->Session->read('Auth.User.id')){ 
								 echo " ".$this->Html->link('Agregar Receta', array('controller' => 'Recipes', 'action' => 'add','index'),array('class'=>'btn btn-primary'));


								}?>
						<div class="row-fluid" style="text-align:left;" >
							<div class="span12" >
								<h2 class="recipedia">&nbsp;&nbsp;La receta del dia</h2>
							</div>
							
						</div>
						<div class="row-fluid" >
							<div class="span12">
								<?php
	                	 		if($this->Session->read('Auth.User.id')){ 
								 echo $this->Html->link('Ver imagenes', array('controller' => 'ImagesRecipes', 'action' => 'index',$recipes['Recipe']['id'],'index'),array('class'=>'btn btn-primary')); 
							}?>
								<?php 
								foreach ($recipes['ImagesRecipe'] as $ImagesRecipe) {
								echo $this->Html->image(("images_recipe/filename/".$ImagesRecipe['filename'].""),array('style' => 'width: 100%;' ));
								break;
								}
								?>
							</div>
							
						</div>
						<div class="row-fluid" >
							<div class="span12">
								<h3 style="color: #2FA4B8"><?php echo $recipes['Recipe']['title']." ";
								if($this->Session->read('Auth.User.id')){ 
							 echo $this->Html->link(__("<i class='icon-home'></i>"), array('controller' => 'Recipes','action' => 'edit',$recipes['Recipe']['id'],'index'),array('class' => 'ok btn btn-info ','escape' => false)); 
							 echo $this->Form->postLink(__("<i class='icon-home'></i>"), array('controller'=>'Recipes','action' => 'delete', $recipes['Recipe']['id'],'index'),array('class' => 'ok btn btn-info ','escape' => false), __('Are you sure you want to delete # %s?',$recipes['Recipe']['id'])); }?></h3>
							</div>
						</div>
						<div class="row-fluid" >
							<div class="span12">
								<h5 style="color: #2D6876" ><?php echo $recipes['Recipe']['time'] ?> Minitos - <?=$recipes['Recipe']['portion'] ?> Personas</h5>
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
				<div class="row-fluid">
					<div class="sapn112">
						<div style="text-align: right">
						<?php echo $this->Html->link(__('Ver todas las recetas...'), array('controller' => 'Recipes', 'action' => 'select'),array('class'=>'verrecetas','style'=>'text-decoration: inherit;'));
							 ?>
						</div>
					</div>
				</div>
			</div>	
	</div>
</div>



