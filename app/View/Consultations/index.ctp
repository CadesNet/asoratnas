<div class="consultations index">
	<h2><?php echo __('Consultas'); ?></h2>
	<table class = "table" cellpadding="0" cellspacing="0">
	<tr>
			
			<th><?php echo $this->Paginator->sort('name','Nombre'); ?></th>
			<th><?php echo $this->Paginator->sort('address','Dirección'); ?></th>
			<th><?php echo $this->Paginator->sort('phone','Telefono'); ?></th>
			<th><?php echo $this->Paginator->sort('email','Email'); ?></th>
			<th><?php echo $this->Paginator->sort('message','Mensaje'); ?></th>
			<th><?php echo $this->Paginator->sort('created','Creado'); ?></th>
			<th><?php echo $this->Paginator->sort('modified','Modificado'); ?></th>
			<th class="actions"><?php echo __('Acciones'); ?></th>
	</tr>
	<?php foreach ($consultations as $consultation): ?>
	<tr>
		
		<td><?php echo h($consultation['Consultation']['name']); ?>&nbsp;</td>
		<td><?php echo h($consultation['Consultation']['address']); ?>&nbsp;</td>
		<td><?php echo h($consultation['Consultation']['phone']); ?>&nbsp;</td>
		<td><?php echo h($consultation['Consultation']['email']); ?>&nbsp;</td>
		<td><?php echo h($consultation['Consultation']['message']); ?>&nbsp;</td>
		<td><?php echo h($consultation['Consultation']['created']); ?>&nbsp;</td>
		<td><?php echo h($consultation['Consultation']['modified']); ?>&nbsp;</td>
		<td class="actions">
			<!-- <?php echo $this->Html->link(__('Ver'), array('action' => 'view', $consultation['Consultation']['id']),array('class' => 'ok btn btn-info  ')); ?> -->
			<?php echo $this->Html->link(__('Editar'), array('action' => 'edit', $consultation['Consultation']['id']),array('class' => 'ok btn btn-info  ')); ?>
			<?php echo $this->Form->postLink(__('Borrar'), array('action' => 'delete', $consultation['Consultation']['id']),array('class' => 'ok btn btn-info  '), __('Are you sure you want to delete # %s?', $consultation['Consultation']['id']),array('class' => 'ok btn btn-info  ')); ?>
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
	<?php echo $this->Html->link(__('Nueva Consulta'), array('action' => 'add'),array('class' => 'ok btn btn-info  ')); ?>
	
</div>
