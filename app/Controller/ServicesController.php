<?php
App::uses('AppController', 'Controller');
App::uses('CakeEmail', 'Network/Email');
/**
 * Services Controller
 *
 * @property Service $Service
 */
class ServicesController extends AppController {

/**
 * index method
 *
 * @return void
 */
	public function index() {
		
		$this->Service->recursive = 0;
		$this->set('services', $this->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Service->exists($id)) {
			throw new NotFoundException(__('Invalid service'));
		}
		$options = array('conditions' => array('Service.' . $this->Service->primaryKey => $id));
		$this->set('service', $this->Service->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		
		if ($this->request->is('post')) {
			$this->Service->create();
			if ($this->Service->save($this->request->data)) {
				//$this->Session->setFlash(__('The service has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('El servicio no se pudo guardar'));
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
		$this->loadModel('Image');
		if (!$this->Service->exists($id)) {
			throw new NotFoundException(__('Invalid service'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->Service->save($this->request->data)) {
				//$this->Session->setFlash(__('The service has been saved'));
				$this->redirect(array('action' => 'select'));
			} else {
				$this->Session->setFlash(__('El servicio no se pudo editar'));
			}
		} else {
			$options = array('conditions' => array('Service.' . $this->Service->primaryKey => $id));
			$this->request->data = $this->Service->find('first', $options);
		}
		$images = $this->Image->find('all');
		$this->set(compact("images"));

	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		
		$this->Service->id = $id;
		if (!$this->Service->exists()) {
			throw new NotFoundException(__('Invalid service'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->Service->delete()) {
			//$this->Session->setFlash(__('Service deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('El servicio no se pudo eliminar'));
		$this->redirect(array('action' => 'index'));
	}
	public function select(){
					$menu1 = array('menu1' => array('id' => 'menu3'));

		//menu
		$this->Session->write($menu1);

		$menu = array('menu' => array('id' => 'nn','inferior'=>'','superior'=>'','color'=>''));
		//menu
		$this->Session->write($menu);
		//////////////

		$Service = $this->Service->find('all');
		$this->set(compact('Service'));
	}



	
}
