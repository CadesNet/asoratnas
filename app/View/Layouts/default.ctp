<?php
/**
 *
 * PHP 5
 *
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @package       app.View.Layouts
 * @since         CakePHP(tm) v 0.10.0.1076
 * @license       http://www.opensource.org/licenses/mit-license.php MIT License
 */

$cakeDescription = __d('CADES', 'Centro de Asesoramiento y desarrollo de Sistemas');
?>
<!DOCTYPE html>
<html style="background: #044B40;">

<head>
		 
	<?php echo $this->Html->charset(); ?>

	<title>
			
			<?php echo 'Avicola Santa Rosa' ?>
	</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<?php

		  //minicarrusel css
			echo $this->Html->css('mini-carrusel/estilo.css');

  //////////
			echo $this->Html->css('estilos');
			echo $this->Html->css('customStyles');

			echo $this->Html->meta('favicon.ico','http://new.avicola-santarosa.com/app/webroot/img/favicon.ico',array('type' => 'icon')); 
			
			
			
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
			echo $this->Html->script('bootstrap/vendor/modernizr-2.6.2-respond-1.1.0.min');
			
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
     $("a#<?php echo $this->Session->read('menu1.id')?>").css({'background-color': '#508A79','color': '#ffffff'}); 
 	 $("a#<?php echo $this->Session->read('menu1.id')?> i").addClass('icon-white');  
    });


 $(window).load(function() {
 $('.flexslider').flexslider();

 });
 </script> 
 <link href='http://fonts.googleapis.com/css?family=Kite+One' rel='stylesheet' type='text/css'>

</head>

	<body style="padding-right: 0px; padding-left: 0px;">
		<div id="main-container">
		
			<div class = "bggeneral">
				<?php echo $this->element('menu/top_menu'); ?>
				<div id="contenido" class="container">
					<div class = "colorcontainer">
						<div  class="container-fluid" style="padding: 10px;">	

						<?php echo $this->element('admin/admi'); ?>	
							
						<?php echo $this->Session->flash(); ?>

			            <?php  echo $this->fetch('content');  ?>

						</div>
		
					</div>
			
				</div>
				<div id="footer" style="height: 100px;">
					
					
					<?php echo $this->element('footer/footer1'); ?>
					<?php // echo $this->element('sql_dump'); ?>
				</div><!-- #footer .container -->
			
		</div><!-- #main-container -->
		</div><!-- #header .container -->
<?php echo $this->Js->writeBuffer(); // Write cached scripts ?>
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
