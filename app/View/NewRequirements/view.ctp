<div class="newRequirements view">
<h2><?php  echo __('New Requirement'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($newRequirement['NewRequirement']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Branch'); ?></dt>
		<dd>
			<?php echo $this->Html->link($newRequirement['Branch']['name'], array('controller' => 'branches', 'action' => 'view', $newRequirement['Branch']['id']),array('class' => 'ok btn btn-info')); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Charge'); ?></dt>
		<dd>
			<?php echo h($newRequirement['NewRequirement']['charge']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Fullname'); ?></dt>
		<dd>
			<?php echo h($newRequirement['NewRequirement']['fullname']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Date Of Birth'); ?></dt>
		<dd>
			<?php echo h($newRequirement['NewRequirement']['date_of_birth']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Sex'); ?></dt>
		<dd>
			<?php echo h($newRequirement['NewRequirement']['sex']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Address'); ?></dt>
		<dd>
			<?php echo h($newRequirement['NewRequirement']['address']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Phone'); ?></dt>
		<dd>
			<?php echo h($newRequirement['NewRequirement']['phone']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Email'); ?></dt>
		<dd>
			<?php echo h($newRequirement['NewRequirement']['email']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Curriculum'); ?></dt>
		<dd>
			<?php $archivo = "http://new.avicola-santarosa.com/img/Newrequirement/curriculum/".h($newRequirement['NewRequirement']['curriculum'])."";
echo '<iframe src="http://docs.google.com/viewer?url='.$archivo.'&embedded=true" width="600" height="780" style="border: none;"></iframe>'; ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Message'); ?></dt>
		<dd>
			<?php echo h($newRequirement['NewRequirement']['message']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($newRequirement['NewRequirement']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified'); ?></dt>
		<dd>
			<?php echo h($newRequirement['NewRequirement']['modified']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		
		<li><?php echo $this->Html->link(__('List New Requirements'), array('action' => 'index'),array('class' => 'ok btn btn-info btn-large')); ?> </li>
		
	</ul>
</div>
 <p>&nbsp; </p>
 <p>&nbsp; </p>