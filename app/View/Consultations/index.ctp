<div class="consultations index">
	<h2><?php echo __('Consultas'); ?></h2>
	<table class = "table" cellpadding="0" cellspacing="0">
	<tr>
			
			<th><?php echo $this->Paginator->sort('name','Nombre'); ?></th>
			<th><?php echo $this->Paginator->sort('address','Dirección'); ?></th>
			<th><?php echo $this->Paginator->sort('phone','Teléfono'); ?></th>
			<th><?php echo $this->Paginator->sort('email','Email'); ?></th>
			<th><?php echo $this->Paginator->sort('message','Mensaje'); ?></th>
			<th><?php echo $this->Paginator->sort('created','Creado'); ?></th>
			<th class="actions"><?php echo __('Acción'); ?></th>
	</tr>
	<?php foreach ($consultations as $consultation): ?>
	<tr>
		
		<td><?php echo h($consultation['Consultation']['name']); ?>&nbsp;</td>
		<td><?php echo h($consultation['Consultation']['address']); ?>&nbsp;</td>
		<td><?php echo h($consultation['Consultation']['phone']); ?>&nbsp;</td>
		<td><?php echo h($consultation['Consultation']['email']); ?>&nbsp;</td>
		<td><?php echo h($consultation['Consultation']['message']); ?>&nbsp;</td>
		<td><?php echo h($consultation['Consultation']['created']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('Ver'), array('action' => 'view', $consultation['Consultation']['id']),array('class' => 'ok btn btn-info  ')); ?>
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

 <p>&nbsp; </p>
 <p>&nbsp; </p>