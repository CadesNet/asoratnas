
			<div class="row-fluid">
						<div class="span12">
							<div class="row-fluid">
								<div class="span12">
									<h2 class = "producttitle">Contactos</h2>
								</div>
							</div>
							
							<div class="row-fluid" >
								<div class="span12 cuadrodireccion">
									<div class = "dirciudad">
								<?php echo $branch1['Branch']['name'] ?>
								</div>
								<br> 
								<?php echo $branch1['Branch']['type'] ?>
								
									<div class="row-fluid">
										<div class="span1">
											<div class = "tipodedireccion">Direccion: </div>
										</div>
										<div class="span11">
											<?php echo $branch1['Branch']['address'] ?>
										</div>
									</div>
								
									<div class="row-fluid">
										<div class="span1">
										<div class = "tipodedireccion">Telefono: </div> 
										</div>
										<div class="span11">
											<?php echo $branch1['Branch']['phone'] ?>
										</div>
									</div>

									<div class="row-fluid">
										<div class="span1">
										<div class = "tipodedireccion">Telf(fax):</div>
										</div>
										<div class="span11">

											<?php echo $branch1['Branch']['fax'] ?>
										</div> 
									</div>

									<div class="row-fluid">
										<div class="span1">
											<div class = "tipodedireccion">Telf Movil: </div>
										</div>
										<div class="span11">
									<?php echo $branch1['Branch']['movil'] ?>
										</div>
									</div>
						

									<div class="row-fluid">
										<div class="span1">
											<div class = "tipodedireccion">Contacto: </div>
										</div>
										<div class="span11">
											<?php echo $branch1['Branch']['contact'] ?>
										</div>
									</div>
							
								</div>
							</div>
							<div class="row-fluid">
								<ul class = "thumbnails2">
								<?php foreach ($branch as $branches) { ?>
								<li class="span4 cuadrodireccion">
										<div class = "dirciudad">	<?php echo $branches['Branch']['name'] ?> </div>
									
											<div><?php echo $branches['Branch']['type'] ?></div>
										
									<div class="row-fluid">
										<div class="span3">
											<div class = "tipodedireccion">Direccion: </div>
										</div>
										<div class="span9">
											<?php echo $branches['Branch']['address'] ?>
										</div>
									</div>
									<div class="row-fluid">
										<div class="span3">
										<div class = "tipodedireccion">Telefono: </div> 
										</div>
										<div class="span9">
											<?php echo $branches['Branch']['phone'] ?>
										</div>
									</div>

									<div class="row-fluid">
										<div class="span3">
										<div class = "tipodedireccion">Telf(fax):</div>
										</div>
										<div class="span9">

											<?php echo $branches['Branch']['fax'] ?>
										</div> 
									</div>

									<div class="row-fluid">
										<div class="span3">
											<div class = "tipodedireccion">Telf Movil: </div>
										</div>
										<div class="span9">
									<?php echo $branches['Branch']['movil'] ?>
										</div>
									</div>	

									<div class="row-fluid">
										<div class="span3">
											<div class = "tipodedireccion">Contacto: </div>
										</div>
										<div class="span9">
											<?php echo $branches['Branch']['contact'] ?>
										</div>
									</div>
								
							</li>
								<?php } ?>
							</ul>
							</div>

						</div>
					</div>
		

						<div class="row-fluid">
							<div class="span12">
								<div class="consultations form">
					<?php echo $this->Form->create('Consultation'); ?>
						<fieldset>
							<legend><?php echo __('Add Consultation'); ?></legend>
						<?php
							echo $this->Form->input('name');
							echo $this->Form->input('address');
							echo $this->Form->input('phone');
							echo $this->Form->input('email');
							echo $this->Form->input('message');
						?>
						</fieldset>
					<?php echo $this->Form->end(__('Submit')); ?>
					</div>
							</div>
						</div>
	<div class="row-fluid">
		<div class="span12">
		
<?php
$datos="";
foreach($supermarkets as $supermarket){
 $datos .= "/santarosa/img/supermarket/filename/".$supermarket['Supermarket']['filename'].'","'.$supermarket['Supermarket']['link'].'","';
}
 $array = array($datos); 
$myData ="";
foreach($array as $indicador) 
                      {$myData .= '"'.$indicador.'"'."";} 
                       $myData =  substr_replace($myData, "", -3); 
					  
?>
<script language="JavaScript">
// 7 variables to control behavior
var Car_Image_Width=38;
var Car_Image_Height=100;
var Car_Border=true;	 // true or false
var Car_Border_Color="white";
var Car_Speed=4; //velocidad
var Car_Direction=true;	 // true or false
var Car_NoOfSides=8;	 // must be 4, 6, 8 or 12

