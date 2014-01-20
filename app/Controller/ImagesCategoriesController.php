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
	
	public function index($id = null) {

		$options = array('conditions' => array('ImagesCategory.' . 'category_id' => $id));
		$imagesCategores = $this->ImagesCategory->find('all', $options);
		$id_category = $id;
		$this->set(compact("imagesCategores","id_category"));
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
	public function add($id = null) {
		if ($this->request->is('post')) {
			$this->ImagesCategory->create();
			if ($this->ImagesCategory->save($this->request->data)) {
				//$this->Session->setFlash(__('The images category has been saved'));
				$this->redirect(array('action' => 'index',$id));
			} else {
				$this->Session->setFlash(__('La imagen de la categoria no se puedo guardar'));
			}
		}
		$categories = $id;
		$this->set(compact('categories'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null,$id_category=null) {
		if (!$this->ImagesCategory->exists($id)) {
			throw new NotFoundException(__('Invalid images category'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->ImagesCategory->save($this->request->data)) {
				//$this->Session->setFlash(__('The images category has been saved'));
				$this->redirect(array('action' => 'index',$id_category));
			} else {
				$this->Session->setFlash(__('La imagen de la categoria no se puedo editar'));
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
	public function delete($id = null,$id_category=null) {
		$this->ImagesCategory->id = $id;
		if (!$this->ImagesCategory->exists()) {
			throw new NotFoundException(__('Invalid images category'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->ImagesCategory->delete()) {
			$this->Session->setFlash(__('Images category deleted'));
			$this->redirect(array('action' => 'index',$id_category));
		}
		$this->Session->setFlash(__('La imagen de la categoria no se puedo eliminar'));
	}
}
