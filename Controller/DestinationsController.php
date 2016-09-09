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
	public $uses = array('Destination','Commentary','Usermgmt.User','Country','Region','State','City');

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
		//$this->set('destination', $this->Destination->find('first', $options));
		$destination = $this->Destination->find('first',$options);
		$this->set('destination', $destination);



		///////////////////////////
		if ($this->request->is('post')) {
			$this->Commentary->create();
			// debug($this->request->data);die;
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

		///////////////////////////
		$comments = array();
		$comments = $destination['Commentary'];
		foreach ($comments as $key => $value) {
			$user = $this->User->findById($value['user_id']);
			$user = $user['User'];
			$comments[$key]['User']=$user;
			# code...
		}
		$this->set('comments',$comments);

		$securyval = $this->Commentary->find('first', array('fields' => array('sum(Commentary.security) as sum, count(Commentary.id) as num'),'conditions' => array('Destination.id ='.$id)));
		$num = $securyval[0]['num'] + 1;
		$securyval = $securyval[0]['sum'] + $destination['Destination']['security'];
		$securyval = $securyval/$num;

		$budval = $this->Commentary->find('first', array('fields' => array('sum(Commentary.budget) as sum, count(Commentary.id) as num'),'conditions' => array('Destination.id ='.$id)));
		$num = $budval[0]['num'] + 1;
		$budval = $budval[0]['sum'] + $destination['Destination']['budget'];
		$budval = $budval/$num;

		$envval = $this->Commentary->find('first', array('fields' => array('sum(Commentary.environment) as sum, count(Commentary.id) as num'),'conditions' => array('Destination.id ='.$id)));
		$num = $envval[0]['num'] + 1;
		$envval = $envval[0]['sum'] + $destination['Destination']['security'];
		$envval = $envval/$num;

		$ranked = ($envval+$securyval+$budval)/3;

		$this->set(compact('securyval', 'budval', 'envval','ranked'));
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

		// $states = $this->Destination->State->find('list');
		// $cities = $this->Destination->City->find('list');
		$countries = $this->Destination->Country->find('list');
		// $regions = $this->Destination->Region->find('list');
		$parks = $this->Destination->Park->find('list');
		$activities = $this->Destination->Activity->find('list');
		$clients = $this->Destination->Client->find('list');
		$terminals = $this->Destination->Terminal->find('list');
		$this->set(compact('types', 'countries', 'parks', 'activities', 'clients', 'terminals'));
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
		// $this->request->allowMethod('post', 'delete');
		if ($this->Destination->delete()) {
			$this->Session->setFlash(__('The destination has been deleted.'));
		} else {
			$this->Session->setFlash(__('The destination could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
