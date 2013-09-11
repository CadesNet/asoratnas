<?php
App::uses('AppController', 'Controller');
/**
 * ImagesPresentations Controller
 *
 * @property ImagesPresentation $ImagesPresentation
 */
class ImagesPresentationsController extends AppController {

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->ImagesPresentation->recursive = 0;
		$this->set('imagesPresentations', $this->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->ImagesPresentation->exists($id)) {
			throw new NotFoundException(__('Invalid images presentation'));
		}
		$options = array('conditions' => array('ImagesPresentation.' . $this->ImagesPresentation->primaryKey => $id));
		$this->set('imagesPresentation', $this->ImagesPresentation->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->ImagesPresentation->create();
			if ($this->ImagesPresentation->save($this->request->data)) {
				$this->Session->setFlash(__('The images presentation has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The images presentation could not be saved. Please, try again.'));
			}
		}
		$presentations = $this->ImagesPresentation->Presentation->find('list');
		$this->set(compact('presentations'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->ImagesPresentation->exists($id)) {
			throw new NotFoundException(__('Invalid images presentation'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->ImagesPresentation->save($this->request->data)) {
				$this->Session->setFlash(__('The images presentation has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The images presentation could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('ImagesPresentation.' . $this->ImagesPresentation->primaryKey => $id));
			$this->request->data = $this->ImagesPresentation->find('first', $options);
		}
		$presentations = $this->ImagesPresentation->Presentation->find('list');
		$this->set(compact('presentations'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->ImagesPresentation->id = $id;
		if (!$this->ImagesPresentation->exists()) {
			throw new NotFoundException(__('Invalid images presentation'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->ImagesPresentation->delete()) {
			$this->Session->setFlash(__('Images presentation deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Images presentation was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
}
