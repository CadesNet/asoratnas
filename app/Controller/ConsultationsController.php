<?php
App::uses('AppController', 'Controller');
App::uses('CakeEmail', 'Network/Email');
/**
 * Consultations Controller
 *
 * @property Consultation $Consultation
 */
class ConsultationsController extends AppController {

/**
 * index method
 *
 * @return void
 */
	public function index() {
		
		$this->Consultation->recursive = 0;
		$this->set('consultations', $this->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		
		if (!$this->Consultation->exists($id)) {
			throw new NotFoundException(__('Invalid consultation'));
		}
		$options = array('conditions' => array('Consultation.' . $this->Consultation->primaryKey => $id));
		$this->set('consultation', $this->Consultation->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		
		if (!$this->Consultation->exists($id)) {
			throw new NotFoundException(__('Invalid consultation'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->Consultation->save($this->request->data)) {
				//$this->Session->setFlash(__('The consultation has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The consultation could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Consultation.' . $this->Consultation->primaryKey => $id));
			$this->request->data = $this->Consultation->find('first', $options);
		}
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		
		$this->Consultation->id = $id;
		if (!$this->Consultation->exists()) {
			throw new NotFoundException(__('Invalid consultation'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->Consultation->delete()) {
			$this->Session->setFlash(__('Consultation deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Consultation was not deleted'));
		$this->redirect(array('action' => 'index'));
	}

	///consultas propias
		public function select() {
				$menu1 = array('menu1' => array('id' => 'menu4'));

		//menu
		$this->Session->write($menu1);

				$menu = array('menu' => array(
    'id' => 'mm','inferior'=>'','superior'=>'','color'=>''
));
		//menu
		$this->Session->write($menu);
		//////////////

		if ($this->request->is('post')) {


			$this->Consultation->create();
			if ($this->Consultation->save($this->request->data)) {
				//$this->Session->setFlash(__('The consultation has been saved'));
				$this->redirect(array('action' => 'email'));

			} else {
				$this->Session->setFlash(__('The consultation could not be saved. Please, try again.'));
			}
		}
       $this->loadModel('Branch');
       $this->loadModel('Supermarket');

		//$options = array('conditions' => array('limit' => 2));
       	$Branch = $this->Branch->find('all',array('conditions' => array('Branch.' . 'id <>' => 1)));
       	$Branch1 = $this->Branch->find('first',array('order' => 'Branch.id ASC'));
       	$Supermarket = $this->Supermarket->find('all');
		$this->set(compact('Branch','Branch1','Supermarket'));

	}



	public function email(){
		$consultation = $this->Consultation->find('first',array('order' => 'Consultation.created DESC'));
		
		$datos = array('consultation' => array('datos' => $consultation));

		//menu
		$this->Session->write($datos);
		$this->Email = new CakeEmail();
		$this->Email->from(array('oscar_7938074@hotmail.com' => 'Avicola Santarosa'));
        $this->Email->to('oscar_7938074@hotmail.com');
        $this->Email->subject('CONTACTENOS');
        $this->Email->template('consultations');
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
