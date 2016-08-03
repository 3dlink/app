<?php
App::uses('AppController', 'Controller');
/**
 * Forumqs Controller
 *
 * @property Forumq $Forumq
 * @property PaginatorComponent $Paginator
 */
class ForumqsController extends AppController {

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
		$this->Forumq->recursive = 0;
		$this->set('forumqs', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Forumq->exists($id)) {
			throw new NotFoundException(__('Invalid forumq'));
		}
		$options = array('conditions' => array('Forumq.' . $this->Forumq->primaryKey => $id));
		$this->set('forumq', $this->Forumq->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Forumq->create();
			if ($this->Forumq->save($this->request->data)) {
				$this->Session->setFlash(__('The forumq has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The forumq could not be saved. Please, try again.'));
			}
		}
		$destinations = $this->Forumq->Destination->find('list');
		$users = $this->Forumq->User->find('list');
		$this->set(compact('destinations', 'users'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->Forumq->exists($id)) {
			throw new NotFoundException(__('Invalid forumq'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Forumq->save($this->request->data)) {
				$this->Session->setFlash(__('The forumq has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The forumq could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Forumq.' . $this->Forumq->primaryKey => $id));
			$this->request->data = $this->Forumq->find('first', $options);
		}
		$destinations = $this->Forumq->Destination->find('list');
		$users = $this->Forumq->User->find('list');
		$this->set(compact('destinations', 'users'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->Forumq->id = $id;
		if (!$this->Forumq->exists()) {
			throw new NotFoundException(__('Invalid forumq'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->Forumq->delete()) {
			$this->Session->setFlash(__('The forumq has been deleted.'));
		} else {
			$this->Session->setFlash(__('The forumq could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
