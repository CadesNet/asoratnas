<div class="carousels index">
	<h2><?php echo __('Carousels'); ?></h2>
	<table class = "table" cellpadding="0" cellspacing="0">
	<tr>

			<th><?php echo $this->Paginator->sort('filename','Imagen'); ?></th>
			<th><?php echo $this->Paginator->sort('description','Descripcion'); ?></th>
			<th><?php echo $this->Paginator->sort('number','Numero'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($carousels as $carousel): ?>
	<tr>
		<td><?php echo $this->Html->image('carousel/filename/'.h($carousel['Carousel']['filename'])); ?>&nbsp;</td>
		<td><?php echo h($carousel['Carousel']['description']); ?>&nbsp;</td>
		<td><?php echo h($carousel['Carousel']['number']); ?>&nbsp;</td>
		<td class="actions">
			
			<?php echo $this->Html->link(__('Editar'), array('action' => 'edit', $carousel['Carousel']['id']),array('class' => 'ok btn btn-info ')); ?>
			<?php echo $this->Form->postLink(__('Borrar'), array('action' => 'delete', $carousel['Carousel']['id']),array('class' => 'ok btn btn-info '), __('Are you sure you want to delete # %s?', $carousel['Carousel']['id']),array('class' => 'ok btn btn-info ')); ?>
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
	<h3><?php echo __('Acción'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Neva imagen'), array('action' => 'add'),array('class' => 'ok btn btn-info btn-large')); ?></li>
	</ul>
</div>
 <p>&nbsp; </p>
 <p>&nbsp; </p>