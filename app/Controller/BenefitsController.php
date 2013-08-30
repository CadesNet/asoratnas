<?php
App::uses('AppController', 'Controller');
/**
 * Benefits Controller
 *
 * @property Benefit $Benefit
 */
class BenefitsController extends AppController {


public $helpers = array('Js','Session');

/**
 * index method
 *
 * @return void
 */
	public function index() {
		
		$this->Benefit->recursive = 0;
		$this->set('benefits', $this->paginate());

	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		
		if (!$this->Benefit->exists($id)) {
			throw new NotFoundException(__('Invalid benefit'));
		}
		$options = array('conditions' => array('Benefit.' . $this->Benefit->primaryKey => $id));
		$this->set('benefit', $this->Benefit->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		
		if ($this->request->is('post')) {
			$this->Benefit->create();
			if ($this->Benefit->save($this->request->data)) {
				$this->Session->setFlash(__('The benefit has been saved'));
			    $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The benefit could not be saved. Please, try again.'));
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
		
		if (!$this->Benefit->exists($id)) {
			throw new NotFoundException(__('Invalid benefit'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->Benefit->save($this->request->data)) {
				$this->Session->setFlash(__('The benefit has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The benefit could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Benefit.' . $this->Benefit->primaryKey => $id));
			$this->request->data = $this->Benefit->find('first', $options);
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
		
		$this->Benefit->id = $id;
		if (!$this->Benefit->exists()) {
			throw new NotFoundException(__('Invalid benefit'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->Benefit->delete()) {
			$this->Session->setFlash(__('Benefit deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Benefit was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
	//conulta propias
	public function select(){
		$menu = array('menu' => array(
    'id' => 'beneficios','inferior'=>'','superior'=>'','color'=>''
));

		//menu
		$this->Session->write($menu);
		//////////////

		$this->loadModel('Ad');
        $this->loadModel('Supermarket');
        $this->loadModel('Recipe');
        $this->loadModel('Carousel');
       //$this->loadModel('Category');
		//$options = array('conditions' => array('limit' => 2));
       	//$Category = $this->Category->find('all');
       	$Supermarket = $this->Supermarket->find('all');	
		$Benefit = $this->Benefit->find('all',array('order' => 'Benefit.id DESC', 'limit' => 2));
		$Recipe = $this->Recipe->find('first',array('order' => 'Recipe.created DESC'));
		$Carousel = $this->Carousel->find('all',array('conditions'=>"Carousel.number = 'Uno'"));
		$this->set(compact('Supermarket','Benefit','Recipe','Carousel'));
	}
	public function select1(){
				//menu
		$menu = array('menu' => array(
    'id' => 'beneficios','inferior'=>'#74255F','superior'=>'#C34CA4','color'=>'#FFF'));
		//menu
		$this->Session->write($menu);
		////////
		$this->loadModel('Carousel');
		$this->loadModel('Ad');
	//$conditions = "id = 6";
//$this->paginate = array('limit' => 20, 'page' => 1,'conditions' => $conditions);
		$this->paginate = array(
                                'order' => array('Benefit.id' => 'DESC'), 
                                'recursive' => 0,
                                "limit" => 4,
                                'page' => 1
                                //'conditions' => $conditions
                                );
         
        $Ad = $this->Ad->find('all',array('order' => 'Ad.created DESC', 'limit' => 3));
        $Carousel = $this->Carousel->find('all',array('conditions'=>"Carousel.number = 'Dos'"));
        $Benefit = $this->paginate("Benefit");
        $this->set(compact("Benefit",'Ad','Carousel'));
	}
	public function select2($id=null,$pagina){
				//menu
		$menu = array('menu' => array(
    'id' => 'beneficios','inferior'=>'#74255F','superior'=>'#C34CA4','color'=>'#FFF'));
		//menu
		$this->Session->write($menu);
		////////
		$this->loadModel('Carousel');
		$this->loadModel('Ad');
		if(!$this->Benefit->exists($id)){


			$this->redirect(array('controller' => 'Benefits', 'action' => 'select1'));
			//throw new NotFoundException(__('Invalid Category'));
		}else{

					$this->paginate = array(
                                'order' => array('Benefit.id' => 'DESC'), 
                                'recursive' => 1,
                                "limit" => 1,
                                'page' => $pagina
                                //'conditions' => $conditions
                                );
		$Ad = $this->Ad->find('all',array('order' => 'Ad.created DESC', 'limit' => 3));
		$Carousel = $this->Carousel->find('all',array('conditions'=>"Carousel.number = 'Dos'"));
		$Benefit = $this->paginate("Benefit");
		//$Recipe = $this->Recipe->find('all',array('conditions' => array('Recipe.' . $this->Recipe->primaryKey => $id),'recursive'  => 1));
		$this->set(compact('Benefit','Ad','Carousel'));
		}

	}
}
