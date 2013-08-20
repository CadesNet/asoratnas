<div class="tips index">
	<h2><?php echo __('Cuida tu salud'); ?></h2>
	<table class = "table" cellpadding="0" cellspacing="0">
	<tr>
			
			<th><?php echo $this->Paginator->sort('title','Titulo'); ?></th>
			<th><?php echo $this->Paginator->sort('description','Descripción'); ?></th>
			<th><?php echo $this->Paginator->sort('filename','Imagen'); ?></th>
			<th><?php echo $this->Paginator->sort('dir','Dirección'); ?></th>
			<th class="actions"><?php echo __('Acciones'); ?></th>
	</tr>
	<?php foreach ($tips as $tip): ?>
	<tr>
		
		<td><?php echo h($tip['Tip']['title']); ?>&nbsp;</td>
		<td><?php echo h($tip['Tip']['description']); ?>&nbsp;</td>
		
		<td> <div style = "max-width:200px;"> <?php echo $this->Html->image('tip/filename/'.h($tip['Tip']['filename'])); ?>&nbsp;</td>
		<td><?php echo h($tip['Tip']['dir']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('Ver'), array('action' => 'view', $tip['Tip']['id']),array('class' => 'ok btn btn-info  ')); ?>
			<?php echo $this->Html->link(__('Editar'), array('action' => 'edit', $tip['Tip']['id']),array('class' => 'ok btn btn-info  ')); ?>
			<?php echo $this->Form->postLink(__('Borrar'), array('action' => 'delete', $tip['Tip']['id']),array('class' => 'ok btn btn-info  '), __('Are you sure you want to delete # %s?', $tip['Tip']['id']),array('class' => 'ok btn btn-info  ')); ?>
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

		<?php echo $this->Html->link(__('Nuevo Tip'), array('action' => 'add'),array('class' => 'ok btn btn-info  ')); ?>
</div>
