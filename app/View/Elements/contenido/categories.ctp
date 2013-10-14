
  <div class="row-fluid">
    <section id="contenido">
   <section id="principal">
   	<?php if($this->Session->read('Auth.User.id')){ 
			echo $this->Html->link('Agregar imagen Carousel', array('controller' => 'Carousels', 'action' => 'add','1','1','1','categorias'),array('class'=>'btn btn-primary'));

	}?>
	<article id="galeria-inicio">
         <div class="flexslider">
		      <ul class="slides">
		      <?php foreach ($carousel as $carousels) { ?>
		    
		        <li>
		        	<?php if($this->Session->read('Auth.User.id')){ ?>
											
				<?php echo $this->Html->link(__("<i class='icon-pencil'></i>"), array('controller'=>'Carousels','action' => 'edit', $carousels['Carousel']['id'],'1','1','1','categorias'),array('class' => 'ok btn btn-info ','escape' => false)); ?>
				<?php echo $this->Form->postLink(__("<i class='icon-remove'></i>"), array('controller'=>'Carousels','action' => 'delete', $carousels['Carousel']['id'],'1','1','1','categorias'),array('class' => 'ok btn btn-info ','escape' => false), __('Are you sure you want to delete # %s?', $carousels['Carousel']['id'])); 
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
				
					<?php if($this->Session->read('Auth.User.id')){ 
						echo $this->Html->link('Agregar Categoria', array('controller' => 'Categories', 'action' => 'add'),array('class'=>'btn btn-primary'));

					}?>
		
				
			</div>
			<div class="row-fluid">
			<div class="span5" ></div>
			<div class="span5"></div>
				<?php 
				foreach ($categories as $category){
					?>

				<div class="span5">
					<div class="row-fluid">
								<div class="span3">
									<?php 
									foreach ($category['ImagesCategory'] as $ImagesCategory) {
									if($ImagesCategory['type']=='Uno'){						
									echo $this->Html->image("images_category/filename/".$ImagesCategory['filename'],array('style' => 'float: right;' ));
									}
									}
									?>
								</div>
							<div class="span9">
								<div class="row-fluid">
									<div class="span12">
										<h4 style="line-height: 20px;">
											<?php echo $this->Html->link(($category['Category']['name']), array('controller' => 'Categories', 'action' => 'select1',$category['Category']['id']), array('style' => "color:".$category['Category']['description']."; text-decoration: none;")) ?>
											<?php if($this->Session->read('Auth.User.id')){ ?>
											
							     				<?php echo $this->Html->link(__("<i class='icon-pencil'></i>"), array('action' => 'edit', $category['Category']['id']),array('class' => 'ok btn btn-info ','escape' => false)); ?>
												<?php echo $this->Form->postLink(__("<i class='icon-remove'></i>"), array('action' => 'delete', $category['Category']['id']),array('class' => 'ok btn btn-info ','escape' => false), __('Are you sure you want to delete # %s?', $category['Category']['id'])); ?>
												<?php echo $this->Html->link('Agregar imagenes', array('controller' => 'imagesCategories', 'action' => 'index',$category['Category']['id']),array('class'=>'btn btn-primary')); ?>
											
											<?php } ?>
										</h4>
									</div>
								</div>
								<div class="row-fluid">
									<div style="height: 8px;background-color:<?php echo $category['Category']['description']?>" >
								</div>
								</div>
								<br>
								<div class="row-fluid">
									<div class="span12">
									
									<?php foreach ($category['Item'] as $item) { 

												if($item['removed'] != 'si'){	?>

												
									

										<div class="row-fluid">
											<div class="span12">
											<?php echo $this->Html->link(($item['name']), array('controller' => 'Items', 'action' => 'select',$category['Category']['id'],$item['id']),array('style' => "color:".$category['Category']['description']."; text-decoration: none;")) ?>
												<?php if($this->Session->read('Auth.User.id')){ 
												 echo $this->Html->link(__("<i class='icon-pencil'></i>"), array('controller'=>'Items','action' => 'edit',$item['id']),array('class' => 'ok btn btn-info ','escape' => false)); 
												 echo $this->Form->postLink(__("<i class='icon-remove'></i>"), array('controller'=>'Items','action' => 'delete', $item['id']),array('class' => 'ok btn btn-info ','escape' => false), __('Are you sure you want to delete # %s?',$item['id']));
												 }?>
											</div>
										</div>
										<div class="row-fluid">
												<div class="span12">
											 	<p style="color:#807F7C">Presentación: 

											 	<?php $con = count($item['Presentation']);
											 		  $i=0;
											 	foreach ($item['Presentation'] as $presentacion) {
											 		$i++;
											 		switch ($i) {
											 			case $con-1:
											 				echo $presentacion['name']." y ";
											 				break;
											 			case $con:
											 				echo $presentacion['name'];
											 				break;
											 			
											 			default:
											 				echo $presentacion['name']." , ";
											 				break;
											 		}
											 			 
											 	}

											 	 ?>

											 	</p>
												</div>
										</div>
									<?php } } ?>
									</div>
								</div>
							</div>
					</div>
					<br>
					<br>
				</div>
			<?php } ?>
			</div>
			<br>
			<br>
			<div class="row-fluid">
				<div class="span12" style="background-color: #E8E4D6;">
					<h5 style="color:#53A08D">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Disfruta de toda la variedad de la carne mas saludable, nutritiva y dietetica</h5>
				</div>
				
			</div>
			<div class="row-fluid">
				<div class="span12">

					<div class="list_carousel responsive" style="background-color: transparent;height: 239px;">

						<ul id="foo5" style="height:100%">
								<?php foreach($categories as $category) { 
								foreach ($category['ImagesCategory'] as $ImagesCategory) {
									if($ImagesCategory['type']=='Dos'){		
								?>
									<li style="border-right: #D4D5D5 1px solid;width:235px">
									<?php 
										echo $this->Html->link($this->Html->image("images_category/filename/".$ImagesCategory['filename']."",array('style'=>'width:100%;height: 100%;' )),array('controller' => 'Categories', 'action' => 'select1',$category['Category']['id']),array('escape' => false , 'class' => 'brand'));  
						    	    ?>
									</li>
								<?php }
							  		}
							  		}	 ?>

						</ul>
						<div class="clearfix"></div>
					</div>
				</div>	
			</div>
			
		</div>
			
        

		<div class="span3">
		
		<div class="row-fluid">
					<?php if($this->Session->read('Auth.User.id')){ 
						echo $this->Html->link('Agregar noticias', array('controller' => 'Ads', 'action' => 'add','1','1','1','categorias'),array('class'=>'btn btn-primary'));
						echo $this->Html->link('ver todas', array('controller' => 'Ads', 'action' => 'index'),array('class'=>'btn btn-primary'));
					}?>
				<?php if(isset($ads['Ad']['id'])){ ?> 
				<div class="span12 " style="margin: 0;" >
					<?php if($this->Session->read('Auth.User.id')){ 
					 echo $this->Html->link(__("<i class='icon-pencil'></i>"), array('controller'=>'Ads','action' => 'edit',$ads['Ad']['id'],'1','1','1','categorias'),array('class' => 'ok btn btn-info ','escape' => false)); 
					 echo $this->Form->postLink(__("<i class='icon-remove'></i>"), array('controller'=>'Ads','action' => 'delete', $ads['Ad']['id'],'1','1','1','categorias'),array('class' => 'ok btn btn-info ','escape' => false), __('Are you sure you want to delete # %s?',$ads['Ad']['id']));
					 }?>
					 <?php if($ads['Ad']['type'] !='video'){ 
					echo $this->Html->image(('ad/filename/'.$ads['Ad']['filename']),array('class'=>'noticias'));
					} else{ ?>
					<iframe class="noticiavideo" src= <?=$ads['Ad']['link'] ?> frameborder="0" allowfullscreen></iframe>
					<?php } ?>
					<p></p>

				</div>
				<?php } ?>

				<div class="span12 cuadrorecetad" style="text-align:center;margin: 0;">
					<?php if($this->Session->read('Auth.User.id')){ 
								 echo " ".$this->Html->link('Agregar Receta', array('controller' => 'Recipes', 'action' => 'add','1','1','1','categorias'),array('class'=>'btn btn-primary'));


								}?>
					<div class="row-fluid" style="text-align:left;" >
						<div class="span12" >
							<h3 class="recipedia">&nbsp;&nbsp;La receta del día</h3>
						</div>
						
					</div>
					<?php if(isset($recipes['Recipe']['id'])) { ?> 
					<div class="row-fluid" >
						<div class="span12">
							<?php
	                	 		if($this->Session->read('Auth.User.id')){ 
								 echo $this->Html->link('Agregar imagenes', array('controller' => 'ImagesRecipes', 'action' => 'index',$recipes['Recipe']['id'],'index'),array('class'=>'btn btn-primary')); 
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
							<h5 style="color: #2FA4B8"><?php echo $recipes['Recipe']['title']." ";
							if($this->Session->read('Auth.User.id')){ 
							 echo $this->Html->link(__("<i class='icon-pencil'></i>"), array('controller' => 'Recipes','action' => 'edit',$recipes['Recipe']['id'],'1','1','1','categorias'),array('class' => 'ok btn btn-info ','escape' => false)); 
							 echo $this->Form->postLink(__("<i class='icon-remove'></i>"), array('controller'=>'Recipes','action' => 'delete', $recipes['Recipe']['id'],'1','1','1','categorias'),array('class' => 'ok btn btn-info ','escape' => false), __('Are you sure you want to delete # %s?',$recipes['Recipe']['id'])); }?></h5>
						</div>
					</div>
					<div class="row-fluid" >
						<div class="span12">
							<h5 style="color: #2D6876" ><?php echo $recipes['Recipe']['time'] ?> Minutos - <?=$recipes['Recipe']['portion'] ?> Personas</h5>
						</div>
					</div>				
					<div class="row-fluid">
						<div class="span12">
							<?php echo $this->Html->link(__('Ver receta'), array('controller' => 'Recipes', 'action' => 'select1',$recipes['Recipe']['id'],1), array('class' => 'btn btn-info btn-large'));
								 ?>
						</div>
						
					</div>
					<?php } ?>
				</div>	

					<div class="sapn112">
						<div style="text-align: right">
				<?php echo $this->Html->link(__('Ver todas las recetas...'), array('controller' => 'Recipes', 'action' => 'select'),array('class'=>'verrecetas','style'=>'text-decoration: inherit;'));
							 ?>
						</div>
					</div>
			
			</div>
		</div>

	</div>
 <p>&nbsp; </p>
 <p>&nbsp; </p>