
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
			
			<th><?php echo $this->Paginator->sort('modified','Modificado'); ?></th>
			<th class="actions"><?php echo __('Acciones'); ?></th>
	</tr>
	<?php foreach ($valor as $requirement): ?>
	<tr>
		
		<td>
			<?php echo $this->Html->link($requirement['Charge']['title'], array('controller' => 'charges', 'action' => 'view', $requirement['Charge']['id']),array('class' => 'ok btn btn-info')); ?>
		</td>
		<td><?php echo h($requirement['Requirement']['fullname']); ?>&nbsp;</td>
		<td><?php echo h($requirement['Requirement']['date_of_birth']); ?>&nbsp;</td>
		<td><?php echo h($requirement['Requirement']['sex']); ?>&nbsp;</td>
		<td><?php echo h($requirement['Requirement']['address']); ?>&nbsp;</td>
		<td><?php echo h($requirement['Requirement']['phone']); ?>&nbsp;</td>
		<td><?php echo h($requirement['Requirement']['email']); ?>&nbsp;</td>
		<td><?php echo h($requirement['Requirement']['curriculum']); ?>&nbsp;</td>
		<td><?php echo h($requirement['Requirement']['message']); ?>&nbsp;</td>
		
		<td><?php echo h($requirement['Requirement']['modified']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('Ver'), array('action' => 'view', $requirement['Requirement']['id']),array('class' => 'ok btn btn-info  ')); ?>
			<?php echo $this->Html->link(__('Editar'), array('action' => 'edit', $requirement['Requirement']['id']),array('class' => 'ok btn btn-info  ')); ?>
			<?php echo $this->Form->postLink(__('Borrar'), array('action' => 'delete', $requirement['Requirement']['id']),array('class' => 'ok btn btn-info  '), __('Are you sure you want to delete # %s?', $requirement['Requirement']['id'])); ?>
		</td>
	</tr>
<?php endforeach; ?>
	</table>
		