
<?php 

$Contador = "contador.txt";
$Numero = file_get_contents($Contador);
if(isset($_COOKIE['yaHasEstadoAqui'])){
echo ("<p style='color: white;'>Visitas:".$Numero."</p>");
}else{
	$Numero ++;
	file_put_contents($Contador, $Numero);
	//fclose ($Open);
 	setcookie("yaHasEstadoAqui",$Numero, time() + 3600);
 	echo ("<p style='color: white;'>Visitas:".$Numero."</p>");
}

?>
