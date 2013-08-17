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
	public function index() {
		$this->layout = 'ajax';
		$this->Charge->recursive = 0;
		$this->set('charges', $this->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		$this->layout = 'ajax';
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
	public function add() {
		$this->layout = 'ajax';
		if ($this->request->is('post')) {
			$this->Charge->create();
			if ($this->Charge->save($this->request->data)) {
				$this->Session->setFlash(__('The charge has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The charge could not be saved. Please, try again.'));
			}
		}
		$branches = $this->Charge->Branch->find('list');
		$this->set(compact('branches'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		$this->layout = 'ajax';
		if (!$this->Charge->exists($id)) {
			throw new NotFoundException(__('Invalid charge'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->Charge->save($this->request->data)) {
				$this->Session->setFlash(__('The charge has been saved'));
				$this->redirect(array('action' => 'index'));
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
	public function delete($id = null) {
		$this->layout = 'ajax';
		$this->Charge->id = $id;
		if (!$this->Charge->exists()) {
			throw new NotFoundException(__('Invalid charge'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->Charge->delete()) {
			$this->Session->setFlash(__('Charge deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Charge was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
}
