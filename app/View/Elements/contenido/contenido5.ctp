<?php echo $this->element('carusel/carrusel2'); ?>
<div class="container">
	<div class="row">

		<div class="span9">
			<div class="row-fluid">

				
				<div class="span8">
					<div class="row">
						<div class="span1">
							<?php echo $this->Html->image("sugerencia.png")?>
						</div>
						<div class="span3">
							<div class="row">
								<div class="span3">
									<h3 style="line-height: 20px;">nam e</h3>
								</div>
							</div>
							<div class="row" >
								<div class="span8" style="height: 6px;
background-color: black;">
								</div>
							</div>
							<br>
						</div>
					</div>
				</div>
			</div>

			<div class="row-fluid">
				<div class="span11 offset1">

					<?php
						$coun = 1;
					 foreach ($recipes as $recipes) { ?>
						
				<div  class="row">
				<div class="span3">
						<?php 
						foreach ($recipes['ImagesRecipe'] as $ImagesRecipe) {
						echo $this->Html->image("images_recipe/filename/".$ImagesRecipe['filename']."");
						break;
						} ?>
				</div>
				<div class="span3">
					<div class="row">
						<div class="span3">
							<h3><?php echo $recipes['Recipe']['title'] ?></h3>
						</div>
					</div>
					<div class="row">
						<div class="span3">
							<p><?php echo $recipes['Recipe']['time'] ?> min</p>
						</div>
					</div>
					<div class="row">
						<div class="span3">
							<p><?php echo $recipes['Recipe']['portion'] ?>personas</p>
						</div>
					</div>
					<br>
					<br>
					<br>
					<br>
					<br>
					<br>
					<div class="row">
						<div class="span3">
							<?php echo $this->Html->link(__('Ver receta'), array('controller' => 'Recipes', 'action' => 'select1',$recipes['Recipe']['id'],$coun++), array('class' => 'btn btn-danger btn-large')); ?>
						</div>
					</div>
				</div>
				<div class="span2">
					
				</div>
			</div>
			<?} ?>
				
			<div class="paginator">
<?php 


// Shows the next and previous links
echo $this->Paginator->prev('« Previous', null, null, array('class' => 'disabled'));
  //Shows the page numbers
echo $this->Paginator->numbers();
echo $this->Paginator->next('Next »', null, null, array('class' => 'disabled'));

// prints X of Y, where X is current page and Y is number of pages
//echo $this->Paginator->counter();
        ?>
</div>
				</div>
			</div>

			

		</div>
		<div class="span3">
		<div class="row-fluid">
			<div class="span12 " >
				<?php echo $this->Html->image("noticias/1.png")?>
				<br>
				<br>
				<br>
			</div>
<div class="span12 " >
				<?php echo $this->Html->image("noticias/1.png")?>
				<br>
				<br>
				<br>
			</div>
			 
        

            <div class="span12 " >
					<div class="videoUiWrapper thumbnail">
					  <video width="250" height="214" id="demo1">
                            <source src="http://ia700305.us.archive.org/18/items/CopyingIsNotTheft/CINT_Nik_H264_720.ogv" type="video/ogg"> 
                            <source src="http://ia700305.us.archive.org/18/items/CopyingIsNotTheft/CINT_Nik_H264_720_512kb.mp4" type="video/mp4">
					    Your browser does not support the video tag.
					  </video>
					</div>
				<br>
				<br>
				<br>
			</div>			
		</div>
		</div>
	</div>
</div><script type="text/javascript" >
            $('#demo1').videoUI();
        </script>