<div class="row-fluid">
	<div class="span12">
		<h3 style="color:#25A781;border-bottom: 8px solid #25A781;">Contactenos</h3>
	</div>
</div>
<br>
<br>
<div class="container" style="min-height: 800px;">
			<div class="row-fluid" style="color:#25A781;border-bottom: 2px solid #25A781;">
						<div class="span12 cuadrodireccion">
							<div class = "dirciudad">
								<?php echo $branch1['Branch']['name'] ?>
							</div>
							<br> 
							<?php echo $branch1['Branch']['type'] ?>
						
							<div class="row-fluid" style="text-align: center;">
								<div class="span12">
									<div class = "tipodedireccion">Direccion: <?php echo $branch1['Branch']['address'] ?>
									</div>
								</div>
							</div>
						
							<div class="row-fluid" style="text-align: center;">
								<div class="span12">
									<div class = "tipodedireccion">Telefono: <?php echo $branch1['Branch']['phone'] ?> Telf(fax): <?php echo $branch1['Branch']['fax'] ?>  Telf Movil: <?php echo $branch1['Branch']['movil'] ?> 
									</div> 
								</div>
							</div>

				
				

							<div class="row-fluid" style="text-align: center;">
								<div class="span12">
									<div class = "tipodedireccion">
									Contacto: <?php echo $branch1['Branch']['contact'] ?>
									</div>
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

			<div class="row-fluid">
				<div class="span12">
				<div class="consultations form cotizartext" style="width: 70%;background-color: #E4DDCA;margin-left: auto;margin-right: auto;">
					
		<?php echo $this->Form->create('Consultation'); ?>
			<fieldset class="offset1" >
				<legend> <h5 style="text-align: left;padding: 20px 0px 0px;"><?php echo __('Complete sus datos correctos para enviarle la cotizacion, gracias...'); ?></h5></legend>
				<div class="row-fluid">
			<div class="span3"><h5>Nombre Completo:</h5></div>
			<div class="span6" style="text-align: left;"><?php echo $this->Form->input('name',array('label'=>'','class' => 'cotizarfrm')); ?></div>
		</div>
		<div class="row-fluid">
			<div class="span3"><h5>Direccion:</h5></div>
			<div class="span6" style="text-align: left;"><?php echo $this->Form->input('address',array('type'=>'text','label'=>'','class' => 'cotizarfrm')); ?></div>
		</div>
		<div class="row-fluid">
			<div class="span3"><h5>Telefono/ Celular:</h5></div>
			<div class="span5" style="text-align: left;"><?php echo $this->Form->input('phone',array('label'=>'','class' => 'cotizarfrm')); ?></div>
		</div>
		<div class="row-fluid">
			<div class="span3"><h5>E-mail:</h5></div>
			<div class="span6" style="text-align: left;"><?php echo $this->Form->input('email',array('label'=>'','class' => 'cotizarfrm'));?></div>
		</div>
		<div class="row-fluid">
			<div class="span3">Mensaje</div>
			<div class="span7" style="text-align: left;"><?php echo $this->Form->input('message',array('label'=>'','class' => 'cotizarfrm'));?></div>
		</div>
			</fieldset>
		<?php echo $this->Form->end(array('label' => __('&nbsp;&nbsp;&nbsp;&nbsp;Enviar datos&nbsp;&nbsp;&nbsp;&nbsp;', true), 'escape' => false ,'class' => 'ok btn btn-info btn-large','style'=>'margin-right: 13%;')); ?>
		<br>
		</div>
	</div>
	</div>

</div>

<div class="row-fluid">
	<div class="span12">
		<h4 style="color:#979E9D">Encuentranos en</h4> 
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

	

</div>	
</div>
