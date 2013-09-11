
				<div class= "dirbarbottom" style="">
					 <?php echo $this->Html->image("dir_bar_bottom.png"); ?>
				</div>
				

<div class="footer1">
	
</div>
<div class = "footer" >
	<div class="container">
		
			
		
		<div class="row-fluid" >
			<div class = "contentbottom" >
			<div class="span2" >
				<?php echo $this->Html->link('Inicio',array('controller' => 'Benefits', 'action' => 'select'),array('escape' => false));
				?>
				<br>
				<?php echo $this->Html->link('Empresa',array('controller' => 'Companies', 'action' => 'select'),array('escape' => false));
				?>
				<br>
				<?php echo $this->Html->link('Servicios',array('controller' => 'Services', 'action' => 'select'),array('escape' => false));
				?>
				<br>
				<?php echo $this->Html->link('Contactos',array('controller' => 'Consultations', 'action' => 'select'),array('escape' => false));
				?>
				

			</div>
			<div class="span2">
				<?php echo $this->Html->link('Productos',array('controller' => 'Categories', 'action' => 'select'),array('escape' => false));
				?>
				<br>
				<?php echo $this->Html->link('Pechuga de Pavo',array('controller' => 'Categories', 'action' => 'select1',1),array('escape' => false));
				?>
				
				<br>
				<?php echo $this->Html->link('Jamón de Pavo',array('controller' => 'Categories', 'action' => 'select1',2),array('escape' => false));
				?>
				
				<br>
				<?php echo $this->Html->link('Paté de Pavo',array('controller' => 'Categories', 'action' => 'select1',3),array('escape' => false));
				?>
				
				<br>
				<?php echo $this->Html->link('Pavo Entero',array('controller' => 'Categories', 'action' => 'select1',4),array('escape' => false));
				?>
				

			</div>
			<div class="span2">
			<?php echo $this->Html->link('Novedades',array('controller' => 'Tips', 'action' => 'select1'),array('escape' => false));
				?>
				
				<br>
				<?php echo $this->Html->link('Recetas',array('controller' => 'Recipes', 'action' => 'select'),array('escape' => false));
				?>
				
				<br>
				<?php echo $this->Html->link('Beneficios del Pavo', array('controller' => 'Benefits', 'action' => 'select1'),array('escape' => false));
				?>
				
				

			</div>
			<div class="span2" >
			<?php echo $this->Html->link('Distribuidores',array('controller' => 'Services', 'action' => 'select'),array('escape' => false));
				?>
				
				<br>
				<?php echo $this->Html->link('Proveedores',array('controller' => 'Services', 'action' => 'select'),array('escape' => false));
				?>
				
				

			</div>
			<div class="span2" >
			<?php echo $this->Html->link('Facebook','https://www.facebook.com/pages/Pavos-Santa-Rosa/294146160603097?fref=ts',array('escape' => false));
				?>
				
				<br>
				<?php echo $this->Html->link('Twitter',array('controller' => 'Benefits', 'action' => 'select'),array('escape' => false));
				?>
				
				

			</div>
			<div class="span2" style="text-align:right;">
			<?php echo $this->Html->link('WebMail','http://www.avicola-santarosa.com:2095/',array('escape' => false,'target'=>'_blank'));
				?>
				<br>
				<?php echo $this->element('contador/analyticstracking') ?>
				<?php echo $this->element('contador/contador') ?>			

			</div>
			</div>
		</div>
	</div>
</div>
</div>