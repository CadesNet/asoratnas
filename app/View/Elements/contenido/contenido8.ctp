<table class="table table-striped">
              <thead>
                <tr>
                  <th>Producto</th>
                  <th>Cantidad</th>
                  <th>Detalle</th>
                  <th>Quitar</th>
                  <th>Modificar</th>
                </tr>
              </thead>
              <tbody>
              <?php  
              $i=0;
              $j=0;
              print_r($items);
              foreach ($items as $value) { ?>
                <tr>
				<?php 	
	              echo $this->Form->create(null, array('action' => 'modificar')); ?>
 				
 					<td><?php echo $value['img'] ?> // <?php echo $value['name'] ?></td>  										
	             <td><?php echo $value['cantidad'];  
	             echo $this->Form->input('cantidad',array('type' => 'text'));
	             	echo $this->Form->input('id1',array('type' => 'hidden','default'=>  $i++));
	             	echo $this->Form->input('id',array('type' => 'hidden','default'=>  $value['id']));
					echo $this->Form->input('img',array('type' => 'hidden','default'=>   $value['img']));
					echo $this->Form->input('name',array('type' => 'hidden','default'=>  $value['name']));
				    
	              ?></td>
	              <td>
	              	<?php  $value['detalle'];	echo $this->Form->input('detalle',array('type' => 'text')); ?>
	              </td>

	              <td><?php echo $value['detalle'] ?></td>
                  <td><?php echo $this->Html->link(__('Quitar'), array('controller' => 'Quotes', 'action' => 'quitar',$j++)); ?></td>
						
				  <td>
		          <?php echo $this->Form->end('Modificar'); ?>
		          </td>
				</tr>

           



               <?php } ?>
              </tbody>
</table>
<div class="row-fluid">
	<div class="span12">
		<?php echo $this->Html->link(__('Agrear mas productos'), array('controller' => 'Categories', 'action' => 'select')); ?>
		<?php echo $this->Html->link(__('Confirmar cotizacion'), array('controller' => 'Quotes', 'action' => 'cotizar')); ?>
	</div>
</div>