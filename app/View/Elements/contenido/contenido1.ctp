
<div class="container">
    <div class="row">
		<div class="span7" style="">
			<div class="row" style="">
					<h4>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Beneficios para  salud</h4>
			</div>
			<?php foreach($benefits as $benefit): ?>

			<div class="row" style="border-bottom: 1px solid black;">				
						<div class="span2" style="">
							<a href=""><?php echo $this->Html->image("benefit/filename/".$benefit['Benefit']['filename']."")?></a>
							<br><br>
						</div>
						<div class="span5" style="">
							<div class="row" style="">
								<strong><? echo $benefit['Benefit']['title'] ?></strong>
							</div>
							<div class="row" style="">
								<p><font><font><? echo $benefit['Benefit']['description'] ?></font></font></p>
							</div>
							<div class="row" style="">
								<a href="" class="btn "> saber mas..</a>
							</div>
							<br>

						</div>
			</div>
			<?php endforeach; ?>
				<br>
			
				<div class="row" style="text-align: right;">
					<a href="">leer mas articulos</a>
				</div>
				<div class="row" style="">
					<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;encuentranos en..</p>
					
				</div>
				
					


<?php
$datos="";
foreach($supermarkets as $supermarket){
 $datos .= "/santarosa/img/supermarket/filename/".$supermarket['Supermarket']['filename'].'","'.$supermarket['Supermarket']['link']."";
}
echo $datos;
 $array = array($datos); 
$myData ="";
foreach($array as $indicador) 
                      {$myData .= '"'.$indicador.'"'.",";} 
                       $myData =  substr_replace($myData, "", -1); 
                     // echo $myData
					  
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

<a id="edit-link" href="/santarosa/supermarkets/add" ><button>Edit</button></a>
<a href="#myModal" role="button" class="btn" data-toggle="modal">Launch demo modal</a>
<script>
	$('#edit-link').click(function(){
$.ajax({
  type: "GET",
  url: $(this).attr('href')
}).done(function(html_form) {
  $('#myModal').html(html_form);
});
return false;
});
</script>

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


			
			</div>
			<div class="span5" style="text-align:center;">
				<div class="row" style="">
					<div class="span5">
						<h2>la receta del dia</h2>
					</div>
					
				</div>
				<div class="row" style="">
					<div class="span5">
						<?php 
						foreach ($recipes['ImagesRecipe'] as $ImagesRecipe) {
						echo $this->Html->image("images_recipe/filename/".$ImagesRecipe['filename']."");
						}
						?>
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



