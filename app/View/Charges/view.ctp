<div class="charges view">
<h2><?php  echo __('Charge'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($charge['Charge']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Branch'); ?></dt>
		<dd>
			<?php echo $this->Html->link($charge['Branch']['name'], array('controller' => 'branches', 'action' => 'view', $charge['Branch']['id']),array('class' => 'ok btn btn-info btn-large')); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Title'); ?></dt>
		<dd>
			<?php echo h($charge['Charge']['title']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Deadline'); ?></dt>
		<dd>
			<?php echo h($charge['Charge']['deadline']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Description'); ?></dt>
		<dd>
			<?php echo h($charge['Charge']['description']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Formation'); ?></dt>
		<dd>
			<?php echo h($charge['Charge']['formation']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($charge['Charge']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified'); ?></dt>
		<dd>
			<?php echo h($charge['Charge']['modified']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Charge'), array('action' => 'edit', $charge['Charge']['id']),array('class' => 'ok btn btn-info btn-large')); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Charge'), array('action' => 'delete', $charge['Charge']['id']),array('class' => 'ok btn btn-info btn-large'), __('Are you sure you want to delete # %s?', $charge['Charge']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Charges'), array('action' => 'index'),array('class' => 'ok btn btn-info btn-large')); ?> </li>
		<li><?php echo $this->Html->link(__('New Charge'), array('action' => 'add'),array('class' => 'ok btn btn-info btn-large')); ?> </li>
		<li><?php echo $this->Html->link(__('List Branches'), array('controller' => 'branches', 'action' => 'index'),array('class' => 'ok btn btn-info btn-large')); ?> </li>
		<li><?php echo $this->Html->link(__('New Branch'), array('controller' => 'branches', 'action' => 'add'),array('class' => 'ok btn btn-info btn-large')); ?> </li>
		<li><?php echo $this->Html->link(__('List Requirements'), array('controller' => 'requirements', 'action' => 'index'),array('class' => 'ok btn btn-info btn-large')); ?> </li>
		<li><?php echo $this->Html->link(__('New Requirement'), array('controller' => 'requirements', 'action' => 'add'),array('class' => 'ok btn btn-info btn-large')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Requirements'); ?></h3>
	<?php if (!empty($charge['Requirement'])): ?>
	<table class = "table" cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Charge Id'); ?></th>
		<th><?php echo __('Fullname'); ?></th>
		<th><?php echo __('Date Of Birth'); ?></th>
		<th><?php echo __('Sex'); ?></th>
		<th><?php echo __('Address'); ?></th>
		<th><?php echo __('Phone'); ?></th>
		<th><?php echo __('Email'); ?></th>
		<th><?php echo __('Curriculum'); ?></th>
		<th><?php echo __('Message'); ?></th>
		<th><?php echo __('Created'); ?></th>
		<th><?php echo __('Modified'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($charge['Requirement'] as $requirement): ?>
		<tr>
			<td><?php echo $requirement['id']; ?></td>
			<td><?php echo $requirement['charge_id']; ?></td>
			<td><?php echo $requirement['fullname']; ?></td>
			<td><?php echo $requirement['date_of_birth']; ?></td>
			<td><?php echo $requirement['sex']; ?></td>
			<td><?php echo $requirement['address']; ?></td>
			<td><?php echo $requirement['phone']; ?></td>
			<td><?php echo $requirement['email']; ?></td>
			<td><?php echo $requirement['curriculum']; ?></td>
			<td><?php echo $requirement['message']; ?></td>
			<td><?php echo $requirement['created']; ?></td>
			<td><?php echo $requirement['modified']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'requirements', 'action' => 'view', $requirement['id']),array('class' => 'ok btn btn-info btn-large')); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'requirements', 'action' => 'edit', $requirement['id']),array('class' => 'ok btn btn-info btn-large')); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'requirements', 'action' => 'delete', $requirement['id']),array('class' => 'ok btn btn-info btn-large'), __('Are you sure you want to delete # %s?', $requirement['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Requirement'), array('controller' => 'requirements', 'action' => 'add'),array('class' => 'ok btn btn-info btn-large')); ?> </li>
		</ul>
	</div>
</div>
