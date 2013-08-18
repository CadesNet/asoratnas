<div class="container">
	<div class="row">
		<div class="span9">
			<div class="row-fluid">
				
			
						<div class="span1">
							<?php echo $this->Html->image("sugerencia.png")?>
						</div>
						<div class="span10">
							<div class="row-fluid">
								<div class="span12">
									<h3 class = "recipetitle">nam e</h3>
								</div>
							</div>
							
							<br>
					
				</div>
			</div>

			<div class="row-fluid">
				<div class="span11 offset1">
					<?php
						$coun = 1;
					 foreach ($tips as $tip) { ?>
			<div class= "itemreceta">
				<div  class="row-fluid">
				<div class="span5">
					<?php echo $this->Html->image("tip/filename/".$tip['Tip']['filename'].""); ?>
				</div>
				<div class="span7">
					<div class="row-fluid">
						<div class="span12">
							<h3 class = "recipeitemtitle"><?php echo $tip['Tip']['title'] ?></h3>
						</div>
					</div>
					<div class="row-fluid">
							<div class="span3">
								<div class = "recipetitledescription"> Desccipcion </div>
							</div>
							<div class="span9">
								<p><?php echo substr($tip['Tip']['description'], 0, 1000) ?> min</p>
							</div>
					</div>
					
					<div class="row-fluid">
						<div class="span5">
							<?php echo $this->Html->link(__('Ver beneficios para la salud'), array('controller' => 'Tips', 'action' => 'select2',$tip['Tip']['id'],$coun++), array('class' => 'btn btn-info btn-large')); ?>
						</div>
					</div>
				</div>
				<div class="span2">
					
				</div>
			</div>
		</div>
			<? } ?>
				
			<div class="paginator">
<?php 


// Shows the next and previous links
echo $this->Paginator->prev('« Previous', null, null, array('class' => 'disabled'));
  //Shows the page numbers
echo $this->Paginator->numbers();
echo $this->Paginator->next('Next »', null, null, array('class' => 'disabled'));

// prints X of Y, where X is current page and Y is number of pages
//echo $this->Paginator->counter();
        ?>
</div>
				</div>
			</div>

			

		</div>
		<div class="span3">
		<div class="row-fluid">
			<?php foreach ($ads as $value) { ?> 
			<div class="span12 " >

				 <?php if($value['Ad']['type'] !='video'){ 
					 echo $this->Html->image('ad/filename/'.$value['Ad']['filename']);
				} else{ ?>
					<iframe  src= <?=$value['Ad']['link'] ?> frameborder="0" allowfullscreen></iframe>
				 <?php } ?>
				
				<br>
				<br>
				<br>
				

			</div>		
		<?php } ?>
		</div>
		</div>
	</div>
</div>