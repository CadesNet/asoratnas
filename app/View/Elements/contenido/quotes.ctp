
  <div class="row-fluid">
    <section id="contenido">
   <section id="principal">
   	   	<?php if($this->Session->read('Auth.User.id')){ 
						echo $this->Html->link('Agregar imagen Carousel', array('controller' => 'Carousels', 'action' => 'add',$categories['Category']['id'],$items['Item']['id'],$items['Presentation']['id'],'presentacion'),array('class'=>'btn btn-primary'));

	}?>
<article id="galeria-inicio">
         <div class="flexslider">
      <ul class="slides">
      <?php foreach ($carousel as $carousels) { ?>
    
        <li>
        	<?php if($this->Session->read('Auth.User.id')){ ?>
											
				<?php echo $this->Html->link(__("<i class='icon-pencil'></i>"), array('controller'=>'Carousels','action' => 'edit', $carousels['Carousel']['id'],$categories['Category']['id'],$items['Item']['id'],$items['Presentation']['id'],'presentacion'),array('class' => 'ok btn btn-info ','escape' => false)); ?>
				<?php echo $this->Form->postLink(__("<i class='icon-remove'></i>"), array('controller'=>'Carousels','action' => 'delete', $carousels['Carousel']['id'],$categories['Category']['id'],$items['Item']['id'],$items['Presentation']['id'],'presentacion'),array('class' => 'ok btn btn-info ','escape' => false), __('Are you sure you want to delete # %s?', $carousels['Carousel']['id'])); 
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

<div class="container">

	<div class="row-fluid">
	  <div class="span12">
	  	<div class="row-fluid">
			<div class="span9">
					<div class="row-fluid">
							<div class="span1">	
								<?php
								foreach ($categories['ImagesCategory'] as $imgcategory) {
								if($imgcategory['type']=='Tres'){	?>					
								<h3 style="float: right;"><?php echo $this->Html->image("images_category/filename/".$imgcategory['filename']); ?></h3>
								
							<?php 	}
								}
								?>

							</div>
							<div class="span11">
								<div class="row-fluid">
									<div class="span12">
										<h3>
									<?php echo $this->Html->link($categories['Category']['name']."&nbsp;&nbsp;&nbsp;&nbsp;", array( 'controller' => 'Items', 'action' => "select",$categories['Category']['id']),array('escape' => false,'class' => 'brand producttitle','style' => "color:".$categories['Category']['description']."; text-decoration: none;border-bottom: 6px solid ".$categories['Category']['description'].";"));  
										?>
									</h3>
									</div>
								</div>
							</div>
					</div>
					
					<div class="row-fluid" style="margin-top: 30px;">

						
						
						<div class="span11 offset1 cuadrodetalle" >
							<div class="row-fluid" >
								<div class="span6">
									


										<section id="contenido">
										   <section id="principal">
												<article id="galeria-inicio">
										      	   <div class="flexslider">
										    		  <ul class="slides">
										  			    <?php $img = null; //variable golbal
										  			    $conn =1; 
										  			    foreach ($items['ImagesPresentation'] as $image){ 
														if($conn==1){
															$conn++;
															$img = $image['filename'];
														} ?>
															
														<li>
													
											    	    <?php echo $this->Html->image(("images_presentation/filename/".$image['filename'].""),array('style'=>'width: 100%;')) ?>
											    	     <p class="flex-caption" style="background: transparent;">
											                <?php echo $image['description'] ?>
											             </p>
														</li>
														<?php
													} ?>

										   		      </ul>
										         </div>
										      </article>
										   </section>
										</section>


									
								</div>
								<script type="text/javascript">
								
								</script>
								<div class="span6" >
									<?php echo $this->Form->create(null, array('action' => 'select1')); ?>
										<div class="row-fluid">
											<div class="span12">
												<h3 style = <?="color:".$categories['Category']['description'].";"?> ><?php echo $items['Presentation']['name'] ?> </h3>
											</div>
										</div>
										
										<div class="row-fluid">
											
											<div class="span3">
												<p class="stylo_form" style =  <?="color:".$categories['Category']['description'].";"?> >Cantidad</p>
											</div>

											<div class="span9">	  									
				    										<?php 
															echo $this->Form->input('id',array('type' => 'hidden','default'=>  $items['Presentation']['id']));
															echo $this->Form->input('img',array('type' => 'hidden','default'=>  $img));
															echo $this->Form->input('name',array('type' => 'hidden','default'=>  $categories['Category']['name']."<br>".$items['Item']['name']."<br>".$items['Presentation']['name']));


															echo $this->Form->input('cantidad',array('label' => '','type' => 'text','placeholder' => 'cantidad','style'=>'width:50%'));
															?>
											</div>

						
											
										</div>
										<div class="row-fluid">
											<div class="span12">
												<?php echo $this->Form->end(array('label' => __('&nbsp;&nbsp;&nbsp;&nbsp;Cotizar&nbsp;&nbsp;&nbsp;&nbsp;', true), 'escape' => false ,'class' => 'ok btn btn-large btn-danger','style' => "background:".$categories['Category']['description'].";")); ?>
											</div>
										</div>

								</div>
							</div>
					

							<br>
							<br>
							<!--<div class="row-fluid">
								<div class="span3 offset9" >
									<p>Facebook</p>
								</div>
							</div>-->
							<br>
							<br>
							<div class="row-fluid">
								<div class="span12 itemtext">
								  <?php echo html_entity_decode($items['Presentation']['descripcion']); ?>
								</div>
							</div>
							<br>
							<br>
							<br>
							<br>
							<div class="row-fluid">
								<div class="span2" >
								<h4>
									<?php 
								echo $this->Html->link("Volver", array( 'controller' => 'Items', 'action' => "select",$categories['Category']['id'],$items['Item']['id']),array('escape' => false , 'class' => 'brand','style'=>"color:".$categories['Category']['description'].";text-decoration: none"));  
						    	    ?>
						    	 </h4>
								</div>
							</div>	
						</div>
					
					</div>
			</div>				
			<div class="span3">
				<div class="row-fluid" >
				<?php if($this->Session->read('Auth.User.id')){ 
						echo $this->Html->link('Agregar noticias', array('controller' => 'Ads', 'action' => 'add',$categories['Category']['id'],$items['Item']['id'],$items['Presentation']['id'],'presentacion'),array('class'=>'btn btn-primary'));
						echo $this->Html->link('ver todas', array('controller' => 'Ads', 'action' => 'index'),array('class'=>'btn btn-primary'));
					}?>
					<div class="span12 " style="margin: 0;"  >
		 				<?php if($this->Session->read('Auth.User.id')){ 
						 echo $this->Html->link(__("<i class='icon-pencil'></i>"), array('controller'=>'Ads','action' => 'edit',$ads['Ad']['id'],$categories['Category']['id'],$items['Item']['id'],$items['Presentation']['id'],'presentacion'),array('class' => 'ok btn btn-info ','escape' => false)); 
						 echo $this->Form->postLink(__("<i class='icon-remove'></i>"), array('controller'=>'Ads','action' => 'delete', $ads['Ad']['id'],$categories['Category']['id'],$items['Item']['id'],$items['Presentation']['id'],'presentacion'),array('class' => 'ok btn btn-info ','escape' => false), __('Are you sure you want to delete # %s?',$ads['Ad']['id']));
						 }?>
		 				  <?php if($ads['Ad']['type'] !='video'){ 
						echo $this->Html->image(('ad/filename/'.$ads['Ad']['filename']),array('class'=>'noticias'));
						} else{ ?>
						<iframe class="noticiavideo" src= <?=$ads['Ad']['link'] ?> frameborder="0" allowfullscreen></iframe>
						<?php } ?>
						<p></p>
					</div>				
					<div class="span12 cuadrorecetad" style="text-align:center;margin: 0;">
						<?php if($this->Session->read('Auth.User.id')){ 
								 echo " ".$this->Html->link('Agregar Receta', array('controller' => 'Recipes', 'action' => 'add','1','1','1','categorias'),array('class'=>'btn btn-primary'));


								}?>
						<div class="row-fluid" style="text-align:left;" >
							<div class="span12" >
								<h2 class="recipedia">&nbsp;&nbsp;La receta del dia</h3>
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
							 echo $this->Html->link(__("<i class='icon-pencil'></i>"), array('controller' => 'Recipes','action' => 'edit',$recipes['Recipe']['id'],'1','1','1','categorias'),array('class' => 'ok btn btn-info ','escape' => false)); 
							 echo $this->Form->postLink(__("<i class='icon-remove'></i>"), array('controller'=>'Recipes','action' => 'delete', $recipes['Recipe']['id'],'1','1','1','categorias'),array('class' => 'ok btn btn-info ','escape' => false), __('Are you sure you want to delete # %s?',$recipes['Recipe']['id'])); }?></h3>
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
					<div class="sapn112">
						<div style="text-align: right">
				<?php echo $this->Html->link(__('Ver todas las recetas...'), array('controller' => 'Recipes', 'action' => 'select'),array('class'=>'verrecetas','style'=>'text-decoration: inherit;'));
							 ?>
						</div>
					</div>
			  	</div>
			</div>
		</div>
		<br>
		<div class="row-fluid">
			<div class="span12">
				<div class="row-fluid">
			
						<div class="span1">
							
							<h4 style="float: right;"><?php echo $this->Html->image("algunas-sugerencias-icon-products.jpg")?></h4>
						
						</div>
						<div class="span11">
							<div class="row-fluid">
								<div class="span12">
									<h4>
									<?php echo $this->Html->link("Algunas sugerencias para degustar en familia&nbsp;&nbsp;&nbsp;&nbsp;", array( 'controller' => 'recipes', 'action' => "select"),array('escape' => false,'class' => 'brand producttitle1','style' => 'text-decoration: none;'));  
											?>
									</h4>
								</div>
							</div>
								
						</div>
			</div>
			
				
			</div>
		</div>

			<br/>
			<br/>
		<div class="row-fluid">
		<div class="span12">

			<div class="list_carousel responsive" style="background:#F8F6EA;height: 237px;">

				<ul id="foo5" style="height:100%">
					<?php 
						$coun = 1;
					foreach($recipes1 as $recipe1) { 
						foreach ($recipe1['ImagesRecipe'] as $recip) {
							//if($recip['description']=='1'){		
						?>

						<li>
						
							
								<div class="row-fluid">
									
										<?php 	
										echo $this->Html->link($this->Html->image("images_recipe/filename/".$recip['filename']."",array('style'=>'width:253px;height: auto;')),array('controller' => 'Recipes', 'action' => 'select1',$recipe1['Recipe']['id'],$coun++),array('escape' => false , 'class' => 'brand')); 	
										
			    	    				?>
									
								</div>
								<div class="row-fluid">
									<div style="font:icon;">
										<?php 		
											echo "<p style='color:#1DB8D3;background:#F8F6EA'>".$this->Html->image("algunas-sugerencias-cuchillo-tenedor.jpg").$recipe1['Recipe']['title']."</p>";
				    	    			?>				    	    				
									</div>
								</div>
						
						</li>
					<?php //}
					break;
					  		}
					  		}	 ?>

				</ul>
				<div class="clearfix"></div>
			</div>




		</div>
	</div>

	   </div>
	</div>
</div>

