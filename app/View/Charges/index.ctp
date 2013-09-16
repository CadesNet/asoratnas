<div class="charges index">
	<h2><?php echo __('Cargos'); ?></h2>
	<table class = "table" cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo ('Sucursal'); ?></th>
			<th><?php echo ('Titulo'); ?></th>
			<th><?php echo ('Fecha de expiración'); ?></th>
			<th><?php echo ('Descripción'); ?></th>
			<th><?php echo ('Formación'); ?></th>
			
			<th><?php echo ('Ultima modificación'); ?></th>
			<th class="actions"><?php echo __('Acciones'); ?></th>
	</tr>
	<?php foreach ($charges as $charge): ?>
	<tr>
		
		<td>
			<?php echo h($charge['Branch']['name']); ?>&nbsp;</td>
		<td><?php echo h($charge['Charge']['title']); ?>&nbsp;</td>
		<td><?php echo h($charge['Charge']['deadline']); ?>&nbsp;</td>
		<td><?php echo h($charge['Charge']['description']); ?>&nbsp;</td>
		<td><?php echo h($charge['Charge']['formation']); ?>&nbsp;</td>
		
		<td><?php echo h($charge['Charge']['modified']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('Postulantes Requerimientos'), array('controller'=>'Requirements','action' => 'index', $charge['Charge']['id'],$charge['Branch']['id']),array('class' => 'ok btn btn-info ')); ?>
		</td>
	</tr>
<?php endforeach; ?>
	</table>

</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		
		<li><?php echo $this->Html->link(__('List Sucursales'), array('controller'=>'Branches','action' => 'index'),array('class' => 'ok btn btn-info btn-large')); ?> </li>
	</ul>
</div>

 <p>&nbsp; </p>
 <p>&nbsp; </p>