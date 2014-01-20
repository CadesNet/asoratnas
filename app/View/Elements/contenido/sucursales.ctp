<div class="container-fluid" style="min-height: 800px;">
<div class="row-fluid">
	<div class="span12">
		<h3 class="otrostitle">Sucursales:<?php if($this->Session->read('Auth.User.id')){ 
								 echo " ".$this->Html->link('Agregar sucursal', array('controller' => 'Branches', 'action' => 'add','personal'),array('class'=>'btn btn-primary'));
								}?></h3>
	</div>
</div>

<div class="row-fluid">
		<div class="span11 offset1">

	<div class="row-fluid" style="min-height: 570px;">
			<ul class = "thumbnails">

		
			<li class="span5" style="min-height: 1px;"></li>
			<li class="span5" style="min-height: 1px;"></li>
			<?php  foreach ($branches as $branch) { 
				if($branch['Branch']['branch']=='Contactos y Requerimiento Personal'){
				?>
		
			<li class="span5">
			<div class="row-fluid">
				<?php if($this->Session->read('Auth.User.id')){ 
							 echo $this->Html->link(__("<i class='icon-pencil'></i>"), array('Controller' => 'Branches','action' => 'edit',$branch['Branch']['id'],'personal'),array('class' => 'ok btn btn-info ','escape' => false)); 
							 echo $this->Form->postLink(__("<i class='icon-remove'></i>"), array('Controller'=>'Branches','action' => 'delete', $branch['Branch']['id'],'personal'),array('class' => 'ok btn btn-info ','escape' => false), __('¿Está seguro de que desea eliminar %s?',$branch['Branch']['name'])); }
				?> 
			</div>
			<div class="row-fluid cuadrovacantes" style="min-height: 150px;">
			<div class = "infovacantes">
			 <div class="span4">

				 	<?php echo $this->Html->image("branch/filename/".$branch['Branch']['filename'])?>

				 	 </div>
				 <div class="span8">
				 	<div class="row-fluid">
				 		<div class="span12" style="font-weight: bold;color: #827370;">
				 			<?php  echo $branch['Branch']['name'];?>
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
	
			 <?php	}

			 }?>
			 </ul>
			 </div>
			 </div>
		
</div>

<div class="row-fluid">
	<div class="span12">
		<p style="color:#889091">Encuentranos en</p> 
	</div>
</div>
<div class="row-fluid">
		<div class="span12">
<?php if($this->Session->read('Auth.User.id')){ 
								 echo " ".$this->Html->link('Ver supermercados', array('controller' => 'Supermarkets', 'action' => 'index'),array('class'=>'btn btn-primary'));
								}?>
<div class="list_carousel responsive" style="height:70px">

				<ul id="foo5" style="height:100%">
					<?php foreach($supermarkets as $supermarket) { ?>
						<li style="width:80px">
						<?php 
					echo $this->Html->link($this->Html->image("supermarket/filename/".$supermarket['Supermarket']['filename'], array("alt" => "Empresa")),$supermarket['Supermarket']['link'],array('escape' => false , 'class' => 'brand','target'=>'_blank'));  
			    	    ?>
						</li>
						<?php }	 ?>
						<?php foreach($supermarkets as $supermarket) { ?>
						<li style="width:80px">
						<?php 
					echo $this->Html->link($this->Html->image("supermarket/filename/".$supermarket['Supermarket']['filename'], array("alt" => "Empresa")),$supermarket['Supermarket']['link'],array('escape' => false , 'class' => 'brand','target'=>'_blank'));  
			    	    ?>
						</li>
						<?php }	 ?>
						<?php foreach($supermarkets as $supermarket) { ?>
						<li style="width:80px">
						<?php 
					echo $this->Html->link($this->Html->image("supermarket/filename/".$supermarket['Supermarket']['filename'], array("alt" => "Empresa")),$supermarket['Supermarket']['link'],array('escape' => false , 'class' => 'brand','target'=>'_blank'));  
			    	    ?>
						</li>
						<?php }	 ?>

				</ul>
			</div>

	

</div>	
</div>

</div>
