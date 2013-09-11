<div class="row-fluid">
	<div class="span12">
		<h3 style="color:#25A781;border-bottom: 8px solid #25A781;">Contactos</h3>
	</div>
</div>
<br>
<br>
<div class="container" style="min-height: 800px;">
	<div class="row-fluid" style="color:#25A781;border-bottom: 2px solid #25A781;">
		<div class="span12">

			<table class="table table-striped ">
			             <thead class ="cotizartable">
			                <tr class="row-fluid">
			                  <th class="span12"  style="vertical-align: middle;text-align: center;">&nbsp;&nbsp;&nbsp;&nbsp;Producto&nbsp;&nbsp;&nbsp;&nbsp;</th>
			                  <th class="span12"  style="vertical-align: middle;text-align: center;">Cantidad</th>
			                  <th class="span12"  style="vertical-align: middle;text-align: center;">Detalle</th>
			                  <th class="span12"  style="vertical-align: middle;text-align: center;">Quitar</th>
			                  <th class="span12" style="vertical-align: middle;text-align: center;">Actualizar</th>

			                </tr>
			              </thead>
			              <tbody>
			              <?php 
			              $i=0;
			              $j=0;
			             
			              foreach ($items as $value) { ?>
			                 <tr class="row-fluid">
							<?php 	
				              echo $this->Form->create(null, array('action' => 'modificar')); ?>
			 				
			 				<td class="span12" style="vertical-align: middle;text-align: center;"><?php echo $this->Html->image(("images_presentation/filename/".$value['img'].""),array('style' => 'width: 100px;height: 135px;' ))?>  
			 				<p style="font-size: 80%;"><?php echo $value['name'] ?></p> 
							</td>
			 				 										
				             <td class="span12" style="vertical-align: middle;text-align: center;"><?php //echo $value['cantidad'];  
				             echo $this->Form->input('numero',array('label' => '','type' => 'text','default'=> $value['cantidad'],'style' => 'width: 85px;'));
				             	echo $this->Form->input('id1',array('type' => 'hidden','default'=>  $i++));
				             	echo $this->Form->input('id',array('type' => 'hidden','default'=>  $value['id']));
								echo $this->Form->input('img',array('type' => 'hidden','default'=>   $value['img']));
								echo $this->Form->input('name',array('type' => 'hidden','default'=>  $value['name']));
							    
				              ?></td>
				              <td class="span12" style="vertical-align: middle;text-align: center;">
				              	<?php // echo $value['detalle'];	
				              	echo $this->Form->input('detalle',array('label' => '','type' => 'textarea','default'=> $value['detalle'])); ?>
				              </td>
			                  <td class="span12" style="vertical-align: middle;text-align: center;">
							<?php echo $this->Html->link("<i class='icon-remove'></i>",array('controller' => 'Quotes', 'action' => 'quitar',$j++),array('escape' => false));
					     ?>
						    	</td>						
							  <td style="vertical-align: middle;text-align: center;">
					          <?php echo $this->Form->button("<i class='icon-repeat'></i>", array('type'=>'submit'),array('escape' => false)); ?>
					          </td>
					          <?php echo $this->Form->end();?>
							</tr>

			           



			               <?php } ?>
			              </tbody>
			</table>
		</div>
	</div>
	<br>
	<br>
	<div class="row-fluid">
		<div class="span12" style="text-align: right;">
			<?php echo $this->Html->link(__('Agrear mas productos'), array('controller' => 'Categories', 'action' => 'select'), array('class' => 'btn btn-warning btn-large')); ?>
			<?php echo $this->Html->link(__('Confirmar cotizacion'), array('controller' => 'Quotes', 'action' => 'cotizar'), array('class' => 'btn btn-warning btn-large')); ?>
		</div>
	</div>

</div>

<div class="row-fluid" style="">
	<p style="color: #889091;">Encuentranos en:</p>
</div>
<div class="row-fluid">
		<div class="span12">

<div class="list_carousel responsive" style="height:70px">

				<ul id="foo5" style="height:100%">
					<?php foreach($supermarkets as $supermarket) { ?>
						<li style="width:80px">
						<?php 
					echo $this->Html->link($this->Html->image("supermarket/filename/".$supermarket['Supermarket']['filename'], array("alt" => "Empresa")),$supermarket['Supermarket']['link'],array('escape' => false , 'class' => 'brand'));  
			    	    ?>
						</li>
						<?php }	 ?>
						<?php foreach($supermarkets as $supermarket) { ?>
						<li style="width:80px">
						<?php 
					echo $this->Html->link($this->Html->image("supermarket/filename/".$supermarket['Supermarket']['filename'], array("alt" => "Empresa")),$supermarket['Supermarket']['link'],array('escape' => false , 'class' => 'brand'));  
			    	    ?>
						</li>
						<?php }	 ?>
						<?php foreach($supermarkets as $supermarket) { ?>
						<li style="width:80px">
						<?php 
					echo $this->Html->link($this->Html->image("supermarket/filename/".$supermarket['Supermarket']['filename'], array("alt" => "Empresa")),$supermarket['Supermarket']['link'],array('escape' => false , 'class' => 'brand'));  
			    	    ?>
						</li>
						<?php }	 ?>

				</ul>
			</div>



	

</div>	
</div>
 <p>&nbsp; </p>
