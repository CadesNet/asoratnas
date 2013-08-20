<div class="branches index">
	<h2><?php echo __('Sucursales'); ?></h2>
	<table class = "table" cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('company_id', 'Empresa'); ?></th>
			<th><?php echo $this->Paginator->sort('name','Nombre'); ?></th>
			<th><?php echo $this->Paginator->sort('filename','Nombre de Archivo'); ?></th>
			<th><?php echo $this->Paginator->sort('dir','Directorio'); ?></th>
			<th><?php echo $this->Paginator->sort('type','Tipo'); ?></th>
			<th><?php echo $this->Paginator->sort('address','Dirección'); ?></th>
			<th><?php echo $this->Paginator->sort('phone','Telefono'); ?></th>
			<th><?php echo $this->Paginator->sort('movil','Movil'); ?></th>
			<th><?php echo $this->Paginator->sort('fax'); ?></th>
			<th><?php echo $this->Paginator->sort('contact','Contacto'); ?></th>
			<th class="actions"><?php echo __('Acciones'); ?></th>
	</tr>
	<?php foreach ($branches as $branch): ?>
	<tr>
		
		<td>
			<?php echo $this->Html->link($branch['Company']['id'], array('controller' => 'companies', 'action' => 'view', $branch['Company']['id'])); ?>
		</td>
		<td><?php echo h($branch['Branch']['name']); ?>&nbsp;</td>
		<td><?php echo $this->Html->image('branch/filename/'.h($branch['Branch']['filename'])); ?>&nbsp;</td>
		<td><?php echo h($branch['Branch']['dir']); ?>&nbsp;</td>
		<td><?php echo h($branch['Branch']['type']); ?>&nbsp;</td>
		<td><?php echo h($branch['Branch']['address']); ?>&nbsp;</td>
		<td><?php echo h($branch['Branch']['phone']); ?>&nbsp;</td>
		<td><?php echo h($branch['Branch']['movil']); ?>&nbsp;</td>
		<td><?php echo h($branch['Branch']['fax']); ?>&nbsp;</td>
		<td><?php echo h($branch['Branch']['contact']); ?>&nbsp;</td>
		<td class="actions">
			<!-- <?php echo $this->Html->link(__('Ver'), array('action' => 'view', $branch['Branch']['id']),array('class' => 'ok btn btn-info  ')); ?> -->
			<?php echo $this->Html->link(__('Editar'), array('action' => 'edit', $branch['Branch']['id']),array('class' => 'ok btn btn-info  ')); ?>
			<?php echo $this->Form->postLink(__('Borrar'), array('action' => 'delete', $branch['Branch']['id']),array('class' => 'ok btn btn-info  '), __('Are you sure you want to delete # %s?', $branch['Branch']['id'])); ?>
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
	<h3><?php echo __('Actions'); ?></h3>
	<?php echo $this->Html->link(__('Nueva Sucursal'), array('action' => 'add'),array('class' => 'ok btn btn-info  ')); ?>
		<?php echo $this->Html->link(__('Listar Empresas'), array('controller' => 'companies', 'action' => 'index'),array('class' => 'ok btn btn-info  ')); ?> 
		<?php echo $this->Html->link(__('Nueva Empresa'), array('controller' => 'companies', 'action' => 'add'),array('class' => 'ok btn btn-info  ')); ?> 
		<?php echo $this->Html->link(__('Listar Cargos'), array('controller' => 'charges', 'action' => 'index'),array('class' => 'ok btn btn-info  ')); ?> 
		<?php echo $this->Html->link(__('Nuevo Cargo'), array('controller' => 'charges', 'action' => 'add'),array('class' => 'ok btn btn-info  ')); ?> 
	
</div>
