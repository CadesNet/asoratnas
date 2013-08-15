<div class="benefits form">
<?php echo $this->Form->create('Benefit',array('type' => 'file')); ?>
	<fieldset>
		<legend><?php echo __('Add Benefit'); ?></legend>
	<?php
		echo $this->Form->input('title');
		echo $this->Form->input('description');
		echo $this->Form->input('filename',array('type' => 'file'));
		echo $this->Form->input('dir',array('type' => 'hidden'));
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li>
		<?php 
		echo $this->Html->link(__('List Benefits'), array('action' => 'index'),array('class' => ' ok btn btn-info btn-large'));
		 ?>
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
