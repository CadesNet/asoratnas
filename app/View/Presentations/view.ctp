<div class="presentations view">
<h2><?php  echo __('Presentation'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($presentation['Presentation']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Name'); ?></dt>
		<dd>
			<?php echo h($presentation['Presentation']['name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Descripcion'); ?></dt>
		<dd>
			<?php echo h($presentation['Presentation']['descripcion']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Item'); ?></dt>
		<dd>
			<?php echo $this->Html->link($presentation['Item']['name'], array('controller' => 'items', 'action' => 'view', $presentation['Item']['id']),array('class' => 'ok btn btn-info btn-large')); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Presentation'), array('action' => 'edit', $presentation['Presentation']['id']),array('class' => 'ok btn btn-info btn-large')); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Presentation'), array('action' => 'delete', $presentation['Presentation']['id']),array('class' => 'ok btn btn-info btn-large'), __('Are you sure you want to delete # %s?', $presentation['Presentation']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Presentations'), array('action' => 'index'),array('class' => 'ok btn btn-info btn-large')); ?> </li>
		<li><?php echo $this->Html->link(__('New Presentation'), array('action' => 'add'),array('class' => 'ok btn btn-info btn-large')); ?> </li>
		<li><?php echo $this->Html->link(__('List Items'), array('controller' => 'items', 'action' => 'index'),array('class' => 'ok btn btn-info btn-large')); ?> </li>
		<li><?php echo $this->Html->link(__('New Item'), array('controller' => 'items', 'action' => 'add'),array('class' => 'ok btn btn-info btn-large')); ?> </li>
		<li><?php echo $this->Html->link(__('List Images Presentations'), array('controller' => 'images_presentations', 'action' => 'index'),array('class' => 'ok btn btn-info btn-large')); ?> </li>
		<li><?php echo $this->Html->link(__('New Images Presentation'), array('controller' => 'images_presentations', 'action' => 'add'),array('class' => 'ok btn btn-info btn-large')); ?> </li>
		<li><?php echo $this->Html->link(__('List Presentations Quotes'), array('controller' => 'presentations_quotes', 'action' => 'index'),array('class' => 'ok btn btn-info btn-large')); ?> </li>
		<li><?php echo $this->Html->link(__('New Presentations Quote'), array('controller' => 'presentations_quotes', 'action' => 'add'),array('class' => 'ok btn btn-info btn-large')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Images Presentations'); ?></h3>
	<?php if (!empty($presentation['ImagesPresentation'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Filename'); ?></th>
		<th><?php echo __('Dir'); ?></th>
		<th><?php echo __('Description'); ?></th>
		<th><?php echo __('Presentation Id'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($presentation['ImagesPresentation'] as $imagesPresentation): ?>
		<tr>
			<td><?php echo $imagesPresentation['id']; ?></td>
			<td><?php echo $imagesPresentation['filename']; ?></td>
			<td><?php echo $imagesPresentation['dir']; ?></td>
			<td><?php echo $imagesPresentation['description']; ?></td>
			<td><?php echo $imagesPresentation['presentation_id']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'images_presentations', 'action' => 'view', $imagesPresentation['id']),array('class' => 'ok btn btn-info btn-large')); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'images_presentations', 'action' => 'edit', $imagesPresentation['id']),array('class' => 'ok btn btn-info btn-large')); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'images_presentations', 'action' => 'delete', $imagesPresentation['id']),array('class' => 'ok btn btn-info btn-large'), __('Are you sure you want to delete # %s?', $imagesPresentation['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Images Presentation'), array('controller' => 'images_presentations', 'action' => 'add'),array('class' => 'ok btn btn-info btn-large')); ?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php echo __('Related Presentations Quotes'); ?></h3>
	<?php if (!empty($presentation['PresentationsQuote'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Presentation Id'); ?></th>
		<th><?php echo __('Quote Id'); ?></th>
		<th><?php echo __('Detail'); ?></th>
		<th><?php echo __('Amount'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($presentation['PresentationsQuote'] as $presentationsQuote): ?>
		<tr>
			<td><?php echo $presentationsQuote['id']; ?></td>
			<td><?php echo $presentationsQuote['presentation_id']; ?></td>
			<td><?php echo $presentationsQuote['quote_id']; ?></td>
			<td><?php echo $presentationsQuote['detail']; ?></td>
			<td><?php echo $presentationsQuote['amount']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'presentations_quotes', 'action' => 'view', $presentationsQuote['id']),array('class' => 'ok btn btn-info btn-large')); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'presentations_quotes', 'action' => 'edit', $presentationsQuote['id']),array('class' => 'ok btn btn-info btn-large')); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'presentations_quotes', 'action' => 'delete', $presentationsQuote['id']),array('class' => 'ok btn btn-info btn-large'), __('Are you sure you want to delete # %s?', $presentationsQuote['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Presentations Quote'), array('controller' => 'presentations_quotes', 'action' => 'add'),array('class' => 'ok btn btn-info btn-large')); ?> </li>
		</ul>
	</div>
</div>
