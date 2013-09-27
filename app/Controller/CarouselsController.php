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
	public function add($id1=null,$id2=null,$id3=null,$vista=null) {
		if ($this->request->is('post')) {
			$this->Carousel->create();
			if ($this->Carousel->save($this->request->data)) {
				//$this->Session->setFlash(__('The carousel has been saved'));
					switch ($vista) {
					case 'index':
						$this->redirect(array('controller'=>'Benefits','action' => 'select'));
						break;
					case 'categorias':
						$this->redirect(array('controller'=>'Categories','action' => 'select'));
						break;
					case 'categoria':
						$this->redirect(array('controller'=>'Categories','action' => 'select1',$id1));
						break;
					case 'item':
						$this->redirect(array('controller'=>'Items','action' => 'select',$id1,$id2));
						break;
					case 'presentacion':
						$this->redirect(array('controller'=>'Quotes','action' => 'select',$id1,$id2,$id3));
						break;
					case 'recetas':
						$this->redirect(array('controller'=>'Recipes','action' => 'select'));
						break;
					case 'recetas1':
						$this->redirect(array('controller'=>'Recipes','action' => 'select1',$id1,$id2));
						break;
					case 'beneficios':
						$this->redirect(array('controller'=>'Benefits','action' => 'select1'));
						break;
					case 'beneficios1':
						$this->redirect(array('controller'=>'Benefits','action' => 'select2',$id1,$id2));
						break;
					case 'tips':
						$this->redirect(array('controller'=>'Tips','action' => 'select1'));
						break;
					case 'tips1':
						$this->redirect(array('controller'=>'Tips','action' => 'select2',$id1,$id2));
						break;
					default:
						$this->redirect(array('action' => 'index'));
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
	public function edit($id = null,$id1=null,$id2=null,$id3=null,$vista=null) {
		if (!$this->Carousel->exists($id)) {
			throw new NotFoundException(__('Invalid carousel'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->Carousel->save($this->request->data)) {
				//$this->Session->setFlash(__('The carousel has been saved'));
				switch ($vista) {
					case 'index':
						$this->redirect(array('controller'=>'Benefits','action' => 'select'));
						break;
					case 'categorias':
						$this->redirect(array('controller'=>'Categories','action' => 'select'));
						break;
					case 'categoria':
						$this->redirect(array('controller'=>'Categories','action' => 'select1',$id1));
						break;
					case 'item':
						$this->redirect(array('controller'=>'Items','action' => 'select',$id1,$id2));
						break;
					case 'presentacion':
						$this->redirect(array('controller'=>'Quotes','action' => 'select',$id1,$id2,$id3));
						break;
					case 'recetas':
						$this->redirect(array('controller'=>'Recipes','action' => 'select'));
						break;
					case 'recetas1':
						$this->redirect(array('controller'=>'Recipes','action' => 'select1',$id1,$id2));
						break;
					case 'beneficios':
						$this->redirect(array('controller'=>'Benefits','action' => 'select1'));
						break;
					case 'beneficios1':
						$this->redirect(array('controller'=>'Benefits','action' => 'select2',$id1,$id2));
						break;
					case 'tips':
						$this->redirect(array('controller'=>'Tips','action' => 'select1'));
						break;
					case 'tips1':
						$this->redirect(array('controller'=>'Tips','action' => 'select2',$id1,$id2));
						break;
					default:
						$this->redirect(array('action' => 'index'));
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
	public function delete($id = null,$id1=null,$id2=null,$id3=null,$vista=null) {
		$this->Carousel->id = $id;
		if (!$this->Carousel->exists()) {
			throw new NotFoundException(__('Invalid carousel'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->Carousel->delete()) {
			$this->Session->setFlash(__('Carousel deleted'));
			switch ($vista) {
					case 'index':
						$this->redirect(array('controller'=>'Benefits','action' => 'select'));
						break;
					case 'categorias':
						$this->redirect(array('controller'=>'Categories','action' => 'select'));
						break;
					case 'categoria':
						$this->redirect(array('controller'=>'Categories','action' => 'select1',$id1));
						break;
					case 'item':
						$this->redirect(array('controller'=>'Items','action' => 'select',$id1,$id2));
						break;
					case 'presentacion':
						$this->redirect(array('controller'=>'Quotes','action' => 'select',$id1,$id2,$id3));
						break;
					case 'recetas':
						$this->redirect(array('controller'=>'Recipes','action' => 'select'));
						break;
					case 'recetas1':
						$this->redirect(array('controller'=>'Recipes','action' => 'select1',$id1,$id2));
						break;
					case 'beneficios':
						$this->redirect(array('controller'=>'Benefits','action' => 'select1'));
						break;
					case 'beneficios1':
						$this->redirect(array('controller'=>'Benefits','action' => 'select2',$id1,$id2));
						break;
					case 'tips':
						$this->redirect(array('controller'=>'Tips','action' => 'select1'));
						break;
					case 'tips1':
						$this->redirect(array('controller'=>'Tips','action' => 'select2',$id1,$id2));
						break;
					default:
						$this->redirect(array('action' => 'index'));
					break;
					
					

				}
		}
		$this->Session->setFlash(__('Carousel was not deleted'));
		
	}
}
