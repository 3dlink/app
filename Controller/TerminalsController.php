<?php
App::uses('AppController', 'Controller');
/**
 * Terminals Controller
 *
 * @property Terminal $Terminal
 * @property PaginatorComponent $Paginator
 */
class TerminalsController extends AppController {

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
		$this->Terminal->recursive = 0;
		$this->set('terminals', $this->Paginator->paginate());
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
		if (!$this->Terminal->exists($id)) {
			throw new NotFoundException(__('Invalid terminal'));
		}
		$options = array('conditions' => array('Terminal.' . $this->Terminal->primaryKey => $id));
		$this->set('terminal', $this->Terminal->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		$this->layout="admin";
		if ($this->request->is('post')) {
			$this->Terminal->create();
			if ($this->Terminal->save($this->request->data)) {
				$this->Session->setFlash(__('The terminal has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The terminal could not be saved. Please, try again.'));
			}
		}
		$clients = $this->Terminal->Client->find('list');
		$destinations = $this->Terminal->Destination->find('list');
		$states = $this->Terminal->State->find('list');
		$cities = $this->Terminal->City->find('list');
		$countries = $this->Terminal->Country->find('list');
		$this->set(compact('clients', 'destinations','cities','states','countries'));
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
		if (!$this->Terminal->exists($id)) {
			throw new NotFoundException(__('Invalid terminal'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Terminal->save($this->request->data)) {
				$this->Session->setFlash(__('The terminal has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The terminal could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Terminal.' . $this->Terminal->primaryKey => $id));
			$this->request->data = $this->Terminal->find('first', $options);
		}
		$clients = $this->Terminal->Client->find('list');
		$destinations = $this->Terminal->Destination->find('list');
		$states = $this->Terminal->State->find('list');
		$cities = $this->Terminal->City->find('list');
		$countries = $this->Terminal->Country->find('list');
		$this->set(compact('clients', 'destinations','cities','states','countries'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->layout="admin";
		$this->Terminal->id = $id;
		if (!$this->Terminal->exists()) {
			throw new NotFoundException(__('Invalid terminal'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->Terminal->delete()) {
			$this->Session->setFlash(__('The terminal has been deleted.'));
		} else {
			$this->Session->setFlash(__('The terminal could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
