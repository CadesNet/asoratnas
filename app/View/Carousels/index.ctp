<div class="carousels index">
	<h2><?php echo __('Carousels'); ?></h2>
	<table class = "table" cellpadding="0" cellspacing="0">
	<tr>

			<th><?php echo $this->Paginator->sort('filename','Imagen'); ?></th>
			<th><?php echo $this->Paginator->sort('description','Descripción'); ?></th>
			<th><?php echo $this->Paginator->sort('number','Carousel'); ?></th>
			<th class="actions"><?php echo __('Acción'); ?></th>
	</tr>
	<?php foreach ($carousels as $carousel): ?>
	<tr>
		<td><?php echo $this->Html->image('carousel/filename/'.h($carousel['Carousel']['filename'])); ?>&nbsp;</td>
		<td><?php echo h($carousel['Carousel']['description']); ?>&nbsp;</td>
		<td><?php echo h($carousel['Carousel']['number']); ?>&nbsp;</td>
		<td class="actions">
			
			<?php echo $this->Html->link(__('Editar'), array('action' => 'edit', $carousel['Carousel']['id']),array('class' => 'ok btn btn-info ')); ?>
			<?php echo $this->Form->postLink(__('Borrar'), array('action' => 'delete', $carousel['Carousel']['id']),array('class' => 'ok btn btn-info '), __('¿Está seguro de que desea eliminar esta imagen?'),array('class' => 'ok btn btn-info ')); ?>
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
	<ul>
		<li><?php echo $this->Html->link(__('Nueva Imagen'), array('action' => 'add'),array('class' => 'ok btn btn-info btn-large')); ?></li>
	</ul>
</div>
 <p>&nbsp; </p>
 <p>&nbsp; </p>