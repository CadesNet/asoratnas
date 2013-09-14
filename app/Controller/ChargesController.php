<?php
App::uses('AppController', 'Controller');
/**
 * Charges Controller
 *
 * @property Charge $Charge
 */
class ChargesController extends AppController {

/**
 * index method
 *
 * @return void
 */
	public function index($id=null) {
		$this->loadModel('Branch');
		$this->Charge->recursive = 0;
		 $charges =  $this->Charge->find('all', array('conditions' => array('Charge.' . 'branch_id' => $id)));
		$this->set(compact('charges','id'));

	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		
		if (!$this->Charge->exists($id)) {
			throw new NotFoundException(__('Invalid charge'));
		}
		$options = array('conditions' => array('Charge.' . $this->Charge->primaryKey => $id));
		$this->set('charge', $this->Charge->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add($idsucursal=null) {
		
		if ($this->request->is('post')) {
			$this->Charge->create();
			if ($this->Charge->save($this->request->data)) {
				$this->Session->setFlash(__('The charge has been saved'));
				$this->redirect(array('controller'=>'Branches','action' => 'select1',$idsucursal));
			} else {
				$this->Session->setFlash(__('The charge could not be saved. Please, try again.'));
			}
		}
		$branches = $idsucursal;
		$this->set(compact('branches'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null,$idsucursal) {
		
		if (!$this->Charge->exists($id)) {
			throw new NotFoundException(__('Invalid charge'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->Charge->save($this->request->data)) {
				$this->Session->setFlash(__('The charge has been saved'));
				$this->redirect(array('controller'=>'Branches','action' => 'select1',$idsucursal));
			} else {
				$this->Session->setFlash(__('The charge could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Charge.' . $this->Charge->primaryKey => $id));
			$this->request->data = $this->Charge->find('first', $options);
		}
		$branches = $this->Charge->Branch->find('list');
		$this->set(compact('branches'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null,$idsucursal) {
		$this->loadModel('Requirement');
		$this->Charge->id = $id;
		if (!$this->Charge->exists()) {
			throw new NotFoundException(__('Invalid charge'));
		}else{
		$this->request->onlyAllow('post', 'delete');
		$requerimiento = $this->Requirement->find('all',array('conditions' => array('Requirement.' . 'charge_id' => $id)));
		foreach ($requerimiento as $req) { 
		$this->Requirement->id = $req['Requirement']['id'];
		$this->Requirement->delete();
		}
		if ($this->Charge->delete()) {
			$this->Session->setFlash(__('Charge deleted'));
			$this->redirect(array('controller'=>'Branches','action' => 'select1',$idsucursal));
		}

		}
		
		$this->Session->setFlash(__('Charge was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
}
