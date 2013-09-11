<div class="imagesCategories index">
	<h2><?php echo __('Images Categories'); ?></h2>
<<<<<<< HEAD
	<table class = "table" cellpadding="0" cellspacing="0">
=======
	<table cellpadding="0" cellspacing="0">
>>>>>>> b6abcb8f17127e7992c4b9391ac8f4dc08532886
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('category_id'); ?></th>
			<th><?php echo $this->Paginator->sort('filename'); ?></th>
			<th><?php echo $this->Paginator->sort('dir'); ?></th>
			<th><?php echo $this->Paginator->sort('type'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($imagesCategories as $imagesCategory): ?>
	<tr>
		<td><?php echo h($imagesCategory['ImagesCategory']['id']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($imagesCategory['Category']['name'], array('controller' => 'categories', 'action' => 'view', $imagesCategory['Category']['id']),array('class' => 'ok btn btn-info ')); ?>
		</td>
		<td><?php echo $this->Html->image('images_category/filename/'.h($imagesCategory['ImagesCategory']['filename'])); ?>&nbsp;</td>
		<td><?php echo h($imagesCategory['ImagesCategory']['dir']); ?>&nbsp;</td>
		<td><?php echo h($imagesCategory['ImagesCategory']['type']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $imagesCategory['ImagesCategory']['id']),array('class' => 'ok btn btn-info ')); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $imagesCategory['ImagesCategory']['id']),array('class' => 'ok btn btn-info ')); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $imagesCategory['ImagesCategory']['id']),array('class' => 'ok btn btn-info '), __('Are you sure you want to delete # %s?', $imagesCategory['ImagesCategory']['id'])); ?>
		</td>
	</tr>
<?php endforeach; ?>
	</table>
	<p>
	<?php
	echo $this->Paginator->counter(array(
	'format' => __('Page {:page} of {:pages}, showing {:current} records out of {:count} total, starting on record {:start}, ending on {:end}')
	));
	?>	</p>
	<div class="paging">
	<?php
		echo $this->Paginator->prev('< ' . __('previous'), array(), null, array('class' => 'prev disabled'));
		echo $this->Paginator->numbers(array('separator' => ''));
		echo $this->Paginator->next(__('next') . ' >', array(), null, array('class' => 'next disabled'));
	?>
	</div>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('New Images Category'), array('action' => 'add'),array('class' => 'ok btn btn-info btn-large')); ?></li>
		<li><?php echo $this->Html->link(__('List Categories'), array('controller' => 'categories', 'action' => 'index'),array('class' => 'ok btn btn-info btn-large')); ?> </li>
		<li><?php echo $this->Html->link(__('New Category'), array('controller' => 'categories', 'action' => 'add'),array('class' => 'ok btn btn-info btn-large')); ?> </li>
	</ul>
</div>
