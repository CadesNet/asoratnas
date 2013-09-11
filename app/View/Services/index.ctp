<div class="services index">
	<h2><?php echo __('Servicios'); ?></h2>
	<table class = "table" cellpadding="0" cellspacing="0">
	<tr>
			
			<th><?php echo $this->Paginator->sort('content','Contenido'); ?></th>
			<th class="actions"><?php echo __('Acciones'); ?></th>
	</tr>
	<?php foreach ($services as $service): ?>
	<tr>
		
		<td><?php

			 $body =  h($service['Service']['content']);
      	     $bodyNew = html_entity_decode($body);
        	 echo $bodyNew; 
        	 ?>&nbsp;</td>
		<td class="actions">
			<!-- <?php echo $this->Html->link(__('Ver'), array('action' => 'view', $service['Service']['id']),array('class' => 'ok btn btn-info  ')); ?> -->
			<?php echo $this->Html->link(__('Editar'), array('action' => 'edit', $service['Service']['id']),array('class' => 'ok btn btn-info  ')); ?>
			<?php echo $this->Form->postLink(__('Borrar'), array('action' => 'delete', $service['Service']['id']),array('class' => 'ok btn btn-info  '), __('Are you sure you want to delete # %s?', $service['Service']['id'])); ?>
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
		echo $this->Paginator->next(__('siguiente') . ' >', array(), null, array('class' => 'next disabled'));
	?>
	</div>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<?php echo $this->Html->link(__('Nuevo Servicio'), array('action' => 'add'),array('class' => 'ok btn btn-info  ')); ?></li>
	
</div>
