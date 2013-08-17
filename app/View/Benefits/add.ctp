<div class="benefits form">
<?php echo $this->Form->create('Benefit',array('type' => 'file')); ?>
	<fieldset>
		<legend><?php echo __('Add Benefit'); ?></legend>
	<?php
		echo $this->Form->input('title');
		echo $this->Form->input('description');
		echo $this->Form->input('filename',array('type' => 'file'));
		echo $this->Form->input('dir',array('type' => 'hidden'));
	?>
	</fieldset>
<?php echo $this->Form->end(array('label' => __('Submit', true), 'class' => 'ok btn btn-info btn-large')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li>
		<?php 
		echo $this->Html->link(__('List Benefits'), array('action' => 'index'),array('class' => 'ok btn btn-info btn-large'));
		 ?> 
		 </li>
	</ul>
</div>
