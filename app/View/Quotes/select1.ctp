<?php 	
echo $this->element('contenido/contenido8', array('items' => $this->Session->read('pp'))); 

		/*foreach ($this->Session->read('pp') as $val) {
			//echo  $i++;
			echo $val['id'].",,,,,,,,,,,,,,,"; 
			echo $val['img'].",,,,,,,,,,,,,,,"; 
			echo $val['cantidad'].",,,,,,,,,,,,,,,"; 

		
		}*/

			
		
?>