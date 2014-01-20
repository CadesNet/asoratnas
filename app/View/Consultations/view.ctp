<div class="consultations view">
<h2><?php  echo __('Consulta'); ?></h2>
	<dl>		
		<dt><?php echo __('Nombre'); ?></dt>
		<dd>
			<?php echo h($consultation['Consultation']['name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Dirección'); ?></dt>
		<dd>
			<?php echo h($consultation['Consultation']['address']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Teléfono'); ?></dt>
		<dd>
			<?php echo h($consultation['Consultation']['phone']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Email'); ?></dt>
		<dd>
			<?php echo h($consultation['Consultation']['email']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Mensaje'); ?></dt>
		<dd>
			<?php echo h($consultation['Consultation']['message']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Fecha de creación'); ?></dt>
		<dd>
			<?php echo h($consultation['Consultation']['created']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Acción'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Listar consultas'), array('action' => 'index'),array('class' => 'ok btn btn-info btn-large')); ?> </li>
	</ul>
</div>
 <p>&nbsp; </p>
 <p>&nbsp; </p>