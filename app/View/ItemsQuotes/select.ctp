<?php 		
 $i=1;
		foreach ($this->Session->read('item') as $val) {
			//echo  $i++;
			echo $val['id'];
		 foreach ($val as $valu) {

		 	echo $valu['cantidad'];
				# code...
			};
		}

			
		
?>