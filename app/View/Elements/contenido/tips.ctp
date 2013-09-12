
  <div class="row-fluid">
    <section id="contenido">
   <section id="principal">
<article id="galeria-inicio">
         <div class="flexslider">
      <ul class="slides">
      <?php foreach ($carousel as $carousels) { ?>
    
        <li>
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
	<div class="row">
		<div class="span9">
			<div class="row-fluid">
				
			<div class="span1">
						<h3 style="float: right;"><?php echo $this->Html->image("diseno-interfaz-avicola-CUIDA-TU-SALUD.png")?></h3>
				</div>
				<div class="span11">
						<h3 style="color:<?php echo $this->session->read('menu.inferior') ?>;border-bottom: 5px solid <?php echo $this->session->read('menu.inferior') ?>">Cuida Tu Salud<?php if($this->Session->read('Auth.User.id')){ 
								 echo " ".$this->Html->link('Agregar Receta', array('controller' => 'Recipes', 'action' => 'add'),array('class'=>'btn btn-primary'));


								}?></h3>
						<br>
					
				</div>
			</div>

			<div class="row-fluid">
				<div class="span11 offset1">
					<?php
						$coun = 1;
					 foreach ($tips as $tip) { ?>
			<div class= "tipssalud">
				<div  class="row-fluid">
				<div class="span4">
					<?php echo $this->Html->image("tip/filename/".$tip['Tip']['filename']."",array('class'=>'recipeadsbeneficeimg')); ?>
				</div>
				<div class="span8">
					<div class="row-fluid">
						<div class="span12">
							<h3 class = "titletips"><?php echo $tip['Tip']['title']." ";
							 if($this->Session->read('Auth.User.id')){ 
							 echo $this->Html->link(__("<i class='icon-home'></i>"), array('Controller' => 'Tips','action' => 'edit',$tip['Tip']['id']),array('class' => 'ok btn btn-info ','escape' => false)); 
							 echo $this->Form->postLink(__("<i class='icon-home'></i>"), array('Controller'=>'Tips','action' => 'delete', $tip['Tip']['id']),array('class' => 'ok btn btn-info ','escape' => false), __('Are you sure you want to delete # %s?',$tip['Tip']['id'])); }?></h3>
						</div>
					</div>
					<div class="row-fluid">
							
							<div class="span12">
									<p class = "textoinfo"><?php echo substr($tip['Tip']['description'], 0, 140) ?> </p>
							</div>
					</div>
					<p class="visible-desktop visi1">&nbsp; </p>
                	 <p class="visible-desktop visi1">&nbsp; </p>
                	 <p class="visible-desktop visi1">&nbsp; </p>
					<div class="row-fluid">
						<div class="span5">
							<?php echo $this->Html->link(__('Saber más'), array('controller' => 'Tips', 'action' => 'select2',$tip['Tip']['id'],$coun++), array('class' => 'btn btn-inverse btn-large')); ?>
						</div>
					</div>
				</div>
				
			</div>
		</div>
			<? } ?>

<div class="paginator" style="float: right;">
<?php 


// Shows the next and previous links
echo $this->Paginator->prev('« Anterior Consejo', null, null, array('class' => 'disabled'));
  //Shows the page numbers
echo "&nbsp;".$this->Paginator->numbers()."&nbsp;";
echo $this->Paginator->next('Siguiente Consejo »', null, null, array('class' => 'disabled'));

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
				<div class="span12 " style="margin: 0;" >

				<?php if($value['Ad']['type'] !='video'){
				echo $this->Html->image(('ad/filename/'.$value['Ad']['filename']),array('class'=>'noticias'));
				} else{ ?>
				<iframe class="noticiavideo" src= <?=$value['Ad']['link'] ?> frameborder="0" allowfullscreen></iframe>
				<?php } ?>
				<p > </p>

				</div>
			<?php } ?>	
		</div>
		</div>
	</div>
</div>
 <p>&nbsp; </p>
 <p>&nbsp; </p>
 

