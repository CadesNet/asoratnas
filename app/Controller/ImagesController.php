<?php
App::uses('AppController', 'Controller');
/**
 * ImagesCategories Controller
 *
 * @property ImagesCategory $ImagesCategory
 */
class ImagesController extends AppController {

/**
 * index method
 *
 * @return void
 */	
	
	public function index($id = null) {
		
		$images = $this->Image->find('all');
		$this->set(compact("images"));
	}



/**
 * add method
 *
 * @return void
 */
	public function add($val=null) {
		if ($this->request->is('post')) {
			$this->Image->create();
			if ($this->Image->save($this->request->data)) {
				//$this->Session->setFlash(__('The images category has been saved'));
				if($val=='services'){
					$this->redirect(array('controller'=>'Services','action' => 'edit',1));
				}else{
					$this->redirect(array('controller'=>'Companies','action' => 'edit',1));
				}
				
			} else {
				$this->Session->setFlash(__('La imagen no se puedo guardar'));
			}
		}
		$this->set(compact("val"));

	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null,$val=null) {
		if (!$this->Image->exists($id)) {
			throw new NotFoundException(__('Invalid images'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->Image->save($this->request->data)) {
				//$this->Session->setFlash(__('The images category has been saved'));
				//$this->redirect(array('action' => 'index',$id_category));
				if($val=='services'){
					$this->redirect(array('controller'=>'Services','action' => 'edit',1));
				}else{
					$this->redirect(array('controller'=>'Companies','action' => 'edit',1));
				}
			} else {
				$this->Session->setFlash(__('La imagen no se puedo editar'));
			}
		} else {
			$options = array('conditions' => array('Image.' . $this->Image->primaryKey => $id));
			$this->request->data = $this->Image->find('first', $options);
		}
		$this->set(compact("val"));

	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null,$val=null) {
		$this->Image->id = $id;
		if (!$this->Image->exists()) {
			throw new NotFoundException(__('Invalid images category'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->Image->delete()) {
			//$this->Session->setFlash(__('Images category deleted'));
			//$this->redirect(array('action' => 'index',$id_category));
			if($val=='services'){
					$this->redirect(array('controller'=>'Services','action' => 'edit',1));
				}else{
					$this->redirect(array('controller'=>'Companies','action' => 'edit',1));
				}
		}
		$this->Session->setFlash(__('La imagen no se puedo eliminar'));
	}
}
