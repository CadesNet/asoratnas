
<div class="container-fluid" style="min-height: 800px;">
<div class="row-fluid">
	<div class="span12">
		<h3 class="otrostitle">Contáctenos<?php if($this->Session->read('Auth.User.id')){ 
								 echo " ".$this->Html->link('Agregar sucursal', array('controller' => 'Branches', 'action' => 'add','contactenos'),array('class'=>'btn btn-primary'));
								}?></h3>
	</div>
</div>

			<?php  if(isset($branch1['Branch']['id'])){ ?>
			<div class="row-fluid" style="color:#25A781;border-bottom: 2px solid #25A781;">
						<div class="span12 cuadrodireccion">
							<div class = "dirciudad" style="text-align: center;">
								<?php echo $branch1['Branch']['name']."";
								if($this->Session->read('Auth.User.id')){ 
							 echo $this->Html->link(__("<i class='icon-pencil'></i>"), array('controller' => 'Branches','action' => 'edit',$branch1['Branch']['id'],'contactenos'),array('class' => 'ok btn btn-info ','escape' => false)); 
							 echo $this->Form->postLink(__("<i class='icon-remove'></i>"), array('controller'=>'Branches','action' => 'delete', $branch1['Branch']['id'],'contactenos'),array('class' => 'ok btn btn-info ','escape' => false), __('¿Está seguro de que desea eliminar la sucursal %s?',$branch1['Branch']['name'])); }?>
							</div>
							<p style = "text-align: center;color:#06816a"><?php echo $branch1['Branch']['type'] ?></p>
							<div class="row-fluid" style="text-align: center;">
								<div class="span12">
									<div class = "tipodedireccion">Dirección: <?php echo $branch1['Branch']['address'] ?>
									</div>
								</div>
							</div>
						
							<div class="row-fluid" style="text-align: center;">
								<div class="span12">
									<div class = "tipodedireccion">Teléfono: <?php echo $branch1['Branch']['phone'] ?> Telf(fax): <?php echo $branch1['Branch']['fax'] ?>  Telf Movil: <?php echo $branch1['Branch']['movil'] ?> 
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

					<?php } ?>
					<br>
		<div class="row" style="margin-left: 50px;">
			<div class="span12">
				
		<div >
	<?php if(count($branch)>0){ ?>
		<?php foreach ($branch as $branches) { ?>
		
				<div class="span4 cuadrodireccion" style="margin-left: 0px;" >
					<div class="row">
						<div class="span3">
							<div class = "dirciudad">	<?php echo $branches['Branch']['name']." ";
							if($this->Session->read('Auth.User.id')){ 
							 echo $this->Html->link(__("<i class='icon-pencil'></i>"), array('controller' => 'Branches','action' => 'edit',$branches['Branch']['id'],'contactenos'),array('class' => 'ok btn btn-info ','escape' => false)); 
							 echo $this->Form->postLink(__("<i class='icon-remove'></i>"), array('controller'=>'Branches','action' => 'delete', $branches['Branch']['id'],'contactenos'),array('class' => 'ok btn btn-info ','escape' => false), __('¿Está seguro de que desea eliminar la sucursal %s?',$branches['Branch']['name'])); }?> 
							</div>
					
							<div style = "color:#06816a"><?php echo $branches['Branch']['type'] ?></div>
						</div>
					</div>

					<div class="row">
						<div class="span3">
							<div class = "tipodedireccion" style="float: left;">Dirección: <?php echo $branches['Branch']['address'] ?></div>
							
						</div>
					</div>
					<div class="row">
						<div class="span3">
						<div class = "tipodedireccion" style="float: left;">Teléfono: 
						<?php echo $branches['Branch']['phone'] ?>
						</div> 
						</div>
						
					</div>

					<div class="row">
						<div class="span3">
						<div class = "tipodedireccion" style="float: left;">Telf(fax):
							<?php echo $branches['Branch']['fax'] ?>
						</div>
						</div>
					</div>

					<div class="row">
						<div class="span3">
							<div class = "tipodedireccion" style="float: left;">Telf Movil:	<?php echo $branches['Branch']['movil'] ?> </div>
						</div>
					</div>	

					<div class="row">
						<div class="span3">
							<div class = "tipodedireccion" style="float: left;">Contacto: <?php echo $branches['Branch']['contact'] ?></div>
						</div>
			
					</div>
				
				</div>
			
		<?php  } } ?>
			</div>	
			</div>
		</div>
	
