<?php 	
echo $this->element('contenido/quotes1', array('items' => $this->Session->read('pp'),'supermarkets' => $Supermarket)); 
			
?>