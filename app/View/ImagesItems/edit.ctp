<div class="imagesItems form">
<?php echo $this->Form->create('ImagesItem',array('type' => 'file')); ?>
	<fieldset>
		<legend><?php echo __('Edit Images Item'); ?></legend>
	<?php
		echo $this->Form->input('filename',array('type' => 'file'));
		echo $this->Form->input('dir', array('type' => 'hidden'));
		echo $this->Form->input('dir');
		echo $this->Form->input('description');
		echo $this->Form->input('item_id');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('ImagesItem.id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('ImagesItem.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Images Items'), array('action' => 'index'),array('class' => 'ok btn btn-info btn-large')); ?></li>
		<li><?php echo $this->Html->link(__('List Items'), array('controller' => 'items', 'action' => 'index'),array('class' => 'ok btn btn-info btn-large')); ?> </li>
		<li><?php echo $this->Html->link(__('New Item'), array('controller' => 'items', 'action' => 'add'),array('class' => 'ok btn btn-info btn-large')); ?> </li>
	</ul>
</div>
