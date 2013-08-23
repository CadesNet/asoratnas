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
		<div class="span7" >
			<div class="row-fluid" >
					<h3 class = "benefitstitle">Beneficios para  salud</h4>
			</div>

			<?php 
			
			$coun=0;
			foreach($benefits as $benefit): ?>
			<div class="row-fluid" >		
			<div class= "benefitsbody">		
						<div class="span3" style="">
							<a href=""><?php echo $this->Html->image("benefit/filename/".$benefit['Benefit']['filename']."")?></a>
							<br><br>
						</div>
						<div class="span9" >
							<div class="row-fluid" >
								<h4 class = "benefitssubtitle"><? echo $benefit['Benefit']['title'] ?></h4>
							</div>
							<div class="row-fluid" style="">
								<p class ="benefitsdescription">
								<?php echo substr($benefit['Benefit']['description'], 0, 140) ?> 
								</p>
							</div>
							<div class="row-fluid" style="">

							<?php echo $this->Html->link(__('Saber mas..'), array('controller' => 'Benefits', 'action' => 'select2',$benefit['Benefit']['id'],$coun++), array('class' => 'btn btn-info btn-large'));
							 ?>
								
							</div>
							<br>

						</div>
					</div>
			</div>
			<?php endforeach; ?>
				<br>
			
				<div class="row-fluid" style="text-align: right;">
				<?php echo $this->Html->link(__('Leer todos los articulos'), array('controller' => 'Benefits', 'action' => 'select1'));
							 ?>
				</div>
				<div class="row-fluid" style="">
					<p>Encuentranos en..</p>
					
				</div>
				
<div class="list_carousel responsive" style="height:90px">
			
				<ul id="foo5" style="height:100%">
					<?php foreach($supermarkets as $supermarket) { ?>
						<li style="width:90px">
						<?php 
					echo $this->Html->link($this->Html->image("supermarket/filename/".$supermarket['Supermarket']['filename'], array("alt" => "Empresa")),$supermarket['Supermarket']['link'],array('escape' => false , 'class' => 'brand'));  
			    	    ?>
						</li>
						<?php }	 ?>

				</ul>
			</div>
			</div>
			<div class="span5">
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



