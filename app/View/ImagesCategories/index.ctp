<div class="imagesCategories index">
	<h2><?php echo __('Images Categories'); ?></h2>
	<table class = "table" cellpadding="0" cellspacing="0" >
	<tr>
			<th><?php echo ('Imagenes'); ?></th>
			<th><?php echo ('Direccion'); ?></th>
			<th><?php echo ('Tipo'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($imagesCategores as $imagesCategory): ?>
	<tr>
		<td><?php echo $this->Html->image('images_category/filename/'.h($imagesCategory['ImagesCategory']['filename'])); ?>&nbsp;</td>
		<td><?php echo h($imagesCategory['ImagesCategory']['dir']); ?>&nbsp;</td>
		<td><?php echo h($imagesCategory['ImagesCategory']['type']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $imagesCategory['ImagesCategory']['id'],$id_category),array('class' => 'ok btn btn-info ')); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete',$imagesCategory['ImagesCategory']['id'],$id_category),array('class' => 'ok btn btn-info '), __('Are you sure you want to delete # %s?', $imagesCategory['ImagesCategory']['id'])); ?>
		</td>
	</tr>
<?php endforeach; ?>
	</table>
	<div class="row">
		<?php echo $this->Html->link(__('New Images Category'), array('action' => 'add',$id_category),array('class' => 'ok btn btn-info btn-large')); ?>
	</div>
</div>
 <p>&nbsp; </p>
 <p>&nbsp; </p>