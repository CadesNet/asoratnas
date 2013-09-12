<div class="container" style="min-height: 800px;">
<div class="row-fluid">
	<div class="span12">
		<h3 class="otrostitle">Sucursales:</h3>
	</div>
</div>
<br>
<br>
<div class="row-fluid">
		<div class="span11 offset1">
	<div class="row-fluid">
			<ul class = "thumbnails">
			<li class="span5">
				
			</li >
			<li class="span5">
				
			</li>
			<?php  foreach ($branches as $branch) { ?>

	
			<li class="span5">
			<div class="row-fluid">
				<?php if($this->Session->read('Auth.User.id')){ 
							 echo $this->Html->link(__("<i class='icon-home'></i>"), array('Controller' => 'Branches','action' => 'edit',$branch['Branch']['id']),array('class' => 'ok btn btn-info ','escape' => false)); 
							 echo $this->Form->postLink(__("<i class='icon-home'></i>"), array('Controller'=>'Branches','action' => 'delete', $branch['Branch']['id']),array('class' => 'ok btn btn-info ','escape' => false), __('Are you sure you want to delete # %s?',$branch['Branch']['id'])); }
				?> 
			</div>
			<div class="row-fluid cuadrovacantes" style="min-height: 150px;">
			<div class = "infovacantes">
			 <div class="span4">

				 	<?php echo $this->Html->image("branch/filename/".$branch['Branch']['filename'])?>

				 	 </div>
				 <div class="span8">
				 	<div class="row-fluid">
				 		<div class="span12">
				 			<?php  echo 	$branch['Branch']['name'];?>
				 		</div>
				 	</div>
				 	<div class="row-fluid">
				 		<div class="span12">
				 			<?php  echo 	$branch['Branch']['address'];?>
				 		</div>
				 	</div>
				 	
				 </div>
				</div>	
			</div> 
			<br/>
			<div class="row-fluid" >	
			 		<div class="span12" style="text-align: right;">
			 			<?php echo $this->Html->link('Ver Cargos', array('controller' => 'Branches', 'action' => 'select1',$branch['Branch']['id']), array('class' => 'btn btn-warning')) ?>
			 		</div>
				</div>

			 </li>
	
			 <?php	}?>
			 </ul>
			 </div>
			 </div>
		
</div>
</div>
<div class="row-fluid">
	<div class="span12">
		<h4 style="color:#979E9D">Encuentranos en</h4> 
	</div>
</div>
<div class="row-fluid">
		<div class="span12">

<div class="list_carousel responsive" style="height:70px">

				<ul id="foo5" style="height:100%">
					<?php foreach($supermarkets as $supermarket) { ?>
						<li style="width:80px">
						<?php 
					echo $this->Html->link($this->Html->image("supermarket/filename/".$supermarket['Supermarket']['filename'], array("alt" => "Empresa")),$supermarket['Supermarket']['link'],array('escape' => false , 'class' => 'brand'));  
			    	    ?>
						</li>
						<?php }	 ?>
						<?php foreach($supermarkets as $supermarket) { ?>
						<li style="width:80px">
						<?php 
					echo $this->Html->link($this->Html->image("supermarket/filename/".$supermarket['Supermarket']['filename'], array("alt" => "Empresa")),$supermarket['Supermarket']['link'],array('escape' => false , 'class' => 'brand'));  
			    	    ?>
						</li>
						<?php }	 ?>
						<?php foreach($supermarkets as $supermarket) { ?>
						<li style="width:80px">
						<?php 
					echo $this->Html->link($this->Html->image("supermarket/filename/".$supermarket['Supermarket']['filename'], array("alt" => "Empresa")),$supermarket['Supermarket']['link'],array('escape' => false , 'class' => 'brand'));  
			    	    ?>
						</li>
						<?php }	 ?>

				</ul>
			</div>

	

</div>	
</div>

</div>
