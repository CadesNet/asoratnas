<?php
/**
 *
 * PHP 5
 *
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright 2005-2012, Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright 2005-2012, Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @package       Cake.View.Layouts
 * @since         CakePHP(tm) v 0.10.0.1076
 * @license       MIT License (http://www.opensource.org/licenses/mit-license.php)
 */

$cakeDescription = __d('cake_dev', 'CakePHP: the rapid development php framework');
?>
<!DOCTYPE html>
<html>

	<head>
		<?php echo $this->Html->charset(); ?>
		<title>
			<?php echo $cakeDescription ?>:
			<?php echo $title_for_layout; ?>
		</title>
		<?php
			echo $this->Html->css('estilos');
			echo $this->Html->css('customStyles');
			echo $this->Html->meta('icon');
			
			echo $this->fetch('meta');

			echo $this->Html->css('bootstrap/bootstrap');
			echo $this->Html->css('bootstrap/bootstrap-responsive');
			echo $this->Html->css('bootstrap/core');
			

			echo $this->fetch('css');
			
			echo $this->Html->script('bootstrap/vendor/jquery-1.10.1');
			echo $this->Html->script('bootstrap/vendor/bootstrap');
			
			echo $this->fetch('script');
                        
                        echo $this->Html->css('carusel/flexslider1');
                        echo $this->Html->script('carusel/jquery.flexslider1');    
		?>
             <script type="text/javascript">
 $(window).load(function() {
 $('.flexslider').flexslider();
 });
 </script> 
	</head>

	<body onload="Carousel();" style="padding-right: 0px; padding-left: 0px;">
		<div id="main-container">
		
			
				<?php echo $this->element('menu/top_menu'); ?>
			
			<div id="content" class="container">
                 
                 <?php echo $this->element('carusel/carrusel2'); ?>
				<?php echo $this->element('contenido/contenido4'); ?>
                  <?php echo $this->fetch('content'); ?>
				<div id="myModal" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  					<div class="modal-header">
    					<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
    					<h3 id="myModalLabel">Modal header1</h3>
  					</div>
  					<div class="modal-body">
    					<p>One fine body…</p>
  					</div>
  					<div class="modal-footer">
    					<button class="btn" data-dismiss="modal" aria-hidden="true">Close</button>
    					<button class="btn btn-primary">Save changes</button>
    					<a href="#myModal1" role="button" class="btn" data-toggle="modal1">Launch demo modal</a>
  					</div>
  				</div>
				


				<?php echo $this->Session->flash(); ?>
			</div><!-- #header .container -->
			<br>
			<br>
			<br>
			<br>
			<div id="footer" >
				<?php //Silence is golden ?>
				<?php echo $this->element('footer/footer1'); ?>
			</div><!-- #footer .container -->
			
		</div><!-- #main-container -->
		
		<div class="container">
			<div class="well">
				<small>
					<?php echo $this->element('sql_dump'); ?>
				</small>
			</div>
		</div><!-- .container -->
		<?php echo $this->Js->writeBuffer(); // Write cached scripts ?>
	</body>


</html>