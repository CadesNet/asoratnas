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
	public function select($id = null,$img = null, $cantidad=null){
       $this->loadModel('Quote');
       $this->loadModel('Item');
		if(!$this->Item->exists($id)){
			$this->redirect(array('controller' => 'Items', 'action' => 'select'));
			//throw new NotFoundException(__('Invalid Category'));
		}else{
		$array=array('gato' => 'perro',
         'mesa' => 'silla',
         'alto' => 'bajo',
         'fijo' => 'móvil',
         );
		print_r($array);
		$items = array('item' => array( 'id' => array($id => array('img' => $img, 'cantidad' => $cantidad))));
		
		$this->Session->write($items);
		//muestra el contenido 
		//$this->Session->read('Persona.colorOjos');

		//$valores = array(1,2,3,4,5,6);
		//$this->Items->find('all',array('conditions'=>array('NOT'=>array('Item.id' => $valores),'Modelo.columna2' => 'valor2')))

		//$Category = $this->Category->find('all',array('conditions' => array('Category.' . $this->Category->primaryKey => $id),'recursive'  => 2));
		//$this->set('item', $this->Item->find('all', $options));
//Recipe = $this->Recipe->find('first',array('order' => 'Recipe.created DESC'));
		//$this->set(compact('Category','Recipe'));
		//$this->redirect(array('controller' => ''))
		}
		
		
	}
}
