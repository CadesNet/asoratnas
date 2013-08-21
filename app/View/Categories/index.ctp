<div class="categories index">
	<h2><?php echo __('Categoria de productos'); ?></h2>
	<table class = "table" cellpadding="0" cellspacing="0">
	<tr>
			
			<th><?php echo $this->Paginator->sort('name','Nombre'); ?></th>
			<th><?php echo $this->Paginator->sort('filename','Imagen'); ?></th>
			<th><?php echo $this->Paginator->sort('dir','Directorio'); ?></th>
			<th><?php echo $this->Paginator->sort('description','Descripción'); ?></th>
			<th class="actions"><?php echo __('Acciones'); ?></th>
	</tr>
	<?php foreach ($categories as $category): ?>
	<tr>
		
		<td><?php echo h($category['Category']['name']); ?>&nbsp;</td>
		<td> <div style = "max-width:200px;"> <?php echo $this->Html->image('category/filename/'.h($category['Category']['filename'])); ?>&nbsp;</td>
		<td><?php echo h($category['Category']['dir']); ?>&nbsp;</td>
		<td><?php echo h($category['Category']['description']); ?>&nbsp;</td>
		<td class="actions">
			<!-- <?php echo $this->Html->link(__('Ver'), array('action' => 'view', $category['Category']['id']),array('class' => 'ok btn btn-info  ')); ?> -->
			<?php echo $this->Html->link(__('Editar'), array('action' => 'edit', $category['Category']['id']),array('class' => 'ok btn btn-info  ')); ?>
			<?php echo $this->Form->postLink(__('Borrar'), array('action' => 'delete', $category['Category']['id']),array('class' => 'ok btn btn-info  '), __('Are you sure you want to delete # %s?', $category['Category']['id'])); ?>
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
		echo $this->Paginator->prev('< ' . __('previous'), array(), null, array('class' => 'prev disabled'));
		echo $this->Paginator->numbers(array('separator' => ''));
		echo $this->Paginator->next(__('next') . ' >', array(), null, array('class' => 'next disabled'));
	?>
	</div>
</div>
<div class="actions">
	<h3><?php echo __('Acciones'); ?></h3>
	<?php echo $this->Html->link(__('Nueva Categoria'), array('action' => 'add'),array('class' => 'ok btn btn-info  ')); ?>
	<?php echo $this->Html->link(__('Listar Productos'), array('controller' => 'items', 'action' => 'index'),array('class' => 'ok btn btn-info  ')); ?>
	<?php echo $this->Html->link(__('Nuevo Producto'), array('controller' => 'items', 'action' => 'add'),array('class' => 'ok btn btn-info  ')); ?> 
</div>
