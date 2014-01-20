<div class="ads index">
	<h2><?php echo __('Ver Notificación'); ?></h2>
	<table class = "table" cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('type','Tipo'); ?></th>
			<th><?php echo $this->Paginator->sort('link','Enlace'); ?></th>
			<th><?php echo $this->Paginator->sort('created','Creado'); ?></th>
			<th><?php echo $this->Paginator->sort('modified','Modificado'); ?></th>
			<th><?php echo $this->Paginator->sort('filename','Imagen'); ?></th>

			<th class="actions"><?php echo __('Acción'); ?></th>
	</tr>
	<?php foreach ($ads as $ad): ?>
	<tr>
		<td><?php echo h($ad['Ad']['type']); ?>&nbsp;</td>
		<td><?php echo h($ad['Ad']['link']); ?>&nbsp;</td>
		<td><?php echo h($ad['Ad']['created']); ?>&nbsp;</td>
		<td><?php echo h($ad['Ad']['modified']); ?>&nbsp;</td>
		<td><?php echo $this->Html->image('ad/filename/'.h($ad['Ad']['filename'])); ?>&nbsp;</td>
		<td class="actions">
			
			<?php echo $this->Html->link(__('Editar'), array('action' => 'edit', $ad['Ad']['id']),array('class' => 'ok btn btn-info  ')); ?> 
			<?php echo $this->Form->postLink(__('Borrar'), array('action' => 'delete', $ad['Ad']['id']),array('class' => 'ok btn btn-info'), __('¿Está seguro de que desea eliminar esta noticia?')); ?>
		</td>
	</tr>
	<?php endforeach; ?>
	</table>
		<div class="paginator" style="float: right;">
			<?php


			// Shows the next and previous links
			echo $this->Paginator->prev('« Anterior', null, null, array('class' => 'disabled'));
			  //Shows the page numbers
			echo "&nbsp;".$this->Paginator->numbers()."&nbsp;";
			echo $this->Paginator->next('Siguiente »', null, null, array('class' => 'disabled'));

			// prints X of Y, where X is current page and Y is number of pages
			//echo $this->Paginator->counter();
			        ?>
		</div>
</div>
<div class="actions">
	<h3><?php echo __('Acción'); ?></h3>
	<?php echo $this->Html->link(__('Nueva Notificacion'), array('action' => 'add'),array('class' => 'ok btn btn-info  ')); ?>
</div>
 <p>&nbsp; </p>
 <p>&nbsp; </p>