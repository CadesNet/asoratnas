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
			<table  class="table table-striped span12">
			               <thead class ="cotizartable">
			                <tr class="row-fluid">
			                   <th class="span12"  style="vertical-align: middle;text-align: center;" >Producto</th>
			                  <th class="span12" style="vertical-align: middle;text-align: center;">Cantidad</th>
			                  <th class="span12" style="vertical-align: middle;text-align: center;">Detalle</th>
			                </tr>
			              </thead>
			              <tbody row-fluid>
			              <?php  foreach ($items as $value) { ?>
			                <tr class="row-fluid">
<<<<<<< HEAD
			                 <td  class="span12" style="vertical-align: middle;text-align: center;"><?php echo $this->Html->image(("images_presentation/filename/".$value['img'].""),array('style' => 'width: 100px;height: 135px;' ))?> <p style="font-size: 80%;"><?php echo $value['name'] ?></p> 
=======
			                 <td  class="span12" style="vertical-align: middle;text-align: center;"><?php echo $this->Html->image(("images_item/filename/".$value['img'].""),array('style' => 'width: 100px;height: 135px;' ))?> <?php echo $value['name'] ?>
>>>>>>> b6abcb8f17127e7992c4b9391ac8f4dc08532886
			                 </td>
			 							
			                  <td  class="span12" style="vertical-align: middle;text-align: center;"><?php echo $value['cantidad'] ?></td>
			                  <td  class="span12" style="vertical-align: middle;text-align: center;"><?php echo $value['detalle'] ?></td>
			                </tr>
			               <?php } ?>
			              </tbody>
			</table>
		</div>
	</div>
	
		<br/>
	<br/>
	<br/>
<div class="row-fluid">
	<div class="span12">
<div class="quotes form cotizartext" style="width: 70%;background-color: #E4DDCA;margin-left: auto;margin-right: auto;">

<?php echo $this->Form->create('Quote'); ?>
	<fieldset class="offset1" >
		<legend> <p class="legend_form"><?php echo __('Complete sus datos correctos para enviarle la cotizacion, gracias...'); ?></p></legend>
		<div class="row-fluid">
			<div class="span3"><p class="stylo_form">Nombre Completo:</p></div>
<<<<<<< HEAD
			<div class="span6" style="text-align: left;"><?php echo $this->Form->input('name',array('label'=>'','class' => 'cotizarfrm')); ?></div>
=======
			<div class="span6" style="text-align: left;"><?php echo $this->Form->input('fullname',array('label'=>'','class' => 'cotizarfrm')); ?></div>
>>>>>>> b6abcb8f17127e7992c4b9391ac8f4dc08532886
		</div>
		<div class="row-fluid">
			<div class="span3"><p class="stylo_form">Direccion:</p></div>
			<div class="span6" style="text-align: left;"><?php echo $this->Form->input('address',array('type'=>'text','label'=>'','class' => 'cotizarfrm')); ?></div>
		</div>
		<div class="row-fluid">
			<div class="span3"><p class="stylo_form">Telefono/ Celular:</p></div>
			<div class="span5" style="text-align: left;"><?php echo $this->Form->input('phone',array('label'=>'','class' => 'cotizarfrm')); ?></div>
		</div>
		<div class="row-fluid">
			<div class="span3"><p class="stylo_form">E-mail:</p></div>
			<div class="span6" style="text-align: left;"><?php echo $this->Form->input('email',array('label'=>'','class' => 'cotizarfrm'));?></div>
		</div>
		<div class="row-fluid">
			<div class="span3"><p class="stylo_form">Mensaje</p></div>
			<div class="span7" style="text-align: left;"><?php echo $this->Form->input('message',array('label'=>'','class' => 'cotizarfrm'));?></div>
		</div>
	</fieldset>
	
	<?php echo $this->Form->end(array('label' => __('&nbsp;&nbsp;&nbsp;&nbsp;Enviar datos&nbsp;&nbsp;&nbsp;&nbsp;', true), 'escape' => false ,'class' => 'ok btn btn-warning btn-large','style'=>'margin-right: 13%;')); ?>
	<br>

</div>

	</div>
</div>
</div>

<div class="row-fluid" style="">
	<p style="color: #889091;">Encuentranos en:</p>
</div>
<div class="row-fluid">
		<div class="span12">

<<<<<<< HEAD
<div class="list_carousel responsive" style="height:70px">
=======
<div class="list_carousel responsive" style="height:90px">
>>>>>>> b6abcb8f17127e7992c4b9391ac8f4dc08532886

				<ul id="foo5" style="height:100%">
					<?php foreach($supermarkets as $supermarket) { ?>
						<li style="width:80px">
						<?php 
					echo $this->Html->link($this->Html->image("supermarket/filename/".$supermarket['Supermarket']['filename'], array("alt" => "Empresa")),$supermarket['Supermarket']['link'],array('escape' => false , 'class' => 'brand'));  
			    	    ?>
						</li>
						<?php }	 ?>
<<<<<<< HEAD
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
=======
>>>>>>> b6abcb8f17127e7992c4b9391ac8f4dc08532886

				</ul>
			</div>



	

</div>	
</div>
<<<<<<< HEAD

 <p>&nbsp; </p>

=======
>>>>>>> b6abcb8f17127e7992c4b9391ac8f4dc08532886
