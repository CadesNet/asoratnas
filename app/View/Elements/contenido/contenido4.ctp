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
	<?php foreach ($categories as $category){ ?>
		<div class="span9">
					<div class="row-fluid">
							<div class="span1">	
								<?php

								foreach ($category['ImagesCategory'] as $ImagesCategory) {
								if($ImagesCategory['type']=='Tres'){						
								echo '<h1>'.$this->Html->image("images_category/filename/".$ImagesCategory['filename']."").'</h1>';
								}
								}

								?>

							</div>
							<div class="span11">
								<div class="row-fluid">
									<div class="span12">
										<h3>
									<?php echo $this->Html->link($category['Category']['name']."&nbsp;&nbsp;&nbsp;&nbsp;", array( 'controller' => 'Items', 'action' => "select",$category['Category']['id']),array('escape' => false,'class' => 'brand producttitle','style' => "color:".$category['Category']['description']."; text-decoration: none;border-bottom: 8px solid ".$category['Category']['description'].";"));  
										?>
									</h3>
									</div>
								</div>
							</div>
					</div>
					
					<div class="row-fluid" style="margin-top: 30px;">

					<?php
						$img = null;
					 foreach ($items as $item) { ?>
					<div class="span11 offset1 cuadrodetalle" >
						<div class="row-fluid" >
							<div class="span6">
								<div class = "imagendetalle"> 
								<?php foreach ($item['ImagesItem'] as $image): ?>
								<?php echo $this->Html->image("images_item/filename/".$image['filename']."") ?>
								</div>
								<?php 
								$img = $image['filename'];
									break;
								endforeach ?>
							</div>
							<div class="span6" >
							<?php echo $this->Form->create(null, array('action' => 'select1')); ?>
								<div class="row-fluid">
									<div class="span12">
										<h3 class = "itemnameCotiza"><?php echo $item['Item']['name'] ?></h3>
									</div>
								</div>
								<div class="row-fluid">
									<div class="span12">
												<p class = "itemdescriptionCotiza"><?php echo $item['Item']['presentacion'] ?></p>
									</div>
								</div>
								<div class="row-fluid">
									
									<div class="span3">
										<h5>Cantidad</h5>
									</div>
									<div class="span9">	  									
		    										<?php 
													echo $this->Form->input('id',array('type' => 'hidden','default'=>  $item['Item']['id']));
													echo $this->Form->input('img',array('type' => 'hidden','default'=>  $img));
													echo $this->Form->input('name',array('type' => 'hidden','default'=>  $item['Item']['name']));


													echo $this->Form->input('cantidad',array('label' => '','type' => 'text','placeholder' => 'cantidad'));
													?>
									</div>
									
								</div>
								<div class="row-fluid">
									<div class="span12">
										<?php echo $this->Form->end(array('label' => __('&nbsp;&nbsp;&nbsp;&nbsp;Cotizar&nbsp;&nbsp;&nbsp;&nbsp;', true), 'escape' => false ,'class' => 'ok btn btn-info btn-large')); ?>
									</div>
								</div>

							</div>
						</div>
					

						<br>
						<br>
						<div class="row-fluid">
							<div class="span3 offset9" >
								<p>Facebook</p>
							</div>
						</div>
						<br>
						<br>
						<div class="row-fluid">
							<div class="span12 itemtext">
							  <?php echo $item['Item']['description']; ?>
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
							echo $this->Html->link("Volver", array( 'controller' => 'Items', 'action' => "select",$category['Category']['id']),array('escape' => false , 'class' => 'brand','style'=>'color: #911a21;
 	text-decoration: none'));  
					    	    ?>
					    	 </h4>
							</div>
						</div>	
					</div>
					<?php } ?>
					</div>
				
			

		</div>
		<? } ?>
			
						
		<div class="span3">
		<div class="row-fluid" >
			
			<div class="span12 " >
 				
 				<?php if($ads['Ad']['type'] !='video'){ 
					 echo $this->Html->image('ad/filename/'.$ads['Ad']['filename']);
				} else{ ?>
					<iframe src= <?php echo $ads['Ad']['link'] ?> frameborder="0" allowfullscreen></iframe>
				 <?php } ?>
				
				<br>
				<br>
				<br>
			</div>				
			<div class="span12 cuadrorecetad" style="text-align:center;">
				<div class="row-fluid" style="text-align:left;" >
					<div class="span12" >
						<h3 style="color: #2FA4B8">&nbsp;&nbsp;La receta del dia</h3>
					</div>
					
				</div>
				<div class="row-fluid" >
					<div class="span12">
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
						<h3 style="color: #2FA4B8"><?php echo $recipes['Recipe']['title'] ?></h3>
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
		</div>
	</div>
	<div class="row-fluid">
						<div class="span1" style="text-align: right;">
							<h3>
							<?php echo $this->Html->image("sugerencia.PNG")?>
							</h3>
						</div>
						<div class="span11">
								<h3>
								<?php echo $this->Html->link("Algunas sugerencias para degustar en familia&nbsp;&nbsp;&nbsp;&nbsp;", array( 'controller' => 'recipes', 'action' => "select"),array('escape' => false,'class' => 'brand producttitle1','style' => 'text-decoration: none;'));  
										?>
								</h3>
								<br>
								<br>
						</div>
	</div>
	<div class="row-fluid">
		<div class="span12">

			<div class="list_carousel responsive" style="height:300px">

				<ul id="foo5" style="height:100%">
					<?php foreach($recipes1 as $recipe1) { 
						foreach ($recipe1['ImagesRecipe'] as $recip) {
							//if($recip['description']=='1'){		
						?>

						<li>
						
							<div class="span12">
								<div class="row-fluid">
									<div class="span12">
										<?php 		
										echo $this->Html->image("images_recipe/filename/".$recip['filename']."");
			    	    				?>
									</div>
								</div>
								<div class="row-fluid">
									<div class="span11 offset1" style="font:icon;">
										<?php 		
											echo $this->Html->image("imgrec.PNG");echo $recipe1['Recipe']['title'];
				    	    			?>				    	    				
									</div>
								</div>
							</div>
						
						</li>
					<?php //}
					break;
					  		}
					  		}	 ?>

				</ul>
			</div>




		</div>
	</div>
</div>
