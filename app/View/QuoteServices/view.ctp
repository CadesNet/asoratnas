<div class="quoteServices view">
<h2><?php  echo __('Quote Service'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($quoteService['QuoteService']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Service'); ?></dt>
		<dd>
			<?php echo $this->Html->link($quoteService['Service']['id'], array('controller' => 'services', 'action' => 'view', $quoteService['Service']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Fullname'); ?></dt>
		<dd>
			<?php echo h($quoteService['QuoteService']['fullname']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Address'); ?></dt>
		<dd>
			<?php echo h($quoteService['QuoteService']['address']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Phone'); ?></dt>
		<dd>
			<?php echo h($quoteService['QuoteService']['phone']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Email'); ?></dt>
		<dd>
			<?php echo h($quoteService['QuoteService']['email']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Issue'); ?></dt>
		<dd>
			<?php echo h($quoteService['QuoteService']['issue']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Message'); ?></dt>
		<dd>
			<?php echo h($quoteService['QuoteService']['message']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($quoteService['QuoteService']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified'); ?></dt>
		<dd>
			<?php echo h($quoteService['QuoteService']['modified']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('List Quote Services'), array('action' => 'index'),array('class' => 'ok btn btn-info ')); ?> </li>
		
	</ul>
</div>
 <p>&nbsp; </p>
 <p>&nbsp; </p>