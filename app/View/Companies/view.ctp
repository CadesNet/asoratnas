<div class="companies view">
<h2><?php  echo __('Company'); ?></h2>
	<dl>
		<dt><?php //echo __('Id'); ?></dt>
		<dd>
			<?php //echo h($company['Company']['id']); ?>
			&nbsp;
		</dd>
		

		<dt><?php echo __('Content'); ?></dt>
		<dd>
			<?php
			 $body =  h($company['Company']['content']);
        $bodyNew = html_entity_decode($body);  
        //  echo strip_tags(htmlspecialchars_decode( $body));
        echo $bodyNew;
         ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Company'), array('action' => 'edit', $company['Company']['id']),array('class' => 'ok btn btn-info btn-large')); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Company'), array('action' => 'delete', $company['Company']['id']),array('class' => 'ok btn btn-info btn-large'), __('Are you sure you want to delete # %s?', $company['Company']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Companies'), array('action' => 'index'),array('class' => 'ok btn btn-info btn-large')); ?> </li>
		<li><?php echo $this->Html->link(__('New Company'), array('action' => 'add'),array('class' => 'ok btn btn-info btn-large')); ?> </li>
		<li><?php echo $this->Html->link(__('List Branches'), array('controller' => 'branches', 'action' => 'index'),array('class' => 'ok btn btn-info btn-large')); ?> </li>
		<li><?php echo $this->Html->link(__('New Branch'), array('controller' => 'branches', 'action' => 'add'),array('class' => 'ok btn btn-info btn-large')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Branches'); ?></h3>
	<?php if (!empty($company['Branch'])): ?>
	<table class = "table" cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Company Id'); ?></th>
		<th><?php echo __('Name'); ?></th>
		<th><?php echo __('Filename'); ?></th>
		<th><?php echo __('Dir'); ?></th>
		<th><?php echo __('Type'); ?></th>
		<th><?php echo __('Address'); ?></th>
		<th><?php echo __('Phone'); ?></th>
		<th><?php echo __('Movil'); ?></th>
		<th><?php echo __('Fax'); ?></th>
		<th><?php echo __('Contact'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($company['Branch'] as $branch): ?>
		<tr>
			<td><?php echo $branch['id']; ?></td>
			<td><?php echo $branch['company_id']; ?></td>
			<td><?php echo $branch['name']; ?></td>
			<td><?php echo $this->Html->image('branch/filename/'.$branch['filename']); ?></td>
			<td><?php echo $branch['dir']; ?></td>
			<td><?php echo $branch['type']; ?></td>
			<td><?php echo $branch['address']; ?></td>
			<td><?php echo $branch['phone']; ?></td>
			<td><?php echo $branch['movil']; ?></td>
			<td><?php echo $branch['fax']; ?></td>
			<td><?php echo $branch['contact']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'branches', 'action' => 'view', $branch['id']),array('class' => 'ok btn btn-info btn-large')); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'branches', 'action' => 'edit', $branch['id']),array('class' => 'ok btn btn-info btn-large')); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'branches', 'action' => 'delete', $branch['id']),array('class' => 'ok btn btn-info btn-large'), __('Are you sure you want to delete # %s?', $branch['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Branch'), array('controller' => 'branches', 'action' => 'add'),array('class' => 'ok btn btn-info btn-large')); ?> </li>
		</ul>
	</div>
</div>
 <p>&nbsp; </p>
 <p>&nbsp; </p>