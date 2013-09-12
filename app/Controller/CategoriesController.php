<?php
App::uses('AppController', 'Controller');
/**
 * Categories Controller
 *
 * @property Category $Category
 */
class CategoriesController extends AppController {


public $helpers = array('Js','Session');
/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->Category->recursive = 0;
		$this->set('categories', $this->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Category->exists($id)) {
			throw new NotFoundException(__('Invalid category'));
		}
		$options = array('conditions' => array('Category.' . $this->Category->primaryKey => $id));
		$this->set('category', $this->Category->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Category->create();
			if ($this->Category->save($this->request->data)) {
				$this->Session->setFlash(__('La Categoria se a guardado'));
			} else {
				$this->Session->setFlash(__('La Categoria no se a guardado'));
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
		if (!$this->Category->exists($id)) {
			throw new NotFoundException(__('Invalid category'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->Category->save($this->request->data)) {
				$this->Session->setFlash(__('The category has been saved'));
				$this->redirect(array('controller'=>'Categories','action' => 'select'));
			} else {
				$this->Session->setFlash(__('The category could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Category.' . $this->Category->primaryKey => $id));
			$this->request->data = $this->Category->find('first', $options);
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
		$this->loadModel('Item');
		$this->loadModel('Presentation');
		$this->loadModel('ImagesPresentation');
		$this->loadModel('ImagesCategory');
		$this->loadModel('PresentationsQuote');

		$this->Category->id = $id;
		if (!$this->Category->exists()) {
			throw new NotFoundException(__('Invalid category'));
		}else{
		$this->request->onlyAllow('post', 'delete');
		
			$items = $this->Item->find('all',array('conditions' => array('Item.' . 'category_id' => $id)));
			$imgcateory = $this->ImagesCategory->find('all',array('conditions' => array('ImagesCategory.' . 'category_id' => $id)));
			foreach ($items as $it) {
				$presentacion = $this->Presentation->find('all',array('conditions' => array('Presentation.' . 'item_id' => $it['Item']['id'])));
				foreach ($presentacion as $pres) { 
					$ImagesPresen = $this->ImagesPresentation->find('all',array('conditions' => array('ImagesPresentation.' . 'presentation_id' => $pres['Presentation']['id'])));
					foreach ($ImagesPresen as $imgpr) {
						$this->ImagesPresentation->id = $imgpr['ImagesPresentation']['id'];
						$this->ImagesPresentation->delete();
					}
					$presentationsQuote = $this->PresentationsQuote->find('all',array('conditions' => array('PresentationsQuote.' . 'presentation_id' => $pres['Presentation']['id'])));
					foreach ($presentationsQuote as $prequote) {
						$this->PresentationsQuote->id = $prequote['PresentationsQuote']['id'];
						$this->PresentationsQuote->delete();
					}
				 $this->Presentation->id = $pres['Presentation']['id'];
				$this->Presentation->delete();
				}
				$this->Item->id = $it['Item']['id'];
				$this->Item->delete();
			}
			foreach ($imgcateory as $imgca) {
				$this->ImagesCategory->id = $imgca['ImagesCategory']['id'];
				$this->ImagesCategory->delete();
			}
			if ($this->Category->delete()){
			$this->Session->setFlash(__('Category deleted'));
			$this->redirect(array('action' => 'select'));
			}
		}
	
		$this->Session->setFlash(__('Category was not deleted'));
	}
		//conulta propias
	public function select(){
		$this->Category->recursive = 2;
			$menu = array('menu' => array('id' => 'productos','inferior'=>'#096357','superior'=>'#22A18C','color'=>'#FFF'));
		//menu
		$this->Session->write($menu);

       $this->loadModel('Supermarket');
       $this->loadModel('Recipe');
       $this->loadModel('Ad');
       $this->loadModel('Carousel');
		//$options = array('conditions' => array('limit' => 2));
       	$Supermarket = $this->Supermarket->find('all');

		$Category = $this->Category->find('all');
		$Recipe = $this->Recipe->find('first',array('order' => 'Recipe.created DESC'));
		$Ad = $this->Ad->find('first',array('order' => 'Ad.created DESC'));
		$Carousel = $this->Carousel->find('all',array('conditions'=>"Carousel.number = 'Dos'"));
		$this->set(compact('Supermarket','Category','Benefit','Recipe','Ad','Carousel'));
	}
	public function select1($id = null){
		//$this->Category->recursive = 2;
		$menu = array('menu' => array('id' => 'productos','inferior'=>'#096357','superior'=>'#22A18C','color'=>'#FFF'));
		//menu
		$this->Session->write($menu);

       $this->loadModel('Recipe');
       $this->loadModel('Ad');
       $this->loadModel('Carousel');
		

		if(!$this->Category->exists($id)){
			$this->redirect(array('controller' => 'Categories', 'action' => 'select'));
			//throw new NotFoundException(__('Invalid Category'));
		}else{

		$Category = $this->Category->find('first',array('conditions' => array('Category.' . $this->Category->primaryKey => $id),'recursive' => 4));
		$Recipe = $this->Recipe->find('first',array('order' => 'Recipe.created DESC'));
		$Recipes1 = $this->Recipe->find('all',array('order'=>'Recipe.id DESC'));
		$Ad = $this->Ad->find('first',array('order' => 'Ad.created DESC'));
		$Carousel = $this->Carousel->find('all',array('conditions'=>"Carousel.number = 'Dos'"));
		$this->set(compact('Category','Recipe','Recipes1','Ad','Carousel'));

		}
	}
}
