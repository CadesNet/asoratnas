<div class="quoteServices index">
	<h2><?php echo __('Consulta Servicios'); ?></h2>
	<table class = "table" cellpadding="0" cellspacing="0">
	<tr>
		
			<th><?php echo $this->Paginator->sort('fullname','Nombre completo'); ?></th>
			<th><?php echo $this->Paginator->sort('address','Dirección'); ?></th>
			<th><?php echo $this->Paginator->sort('phone','Teléfono'); ?></th>
			<th><?php echo $this->Paginator->sort('email','Email'); ?></th>
			<th><?php echo $this->Paginator->sort('issue','Razon'); ?></th>
			<th><?php echo $this->Paginator->sort('message','Mensaje'); ?></th>
			<th><?php echo $this->Paginator->sort('created','Fecha de creacion'); ?></th>
			
			<th class="actions"><?php echo __('Acción'); ?></th>
	</tr>
	<?php foreach ($quoteServices as $quoteService): ?>
	<tr>
		
		<td><?php echo h($quoteService['QuoteService']['fullname']); ?>&nbsp;</td>
		<td><?php echo h($quoteService['QuoteService']['address']); ?>&nbsp;</td>
		<td><?php echo h($quoteService['QuoteService']['phone']); ?>&nbsp;</td>
		<td><?php echo h($quoteService['QuoteService']['email']); ?>&nbsp;</td>
		<td><?php echo h($quoteService['QuoteService']['issue']); ?>&nbsp;</td>
		<td><?php echo h($quoteService['QuoteService']['message']); ?>&nbsp;</td>
		<td><?php echo h($quoteService['QuoteService']['created']); ?>&nbsp;</td>	
		<td class="actions">
			<?php echo $this->Html->link(__('Ver'), array('action' => 'view', $quoteService['QuoteService']['id']),array('class' => 'ok btn btn-info ')); ?>		
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