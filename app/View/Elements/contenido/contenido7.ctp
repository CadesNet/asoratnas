
			<div class="row-fluid">
						<div class="span12">
							<div class="row-fluid">
								<div class="span12">
									<h2 class = "producttitle">Contactos</h2>
								</div>
							</div>
							
							<div class="row-fluid" >
								<div class="span12 cuadrodireccion">
									<div class = "dirciudad">
								<?php echo $branch1['Branch']['name'] ?>
								</div>
								<br> 
								<?php echo $branch1['Branch']['type'] ?>
								
									<div class="row-fluid">
										<div class="span1">
											<div class = "tipodedireccion">Direccion: </div>
										</div>
										<div class="span11">
											<?php echo $branch1['Branch']['address'] ?>
										</div>
									</div>
								
									<div class="row-fluid">
										<div class="span1">
										<div class = "tipodedireccion">Telefono: </div> 
										</div>
										<div class="span11">
											<?php echo $branch1['Branch']['phone'] ?>
										</div>
									</div>

									<div class="row-fluid">
										<div class="span1">
										<div class = "tipodedireccion">Telf(fax):</div>
										</div>
										<div class="span11">

											<?php echo $branch1['Branch']['fax'] ?>
										</div> 
									</div>

									<div class="row-fluid">
										<div class="span1">
											<div class = "tipodedireccion">Telf Movil: </div>
										</div>
										<div class="span11">
									<?php echo $branch1['Branch']['movil'] ?>
										</div>
									</div>
						

									<div class="row-fluid">
										<div class="span1">
											<div class = "tipodedireccion">Contacto: </div>
										</div>
										<div class="span11">
											<?php echo $branch1['Branch']['contact'] ?>
										</div>
									</div>
							
								</div>
							</div>
							<div class="row-fluid">
								<ul class = "thumbnails2">
								<?php foreach ($branch as $branches) { ?>
								<li class="span4 cuadrodireccion">
										<div class = "dirciudad">	<?php echo $branches['Branch']['name'] ?> </div>
									
											<div><?php echo $branches['Branch']['type'] ?></div>
										
									<div class="row-fluid">
										<div class="span3">
											<div class = "tipodedireccion">Direccion: </div>
										</div>
										<div class="span9">
											<?php echo $branches['Branch']['address'] ?>
										</div>
									</div>
									<div class="row-fluid">
										<div class="span3">
										<div class = "tipodedireccion">Telefono: </div> 
										</div>
										<div class="span9">
											<?php echo $branches['Branch']['phone'] ?>
										</div>
									</div>

									<div class="row-fluid">
										<div class="span3">
										<div class = "tipodedireccion">Telf(fax):</div>
										</div>
										<div class="span9">

											<?php echo $branches['Branch']['fax'] ?>
										</div> 
									</div>

									<div class="row-fluid">
										<div class="span3">
											<div class = "tipodedireccion">Telf Movil: </div>
										</div>
										<div class="span9">
									<?php echo $branches['Branch']['movil'] ?>
										</div>
									</div>	

									<div class="row-fluid">
										<div class="span3">
											<div class = "tipodedireccion">Contacto: </div>
										</div>
										<div class="span9">
											<?php echo $branches['Branch']['contact'] ?>
										</div>
									</div>
								
							</li>
								<?php } ?>
							</ul>
							</div>

						</div>
					</div>
		

						<div class="row-fluid">
							<div class="span12">
								<div class="consultations form">
					<?php echo $this->Form->create('Consultation'); ?>
						<fieldset>
							<legend><?php echo __('Add Consultation'); ?></legend>
						<?php
							echo $this->Form->input('name');
							echo $this->Form->input('address');
							echo $this->Form->input('phone');
							echo $this->Form->input('email');
							echo $this->Form->input('message');
						?>
						</fieldset>
					<?php echo $this->Form->end(__('Submit')); ?>
					</div>
							</div>
						</div>
	<div class="row-fluid">
		<div class="span12">

<div class="list_carousel responsive" style="height:90px">

				<ul id="foo5" style="height:100%">
					<?php foreach($supermarkets as $supermarket) { ?>
						<li style="width:80px">
						<?php 
					echo $this->Html->link($this->Html->image("supermarket/filename/".$supermarket['Supermarket']['filename'], array("alt" => "Empresa")),$supermarket['Supermarket']['link'],array('escape' => false , 'class' => 'brand'));  
			    	    ?>
						</li>
						<?php }	 ?>

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
