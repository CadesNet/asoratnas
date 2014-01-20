<?php
App::uses('AppController', 'Controller');
/**
 * ImagesItems Controller
 *
 * @property ImagesItem $ImagesItem
 */
class ImagesItemsController extends AppController {

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->ImagesItem->recursive = 1;
		$this->set('imagesItems', $this->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->ImagesItem->exists($id)) {
			throw new NotFoundException(__('Invalid images item'));
		}
		$options = array('conditions' => array('ImagesItem.' . $this->ImagesItem->primaryKey => $id));
		
		$this->set('imagesItem', $this->ImagesItem->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->ImagesItem->create();
			if ($this->ImagesItem->save($this->request->data)) {
				//$this->Session->setFlash(__('The images item has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('La imagen del producto no se puedo guardar'));
			}
		}
		$items = $this->ImagesItem->Item->find('list');
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
		if (!$this->ImagesItem->exists($id)) {
			throw new NotFoundException(__('Invalid images item'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->ImagesItem->save($this->request->data)) {
				//$this->Session->setFlash(__('The images item has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('La imagen del producto no se puedo editar'));
			}
		} else {
			$options = array('conditions' => array('ImagesItem.' . $this->ImagesItem->primaryKey => $id));
			$this->request->data = $this->ImagesItem->find('first', $options);
		}
		$items = $this->ImagesItem->Item->find('list');
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
		$this->ImagesItem->id = $id;
		if (!$this->ImagesItem->exists()) {
			throw new NotFoundException(__('Invalid images item'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->ImagesItem->delete()) {
			$this->Session->setFlash(__('Images item deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('La imagen del producto no se puedo eliminar'));
		$this->redirect(array('action' => 'index'));
	}
}
