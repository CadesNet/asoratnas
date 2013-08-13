<?php 		
 $i=1;
		foreach ($this->Session->read('item') as $val) {
			//echo  $i++;
			echo $val['id'].",,,,,,,,,,,,,,,"; 
			echo $val['img'].",,,,,,,,,,,,,,,"; 
			echo $val['cantidad'].",,,,,,,,,,,,,,,"; 

		
		}

			
		
?>