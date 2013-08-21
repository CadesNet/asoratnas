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
				$this->Session->setFlash(__('The quote has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The quote could not be saved. Please, try again.'));
			}
		}
		$items = $this->Quote->Item->find('list');
		$this->set(compact('items'));
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
				$this->Session->setFlash(__('The quote has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The quote could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Quote.' . $this->Quote->primaryKey => $id));
			$this->request->data = $this->Quote->find('first', $options);
		}
		$items = $this->Quote->Item->find('list');
		$this->set(compact('items'));
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
	}
	//conulta propias
	public function select($id = null,$id2 = null){
	   $this->loadModel('Category');
       $this->loadModel('Recipe');
       $this->loadModel('Item');
       $this->loadModel('Ad');
       $this->loadModel('Carousel');
		

		if(!$this->Category->exists($id) and !$this->Item->exists($id2)){
			$this->redirect(array('controller' => 'Categories', 'action' => 'select'));
			//throw new NotFoundException(__('Invalid Category'));
		}else{

		$Category = $this->Category->find('all',array('conditions' => array('Category.' . $this->Category->primaryKey => $id)));
		$Item = $this->Item->find('all',array('conditions' => array('Item.' . $this->Item->primaryKey => $id2)));
		//$this->set('item', $this->Item->find('all', $options));
		$Recipe = $this->Recipe->find('first',array('order' => 'Recipe.created DESC'));
		$Recipes1 = $this->Recipe->find('all');
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

		if ($this->request->is('post')) {
	   		if (!empty($this->data)) {		
			$id =  $this->request->data['Quote']['id'];
			$img = $this->request->data['Quote']['img'];
			$name = $this->request->data['Quote']['name']; 
			$cantidad = $this->request->data['Quote']['cantidad'];
			if(is_numeric($cantidad) and $cantidad > 0){

	        $this->loadModel('Item');
					if(!$this->Item->exists($id)){
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

	}

	public function cotizar(){
		$this->loadModel('ItemsQuote');
		if(count($this->Session->read('pp'))>0){


			if ($this->request->is('post')) {
				$this->Quote->create();
				if ($this->Quote->save($this->request->data)) {
					$this->Session->setFlash(__('The quote has been saved'));

					$quote = $this->Quote->find('first',array('order' => 'Quote.created DESC'));

						foreach ($this->Session->read('pp') as $value) {
							$data['ItemsQuote']['id'] =  null; 
							$data['ItemsQuote']['item_id'] = $value['id'];
							$data['ItemsQuote']['quote_id'] = $quote['Quote']['id'];
							$data['ItemsQuote']['detail'] = $value['detalle'];
							$data['ItemsQuote']['amount'] = $value['cantidad'];

							$this->ItemsQuote->save($data);
						}
						$this->Session->delete('pp');

					$this->redirect(array('action' => 'select'));
				} else {
					$this->Session->setFlash(__('The quote could not be saved. Please, try again.'));
				}		
			}
		}else{
			$this->redirect(array('action' => 'select1'));
		}
		
	}
}
