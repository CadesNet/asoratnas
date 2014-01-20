<div class="companies form">
<?php echo $this->Form->create('Company',array('type' => 'file')); ?>
	<fieldset>
		<legend><?php echo __('Editar Empresa'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo ('Descipcion');
		echo $this->Form->textarea('content',array('class'=>'ckeditor','label'=>'Descripción'));
		echo(h("La imagen tiene que ser 1165 x 167 "));
		echo $this->Form->input('filename',array('type' => 'file','label'=>'Seleccione una imagen'));
		echo $this->Form->input('dir', array('type' => 'hidden'));
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

			<?php echo $this->Html->link(__('Editar'), array('controller'=>'Images','action' => 'edit', $image['Image']['id'],'companies'),array('class' => 'ok btn btn-info ')); ?>
			<?php echo $this->Form->postLink(__('Borrar'), array('controller'=>'Images','action' => 'delete',$image['Image']['id'],'companies'),array('class' => 'ok btn btn-info '), __('¿Está seguro de que desea eliminar esta imagen?')); ?>
		</td>
	</tr>
<?php endforeach; ?>
	</table>
	<div class="row">
		<?php echo $this->Html->link(__('Nueva imagen'), array('controller'=>'Images','action' => 'add','companies'),array('class' => 'ok btn btn-info btn-large')); ?>
	</div>
</div>
 <p>&nbsp; </p>
 <p>&nbsp; </p>
