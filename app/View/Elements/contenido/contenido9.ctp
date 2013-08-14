<table class="table table-striped">
              <thead>
                <tr>
                  <th>Producto</th>
                  <th>Cantidad</th>
                  <th>Detalle</th>
                  <th>Quitar</th>
                </tr>
              </thead>
              <tbody>
              <?php  foreach ($items as $value) { ?>
                <tr>
                  <td><?php echo $value['img'] ?> // <?php echo $value['name'] ?></td>
                
                  <td><?php echo $value['cantidad'] ?></td>
                  <td><?php echo $value['detalle'] ?></td>
                  <td><?php echo $this->Html->link(__('quitar'), array('controller' => 'ItemsQuotes', 'action' => 'select1',$value['id'])); ?></td>
                </tr>
               <?php } ?>
              </tbody>
</table>

<div class="quotes form">
<?php echo $this->Form->create('Quote'); ?>
	<fieldset>
		<legend><?php echo __('Add Quote'); ?></legend>
	<?php
		echo $this->Form->input('fullname');
		echo $this->Form->input('address');
		echo $this->Form->input('phone');
		echo $this->Form->input('email');
		echo $this->Form->input('message');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>

