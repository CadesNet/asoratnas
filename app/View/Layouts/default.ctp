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

$cakeDescription = __d('CADES', 'Centro de Asesoramiento y desarrollo de Sistemas');
?>
<!DOCTYPE html>
<html>

	<head>
		<?php echo $this->Html->charset(); ?>
		<title>
			
			<?php echo 'Avicola Santa Rosa - '. $title_for_layout; ?>
		</title>
		<?php
		  //minicarrusel css
			echo $this->Html->css('mini-carrusel/estilo.css');
		
  //////////
			echo $this->Html->css('estilos');
			echo $this->Html->css('customStyles');
			echo $this->Html->meta('icon');
			
			echo $this->fetch('meta');

			echo $this->Html->css('bootstrap/bootstrap');
			echo $this->Html->css('bootstrap/bootstrap-responsive');
			echo $this->Html->css('bootstrap/core');
			//video
			echo $this->Html->css('video-default');
			

			echo $this->fetch('css');
			
			echo $this->Html->script('bootstrap/vendor/jquery-1.10.1');
			echo $this->Html->script('bootstrap/vendor/bootstrap');
			//video
			echo $this->Html->script('jquery.video-ui');
			//minicarucel
			echo $this->Html->script('mini-carrusel/jquery.ba-throttle-debounce.min');
			echo $this->Html->script('mini-carrusel/jquery.carouFredSel-6.2.1-packed');
			echo $this->Html->script('mini-carrusel/jquery.mousewheel.min');
			echo $this->Html->script('mini-carrusel/jquery.touchSwipe.min');
			echo $this->Html->script('mini-carrusel/jquery.transit.min');
			///// editor
			echo $this->Html->script('ckeditor/ckeditor');
			///modal
			echo $this->Html->script('even_ajax');
			///
			echo $this->fetch('script');
                        
                        echo $this->Html->css('carusel/flexslider1');
                        echo $this->Html->script('carusel/jquery.flexslider1');    
		?>
             <script type="text/javascript">
 $(window).load(function() {
 $('.flexslider').flexslider();
 });
 </script> 
 <link href='http://fonts.googleapis.com/css?family=Kite+One' rel='stylesheet' type='text/css'>
	</head>

	<body onload="Carousel();" style="padding-right: 0px; padding-left: 0px;">
		<div id="main-container">
		
			<div class = "bggeneral">
				<?php echo $this->element('menu/top_menu'); ?>
				<div id="contenido" class="container">
			<div class = "row">
				<div  class="container colorcontainer">		
	                  <?php  echo $this->fetch('content');  ?>
		<div id="myModal" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="width="600" height="1500"">
	  					<div class="modal-header">
	    					<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
	    					<h3 id="myModalLabel">Modal header1</h3>
	  					</div>
	  					<div id="bod" class="modal-body">
	    					<p>One fine body…</p>
	  					</div>
	  					<div class="modal-footer" style="">
	  						<button id="ok" class="btn" data-dismiss="modal" aria-hidden="true">Close</button>
	    					<button class="btn btn-primary">Save changes</button>
	    					<a  href="#myModal1" role="button" class="btn" data-toggle="modal1">Launch demo modal</a>
	  					</div>
	  					

	  	</div>
				</div>

				<?php echo $this->Session->flash(); ?>


				
			</div>
			
		</div>
			<div id="footer" >
				<?php //Silence is golden ?>
				
				<?php echo $this->element('footer/footer1'); ?>
				<?php //echo $this->element('sql_dump'); ?>
			</div><!-- #footer .container -->
			
		</div><!-- #main-container -->
		</div><!-- #header .container -->
<?php echo $this->Js->writeBuffer(); // Write cached scripts ?>
	</body>


</html>