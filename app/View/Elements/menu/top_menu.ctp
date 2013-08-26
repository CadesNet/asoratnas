
  <header>
    <div class="topdesign" >
    <!--start: Container -->
    <div class="container" >
      <div class="row">
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
                <li class="visible-desktop" ></li>
                                         
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


                                          <li class="visible-desktop" ></li>
                              
                                          <li>
                                          <?php echo $this->Html->link(("Servicios"), array('controller' => 'Services', 'action' => 'select')); 
                                          ?>
                                         <!--  <a style="padding: 6px 12px;" href="#"><font><font style="color: #157858"><b>Servicios</b></font></font></a> -->

                                          </li>
                                          <li class="visible-desktop" ></li>
                                          <li>
                                          <?php echo $this->Html->link(("Contactos"), array('controller' => 'consultations', 'action' => 'select')); 
                                          ?>
                                          </li>
                                          <li class="visible-desktop" ></li>
                                          <li>
                                          	<?php $a = 'ppp'; echo $this->Html->link(("Cotizar: ".count($this->Session->read('pp'))." Items"), array('controller' => 'Quotes', 'action' => 'cotizar')); 
                                          ?>
                                          </li>
                                        </ul>
                </div>
                <br>
                <br>
                <br>
               
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
             <br>
             <br>
             <br>



          <div class="nav-collapse collapse" style="">
           <ul class="nav pull-right">
          <li class="dropdown">
         
				<?php 
				echo $this->Html->link(("&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Productos&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;"), array('controller' => 'Categories', 'action' => 'select'), array('escape' => false ,'class'=> 'dropdown-toggle btn  tracker','data-toggle' => 'dropdown')); 
				?>
              <ul class="dropdown-menu" >
                
                <li> <?php echo $this->Html->link(__("Pechua de Pavo"), array('controller' => 'Items', 'action' => 'select',1)); ?>
                </li>
<li> <?php echo $this->Html->link(__("Jamon de Pavo"), array('controller' => 'Items', 'action' => 'select',2)); ?>
                </li>                
<li> <?php echo $this->Html->link(__("Pete de Pavo"), array('controller' => 'Items', 'action' => 'select',3)); ?>
                </li>                
<li> <?php echo $this->Html->link(__("Pavo Santa Rosa"), array('controller' => 'Items', 'action' => 'select',4)); ?>
                </li>                

              </ul>
          </li>
          <li>

			
				<?php echo $this->Html->link(("&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Recetas&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;"), array('controller' => 'Recipes', 'action' => 'select'),array('escape' => false ,'class'=>'btn  tracker' ,'data-tracker-action'=>'Click')); 
				?>

          </li>
          <li> 
			<?php echo $this->Html->link(("&nbsp;&nbsp;&nbsp;Beneficios del pavo&nbsp;&nbsp;&nbsp;"), array('controller' => 'Benefits', 'action' => 'select1'),array('escape' => false ,'class'=>'btn  tracker' ,'data-tracker-action'=>'Click')); 
				?>
          </li>
          <li>
          <?php echo $this->Html->link(("&nbsp;&nbsp;&nbsp;&nbsp;Cuida tu Salud&nbsp;&nbsp;&nbsp;&nbsp;"), array('controller' => 'Tips', 'action' => 'select1'),array('escape' => false ,'class'=>'btn  tracker' ,'data-tracker-action'=>'Click')); 
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
  </header>