
  <header>
    <div class="topdesign" >

     		<div class="container">
    		  <div class="row-fluid">
    			  <!--start: Navbar -->
     			<div class="navbar">
         
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
				            	<?php echo $this->Html->link("<i class='icon-home '></i>",
							    array('controller' => 'benefits', 'action' => 'select'),
							    array('id'=>'menu1','escape' => false,'style'=>'margin: 0 20px 0 20px;'));
				            
							     ?>
							 </li>
			               	 <li class="visible-desktop margen"></li>
			                                         
			                 <li class="dropdown">
	                               <?php echo $this->Html->link(("Empresa"), array('controller'=>'Companies','action'=>'select'),array('id'=>'menu2','class'=>'dropdown-toggle', 'style'=>'margin: 0 20px 0 20px;')); ?>
	                              	
	                                <ul class="dropdown-menu" style="left:inherit; padding:0;margin-left: 20px;right: inherit;">
	                                  <li>

										<?php echo $this->Html->link(("Historia"), array('controller' => 'Companies', 'action' => 'select'),array('class'=>'sub_menu_empresa')); ?>
	                                  </li>
	                                  <li>
										<?php echo $this->Html->link(("Requerimientos de personal"), array('controller' => 'Branches', 'action' => 'select'),array('class'=>'sub_menu_empresa')); ?>
	                                 </li>
	                                </ul>
		                      </li>


		                      <li class="visible-desktop margen" ></li>
		          
		                      <li>
		                      <?php echo $this->Html->link(("Servicios"), array('controller' => 'Services', 'action' => 'select'),array('id'=>'menu3','style'=>'margin: 0 20px 0 20px;')); 
		                      ?>
		                     <!--  <a style="padding: 6px 12px;" href="#"><font><font style="color: #157858"><b>Servicios</b></font></font></a> -->

		                      </li>
		                      <li class="visible-desktop margen" ></li>
		                      <li>
		                      <?php echo $this->Html->link(("Contactos"), array('controller' => 'consultations', 'action' => 'select'),array('id'=>'menu4','style'=>'margin: 0 20px 0 20px;')); 
		                      ?>
		                      </li>
		                      <li class="visible-desktop margen" ></li>
		                      <li>
		                      	<?php $a = 'ppp'; echo $this->Html->link(("Cotizar: ".count($this->Session->read('pp'))." Items"), array('controller' => 'Quotes', 'action' => 'cotizar'),array('id'=>'menu5','style'=>'margin-left: 20px;')); 
		                      ?>
		                      </li>
	               	    </ul>
	                </div>
	               	<p class="visible-desktop ">&nbsp;</p>
	                <p class="visible-desktop "> &nbsp;</p>
	           
	               
					<div id="fb-root"></div>
					<script>(function(d, s, id) {
					  var js, fjs = d.getElementsByTagName(s)[0];
					  if (d.getElementById(id)) return;
					  js = d.createElement(s); js.id = id;
					  js.src = "//connect.facebook.net/es_LA/all.js#xfbml=1";
					  fjs.parentNode.insertBefore(js, fjs);
					}(document, 'script', 'facebook-jssdk'));</script>
					<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+'://platform.twitter.com/widgets.js';fjs.parentNode.insertBefore(js,fjs);}}(document, 'script', 'twitter-wjs');</script>
	                <div class="nav-collapse collapse nav pull-right" >
	                  		<div class="row-fluid">
	                  			
	                  				
	                  					<div class="span6"> <div class="fb-like" data-href="https://www.facebook.com/pages/Pavos-Santa-Rosa/294146160603097" data-width="550" data-layout="button_count" data-show-faces="true" data-send="false"></div></div>
	                  					<div class="span6"> <?php echo $this->Html->link(("Twittear"), 'href="https://twitter.com/share',array('class'=>'twitter-share-button','data-via' => 'racso_XD' , 'data-lang' => 'es' , 'data-dnt'=> 'true' )); 
	                                      ?></div>
	                  			</div>
	                </div>  
	        	    <p class="visible-desktop ">&nbsp; </p>
	                <p class="visible-desktop ">&nbsp; </p>
			        <div class="nav-collapse collapse" style="">
			           <ul class="nav pull-right ">
			         	 <li class="dropdown">
			         
							<?php 
							echo $this->Html->link(("&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Productos&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;"), array('controller' => 'Categories', 'action' => 'select'), array('id'=> 'productos','escape' => false ,'class'=> 'dropdown-toggle btn menu_  tracker')); 
							?>
			              <ul class="dropdown-menu" style="padding:0;margin: 0;left: 0;" >
			                
			                <li> <?php echo $this->Html->link(__("Pechuga de Pavo"), array('controller' => 'Categories', 'action' => 'select1',6),array('id'=>'productos1','class' => 'sub_menu_productos1')); ?>
			                </li>
							<li> <?php echo $this->Html->link(__("Jamón de Pavo"), array('controller' => 'Categories', 'action' => 'select1',7),array('id'=>'productos2','class'=>'sub_menu_productos2')); ?>
			                </li>                
							<li> <?php echo $this->Html->link(__("Paté de Pavo"), array('controller' => 'Categories', 'action' => 'select1',8),array('id'=>'productos3','class'=>'sub_menu_productos3')); ?>
			                </li>                
							<li> <?php echo $this->Html->link(__("Pavo Santa Rosa"), array('controller' => 'Categories', 'action' => 'select1',9),array('id'=>'productos4', 'class'=>'sub_menu_productos4')); ?>
			                </li>                

			              </ul>
			         	 </li>
			         	 <li>

						
							<?php echo $this->Html->link(("&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Recetas&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;"), array('controller' => 'Recipes', 'action' => 'select'),array('id'=> 'recetas','escape' => false ,'class'=>'btn  tracker' )); 
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
</div>	
<div class="pie_menu">
	
