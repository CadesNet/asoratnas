<div class="ads form">
<?php echo $this->FormEnum->create('Ad',array('type' => 'file')); ?>
	<fieldset>
		<legend><?php echo __('Add Ad'); ?></legend>
	<?php
		echo $this->FormEnum->input('type');
		echo $this->Form->input('link');
		echo $this->Form->input('filename',array('type' => 'file'));
		echo $this->Form->input('dir', array('type' => 'hidden'));
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Ads'), array('action' => 'index'),array('class' => 'ok btn btn-info btn-large')); ?></li>
	</ul>
</div>
