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
			echo $this->Html->css('estilos');
			echo $this->Html->css('customStyles');
			echo $this->Html->meta('icon');
			
			echo $this->fetch('meta');

			echo $this->Html->css('bootstrap/bootstrap');
			echo $this->Html->css('bootstrap/bootstrap-responsive');
			echo $this->Html->css('bootstrap/core');
			//video
			echo $this->Html->css('video-default.css');
			

			echo $this->fetch('css');
			
			echo $this->Html->script('bootstrap/vendor/jquery-1.10.1');
			echo $this->Html->script('bootstrap/vendor/bootstrap');
			//video
			echo $this->Html->script('jquery.video-ui');
			
			echo $this->fetch('script');
                        
                        echo $this->Html->css('carusel/flexslider1');
                        echo $this->Html->script('carusel/jquery.flexslider1');    
		?>
             <script type="text/javascript">
 $(window).load(function() {
 $('.flexslider').flexslider();
 });
 </script> 
 <link href='http://fonts.googleapis.com/css?family=Squada+One' rel='stylesheet' type='text/css'>
	</head>

	<body onload="Carousel();" style="padding-right: 0px; padding-left: 0px;">
		<div id="main-container">
		
			<div class = "bggeneral">
				<?php echo $this->element('menu/top_menu'); ?>
				<div id="contenido" class="container">
			<div class = "row">
				<div  class="container colorcontainer">

                 
			
	                  <?php  echo $this->fetch('content');  ?>
			
				



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
	</body>


</html>