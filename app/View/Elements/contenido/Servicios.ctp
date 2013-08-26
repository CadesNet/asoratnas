<div class="row-fluid">
	<div class="span12">
		<h3 style="color:#25A781;border-bottom: 8px solid #25A781;">Servicios</h3>
	</div>
</div>
<br>
<br>
<div class="container">
	
	 <?php 
		 	foreach ($services as $value) { ?>
	<div class="row-fluid">
		<div class="span12">
		
		 	<?php 	echo $value['Service']['content'];?>
		 
		</div>
	</div>

	<div class="row-fluid">
		<div class="span12">
			<div class="quoteServices form cotizartext" style="width: 70%;background-color: #E4DDCA;margin-left: auto;margin-right: auto;">
			<?php echo $this->Form->create('QuoteService',array('action' => 'select' )); ?>
				<fieldset class="offset1" >
					<legend> <h5 style="text-align: left;padding: 20px 0px 0px;"><?php echo __('Complete sus datos correctos gracias...'); ?></h5></legend>
					<?php echo $this->Form->input('service_id',array('type' => 'hidden','default'=> $value['Service']['id']));?>
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
						<div class="span3">Asunto</div>
						<div class="span7" style="text-align: left;"><?php echo $this->Form->input('issue',array('label'=>'','class' => 'cotizarfrm'));?></div>
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
<?php	} ?>

</div>