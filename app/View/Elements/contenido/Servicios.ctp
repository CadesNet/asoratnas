<div class="row-fluid">
	<div class="span12">
		<h3 style="color:#25A781;border-bottom: 8px solid #25A781;">Servicios</h3>
	</div>
</div>
<br>
<br>
<div class="container-fluid">
	
	 <?php 
		 	foreach ($services as $value) { ?>
	<div class="row-fluid">
		<div class="span12">
		
		 	<?php 	echo $value['Service']['content'];?>
		 
		</div>
	</div>
	<br/>
	<br/>
	<br/>
	
	<div class="row-fluid">
		<div class="span12">
			<div class="quoteServices form cotizartext" style="width: 70%;background-color: #E4DDCA;margin-left: auto;margin-right: auto;">
			<?php echo $this->Form->create('QuoteService',array('action' => 'select' )); ?>
				<fieldset class="offset1" >
					<legend> <p class="legend_form"><?php echo __('Complete sus datos correctos gracias...'); ?></p></legend>
					<?php echo $this->Form->input('service_id',array('type' => 'hidden','default'=> $value['Service']['id']));?>
					<div class="row-fluid">
						<div class="span3"><p class="stylo_form">Nombre Completo:</p></div>
						<div class="span6" style="text-align: left;"><?php echo $this->Form->input('fullname',array('label'=>'','class' => 'cotizarfrm')); ?></div>
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
						<div class="span3"><p class="stylo_form">Asunto<p></div>
						<div class="span7" style="text-align: left;"><?php echo $this->Form->input('issue',array('label'=>'','class' => 'cotizarfrm'));?></div>
					</div>
					<div class="row-fluid">
						<div class="span3"><p class="stylo_form">Mensaje</p></div>
						<div class="span7" style="text-align: left;"><?php echo $this->Form->input('message',array('label'=>'','class' => 'cotizarfrm'));?></div>
					</div>
				</fieldset>
			<?php echo $this->Form->end(array('label' => __('&nbsp;&nbsp;&nbsp;&nbsp;Enviar datos&nbsp;&nbsp;&nbsp;&nbsp;', true), 'escape' => false ,'class' => 'ok btn btn-large','style'=>'margin-right: 13%;color: rgb(255, 255, 255);background-image: -webkit-gradient(linear, 0 0, 0 100%, from(rgb(34, 161, 140)), to(rgb(9, 99, 87)));')); ?>
	<br>

			</div>
		</div>
	</div>
<?php	} ?>

</div>