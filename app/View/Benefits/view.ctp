<div class="benefits view">
<h2><?php  echo __('Benefit'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($benefit['Benefit']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Title'); ?></dt>
		<dd>
			<?php echo h($benefit['Benefit']['title']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Description'); ?></dt>
		<dd>
			<?php echo h($benefit['Benefit']['description']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Filename'); ?></dt>
		<dd>
			<?php echo h($benefit['Benefit']['filename']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Dir'); ?></dt>
		<dd>
			<?php echo h($benefit['Benefit']['dir']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Benefit'), array('action' => 'edit', $benefit['Benefit']['id']),array('class' => 'ok btn btn-info btn-large')); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Benefit'), array('action' => 'delete', $benefit['Benefit']['id']), array('class' => 'ok btn btn-info btn-large'), __('Are you sure you want to delete # %s?', $benefit['Benefit']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Benefits'), array('action' => 'index'),array('class' => 'ok btn btn-info btn-large')); ?> </li>
		<li><?php echo $this->Html->link(__('New Benefit'), array('action' => 'add'),array('class' => 'ok btn btn-info btn-large')); ?> </li>

		<?php 
		echo $this->Html->link(__('List Benefits'), array('action' => 'index'),array('class' => 'ok btn btn-info btn-large'));
		 ?>
	</ul>
</div>
