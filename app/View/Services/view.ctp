<div class="services view">
<h2><?php  echo __('Service'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($service['Service']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Content'); ?></dt>
		<dd>
			<?php 
			 $body =  h($service['Service']['content']);
      	     $bodyNew = html_entity_decode($body);
        	 echo $bodyNew;  ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Service'), array('action' => 'edit', $service['Service']['id']),array('class' => 'ok btn btn-info btn-large')); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Service'), array('action' => 'delete', $service['Service']['id']),array('class' => 'ok btn btn-info btn-large'), __('Are you sure you want to delete # %s?', $service['Service']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Services'), array('action' => 'index'),array('class' => 'ok btn btn-info btn-large')); ?> </li>
		<li><?php echo $this->Html->link(__('New Service'), array('action' => 'add'),array('class' => 'ok btn btn-info btn-large')); ?> </li>
	</ul>
</div>
 <p>&nbsp; </p>
 <p>&nbsp; </p>