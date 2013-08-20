<div class="companies index">
	<h2><?php echo __('Compañias'); ?></h2>
	<table class = "table" cellpadding="0" cellspacing="0">
	<tr>
			

			<th><?php echo $this->Paginator->sort('content','Contenido'); ?></th>
			<th class="actions"><?php echo __('Acciones'); ?></th>
	</tr>
	<?php foreach ($companies as $company): ?>
	<tr>
		
		<td><?php
		 $body =  h($company['Company']['content']);
        $bodyNew = html_entity_decode($body);
        	echo $bodyNew;
         ?>&nbsp;</td>
		<td class="actions">
			<!-- <?php echo $this->Html->link(__('Ver'), array('action' => 'view', $company['Company']['id']),array('class' => 'ok btn btn-info  ')); ?> -->
			<?php echo $this->Html->link(__('Editar'), array('action' => 'edit', $company['Company']['id']),array('class' => 'ok btn btn-info  ')); ?>
			<?php echo $this->Form->postLink(__('Eliminar'), array('action' => 'delete', $company['Company']['id']),array('class' => 'ok btn btn-info  '), __('Are you sure you want to delete # %s?', $company['Company']['id'])); ?>
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
		echo $this->Paginator->prev('< ' . __('Anteriores'), array(), null, array('class' => 'prev disabled'));
		echo $this->Paginator->numbers(array('separator' => ''));
		echo $this->Paginator->next(__('siguiente') . ' >', array(), null, array('class' => 'next disabled'));
	?>
	</div>
</div>
<div class="actions">
	<h3><?php echo __('Acciones'); ?></h3>
	<?php echo $this->Html->link(__('Nueva Empresa'), array('action' => 'add'),array('class' => 'ok btn btn-info  ')); ?>
			<?php echo $this->Html->link(__('Mostrar Sucursales'), array('controller' => 'branches', 'action' => 'index'),array('class' => 'ok btn btn-info  ')); ?> <?php echo $this->Html->link(__('Nueva empresa'), array('controller' => 'branches', 'action' => 'add'),array('class' => 'ok btn btn-info  ')); ?>
</div>
