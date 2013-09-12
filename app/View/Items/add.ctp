<div class="items form">
<?php echo $this->Form->create('Item'); ?>
	<fieldset>
		<legend><?php echo __('Add Item'); ?></legend>
	<?php
		echo $this->Form->input('name');
		echo $this->Form->input('category_id',array('label' => '','type' => 'hidden','default'=> $categories));
		
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
