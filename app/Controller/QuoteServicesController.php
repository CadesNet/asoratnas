<?php
App::uses('AppController', 'Controller');
App::uses('CakeEmail', 'Network/Email');

/**
 * QuoteServices Controller
 *
 * @property QuoteService $QuoteService
 */
class QuoteServicesController extends AppController {

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->QuoteService->recursive = 0;
		$this->set('quoteServices', $this->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->QuoteService->exists($id)) {
			throw new NotFoundException(__('Invalid quote service'));
		}
		$options = array('conditions' => array('QuoteService.' . $this->QuoteService->primaryKey => $id));
		$this->set('quoteService', $this->QuoteService->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->QuoteService->create();
			if ($this->QuoteService->save($this->request->data)) {
				//$this->Session->setFlash(__('The quote service has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The quote service could not be saved. Please, try again.'));
			}
		}
		$services = $this->QuoteService->Service->find('list');
		$this->set(compact('services'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->QuoteService->exists($id)) {
			throw new NotFoundException(__('Invalid quote service'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->QuoteService->save($this->request->data)) {
				//$this->Session->setFlash(__('The quote service has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The quote service could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('QuoteService.' . $this->QuoteService->primaryKey => $id));
			$this->request->data = $this->QuoteService->find('first', $options);
		}
		$services = $this->QuoteService->Service->find('list');
		$this->set(compact('services'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->QuoteService->id = $id;
		if (!$this->QuoteService->exists()) {
			throw new NotFoundException(__('Invalid quote service'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->QuoteService->delete()) {
			$this->Session->setFlash(__('Quote service deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Quote service was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
	public function select(){
 //guardar la info del servicio
		$menu1 = array('menu1' => array('id' => 'menu1'));

		//menu
		$this->Session->write($menu1);

				$menu = array('menu' => array(
    'id' => 'mm','inferior'=>'','superior'=>'','color'=>''
));
		//menu
		$this->Session->write($menu);
		//////////////

		if ($this->request->is('post')) {
			$this->QuoteService->create();
			if ($this->QuoteService->save($this->request->data)) {

				//$this->Session->setFlash(__('The consultation has been saved'));
				 $this->redirect(array('action'=>'email'));
			} else {
				$this->Session->setFlash(__('The consultation could not be saved. Please, try again.'));
			}
		}
  


	}

	public function email(){
		$quoteService = $this->QuoteService->find('first',array('order' => 'QuoteService.created DESC'));
		

		$datos = array('quoteService' => array('datos' => $quoteService));

		//menu
		$this->Session->write($datos); 

		
		$this->Email = new CakeEmail();
		$this->Email->from(array('oscar_7938074@hotmail.com' => 'Avicola Santarosa'));
        $this->Email->to('oscar_7938074@hotmail.com');
        $this->Email->subject('SERVICIOS');
        $this->Email->template('quoteServices');
        $this->Email->emailFormat('html');
        $val=null;
        if($this->Email->send()){
			$this->redirect(array('controller'=>'Benefits','action'=>'select'));
		}else{
		  $val="Mensaje no enviado";
		}
		 $this->set(compact('val'));
		}
}
