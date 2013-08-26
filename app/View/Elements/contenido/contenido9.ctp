<div class="row-fluid">
	<div class="span12">
		<h3 style="color:#25A781;border-bottom: 8px solid #25A781;">Lizta de cotizacion</h3>
	</div>
</div>
<br>
<br>
<div class="container" style="min-height: 800px;">
	<div class="row-fluid" style="color:#25A781;border-bottom: 2px solid #25A781;">
		<div class="span12">
			<table class="table table-striped">
			               <thead style="color: cornsilk;background-image: linear-gradient(to bottom, #A39B9B, #0C6B5E);">
			                <tr>
			                   <th style="vertical-align: middle;text-align: center;" colspan="2" >Producto</th>
			                  <th style="vertical-align: middle;text-align: center;">Cantidad</th>
			                  <th style="vertical-align: middle;text-align: center;">Detalle</th>
			                </tr>
			              </thead>
			              <tbody>
			              <?php  foreach ($items as $value) { ?>
			                <tr>
			                 <td style="vertical-align: middle;text-align: center;"><?php echo $this->Html->image(("images_item/filename/".$value['img'].""),array('style' => 'width: 120px;height: 135px;' ))?> </td>
			 					<td style="vertical-align: middle;text-align: center;"> <?php echo $value['name'] ?></td>  										
			                
			                  <td style="vertical-align: middle;text-align: center;"><?php echo $value['cantidad'] ?></td>
			                  <td style="vertical-align: middle;text-align: center;"><?php echo $value['detalle'] ?></td>
			                </tr>
			               <?php } ?>
			              </tbody>
			</table>
		</div>
	</div>
	<br>
	<br>
<div class="row-fluid">
	<div class="span12">
<div class="quotes form cotizartext" style="width: 70%;background-color: #E4DDCA;margin-left: auto;margin-right: auto;">

<?php echo $this->Form->create('Quote'); ?>
	<fieldset class="offset1" >
		<legend> <h5 style="text-align: left;padding: 20px 0px 0px;"><?php echo __('Complete sus datos correctos para enviarle la cotizacion, gracias...'); ?></h5></legend>
		<div class="row-fluid">
			<div class="span3"><h5>Nombre Completo:</h5></div>
			<div class="span6" style="text-align: left;"><?php echo $this->Form->input('fullname',array('label'=>'','class' => 'cotizarfrm')); ?></div>
		</div>
		<div class="row-fluid">
			<div class="span3"><h5>Direccion:</h5></div>
			<div class="span6" style="text-align: left;"><?php echo $this->Form->input('address',array('type'=>'text','label'=>'','class' => 'cotizarfrm')); ?></div>
		</div>
		<div class="row-fluid">
			<div class="span3"><h5>Telefono/ Celular:</h5></div>
			<div class="span5" style="text-align: left;"><?php echo $this->Form->input('phone',array('label'=>'','class' => 'cotizarfrm')); ?></div>
		</div>
		<div class="row-fluid">
			<div class="span3"><h5>E-mail:</h5></div>
			<div class="span6" style="text-align: left;"><?php echo $this->Form->input('email',array('label'=>'','class' => 'cotizarfrm'));?></div>
		</div>
		<div class="row-fluid">
			<div class="span3">Mensaje</div>
			<div class="span7" style="text-align: left;"><?php echo $this->Form->input('message',array('label'=>'','class' => 'cotizarfrm'));?></div>
		</div>
	</fieldset>
	
	<?php echo $this->Form->end(array('label' => __('&nbsp;&nbsp;&nbsp;&nbsp;Enviar datos&nbsp;&nbsp;&nbsp;&nbsp;', true), 'escape' => false ,'class' => 'ok btn btn-info btn-large','style'=>'margin-right: 13%;')); ?>
	<br>

</div>

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
