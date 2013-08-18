<div class="ads form">
<?php echo $this->FormEnum->create('Ad',array('type' => 'file')); ?>
	<fieldset>
		<legend><?php echo __('Edit Ad'); ?></legend>
	<?php
		echo $this->FormEnum->input('id');
		echo $this->FormEnum->input('type');
		echo $this->FormEnum->input('link');
		echo $this->FormEnum->input('filename',array('type' => 'file'));
		echo $this->FormEnum->input('dir', array('type' => 'hidden'));
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Ad.id')),array('class' => 'ok btn btn-info btn-large'), __('Are you sure you want to delete # %s?', $this->Form->value('Ad.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Ads'), array('action' => 'index'),array('class' => 'ok btn btn-info btn-large')); ?></li>
	</ul>
</div>
