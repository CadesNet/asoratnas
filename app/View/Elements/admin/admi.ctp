			<?php if($this->Session->read('Auth.User.id')){ ?>
<div class="btn-group" style="display: block;position: fixed;top: 0;left:0;z-index:2000">
                <button class="btn btn-inverse dropdown-toggle" data-toggle="dropdown">ADMINISTRADOR <span class="caret"></span></button>
                <ul class="dropdown-menu" style="background-color: transparent;border: 0;">  
					<li><?php echo $this->Html->link(__('Requerimiento Personal Sucursales'), array('controller' => 'Branches', 'action' => 'index'), array('class' => 'idamd modell btn btn-info btn-large')); ?> </li>
					<li><?php echo $this->Html->link(__('Consultas'), array('controller' => 'Consultations', 'action' => 'index'), array('class' => 'idamd modell btn btn-info btn-large')); ?> </li>
				<!-- 	<li><?php  // echo$this->Html->link(__('Cotizaciones'), array('controller' => 'Quotes', 'action' => 'index'), array('class' => 'idamd modell btn btn-info btn-large')); ?> </li> -->
				 	<li><?php echo $this->Html->link(__('Servicios'), array('controller' => 'QuoteServices', 'action' => 'index'), array('class' => 'idamd modell btn btn-info btn-large')); ?> </li>
				 	<li><?php echo $this->Html->link(__('Nuevos Requerimientos'), array('controller' => 'NewRequirements', 'action' => 'index'), array('class' => 'idamd modell btn btn-info btn-large')); ?> </li> 
				 	<li><?php echo $this->Html->link(__('cerrar sesion '), array('controller' => 'Users', 'action' => 'logout'), array('class' => 'idamd modell btn btn-info btn-large')); ?> </li>   
                </ul>
</div>
			
<?php 	} ?>