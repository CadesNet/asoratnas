<?php foreach ($companies as $value) { ?>
<div class="row-fluid">
	<div class="span12">
		<h3 style="color:#25A781;border-bottom: 8px solid #25A781;">Historia<?php if($this->Session->read('Auth.User.id')){ 
							 echo " ".$this->Html->link(__("<i class='icon-pencil'></i>"), array('controller' => 'Companies','action' => 'edit',$value['Company']['id']),array('class' => 'ok btn btn-info ','escape' => false)); }?></h3>
	</div>
</div>
<br>
<br>
<div class="container-fluid">
	<div class="row-fluid">
		<div class="span12">
		 <?php 
        echo html_entity_decode(h($value['Company']['content']));  
		 ?>
		</div>
	</div>
</div>
<?php } ?>
<br>
<br>
<br>
<br>

