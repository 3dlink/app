<?php
App::uses('AppController', 'Controller');
/**
 * Forumas Controller
 *
 * @property Foruma $Foruma
 * @property PaginatorComponent $Paginator
 */
class ForumasController extends AppController {

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
		$this->Foruma->recursive = 0;
		$this->set('forumas', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Foruma->exists($id)) {
			throw new NotFoundException(__('Invalid foruma'));
		}
		$options = array('conditions' => array('Foruma.' . $this->Foruma->primaryKey => $id));
		$this->set('foruma', $this->Foruma->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Foruma->create();
			if ($this->Foruma->save($this->request->data)) {
				$this->Session->setFlash(__('The foruma has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The foruma could not be saved. Please, try again.'));
			}
		}
		$users = $this->Foruma->User->find('list');
		$forumqs = $this->Foruma->Forumq->find('list');
		$this->set(compact('users', 'forumqs'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->Foruma->exists($id)) {
			throw new NotFoundException(__('Invalid foruma'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Foruma->save($this->request->data)) {
				$this->Session->setFlash(__('The foruma has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The foruma could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Foruma.' . $this->Foruma->primaryKey => $id));
			$this->request->data = $this->Foruma->find('first', $options);
		}
		$users = $this->Foruma->User->find('list');
		$forumqs = $this->Foruma->Forumq->find('list');
		$this->set(compact('users', 'forumqs'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->Foruma->id = $id;
		if (!$this->Foruma->exists()) {
			throw new NotFoundException(__('Invalid foruma'));
		}
		//$this->request->allowMethod('post', 'delete');
		if ($this->Foruma->delete()) {
			$this->Session->setFlash(__('The foruma has been deleted.'));
		} else {
			$this->Session->setFlash(__('The foruma could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
