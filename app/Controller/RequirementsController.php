<?php
App::uses('AppController', 'Controller');
/**
 * Requirements Controller
 *
 * @property Requirement $Requirement
 */
class RequirementsController extends AppController {

/**
 * index method
 *
 * @return void
 */
	public $helpers = array('FormEnum');
	
	public function index() {
		$this->layout = 'ajax';
		$this->Requirement->recursive = 0;
		$this->set('requirements', $this->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		$this->layout = 'ajax';
		if (!$this->Requirement->exists($id)) {
			throw new NotFoundException(__('Invalid requirement'));
		}
		$options = array('conditions' => array('Requirement.' . $this->Requirement->primaryKey => $id));
		$this->set('requirement', $this->Requirement->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		$this->layout = 'ajax';
		if ($this->request->is('post')) {
			$this->Requirement->create();
			if ($this->Requirement->save($this->request->data)) {
				$this->Session->setFlash(__('The requirement has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The requirement could not be saved. Please, try again.'));
			}
		}
		$charges = $this->Requirement->Charge->find('list');
		$this->set(compact('charges'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		$this->layout = 'ajax';
		if (!$this->Requirement->exists($id)) {
			throw new NotFoundException(__('Invalid requirement'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->Requirement->save($this->request->data)) {
				$this->Session->setFlash(__('The requirement has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The requirement could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Requirement.' . $this->Requirement->primaryKey => $id));
			$this->request->data = $this->Requirement->find('first', $options);
		}
		$charges = $this->Requirement->Charge->find('list');
		$this->set(compact('charges'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->layout = 'ajax';
		$this->Requirement->id = $id;
		if (!$this->Requirement->exists()) {
			throw new NotFoundException(__('Invalid requirement'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->Requirement->delete()) {
			$this->Session->setFlash(__('Requirement deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Requirement was not deleted'));
		$this->redirect(array('action' => 'index'));
	}

		public function select1(){
			$this->Session->write('cargo.id',$this->request->data['Requirement']['id']);
			$this->redirect(array('action' => 'select'));
		}

		public function select(){
			
	  $id = $this->Session->read('cargo.id');
	   ///funcion  q valide q id no pueda ser pos 
	  $filename=null;
	  if ($this->request->is('post')) {
	  	//Subir archivos
			if ($this->request->data['Requirement']['curriculum']) {
				
				$file = new File($this->request->data['Requirement']['curriculum']['tmp_name']);
				$path_parts = pathinfo($this->request->data['Requirement']['curriculum']['name']);
				$ext = $path_parts['extension'];
				
				
				if ($ext != 'docx' /* && $ext != 'doc' && $ext != 'gif' && $ext != 'png'*/) {
					$this->Session->setFlash('Solo puedes subir docx.');
					$this->render();
				} else {
					$date = $this->request->data['Requirement']['curriculum']['name'];
					$filename = $this->request->data['Requirement']['charge_id'].$this->request->data['Requirement']['email'].$date;
					
					$data = $file->read();			
					$file = new File(WWW_ROOT.'img/requirement/curriculum/'.$filename,true);
					$file->write($data);
					$file->close();
				}
			}
			//Fin subir archivos
			
			$this->request->data['Requirement']['curriculum'] = $filename;


			$this->Requirement->create();
			if ($this->Requirement->save($this->request->data)) {
				$this->Session->setFlash(__('The requirement has been saved'));
				$this->redirect(array('controller' => 'Branches','action' => 'select'));
			} else {
				$this->Session->setFlash(__('The requirement could not be saved. Please, try again.'));
			}
		}
		else{
			 $this->loadModel('Charge');
			if(!$this->Charge->exists($id)){
				$this->redirect(array('controller' => 'Branches', 'action' => 'select'));
				
			}else{
			$Charge = $this->Charge->find('all',array('conditions' => array('Charge.' . $this->Charge->primaryKey => $id)));
			$this->set(compact('Charge'));
			}
		}
		
	}

}