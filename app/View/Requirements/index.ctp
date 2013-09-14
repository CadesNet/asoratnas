<div class="requirements index">
	<h2><?php echo __('Requerimientos'); ?></h2>
	<table class = "table"  cellpadding="0" cellspacing="0">
	<tr>
			
			<th><?php echo ('Cargo'); ?></th>
			<th><?php echo ('Nombre Completo'); ?></th>
			<th><?php echo ('Fecha de nacimiento'); ?></th>
			<th><?php echo ('Sexo'); ?></th>
			<th><?php echo ('Dirección'); ?></th>
			<th><?php echo ('Telefono'); ?></th>
			<th><?php echo ('Email'); ?></th>
			<th><?php echo ('Curriculum'); ?></th>
			<th><?php echo ('Mensaje'); ?></th>
			
			<th><?php echo ('Modificado'); ?></th>
			<th class="actions"><?php echo __('Acciones'); ?></th>
	</tr>
	<?php foreach ($requirements as $requirement): ?>
	<tr>
		
		<td><?php echo h($requirement['Charge']['title']); ?>&nbsp;</td>
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
			<?php echo $this->Html->link(__('Ver'), array('action' => 'view', $requirement['Requirement']['id'],$sucursal),array('class' => 'ok btn btn-info  ')); ?>
		
			<?php echo $this->Form->postLink(__('Borrar'), array('action' => 'delete', $requirement['Requirement']['id']),array('class' => 'ok btn btn-info  '), __('Are you sure you want to delete # %s?', $requirement['Requirement']['id'])); ?>
		</td>
	</tr>
<?php endforeach; ?>
	</table>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		
		<li><?php echo $this->Html->link(__('List Cargos'), array('controller'=>'Charges','action' => 'index',$sucursal),array('class' => 'ok btn btn-info btn-large')); ?> </li>
	</ul>
</div>

 <p>&nbsp; </p>
 <p>&nbsp; </p>