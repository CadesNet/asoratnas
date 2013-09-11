<div class="imagesCategories view">
<h2><?php  echo __('Images Category'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($imagesCategory['ImagesCategory']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Category'); ?></dt>
		<dd>
			<?php echo $this->Html->link($imagesCategory['Category']['name'], array('controller' => 'categories', 'action' => 'view', $imagesCategory['Category']['id']),array('class' => 'ok btn btn-info ')); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Filename'); ?></dt>
		<dd>
			<?php echo $this->Html->image('images_category/filename/'.h($imagesCategory['ImagesCategory']['filename'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Dir'); ?></dt>
		<dd>
			<?php echo h($imagesCategory['ImagesCategory']['dir']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Type'); ?></dt>
		<dd>
			<?php echo h($imagesCategory['ImagesCategory']['type']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Images Category'), array('action' => 'edit', $imagesCategory['ImagesCategory']['id']),array('class' => 'ok btn btn-info btn-large')); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Images Category'), array('action' => 'delete', $imagesCategory['ImagesCategory']['id']),array('class' => 'ok btn btn-info btn-large'), __('Are you sure you want to delete # %s?', $imagesCategory['ImagesCategory']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Images Categories'), array('action' => 'index'),array('class' => 'ok btn btn-info btn-large')); ?> </li>
		<li><?php echo $this->Html->link(__('New Images Category'), array('action' => 'add'),array('class' => 'ok btn btn-info btn-large')); ?> </li>
		<li><?php echo $this->Html->link(__('List Categories'), array('controller' => 'categories', 'action' => 'index'),array('class' => 'ok btn btn-info btn-large')); ?> </li>
		<li><?php echo $this->Html->link(__('New Category'), array('controller' => 'categories', 'action' => 'add'),array('class' => 'ok btn btn-info btn-large')); ?> </li>
	</ul>
</div>
