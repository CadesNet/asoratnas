<div class="imagesPresentations index">
	<h2><?php echo __('Images Presentations'); ?></h2>
	<table class = "table" cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('filename'); ?></th>
			<th><?php echo $this->Paginator->sort('dir'); ?></th>
			<th><?php echo $this->Paginator->sort('description'); ?></th>
			<th><?php echo $this->Paginator->sort('presentation_id'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($imagesPresentations as $imagesPresentation): ?>
	<tr>
		<td><?php echo h($imagesPresentation['ImagesPresentation']['id']); ?>&nbsp;</td>
		<td><?php echo $this->Html->image('images_presentation/filename/'.h($imagesPresentation['ImagesPresentation']['filename'])); ?>&nbsp;</td>
		<td><?php echo h($imagesPresentation['ImagesPresentation']['dir']); ?>&nbsp;</td>
		<td><?php echo h($imagesPresentation['ImagesPresentation']['description']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($imagesPresentation['Presentation']['name'], array('controller' => 'presentations', 'action' => 'view', $imagesPresentation['Presentation']['id']),array('class' => 'ok btn btn-info')); ?>
		</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $imagesPresentation['ImagesPresentation']['id']),array('class' => 'ok btn btn-info btn-large')); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $imagesPresentation['ImagesPresentation']['id']),array('class' => 'ok btn btn-info btn-large')); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $imagesPresentation['ImagesPresentation']['id']),array('class' => 'ok btn btn-info btn-large'), __('Are you sure you want to delete # %s?', $imagesPresentation['ImagesPresentation']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('New Images Presentation'), array('action' => 'add'),array('class' => 'ok btn btn-info btn-large')); ?></li>
		<li><?php echo $this->Html->link(__('List Presentations'), array('controller' => 'presentations', 'action' => 'index'),array('class' => 'ok btn btn-info btn-large')); ?> </li>
		<li><?php echo $this->Html->link(__('New Presentation'), array('controller' => 'presentations', 'action' => 'add'),array('class' => 'ok btn btn-info btn-large')); ?> </li>
	</ul>
</div>
