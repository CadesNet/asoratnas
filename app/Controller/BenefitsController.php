<?php
App::uses('AppController', 'Controller');
/**
 * Benefits Controller
 *
 * @property Benefit $Benefit
 */
class BenefitsController extends AppController {

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->Benefit->recursive = 0;
		$this->set('benefits', $this->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Benefit->exists($id)) {
			throw new NotFoundException(__('Invalid benefit'));
		}
		$options = array('conditions' => array('Benefit.' . $this->Benefit->primaryKey => $id));
		$this->set('benefit', $this->Benefit->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Benefit->create();
			if ($this->Benefit->save($this->request->data)) {
				$this->Session->setFlash(__('The benefit has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The benefit could not be saved. Please, try again.'));
			}
		}
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->Benefit->exists($id)) {
			throw new NotFoundException(__('Invalid benefit'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->Benefit->save($this->request->data)) {
				$this->Session->setFlash(__('The benefit has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The benefit could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Benefit.' . $this->Benefit->primaryKey => $id));
			$this->request->data = $this->Benefit->find('first', $options);
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
		$this->Benefit->id = $id;
		if (!$this->Benefit->exists()) {
			throw new NotFoundException(__('Invalid benefit'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->Benefit->delete()) {
			$this->Session->setFlash(__('Benefit deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Benefit was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
	//conulta propias
	public function select2(){

		//$options = array('conditions' => array('limit' => 2));
		//$this->User->find('all', array('limit' => 1));
		$this->set('benefit', $this->Benefit->find('all', array('limit' => 2)));		
	}
}
