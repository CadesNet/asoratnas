<div class="presentationsQuotes index">
	<h2><?php  echo __('Cotizaciones de Producto y en que Presentacion'); ?></h2>
	<table class = "table" cellpadding="0" cellspacing="0">
	<tr>

			<th><?php echo ('id'); ?></th>
			<th><?php echo ('Nombre'); ?></th>
			<th><?php echo ('Imagen'); ?></th>
			<th><?php echo ('Cantidad'); ?></th>
			<th><?php echo ('Detalle'); ?></th>

			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	
   <?php $i=0; foreach ($val as $value) { ?>

	<tr>
		
		<td><?php echo h($value['id']); ?>&nbsp;</td>
		<td><?php echo h($value['name']); ?>&nbsp;</td>
		<td><?php echo $this->Html->image('images_presentation/filename/'.h($value['img'])); ?>&nbsp;</td>
		<td><?php echo h($value['cantidad']); ?>&nbsp;</td>
		<td><?php echo h($value['detalle']); ?>&nbsp;</td>
		<td class="actions">
			<?php //echo $this->Html->link(__('View'), array('action' => 'view', $presentationsQuote['PresentationsQuote']['id']),array('class' => 'ok btn btn-info ')); ?>
			<?php //echo $this->Html->link(__('Edit'), array('action' => 'edit', $presentationsQuote['PresentationsQuote']['id']),array('class' => 'ok btn btn-info ')); ?>
			<?php //echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $presentationsQuote['PresentationsQuote']['id']),array('class' => 'ok btn btn-info '), __('Are you sure you want to delete # %s?', $presentationsQuote['PresentationsQuote']['id'])); ?>
		</td>
	</tr>
   <?php $i++; } ?>
	</table>

</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		
		<li><?php echo $this->Html->link(__('List Quotes'), array('controller' => 'quotes', 'action' => 'index'),array('class' => 'ok btn btn-info btn-large')); ?> </li>
		
	</ul>
</div>
 <p>&nbsp; </p>
 <p>&nbsp; </p>