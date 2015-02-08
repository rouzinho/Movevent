<?php
App::uses('AppController', 'Controller');
/**
 * Carpools Controller
 *
 * @property Carpool $Carpool
 * @property PaginatorComponent $Paginator
 */
class CarpoolsController extends AppController {

/**
 * Components
 *
 * @var array
 */
	public $components = array('Paginator');

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->layout="headerfooterwithoutconnect"; 
		$this->Carpool->recursive = 0;
		$this->set('carpools', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Carpool->exists($id)) {
			throw new NotFoundException(__('Invalid carpool'));
		}
		$options = array('conditions' => array('Carpool.' . $this->Carpool->primaryKey => $id));
		$this->set('carpool', $this->Carpool->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Carpool->create();
			if ($this->Carpool->save($this->request->data)) {
				$this->Session->setFlash(__('The carpool has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The carpool could not be saved. Please, try again.'));
			}
		}
		$events = $this->Carpool->Event->find('list');
		$users = $this->Carpool->User->find('list');
		$this->set(compact('events', 'users'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->Carpool->exists($id)) {
			throw new NotFoundException(__('Invalid carpool'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Carpool->save($this->request->data)) {
				$this->Session->setFlash(__('The carpool has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The carpool could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Carpool.' . $this->Carpool->primaryKey => $id));
			$this->request->data = $this->Carpool->find('first', $options);
		}
		$events = $this->Carpool->Event->find('list');
		$users = $this->Carpool->User->find('list');
		$this->set(compact('events', 'users'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->Carpool->id = $id;
		if (!$this->Carpool->exists()) {
			throw new NotFoundException(__('Invalid carpool'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->Carpool->delete()) {
			$this->Session->setFlash(__('The carpool has been deleted.'));
		} else {
			$this->Session->setFlash(__('The carpool could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
