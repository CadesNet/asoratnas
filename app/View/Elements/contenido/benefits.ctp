  <div class="row-fluid">
    <section id="contenido">
	   <section id="principal">
	   	   	<?php if($this->Session->read('Auth.User.id')){ 
							echo $this->Html->link('Agregar imagen Carousel', array('controller' => 'Carousels', 'action' => 'add','1','1','1','beneficios'),array('class'=>'btn btn-primary'));

		}?>
		  <article id="galeria-inicio">
	         <div class="flexslider">
			      <ul class="slides">
			      <?php foreach ($carousel as $carousels) { ?>
			    
			        <li>
			        	<?php if($this->Session->read('Auth.User.id')){ ?>
														
							<?php echo $this->Html->link(__("<i class='icon-pencil'></i>"), array('controller'=>'Carousels','action' => 'edit', $carousels['Carousel']['id'],'1','1','1','beneficios'),array('class' => 'ok btn btn-info ','escape' => false)); ?>
							<?php echo $this->Form->postLink(__("<i class='icon-remove'></i>"), array('controller'=>'Carousels','action' => 'delete', $carousels['Carousel']['id'],'1','1','1','beneficios'),array('class' => 'ok btn btn-info ','escape' => false), __('Are you sure you want to delete # %s?', $carousels['Carousel']['id'])); 
						}?>
			               <?php echo $this->Html->image("carousel/filename/".$carousels['Carousel']['filename']."");  
			                    if($carousels['Carousel']['description']!=""){
			               ?> 
			               <p class="flex-caption">
			                <?php echo $carousels['Carousel']['description'] ?>
			               </p>
			               <?php } ?>
			        </li>
			       <?php } ?>
			      </ul>
	         </div>
	      </article>
	   </section>
	</section>
  </div>

