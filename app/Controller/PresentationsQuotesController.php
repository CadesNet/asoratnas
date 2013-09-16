<?php
App::uses('AppController', 'Controller');
App::uses('CakeEmail', 'Network/Email');

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
		
		$presentacionquote = $this->PresentationsQuote->find('first', array('conditions' => array('PresentationsQuote.' . 'quote_id' => $idquote)));
		if($presentacionquote['PresentationsQuote']['id'] == ''){
			$this->redirect(array('controller' => 'Quotes','action' => 'index'));
		}else{
		$presentacion = $this->Presentation->find('first', array('conditions' => array('Presentation.' . $this->Presentation->primaryKey => $presentacionquote['PresentationsQuote']['presentation_id'])));
		$imagesPresentation = $this->ImagesPresentation->find('first', array('conditions' => array('ImagesPresentation.' . 'presentation_id' => $presentacionquote['PresentationsQuote']['presentation_id'])));
		
		$item = $this->Item->find('first', array('conditions' => array('Item.' . $this->Item->primaryKey => $presentacion['Presentation']['item_id'])));

		$cateory = $this->Category->find('first', array('conditions' => array('Category.' . $this->Category->primaryKey => $item['Item']['category_id'])));

			$val = array('id' => $presentacionquote['PresentationsQuote']['id'],
						'name' => $cateory['Category']['name']." ".$item['Item']['name']." ".$presentacion['Presentation']['name'],
						'img' => $imagesPresentation['ImagesPresentation']['filename'],
						'cantidad' => $presentacionquote['PresentationsQuote']['amount'],
						'detalle' => $presentacionquote['PresentationsQuote']['detail']);
			
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
				$this->Session->setFlash(__('The presentations quote has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The presentations quote could not be saved. Please, try again.'));
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
				$this->Session->setFlash(__('The presentations quote has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The presentations quote could not be saved. Please, try again.'));
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
		$this->Session->setFlash(__('Presentations quote was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
	public function export_xls(){
		//$excel = $this->render('export_xls','export_xls');

/*

		$this->Email = new CakeEmail();
		$this->Email->from(array('oscar_7938074@hotmail.com' => 'My Site'));
        $this->Email->to('oscar_7938074@hotmail.com');
        $this->Email->subject('About');
        $this->Email->attachments($excel);
        $this->Email->template('');
        $this->Email->emailFormat('html');
        $this->Email->send();

		//$this->redirect(array('action'=>'email'));
		$dato = "<table border=1> 
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
		</table>";

		header('Content-type: application/vnd.ms-excel;charset=utf-8');
		header("Content-Disposition: attachment; filename=archivo.xls");
		header("Pragma: no-cache");
		header("Expires: 0");   
		echo $dato;        
		$this->layout = 'excel';

		$file = new File($dato);

		$path_parts = pathinfo("archivo.xls");
		

		$date = "archivo.xls";
		$filename = $date;

		$data = $file->read();	
		$file = new File(WWW_ROOT.'img/'.$filename,true);
		$file->write($data);
		$file->close();
	

*/



		/*bn
		header('Content-type: application/vnd.ms-excel;charset=utf-8');
		header("Content-Disposition: attachment; filename=archivo.xls");
		header("Pragma: no-cache");
		header("Expires: 0");
		echo $dato;*/
		
	}
	public function email(){

		
	
		$this->Email = new CakeEmail();
		$this->Email->from(array('oscar_7938074@hotmail.com' => 'My Site'));
        $this->Email->to('oscar_7938074@hotmail.com');
        $this->Email->subject('About');
        $this->Email->attachments(array(WWW_ROOT.'img/cargo.PNG'));
        $this->Email->template('');
        $this->Email->emailFormat('html');
        if($this->Email->send()){
		  $val="Mensaje enviado";
		  $this->set(compact('val'));
		}
  
	$file = $this->render('export_xls');
	header ("Content-Disposition: attachment; filename=\"Report.xls" ); 
	header ("Content-type: application/vnd.ms-excel");
	header("Content-Description: File Transfer");             
	header("Content-Length: " . strlen($file));
	flush(); // this doesn't really matter.

	$fp = file_get_contents($file); 

		$this->set(compact('email')); 

		
		$this->email = new CakeEmail();
		$email->from(array('oscar_7938074@hotmail.com' => 'Titulo'));
		$email->to('oscar_7938074@hotmail.com');
		$email->subject('Asunto');
		$email->emailFormat('html');
		//$email->template('');
		//$email->attachments(array(''));
		if($email->send()){
			$val='ok';
		$this->set(compact('val'));
	
		} else {
		$val='error';
		$this->set(compact('val'));
		}
				
	}




}
