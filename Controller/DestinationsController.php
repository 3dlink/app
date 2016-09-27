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
	public $uses = array('Destination','Commentary','Usermgmt.User','Country','Region','State','City','Point');

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



		// $securyval = $this->Commentary->find('first', array('fields' => array('sum(Commentary.security) as sum, count(Commentary.id) as num'),'conditions' => array('Destination.id ='.$id)));
		// $num = $securyval[0]['num'] + 1;
		// $securyval = $securyval[0]['sum'] + $destination['Destination']['fi_security'];
		// $securyval = $securyval/$num;

		// $budval = $this->Commentary->find('first', array('fields' => array('sum(Commentary.budget) as sum, count(Commentary.id) as num'),'conditions' => array('Destination.id ='.$id)));
		// $num = $budval[0]['num'] + 1;
		// $budval = $budval[0]['sum'] + $destination['Destination']['fi_budget'];
		// $budval = $budval/$num;

		// $envval = $this->Commentary->find('first', array('fields' => array('sum(Commentary.environment) as sum, count(Commentary.id) as num'),'conditions' => array('Destination.id ='.$id)));
		// $num = $envval[0]['num'] + 1;
		// $envval = ($envval[0]['sum'] + $destination['Destination']['fi_security'])/$num;
		// debug($envval);

		// $ranked = ($envval+$securyval+$budval)/3;




		// $destination['Destination']['ranking'] = $ranked;

		$this->set(compact('securyval', 'budval', 'envval','ranked'));

		//////////////////////////////
		if ($this->request->is('post')) {
			
			//debug($this->request->data);
			if($this->request->data['Commentary']['security']!=null && $this->request->data['Commentary']['budget']!=null && $this->request->data['Commentary']['environment']!=null)
			{
				$this->Commentary->create();
				if ($this->Commentary->save($this->request->data['Commentary']))
				{
					$this->Session->setFlash(__('The commentary has been saved.'), 'default', array('class' => 'success_message'));
					$data = $this->request->data;
					//debug($data);
					$securyval = $this->Commentary->find('first', array('fields' => array('sum(Commentary.security) as sum, count(Commentary.id) as num'),'conditions' => array('Destination.id ='.$id)));
					$num = $securyval[0]['num'] + 1;
					$securyval = ($securyval[0]['sum'] + $destination['Destination']['fi_security'])/$num;

					$budval = $this->Commentary->find('first', array('fields' => array('sum(Commentary.budget) as sum, count(Commentary.id) as num'),'conditions' => array('Destination.id ='.$id)));
					$num = $budval[0]['num'] + 1;
					$budval = ($budval[0]['sum'] + $destination['Destination']['fi_budget'])/$num;
					

					$envval = $this->Commentary->find('first', array('fields' => array('sum(Commentary.environment) as sum, count(Commentary.id) as num'),'conditions' => array('Destination.id ='.$id)));
					$num = $envval[0]['num'] + 1;
					$envval = ($envval[0]['sum'] + $destination['Destination']['fi_security'])/$num;
					
					$ranked = ($envval+$securyval+$budval)/3;

					$destination['Destination']['ranking'] = $ranked;
					$destination['Destination']['budget'] = $budval;
					$destination['Destination']['security'] = $securyval;
					$destination['Destination']['environment'] = $envval;

					$this->Destination->create();
					$this->Destination->save($destination);
					return $this->redirect(array('action' => 'index'));
				}
				else 
				{
					$this->Session->setFlash(__('The commentary could not be saved. Please, try again.'), 'default', array('class' => 'error_message'));
				}
			}
			else
			{
				unset($this->request->data['Commentary']);
			}

			if($this->request->data['Point']['name']!=null && $this->request->data['Point']['lat']!=null && $this->request->data['Point']['longitude']!=null && $this->request->data['Point']['price']!=null && $this->request->data['Point']['payment']!=null && $this->request->data['Point']['schedule']!=null) 
			{
				$this->Point->create();
				if ($this->Point->save($this->request->data['Point'])) {
					$this->Session->setFlash(__('The point has been saved.'), 'default', array('class' => 'success_message'));
					return $this->redirect(array('action' => 'index'));
				} else {
					$this->Session->setFlash(__('The point could not be saved. Please, try again.'), 'default', array('class' => 'error_message'));
				}
			}
			else
			{
				unset($this->request->data['Point']);
			}
		}

		$destinations = $this->Commentary->Destination->find('list');
		$users = $this->Commentary->User->find('list');
		$this->set(compact('destinations', 'users'));

		$points = $this->Destination->Point->find('all', array('conditions' => array(array('Destination.' . $this->Destination->primaryKey => $id))));
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
			$this->Destination->create();
			$data = $this->request->data;
			$securyval = $data['Destination']['security'];			
			$budval = $data['Destination']['budget'];
			$envval = $data['Destination']['environment'];

			$data['Destination']['fi_security'] = $securyval;			
			$data['Destination']['fi_budget'] = $budval;
			$data['Destination']['fi_environment'] = $envval;

			$ranked = ($securyval+$budval+$envval)/3;
			$data['Destination']['ranking'] = $ranked;
			$data['Destination']['fi_ranking'] = $ranked;

			if ($this->Destination->save($data)) {
				$this->Session->setFlash(__('The destination has been saved.'), 'default', array('class' => 'success_message'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The destination could not be saved. Please, try again.'), 'default', array('class' => 'error_message'));
			}
		}
		$types = $this->Destination->Type->find('list');
		$countries = $this->Destination->Country->find('list');
		$countries[0] = "--Select--";
		ksort($countries);
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
				$this->Session->setFlash(__('The destination has been saved.'), 'default', array('class' => 'success_message'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The destination could not be saved. Please, try again.'), 'default', array('class' => 'error_message'));
			}
		} else {
			$options = array('conditions' => array('Destination.' . $this->Destination->primaryKey => $id));
			$this->request->data = $this->Destination->find('first', $options);
		}
		$types = $this->Destination->Type->find('list');
		$countries = $this->Destination->Country->find('list');
		$countries[0] = "--Select--";
		ksort($countries);
		//$parks = $this->Destination->Park->find('list');
		//$parks = $this->Park->find('list', array('conditions'=> array('Park.id = '.$this->request->data['Destination']['park_id'])));
		$activities = $this->Destination->Activity->find('list');
		$clients = $this->Destination->Client->find('list');
		$terminals = $this->Destination->Terminal->find('list');

		$regions = $this->Region->find('list', array('conditions'=> array('Region.country_id = '.$this->request->data['Country']['id'])));
		$states = $this->State->find('list', array('conditions'=> array('State.region_id = '.$this->request->data['Country']['id'])));
		$cities = $this->City->find('list', array('conditions'=> array('City.region_id = '.$this->request->data['Country']['id'])));
		$parks = $this->Destination->Park->find('list', array('conditions'=> array('Park.country_id = '.$this->request->data['Country']['id'])));

		$this->set(compact('types', 'countries', 'parks', 'activities', 'clients', 'terminals','regions','states','cities'));
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
			$this->Session->setFlash(__('The destination has been deleted.'), 'default', array('class' => 'success_message'));
		} else {
			$this->Session->setFlash(__('The destination could not be deleted. Please, try again.'), 'default', array('class' => 'error_message'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
