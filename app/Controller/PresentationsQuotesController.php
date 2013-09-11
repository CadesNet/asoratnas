<?php
App::uses('AppController', 'Controller');
/**
 * PresentationsQuotes Controller
 *
 * @property PresentationsQuote $PresentationsQuote
 */
class PresentationsQuotesController extends AppController {

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->PresentationsQuote->recursive = 0;
		$this->set('presentationsQuotes', $this->paginate());
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
}