<div class="row-fluid">
	<div class="span12">
		<div class="consultations  cotizartext" style="width: 70%;background-color: #E4DDCA;margin-left: auto;margin-right: auto;">
			
			<?php echo $this->Form->create('Consultation'); ?>
				<fieldset class="offset1" >
					<legend> <p class="legend_form"><?php echo __('Complete sus datos correctos para enviarle la el formulario, gracias'); ?></p></legend>
					<div class="row-fluid">
						<div class="span3"><p class="stylo_form">Nombre Completo:</p></div>
						<div class="span6" style="text-align: left;"><?php echo $this->Form->input('name',array('label'=>'','class' => 'cotizarfrm')); ?></div>
					</div>
					<div class="row-fluid">
						<div class="span3"><p class="stylo_form">Dirección:</p></div>
						<div class="span6" style="text-align: left;"><?php echo $this->Form->input('address',array('type'=>'text','label'=>'','class' => 'cotizarfrm')); ?></div>
					</div>
					<div class="row-fluid">
						<div class="span3"><p class="stylo_form">Teléfono/ Celular:</p></div>
						<div class="span5" style="text-align: left;"><?php echo $this->Form->input('phone',array('label'=>'','class' => 'cotizarfrm')); ?></div>
					</div>
					<div class="row-fluid">
						<div class="span3"><p class="stylo_form">E-mail:</p></div>
						<div class="span6" style="text-align: left;"><?php echo $this->Form->input('email',array('label'=>'','class' => 'cotizarfrm'));?></div>
					</div>
					<div class="row-fluid">
						<div class="span3"><p class="stylo_form">Mensaje</p></div>
						<div class="span7" style="text-align: left;"><?php echo $this->Form->input('message',array('label'=>'','class' => 'cotizarfrm'));?></div>
					</div>
				</fieldset>
			<?php echo $this->Form->end(array('label' => __('&nbsp;&nbsp;&nbsp;&nbsp;Enviar datos&nbsp;&nbsp;&nbsp;&nbsp;', true), 'escape' => false ,'class' => 'ok btn btn-warning btn-large','style'=>'margin-right: 13%;')); ?>
			<br>
		</div>
	</div>
</div>

<br>

<div class="row-fluid" style="">
	<p style="color: #889091;">Encuentranos en:</p>
</div>
<div class="row-fluid">
		<div class="span12">
			<?php if($this->Session->read('Auth.User.id')){ 
								 echo " ".$this->Html->link('Ver supermercados', array('controller' => 'Supermarkets', 'action' => 'index'),array('class'=>'btn btn-primary'));
								}?>
			<div class="list_carousel responsive" style="height:70px">
	
				<ul id="foo5" style="height:100%">
					<?php foreach($supermarkets as $supermarket) { ?>
						<li style="width:80px">
						<?php 
					echo $this->Html->link($this->Html->image("supermarket/filename/".$supermarket['Supermarket']['filename'], array("alt" => "Empresa")),$supermarket['Supermarket']['link'],array('escape' => false , 'class' => 'brand','target'=>'_blank'));  
			    	    ?>
						</li>
						<?php }	 ?>
						<?php foreach($supermarkets as $supermarket) { ?>
						<li style="width:80px">
						<?php 
					echo $this->Html->link($this->Html->image("supermarket/filename/".$supermarket['Supermarket']['filename'], array("alt" => "Empresa")),$supermarket['Supermarket']['link'],array('escape' => false , 'class' => 'brand','target'=>'_blank'));  
			    	    ?>
						</li>
						<?php }	 ?>
						<?php foreach($supermarkets as $supermarket) { ?>
						<li style="width:80px">
						<?php 
					echo $this->Html->link($this->Html->image("supermarket/filename/".$supermarket['Supermarket']['filename'], array("alt" => "Empresa")),$supermarket['Supermarket']['link'],array('escape' => false , 'class' => 'brand','target'=>'_blank'));  
			    	    ?>
						</li>
						<?php }	 ?>

				</ul>
			</div>

	

		</div>	
</div>
</div>