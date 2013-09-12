<div class="imagesCategories form">
<?php echo $this->FormEnum->create('ImagesCategory',array('type' => 'file')); ?>
	<fieldset>
		<legend><?php echo __('Add Images Category'); ?></legend>
	<?php
		echo $this->Form->input('category_id',array('name'=>'data[ImagesCategory][category_id]','type' => 'hidden','default'=> $categories));
		echo $this->FormEnum->input('filename',array('type' => 'file'));
		echo $this->FormEnum->input('dir', array('type' => 'hidden'));
		echo $this->FormEnum->input('type');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Images Categories'), array('action' => 'index',$categories),array('class' => 'ok btn btn-info btn-large')); ?></li>
		
	</ul>
</div>
