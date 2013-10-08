<?php
App::uses('AppController', 'Controller');
App::uses('CakeEmail', 'Network/Email');
/**
 * NewRequirements Controller
 *
 * @property NewRequirement $NewRequirement
 */
class NewRequirementsController extends AppController {

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->NewRequirement->recursive = 0;
		$this->set('newRequirements', $this->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->NewRequirement->exists($id)) {
			throw new NotFoundException(__('Invalid new requirement'));
		}
		$options = array('conditions' => array('NewRequirement.' . $this->NewRequirement->primaryKey => $id));
		$this->set('newRequirement', $this->NewRequirement->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->NewRequirement->create();
			if ($this->NewRequirement->save($this->request->data)) {
				//$this->Session->setFlash(__('The new requirement has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The new requirement could not be saved. Please, try again.'));
			}
		}
		$branches = $this->NewRequirement->Branch->find('list');
		$this->set(compact('branches'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->NewRequirement->exists($id)) {
			throw new NotFoundException(__('Invalid new requirement'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->NewRequirement->save($this->request->data)) {
				//$this->Session->setFlash(__('The new requirement has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The new requirement could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('NewRequirement.' . $this->NewRequirement->primaryKey => $id));
			$this->request->data = $this->NewRequirement->find('first', $options);
		}
		$branches = $this->NewRequirement->Branch->find('list');
		$this->set(compact('branches'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->NewRequirement->id = $id;
		if (!$this->NewRequirement->exists()) {
			throw new NotFoundException(__('Invalid new requirement'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->NewRequirement->delete()) {
			$this->Session->setFlash(__('New requirement deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('New requirement was not deleted'));
		$this->redirect(array('action' => 'index'));
	}



	
	public function select(){
		$menu = array('menu' => array('id' => 'vv','inferior'=>'','superior'=>'','color'=>''));
		//menu
		$this->Session->write($menu);
		//////////////

		///funcion q valide q id no pueda ser pos
		$filename=null;
		if ($this->request->is('post')) {
		//Subir archivos
		if ($this->request->data['NewRequirement']['curriculum']) {

		$file = new File($this->request->data['NewRequirement']['curriculum']['tmp_name']);
		$path_parts = pathinfo($this->request->data['NewRequirement']['curriculum']['name']);
		$ext = $path_parts['extension'];


		if ($ext != 'docx' /* && $ext != 'doc' && $ext != 'gif' && $ext != 'png'*/) {
		$this->Session->setFlash('Solo puedes subir archivos .docx');
		//$this->render();
		$this->redirect(array('controller'=>'Branches','action'=>'select1',$this->request->data['NewRequirement']['branch_id']));
		} else {
		$date = $this->request->data['NewRequirement']['curriculum']['name'];
		$filename = $this->request->data['NewRequirement']['branch_id'].$this->request->data['NewRequirement']['email'].$date;

		$data = $file->read();	
		$file = new File(WWW_ROOT.'img/Newrequirement/curriculum/'.$filename,true);
		$file->write($data);
		$file->close();
		}
		}
		//Fin subir archivos

		$this->request->data['NewRequirement']['curriculum'] = $filename;


		$this->NewRequirement->create();
		if ($this->NewRequirement->save($this->request->data)) {
			
			
		//$this->Session->setFlash(__('The newrequirement has been saved'));
		$this->redirect(array('action' => 'email'));
		} else {
		$this->Session->setFlash(__('The newrequirement could not be saved. Please, try again.'));
		$this->redirect(array('controller' => 'Branches','action' => 'select1',$data['NewRequirement']['branch_id']));
		}
		}
		else{

		$this->redirect(array('controller' => 'Branches', 'action' => 'select'));

		}

		}


		public function email(){

		$newrequirement = $this->NewRequirement->find('first',array('order' => 'NewRequirement.created DESC'));
			
		$datos = array('newrequirement' => array('datos' => $newrequirement));

		//menu
		$this->Session->write($datos);
		$this->Email = new CakeEmail();
		$this->Email->from(array('oscar_7938074@hotmail.com' => 'Avicola Santarosa'));
        $this->Email->to('oscar_7938074@hotmail.com');
        $this->Email->subject('REQUERIMIENTO DE PERSONA');
        $this->Email->attachments(array(WWW_ROOT."img/Newrequirement/curriculum/".$newrequirement['NewRequirement']['curriculum']));
        $this->Email->template('newrequirements');
        $this->Email->emailFormat('html');
        $val=null;
        if($this->Email->send()){
		  $this->redirect(array('controller' => 'Branches','action' => 'select'));
		}else{
		  $val="Mensaje no enviado";
		}
		// $this->set(compact('val'));
		}

}