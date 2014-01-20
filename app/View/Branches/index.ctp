<div class="branches index">
	<h2><?php echo __('Sucursales'); ?></h2>
	<table class = "table" cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('name','Nombre'); ?></th>
			<th><?php echo $this->Paginator->sort('filename','Nombre de Archivo'); ?></th>			
			<th><?php echo $this->Paginator->sort('type','Tipo'); ?></th>
			<th><?php echo $this->Paginator->sort('address','Dirección'); ?></th>
			<th><?php echo $this->Paginator->sort('phone','Teléfono'); ?></th>
			<th><?php echo $this->Paginator->sort('movil','Movil'); ?></th>
			<th><?php echo $this->Paginator->sort('fax'); ?></th>
			<th><?php echo $this->Paginator->sort('contact','Contacto'); ?></th>
			<th class="actions"><?php echo __('Acción'); ?></th>
	</tr>
	<?php foreach ($branches as $branch): ?>
	<tr>
		<td><?php echo h($branch['Branch']['name']); ?>&nbsp;</td>
		<td><?php echo $this->Html->image('branch/filename/'.h($branch['Branch']['filename'])); ?>&nbsp;</td>		
		<td><?php echo h($branch['Branch']['type']); ?>&nbsp;</td>
		<td><?php echo h($branch['Branch']['address']); ?>&nbsp;</td>
		<td><?php echo h($branch['Branch']['phone']); ?>&nbsp;</td>
		<td><?php echo h($branch['Branch']['movil']); ?>&nbsp;</td>
		<td><?php echo h($branch['Branch']['fax']); ?>&nbsp;</td>
		<td><?php echo h($branch['Branch']['contact']); ?>&nbsp;</td>
		<td class="actions">
			<!-- <?php echo $this->Html->link(__('Ver'), array('action' => 'view', $branch['Branch']['id']),array('class' => 'ok btn btn-info  ')); ?> -->
			<?php echo $this->Html->link(__('Ver cargos'), array('controller'=>'Charges','action' => 'index', $branch['Branch']['id']),array('class' => 'ok btn btn-info  ')); ?>
			
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
<br>
<br>
<br>
