<?php
App::uses('AppController', 'Controller');
/**
 * Branches Controller
 *
 * @property Branch $Branch
 */
class BranchesController extends AppController {

/**
 * index method
 *
 * @return void
 */
public $helpers = array('FormEnum');
	public function index() {
		
		$this->Branch->recursive = 0;
		$this->set('branches', $this->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		
		if (!$this->Branch->exists($id)) {
			throw new NotFoundException(__('Invalid branch'));
		}
		$options = array('conditions' => array('Branch.' . $this->Branch->primaryKey => $id));
		$this->set('branch', $this->Branch->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add($vista) {
		
		if ($this->request->is('post')) {
			$this->Branch->create();
			if ($this->Branch->save($this->request->data)) {
				//$this->Session->setFlash(__('The branch has been saved'));
				switch ($vista) {
					case 'contactenos':
						$this->redirect(array('controller'=>'Consultations','action' => 'select'));
						break;
					case 'personal':
						$this->redirect(array('action' => 'select'));
						break;
					default:
						$this->redirect(array('action' => 'select'));
						break;
				}
				
			} else {
				$this->Session->setFlash(__('The branch could not be saved. Please, try again.'));
			}
		}
		$companies = $this->Branch->Company->find('list');
		$this->set(compact('companies'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null,$vista) {
		
		if (!$this->Branch->exists($id)) {
			throw new NotFoundException(__('Invalid branch'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->Branch->save($this->request->data)) {
				//$this->Session->setFlash(__('The branch has been saved'));
				switch ($vista) {
					case 'contactenos':
						$this->redirect(array('controller'=>'Consultations','action' => 'select'));
						break;
					case 'personal':
						$this->redirect(array('action' => 'select'));
						break;
					default:
						$this->redirect(array('action' => 'select'));
						break;
				}
			} else {
				$this->Session->setFlash(__('The branch could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Branch.' . $this->Branch->primaryKey => $id));
			$this->request->data = $this->Branch->find('first', $options);
		}
		$companies = $this->Branch->Company->find('list');
		$this->set(compact('companies'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null,$vista) {
		$this->loadModel('NewRequirement');
		$this->loadModel('Charge');
		$this->loadModel('Requirement');
		$this->Branch->id = $id;
		if (!$this->Branch->exists()) {
			throw new NotFoundException(__('Invalid branch'));
		}else{
				$this->request->onlyAllow('post', 'delete');
				$charge = $this->Charge->find('all',array('conditions' => array('Charge.' . 'branch_id' => $id)));
				foreach ($charge as $char) {
				$requerimiento = $this->Requirement->find('all',array('conditions' => array('Requirement.' . 'charge_id' => $char['Charge']['id'])));
					foreach ($requerimiento as $req) { 
					$this->Requirement->id = $req['Requirement']['id'];
					$this->Requirement->delete();
					}
				$this->Charge->id = $char['Charge']['id'];
				$this->Charge->delete();

			}
			$newreque = $this->NewRequirement->find('all',array('conditions' => array('NewRequirement.' . 'branch_id' => $id)));
				foreach ($newreque as $newr) {
					$this->NewRequirement->id = $newr['NewRequirement']['id'];
					$this->NewRequirement->delete();
					}
				}
		if ($this->Branch->delete()) {
			$this->Session->setFlash(__('Branch deleted'));
			switch ($vista) {
					case 'contactenos':
						$this->redirect(array('controller'=>'Consultations','action' => 'select'));
						break;
					case 'personal':
						$this->redirect(array('action' => 'select'));
						break;
					default:
						$this->redirect(array('action' => 'select'));
						break;
				}
		}
	
		$this->Session->setFlash(__('Branch was not deleted'));
		
	}
	public function select(){
				$menu1 = array('menu1' => array('id' => 'menu2'));

		//menu
		$this->Session->write($menu1);
		$menu = array('menu' => array('id' => 'mm','inferior'=>'','superior'=>'','color'=>''));
		//menu
		$this->Session->write($menu);
		////////
		$Branch = $this->Branch->find('all');
		$this->loadModel('Supermarket');
		$Supermarket = $this->Supermarket->find('all');	
		$this->set(compact('Branch','Supermarket'));
	}
	public function select1($id=null){
		$menu1 = array('menu1' => array('id' => 'menu2'));

		//menu
		$this->Session->write($menu1);

		
			//$menu = array('menu' => array('id' => 'beneficios','inferior'=>'','superior'=>'','color'=>''));
		$menu = array('menu' => array('id' => 'beneficios','inferior'=>'#096357','superior'=>'#22A18C','color'=>'#FFF'));
		//menu
		$this->Session->write($menu);
		//////////////
		$this->loadModel('NewRequirement');
		if (!$this->Branch->exists($id)) {
			$this->redirect(array('action' => 'select'));
			//throw new NotFoundException(__('Invalid branch'));
		}else{
		$this->loadModel('Supermarket');
		$Supermarket = $this->Supermarket->find('all');		
		$Branch = $this->Branch->find('all',array('conditions' => array('Branch.' . $this->Branch->primaryKey => $id),'recursive'  => 1));
		$this->set(compact('Branch','Supermarket'));
		}
	}
}
