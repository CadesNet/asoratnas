<?php
App::uses('AppController', 'Controller');
/**
 * Ads Controller
 *
 * @property Ad $Ad
 */
class AdsController extends AppController {


/*public function beforeFilter() {
		parent::beforeFilter();

		// Cambio de Presentación de peticiones Ajax 
		if ($this->request->is('ajax')) {
			$this->layout = 'ajax';
		}
	}*/
	
/**
 * index method
 *
 * @return void
 */


	public $helpers = array('FormEnum');

	public function index() {
		$this->Ad->recursive = 0;
		$this->set('ads', $this->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		
		if (!$this->Ad->exists($id)) {
			throw new NotFoundException(__('Invalid ad'));
		}
		$options = array('conditions' => array('Ad.' . $this->Ad->primaryKey => $id));
		$this->set('ad', $this->Ad->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add($id1=null,$id2=null,$id3=null,$vista=null) {
		
		if ($this->request->is('post')) {
		

		 	
		 	//$this->request->data['Ad']['filename']['tmp_name'] = WWW_ROOT.'img/ad/filename/pavo.jpg';
		 	//	$this->request->data['Ad']['filename']['name'] = 'pavo.jpg';
		 	
		$this->Ad->create();

			if ($this->Ad->save($this->request->data)) {
				//$this->Session->setFlash(__('The ad has been saved'));
				switch ($vista) {
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
				$this->Session->setFlash(__('The ad could not be saved. Please, try again.'));
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
	public function edit($id=null,$id1=null,$id2=null,$id3=null,$vista=null) {
		
		if (!$this->Ad->exists($id)) {
			throw new NotFoundException(__('Invalid ad'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->Ad->save($this->request->data)) {
				//$this->Session->setFlash(__('The ad has been saved'));
				switch ($vista) {
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
				$this->Session->setFlash(__('The ad could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Ad.' . $this->Ad->primaryKey => $id));
			$this->request->data = $this->Ad->find('first', $options);
		}
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id=null,$id1=null,$id2=null,$id3=null,$vista=null) {
		
		$this->Ad->id = $id;
		if (!$this->Ad->exists()) {
			throw new NotFoundException(__('Invalid ad'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->Ad->delete()) {
			$this->Session->setFlash(__('Ad deleted'));
			switch ($vista) {
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
		$this->Session->setFlash(__('Ad was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
}
