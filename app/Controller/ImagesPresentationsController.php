<?php
App::uses('AppController', 'Controller');
//App::import('Vendor','watimage');
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
	public function index($id=null) {
		
		$options = array('conditions' => array('ImagesPresentation.' . 'presentation_id' => $id));
		$imagesPresentation = $this->ImagesPresentation->find('all', $options);
		$id_presentacion = $id;
		$this->set(compact("imagesPresentation","id_presentacion"));
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
	public function add($id = null) {
		if ($this->request->is('post')) {

			if ($this->request->data['ImagesPresentation']['filename']) {

			/*
			$wm = new Watimage();
			$wm->setImage($this->request->data['ImagesPresentation']['filename']['tmp_name']); 
			$path_parts = $this->request->data['ImagesPresentation']['filename']['name'];
			$wm->resize(array('type' => 'resize', 'size' => 100));
			$wm->generate(WWW_ROOT.'img/bmp/img.bmp'); */

			$ruta = $this->request->data['ImagesPresentation']['filename']['tmp_name'];

			// Obtener las dimensiones de la imagen
			$imagen = getimagesize($ruta);

			// Convertir la imagen
			jpeg2wbmp($ruta, WWW_ROOT.'img/prueba.wbmp', $imagen[1], $imagen[0], 5);

			}
			$this->ImagesPresentation->create();
			if ($this->ImagesPresentation->save($this->request->data)) {
				//$this->Session->setFlash(__('La imagen de lapresenttacion se a guardado'));
				$this->redirect(array('action' => 'index',$id));
			} else {
				$this->Session->setFlash(__('La imagen de la presenttacion no se pudo guardar'));
			}
		}
		$presentations = $id;
		$this->set(compact('presentations'));
	}
/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null,$idpresentacion=null) {
		if (!$this->ImagesPresentation->exists($id)) {
			throw new NotFoundException(__('Invalid images presentation'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->ImagesPresentation->save($this->request->data)) {
				//$this->Session->setFlash(__('The images presentation has been saved'));
				$this->redirect(array('action' => 'index',$idpresentacion));
			} else {
				$this->Session->setFlash(__('La imagen de la presenttacion no se pudo editar'));
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
	public function delete($id = null,$idpresentacion=null) {
		$this->ImagesPresentation->id = $id;
		if (!$this->ImagesPresentation->exists()) {
			throw new NotFoundException(__('Invalid images presentation'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->ImagesPresentation->delete()) {
			$this->Session->setFlash(__('Images presentation deleted'));
			$this->redirect(array('action' => 'index',$idpresentacion));
		}
		$this->Session->setFlash(__('La imagen de la presenttacion no se pudo eliminar'));
	
	}
}
