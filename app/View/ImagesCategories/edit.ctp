<div class="imagesCategories form">
<?php echo $this->FormEnum->create('ImagesCategory',array('type' => 'file')); ?>
	<fieldset>
		<legend><?php echo __('Edit Images Category'); ?></legend>
	<?php
		echo $this->FormEnum->input('id');
		echo $this->FormEnum->input('category_id');
		echo $this->FormEnum->input('filename',array('type' => 'file'));
		echo $this->FormEnum->input('dir', array('type' => 'hidden'));
		echo $this->FormEnum->input('type');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
