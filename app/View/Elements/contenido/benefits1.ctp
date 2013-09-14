<?php $id_beneficio= null; ?>
  <div class="row-fluid">
    <section id="contenido">
   <section id="principal">
   	   	<?php if($this->Session->read('Auth.User.id')){ 
						echo $this->Html->link('Agregar imagen Carousel', array('controller' => 'Carousels', 'action' => 'add',$id_beneficio,$count,'1','beneficios1'),array('class'=>'btn btn-primary'));

	}?>
<article id="galeria-inicio">
         <div class="flexslider">
      <ul class="slides">
      <?php foreach ($carousel as $carousels) { ?>
    
        <li>
        	<?php if($this->Session->read('Auth.User.id')){ ?>
											
				<?php echo $this->Html->link(__("<i class='icon-pencil'></i>"), array('controller'=>'Carousels','action' => 'edit', $carousels['Carousel']['id'],$id_beneficio,$count,'1','beneficios1'),array('class' => 'ok btn btn-info ','escape' => false)); ?>
				<?php echo $this->Form->postLink(__("<i class='icon-remove'></i>"), array('controller'=>'Carousels','action' => 'delete', $carousels['Carousel']['id'],$id_beneficio,$count,'1','beneficios1'),array('class' => 'ok btn btn-info ','escape' => false), __('Are you sure you want to delete # %s?', $carousels['Carousel']['id'])); 
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

<div class="container">
	<div class="row-fluid">
		<div class="span9">
			<div class="row-fluid">
				<div class="span1">
					<h3 style="float: right;"><?php echo $this->Html->image("beneficos-del-pavo.png")?></h3>
				</div>
				<div class="span11">
					<h3 style="color:<?php echo $this->session->read('menu.inferior') ?>;border-bottom: 5px solid <?php echo $this->session->read('menu.inferior') ?>">Beneficios del pavo</h3>
				<br>
				</div>
			</div>

			<div class="row-fluid">
				<div class="span11 offset1">
				<?php
				$coun = 1;
				foreach ($benefits as $benefit) {
						$id_beneficio=$benefit['Benefit']['id'];
				 ?>
				<div class= "beneficiospavo">
					<div class="row-fluid">
					<div class="span5">

						<?php  echo $this->Html->image("benefit/filename/".$benefit['Benefit']['filename']."",array('class'=>'recipeadsbeneficeimg')); ?>
					</div>
					<div class="span7">
						<div class="row-fluid">
							<div class="span12">
								<h3 class = "titlebeneficios"><?php echo $benefit['Benefit']['title'] ?></h3>
							</div>
						</div>
						<p class="visible-desktop visi">&nbsp; </p>
                	 <p class="visible-desktop visi">&nbsp; </p>
                	 <p class="visible-desktop visi">&nbsp; </p>
                	 <p class="visible-desktop visi">&nbsp; </p>
                	 <p class="visible-desktop visi">&nbsp; </p>
                	 <p class="visible-desktop visi">&nbsp; </p>
                	  <br>
						<div class="row-fluid">
							<div class="span5">
							<?php echo $this->Html->link(__('Volver'), array('controller' => 'Benefits', 'action' => 'select1'), array('class' => 'btn btn-primary btn-large ')); ?>
							</div>
						</div>
					</div>
					<div class="span1">
					</div>
					</div>
					<p class="visible-desktop">&nbsp; </p>
                	 <p class="visible-desktop">&nbsp; </p>
                	
        
					<div class="row-fluid">
						<div class="span12">
						<p class = "textoinfo"><?php echo html_entity_decode($benefit['Benefit']['description']) ?></p>
						
						</div>
					</div>
				</div>
				<?} ?>
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
						echo $this->Html->link('Agregar noticias', array('controller' => 'Ads', 'action' => 'add',$id_beneficio,$count,'1','beneficios1'),array('class'=>'btn btn-primary'));
						
					}?>
		<div class="row-fluid">
			<?php foreach ($ads as $value) { ?>
			
				<div class="span12 " style="margin: 0;" >
				<?php if($this->Session->read('Auth.User.id')){ 
				 echo $this->Html->link(__("<i class='icon-pencil'></i>"), array('controller'=>'Ads','action' => 'edit',$value['Ad']['id'],$id_beneficio,$count,'1','beneficios1'),array('class' => 'ok btn btn-info ','escape' => false)); 
				 echo $this->Form->postLink(__("<i class='icon-remove'></i>"), array('controller'=>'Ads','action' => 'delete', $value['Ad']['id'],$id_beneficio,$count,'1','beneficios1'),array('class' => 'ok btn btn-info ','escape' => false), __('Are you sure you want to delete # %s?',$value['Ad']['id']));
				 }?>
				<?php if($value['Ad']['type'] !='video'){
				echo $this->Html->image(('ad/filename/'.$value['Ad']['filename']),array('class'=>'noticias'));
				} else{ ?>
				<iframe class="noticiavideo" src= <?=$value['Ad']['link'] ?> frameborder="0" allowfullscreen></iframe>
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

