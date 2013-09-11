<?php 	
echo $this->element('contenido/itemsquotes', array('items' => $this->Session->read('pp'),'supermarkets' => $Supermarket)); 
			
?>