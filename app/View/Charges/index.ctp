<div class="charges index">
	<h2><?php echo __('Cargos'); ?></h2>
	<table class = "table" cellpadding="0" cellspacing="0">
	<tr>
			
			<th><?php echo $this->Paginator->sort('branch_id','Sucursal'); ?></th>
			<th><?php echo $this->Paginator->sort('title','Titulo'); ?></th>
			<th><?php echo $this->Paginator->sort('deadline','Fecha de expiración'); ?></th>
			<th><?php echo $this->Paginator->sort('description','Descripción'); ?></th>
			<th><?php echo $this->Paginator->sort('formation','Formación'); ?></th>
			
			<th><?php echo $this->Paginator->sort('modified' ,'Ultima modificación'); ?></th>
			<th class="actions"><?php echo __('Acciones'); ?></th>
	</tr>
	<?php foreach ($charges as $charge): ?>
	<tr>
		
		<td>
			<?php echo $this->Html->link($charge['Branch']['name'], array('controller' => 'branches', 'action' => 'view', $charge['Branch']['id'])); ?>
		</td>
		<td><?php echo h($charge['Charge']['title']); ?>&nbsp;</td>
		<td><?php echo h($charge['Charge']['deadline']); ?>&nbsp;</td>
		<td><?php echo h($charge['Charge']['description']); ?>&nbsp;</td>
		<td><?php echo h($charge['Charge']['formation']); ?>&nbsp;</td>
		
		<td><?php echo h($charge['Charge']['modified']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $charge['Charge']['id']),array('class' => 'ok btn btn-info btn-large')); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $charge['Charge']['id']),array('class' => 'ok btn btn-info btn-large')); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $charge['Charge']['id']),array('class' => 'ok btn btn-info btn-large'), __('Are you sure you want to delete # %s?', $charge['Charge']['id'])); ?>
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
	<?php echo $this->Html->link(__('Nuevo Cargo'), array('action' => 'add'),array('class' => 'ok btn btn-info btn-large')); ?>
		<?php echo $this->Html->link(__('Listar Sucursales'), array('controller' => 'branches', 'action' => 'index'),array('class' => 'ok btn btn-info btn-large')); ?> 
		<?php echo $this->Html->link(__('Nueva Sucursal'), array('controller' => 'branches', 'action' => 'add'),array('class' => 'ok btn btn-info btn-large')); ?> 
		<?php echo $this->Html->link(__('Listar Requerimientos'), array('controller' => 'requirements', 'action' => 'index'),array('class' => 'ok btn btn-info btn-large')); ?> 
		<?php echo $this->Html->link(__('Nuevo Requerimientos'), array('controller' => 'requirements', 'action' => 'add'),array('class' => 'ok btn btn-info btn-large')); ?> 
	</ul>
</div>
