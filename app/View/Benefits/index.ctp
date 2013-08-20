<div class="benefits index">
	<h2><?php echo __('Beneficios'); ?></h2>
	<table class = "table" cellpadding="0" cellspacing="0">
	<tr>
			
			<th><?php echo $this->Paginator->sort('title','Titulo'); ?></th>
			<th><?php echo $this->Paginator->sort('description','Descripción'); ?></th>
			<th><?php echo $this->Paginator->sort('filename','Imagen'); ?></th>
			<th><?php echo $this->Paginator->sort('dir','Directorio'); ?></th>
			<th class="actions"><?php echo __('Acciones'); ?></th>
	</tr>
	<?php foreach ($benefits as $benefit): ?>
	<tr>
		
		<td><?php echo h($benefit['Benefit']['title']); ?>&nbsp;</td>
		<td><?php echo h($benefit['Benefit']['description']); ?>&nbsp;</td>
		<td><?php echo $this->Html->image('benefit/filename/'.h($benefit['Benefit']['filename'])); ?>&nbsp;</td>
		<td><?php echo h($benefit['Benefit']['dir']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('Ver'), array('action' => 'view', $benefit['Benefit']['id']),array('class' => 'ok btn btn-info btn-large')); ?>
			<?php echo $this->Html->link(__('Editar'), array('action' => 'edit', $benefit['Benefit']['id']),array('class' => 'ok btn btn-info btn-large')); ?>
			<?php echo $this->Form->postLink(__('Borrar'), array('action' => 'delete', $benefit['Benefit']['id']),array('class' => 'ok btn btn-info btn-large') ,array('class' => 'ok btn btn-info btn-large'), __('Are you sure you want to delete # %s?', $benefit['Benefit']['id'])); ?>
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
	<?php echo $this->Html->link(__('Nuevo beneficio'), array('action' => 'add'),array('class' => 'ok btn btn-info btn-large')); ?>
</div>
