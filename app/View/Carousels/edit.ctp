<div class="carousels form">
<?php echo $this->FormEnum->create('Carousel',array('type' => 'file')); ?>
	<fieldset>
		<legend><?php echo __('Edit Carousel'); ?></legend>
	<?php
		echo $this->FormEnum->input('id');
		echo $this->FormEnum->input('filename',array('type' => 'file'));
		echo $this->FormEnum->input('dir',array('type' => 'hidden'));
		echo $this->FormEnum->input('description');
		echo $this->FormEnum->input('number');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Carousel.id')),array('class' => 'ok btn btn-info btn-large'), __('Are you sure you want to delete # %s?', $this->Form->value('Carousel.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Carousels'), array('action' => 'index'),array('class' => 'ok btn btn-info btn-large')); ?></li>
	</ul>
</div>
