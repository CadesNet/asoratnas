<?php echo $this->element('carusel/carrusel1'); ?>
<div class="container">
    <div class="row-fluid">
		<div class="span7" >
			<div class="row-fluid" >
					<h3 class = "benefitstitle">Beneficios para  salud</h4>
			</div>
			<?php foreach($benefits as $benefit): ?>

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
								<p class ="benefitsdescription"><? echo $benefit['Benefit']['description'] ?></p>
							</div>
							<div class="row-fluid" style="">
								<a href="" class="btn btn-success"> saber mas..</a>
							</div>
							<br>

						</div>
					</div>
			</div>
			<?php endforeach; ?>
				<br>
			
				<div class="row-fluid" style="text-align: right;">
					<a href="">leer mas articulos</a>
				</div>
				<div class="row-fluid" style="">
					<p>encuentranos en..</p>
					
				</div>
				
			<div class="list_carousel">
				<ul id="foo1">
					<?php foreach($supermarkets as $supermarket) { ?>
						<li>
						<?php 
					echo $this->Html->link($this->Html->image("supermarket/filename/".$supermarket['Supermarket']['filename'], array("alt" => "Empresa")),$supermarket['Supermarket']['link'],array('escape' => false , 'class' => 'brand'));  
			    	    ?>
						</li>
						<?php }  
						 ?>
					?>

				</ul>
				<div class="clearfix"></div>
				<div id="timer1" class="timer"></div>
			</div>




<script language="JavaScript">
$(function() {
				//	Basic carousel + timer, using CSS-transitions
				$('#foo1').carouFredSel({
					auto: {
						pauseOnHover: 'resume',
						progress: '#timer1'
					}
				}, {
					transition: true
				});
			});
</script>



			
			</div>
			<div class="span5">
				<div class="row-fluid" >
					<div class="span12">
						<h2>la receta del dia</h2>
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
						<h3><?=$recipes['Recipe']['title'] ?></h3>
					</div>
				</div>
				<div class="row-fluid" >
					<div class="span12">
						<h5><?=$recipes['Recipe']['time'] ?> Minitos - <?=$recipes['Recipe']['portion'] ?> Personas</h5>
					</div>
				</div>				
				<div class="row-fluid">
					<div class="span5">
						<a class="btn" href="#">Ver receta</a>
					</div>
					
				</div>
			</div>
			
	</div>
</div>



