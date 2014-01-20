<div class="images index">
	<h2><?php echo __('Imagenes'); ?></h2>
	<table class = "table" cellpadding="0" cellspacing="0" >
	<tr>
			<th><?php echo ('Imagenes'); ?></th>
			<th><?php echo ('URL'); ?></th>
			<th class="actions"><?php echo __('Acción'); ?></th>
	</tr>
	<?php foreach ($imagesCategores as $imagesCategory): ?>
	<tr>
		<td><?php echo $this->Html->image('image/filename/'.h($image['Image']['filename'])); ?>&nbsp;</td>

		<td><?php echo h(WWW_ROOT.'img/image/filename/'.$image['Image']['filename']); ?>&nbsp;</td>		
		<td class="actions">

			<?php echo $this->Html->link(__('Editar'), array('action' => 'edit', $image['Image']['id']),array('class' => 'ok btn btn-info ')); ?>
			<?php echo $this->Form->postLink(__('Borrar'), array('action' => 'delete',$image['Image']['id'],$id_category),array('class' => 'ok btn btn-info '), __('¿Está seguro de que desea eliminar esta imagen?')); ?>
		</td>
	</tr>
<?php endforeach; ?>
	</table>
	<div class="row">
		<?php echo $this->Html->link(__('Nueva imagen'), array('action' => 'add'),array('class' => 'ok btn btn-info btn-large')); ?>
	</div>
</div>
 <p>&nbsp; </p>
 <p>&nbsp; </p>