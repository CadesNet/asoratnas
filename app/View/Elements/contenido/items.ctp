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
					<?php foreach ($categories as $category): ?>
					<?php

					foreach ($category['ImagesCategory'] as $ImagesCategory) {
					if($ImagesCategory['type']=='Tres'){						
					echo '<h3>'.$this->Html->image("images_category/filename/".$ImagesCategory['filename']."").'</h3>';
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
			
			<div class = "row-fluid">
				<ul class = "thumbnails" style="margin-top: 30px;">
				<li class="span5"></li>
				<li class="span5"></li>
				<?php $a=1;

				 foreach ($category['Item'] as $item) { 
					$a++;
						if ($a%2==0) {	?>

				<li class="span5 offset1 cuadroproducto" style="margin-right: 20px;">
					<div class="row-fluid" style="text-align: center">
						<div class="span12">
							<?php foreach ($item['ImagesItem'] as $image): ?>
							<?php echo $this->Html->image("images_item/filename/".$image['filename']."") ?>
							<?php 
								break;
							endforeach ?>
						</div>
						<div class="span12 ">
							<!--<h3 class = "itemname"><?php //echo $item['name'] ?> </h3> -->
							<h5 style = <?="color:".$category['Category']['description'].";"?> ><?php echo $item['name'] ?> </h5>
						</div>
						<div class="span12 ">
							<p class = "itemdescription"><?php echo $item['description'] ?> </p>
						</div>
						<div class="span12">
							<?php echo $this->Html->link(__('Saber mas..'), array('controller' => 'Quotes', 'action' => 'select',$category['Category']['id'],$item['id']), array('class' => 'btn btn-large btn-danger','style' => "background:".$category['Category']['description'].";")); ?>
						</div>
					</div>

				</li>
						<?php }
						else{
						 ?>

				<li class="span5 cuadroproducto">
					<div class="row-fluid" style="text-align: center">
						<div class="span12">
							<?php foreach ($item['ImagesItem'] as $image): ?>
							<?php echo $this->Html->image("images_item/filename/".$image['filename']."") ?>
							<?php 
								break;
							endforeach ?>
						</div>
						<div class="span12 ">
							<h5 style = <?="color:".$category['Category']['description'].";"?> ><?php echo $item['name'] ?> </h5>
						</div>
						<div class="span12 ">
							<p class = "itemdescription"><?php echo $item['presentacion'] ?> </p>
						</div>
						<div class="span12">
							<?php echo $this->Html->link(__('Saber mas..'), array('controller' => 'Quotes', 'action' => 'select',$category['Category']['id'],$item['id']), array('class' => 'btn btn-large btn-danger','style' => "background:".$category['Category']['description'].";")); ?>
						</div>
					</div>

				</li>
			
			<?php
			 } 

			 } ?>


			<?php endforeach; ?>
	
			</ul>
		</div>

			
		</div>
				
		<div class="span3">
		<div class="row-fluid" >
			
			<div class="span12" style="margin: 0;"  >

					  <?php if($ads['Ad']['type'] !='video'){ 
					 echo $this->Html->image(('ad/filename/'.$ads['Ad']['filename']),array('style'=>'height:380px'));
				} else{ ?>
					<iframe width="100%" height="180px" src= <?=$ads['Ad']['link'] ?> frameborder="0" allowfullscreen></iframe>
				 <?php } ?>
				
				<br>
				<br>
				<br>
			</div>		
			



			<div class="span12 cuadrorecetad" style="text-align:center;margin: 0;">
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
</div>

