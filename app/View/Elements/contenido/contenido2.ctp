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
	<div class="row">
		<div class="span8">
			<div class="row">

				<?php 
				foreach ($categories as $category){
					?>

				<div class="span4">
					<div class="row">
						<div class="span1">
							<?php 
							foreach ($category['ImagesCategory'] as $ImagesCategory) {
							if($ImagesCategory['type']=='Uno'){						
							echo $this->Html->image("images_category/filename/".$ImagesCategory['filename']."");
							}
							}
							?>
						</div>
						<div class="span3">
							<div class="row">
								<div class="span3">
									<h3 style="line-height: 20px;">
										<?php echo $this->Html->link(($category['Category']['name']), array('controller' => 'Items', 'action' => 'select',$category['Category']['id'])) ?>
									</h3>
								</div>
							</div>
							<div class="row" >
								<div class="span3" style="height: 6px;
background-color: black;">
								</div>
							</div>
							<br>
							<div class="row">
								<div class="span3">
								
								<?php foreach ($category['Item'] as $value) { ?>
								<div class="row">
									<div class="span3">
									<?php echo $this->Html->link(($value['name']), array('controller' => 'Quotes', 'action' => 'select',$category['Category']['id'],$value['id'])) ?>
									</div>
								</div>
								<div class="row">
										<div class="span3">
									 	<?php echo $value['presentacion'] ?>
										</div>
									</div>
								<?php } ?>
								</div>
							</div>
						</div>
					</div>
				</div>
			<?php } ?>
			</div>
			<br>
			<br>
			<div class="row">
				<div class="span9" style="background-color: aqua;">
					<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Lorem ipsum dolor sit amet, consectetur adipisicing elit. Officiis, quaerat beatae nesciunt iure nemo odio voluptatum</p>
				</div>
				
			</div>
			<div class="row">
				<div class="span9">
<div class="list_carousel responsive" style="height:270px">

				<ul id="foo5" style="height:100%">
					<?php foreach($categories as $category) { 
						foreach ($category['ImagesCategory'] as $ImagesCategory) {
							if($ImagesCategory['type']=='Dos'){		
						?>

						<li>
						<?php 											
							echo $this->Html->image("images_category/filename/".$ImagesCategory['filename']."");
			    	    ?>
						</li>
					<?php }
					  		}
					  		}	 ?>

				</ul>
			</div>


				</div>
			</div>
		</div>
						
		<div class="span3 offset1">
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
	</div>
</div>