<div class="row-fluid">
		<div class="span9">
			<div class="row-fluid">
				<!-- <div class="span1">
					 <h3  style="float: right;"><?php // echo $this->Html->image("beneficos-del-pavo.png")?></h3> 
				</div>-->
				<div class="span11 offset1">
					<h3 style="color: #73235E <?php //echo $this->session->read('menu.inferior') ?>;border-bottom: 5px solid <?php //echo $this->session->read('menu.inferior') ?> #73235E;" >Beneficios del pavo <?php if($this->Session->read('Auth.User.id')){ echo " ".$this->Html->link('Agregar Beneficio', array('controller' => 'Benefits', 'action' => 'add','MM'),array('class'=>'btn btn-primary'));}?></h3>
				</div>
			</div>

			<div class="row-fluid">
				<div class="span11 offset1">
							<?php
							//sacar mas informacion del paginador 
							//echo $paginator->counter(array('format' => 'Page %page% of %pages%, showing %current% records out of %count% total, starting on record %start%, ending on nd%'));
								$coun = 0;
								
								switch (count($benefits)) {
									case 1:
										$coun = (int)$this->Paginator->counter(array('format' => '%end%'));
										break;
									case 2:
										$coun = (int)$this->Paginator->counter(array('format' => '%end%'))-1;
										break;
									case 3:
										$coun = (int)$this->Paginator->counter(array('format' => '%end%'))-2;
										break;
									case 4:
										$coun = (int)$this->Paginator->counter(array('format' => '%end%'))-3;
										break;
									
								}
								
							 foreach ($benefits as $benefit) { ?>

					<div class= "beneficiospavo">
						<div  class="row-fluid">
							<div class="span4">
								<?php echo $this->Html->image("benefit/filename/".$benefit['Benefit']['filename']."",array('class'=>'recipeadsbeneficeimg')); ?>
							</div>
							<div class="span7">
								<div class="row-fluid">
									<div class="span12">
										<h4 class = "titlebeneficios"><?php echo  ((strlen(h($benefit['Benefit']['title']))>47) ? substr(h($benefit['Benefit']['title']), 0, 47)."..." : substr(h($benefit['Benefit']['title']), 0, 47));
										 if($this->Session->read('Auth.User.id')){ 
										 echo $this->Html->link(__("<i class='icon-pencil'></i>"), array('Controller' => 'Benefits','action' => 'edit',$benefit['Benefit']['id'],'mm'),array('class' => 'ok btn btn-info ','escape' => false)); 
										 echo $this->Form->postLink(__("<i class='icon-remove'></i>"), array('Controller'=>'Benefits','action' => 'delete', $benefit['Benefit']['id'],'mm'),array('class' => 'ok btn btn-info ','escape' => false), __('Are you sure you want to delete # %s?',$benefit['Benefit']['id'])); }?></h4>
									</div>
								</div>
								<div class="row-fluid">
										<div class="span12">
											<p class = "textoinfo"><?php echo $this->Text->truncate(html_entity_decode(h($benefit['Benefit']['description'])),150,array('ellipsis'=>'...','exact' => false,'html' => true)) ?> </p>	
										</div>
								</div>
										<p class="visible-desktop visi1">&nbsp; </p>
					                	 <p class="visible-desktop visi1">&nbsp; </p>
			                	 </br>
								<div class="row-fluid">
									<div class="span5">
										<?php echo $this->Html->link(__('Saber más'), array('controller' => 'Benefits', 'action' => 'select2',$benefit['Benefit']['id'],$coun++), array('class' => 'btn  btn-primary btn-large')); ?>
									</div>
								</div>
							</div>
						
						</div>
					</div>
					<? } ?>
						
					<div class="paginator" style="float: right;">
						<?php 


						// Shows the next and previous links
						echo $this->Paginator->prev('« Anterior', null, null, array('class' => 'disabled'));
						  //Shows the page numbers
						echo "&nbsp;".$this->Paginator->numbers()."&nbsp;";
						echo $this->Paginator->next('Siguiente »', null, null, array('class' => 'disabled'));

						// prints X of Y, where X is current page and Y is number of pages
						//echo $this->Paginator->counter();
						        ?>
					</div>
				</div>
			</div>
		</div>

		<div class="span3">
				<?php if($this->Session->read('Auth.User.id')){ 

					 echo $this->Html->link('ver todas', array('controller' => 'Ads', 'action' => 'index'),array('class'=>'btn btn-primary')); 
				} ?><?php if($this->Session->read('Auth.User.id')){ 
						echo $this->Html->link('Agregar noticias', array('controller' => 'Ads', 'action' => 'add','1','1','1','beneficios'),array('class'=>'btn btn-primary'));
						
					}?>
				<div class="row-fluid">
					<?php foreach ($ads as $value) { ?>
					
						<div class="span12 " style="margin: 0;" >
							<?php if($this->Session->read('Auth.User.id')){ 
							 echo $this->Html->link(__("<i class='icon-pencil'></i>"), array('controller'=>'Ads','action' => 'edit',$value['Ad']['id'],'1','1','1','beneficios'),array('class' => 'ok btn btn-info ','escape' => false)); 
							 echo $this->Form->postLink(__("<i class='icon-remove'></i>"), array('controller'=>'Ads','action' => 'delete', $value['Ad']['id'],'1','1','1','beneficios'),array('class' => 'ok btn btn-info ','escape' => false), __('Are you sure you want to delete # %s?',$value['Ad']['id']));
							 }?>
							<?php if($value['Ad']['type'] !='video'){
							echo $this->Html->image(('ad/filename/'.$value['Ad']['filename']),array('class'=>'noticias'));
							} else{ ?>
							<iframe class="noticiavideo" src= <?=$value['Ad']['link'] ?> frameborder="0" allowfullscreen></iframe>
							<?php } ?>
							<p> </p>

						</div> 
					<?php } ?>	
				</div>
		</div>
</div>

 <p>&nbsp; </p>
 <p>&nbsp; </p>
 