</div>
  </header>
 <script type="text/javascript">

 $(function(){
 
	$('ul a').hover(

		function() {

		var ID = $(this).attr("id");
		if(ID == 'productos' || ID == 'productos1'  || ID == 'productos2'  || ID == 'productos3'  || ID == 'productos4'){
			 $('#productos').removeClass('btn');

		    $('#productos').addClass('productosSuperior');
		}
		if(ID == 'recetas'){
			 $(this).removeClass('btn');
		    $(this).addClass('recetasSuperior');
		}
		if(ID == 'beneficios'){
			 $(this).removeClass('btn');
		    $(this).addClass('beneficiosSuperior');
		}
		if(ID == 'tips'){
			 $(this).removeClass('btn');
		    $(this).addClass('tipsSuperior');
		}
		if(ID == 'menu1' || ID == 'menu2' || ID == 'menu3' || ID == 'menu4' || ID == 'menu5'){
			  $(this).addClass('menusub1');
			  if(ID == 'menu1'){
			  $('i').addClass('icon-white');
			}
		}

	},
			function() {
				var ID = $(this).attr("id");

		if(ID == 'menu1' || ID == 'menu2' || ID == 'menu3' || ID == 'menu4' || ID == 'menu5'){
			  $(this).removeClass('menusub1');
			  if(ID == 'menu1'){
			  	  $('i').removeClass('icon-white');
			  }
			 
		}
		if(ID == 'productos' || ID == 'productos1'  || ID == 'productos2'  || ID == 'productos3'  || ID == 'productos4'){
			 $('#productos').addClass('btn');
		    $('#productos').removeClass('productosSuperior');
		}
		if(ID == 'recetas'){
			 $(this).addClass('btn');
		    $(this).removeClass('recetasSuperior');
		}
		if(ID == 'beneficios'){
			 $(this).addClass('btn');
		    $(this).removeClass('beneficiosSuperior');
		}
		if(ID == 'tips'){
			 $(this).addClass('btn');
		    $(this).removeClass('tipsSuperior');
		}
	}







		/* var ID = $(this).attr("id");

		if(ID == 'productos'){
			//alert(ID);
			
		 $("a#productos").css({"color": "#FFF","text-shadow": "0 -1px 0 rgba(0, 0, 0, 0.25)","background":"#096357","background-color": "#096357","*background-color": "#096357","background-image": "-moz-linear-gradient(top, #22A18C, #096357)","background-image": "-webkit-gradient(linear, 0 0, 0 100%, from(#22A18C), to(#096357))","background-image": "-webkit-linear-gradient(top, #22A18C, #096357)","background-image": "-o-linear-gradient(top,#22A18C, #096357)","background-image": "linear-gradient(to bottom,#22A18C, #096357)","background-repeat": "repeat-x","border-color": "#096357 #096357 #1f6377","border-color": "rgba(0, 0, 0, 0.1) rgba(0, 0, 0, 0.1) rgba(0, 0, 0, 0.25)","filter": "progid:DXImageTransform.Microsoft.gradient(startColorstr='#096357', endColorstr='#096357', GradientType=0)","filter": "progid:DXImageTransform.Microsoft.gradient(enabled=false)"});
		}*/

  )});
     
 </script> 


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