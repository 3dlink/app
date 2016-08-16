<?php
App::uses('AppController', 'Controller');
/**
 * Destinations Controller
 *
 * @property Destination $Destination
 * @property PaginatorComponent $Paginator
 */
class DestinationsController extends AppController {

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
		$this->Destination->recursive = 0;
		$this->set('destinations', $this->Paginator->paginate());
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
		if (!$this->Destination->exists($id)) {
			throw new NotFoundException(__('Invalid destination'));
		}
		$options = array('conditions' => array('Destination.' . $this->Destination->primaryKey => $id));
		$this->set('destination', $this->Destination->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		$this->layout="admin";
		if ($this->request->is('post')) {
			$this->Destination->create();
			if ($this->Destination->save($this->request->data)) {
				$this->Session->setFlash(__('The destination has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The destination could not be saved. Please, try again.'));
			}
		}
		$types = $this->Destination->Type->find('list');
		$states = $this->Destination->State->find('list');
		$cities = $this->Destination->City->find('list');
		$countries = $this->Destination->Country->find('list');
		$regions = $this->Destination->Region->find('list');
		$parks = $this->Destination->Park->find('list');
		$activities = $this->Destination->Activity->find('list');
		$clients = $this->Destination->Client->find('list');
		$terminals = $this->Destination->Terminal->find('list');
		$this->set(compact('types', 'states', 'cities', 'countries', 'regions', 'parks', 'activities', 'clients', 'terminals'));
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
		if (!$this->Destination->exists($id)) {
			throw new NotFoundException(__('Invalid destination'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Destination->save($this->request->data)) {
				$this->Session->setFlash(__('The destination has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The destination could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Destination.' . $this->Destination->primaryKey => $id));
			$this->request->data = $this->Destination->find('first', $options);
		}
		$types = $this->Destination->Type->find('list');
		$states = $this->Destination->State->find('list');
		$cities = $this->Destination->City->find('list');
		$countries = $this->Destination->Country->find('list');
		$regions = $this->Destination->Region->find('list');
		$parks = $this->Destination->Park->find('list');
		$activities = $this->Destination->Activity->find('list');
		$clients = $this->Destination->Client->find('list');
		$terminals = $this->Destination->Terminal->find('list');
		$this->set(compact('types', 'states', 'cities', 'countries', 'regions', 'parks', 'activities', 'clients', 'terminals'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->Destination->id = $id;
		if (!$this->Destination->exists()) {
			throw new NotFoundException(__('Invalid destination'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->Destination->delete()) {
			$this->Session->setFlash(__('The destination has been deleted.'));
		} else {
			$this->Session->setFlash(__('The destination could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
