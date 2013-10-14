<div class="ads form">
<?php echo $this->FormEnum->create('Ad',array('type' => 'file')); ?>
	<fieldset>
		<legend><?php echo __('Agregar Publicidad'); ?></legend>
	<?php
		echo $this->FormEnum->input('type',array('label' => 'Tipo'));
		echo h("Opción video: ingrese la parte marcada con rojo")."<br>"?> 
		<?php echo h("<iframe width='560' height='315' src='" )?><span style='color:#FF0000'>//www.youtube.com/embed/dF-rMYDo-LM </span> <?php echo h("' frameborder='0' allowfullscreen></iframe> es obligado que seleccione una imagen")."<br>";
		echo ("Opción foto seleccione una foto no es necesario una url");
		echo $this->FormEnum->input('link',array('label' => 'Url'));
		echo (h("El tamaño de la imagen de publicidad tiene que ser 276 x 389"));
		echo $this->FormEnum->input('filename',array('type' => 'file','label' => 'Seleccione una imagen obligadamente'));
		echo $this->FormEnum->input('dir', array('type' => 'hidden'));
	?>
	</fieldset>
<?php echo $this->Form->end(array('label' => __('&nbsp;&nbsp;&nbsp;&nbsp;Guardar datos&nbsp;&nbsp;&nbsp;&nbsp;', true), 'escape' => false ,'class' => 'ok btn btn-info btn-large')); ?>

</div>
<div class="actions">
	<h3><?php echo __('Acción'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Listar Notificacion'), array('action' => 'index'),array('class' => 'ok btn btn-info btn-large')); ?></li>
	</ul>
</div>
 <p>&nbsp; </p>
 <p>&nbsp; </p>
