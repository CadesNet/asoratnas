<div class="benefits form">
<?php echo $this->Form->create('Benefit'); ?>
	<fieldset>
		<legend><?php echo __('Edit Benefit'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('title');
		echo $this->Form->input('description');
		echo $this->Form->input('filename');
		echo $this->Form->input('dir');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Benefit.id')),array('class' => 'ok btn btn-info btn-large'), __('Are you sure you want to delete # %s?', $this->Form->value('Benefit.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Benefits'), array('action' => 'index'),array('class' => 'ok btn btn-info btn-large')); ?>

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
		</li>
	</ul>
</div>
