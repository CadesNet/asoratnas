<div class="requirements view">
<h2><?php  echo __('Requerimiento'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($requirement['Requirement']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Cargo'); ?></dt>
		<dd>
			<?php echo h($requirement['Charge']['title']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Nombre completo'); ?></dt>
		<dd>
			<?php echo h($requirement['Requirement']['fullname']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Fecha de nacimiento'); ?></dt>
		<dd>
			<?php echo h($requirement['Requirement']['date_of_birth']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Sexo'); ?></dt>
		<dd>
			<?php echo h($requirement['Requirement']['sex']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Direccion'); ?></dt>
		<dd>
			<?php echo h($requirement['Requirement']['address']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Telefono'); ?></dt>
		<dd>
			<?php echo h($requirement['Requirement']['phone']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Email'); ?></dt>
		<dd>
			<?php echo h($requirement['Requirement']['email']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Curriculum Descargar'); ?></dt>
		<dd>
		<?php 
			echo $this->Html->link('Descargar', "http://new.avicola-santarosa.com/img/requirement/curriculum/".h($requirement['Requirement']['curriculum']));
		 ?>
			<?php //archivo = "http://new.avicola-santarosa.com/img/requirement/curriculum/".h($requirement['Requirement']['curriculum'])."";
//echo '<iframe src="http://docs.google.com/viewer?url='.$archivo.'&embedded=true" width="600" height="780" style="border: none;"></iframe>'; ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Mensaje'); ?></dt>
		<dd>
			<?php echo h($requirement['Requirement']['message']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($requirement['Requirement']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified'); ?></dt>
		<dd>
			<?php echo h($requirement['Requirement']['modified']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Acciones'); ?></h3>
	<ul>
		
		<li><?php echo $this->Html->link(__('Listar Requerimientos'), array('action' => 'index',$requirement['Charge']['id'],$sucursal),array('class' => 'ok btn btn-info btn-large')); ?> </li>
	</ul>
</div>
 <p>&nbsp; </p>
 <p>&nbsp; </p>