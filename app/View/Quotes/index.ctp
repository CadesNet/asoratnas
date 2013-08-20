<div class="quotes index">
	<h2><?php echo __('Cotizaciones'); ?></h2>
	<table class = "table" cellpadding="0" cellspacing="0">
	<tr>
			
			<th><?php echo $this->Paginator->sort('fullname','Nombre Completo'); ?></th>
			<th><?php echo $this->Paginator->sort('address','Dirección'); ?></th>
			<th><?php echo $this->Paginator->sort('phone','Telefono'); ?></th>
			<th><?php echo $this->Paginator->sort('email','Emails'); ?></th>
			<th><?php echo $this->Paginator->sort('message','Mensajes'); ?></th>
			<th><?php echo $this->Paginator->sort('created','Creado'); ?></th>
			<th><?php echo $this->Paginator->sort('modified','Modificado'); ?></th>
			<th class="actions"><?php echo __('Acciones'); ?></th>
	</tr>
	<?php foreach ($quotes as $quote): ?>
	<tr>
		
		<td><?php echo h($quote['Quote']['fullname']); ?>&nbsp;</td>
		<td><?php echo h($quote['Quote']['address']); ?>&nbsp;</td>
		<td><?php echo h($quote['Quote']['phone']); ?>&nbsp;</td>
		<td><?php echo h($quote['Quote']['email']); ?>&nbsp;</td>
		<td><?php echo h($quote['Quote']['message']); ?>&nbsp;</td>
		<td><?php echo h($quote['Quote']['created']); ?>&nbsp;</td>
		<td><?php echo h($quote['Quote']['modified']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('Ver'), array('action' => 'view', $quote['Quote']['id']),array('class' => 'ok btn btn-info btn-large')); ?>
			<?php echo $this->Html->link(__('Editar'), array('action' => 'edit', $quote['Quote']['id']),array('class' => 'ok btn btn-info btn-large')); ?>
			<?php echo $this->Form->postLink(__('Borrar'), array('action' => 'delete', $quote['Quote']['id']),array('class' => 'ok btn btn-info btn-large'), __('Are you sure you want to delete # %s?', $quote['Quote']['id'])); ?>
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
		echo $this->Paginator->prev('< ' . __('Anterior'), array(), null, array('class' => 'prev disabled'));
		echo $this->Paginator->numbers(array('separator' => ''));
		echo $this->Paginator->next(__('Siguiente') . ' >', array(), null, array('class' => 'next disabled'));
	?>
	</div>
</div>
<div class="actions">
	<h3><?php echo __('Acciones'); ?></h3>
	<?php echo $this->Html->link(__('Nueva cotización'), array('action' => 'add'),array('class' => 'ok btn btn-info btn-large')); ?></li>
		<?php echo $this->Html->link(__('Listar items de Cotización'), array('controller' => 'items_quotes', 'action' => 'index'),array('class' => 'ok btn btn-info btn-large')); ?> 
		<?php echo $this->Html->link(__('Crear nuevo item de Cotización'), array('controller' => 'items_quotes', 'action' => 'add'),array('class' => 'ok btn btn-info btn-large')); ?> 
	
</div>
