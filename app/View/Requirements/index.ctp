<div class="requirements index">
	<h2><?php echo __('Requerimientos'); ?></h2>
	<table class = "table"  cellpadding="0" cellspacing="0">
	<tr>
			
			<th><?php echo $this->Paginator->sort('charge_id','Cargo'); ?></th>
			<th><?php echo $this->Paginator->sort('fullname','Nombre Completo'); ?></th>
			<th><?php echo $this->Paginator->sort('date_of_birth','Fecha de nacimiento'); ?></th>
			<th><?php echo $this->Paginator->sort('sex','Sexo'); ?></th>
			<th><?php echo $this->Paginator->sort('address','Dirección'); ?></th>
			<th><?php echo $this->Paginator->sort('phone','Telefono'); ?></th>
			<th><?php echo $this->Paginator->sort('email','Email'); ?></th>
			<th><?php echo $this->Paginator->sort('curriculum','Curriculum'); ?></th>
			<th><?php echo $this->Paginator->sort('message','Mensaje'); ?></th>
			<th><?php echo $this->Paginator->sort('created','Creado'); ?></th>
			<th><?php echo $this->Paginator->sort('modified','Modificado'); ?></th>
			<th class="actions"><?php echo __('Acciones'); ?></th>
	</tr>
	<?php foreach ($requirements as $requirement): ?>
	<tr>
		
		<td>
			<?php echo $this->Html->link($requirement['Charge']['title'], array('controller' => 'charges', 'action' => 'view', $requirement['Charge']['id']),array('class' => 'ok btn btn-info btn-large')); ?>
		</td>
		<td><?php echo h($requirement['Requirement']['fullname']); ?>&nbsp;</td>
		<td><?php echo h($requirement['Requirement']['date_of_birth']); ?>&nbsp;</td>
		<td><?php echo h($requirement['Requirement']['sex']); ?>&nbsp;</td>
		<td><?php echo h($requirement['Requirement']['address']); ?>&nbsp;</td>
		<td><?php echo h($requirement['Requirement']['phone']); ?>&nbsp;</td>
		<td><?php echo h($requirement['Requirement']['email']); ?>&nbsp;</td>
		<td><?php echo h($requirement['Requirement']['curriculum']); ?>&nbsp;</td>
		<td><?php echo h($requirement['Requirement']['message']); ?>&nbsp;</td>
		<td><?php echo h($requirement['Requirement']['created']); ?>&nbsp;</td>
		<td><?php echo h($requirement['Requirement']['modified']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('Ver'), array('action' => 'view', $requirement['Requirement']['id']),array('class' => 'ok btn btn-info btn-large')); ?>
			<?php echo $this->Html->link(__('Editar'), array('action' => 'edit', $requirement['Requirement']['id']),array('class' => 'ok btn btn-info btn-large')); ?>
			<?php echo $this->Form->postLink(__('Borrar'), array('action' => 'delete', $requirement['Requirement']['id']),array('class' => 'ok btn btn-info btn-large'), __('Are you sure you want to delete # %s?', $requirement['Requirement']['id'])); ?>
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
	<?php echo $this->Html->link(__('New Requirement'), array('action' => 'add'),array('class' => 'ok btn btn-info btn-large')); ?>
		<?php echo $this->Html->link(__('List Charges'), array('controller' => 'charges', 'action' => 'index'),array('class' => 'ok btn btn-info btn-large')); ?> 
		<?php echo $this->Html->link(__('New Charge'), array('controller' => 'charges', 'action' => 'add'),array('class' => 'ok btn btn-info btn-large')); ?>
</div>
