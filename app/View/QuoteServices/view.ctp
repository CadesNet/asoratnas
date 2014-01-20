<div class="quoteServices view">
<h2><?php  echo __('Servicio'); ?></h2>
	<dl>

		<dt><?php echo __('Servicio'); ?></dt>
		<dd>
			<?php echo $this->Html->link($quoteService['Service']['id'], array('controller' => 'services', 'action' => 'view', $quoteService['Service']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Nombre Completo'); ?></dt>
		<dd>
			<?php echo h($quoteService['QuoteService']['fullname']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Dirección'); ?></dt>
		<dd>
			<?php echo h($quoteService['QuoteService']['address']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Teléfono'); ?></dt>
		<dd>
			<?php echo h($quoteService['QuoteService']['phone']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Email'); ?></dt>
		<dd>
			<?php echo h($quoteService['QuoteService']['email']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Cuestión'); ?></dt>
		<dd>
			<?php echo h($quoteService['QuoteService']['issue']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Mensaje'); ?></dt>
		<dd>
			<?php echo h($quoteService['QuoteService']['message']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Fecha de Creación'); ?></dt>
		<dd>
			<?php echo h($quoteService['QuoteService']['created']); ?>
			&nbsp;
		</dd>		
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Acción'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Listar Servicios'), array('action' => 'index'),array('class' => 'ok btn btn-info ')); ?> </li>
		
	</ul>
</div>
 <p>&nbsp; </p>
 <p>&nbsp; </p>