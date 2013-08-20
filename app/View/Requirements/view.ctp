<div class="requirements view">
<h2><?php  echo __('Requirement'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($requirement['Requirement']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Charge'); ?></dt>
		<dd>
			<?php echo $this->Html->link($requirement['Charge']['title'], array('controller' => 'charges', 'action' => 'view', $requirement['Charge']['id']),array('class' => 'ok btn btn-info btn-large')); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Fullname'); ?></dt>
		<dd>
			<?php echo h($requirement['Requirement']['fullname']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Date Of Birth'); ?></dt>
		<dd>
			<?php echo h($requirement['Requirement']['date_of_birth']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Sex'); ?></dt>
		<dd>
			<?php echo h($requirement['Requirement']['sex']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Address'); ?></dt>
		<dd>
			<?php echo h($requirement['Requirement']['address']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Phone'); ?></dt>
		<dd>
			<?php echo h($requirement['Requirement']['phone']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Email'); ?></dt>
		<dd>
			<?php echo h($requirement['Requirement']['email']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Curriculum'); ?></dt>
		<dd>
			<?php $archivo = "http://new.avicola-santarosa.com/img/requirement/curriculum/".h($requirement['Requirement']['curriculum'])."";
echo '<iframe src="http://docs.google.com/viewer?url='.$archivo.'&embedded=true" width="600" height="780" style="border: none;"></iframe>'; ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Message'); ?></dt>
		<dd>
			<?php echo h($requirement['Requirement']['message']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($requirement['Requirement']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified'); ?></dt>
		<dd>
			<?php echo h($requirement['Requirement']['modified']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Requirement'), array('action' => 'edit', $requirement['Requirement']['id']),array('class' => 'ok btn btn-info btn-large')); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Requirement'), array('action' => 'delete', $requirement['Requirement']['id']),array('class' => 'ok btn btn-info btn-large'), __('Are you sure you want to delete # %s?', $requirement['Requirement']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Requirements'), array('action' => 'index'),array('class' => 'ok btn btn-info btn-large')); ?> </li>
		<li><?php echo $this->Html->link(__('New Requirement'), array('action' => 'add'),array('class' => 'ok btn btn-info btn-large')); ?> </li>
		<li><?php echo $this->Html->link(__('List Charges'), array('controller' => 'charges', 'action' => 'index'),array('class' => 'ok btn btn-info btn-large')); ?> </li>
		<li><?php echo $this->Html->link(__('New Charge'), array('controller' => 'charges', 'action' => 'add'),array('class' => 'ok btn btn-info btn-large')); ?> </li>
	</ul>
</div>
