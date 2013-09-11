<div class="quotes index">
<<<<<<< HEAD
	<h2><?php echo __('Quotes'); ?></h2>
		<table class = "table" cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('name'); ?></th>
			<th><?php echo $this->Paginator->sort('address'); ?></th>
			<th><?php echo $this->Paginator->sort('phone'); ?></th>
			<th><?php echo $this->Paginator->sort('email'); ?></th>
			<th><?php echo $this->Paginator->sort('message'); ?></th>
			<th><?php echo $this->Paginator->sort('created'); ?></th>
			<th><?php echo $this->Paginator->sort('modified'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($quotes as $quote): ?>
	<tr>
		<td><?php echo h($quote['Quote']['id']); ?>&nbsp;</td>
		<td><?php echo h($quote['Quote']['name']); ?>&nbsp;</td>
=======
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
>>>>>>> b6abcb8f17127e7992c4b9391ac8f4dc08532886
		<td><?php echo h($quote['Quote']['address']); ?>&nbsp;</td>
		<td><?php echo h($quote['Quote']['phone']); ?>&nbsp;</td>
		<td><?php echo h($quote['Quote']['email']); ?>&nbsp;</td>
		<td><?php echo h($quote['Quote']['message']); ?>&nbsp;</td>
		<td><?php echo h($quote['Quote']['created']); ?>&nbsp;</td>
		<td><?php echo h($quote['Quote']['modified']); ?>&nbsp;</td>
		<td class="actions">
<<<<<<< HEAD
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $quote['Quote']['id']),array('class' => 'ok btn btn-info ')); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $quote['Quote']['id']),array('class' => 'ok btn btn-info ')); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $quote['Quote']['id']),array('class' => 'ok btn btn-info '), __('Are you sure you want to delete # %s?', $quote['Quote']['id'])); ?>
=======
			<?php echo $this->Html->link(__('Ver'), array('action' => 'view', $quote['Quote']['id']),array('class' => 'ok btn btn-info  ')); ?>
			<?php echo $this->Html->link(__('Editar'), array('action' => 'edit', $quote['Quote']['id']),array('class' => 'ok btn btn-info  ')); ?>
			<?php echo $this->Form->postLink(__('Borrar'), array('action' => 'delete', $quote['Quote']['id']),array('class' => 'ok btn btn-info  '), __('Are you sure you want to delete # %s?', $quote['Quote']['id'])); ?>
>>>>>>> b6abcb8f17127e7992c4b9391ac8f4dc08532886
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
<<<<<<< HEAD
		echo $this->Paginator->prev('< ' . __('previous'), array(), null, array('class' => 'prev disabled'));
		echo $this->Paginator->numbers(array('separator' => ''));
		echo $this->Paginator->next(__('next') . ' >', array(), null, array('class' => 'next disabled'));
=======
		echo $this->Paginator->prev('< ' . __('Anterior'), array(), null, array('class' => 'prev disabled'));
		echo $this->Paginator->numbers(array('separator' => ''));
		echo $this->Paginator->next(__('Siguiente') . ' >', array(), null, array('class' => 'next disabled'));
>>>>>>> b6abcb8f17127e7992c4b9391ac8f4dc08532886
	?>
	</div>
</div>
<div class="actions">
<<<<<<< HEAD
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('New Quote'), array('action' => 'add'),array('class' => 'ok btn btn-info btn-large')); ?></li>
		<li><?php echo $this->Html->link(__('List Presentations Quotes'), array('controller' => 'presentations_quotes', 'action' => 'index'),array('class' => 'ok btn btn-info btn-large')); ?> </li>
		<li><?php echo $this->Html->link(__('New Presentations Quote'), array('controller' => 'presentations_quotes', 'action' => 'add'),array('class' => 'ok btn btn-info btn-large')); ?> </li>
	</ul>
=======
	<h3><?php echo __('Acciones'); ?></h3>
	<?php echo $this->Html->link(__('Nueva cotización'), array('action' => 'add'),array('class' => 'ok btn btn-info  ')); ?></li>
		<?php echo $this->Html->link(__('Listar items de Cotización'), array('controller' => 'items_quotes', 'action' => 'index'),array('class' => 'ok btn btn-info  ')); ?> 
		<?php echo $this->Html->link(__('Crear nuevo item de Cotización'), array('controller' => 'items_quotes', 'action' => 'add'),array('class' => 'ok btn btn-info  ')); ?> 
	
>>>>>>> b6abcb8f17127e7992c4b9391ac8f4dc08532886
</div>
