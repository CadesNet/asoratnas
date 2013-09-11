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
<<<<<<< HEAD
<html style="background: #044B40;">

	<head>
		 
		<?php echo $this->Html->charset(); ?>

=======
<html>

	<head>
	
		<?php echo $this->Html->charset(); ?>
>>>>>>> b6abcb8f17127e7992c4b9391ac8f4dc08532886
		<title>
			
			<?php echo 'Avicola Santa Rosa - '. $title_for_layout; ?>
		</title>
		<?php
<<<<<<< HEAD

=======
>>>>>>> b6abcb8f17127e7992c4b9391ac8f4dc08532886
		  //minicarrusel css
			echo $this->Html->css('mini-carrusel/estilo.css');
		
  //////////
			echo $this->Html->css('estilos');
			echo $this->Html->css('customStyles');
<<<<<<< HEAD

			echo $this->Html->meta('favicon.ico',$this->webroot.'img/favicon.ico',array('type' => 'icon')); 

=======
			echo $this->Html->meta('icon');
>>>>>>> b6abcb8f17127e7992c4b9391ac8f4dc08532886
			
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
			echo $this->Html->script('mini-carrusel/jquery.carouFredSel-6.2.1');
			echo $this->Html->script('mini-carrusel/jquery.mousewheel.min');
			echo $this->Html->script('mini-carrusel/jquery.touchSwipe.min');
			echo $this->Html->script('mini-carrusel/jquery.transit.min');
			echo $this->Html->script('mini-carrusel/jquery.ba-throttle-debounce.min');
			///// editor
			echo $this->Html->script('ckeditor/ckeditor');
			///modal
			//echo $this->Html->script('even_ajax');
			///
			echo $this->fetch('script');
                        
                        echo $this->Html->css('carusel/flexslider1');
                        echo $this->Html->script('carusel/jquery.flexslider1');    
		?>
 <script type="text/javascript">
 	$(document).ready(function(){
   $("a#<?php echo $this->Session->read('menu.id')?>").css({"color": "<?php echo $this->session->read('menu.color')?>","text-shadow": "0 -1px 0 rgba(0, 0, 0, 0.25)","background":"<?php echo $this->session->read('menu.inferior') ?>","background-color": "<?php echo $this->Session->read('menu.inferior') ?>","*background-color": "<?php echo $this->session->read('menu.inferior') ?>","background-image": "-moz-linear-gradient(top, <?php echo $this->Session->read('menu.superior') ?>, <?php echo $this->session->read('menu.inferior') ?>)","background-image": "-webkit-gradient(linear, 0 0, 0 100%, from(<?php echo $this->Session->read('menu.superior') ?>), to(<?php echo $this->session->read('menu.inferior') ?>))","background-image": "-webkit-linear-gradient(top, <?php echo $this->Session->read('menu.superior') ?>, <?php echo $this->session->read('menu.inferior') ?>)","background-image": "-o-linear-gradient(top, <?php echo $this->Session->read('menu.superior') ?>, <?php echo $this->session->read('menu.inferior') ?>)","background-image": "linear-gradient(to bottom, <?php echo $this->Session->read('menu.superior') ?>, <?php echo $this->session->read('menu.inferior') ?>)","background-repeat": "repeat-x","border-color": "<?php echo $this->session->read('menu.inferior') ?> <?php echo $this->session->read('menu.inferior') ?> #1f6377","border-color": "rgba(0, 0, 0, 0.1) rgba(0, 0, 0, 0.1) rgba(0, 0, 0, 0.25)","filter": "progid:DXImageTransform.Microsoft.gradient(startColorstr='<?php echo $this->session->read('menu.inferior') ?>', endColorstr='<?php echo $this->Session->read('menu.inferior') ?>', GradientType=0)","filter": "progid:DXImageTransform.Microsoft.gradient(enabled=false)"});
   
    });   

 $(window).load(function() {
 $('.flexslider').flexslider();
isset

 });
 </script> 
 <link href='http://fonts.googleapis.com/css?family=Kite+One' rel='stylesheet' type='text/css'>
	</head>

<<<<<<< HEAD
	<body style="padding-right: 0px; padding-left: 0px;">
=======
	<body onload="Carousel();" style="padding-right: 0px; padding-left: 0px;">
>>>>>>> b6abcb8f17127e7992c4b9391ac8f4dc08532886
		<div id="main-container">
		
			<div class = "bggeneral">
				<?php echo $this->element('menu/top_menu'); ?>
				<div id="contenido" class="container">
<<<<<<< HEAD
					<div class = "row">
						<div  class="container-fluid colorcontainer">	

						<?php echo $this->element('admin/admi'); ?>	
			           
			            <?php  echo $this->fetch('content');  ?>

						</div>

						<?php echo $this->Session->flash(); ?>


						
					</div>
			
				</div>
				<div id="footer" style="height: 100px;">
					<?php //Silence is golden ?>
					
					<?php echo $this->element('footer/footer1'); ?>
					
				</div><!-- #footer .container -->
=======
			<div class = "row">
				<div  class="container-fluid colorcontainer">	

				<?php echo $this->element('admin/admi'); ?>	
	           
	            <?php  echo $this->fetch('content');  ?>

				</div>

				<?php echo $this->Session->flash(); ?>


				
			</div>
			
		</div>
			<div id="footer" style="height: 100px;">
				<?php //Silence is golden ?>
				
				<?php echo $this->element('footer/footer1'); ?>
				<?php //echo $this->element('sql_dump'); ?>
			</div><!-- #footer .container -->
>>>>>>> b6abcb8f17127e7992c4b9391ac8f4dc08532886
			
		</div><!-- #main-container -->
		</div><!-- #header .container -->
<?php //echo $this->Js->writeBuffer(); // Write cached scripts ?>
		<script type="text/javascript" language="javascript">
			$(function() {
				//	Fuild layout, centering the items
				$('#foo5').carouFredSel({
					width: '100%',
					scroll: 1
				});

			});
		</script>
	</body>


</html>