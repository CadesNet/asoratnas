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
				
			
						<div class="span1">
							<?php echo $this->Html->image("sugerencia.PNG")?>
						</div>
						<div class="span11">
							<div class="row-fluid">
								<div class="span12">
									<h3 class = "recipetitle">nam e</h3>
								</div>
							</div>
							
							<br>
					
				</div>
			</div>

			<div class="row-fluid">
				<div class="span11 offset1">
					<?php
						$coun = 1;
					 foreach ($benefits as $benefit) { ?>
			<div class= "itemreceta">
				<div  class="row-fluid">
				<div class="span5">
				<?php echo $this->Html->image("benefit/filename/".$benefit['Benefit']['filename'].""); ?>
				</div>
				<div class="span7">
					<div class="row-fluid">
						<div class="span12">
							<h3 class = "recipeitemtitle"><?php echo $benefit['Benefit']['title'] ?></h3>
						</div>
					</div>
					
					<div class="row-fluid">
						<div class="span5">
							<?php echo $this->Html->link(__('Volver a los Beneficios'), array('controller' => 'Benefits', 'action' => 'select1'), array('class' => 'btn btn-info ')); ?>
						</div>
					</div>
				</div>
				<div class="span1">
					
				</div>
				</div>
				<div class="row-fluid">
					<div class="span7">
						<?php echo $benefit['Benefit']['description'] ?>
					</div>
					
				</div>
			
			</div>
			<?} ?>
<div class="paginator">
<?php 


// Shows the next and previous links
echo $this->Paginator->prev('« Anterior Receta', null, null, array('class' => 'disabled'));
  //Shows the page numbers
echo $this->Paginator->numbers();
echo $this->Paginator->next('Siguiente Receta »', null, null, array('class' => 'disabled'));

// prints X of Y, where X is current page and Y is number of pages
//echo $this->Paginator->counter();
        ?>
</div>


			
				</div>

			</div>

			

		</div>
		<div class="span3">
		
<?php foreach ($ads as $value) { ?> 
			<div class="span12 " >

				 <?php if($value['Ad']['type'] !='video'){ 
					 echo $this->Html->image('ad/filename/'.$value['Ad']['filename']);
				} else{ ?>
					<iframe  src= <?=$value['Ad']['link'] ?> frameborder="0" allowfullscreen></iframe>
				 <?php } ?>
				
				<br>
				<br>
				<br>
				

			</div>		
		<?php } ?>		
		
	</div>
</div>
</div>
</div>