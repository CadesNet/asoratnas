<div class="branches form">
<?php echo $this->Form->create('Branch',array('type' => 'file')); ?>
	<fieldset>
		<legend><?php echo __('Edit Branch'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('company_id', array('type' => 'hidden'));
		echo $this->Form->input('name');
		echo $this->Form->input('filename',array('type' => 'file'));
		echo $this->Form->input('dir', array('type' => 'hidden'));
		echo $this->Form->input('type');
		echo $this->Form->input('address');
		echo $this->Form->input('phone');
		echo $this->Form->input('movil');
		echo $this->Form->input('fax');
		echo $this->Form->input('contact');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
