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
										<?php echo $this->Html->link(($category['Category']['name']), array('controller' => 'Items', 'action' => 'select',$category['Category']['id']), array('style' => "color:".$category['Category']['description']."; text-decoration: none;")) ?>
									</h3>
								</div>
							</div>
							<div class="row" >
								<div class="span3" <?php echo "style='height: 6px;
background-color:".$category['Category']['description']."'"?> >
								</div>
							</div>
							<br>
							<div class="row">
								<div class="span3">
								
								<?php foreach ($category['Item'] as $value) { ?>
								<div class="row">
									<div class="span3">
									<?php echo $this->Html->link(($value['name']), array('controller' => 'Quotes', 'action' => 'select',$category['Category']['id'],$value['id']),array('style' => "color:".$category['Category']['description']."; text-decoration: none;")) ?>
									</div>
								</div>
								<div class="row">
										<div class="span3">
									 	<h5 style="color:#807F7C"><?php echo $value['presentacion'] ?></h5>
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
					<h5>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Disfruta de toda la variedad de la carne mas saludable, nutritiva y dietetica</h5>
				</div>
				
			</div>
			<div class="row">
				<div class="span9">
<div class="list_carousel responsive" style="height:270px">

				<ul id="foo5" style="height:100%;">
					<?php foreach($categories as $category) { 
						foreach ($category['ImagesCategory'] as $ImagesCategory) {
							if($ImagesCategory['type']=='Dos'){		
						?>
						<li style="border-right: #D4D5D5 1px solid;">
						<?php 											
							echo $this->Html->image("images_category/filename/".$ImagesCategory['filename']."",array('style' => 'width:240px' ));
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
			
			<div class="span12 " style="margin: 0;"  >

				  <?php if($ads['Ad']['type'] !='video'){ 
					 echo $this->Html->image('ad/filename/'.$ads['Ad']['filename']);
				} else{ ?>
					<iframe src= <?php echo $ads['Ad']['link'] ?> frameborder="0" allowfullscreen></iframe>
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
</div>