//minimo de las imagenes a cargar 4
Car_Image_Sources = new Array (<?=$myData; ?>);				  
/***************** DO NOT EDIT BELOW **********************************/
CW_I=new Array(Car_NoOfSides/2+1);C_ClcW=new Array(Car_NoOfSides/2);
C_Coef=new Array(
3*Math.PI/2,0,3*Math.PI/2,11*Math.PI/6,Math.PI/6,3*Math.PI/2,7*Math.PI/4,	0,
Math.PI/4,3*Math.PI/2,5*Math.PI/3,11*Math.PI/6,0,Math.PI/6,Math.PI/3);
var C_CoefOf=Car_NoOfSides==4?0:Car_NoOfSides==6?2:Car_NoOfSides==8?5:9;
C_Pre_Img=new Array(Car_Image_Sources.length);
var C_Angle=Car_Direction?Math.PI/(Car_NoOfSides/2):0,C_CrImg=Car_NoOfSides,C_MaxW,C_TotalW,
C_Stppd=false,i,C_LeftOffset,C_HalfNo=Car_NoOfSides/2;

function Carousel(){
if(document.getElementById){
for(i=0;i<Car_Image_Sources.length;i+=2){
C_Pre_Img[i]=new Image();C_Pre_Img[i].src=Car_Image_Sources[i]}
C_MaxW=Car_Image_Width/Math.sin(Math.PI/Car_NoOfSides)+C_HalfNo+1;
Car_Div=document.getElementById("Carousel");
for(i=0;i<C_HalfNo;i++){
CW_I[i]=document.createElement("img");Car_Div.appendChild(CW_I[i]); 
CW_I[i].style.position="absolute";
CW_I[i].style.top=0+"px";
CW_I[i].style.height=Car_Image_Height+"px";
if(Car_Border){
CW_I[i].style.borderStyle="solid";
CW_I[i].style.borderWidth=1+"px";
CW_I[i].style.borderColor=Car_Border_Color}
CW_I[i].src=Car_Image_Sources[2*i];
CW_I[i].lnk=Car_Image_Sources[2*i+1];
CW_I[i].onclick=C_LdLnk;
CW_I[i].onmouseover=C_Stp;
CW_I[i].onmouseout=C_Rstrt}
CarImages()}}

function CarImages(){
if(!C_Stppd){
C_TotalW=0;
for(i=0;i<C_HalfNo;i++){
C_ClcW[i]=Math.round(Math.cos(Math.abs(C_Coef[C_CoefOf+i]+C_Angle))*Car_Image_Width);
C_TotalW+=C_ClcW[i]}
C_LeftOffset=(C_MaxW-C_TotalW)/2;
for(i=0;i<C_HalfNo;i++){
CW_I[i].style.left=C_LeftOffset+"%";
CW_I[i].style.width=C_ClcW[i]+"%";
C_LeftOffset+=C_ClcW[i]}
C_Angle+=Car_Speed/720*Math.PI*(Car_Direction?-1:1);
if((Car_Direction&&C_Angle<=0)||(!Car_Direction&&C_Angle>=Math.PI/C_HalfNo)){
if(C_CrImg==Car_Image_Sources.length)C_CrImg=0;
if(Car_Direction){
CW_I[C_HalfNo]=CW_I[0];
for(i=0;i<C_HalfNo;i++)CW_I[i]=CW_I[i+1];
CW_I[C_HalfNo-1].src=Car_Image_Sources[C_CrImg];
CW_I[C_HalfNo-1].lnk=Car_Image_Sources[C_CrImg+1]}
else{	for(i=C_HalfNo;i>0;i--)CW_I[i]=CW_I[i-1];
CW_I[0]=CW_I[C_HalfNo];
CW_I[0].src=Car_Image_Sources[C_CrImg];
CW_I[0].lnk=Car_Image_Sources[C_CrImg+1]}
C_Angle=Car_Direction?Math.PI/C_HalfNo:0;C_CrImg+=2}}
setTimeout("CarImages()",50)}

function C_LdLnk(){if(this.lnk)window.location.href=this.lnk}
function C_Stp(){this.style.cursor=this.lnk?"pointer":"default";C_Stppd=true;}
function C_Rstrt(){C_Stppd=false}
</script>



<div  id="Carousel" class="row" style="position:relative ; ">
<!--<img src="" width="600" height="150"> --> <!-- esta es la foto de fondo-->

<!--photo4.jpg los  de las fotos en el js van seguidos de un link -->
</div>
	

	

</div>	
</div>
