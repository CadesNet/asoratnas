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
			              <thead style="color: cornsilk;background-image: linear-gradient(to bottom, #A39B9B, #0C6B5E);">
			                <tr >
			                  <th style="vertical-align: middle;text-align: center;" colspan="2" >Producto</th>
			                  <th style="vertical-align: middle;text-align: center;">Cantidad</th>
			                  <th style="vertical-align: middle;text-align: center;">Detalle</th>
			                  <th style="vertical-align: middle;text-align: center;">Quitar</th>
			                  <th style="vertical-align: middle;text-align: center;">Modificar</th>
			                </tr>
			              </thead>
			              <tbody>
			              <?php  
			              $i=0;
			              $j=0;
			             // print_r($items);
			              foreach ($items as $value) { ?>
			                <tr>
							<?php 	
				              echo $this->Form->create(null, array('action' => 'modificar')); ?>
			 				
			 				<td style="vertical-align: middle;text-align: center;"><?php echo $this->Html->image(("images_item/filename/".$value['img'].""),array('style' => 'width: 120px;height: 135px;' ))?> 
							</td>
			 				<td style="vertical-align: middle;text-align: center;"> <?php 
			 					echo $value['name'] ?>

			 				</td>  										
				             <td style="vertical-align: middle;text-align: center;"><?php //echo $value['cantidad'];  
				             echo $this->Form->input('numero',array('label' => '','type' => 'text','default'=> $value['cantidad']), array('style' => '' ));
				             	echo $this->Form->input('id1',array('type' => 'hidden','default'=>  $i++));
				             	echo $this->Form->input('id',array('type' => 'hidden','default'=>  $value['id']));
								echo $this->Form->input('img',array('type' => 'hidden','default'=>   $value['img']));
								echo $this->Form->input('name',array('type' => 'hidden','default'=>  $value['name']));
							    
				              ?></td>
				              <td style="vertical-align: middle;text-align: center;">
				              	<?php // echo $value['detalle'];	
				              	echo $this->Form->input('detalle',array('label' => '','type' => 'textarea','default'=> $value['detalle'])); ?>
				              </td>
			                  <td style="vertical-align: middle;text-align: center;">
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
			<?php echo $this->Html->link(__('Agrear mas productos'), array('controller' => 'Categories', 'action' => 'select'), array('class' => 'btn btn-info btn-large')); ?>
			<?php echo $this->Html->link(__('Confirmar cotizacion'), array('controller' => 'Quotes', 'action' => 'cotizar'), array('class' => 'btn btn-info btn-large')); ?>
		</div>
	</div>

</div>

<div class="row-fluid">
	<div class="span12">
		<h4 style="color:#979E9D">Encuentranos en</h4> 
	</div>
</div>
<div class="row-fluid">
		<div class="span12">

<div class="list_carousel responsive" style="height:90px">

				<ul id="foo5" style="height:100%">
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
