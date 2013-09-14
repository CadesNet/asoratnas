<div class="ads index">
	<h2><?php echo __('Ver notificación'); ?></h2>
	<table class = "table" cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('type','Tipo'); ?></th>
			<th><?php echo $this->Paginator->sort('link','Enlace'); ?></th>
			<th><?php echo $this->Paginator->sort('created','Creado'); ?></th>
			<th><?php echo $this->Paginator->sort('modified','Modificado'); ?></th>
			<th><?php echo $this->Paginator->sort('filename','Nombre de archivo'); ?></th>
			<th><?php echo $this->Paginator->sort('dir','Directorio'); ?></th>
			<th class="actions"><?php echo __('Acciones'); ?></th>
	</tr>
	<?php foreach ($ads as $ad): ?>
	<tr>
		<td><?php echo h($ad['Ad']['type']); ?>&nbsp;</td>
		<td><?php echo h($ad['Ad']['link']); ?>&nbsp;</td>
		<td><?php echo h($ad['Ad']['created']); ?>&nbsp;</td>
		<td><?php echo h($ad['Ad']['modified']); ?>&nbsp;</td>
		<td><?php echo $this->Html->image('ad/filename/'.h($ad['Ad']['filename'])); ?>&nbsp;</td>
		<td><?php echo h($ad['Ad']['dir']); ?>&nbsp;</td>
		<td class="actions">
			
			<?php echo $this->Html->link(__('Editar'), array('action' => 'edit', $ad['Ad']['id']),array('class' => 'ok btn btn-info  ')); ?> 
			<?php echo $this->Form->postLink(__('Borrar'), array('action' => 'delete', $ad['Ad']['id']),array('class' => 'ok btn btn-info  '), __('Are you sure you want to delete # %s?', $ad['Ad']['id'])); ?>
		</td>
	</tr>
<?php endforeach; ?>
	</table>
	<p>
	<?php
	echo $this->Paginator->counter(array(
	'format' => __('Page {:page} of {:pages}, showing {:current} records out of {:count} total, starting on record {:start}, ending on {:end}')
	));
	?>	</p>
	<div class="paging">
	<?php
		echo $this->Paginator->prev('< ' . __('anteriores'), array(), null, array('class' => 'prev disabled'));
		echo $this->Paginator->numbers(array('separator' => ''));
		echo $this->Paginator->next(__('siguiente') . ' >', array(), null, array('class' => 'next disabled'));
	?>
	</div>
</div>
<div class="actions">
	<h3><?php echo __('Acciones'); ?></h3>
	<?php echo $this->Html->link(__('Nueva Notificacion'), array('action' => 'add'),array('class' => 'ok btn btn-info  ')); ?>
</div>
