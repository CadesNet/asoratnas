<div class="services form">
<?php echo $this->Form->create('Service'); ?>
	<fieldset>
		<legend><?php echo __('Editar Servicio'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->textarea('content',array('class'=>'ckeditor'));
	?>
	</fieldset>
<?php echo $this->Form->end(array('label' => __('&nbsp;&nbsp;&nbsp;&nbsp;Modificar datos&nbsp;&nbsp;&nbsp;&nbsp;', true), 'escape' => false ,'class' => 'ok btn btn-info btn-large')); ?>

</div>
<div class="images index">
	<h2><?php echo __('Imagenes'); ?></h2>
	<table class = "table" cellpadding="0" cellspacing="0" >
	<tr>
			<th><?php echo ('Imagenes'); ?></th>
			<th><?php echo ('URL'); ?></th>
			<th class="actions"><?php echo __('Acción'); ?></th>
	</tr>
	<?php foreach ($images as $image): ?>
	<tr>
		<td><?php echo $this->Html->image('image/filename/'.h($image['Image']['filename'])); ?>&nbsp;</td>

		<td><?php echo h('http://new.avicola-santarosa.com/img/image/filename/'.$image['Image']['filename']); ?>&nbsp;</td>		
		<td class="actions">

			<?php echo $this->Html->link(__('Editar'), array('controller'=>'Images','action' => 'edit', $image['Image']['id'],'services'),array('class' => 'ok btn btn-info ')); ?>
			<?php echo $this->Form->postLink(__('Borrar'), array('controller'=>'Images','action' => 'delete',$image['Image']['id'],'services'),array('class' => 'ok btn btn-info '), __('¿Está seguro de que desea eliminar esta imagen?')); ?>
		</td>
	</tr>
<?php endforeach; ?>
	</table>
	<div class="row">
		<?php echo $this->Html->link(__('Nueva imagen'), array('controller'=>'Images','action' => 'add','services'),array('class' => 'ok btn btn-info btn-large')); ?>
	</div>
</div>
 <p>&nbsp; </p>
 <p>&nbsp; </p>
