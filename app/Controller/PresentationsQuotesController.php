<?php
App::uses('AppController', 'Controller');
App::uses('CakeEmail', 'Network/Email');
App::import('Vendor', 'ClassesEx/PHPExcel/IOFactory');
App::import('Vendor', 'ClassesEx/PHPExcel');

/**
 * PresentationsQuotes Controller
 *
 * @property PresentationsQuote $PresentationsQuote
 */
class PresentationsQuotesController extends AppController {
var $components = array ('Email');
public $helpers = array('PhpExcel'); 
/**
 * index method
 *
 * @return void
 */
	public function index($idquote=null) {
		$this->loadModel('Item');
		$this->loadModel('Category');
		$this->loadModel('Presentation');
		$this->loadModel('ImagesPresentation');
		$this->Category->recursive = 2;
		//$presentationsQuotes = $this->Category->Item->Presentation->find('all', array('conditions' => array('Category.' . 'id' => 'Item .' . 'category_id','Item.' . 'id' => 'Presentation.' . 'item_id','Presentation.' . 'id' => 'PresentationsQuote.' . 'presentation_id','PresentationsQuote.' . 'quote_id' => $idquote)));
		
		$presentacionquote = $this->PresentationsQuote->find('all', array('conditions' => array('PresentationsQuote.' . 'quote_id' => $idquote)));
		if(count($presentacionquote) <= 0){
			$this->redirect(array('controller' => 'Quotes','action' => 'index'));
		}else{

			//consulta all ppara mostra todas las prsentaciones 
			//de la cotizacion
			//sacar el ultimo registro de cotizacion y hacer una resporte con un aarray mandodolo aki 
			//tendra el mismo formato 
			$val= array();
			$i=0;
			foreach ($presentacionquote as $prese) {

			$presentacion = $this->Presentation->find('first', array('conditions' => array('Presentation.' . $this->Presentation->primaryKey => $prese['PresentationsQuote']['presentation_id'])));
			$imagesPresentation = $this->ImagesPresentation->find('first', array('conditions' => array('ImagesPresentation.' . 'presentation_id' => $prese['PresentationsQuote']['presentation_id'])));
		
			$item = $this->Item->find('first', array('conditions' => array('Item.' . $this->Item->primaryKey => $presentacion['Presentation']['item_id'])));

			$cateory = $this->Category->find('first', array('conditions' => array('Category.' . $this->Category->primaryKey => $item['Item']['category_id'])));

			$val = array_merge(array($i=>array('id' => $prese['PresentationsQuote']['id'],
						'name' => $cateory['Category']['name']." ".$item['Item']['name']." ".$presentacion['Presentation']['name'],
						'img' => $imagesPresentation['ImagesPresentation']['filename'],
						'cantidad' => $prese['PresentationsQuote']['amount'],
						'detalle' => $prese['PresentationsQuote']['detail'])),$val);
			
			$i++;
			}
		
			
		$this->set(compact('val'));
		}
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->PresentationsQuote->exists($id)) {
			throw new NotFoundException(__('Invalid presentations quote'));
		}
		$options = array('conditions' => array('PresentationsQuote.' . $this->PresentationsQuote->primaryKey => $id));
		$this->set('presentationsQuote', $this->PresentationsQuote->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->PresentationsQuote->create();
			if ($this->PresentationsQuote->save($this->request->data)) {
				//$this->Session->setFlash(__('The presentations quote has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('La cotizacion de la presentacion no se pudo guardar'));
			}
		}
		$presentations = $this->PresentationsQuote->Presentation->find('list');
		$quotes = $this->PresentationsQuote->Quote->find('list');
		$this->set(compact('presentations', 'quotes'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->PresentationsQuote->exists($id)) {
			throw new NotFoundException(__('Invalid presentations quote'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->PresentationsQuote->save($this->request->data)) {
				//$this->Session->setFlash(__('The presentations quote has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('La cotizacion de la presentacion no se pudo editar'));
			}
		} else {
			$options = array('conditions' => array('PresentationsQuote.' . $this->PresentationsQuote->primaryKey => $id));
			$this->request->data = $this->PresentationsQuote->find('first', $options);
		}
		$presentations = $this->PresentationsQuote->Presentation->find('list');
		$quotes = $this->PresentationsQuote->Quote->find('list');
		$this->set(compact('presentations', 'quotes'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->PresentationsQuote->id = $id;
		if (!$this->PresentationsQuote->exists()) {
			throw new NotFoundException(__('Invalid presentations quote'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->PresentationsQuote->delete()) {
			$this->Session->setFlash(__('Presentations quote deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('La cotizacion de la presentacion no se pudo eliminar'));
		$this->redirect(array('action' => 'index'));
	}
	public function export_xls(){

		$cotizacion =array();
	  	$this->loadModel('Quote');
		$quote = $this->Quote->find('first',array('order' => 'Quote.created DESC'));
		$datosPersonales= array(
		'nombre' => $quote['Quote']['name'],
		'direccion' => $quote['Quote']['address'],
		'telefono' => $quote['Quote']['phone'],
		'email' => $quote['Quote']['email'],
		'mensaje' => $quote['Quote']['message'],
		'fecha' => $quote['Quote']['created']);
	
		

		$this->loadModel('Item');
		$this->loadModel('Category');
		$this->loadModel('Presentation');
		$this->loadModel('ImagesPresentation');
		$this->Category->recursive = 2;
		//$presentationsQuotes = $this->Category->Item->Presentation->find('all', array('conditions' => array('Category.' . 'id' => 'Item .' . 'category_id','Item.' . 'id' => 'Presentation.' . 'item_id','Presentation.' . 'id' => 'PresentationsQuote.' . 'presentation_id','PresentationsQuote.' . 'quote_id' => $idquote)));
		
		$presentacionquote = $this->PresentationsQuote->find('all', array('conditions' => array('PresentationsQuote.' . 'quote_id' => $quote['Quote']['id'])));
		
		if(count($presentacionquote) <= 0){
			$this->redirect(array('controller' => 'Quotes','action' => 'index'));
		}else{

			
			
			
			foreach ($presentacionquote as $prese) {

			$presentacion = $this->Presentation->find('first', array('conditions' => array('Presentation.' . $this->Presentation->primaryKey => $prese['PresentationsQuote']['presentation_id'])));
			$imagesPresentation = $this->ImagesPresentation->find('first', array('conditions' => array('ImagesPresentation.' . 'presentation_id' => $prese['PresentationsQuote']['presentation_id'])));
		
			$item = $this->Item->find('first', array('conditions' => array('Item.' . $this->Item->primaryKey => $presentacion['Presentation']['item_id'])));

			$cateory = $this->Category->find('first', array('conditions' => array('Category.' . $this->Category->primaryKey => $item['Item']['category_id'])));

			$cotizacion = array_merge($cotizacion,array(array('id'=> $prese['PresentationsQuote']['id'],
						'nombre'=> $cateory['Category']['name']." ".$item['Item']['name']." ".$presentacion['Presentation']['name'],
						'img'=>$imagesPresentation['ImagesPresentation']['filename'],
						'cantidad'=>$prese['PresentationsQuote']['amount'],
						'detalle'=>$prese['PresentationsQuote']['detail'])));
			
			
			}
		}


		


		//echo date('H:i:s') , " Load from Excel5 template" , EOL;
		$objReader = PHPExcel_IOFactory::createReader('Excel2007');
		$objPHPExcel = $objReader->load(WWW_ROOT."img/archivo.xlsx");
		$baseRow = 15;

		foreach($cotizacion as $r => $dataRow) {
			
		$row = $baseRow + $r;
		$objPHPExcel->getActiveSheet()->insertNewRowBefore($row,1);

		$objPHPExcel->getActiveSheet()->setCellValue('C'.$row, $dataRow['nombre'])
		                              ->setCellValue('E'.$row, $dataRow['cantidad'])
		                              ->setCellValue('F'.$row, $dataRow['detalle']);
		$objDrawing = new PHPExcel_Worksheet_Drawing();

		$objDrawing->setName('Logo');
		$objDrawing->setDescription('Logo');
		$objDrawing->setPath(WWW_ROOT.'img/images_presentation/filename/'.$dataRow['img']);
		$objDrawing->setHeight(100);
		$objDrawing->setCoordinates('D'.$row);
		$objDrawing->setOffsetX(40);
		$objDrawing->setRotation(25);
		$objDrawing->getShadow()->setVisible(true);
		$objDrawing->getShadow()->setDirection(45);

		//Para agregar el dibujo de arriba a la hoja de cálculo , utilice el siguiente fragmento de código. PHPExcel crea el vínculo entre el dibujo y la hoja de trabajo :

		$objDrawing->setWorksheet($objPHPExcel->getActiveSheet());
			                           

		}
		//datos
		$y=5;
		foreach ($datosPersonales as $key => $value) {
			$objPHPExcel->getActiveSheet()->setCellValue('B'.$y,$value);
		$y+=1;
		}

		$objPHPExcel->getActiveSheet()->removeRow($baseRow-1,1);


		//echo date('H:i:s') , " Write to Excel5 format" , EOL;
		$objWriter = PHPExcel_IOFactory::createWriter($objPHPExcel, 'Excel2007');

		//$objWriter->save(WWW_ROOT."img/30template.xls");
		$file= WWW_ROOT."img/".$quote['Quote']['id'].".xlsx";
		$va ='';
		$objWriter->save(str_replace('.php', '.xlsx', $file));

		
		$this->redirect(array('action'=>'email'));
		
	}
	public function email(){

		$this->loadModel('Quote');
		$quote = $this->Quote->find('first',array('order' => 'Quote.created DESC'));

		$datos = array('quotes' => array('datos' => $quote));

		//menu
		$this->Session->write($datos);//,$quote['Quote']['id']

		
		$this->Email = new CakeEmail();
		$this->Email->from(array('oscar_7938074@hotmail.com' => 'My Site'));
        $this->Email->to('oscar_7938074@hotmail.com');
        $this->Email->subject('COTIZACIONES');
        $this->Email->attachments(array(WWW_ROOT."img/".$quote['Quote']['id'].".xlsx"));
        $this->Email->template('quotes');
        $this->Email->emailFormat('html');
        $val=null;
        if($this->Email->send()){
			unlink(WWW_ROOT."img/".$quote['Quote']['id'].".xlsx");
			$this->redirect(array('controller'=>'Benefits','action'=>'select'));
		}else{
		  $val="Mensaje no enviado";
		 

		}
		 $this->set(compact('val'));
		}

}
