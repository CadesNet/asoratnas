<div class="container">
	<div class="row">
		<div class="span8">
			<div class="row">
				<?php  foreach ($categories as $category) { ?>
				<div class="span8">
					<div class="row">
						<div class="span1">
							<?php echo $this->Html->image("category/filename/".$category['Category']['filename']."")?>
						</div>
						<div class="span3">
							<div class="row">
								<div class="span3">
									<h3 style="line-height: 20px;"><?php echo $category['Category']['name'] ?></h3>
								</div>
							</div>
							<div class="row" >
								<div class="span2" style="height: 6px;
background-color: black;">
								</div>
							</div>
							<br>
						</div>
					</div>
				</div>
				<?php } ?>

				<?php foreach ($items as $item) { ?>
				<div class="span7 offset1" style="text-align: center;">
					<div class="row">
						<div class="span4">
							<?php foreach ($item['ImagesItem'] as $image): ?>
							<?php echo $this->Html->image("images_item/filename/".$image['filename']."") ?>
							<?php 
								break;
							endforeach ?>
						</div>
						<div class="span3" style="text-align: left;">
							<div class="row">
								<div class="span3">
									<form class="form-horizontal">
										<h3><?php echo $item['Item']['name'] ?></h3>
										<p>presentacion  sdfsd sdf sdf</p>
							
  									<div class="control-group">
    									<label class="control-label" for="inputCantidad" style="width: 55px;margin-right: 5px;">Cantidad</label>
    									
      										<input type="text" id="inputCantidad" placeholder="Camtidad" style="width: 70px">
  									</div>
  									<div class="control-group">
      										<button type="submit" class="btn" style="width: 144px">Cotizar</button>
  									</div>
									</form>
								</div>
							</div>
								
						</div>
				</div>
				<br>
				<br>
				<div class="row">
					<div class="span7" style="background-color: aqua; text-align:right">
						<p>Facebook</p>
					</div>
				</div>
				<br>
				<br>
				<div class="row">
					<div class="span7">
					  <?php echo $item['Item']['description']; ?>
					</div>
				</div>
			</div>
			<?php 
		}
	?>
			</div>
			<br>
			<br>
				<div class="row">
					<div class="span1 offset1" style="background-color: aqua; text-align:left">
						<a href="">Volver</a>
					</div>
				</div>			
		</div>
		<div class="span4">
		<div class="row">
			<div class="span3 offset1" style="text-align:center;">
				<?php echo $this->Html->image("noticias/1.png")?>
				<br>
				<br>
				<br>
			</div>
			<div class="span3 offset1" style="text-align:center;">
				<div class="row" style="">
					<div class="span3">
						<h2>la receta del dia</h2>
					</div>
					
				</div>
				<div class="row" style="">
					<div class="span3">
						<?php 
						foreach ($recipes['ImagesRecipe'] as $ImagesRecipe) {
						echo $this->Html->image("images_recipe/filename/".$ImagesRecipe['filename']."");
						break;
						} ?>
					</div>
					
				</div>
				<div class="row" style="">
					<div class="span5">
						<h5><?=$recipes['Recipe']['title'] ?></h5>
					</div>
				</div>
				<div class="row" style="">
					<div class="span5">
						<h5><?=$recipes['Recipe']['information'] ?></h5>
					</div>
				</div>				
				<div class="row" style="">
					<div class="span5">
						<a class="btn" href="#">Ver receta</a>
					</div>
					
				</div>
			</div>
		</div>
		</div>
	</div>
	<div class="row">
						<div class="span1">
							<?php echo $this->Html->image("sugerencia.png")?>
						</div>
						<div class="span11">
							<div class="row">
								<div class="span11">
									<h3 style="line-height: 20px;"><a href="">Algunas sugerencias para degustar en familia</a></h3>
								</div>
							</div>
							<div class="row" >
								<div class="span6" style="height: 6px;
background-color: black;">
								</div>
							</div>
							<br>
						</div>
	</div>
	<div class="row">
		<div class="span12">
<?php

$datos="";
foreach($recipes1 as $recipe1){
	foreach ($recipe1['ImagesRecipe'] as $recip) {

 $datos .= "/santarosa/img/images_recipe/filename/".$recip['filename'].'","'.$recipe1['Recipe']['id'].'","';
 break;

 }

}
echo $datos;
echo ",,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,";
 $array = array($datos); 
$myData ="";
foreach($array as $indicador) 
                      {$myData .= '"'.$indicador.'"'."";} 
                       $myData =  substr_replace($myData, "", -3); 
                       echo $myData;
                     // echo $myData
					  
?>
<script language="JavaScript">
// 7 variables to control behavior
var Car_Image_Width=37;
var Car_Image_Height=200;
var Car_Border=true;	 // true or false
var Car_Border_Color="white";
var Car_Speed=6; //velocidad
var Car_Direction=false;	 // true or false
var Car_NoOfSides=8;	 // must be 4, 6, 8 or 12


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
<br>	
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
		</div>
	</div>


</div>