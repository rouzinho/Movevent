<?php
App::uses('AppController', 'Controller');
/**
 * ServiceUsers Controller
 *
 * @property ServiceUser $ServiceUser
 * @property PaginatorComponent $Paginator
 */
class ServiceUsersController extends AppController {

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
		$this->ServiceUser->recursive = 0;
		$this->set('serviceUsers', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->ServiceUser->exists($id)) {
			throw new NotFoundException(__('Invalid service user'));
		}
		$options = array('conditions' => array('ServiceUser.' . $this->ServiceUser->primaryKey => $id));
		$this->set('serviceUser', $this->ServiceUser->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->ServiceUser->create();
			if ($this->ServiceUser->save($this->request->data)) {
				$this->Session->setFlash(__('The service user has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The service user could not be saved. Please, try again.'));
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
		if (!$this->ServiceUser->exists($id)) {
			throw new NotFoundException(__('Invalid service user'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->ServiceUser->save($this->request->data)) {
				$this->Session->setFlash(__('The service user has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The service user could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('ServiceUser.' . $this->ServiceUser->primaryKey => $id));
			$this->request->data = $this->ServiceUser->find('first', $options);
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
		$this->ServiceUser->id = $id;
		if (!$this->ServiceUser->exists()) {
			throw new NotFoundException(__('Invalid service user'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->ServiceUser->delete()) {
			$this->Session->setFlash(__('The service user has been deleted.'));
		} else {
			$this->Session->setFlash(__('The service user could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
