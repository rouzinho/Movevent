<?php
App::uses('AppController', 'Controller');
/**
 * InformationUsers Controller
 *
 * @property InformationUser $InformationUser
 * @property PaginatorComponent $Paginator
 */
class InformationUsersController extends AppController {

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
		$this->InformationUser->recursive = 0;
		$this->set('informationUsers', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->InformationUser->exists($id)) {
			throw new NotFoundException(__('Invalid information user'));
		}
		$options = array('conditions' => array('InformationUser.' . $this->InformationUser->primaryKey => $id));
		$this->set('informationUser', $this->InformationUser->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->InformationUser->create();
			if ($this->InformationUser->save($this->request->data)) {
				$this->Session->setFlash(__('The information user has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The information user could not be saved. Please, try again.'));
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
		if (!$this->InformationUser->exists($id)) {
			throw new NotFoundException(__('Invalid information user'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->InformationUser->save($this->request->data)) {
				$this->Session->setFlash(__('The information user has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The information user could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('InformationUser.' . $this->InformationUser->primaryKey => $id));
			$this->request->data = $this->InformationUser->find('first', $options);
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
		$this->InformationUser->id = $id;
		if (!$this->InformationUser->exists()) {
			throw new NotFoundException(__('Invalid information user'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->InformationUser->delete()) {
			$this->Session->setFlash(__('The information user has been deleted.'));
		} else {
			$this->Session->setFlash(__('The information user could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
