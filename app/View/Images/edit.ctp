<div class="images form">
<?php echo $this->Form->create('Image',array('type' => 'file')); ?>
	<fieldset>
		<legend><?php echo __('Agregar Imagenes'); ?></legend>
	<?php

		echo $this->Form->input('id');
		echo $this->Form->input('filename',array('type' => 'file','label'=>'Seleccione una imagen'));
		echo $this->Form->input('dir', array('type' => 'hidden','label'=>'Dirección'));		
	?>
	</fieldset>
<?php echo $this->Form->end(array('label' => __('&nbsp;&nbsp;&nbsp;&nbsp;Guardar datos&nbsp;&nbsp;&nbsp;&nbsp;', true), 'escape' => false ,'class' => 'ok btn btn-info btn-large')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Acción'); ?></h3>
	<ul>

		<li>
				<?php
			if($val=='services'){
				echo $this->Html->link(__('Listar Imagenes'), array('controller'=>'Services','action' => 'edit',1),array('class' => 'ok btn btn-info btn-large'));					
				}else{
					echo $this->Html->link(__('Listar Imagenes'), array('controller'=>'Companies','action' => 'edit',1),array('class' => 'ok btn btn-info btn-large'));				
				}

		 ?>	
		</li>
		
	</ul>
</div>
 <p>&nbsp; </p>
 <p>&nbsp; </p>