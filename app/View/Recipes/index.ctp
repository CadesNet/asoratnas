<div class="recipes index">
	<h2><?php echo __('Recetas'); ?></h2>
	<table class = "table" cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('title','Titulo'); ?></th>
			<th><?php echo $this->Paginator->sort('time','Tiempo'); ?></th>
			<th><?php echo $this->Paginator->sort('portion','Porciones'); ?></th>
			<th><?php echo $this->Paginator->sort('preparation','Preparación'); ?></th>
			<th><?php echo $this->Paginator->sort('created','Creado'); ?></th>
			<th><?php echo $this->Paginator->sort('modified','Modificado'); ?></th>
			<th class="actions"><?php echo __('Acciones'); ?></th>
	</tr>
	<?php foreach ($recipes as $recipe): ?>
	<tr>
		
		<td><?php echo h($recipe['Recipe']['title']); ?>&nbsp;</td>
		<td><?php echo h($recipe['Recipe']['time']); ?>&nbsp;</td>
		<td><?php echo h($recipe['Recipe']['portion']); ?>&nbsp;</td>
		<td><?php echo h($recipe['Recipe']['preparation']); ?>&nbsp;</td>
		<td><?php echo h($recipe['Recipe']['created']); ?>&nbsp;</td>
		<td><?php echo h($recipe['Recipe']['modified']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('Ver'), array('action' => 'view', $recipe['Recipe']['id']),array('class' => 'ok btn btn-info  ')); ?>
			<?php echo $this->Html->link(__('Editar'), array('action' => 'edit', $recipe['Recipe']['id']),array('class' => 'ok btn btn-info  ')); ?>
			<?php echo $this->Form->postLink(__('Borrar'), array('action' => 'delete', $recipe['Recipe']['id']),array('class' => 'ok btn btn-info  '), __('Are you sure you want to delete # %s?', $recipe['Recipe']['id'])); ?>
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
	
		<?php echo $this->Html->link(__('Nueva Receta'), array('action' => 'add'),array('class' => 'ok btn btn-info  ')); ?>
		<?php echo $this->Html->link(__('Listar Ingredientes'), array('controller' => 'ingredients', 'action' => 'index'),array('class' => 'ok btn btn-info  ')); ?> 
		<?php echo $this->Html->link(__('Nuevo Ingrediente'), array('controller' => 'ingredients', 'action' => 'add'),array('class' => 'ok btn btn-info  ')); ?> 
		<?php echo $this->Html->link(__('Mostrar Lista de imagenes de las recetas'), array('controller' => 'images_recipes', 'action' => 'index'),array('class' => 'ok btn btn-info  ')); ?> 
		<?php echo $this->Html->link(__('Nueva imagen de receta'), array('controller' => 'images_recipes', 'action' => 'add'),array('class' => 'ok btn btn-info  ')); ?> 
	
</div>
