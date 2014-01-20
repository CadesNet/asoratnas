<div class="newRequirements index">
	<h2><?php echo __('Nuevos Requerimientos'); ?></h2>
	<table class = "table" cellpadding="0" cellspacing="0">
	<tr>
			
			<th><?php echo $this->Paginator->sort('branch_id','Sucursal'); ?></th>
			<th><?php echo $this->Paginator->sort('charge','Cargo'); ?></th>
			<th><?php echo $this->Paginator->sort('fullname','Nombre completo'); ?></th>
			<th><?php echo $this->Paginator->sort('date_of_birth','Fecha de nacimiento'); ?></th>
			<th><?php echo $this->Paginator->sort('sex','Sexo'); ?></th>
			<th><?php echo $this->Paginator->sort('address','Direccion'); ?></th>
			<th><?php echo $this->Paginator->sort('phone','Telefono'); ?></th>
			<th><?php echo $this->Paginator->sort('email','Email'); ?></th>
			<th><?php echo $this->Paginator->sort('curriculum'); ?></th>
			<th><?php echo $this->Paginator->sort('message','Mensaje'); ?></th>
			<th><?php echo $this->Paginator->sort('created','Fecha de creacion'); ?></th>
			
			<th class="actions"><?php echo __('Acción'); ?></th>
	</tr>
	<?php foreach ($newRequirements as $newRequirement): ?>
	<tr>
		
		<td>
			<?php echo h($newRequirement['Branch']['name']); ?>&nbsp;</td>
		<td><?php echo h($newRequirement['NewRequirement']['charge']); ?>&nbsp;</td>
		<td><?php echo h($newRequirement['NewRequirement']['fullname']); ?>&nbsp;</td>
		<td><?php echo h($newRequirement['NewRequirement']['date_of_birth']); ?>&nbsp;</td>
		<td><?php echo h($newRequirement['NewRequirement']['sex']); ?>&nbsp;</td>
		<td><?php echo h($newRequirement['NewRequirement']['address']); ?>&nbsp;</td>
		<td><?php echo h($newRequirement['NewRequirement']['phone']); ?>&nbsp;</td>
		<td><?php echo h($newRequirement['NewRequirement']['email']); ?>&nbsp;</td>
		<td><?php echo h($newRequirement['NewRequirement']['curriculum']); ?>&nbsp;</td>
		<td><?php echo h($newRequirement['NewRequirement']['message']); ?>&nbsp;</td>
		<td><?php echo h($newRequirement['NewRequirement']['created']); ?>&nbsp;</td>
	
		<td class="actions">
			<?php echo $this->Html->link(__('Ver'), array('action' => 'view', $newRequirement['NewRequirement']['id']),array('class' => 'ok btn btn-info ')); ?>					
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