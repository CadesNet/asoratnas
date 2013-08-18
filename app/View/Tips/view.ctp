<div class="tips view">
<h2><?php  echo __('Tip'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($tip['Tip']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Title'); ?></dt>
		<dd>
			<?php echo h($tip['Tip']['title']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Description'); ?></dt>
		<dd>
			<?php echo h($tip['Tip']['description']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Filename'); ?></dt>
		<dd>
			<?php echo h($tip['Tip']['filename']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Dir'); ?></dt>
		<dd>
			<?php echo h($tip['Tip']['dir']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Tip'), array('action' => 'edit', $tip['Tip']['id']),array('class' => 'ok btn btn-info btn-large')); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Tip'), array('action' => 'delete', $tip['Tip']['id']),array('class' => 'ok btn btn-info btn-large'), __('Are you sure you want to delete # %s?', $tip['Tip']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Tips'), array('action' => 'index'),array('class' => 'ok btn btn-info btn-large')); ?> </li>
		<li><?php echo $this->Html->link(__('New Tip'), array('action' => 'add'),array('class' => 'ok btn btn-info btn-large')); ?> </li>
	</ul>
</div>
