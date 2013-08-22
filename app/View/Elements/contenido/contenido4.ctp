<div class="container">
  <div class="row-fluid">
    <section id="contenido">
   <section id="principal">
<article id="galeria-inicio">
         <div class="flexslider">
      <ul class="slides">
      <?php foreach ($carousel as $carousels) { ?>
    
        <li>
               <?php echo $this->Html->image("carousel/filename/".$carousels['Carousel']['filename']."");  ?> 
               <p class="flex-caption">bextlam.com | mmmmmmm</p>
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
				
				<?php  foreach ($categories as $category) { ?>
				
					<div class="row-fluid">
						<div class="span1">
								<?php foreach ($category['ImagesCategory'] as $ImagesCategory) {
							if($ImagesCategory['type']=='Tres'){						
							echo $this->Html->image("images_category/filename/".$ImagesCategory['filename']."");
							}
							}

							?>
						</div>
						<div class="span11">
							<div class="row-fluid">
								<div class="span12">
									<h3 class = "producttitle"><?php echo $category['Category']['name'] ?></h3>
								</div>
							</div>
							
							<br>
						</div>
					</div>
				</div>
				<?php } ?>

				<?php
					$img = null;
				 foreach ($items as $item) { ?>
				<div class="span12 cuadrodetalle" >
					<div class="row-fluid">
						<div class="span5">
							<div class = "imagendetalle"> 
							<?php foreach ($item['ImagesItem'] as $image): ?>
							<?php echo $this->Html->image("images_item/filename/".$image['filename']."") ?>
							</div>
							<?php 
							$img = $image['filename'];
								break;
							endforeach ?>
						</div>
						<div class="span7" >
							<div class="row-fluid">
								<div class="span12">
									
										
											<h3 class = "itemname"><?php echo $item['Item']['name'] ?></h3>
											<p class = "itemdescription"><?php echo $item['Item']['presentacion'] ?></p>
	    								<?php 	
	    										echo $this->Form->create(null, array('action' => 'select1')); ?>
	    										<fieldset>	    										
	    										<?php 
												echo $this->Form->input('id',array('type' => 'hidden','default'=>  $item['Item']['id']));
												echo $this->Form->input('img',array('type' => 'hidden','default'=>  $img));
												echo $this->Form->input('name',array('type' => 'hidden','default'=>  $item['Item']['name']));
												echo $this->Form->input('cantidad',array('type' => 'text','placeholder' => 'cantidad'));
												?>
												</fieldset>
												<?php
												echo $this->Form->end('Cotizar'); 
										?>
									<!--<form class="form-horizontal">
										<h3 class = "itemname"><?php ?></h3>
										<p class = "itemdescription"><?php  ?></p>
									<div class = "span8 offset3">
	  									<div class="control-group">
	    									<label class="control-label" for="inputCantidad" style="width: 55px;margin-right: 5px;">Cantidad</label>
	    									
	      										<input type="text" id="inputCantidad" placeholder="Camtidad" style="width: 200px">
	  									</div>
	  									<div class="control-group">
	      										<button type="submit" class="btn" style="width: 144px">Cotizar</button>
	  									</div>
  									</div>
									</form> -->


								</div>
							</div>
								
						</div>
				</div>
				<br>
				<br>
				<div class="row-fluid">
					<div class="span7 offset10" >
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
						<?php 
					echo $this->Html->link("Volver", array( 'controller' => 'Items', 'action' => "select",$category['Category']['id']),array('escape' => false , 'class' => 'brand'));  
			    	    ?>
					</div>
				</div>	
			</div>
			</div>
			<?php 
		}
	?>

			
						
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
	<div class="row-fluid">
						<div class="span1">
							<?php echo $this->Html->image("sugerencia.PNG")?>
						</div>
						<div class="span11">
							<div class="row-fluid">
								<div class="span11">
									<h3 class = "producttitle">Algunas sugerencias para degustar en familia</h3>
								</div>
							</div>
							
							<br>
						</div>
	</div>
	<div class="row-fluid">
		<div class="span12">
<?php

$datos="";
foreach($recipes1 as $recipe1){
	foreach ($recipe1['ImagesRecipe'] as $recip) {

 $datos .= "/santarosa/img/images_recipe/filename/".$recip['filename'].'","'.$recipe1['Recipe']['id'].'","';
 break;

 }

}



				  
?>


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
									<div class="span2" style="text-aling:center">
										<?php 		
										echo $this->Html->image("imgrec.PNG");
			    	    				?>
									</div>
									<div class="span7">
									<p style="font:icon;"><?php 		
										echo $recipe1['Recipe']['title'];
			    	    				?></p>
										
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

		<script type="text/javascript" language="javascript">
			$(function() {
				//	Fuild layout, centering the items
				$('#foo5').carouFredSel({
					width: '100%',
					scroll: 1
				});

			});
		</script>


		</div>
	</div>


</div>