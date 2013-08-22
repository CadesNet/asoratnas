<div class="container">
	<div class="row-fluid">
		<div class="span9">
			<div class="row-fluid">
				
			
						<div class="span1">
							<?php echo $this->Html->image("sugerencia.png")?>
						</div>
						<div class="span11">
							<div class="row-fluid">
								<div class="span12">
									<h3 class = "recipetitle">Sucursales</h3>
								</div>
							</div>
							
							<br>
					
				</div>
			</div>
	<div class="row-fluid">
		<div class="sapn12">
			<div class="row-fluid">
			<?php  foreach ($branches as $branch) { ?>
		
			<div class="span5">
				 <div class="span2">
				 	<?php echo $this->Html->image("branch/filename/".$branch['Branch']['filename'])?>
				 </div>
				 <div class="span4">
				 	<p><?php  echo 	$branch['Branch']['name'];?> </p>
				 	<br>
				 	<p><?php echo $this->Html->link('Ver Cargos', array('controller' => 'Branches', 'action' => 'select1',$branch['Branch']['id'])) ?></p>
				 </div>
			</div>
			 <?php	}?>			
			</div>
		</div>
	</div>
</div>
</div>
<div class="row-fluid">
		<div class="span12">

<div class="list_carousel responsive" style="height:90px">

				<ul id="foo5" style="height:100%">
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
