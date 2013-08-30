			<?php if($this->Session->read('Auth.User.id')){ ?>
<div class="btn-group" style="display: block;position: fixed;top: 0;left:0;z-index:2000">
                <button class="btn btn-inverse dropdown-toggle" data-toggle="dropdown">ADMINISTRADOR <span class="caret"></span></button>
                <ul class="dropdown-menu" style="background-color: transparent;border: 0;">  
					<li><?php echo $this->Html->link(__('Notificaciones'), array('controller' => 'Ads', 'action' => 'index'), array('class' => 'idamd modell btn btn-info btn-large')); ?> </li>
					<li><?php echo $this->Html->link(__('Beneficios'), array('controller' => 'Benefits', 'action' => 'index'), array('class' => 'idamd modell btn btn-info btn-large')); ?> </li>
					<li><?php echo $this->Html->link(__('Sucursales'), array('controller' => 'Branches', 'action' => 'index'), array('class' => 'idamd modell btn btn-info btn-large')); ?> </li>
					<li><?php echo $this->Html->link(__('Categoria Productos'), array('controller' => 'Categories', 'action' => 'index'), array('class' => 'idamd modell btn btn-info btn-large')); ?> </li>
					<li><?php echo $this->Html->link(__('Cargos'), array('controller' => 'Charges', 'action' => 'index'), array('class' => 'idamd modell btn btn-info btn-large')); ?> </li>
					<li><?php echo $this->Html->link(__('Companies'), array('controller' => 'Companies', 'action' => 'index'), array('class' => 'idamd modell btn btn-info btn-large')); ?> </li>
					<li><?php echo $this->Html->link(__('Consultas'), array('controller' => 'Consultations', 'action' => 'index'), array('class' => 'idamd modell btn btn-info btn-large')); ?> </li>
					<li><?php echo $this->Html->link(__('Productos'), array('controller' => 'Items', 'action' => 'index'), array('class' => 'idamd modell btn btn-info btn-large')); ?> </li>
				 	<li><?php echo $this->Html->link(__('Recetas'), array('controller' => 'Recipes', 'action' => 'index'), array('class' => 'idamd modell btn btn-info btn-large')); ?> </li>
				 	<li><?php echo $this->Html->link(__('Cotizaciones'), array('controller' => 'Quotes', 'action' => 'index'), array('class' => 'idamd modell btn btn-info btn-large')); ?> </li>
				 	<li><?php echo $this->Html->link(__('Servicios'), array('controller' => 'Services', 'action' => 'index'), array('class' => 'idamd modell btn btn-info btn-large')); ?> </li>
				 	<li><?php echo $this->Html->link(__('Personal Requerimiento'), array('controller' => 'Requirements', 'action' => 'index'), array('class' => 'idamd modell btn btn-info btn-large')); ?> </li>
				 	<li><?php echo $this->Html->link(__('Supermercados'), array('controller' => 'Supermarkets', 'action' => 'index'), array('class' => 'idamd modell btn btn-info btn-large')); ?> </li>
				 	<li><?php echo $this->Html->link(__('Cuida tu salud'), array('controller' => 'Tips', 'action' => 'index'), array('class' => 'idamd modell btn btn-info btn-large')); ?> </li>
				 	<li><?php echo $this->Html->link(__('Carruseles '), array('controller' => 'Carousels', 'action' => 'index'), array('class' => 'idamd modell btn btn-info btn-large')); ?> </li>
				 	<li><?php echo $this->Html->link(__('cerrar sesion '), array('controller' => 'Users', 'action' => 'logout'), array('class' => 'idamd modell btn btn-info btn-large')); ?> </li>   
                </ul>
</div>
			
<?php 	} ?>