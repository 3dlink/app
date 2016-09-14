<?php
App::uses('AppController', 'Controller');
/**
 * Points Controller
 *
 * @property Point $Point
 * @property PaginatorComponent $Paginator
 */
class PointsController extends AppController {

/**
 * Components
 *
 * @var array
 */
	public $components = array('Paginator');
	public $uses = array('Point','Destination','Country','Region','State','City','Terminal');

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->layout="admin";
		$this->Point->recursive = 0;
		$this->set('points', $this->Paginator->paginate());
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
		if (!$this->Point->exists($id)) {
			throw new NotFoundException(__('Invalid point'));
		}
		$options = array('conditions' => array('Point.' . $this->Point->primaryKey => $id));
		$this->set('point', $this->Point->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		$this->layout="admin";
		$aux = array();
		if ($this->request->is('post')) {
			$this->Point->create();
			if ($this->Point->save($this->request->data)) {
				$this->Session->setFlash(__('The point has been saved.'));

				// if ($this->request->data['Point']['terminal_id'] != null || $this->request->data['Point']['terminal_id'] != '0'){
				// 	$aux['terminal_id'] = $this->request->data['Point']['terminal_id'];
				// 	$aux['point_id'] = $this->Point->getLastInsertID();
				// 	$this->PointsTerminal->save($aux);	
				// }

				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The point could not be saved. Please, try again.'));
			}
		}
		$countries = $this->Point->Country->find('list');
		//$destinations = $this->Point->Destination->find('list');
		$this->set(compact('countries'));
	}


	public function list_ajax($back, $next, $value){
		$this->autoRender = false;
		$back = strtolower($back);
		$result = $this->$next->find('all', array('recursive'=> -1, 'fields'=>array('id','name'), 'conditions' => array($back.'_id'=>$value)));
		
		return json_encode($result);
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
		if (!$this->Point->exists($id)) {
			throw new NotFoundException(__('Invalid point'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Point->save($this->request->data)) {
				$this->Session->setFlash(__('The point has been saved.'));


				// if ($this->request->data['Point']['terminal_id'] != null || $this->request->data['Point']['terminal_id'] != '0'){
				// 	$aux['terminal_id'] = $this->request->data['Point']['terminal_id'];
				// 	$aux['point_id'] = $this->Point->getLastInsertID();
				// 	$this->PointsTerminal->save($aux);	
				// }

				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The point could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Point.' . $this->Point->primaryKey => $id));
			$this->request->data = $this->Point->find('first', $options);
		}
		$countries = $this->Point->Country->find('list');
		$this->set(compact('countries'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->Point->id = $id;
		if (!$this->Point->exists()) {
			throw new NotFoundException(__('Invalid point'));
		}
		//$this->request->allowMethod('post', 'delete');
		if ($this->Point->delete()) {
			$this->Session->setFlash(__('The point has been deleted.'));
		} else {
			$this->Session->setFlash(__('The point could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
