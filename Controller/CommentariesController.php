<?php
App::uses('AppController', 'Controller');
/**
 * Commentaries Controller
 *
 * @property Commentary $Commentary
 * @property PaginatorComponent $Paginator
 */
class CommentariesController extends AppController {

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
		$this->Commentary->recursive = 0;
		$this->set('commentaries', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Commentary->exists($id)) {
			throw new NotFoundException(__('Invalid commentary'));
		}
		$options = array('conditions' => array('Commentary.' . $this->Commentary->primaryKey => $id));
		$this->set('commentary', $this->Commentary->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Commentary->create();
			if ($this->Commentary->save($this->request->data)) {
				$this->Session->setFlash(__('The commentary has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The commentary could not be saved. Please, try again.'));
			}
		}
		$destinations = $this->Commentary->Destination->find('list');
		$users = $this->Commentary->User->find('list');
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
		if (!$this->Commentary->exists($id)) {
			throw new NotFoundException(__('Invalid commentary'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Commentary->save($this->request->data)) {
				$this->Session->setFlash(__('The commentary has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The commentary could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Commentary.' . $this->Commentary->primaryKey => $id));
			$this->request->data = $this->Commentary->find('first', $options);
		}
		$destinations = $this->Commentary->Destination->find('list');
		$users = $this->Commentary->User->find('list');
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
		$this->Commentary->id = $id;
		if (!$this->Commentary->exists()) {
			throw new NotFoundException(__('Invalid commentary'));
		}
		//$this->request->allowMethod('post', 'delete');
		if ($this->Commentary->delete()) {
			$this->Session->setFlash(__('The commentary has been deleted.'));
		} else {
			$this->Session->setFlash(__('The commentary could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
