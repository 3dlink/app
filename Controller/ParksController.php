<?php
App::uses('AppController', 'Controller');
/**
 * Parks Controller
 *
 * @property Park $Park
 * @property PaginatorComponent $Paginator
 */
class ParksController extends AppController {

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
		$this->layout="admin";
		$this->Park->recursive = 0;
		$this->set('parks', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		$this->layout="admin";
		if (!$this->Park->exists($id)) {
			throw new NotFoundException(__('Invalid park'));
		}
		$options = array('conditions' => array('Park.' . $this->Park->primaryKey => $id));
		$this->set('park', $this->Park->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		$this->layout="admin";
		if ($this->request->is('post')) {
			$this->Park->create();
			if ($this->Park->save($this->request->data)) {
				$this->Session->setFlash(__('The park has been saved.'), 'default', array('class' => 'success_message'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The park could not be saved. Please, try again.'), 'default', array('class' => 'error_message'));
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
		$this->layout="admin";
		if (!$this->Park->exists($id)) {
			throw new NotFoundException(__('Invalid park'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Park->save($this->request->data)) {
				$this->Session->setFlash(__('The park has been saved.'), 'default', array('class' => 'success_message'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The park could not be saved. Please, try again.'), 'default', array('class' => 'error_message'));
			}
		} else {
			$options = array('conditions' => array('Park.' . $this->Park->primaryKey => $id));
			$this->request->data = $this->Park->find('first', $options);
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
		$this->Park->id = $id;
		if (!$this->Park->exists()) {
			throw new NotFoundException(__('Invalid park'));
		}
		//$this->request->allowMethod('post', 'delete');
		if ($this->Park->delete()) {
			$this->Session->setFlash(__('The park has been deleted.'), 'default', array('class' => 'success_message'));
		} else {
			$this->Session->setFlash(__('The park could not be deleted. Please, try again.'), 'default', array('class' => 'error_message'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
