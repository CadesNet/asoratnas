<<<<<<< HEAD

=======
<div class="container">
>>>>>>> b6abcb8f17127e7992c4b9391ac8f4dc08532886
  <div class="row-fluid">
    <section id="contenido">
   <section id="principal">
<article id="galeria-inicio">
         <div class="flexslider">
<<<<<<< HEAD
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
=======
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
>>>>>>> b6abcb8f17127e7992c4b9391ac8f4dc08532886
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
		<div class="span8">
			<div class="row">

				<?php 
				foreach ($categories as $category){
					?>

				<div class="span4">
					<div class="row">
<<<<<<< HEAD
							<div class="span1">
								<?php 
								foreach ($category['ImagesCategory'] as $ImagesCategory) {
								if($ImagesCategory['type']=='Uno'){						
								echo $this->Html->image("images_category/filename/".$ImagesCategory['filename']."");
								}
								}
								?>
							</div>
=======
						<div class="span1">
							<?php 
							foreach ($category['ImagesCategory'] as $ImagesCategory) {
							if($ImagesCategory['type']=='Uno'){						
							echo $this->Html->image("images_category/filename/".$ImagesCategory['filename']."");
							}
							}
							?>
						</div>
>>>>>>> b6abcb8f17127e7992c4b9391ac8f4dc08532886
							<div class="span3">
								<div class="row">
									<div class="span3">
										<h4 style="line-height: 20px;">
<<<<<<< HEAD
											<?php echo $this->Html->link(($category['Category']['name']), array('controller' => 'Categories', 'action' => 'select1',$category['Category']['id']), array('style' => "color:".$category['Category']['description']."; text-decoration: none;")) ?>
=======
											<?php echo $this->Html->link(($category['Category']['name']), array('controller' => 'Items', 'action' => 'select',$category['Category']['id']), array('style' => "color:".$category['Category']['description']."; text-decoration: none;")) ?>
>>>>>>> b6abcb8f17127e7992c4b9391ac8f4dc08532886
										</h4>
									</div>
								</div>
								<div class="row">
									<div class="span3"  style="height: 6px;background-color:<?php echo $category['Category']['description']?>" >
								</div>
								</div>
								<br>
								<div class="row">
									<div class="span3">
									
<<<<<<< HEAD
									<?php foreach ($category['Item'] as $item) { ?>
										<div class="row">
											<div class="span3">
											<?php echo $this->Html->link(($item['name']), array('controller' => 'Items', 'action' => 'select',$category['Category']['id'],$item['id']),array('style' => "color:".$category['Category']['description']."; text-decoration: none;")) ?>
=======
									<?php foreach ($category['Item'] as $value) { ?>
										<div class="row">
											<div class="span3">
											<?php echo $this->Html->link(($value['name']), array('controller' => 'Quotes', 'action' => 'select',$category['Category']['id'],$value['id']),array('style' => "color:".$category['Category']['description']."; text-decoration: none;")) ?>
>>>>>>> b6abcb8f17127e7992c4b9391ac8f4dc08532886
											</div>
										</div>
										<div class="row">
												<div class="span3">
<<<<<<< HEAD
											 	<p style="color:#807F7C">Presentacíon: 

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
=======
											 	<h5 style="color:#807F7C"><?php echo $value['presentacion'] ?></h5>
>>>>>>> b6abcb8f17127e7992c4b9391ac8f4dc08532886
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
<<<<<<< HEAD
				<div class="span9" style="background-color: #E8E4D6;">
					<h5 style="color:#53A08D">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Disfruta de toda la variedad de la carne mas saludable, nutritiva y dietetica</h5>
=======
				<div class="span9" style="background-color: aqua;">
					<h5>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Disfruta de toda la variedad de la carne mas saludable, nutritiva y dietetica</h5>
>>>>>>> b6abcb8f17127e7992c4b9391ac8f4dc08532886
				</div>
				
			</div>
			<div class="row">
				<div class="span9">

<<<<<<< HEAD
					<div class="list_carousel responsive" style="background-color: transparent;height: 239px;">
=======
					<div class="list_carousel responsive" style="height: 237px;">
>>>>>>> b6abcb8f17127e7992c4b9391ac8f4dc08532886

						<ul id="foo5" style="height:100%">
								<?php foreach($categories as $category) { 
								foreach ($category['ImagesCategory'] as $ImagesCategory) {
									if($ImagesCategory['type']=='Dos'){		
								?>
									<li style="border-right: #D4D5D5 1px solid;width:235px">
									<?php 
<<<<<<< HEAD
										echo $this->Html->link($this->Html->image("images_category/filename/".$ImagesCategory['filename']."",array('style'=>'width:100%' )),array('controller' => 'Items', 'action' => 'select',$category['Category']['id']),array('escape' => false , 'class' => 'brand'));  
=======
										echo $this->Html->link($this->Html->image("images_category/filename/".$ImagesCategory['filename'].""),array('controller' => 'Items', 'action' => 'select',$category['Category']['id']),array('escape' => false , 'class' => 'brand'));  
>>>>>>> b6abcb8f17127e7992c4b9391ac8f4dc08532886
						    	    ?>
									</li>
								<?php }
							  		}
							  		}	 ?>

						</ul>
<<<<<<< HEAD
						<div class="clearfix"></div>
					</div>
				</div>	
			</div>
			


=======
					</div>
				</div>	
			</div>
>>>>>>> b6abcb8f17127e7992c4b9391ac8f4dc08532886

			

		</div>
						
		<div class="span3 offset1">
<<<<<<< HEAD

		<div class="row-fluid">
			
				<div class="span12 " style="margin: 0;" >

				 <?php if($ads['Ad']['type'] !='video'){ 
				echo $this->Html->image(('ad/filename/'.$ads['Ad']['filename']),array('class'=>'noticias'));
				} else{ ?>
				<iframe class="noticiavideo" src= <?=$ads['Ad']['link'] ?> frameborder="0" allowfullscreen></iframe>
				<?php } ?>
				<p></p>

				</div>
=======
			<div class="row-fluid" >
			
				<div class="span12 " style="margin: 0;"  >

					  <?php if($ads['Ad']['type'] !='video'){ 
						 echo $this->Html->image(('ad/filename/'.$ads['Ad']['filename']),array('style'=>'height:380px'));
						} else{ ?>
						<iframe width="100%" height="180px" src= <?=$ads['Ad']['link'] ?> frameborder="0" allowfullscreen></iframe>
					 <?php } ?>
					
					<br/>
					<br/>
					<br/>
					

				</div>		
			


>>>>>>> b6abcb8f17127e7992c4b9391ac8f4dc08532886


				<div class="span12 cuadrorecetad" style="text-align:center;margin: 0;">
					<div class="row-fluid" style="text-align:left;" >
						<div class="span12" >
<<<<<<< HEAD
							<h2 class="recipedia">&nbsp;&nbsp;La receta del dia</h3>
=======
							<h3 style="color: #2FA4B8">&nbsp;&nbsp;La receta del dia</h3>
>>>>>>> b6abcb8f17127e7992c4b9391ac8f4dc08532886
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
<<<<<<< HEAD

					<div class="sapn112">
						<div style="text-align: right">
				<?php echo $this->Html->link(__('Ver todas las recetas...'), array('controller' => 'Recipes', 'action' => 'select'),array('class'=>'verrecetas','style'=>'text-decoration: inherit;'));
							 ?>
						</div>
					</div>
			
=======
>>>>>>> b6abcb8f17127e7992c4b9391ac8f4dc08532886
			</div>
		</div>

	</div>
</div>