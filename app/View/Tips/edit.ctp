<div class="tips form">
<?php echo $this->Form->create('Tip',array('type' => 'file')); ?>
	<fieldset>
		<legend><?php echo __('Editar Consejo para la Salud'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('title');
		echo ('Descipcion');
		echo $this->Form->textarea('description',array('class'=>'ckeditor'));
		echo $this->Form->input('filename',array('type' => 'file'));
		echo $this->Form->input('dir', array('type' => 'hidden'));
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
 <p>&nbsp; </p>
 <p>&nbsp; </p>