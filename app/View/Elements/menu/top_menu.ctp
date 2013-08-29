
  <header>
    <div class="topdesign" >
    <!--start: Container -->
    <div class="container" >
      <div class="row-fluid">
      <!--start: Navbar -->
      <div class="navbar ">
          <div class="" >
                <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
                  <span class="icon-bar"></span>
                  <span class="icon-bar"></span>
                  <span class="icon-bar"></span>
                </a>
                <div>                 
                 <?php
	                echo $this->Html->link(
				    $this->Html->image("logosantarosa.png", array("alt" => "Home")),
				    array('controller' => 'Benefits', 'action' => 'select'),
				    array('escape' => false , 'class' => 'brand', 'style' => 'padding: 0px 20px 10px;'));
                ?>
              	</div>
              	<div class="nav-collapse collapse">
               	<ul class="nav pull-right">
                <li>
	            	<?php echo $this->Html->link("<i class='icon-home'></i>",
				    array('controller' => 'benefits', 'action' => 'select'),
				    array('escape' => false));
	            
				     ?>
                <li class="visible-desktop margen"></li>
                                         
                                           <li class="dropdown">
                                           <?php echo $this->Html->link(("Empresa"), array('controller' => '', 'action' => ''),array('class'=>'dropdown-toggle', 'data-toggle'=>'dropdown')); ?>
                                            <ul class="dropdown-menu" style="left:inherit; padding:0;">
                                              <li>

										<?php echo $this->Html->link(("Historia"), array('controller' => 'Companies', 'action' => 'select')); ?>
                                              </li>
                                              <li>
												<?php echo $this->Html->link(("Requerimientos de personal"), array('controller' => 'Branches', 'action' => 'select')); ?>
                                             </li>
                                            </ul>
                                          </li>


                                          <li class="visible-desktop margen" ></li>
                              
                                          <li>
                                          <?php echo $this->Html->link(("Servicios"), array('controller' => 'Services', 'action' => 'select')); 
                                          ?>
                                         <!--  <a style="padding: 6px 12px;" href="#"><font><font style="color: #157858"><b>Servicios</b></font></font></a> -->

                                          </li>
                                          <li class="visible-desktop margen" ></li>
                                          <li>
                                          <?php echo $this->Html->link(("Contactos"), array('controller' => 'consultations', 'action' => 'select')); 
                                          ?>
                                          </li>
                                          <li class="visible-desktop margen" ></li>
                                          <li>
                                          	<?php $a = 'ppp'; echo $this->Html->link(("Cotizar: ".count($this->Session->read('pp'))." Items"), array('controller' => 'Quotes', 'action' => 'cotizar')); 
                                          ?>
                                          </li>
                </ul>
                </div>
               <p class="visible-desktop ">&nbsp;</p>
                <p class="visible-desktop "> &nbsp;</p>
           
               
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/es_LA/all.js#xfbml=1";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>
<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+'://platform.twitter.com/widgets.js';fjs.parentNode.insertBefore(js,fjs);}}(document, 'script', 'twitter-wjs');</script>
                      <div class="nav-collapse collapse" style="float: right;">
                          <div class="fb-like" data-href="http://developers.facebook.com/docs/reference/plugins/like" data-send="false" data-layout="button_count" data-width="500" data-show-faces="true"></div>

                          <?php echo $this->Html->link(("Twittear"), 'href="https://twitter.com/share',array('class'=>'twitter-share-button','data-via' => 'racso_XD' , 'data-lang' => 'es' , 'data-dnt'=> 'true' )); 
                                          ?>
                          
                    </div>
        	    <p class="visible-desktop ">&nbsp; </p>
                <p class="visible-desktop ">&nbsp; </p>
              



          <div class="nav-collapse collapse" style="">
           <ul class="nav pull-right">
          <li class="dropdown">
         
				<?php 
				echo $this->Html->link(("&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Productos&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;"), array('controller' => 'Categories', 'action' => 'select'), array('id'=> 'productos','escape' => false ,'class'=> 'dropdown-toggle btn  tracker')); 
				?>
              <ul class="dropdown-menu" style="padding:0;margin: 0;left: 0;" >
                
                <li> <?php echo $this->Html->link(__("Pechua de Pavo"), array('controller' => 'Items', 'action' => 'select',1),array('style' => 'color:#FFF;background-image: -webkit-gradient(linear, 0 0, 0 100%, from(#1AABC4), to(#197E91));padding: 10px 30px 15px;border-radius: 3px')); ?>
                </li>
<li> <?php echo $this->Html->link(__("Jamon de Pavo"), array('controller' => 'Items', 'action' => 'select',2),array('style' => 'color:#FFF;background-image: -webkit-gradient(linear, 0 0, 0 100%, from(#2BB589), to(#0D6E5E));padding: 10px 30px 15px;border-radius: 3px;')); ?>
                </li>                
<li> <?php echo $this->Html->link(__("Pete de Pavo"), array('controller' => 'Items', 'action' => 'select',3),array('style' => 'color:#FFF;background-image: -webkit-gradient(linear, 0 0, 0 100%, from(#C64EA7), to(#72245E));padding: 10px 30px 15px;border-radius: 3px;')); ?>
                </li>                
<li> <?php echo $this->Html->link(__("Pavo Santa Rosa"), array('controller' => 'Items', 'action' => 'select',4),array('style' => 'color:#FFF;background-image: -webkit-gradient(linear, 0 0, 0 100%, from(#B20E15), to(#6F0A0F));padding: 10px 30px 15px;border-radius: 3px;')); ?>
                </li>                

              </ul>
          </li>
          <li>

			
				<?php echo $this->Html->link(("&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Recetas&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;"), array('controller' => 'Recipes', 'action' => 'select'),array('id'=> 'recetas','escape' => false ,'class'=>'btn  tracker' )); 
				?>

          </li>
          <li> 
			<?php echo $this->Html->link(("&nbsp;&nbsp;&nbsp;Beneficios del pavo&nbsp;&nbsp;&nbsp;"), array('controller' => 'Benefits', 'action' => 'select1'),array('id'=> 'beneficios','escape' => false ,'class'=>'btn  tracker')); 
				?>
          </li>
          <li>
          <?php echo $this->Html->link(("&nbsp;&nbsp;&nbsp;&nbsp;Cuida tu Salud&nbsp;&nbsp;&nbsp;&nbsp;"), array('controller' => 'Tips', 'action' => 'select1'),array('id'=> 'tips','escape' => false ,'class'=>'btn  tracker')); 
				?>
          </li>
        </ul>
                  </div>




            </div>
          </div>
      <!--end: Navbar -->
      
    </div>
    <!--end: Container-->     
  </div>
</div>
<div class="pie_menu">
	
</div>
  </header>

  <script type="text/javascript">
/*$(function(){
    $('.navbar .nav > li > a').hover(function(){
        $(this).css({'background-position': '0'});
    });

});*/

$(function(){
	$('ul.nav li.dropdown').hover(function() {
    $(this).find('.dropdown-menu').stop(true, true).show();
    $(this).addClass('open');
}, 	function() {
  	$(this).find('.dropdown-menu').stop(true, true).hide();
    $(this).removeClass('open');
	});
});



</script>