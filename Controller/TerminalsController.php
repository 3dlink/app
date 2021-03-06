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

	public $uses = array('Terminal','Destination','Commentary','Usermgmt.User','Country','State','City','Point');

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
		if ($this->request->is('post')) {
			$this->Point->create();
			if ($this->Point->save($this->request->data)) {
				$this->Session->setFlash(__('The point has been saved.'), 'default', array('class' => 'success_message'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The point could not be saved. Please, try again.'), 'default', array('class' => 'error_message'));
			}
		}
		$points = $this->Terminal->Point->find('all', array('conditions' => array(array('Terminal.' . $this->Terminal->primaryKey => $id))));
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
			$this->Terminal->create();
			if ($this->Terminal->save($this->request->data)) {
				$this->Session->setFlash(__('The terminal has been saved.'), 'default', array('class' => 'success_message'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The terminal could not be saved. Please, try again.'), 'default', array('class' => 'error_message'));
			}
		}
		$clients = $this->Terminal->Client->find('list');
		$destinations = $this->Terminal->Destination->find('list');
		$destcities = $this->City->find('list');
		$destcities[0] = "--Select--";
		ksort($destcities);
		$countries = $this->Terminal->Country->find('list');
		$countries[0] = "--Select--";
		ksort($countries);
		// $cities = $this->Terminal->City->find('list');
		$this->set(compact('clients', 'destinations','destcities','states','countries'));
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
		if (!$this->Terminal->exists($id)) {
			throw new NotFoundException(__('Invalid terminal'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Terminal->save($this->request->data)) {
				$this->Session->setFlash(__('The terminal has been saved.'), 'default', array('class' => 'success_message'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The terminal could not be saved. Please, try again.'), 'default', array('class' => 'error_message'));
			}
		} else {
			$options = array('conditions' => array('Terminal.' . $this->Terminal->primaryKey => $id));
			$this->request->data = $this->Terminal->find('first', $options);
		}
		$clients = $this->Terminal->Client->find('list');
		$destinations = $this->Terminal->Destination->find('list');
		$destcities = $this->Terminal->City->find('list');
		$countries = $this->Terminal->Country->find('list');
		$countries[0] = "--Select--";
		ksort($countries);
		//$regions = $this->Terminal->Region->find('list');
		$states = $this->Terminal->State->find('list');
		$cities = $this->Terminal->City->find('list');

		// $regions = $this->Region->find('list', array('conditions'=> array('Region.country_id = '.$this->request->data['Country']['id'])));
		// $states = $this->State->find('list', array('conditions'=> array('State.region_id = '.$this->request->data['Country']['id'])));
		// $cities = $this->City->find('list', array('conditions'=> array('City.region_id = '.$this->request->data['Country']['id'])));
		

		$this->set(compact('clients', 'destinations','destcities','states','countries','regions','states','cities'));
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
		//$this->request->allowMethod('post', 'delete');
		if ($this->Terminal->delete()) {
			$this->Session->setFlash(__('The terminal has been deleted.'), 'default', array('class' => 'success_message'));
		} else {
			$this->Session->setFlash(__('The terminal could not be deleted. Please, try again.'), 'default', array('class' => 'error_message'));
		}
		return $this->redirect(array('action' => 'index'));
	}

	public function deleteDest(){
		$this->autoRender=false;

		if(isset($_POST['data'])){
			$data=$_POST['data'];
			if($this->Curso->delete($data['id_course'],true)){
				return true;
			}else{
				return false;
			}
		}
	}
}
