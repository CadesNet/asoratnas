<?php
App::uses('AppController', 'Controller');
/**
 * Items Controller
 *
 * @property Item $Item
 */
class ItemsController extends AppController {

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->Item->recursive = 0;
		$this->set('items', $this->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Item->exists($id)) {
			throw new NotFoundException(__('Invalid item'));
		}
		$options = array('conditions' => array('Item.' . $this->Item->primaryKey => $id));
		$this->set('item', $this->Item->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Item->create();
			if ($this->Item->save($this->request->data)) {
				$this->Session->setFlash(__('The item has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The item could not be saved. Please, try again.'));
			}
		}
		$categories = $this->Item->Category->find('list');
		$this->set(compact('categories'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->Item->exists($id)) {
			throw new NotFoundException(__('Invalid item'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->Item->save($this->request->data)) {
				$this->Session->setFlash(__('The item has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The item could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Item.' . $this->Item->primaryKey => $id));
			$this->request->data = $this->Item->find('first', $options);
		}
		$categories = $this->Item->Category->find('list');
		$this->set(compact('categories'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->Item->id = $id;
		if (!$this->Item->exists()) {
			throw new NotFoundException(__('Invalid item'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->Item->delete()) {
			$this->Session->setFlash(__('Item deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Item was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
<<<<<<< HEAD
	public function select($category_id = null,$item_id){
		//$this->Category->recursive = 2;
		$menu = array('menu' => array('id' => 'productos','inferior'=>'#096357','superior'=>'#22A18C','color'=>'#FFF'));
		//menu
		$this->Session->write($menu);

       $this->loadModel('Recipe');
       $this->loadModel('Ad');
       $this->loadModel('Carousel');
       $this->loadModel('Category');

		

		if(!$this->Category->exists($category_id) and !$this->Item->exists($item_id)){
			$this->redirect(array('controller' => 'Categories', 'action' => 'select'));
			//throw new NotFoundException(__('Invalid Category'));
		}else{

		$Category = $this->Category->Item->find('first',array('conditions' => array('Category.' . $this->Category->primaryKey => $category_id,'Item.' . $this->Item->primaryKey => $item_id),'recursive'=>2));
		
		$Recipe = $this->Recipe->find('first',array('order' => 'Recipe.created DESC'));
		$Recipes1 = $this->Recipe->find('all',array('order'=>'Recipe.id DESC'));
		$Ad = $this->Ad->find('first',array('order' => 'Ad.created DESC'));
		$Carousel = $this->Carousel->find('all',array('conditions'=>"Carousel.number = 'Dos'"));
		$this->set(compact('Category','Recipe','Recipes1','Ad','Carousel'));

		}
=======
				//conulta propias
	public function select($id = null){
       $this->loadModel('Category');
       $this->loadModel('Recipe');
       $this->loadModel('Ad');
       $this->loadModel('Carousel');
		if(!$this->Category->exists($id)){
			$this->redirect(array('controller' => 'Categories', 'action' => 'select'));
			//throw new NotFoundException(__('Invalid Category'));
		}else{
		$Category = $this->Category->find('all',array('conditions' => array('Category.' . $this->Category->primaryKey => $id),'recursive'  => 2));
		//$this->set('item', $this->Item->find('all', $options));
		$Recipe = $this->Recipe->find('first',array('order' => 'Recipe.created DESC'));
		$Ad = $this->Ad->find('first',array('order' => 'Ad.created DESC'));
		$Carousel = $this->Carousel->find('all',array('conditions'=>"Carousel.number = 'Dos'"));
		$this->set(compact('Category','Recipe','Ad','Carousel'));
		}
		
		
>>>>>>> b6abcb8f17127e7992c4b9391ac8f4dc08532886
	}
}
