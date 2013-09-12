<?php
App::uses('AppController', 'Controller');
/**
 * Recipes Controller
 *
 * @property Recipe $Recipe
 */
class RecipesController extends AppController {

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->Recipe->recursive = 0;
		$this->set('recipes', $this->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Recipe->exists($id)) {
			throw new NotFoundException(__('Invalid recipe'));
		}
		$options = array('conditions' => array('Recipe.' . $this->Recipe->primaryKey => $id));
		$this->set('recipe', $this->Recipe->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add($vista=null) {
		if ($this->request->is('post')) {
			$this->Recipe->create();
			if ($this->Recipe->save($this->request->data)) {
				$this->Session->setFlash(__('The recipe has been saved'));
				switch ($vista) {
					case 'index':
						$this->redirect(array('controller'=>'Benefits','action' => 'select'));
						break;
					case 'index':
						$this->redirect(array('controller'=>'Benefits','action' => 'select'));
						break;
					default:
						$this->redirect(array('action' => 'select'));
						break;
				}
				
			} else {
				$this->Session->setFlash(__('The recipe could not be saved. Please, try again.'));
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
	public function edit($id = null,$vista=null) {
		if (!$this->Recipe->exists($id)) {
			throw new NotFoundException(__('Invalid recipe'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->Recipe->save($this->request->data)) {
				$this->Session->setFlash(__('The recipe has been saved'));
				switch ($vista) {
					case 'index':
						$this->redirect(array('controller'=>'Benefits','action' => 'select'));
						break;
					case 'index':
						$this->redirect(array('controller'=>'Benefits','action' => 'select'));
						break;
					default:
						$this->redirect(array('action' => 'select'));
						break;
				}
			} else {
				$this->Session->setFlash(__('The recipe could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Recipe.' . $this->Recipe->primaryKey => $id));
			$this->request->data = $this->Recipe->find('first', $options);
		}
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null,$vista) {
		$this->loadModel('ImagesRecipe');
		$this->Recipe->id = $id;
		if (!$this->Recipe->exists()) {
			throw new NotFoundException(__('Invalid recipe'));
		}else{
			$this->request->onlyAllow('post', 'delete');
			$imgrecipe = $this->ImagesRecipe->find('all',array('conditions' => array('ImagesRecipe.' . 'recipe_id' => $id)));
			foreach ($imgrecipe as $img) {
				$this->ImagesRecipe->id = $img['ImagesRecipe']['id'];
				$this->ImagesRecipe->delete();
			}
			if ($this->Recipe->delete()) {
			$this->Session->setFlash(__('Recipe deleted'));
			switch ($vista) {
					case 'index':
						$this->redirect(array('controller'=>'Benefits','action' => 'select'));
						break;
					case 'recipes':
						$this->redirect(array('action' => 'select'));
						break;
					default:
						$this->redirect(array('action' => 'select'));
						break;
				}
			}
		}
		
		
		$this->Session->setFlash(__('Recipe was not deleted'));
	}



//conulta propias
	public function select(){
		//menu
		$menu = array('menu' => array(
    'id' => 'recetas','inferior'=>'#1A8DA2','superior'=>'#28C3DE','color'=>'#FFF'));
		//menu
		$this->Session->write($menu);
		////////


		$this->loadModel('Ad');
		$this->loadModel('Carousel');
	//$conditions = "id = 6";
//$this->paginate = array('limit' => 20, 'page' => 1,'conditions' => $conditions);
		$this->paginate = array(
                                'order' => array('Recipe.id' => 'DESC'), 
                                'recursive' => 1,
                                "limit" => 4,
                                'page' => 1
                                //'conditions' => $conditions
                                );
         
        
        $Recipe = $this->paginate("Recipe");
        $Carousel = $this->Carousel->find('all',array('conditions'=>"Carousel.number = 'Dos'"));
        $Ad = $this->Ad->find('all',array('order' => 'Ad.created DESC', 'limit' => 3));
        $this->set(compact("Recipe","Ad","Carousel"));
	}




	public function select1($id=null,$pagina){
				//menu
		$menu = array('menu' => array(
    'id' => 'recetas','inferior'=>'#1A8DA2','superior'=>'#28C3DE','color'=>'#FFF'));
		//menu
		$this->Session->write($menu);
		////////
	  $this->loadModel('Ad');
	  $this->loadModel('Carousel');
	  if(!$this->Recipe->exists($id)){


			$this->redirect(array('controller' => 'Recipes', 'action' => 'select'));
			//throw new NotFoundException(__('Invalid Category'));
		}else{

					$this->paginate = array(
                                'order' => array('Recipe.id' => 'DESC'), 
                                'recursive' => 1,
                                "limit" => 1,
                                'page' => $pagina
                                //'conditions' => $conditions
                                );

		$Recipe = $this->paginate("Recipe");
		$Carousel = $this->Carousel->find('all',array('conditions'=>"Carousel.number = 'Dos'"));
		$Ad = $this->Ad->find('all',array('order' => 'Ad.created DESC', 'limit' => 3));
		$this->set(compact('Recipe','Ad','Carousel'));
		}
	}
}
