<?php
App::uses('AppController', 'Controller');
/**
 * ImagesCategories Controller
 *
 * @property ImagesCategory $ImagesCategory
 */
class ImagesCategoriesController extends AppController {

/**
 * index method
 *
 * @return void
 */
	public $helpers = array('FormEnum');
	
	public function index() {
		$this->ImagesCategory->recursive = 0;
		$this->set('imagesCategories', $this->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->ImagesCategory->exists($id)) {
			throw new NotFoundException(__('Invalid images category'));
		}
		$options = array('conditions' => array('ImagesCategory.' . $this->ImagesCategory->primaryKey => $id));
		$this->set('imagesCategory', $this->ImagesCategory->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->ImagesCategory->create();
			if ($this->ImagesCategory->save($this->request->data)) {
				$this->Session->setFlash(__('The images category has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The images category could not be saved. Please, try again.'));
			}
		}
		$categories = $this->ImagesCategory->Category->find('list');
		$this->set(compact('categories'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->ImagesCategory->exists($id)) {
			throw new NotFoundException(__('Invalid images category'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->ImagesCategory->save($this->request->data)) {
				$this->Session->setFlash(__('The images category has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The images category could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('ImagesCategory.' . $this->ImagesCategory->primaryKey => $id));
			$this->request->data = $this->ImagesCategory->find('first', $options);
		}
		$categories = $this->ImagesCategory->Category->find('list');
		$this->set(compact('categories'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->ImagesCategory->id = $id;
		if (!$this->ImagesCategory->exists()) {
			throw new NotFoundException(__('Invalid images category'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->ImagesCategory->delete()) {
			$this->Session->setFlash(__('Images category deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Images category was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
}
