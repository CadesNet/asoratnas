<?php
App::uses('AppController', 'Controller');
/**
 * Carousels Controller
 *
 * @property Carousel $Carousel
 */
class CarouselsController extends AppController {

/**
 * index method
 *
 * @return void
 */
	public $helpers = array('FormEnum');
	
	public function index() {
		$this->Carousel->recursive = 0;
		$this->set('carousels', $this->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Carousel->exists($id)) {
			throw new NotFoundException(__('Invalid carousel'));
		}
		$options = array('conditions' => array('Carousel.' . $this->Carousel->primaryKey => $id));
		$this->set('carousel', $this->Carousel->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add($vista) {
		if ($this->request->is('post')) {
			$this->Carousel->create();
			if ($this->Carousel->save($this->request->data)) {
				$this->Session->setFlash(__('The carousel has been saved'));
					switch ($vista) {
					case '1':
						$this->redirect(array('controller'=>'Benefits','action' => 'select'));
						break;
					case '2':
						$this->redirect(array('controller'=>'Categories','action' => 'select'));
						break;
					default:
						$this->redirect(array('action' => 'select'));
						break;
				}
			} else {
				$this->Session->setFlash(__('The carousel could not be saved. Please, try again.'));
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
	public function edit($id = null,$vista=null) {
		if (!$this->Carousel->exists($id)) {
			throw new NotFoundException(__('Invalid carousel'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->Carousel->save($this->request->data)) {
				$this->Session->setFlash(__('The carousel has been saved'));
				switch ($vista) {
					case '1':
						$this->redirect(array('controller'=>'Benefits','action' => 'select'));
						break;
					case '2':
						$this->redirect(array('controller'=>'Categories','action' => 'select'));
						break;
					default:
						$this->redirect(array('action' => 'select'));
						break;
				}
			} else {
				$this->Session->setFlash(__('The carousel could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Carousel.' . $this->Carousel->primaryKey => $id));
			$this->request->data = $this->Carousel->find('first', $options);
		}
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null,$vista=null) {
		$this->Carousel->id = $id;
		if (!$this->Carousel->exists()) {
			throw new NotFoundException(__('Invalid carousel'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->Carousel->delete()) {
			$this->Session->setFlash(__('Carousel deleted'));
			switch ($vista) {
					case '1':
						$this->redirect(array('controller'=>'Benefits','action' => 'select'));
						break;
					case '2':
						$this->redirect(array('controller'=>'Categories','action' => 'select'));
						break;
					default:
						$this->redirect(array('action' => 'select'));
						break;
				}
		}
		$this->Session->setFlash(__('Carousel was not deleted'));
		
	}
}
