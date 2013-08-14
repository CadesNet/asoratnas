<?php
App::uses('AppController', 'Controller');
/**
 * ItemsQuotes Controller
 *
 * @property ItemsQuote $ItemsQuote
 */
class ItemsQuotesController extends AppController {

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->ItemsQuote->recursive = 0;
		$this->set('itemsQuotes', $this->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->ItemsQuote->exists($id)) {
			throw new NotFoundException(__('Invalid items quote'));
		}
		$options = array('conditions' => array('ItemsQuote.' . $this->ItemsQuote->primaryKey => $id));
		$this->set('itemsQuote', $this->ItemsQuote->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->ItemsQuote->create();
			if ($this->ItemsQuote->save($this->request->data)) {
				$this->Session->setFlash(__('The items quote has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The items quote could not be saved. Please, try again.'));
			}
		}
		$items = $this->ItemsQuote->Item->find('list');
		$quotes = $this->ItemsQuote->Quote->find('list');
		$this->set(compact('items', 'quotes'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->ItemsQuote->exists($id)) {
			throw new NotFoundException(__('Invalid items quote'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->ItemsQuote->save($this->request->data)) {
				$this->Session->setFlash(__('The items quote has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The items quote could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('ItemsQuote.' . $this->ItemsQuote->primaryKey => $id));
			$this->request->data = $this->ItemsQuote->find('first', $options);
		}
		$items = $this->ItemsQuote->Item->find('list');
		$quotes = $this->ItemsQuote->Quote->find('list');
		$this->set(compact('items', 'quotes'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null,$cantidad=null) {
		$this->ItemsQuote->id = $id;
		if (!$this->ItemsQuote->exists()) {
			throw new NotFoundException(__('Invalid items quote'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->ItemsQuote->delete()) {
			$this->Session->setFlash(__('Items quote deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Items quote was not deleted'));
		$this->redirect(array('action' => 'index'));
	}


	////////////
	public function select(){
		if(!empty($this->data)){

	
		$id = $this->data['id'];
		$img = $this->data['img'];
		$name = $this->data['name']; 
		$cantidad = $this->data['cantidad'];
		$this->autoRender = false;
       //$this->loadModel('Quote');
        $this->loadModel('Item');
		if(!$this->Item->exists($id)){
			//$this->redirect(array('controller' => 'Cateories', 'action' => 'select'));
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
        		$items = array('pp' => array_merge((array)$this->Session->read('pp') , array($id => array('id'=> $id, 'img' => $img, 'name' => $name, 'cantidad' => $cantidad , 'detalle' => ''))));
	
        }else{
        		$items = array('pp' => array($id => array('id'=> $id, 'img' => $img, 'name' => $name, 'cantidad' => $cantidad , 'detalle' => '')));
        }
		//$items =  $this->Session->read('item');
		/*$items = array('pp' => array('1' => array('id'=> 1,'img' => 'sdfsdf','name' => 'sss', 'cantidad' => 1 , 'detalle' => 'det1'),
									   'ssss' => array('id'=> 2, 'img' => 'img2','name' => 'sss',  'cantidad' => 2 , 'detalle' => 'det1'),
									   'sdsd' => array('id'=> 3, 'img' => 'img3', 'name' => 'sss', 'cantidad' => 3 , 'detalle' => 'det1'),
									   'hola' => array('id'=> 4, 'img' => 'img4', 'name' => 'sss', 'cantidad' => 4 , 'detalle' => 'det1'),
									   '5' => array('id'=> 5, 'img' => 'img5', 'name' => 'sss', 'cantidad' => 5 , 'detalle' => 'det1'),
									   '6' => array('id'=> 6, 'img' => 'img6','name' => 'sss',  'cantidad' => 6 , 'detalle' => 'det1')
									  )
					  );*/
		$this->Session->write($items);

		//$this->Session->delete('pp');
	
		//$va  = array('pp' => $this->Session->read('pp'));
		//$this->Session->destroy();
		//$this->Session->delete('pp');
		//$this->Session->destroy('pp');
        //unset($va['pp']["'".$id."'"]);
//unset($va['pp'][$id]);
     //	$this->Session->write($va);



	 	}

	//}
	 }
		
	}

    /*public function select1($id = null, $cantidad = null)
	{
		  $this->loadModel('Item');

		if(!$this->Item->exists($id)){
			$this->redirect(array('controller' => 'Items', 'action' => 'select'));
			//throw new NotFoundException(__('Invalid Category'));
		}else{
		$va  = array('pp' => $this->Session->read('pp'));

		//$this->Session->destroy();
		//$this->Session->delete('pp');
		//$this->Session->destroy('pp');
        //unset($va['pp']["'".$id."'"]);
        $items = array('pp' => array($id => array('cantidad' => $cantidad));
        $res = array_replace($va,$items);
        //unset($va['pp'][$id]);

     	$this->Session->write($res);

		}

		$this->redirect(array('controller' => 'ItemsQuotes', 'action' => 'select'));
	}
	public function cotizar($id = null){
    $this->loadModel('Item');

		if(!$this->Item->exists($id)){
			$this->redirect(array('controller' => 'Items', 'action' => 'select'));
			//throw new NotFoundException(__('Invalid Category'));
		}else{
		$va  = array('pp' => $this->Session->read('pp'));
		//$this->Session->destroy();
		//$this->Session->delete('pp');
		//$this->Session->destroy('pp');
        //unset($va['pp']["'".$id."'"]);
        unset($va['pp'][$id]);
     	$this->Session->write($va);

		}

		$this->redirect(array('controller' => 'ItemsQuotes', 'action' => 'select')); */
	}
}
