<div class="branches view">
<h2><?php  echo __('Branch'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($branch['Branch']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Company'); ?></dt>
		<dd>

			<?php echo $this->Html->link("Santa Rosa", array('controller' => 'companies', 'action' => 'view', $branch['Company']['id']),array('class' => 'ok btn btn-info btn-large')); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Name'); ?></dt>
		<dd>
			<?php echo h($branch['Branch']['name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Filename'); ?></dt>
		<dd>
			<?php echo $this->Html->image('branch/filename/'.h($branch['Branch']['filename'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Dir'); ?></dt>
		<dd>
			<?php echo h($branch['Branch']['dir']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Type'); ?></dt>
		<dd>
			<?php echo h($branch['Branch']['type']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Address'); ?></dt>
		<dd>
			<?php echo h($branch['Branch']['address']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Phone'); ?></dt>
		<dd>
			<?php echo h($branch['Branch']['phone']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Movil'); ?></dt>
		<dd>
			<?php echo h($branch['Branch']['movil']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Fax'); ?></dt>
		<dd>
			<?php echo h($branch['Branch']['fax']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Contact'); ?></dt>
		<dd>
			<?php echo h($branch['Branch']['contact']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Branch'), array('action' => 'edit', $branch['Branch']['id']),array('class' => 'ok btn btn-info btn-large')); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Branch'), array('action' => 'delete', $branch['Branch']['id']),array('class' => 'ok btn btn-info btn-large'), __('Are you sure you want to delete # %s?', $branch['Branch']['id']),array('class' => 'ok btn btn-info btn-large')); ?> </li>
		<li><?php echo $this->Html->link(__('List Branches'), array('action' => 'index'),array('class' => 'ok btn btn-info btn-large')); ?> </li>
		<li><?php echo $this->Html->link(__('New Branch'), array('action' => 'add'),array('class' => 'ok btn btn-info btn-large')); ?> </li>
		<li><?php echo $this->Html->link(__('List Companies'), array('controller' => 'companies', 'action' => 'index'),array('class' => 'ok btn btn-info btn-large')); ?> </li>
		<li><?php echo $this->Html->link(__('New Company'), array('controller' => 'companies', 'action' => 'add'),array('class' => 'ok btn btn-info btn-large')); ?> </li>
		<li><?php echo $this->Html->link(__('List Charges'), array('controller' => 'charges', 'action' => 'index'),array('class' => 'ok btn btn-info btn-large')); ?> </li>
		<li><?php echo $this->Html->link(__('New Charge'), array('controller' => 'charges', 'action' => 'add'),array('class' => 'ok btn btn-info btn-large')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Charges'); ?></h3>
	<?php if (!empty($branch['Charge'])): ?>
	<table class = "table" cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Branch Id'); ?></th>
		<th><?php echo __('Title'); ?></th>
		<th><?php echo __('Deadline'); ?></th>
		<th><?php echo __('Description'); ?></th>
		<th><?php echo __('Formation'); ?></th>
		<th><?php echo __('Created'); ?></th>
		<th><?php echo __('Modified'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($branch['Charge'] as $charge): ?>
		<tr>
			<td><?php echo $charge['id']; ?></td>
			<td><?php echo $charge['branch_id']; ?></td>
			<td><?php echo $charge['title']; ?></td>
			<td><?php echo $charge['deadline']; ?></td>
			<td><?php echo $charge['description']; ?></td>
			<td><?php echo $charge['formation']; ?></td>
			<td><?php echo $charge['created']; ?></td>
			<td><?php echo $charge['modified']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'charges', 'action' => 'view', $charge['id']),array('class' => 'ok btn btn-info btn-large')); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'charges', 'action' => 'edit', $charge['id']),array('class' => 'ok btn btn-info btn-large')); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'charges', 'action' => 'delete', $charge['id']),array('class' => 'ok btn btn-info btn-large'), __('Are you sure you want to delete # %s?', $charge['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Charge'), array('controller' => 'charges', 'action' => 'add'),array('class' => 'ok btn btn-info btn-large')); ?> </li>
		</ul>
	</div>
</div>
