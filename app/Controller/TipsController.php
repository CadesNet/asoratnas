<?php
App::uses('AppController', 'Controller');
/**
 * Tips Controller
 *
 * @property Tip $Tip
 */
class TipsController extends AppController {

public $helpers = array('Js','Session');
/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->Tip->recursive = 0;
		$this->set('tips', $this->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Tip->exists($id)) {
			throw new NotFoundException(__('Invalid tip'));
		}
		$options = array('conditions' => array('Tip.' . $this->Tip->primaryKey => $id));
		$this->set('tip', $this->Tip->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Tip->create();
			if ($this->Tip->save($this->request->data)) {
				$this->Session->setFlash(__('The tip has been saved'));
				$this->redirect(array('action' => 'select1'));
			} else {
				$this->Session->setFlash(__('The tip could not be saved. Please, try again.'));
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
		if (!$this->Tip->exists($id)) {
			throw new NotFoundException(__('Invalid tip'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->Tip->save($this->request->data)) {
				$this->Session->setFlash(__('The tip has been saved'));
				$this->redirect(array('action' => 'select1'));
			} else {
				$this->Session->setFlash(__('The tip could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Tip.' . $this->Tip->primaryKey => $id));
			$this->request->data = $this->Tip->find('first', $options);
		}
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->Tip->id = $id;
		if (!$this->Tip->exists()) {
			throw new NotFoundException(__('Invalid tip'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->Tip->delete()) {
			$this->Session->setFlash(__('Tip deleted'));
			$this->redirect(array('action' => 'select1'));
		}
		$this->Session->setFlash(__('Tip was not deleted'));
		$this->redirect(array('action' => 'index'));
	}

	//propias



	public function select1(){
				//menu
		$menu = array('menu' => array(
    'id' => 'tips','inferior'=>'#710A0F','superior'=>'#B40E15','color'=>'#FFF'));
		//menu
		$this->Session->write($menu);
		////////
		$this->loadModel('Carousel');
		 $this->loadModel('Ad');
	//$conditions = "id = 6";
//$this->paginate = array('limit' => 20, 'page' => 1,'conditions' => $conditions);
		$this->paginate = array(
                                'order' => array('Tip.id' => 'DESC'), 
                                'recursive' => 0,
                                "limit" => 4,
                                'page' => 1
                                //'conditions' => $conditions
                                );
         
        
        $Tip = $this->paginate("Tip");
        $Ad = $this->Ad->find('all',array('order' => 'Ad.created DESC', 'limit' => 3));
        $Carousel = $this->Carousel->find('all',array('conditions'=>"Carousel.number = 'Dos'"));
        $this->set(compact("Tip",'Ad','Carousel'));
	}
	public function select2($id=null,$pagina){
				//menu
		$menu = array('menu' => array(
    'id' => 'tips','inferior'=>'#710A0F','superior'=>'#B40E15','color'=>'#FFF'));
		//menu
		$this->Session->write($menu);
		////////
		$this->loadModel('Carousel');
		 $this->loadModel('Ad');
		if(!$this->Tip->exists($id)){


			$this->redirect(array('controller' => 'Tips', 'action' => 'select1'));
			//throw new NotFoundException(__('Invalid Category'));
		}else{

					$this->paginate = array(
                                'order' => array('Tip.id' => 'DESC'), 
                                'recursive' => 1,
                                "limit" => 1,
                                'page' => $pagina
                                //'conditions' => $conditions
                                );

		$Tip = $this->paginate("Tip");
		$Ad = $this->Ad->find('all',array('order' => 'Ad.created DESC', 'limit' => 3));
		$Carousel = $this->Carousel->find('all',array('conditions'=>"Carousel.number = 'Dos'"));
		$this->set(compact("Tip",'Ad','Carousel','pagina'));
		}

	}
}
