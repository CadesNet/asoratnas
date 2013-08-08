<?php
App::uses('AppController', 'Controller');
/**
 * Quotes Controller
 *
 * @property Quote $Quote
 */
class QuotesController extends AppController {

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->Quote->recursive = 0;
		$this->set('quotes', $this->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Quote->exists($id)) {
			throw new NotFoundException(__('Invalid quote'));
		}
		$options = array('conditions' => array('Quote.' . $this->Quote->primaryKey => $id));
		$this->set('quote', $this->Quote->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Quote->create();
			if ($this->Quote->save($this->request->data)) {
				$this->Session->setFlash(__('The quote has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The quote could not be saved. Please, try again.'));
			}
		}
		$items = $this->Quote->Item->find('list');
		$this->set(compact('items'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->Quote->exists($id)) {
			throw new NotFoundException(__('Invalid quote'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->Quote->save($this->request->data)) {
				$this->Session->setFlash(__('The quote has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The quote could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Quote.' . $this->Quote->primaryKey => $id));
			$this->request->data = $this->Quote->find('first', $options);
		}
		$items = $this->Quote->Item->find('list');
		$this->set(compact('items'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->Quote->id = $id;
		if (!$this->Quote->exists()) {
			throw new NotFoundException(__('Invalid quote'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->Quote->delete()) {
			$this->Session->setFlash(__('Quote deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Quote was not deleted'));
		$this->redirect(array('action' => 'index'));
	}

//conulta propias
	public function select($id = null,$id2 = null){
		$this->loadModel('Category');
       $this->loadModel('Recipe');
       $this->loadModel('Item');
		if(!$this->Category->exists($id) and !$this->Item->exists($id2)){
			$this->redirect(array('controller' => 'Items', 'action' => 'select4'));
			//throw new NotFoundException(__('Invalid Category'));
		}else{

		$Category = $this->Category->find('all',array('conditions' => array('Category.' . $this->Category->primaryKey => $id)));
		$Item = $this->Item->find('all',array('conditions' => array('Item.' . $this->Item->primaryKey => $id2)));
		//$this->set('item', $this->Item->find('all', $options));
		$Recipe = $this->Recipe->find('first',array('order' => 'Recipe.created DESC'));
		$Recipes1 = $this->Recipe->find('all');
		$this->set(compact('Category','Item','Recipe','Recipes1'));

		}
		
		
	}	
}
