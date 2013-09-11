<div class="imagesPresentations view">
<h2><?php  echo __('Images Presentation'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($imagesPresentation['ImagesPresentation']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Filename'); ?></dt>
		<dd>
			<?php echo $this->Html->image('images_presentation/filename/'.h($imagesPresentation['ImagesPresentation']['filename'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Dir'); ?></dt>
		<dd>
			<?php echo h($imagesPresentation['ImagesPresentation']['dir']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Description'); ?></dt>
		<dd>
			<?php echo h($imagesPresentation['ImagesPresentation']['description']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Presentation'); ?></dt>
		<dd>
			<?php echo $this->Html->link($imagesPresentation['Presentation']['name'], array('controller' => 'presentations', 'action' => 'view', $imagesPresentation['Presentation']['id']),array('class' => 'ok btn btn-info btn-large')); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Images Presentation'), array('action' => 'edit', $imagesPresentation['ImagesPresentation']['id']),array('class' => 'ok btn btn-info btn-large')); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Images Presentation'), array('action' => 'delete', $imagesPresentation['ImagesPresentation']['id']),array('class' => 'ok btn btn-info btn-large'), __('Are you sure you want to delete # %s?', $imagesPresentation['ImagesPresentation']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Images Presentations'), array('action' => 'index'),array('class' => 'ok btn btn-info btn-large')); ?> </li>
		<li><?php echo $this->Html->link(__('New Images Presentation'), array('action' => 'add'),array('class' => 'ok btn btn-info btn-large')); ?> </li>
		<li><?php echo $this->Html->link(__('List Presentations'), array('controller' => 'presentations', 'action' => 'index'),array('class' => 'ok btn btn-info btn-large')); ?> </li>
		<li><?php echo $this->Html->link(__('New Presentation'), array('controller' => 'presentations', 'action' => 'add'),array('class' => 'ok btn btn-info btn-large')); ?> </li>
	</ul>
</div>
