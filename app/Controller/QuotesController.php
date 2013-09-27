<?php
App::uses('AppController', 'Controller');
/**
 * Quotes Controller
 *
 * @property Quote $Quote
 */
class QuotesController extends AppController {

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->Quote->recursive = 0;
		$this->set('quotes', $this->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Quote->exists($id)) {
			throw new NotFoundException(__('Invalid quote'));
		}
		$options = array('conditions' => array('Quote.' . $this->Quote->primaryKey => $id));
		$this->set('quote', $this->Quote->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Quote->create();
			if ($this->Quote->save($this->request->data)) {
				//$this->Session->setFlash(__('The quote has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The quote could not be saved. Please, try again.'));
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
		if (!$this->Quote->exists($id)) {
			throw new NotFoundException(__('Invalid quote'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->Quote->save($this->request->data)) {
				//$this->Session->setFlash(__('The quote has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The quote could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Quote.' . $this->Quote->primaryKey => $id));
			$this->request->data = $this->Quote->find('first', $options);
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
		$this->Quote->id = $id;
		if (!$this->Quote->exists()) {
			throw new NotFoundException(__('Invalid quote'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->Quote->delete()) {
			$this->Session->setFlash(__('Quote deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Quote was not deleted'));
		$this->redirect(array('action' => 'index'));
	}//conulta propias
	public function select($id = null,$id2 = null,$id3=null){
		$menu = array('menu' => array('id' => 'productos','inferior'=>'#096357','superior'=>'#22A18C','color'=>'#FFF'));
		//menu
		$this->Session->write($menu);

	   $this->loadModel('Category');
       $this->loadModel('Recipe');
       $this->loadModel('Item');
       $this->loadModel('Presentation');
       $this->loadModel('Ad');
       $this->loadModel('Carousel');
		

		if(!$this->Category->exists($id) and !$this->Item->exists($id2) and !$this->presentation->exists($id3)){
			$this->redirect(array('controller' => 'Categories', 'action' => 'select'));
			//throw new NotFoundException(__('Invalid Category'));
		}else{
		$Category = $this->Category->find('first',array('conditions'=>array('Category.' . $this->Category->primaryKey => $id)));
		$Item = $this->Item->Presentation->find('first',array('conditions' => array('Item.' . $this->Item->primaryKey => $id2,'Presentation.' . $this->Presentation->primaryKey => $id3),'recursive'=>2));
		//$Item = $this->Item->find('all',array('conditions' => array('Item.' . $this->Item->primaryKey => $id2)));
		//$this->set('item', $this->Item->find('all', $options));
		$Recipe = $this->Recipe->find('first',array('order' => 'Recipe.created DESC'));
		$Recipes1 = $this->Recipe->find('all',array('order'=>'Recipe.id DESC'));
		$Ad = $this->Ad->find('first',array('order' => 'Ad.created DESC'));
		$Carousel = $this->Carousel->find('all',array('conditions'=>"Carousel.number = 'Dos'"));
		$this->set(compact('Category','Item','Recipe','Recipes1','Ad','Carousel'));

		}
	}

	 	public function modificar(){

	 		if ($this->request->is('post')) {
	   			if (!empty($this->data)) { 

	   					$id1 = $this->request->data['Quote']['id1'];
	   					$id =  $this->request->data['Quote']['id'];
						$img = $this->request->data['Quote']['img'];
						$name = $this->request->data['Quote']['name']; 
						$cantidad = $this->request->data['Quote']['numero'];
						$detalle = $this->request->data['Quote']['detalle'];

					if(is_numeric($cantidad) and $cantidad > 0){

					$va  = array('pp' => $this->Session->read('pp'));
					$this->Session->delete('pp');
					
					unset($va['pp'][$id1]);
     				$this->Session->write($va);	
			    	$items = array('pp' => array_merge(array($id => array('id'=> $id, 'img' => $img, 'name' => $name, 'cantidad' => $cantidad , 'detalle' => $detalle)),(array)$this->Session->read('pp')));
					$this->Session->write($items);
				 	
					
					}
			    }
			}
				$this->redirect(array('controller' => 'Quotes', 'action' => 'select1'));
	 	}

		public function quitar($id = null){
		
		$va  = array('pp' => $this->Session->read('pp'));
		$this->Session->delete('pp');
        unset($va['pp'][$id]);
     	$this->Session->write($va);

        $items = array('pp' => array_merge((array)$this->Session->read('pp')));
        $this->Session->delete('pp');
     	$this->Session->write($items);
		$this->redirect(array('controller' => 'Quotes', 'action' => 'select1')); 
		}
		public function select1(){
			$menu = array('menu' => array('id' => 'productos','inferior'=>'#096357','superior'=>'#22A18C','color'=>'#FFF'));
		//menu
		$this->Session->write($menu);

		if ($this->request->is('post')) {
	   		if (!empty($this->data)) {		
			$id =  $this->request->data['Quote']['id'];
			$img = $this->request->data['Quote']['img'];
			$name = $this->request->data['Quote']['name']; 
			$cantidad = $this->request->data['Quote']['cantidad'];
			if(is_numeric($cantidad) and $cantidad > 0){

	        $this->loadModel('Presentation');
					if(!$this->Presentation->exists($id)){
						$this->redirect(array('controller' => 'Cateories', 'action' => 'select'));
						//throw new NotFoundException(__('Invalid Category'));
					}else{
					$bool = false;
						if($this->Session->check('pp')){
				 			foreach ($this->Session->read('pp') as $valu) {
					        	if( $valu['id'] == $id){
					        		$bool = true;
								}

				        	}

				        }
				        if(!$bool){
						        $items =null;
						        if($this->Session->check('pp')){
						        		$items = array('pp' => array_merge(array($id => array('id'=> $id, 'img' => $img, 'name' => $name, 'cantidad' => $cantidad , 'detalle' => '')),(array)$this->Session->read('pp')));
						        }else{
						        	
						        		$items = array('pp' => array(0  => array('id'=> $id, 'img' => $img, 'name' => $name, 'cantidad' => $cantidad , 'detalle' => '')));
						        }
								$this->Session->write($items);
					 	}
				 	}
			}else{
					$this->redirect(array('controller' => 'Categories', 'action' => 'select'));	
			}
		}
		}else{
			if(!$this->Session->check('pp')){
				$this->redirect(array('controller' => 'Categories', 'action' => 'select'));
			}
		}

		$this->loadModel('Supermarket');
		$Supermarket = $this->Supermarket->find('all');	
		$this->set(compact('Supermarket'));


	}

	public function cotizar(){
		$menu1 = array('menu1' => array('id' => 'menu5'));

		//menu
		$this->Session->write($menu1);

		$menu = array('menu' => array(
    'id' => 'nnn','inferior'=>'#096357','superior'=>'#22A18C','color'=>'#FFF'));
		//menu
		$this->Session->write($menu);
		
		$this->loadModel('PresentationsQuote');
		if(count($this->Session->read('pp'))>0){

			if ($this->request->is('post')) {
				$this->Quote->create();
				if ($this->Quote->save($this->request->data)) {
					//$this->Session->setFlash(__('The quote has been saved'));

					$quote = $this->Quote->find('first',array('order' => 'Quote.created DESC'));
						$reporte=null;
						foreach ($this->Session->read('pp') as $value) {
							$data['PresentationsQuote']['id'] =  null; 
							$data['PresentationsQuote']['presentation_id'] = $value['id'];
							$data['PresentationsQuote']['quote_id'] = $quote['Quote']['id'];
							$data['PresentationsQuote']['detail'] = $value['detalle'];
							$data['PresentationsQuote']['amount'] = $value['cantidad'];
							//$this->PresentationsQuote->create();
							$this->PresentationsQuote->save($data);
						}
						$this->Session->delete('pp');

					$this->redirect(array('controller' => 'PresentationsQuotes', 'action' => 'export_xls'));

				} else {
					$this->Session->setFlash(__('The quote could not be saved. Please, try again.'));
				}		
			}
		}else{
			$this->redirect(array('controller' => 'Categories', 'action' => 'select'));
		}
		$this->loadModel('Supermarket');
		$Supermarket = $this->Supermarket->find('all');	
		$this->set(compact('Supermarket'));
		
	}
}
