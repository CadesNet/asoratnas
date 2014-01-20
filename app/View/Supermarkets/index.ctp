<div class="supermarkets index">
	<h2><?php echo __('Supermercados'); ?></h2>
	<table class = "table" cellpadding="0" cellspacing="0">
	<tr>
			
			<th><?php echo $this->Paginator->sort('name','Nombre'); ?></th>
			<th><?php echo $this->Paginator->sort('filename','Imagen'); ?></th>
			<th><?php echo $this->Paginator->sort('dir','Dirección'); ?></th>
			<th><?php echo $this->Paginator->sort('link'); ?></th>
			<th><?php echo $this->Paginator->sort('description','Descripción'); ?></th>
			<th class="actions"><?php echo __('Acciones'); ?></th>
	</tr>
	<?php foreach ($supermarkets as $supermarket): ?>
	<tr>
		<td><?php echo h($supermarket['Supermarket']['name']); ?>&nbsp;</td>
		
		<td> <div style = "max-width:200px;"> <?php echo $this->Html->image('supermarket/filename/'.h($supermarket['Supermarket']['filename'])); ?>&nbsp;</td>
		
		<td><?php echo h($supermarket['Supermarket']['dir']); ?>&nbsp;</td>
		<td><?php echo h($supermarket['Supermarket']['link']); ?>&nbsp;</td>
		<td><?php echo h($supermarket['Supermarket']['description']); ?>&nbsp;</td>
		<td class="actions">
			
			<?php echo $this->Html->link(__('Editar'), array('action' => 'edit', $supermarket['Supermarket']['id']),array('class' => 'ok btn btn-info  ')); ?>
			<?php echo $this->Form->postLink(__('Borrar'), array('action' => 'delete', $supermarket['Supermarket']['id']),array('class' => 'ok btn btn-info  '), __('¿Está seguro de que desea eliminar %s?', $supermarket['Supermarket']['name'])); ?>
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
		echo $this->Paginator->prev('< ' . __('anterior'), array(), null, array('class' => 'prev disabled'));
		echo $this->Paginator->numbers(array('separator' => ''));
		echo $this->Paginator->next(__('siguiente') . ' >', array(), null, array('class' => 'next disabled'));
	?>
	</div>
</div>
<div class="actions">
	<h3><?php echo __('Acciones'); ?></h3>
	
		<?php echo $this->Html->link(__('Nuevo Supermercado'), array('action' => 'add'),array('class' => 'ok btn btn-info  ')); ?>
</div>
 <p>&nbsp; </p>
 <p>&nbsp; </p>