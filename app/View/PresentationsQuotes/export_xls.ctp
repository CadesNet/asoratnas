<!--<table border=1> 
    <tr> 
    <th>Nombre</th> 
    <th>Email</th> 
    </tr> 
    <tr> 
    <td><font color=green>Manuel Gomez</font></td>
    <td>manuel@gomez.com</td> 
    </tr> 
    <tr> 
    <td><font color=blue>Pago gomez</font></td> 
    <td>paco@gomez.com</td> 
    </tr> 
    </table>-->
<?php 
//View: 
$this->PhpExcel->createWorksheet(); 
$this->PhpExcel->setDefaultFont('Calibri', 12); 

// define table cells 
$table = array( 
    array('label' => __('User'), 'width' => 'auto', 'filter' => true), 
    array('label' => __('Type'), 'width' => 'auto', 'filter' => true), 
    array('label' => __('Date'), 'width' => 'auto'), 
    array('label' => __('Description'), 'width' => 50, 'wrap' => true), 
    array('label' => __('Modified'), 'width' => 'auto') 
); 

// heading 
$this->PhpExcel->addTableHeader($table, array('name' => 'Cambria', 'bold' => true)); 
$this->PhpExcel->addTableRow(array('nombre','nombre','nombre','nombre','nombre'));
// data 
/*foreach ($data as $d) { 
    $this->PhpExcel->addTableRow(array( 
        $d['User']['name'], 
        $d['Type']['name'], 
        $d['User']['date'], 
        $d['User']['description'], 
        $d['User']['modified'] 
    )); 
} 

$this->PhpExcel->addTableFooter(); 
$this->PhpExcel->output(); 
?>*/


?>
