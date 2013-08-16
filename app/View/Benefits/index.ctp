<div class="benefits index">
	<h2><?php echo __('Benefits'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('title'); ?></th>
			<th><?php echo $this->Paginator->sort('description'); ?></th>
			<th><?php echo $this->Paginator->sort('filename'); ?></th>
			<th><?php echo $this->Paginator->sort('dir'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($benefits as $benefit): ?>
	<tr>
		<td><?php echo h($benefit['Benefit']['id']); ?>&nbsp;</td>
		<td><?php echo h($benefit['Benefit']['title']); ?>&nbsp;</td>
		<td><?php echo h($benefit['Benefit']['description']); ?>&nbsp;</td>
		<td><?php echo h($benefit['Benefit']['filename']); ?>&nbsp;</td>
		<td><?php echo h($benefit['Benefit']['dir']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $benefit['Benefit']['id']),array('class' => 'ok btn btn-info btn-large')); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $benefit['Benefit']['id']),array('class' => 'ok btn btn-info btn-large')); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $benefit['Benefit']['id']),array('class' => 'ok btn btn-info btn-large'), __('Are you sure you want to delete # %s?', $benefit['Benefit']['id'])); ?>
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
		<li>


		<?php 
		echo $this->Html->link(__('New Benefit'), array('action' => 'add'),array('class' => 'ok btn btn-info btn-large'));
		 ?>
			
		</li>
	</ul>
</div>
<script type="text/javascript">
						$('.ok').click(function(){
					$.ajax({
					  type: "GET",
					  url: $(this).attr('href')
					}).done(function(html_form) {
					
					 $('#bod').html(html_form);

					 $("#myModal").modal('hide'); 
					 setTimeout(function(){
 					$("#myModal").modal("show");},2000);					 
					});
					return false;
					});
			</script>