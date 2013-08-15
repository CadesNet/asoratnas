<?php echo $this->element('carusel/carrusel2'); ?>
<div class="container">
	<div class="row-fluid">
		<div class="span9">
			<div class="row-fluid">
				
			
						<div class="span1">
							<?php echo $this->Html->image("sugerencia.png")?>
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
							<?php echo $this->Html->link(__('Volver a los veneficios'), array('controller' => 'Benefits', 'action' => 'select1'), array('class' => 'btn btn-info ')); ?>
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
		
			<div class="span12 ">
				<?php echo $this->Html->image("noticias/1.png")?>
				
			
			<div class="span12">
				<?php echo $this->Html->image("noticias/1.png")?>
				
			</div>
			 
        

            <div class="span12" style="text-align:center;">
					<div class="videoUiWrapper thumbnail">
					  <video width="250" height="214" id="demo1">
                            <source src="http://ia700305.us.archive.org/18/items/CopyingIsNotTheft/CINT_Nik_H264_720.ogv" type="video/ogg"> 
                            <source src="http://ia700305.us.archive.org/18/items/CopyingIsNotTheft/CINT_Nik_H264_720_512kb.mp4" type="video/mp4">
					    Your browser does not support the video tag.
					  </video>
					</div>
				
			</div>			
		
	</div>
</div>
</div>
</div>

<script type="text/javascript" >
            $('#demo1').videoUI();
        </script>