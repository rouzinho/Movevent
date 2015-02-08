<?php
App::uses('AppController', 'Controller');
/**
 * Couchsurfings Controller
 *
 * @property Couchsurfing $Couchsurfing
 * @property PaginatorComponent $Paginator
 */
class CouchsurfingsController extends AppController {

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
		$this->Couchsurfing->recursive = 0;
		$this->set('couchsurfings', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Couchsurfing->exists($id)) {
			throw new NotFoundException(__('Invalid couchsurfing'));
		}
		$options = array('conditions' => array('Couchsurfing.' . $this->Couchsurfing->primaryKey => $id));
		$this->set('couchsurfing', $this->Couchsurfing->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Couchsurfing->create();
			if ($this->Couchsurfing->save($this->request->data)) {
				$this->Session->setFlash(__('The couchsurfing has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The couchsurfing could not be saved. Please, try again.'));
			}
		}
		$users = $this->Couchsurfing->User->find('list');
		$events = $this->Couchsurfing->Event->find('list');
		$this->set(compact('users', 'events'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->Couchsurfing->exists($id)) {
			throw new NotFoundException(__('Invalid couchsurfing'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Couchsurfing->save($this->request->data)) {
				$this->Session->setFlash(__('The couchsurfing has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The couchsurfing could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Couchsurfing.' . $this->Couchsurfing->primaryKey => $id));
			$this->request->data = $this->Couchsurfing->find('first', $options);
		}
		$users = $this->Couchsurfing->User->find('list');
		$events = $this->Couchsurfing->Event->find('list');
		$this->set(compact('users', 'events'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->Couchsurfing->id = $id;
		if (!$this->Couchsurfing->exists()) {
			throw new NotFoundException(__('Invalid couchsurfing'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->Couchsurfing->delete()) {
			$this->Session->setFlash(__('The couchsurfing has been deleted.'));
		} else {
			$this->Session->setFlash(__('The couchsurfing could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
