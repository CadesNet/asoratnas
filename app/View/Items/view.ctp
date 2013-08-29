<div class="items view">
<h2><?php  echo __('Item'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($item['Item']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Name'); ?></dt>
		<dd>
			<?php echo h($item['Item']['name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Presentacion'); ?></dt>
		<dd>
			<?php echo h($item['Item']['presentacion']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Description'); ?></dt>
		<dd>
			<?php echo h($item['Item']['description']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Category'); ?></dt>
		<dd>
			<?php echo $this->Html->link($item['Category']['name'], array('controller' => 'categories', 'action' => 'view', $item['Category']['id']),array('class' => 'ok btn btn-info ')); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Item'), array('action' => 'edit', $item['Item']['id']),array('class' => 'ok btn btn-info btn-large')); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Item'), array('action' => 'delete', $item['Item']['id']),array('class' => 'ok btn btn-info btn-large'), __('Are you sure you want to delete # %s?', $item['Item']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Items'), array('action' => 'index'),array('class' => 'ok btn btn-info btn-large')); ?> </li>
		<li><?php echo $this->Html->link(__('New Item'), array('action' => 'add'),array('class' => 'ok btn btn-info btn-large')); ?> </li>
		<li><?php echo $this->Html->link(__('List Categories'), array('controller' => 'categories', 'action' => 'index'),array('class' => 'ok btn btn-info btn-large')); ?> </li>
		<li><?php echo $this->Html->link(__('New Category'), array('controller' => 'categories', 'action' => 'add'),array('class' => 'ok btn btn-info btn-large')); ?> </li>
		<li><?php echo $this->Html->link(__('List Images Items'), array('controller' => 'images_items', 'action' => 'index'),array('class' => 'ok btn btn-info btn-large')); ?> </li>
		<li><?php echo $this->Html->link(__('New Images Item'), array('controller' => 'images_items', 'action' => 'add'),array('class' => 'ok btn btn-info btn-large')); ?> </li>
		<li><?php echo $this->Html->link(__('List Items Quotes'), array('controller' => 'items_quotes', 'action' => 'index'),array('class' => 'ok btn btn-info btn-large')); ?> </li>
		<li><?php echo $this->Html->link(__('New Items Quote'), array('controller' => 'items_quotes', 'action' => 'add'),array('class' => 'ok btn btn-info btn-large')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Images Items'); ?></h3>
	<?php if (!empty($item['ImagesItem'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Filename'); ?></th>
		<th><?php echo __('Dir'); ?></th>
		<th><?php echo __('Description'); ?></th>
		<th><?php echo __('Item Id'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($item['ImagesItem'] as $imagesItem): ?>
		<tr>
			<td><?php echo $imagesItem['id']; ?></td>
			<td><?php echo $imagesItem['filename']; ?></td>
			<td><?php echo $imagesItem['dir']; ?></td>
			<td><?php echo $imagesItem['description']; ?></td>
			<td><?php echo $imagesItem['item_id']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'images_items', 'action' => 'view', $imagesItem['id']),array('class' => 'ok btn btn-info ')); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'images_items', 'action' => 'edit', $imagesItem['id']),array('class' => 'ok btn btn-info ')); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'images_items', 'action' => 'delete', $imagesItem['id']), null, __('Are you sure you want to delete # %s?', $imagesItem['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Images Item'), array('controller' => 'images_items', 'action' => 'add'),array('class' => 'ok btn btn-info btn-large')); ?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php echo __('Related Items Quotes'); ?></h3>
	<?php if (!empty($item['ItemsQuote'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Item Id'); ?></th>
		<th><?php echo __('Quote Id'); ?></th>
		<th><?php echo __('Detail'); ?></th>
		<th><?php echo __('Amount'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($item['ItemsQuote'] as $itemsQuote): ?>
		<tr>
			<td><?php echo $itemsQuote['id']; ?></td>
			<td><?php echo $itemsQuote['item_id']; ?></td>
			<td><?php echo $itemsQuote['quote_id']; ?></td>
			<td><?php echo $itemsQuote['detail']; ?></td>
			<td><?php echo $itemsQuote['amount']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'items_quotes', 'action' => 'view', $itemsQuote['id']),array('class' => 'ok btn btn-info ')); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'items_quotes', 'action' => 'edit', $itemsQuote['id']),array('class' => 'ok btn btn-info ')); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'items_quotes', 'action' => 'delete', $itemsQuote['id']),array('class' => 'ok btn btn-info '), __('Are you sure you want to delete # %s?', $itemsQuote['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Items Quote'), array('controller' => 'items_quotes', 'action' => 'add'),array('class' => 'ok btn btn-info btn-large')); ?> </li>
		</ul>
	</div>
</div>
