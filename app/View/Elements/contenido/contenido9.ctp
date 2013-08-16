<table class="table table-striped">
              <thead>
                <tr>
                   <th  colspan="2" >Producto</th>
                  <th>Cantidad</th>
                  <th>Detalle</th>
                </tr>
              </thead>
              <tbody>
              <?php  foreach ($items as $value) { ?>
                <tr>
                 <td><?php echo $this->Html->image("images_item/filename/".$value['img']."")?> </td>
 					<td> <?php echo $value['name'] ?></td>  										
                
                  <td><?php echo $value['cantidad'] ?></td>
                  <td><?php echo $value['detalle'] ?></td>
                </tr>
               <?php } ?>
              </tbody>
</table>

<div class="quotes form">

<?php echo $this->Form->create('Quote'); ?>
	<fieldset>
		<legend><?php echo __('Complete sus datos correctos para enviarle la cotizacion, gracias...'); ?></legend>
	<?php
		echo $this->Form->input('fullname');
		echo $this->Form->input('address');
		echo $this->Form->input('phone');
		echo $this->Form->input('email');
		echo $this->Form->input('message');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Enviar datos')); ?>
</div>

