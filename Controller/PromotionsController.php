<?php
App::uses('AppController', 'Controller');
/**
 * Promotions Controller
 *
 * @property Promotion $Promotion
 * @property PaginatorComponent $Paginator
 */
class PromotionsController extends AppController {

/**
 * Components
 *
 * @var array
 */
	public $components = array('Paginator');
	public $uses = array('Promotion','Destination','Country','Region','State','City','Client');

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->layout="admin";
		$this->Promotion->recursive = 0;
		$this->set('promotions', $this->Paginator->paginate());
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
		if (!$this->Promotion->exists($id)) {
			throw new NotFoundException(__('Invalid promotion'));
		}
		$options = array('conditions' => array('Promotion.' . $this->Promotion->primaryKey => $id));
		$this->set('promotion', $this->Promotion->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		$this->layout="admin";
		if ($this->request->is('post')) {
			$this->Promotion->create();
			if ($this->Promotion->save($this->request->data)) {
				$this->Session->setFlash(__('The promotion has been saved.'), 'default', array('class' => 'success_message'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The promotion could not be saved. Please, try again.'), 'default', array('class' => 'error_message'));
			}
		}
		$clients = $this->Client->find('list');
		$countries = $this->Country->find('list');
		$countries[0] = "--Select--";
		ksort($countries);
		$this->set(compact('clients','countries'));
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
		if (!$this->Promotion->exists($id)) {
			throw new NotFoundException(__('Invalid promotion'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Promotion->save($this->request->data)) {
				$this->Session->setFlash(__('The promotion has been saved.'), 'default', array('class' => 'success_message'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The promotion could not be saved. Please, try again.'), 'default', array('class' => 'error_message'));
			}
		} else {
			$options = array('conditions' => array('Promotion.' . $this->Promotion->primaryKey => $id));
			$this->request->data = $this->Promotion->find('first', $options);
		}
		$clients = $this->Promotion->Client->find('list');
		$this->set(compact('clients'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->Promotion->id = $id;
		if (!$this->Promotion->exists()) {
			throw new NotFoundException(__('Invalid promotion'));
		}
		//$this->request->allowMethod('post', 'delete');
		if ($this->Promotion->delete()) {
			$this->Session->setFlash(__('The promotion has been deleted.'), 'default', array('class' => 'success_message'));
		} else {
			$this->Session->setFlash(__('The promotion could not be deleted. Please, try again.'), 'default', array('class' => 'error_message'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
