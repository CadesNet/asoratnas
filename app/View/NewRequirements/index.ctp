<div class="newRequirements index">
	<h2><?php echo __('Nuevos Rquerimientos'); ?></h2>
	<table class = "table" cellpadding="0" cellspacing="0">
	<tr>
			
			<th><?php echo $this->Paginator->sort('branch_id','Sucursal'); ?></th>
			<th><?php echo $this->Paginator->sort('charge','Cargo'); ?></th>
			<th><?php echo $this->Paginator->sort('fullname','Nombre completo'); ?></th>
			<th><?php echo $this->Paginator->sort('date_of_birth','Fecha de nacimiento'); ?></th>
			<th><?php echo $this->Paginator->sort('sex','Sexo'); ?></th>
			<th><?php echo $this->Paginator->sort('address','Direccion'); ?></th>
			<th><?php echo $this->Paginator->sort('phone','Telefono'); ?></th>
			<th><?php echo $this->Paginator->sort('email','Email'); ?></th>
			<th><?php echo $this->Paginator->sort('curriculum'); ?></th>
			<th><?php echo $this->Paginator->sort('message','Mensaje'); ?></th>
			<th><?php echo $this->Paginator->sort('created','Fecha de creacion'); ?></th>
			<th><?php echo $this->Paginator->sort('modified','Fecha de modificacion'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($newRequirements as $newRequirement): ?>
	<tr>
		
		<td>
			<?php echo h($newRequirement['Branch']['name']); ?>&nbsp;</td>
		<td><?php echo h($newRequirement['NewRequirement']['charge']); ?>&nbsp;</td>
		<td><?php echo h($newRequirement['NewRequirement']['fullname']); ?>&nbsp;</td>
		<td><?php echo h($newRequirement['NewRequirement']['date_of_birth']); ?>&nbsp;</td>
		<td><?php echo h($newRequirement['NewRequirement']['sex']); ?>&nbsp;</td>
		<td><?php echo h($newRequirement['NewRequirement']['address']); ?>&nbsp;</td>
		<td><?php echo h($newRequirement['NewRequirement']['phone']); ?>&nbsp;</td>
		<td><?php echo h($newRequirement['NewRequirement']['email']); ?>&nbsp;</td>
		<td><?php echo h($newRequirement['NewRequirement']['curriculum']); ?>&nbsp;</td>
		<td><?php echo h($newRequirement['NewRequirement']['message']); ?>&nbsp;</td>
		<td><?php echo h($newRequirement['NewRequirement']['created']); ?>&nbsp;</td>
		<td><?php echo h($newRequirement['NewRequirement']['modified']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $newRequirement['NewRequirement']['id']),array('class' => 'ok btn btn-info ')); ?>
			
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $newRequirement['NewRequirement']['id']),array('class' => 'ok btn btn-info '), __('Are you sure you want to delete # %s?', $newRequirement['NewRequirement']['id'])); ?>
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

 <p>&nbsp; </p>
 <p>&nbsp; </p>