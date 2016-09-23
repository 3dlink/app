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

	public $uses = array('Park','Country','State','Point');

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
		if ($this->request->is('post')) {
			$this->Point->create();
			if ($this->Point->save($this->request->data)) {
				$this->Session->setFlash(__('The point has been saved.'), 'default', array('class' => 'success_message'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The point could not be saved. Please, try again.'), 'default', array('class' => 'error_message'));
			}
		}
		$points = $this->Park->Point->find('all', array('conditions' => array(array('Park.' . $this->Park->primaryKey => $id))));
		$this->set('points',$points);
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
		$countries = $this->Park->Country->find('list');
		$countries[0] = "--Select--";
		ksort($countries);
		$this->set('countries',$countries);
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
		$countries = $this->Point->Country->find('list');
		$countries[0] = "--Select--";
		ksort($countries);

		$states = $this->State->find('list', array('conditions'=> array('State.country_id = '.$this->request->data['Country']['id'])));
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
