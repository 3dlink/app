<?php
App::uses('AppController', 'Controller');
/**
 * Groups Controller
 *
 * @property Group $Group
 * @property PaginatorComponent $Paginator
 */
class GroupsController extends AppController {

/**
 * Components
 *
 * @var array
 */
	public $components = array('Paginator');
	public $uses = array('Group','GroupsUser','Usermgmt.User');

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->layout="admin";
		$this->Group->recursive = 0;
		$this->set('groups', $this->Paginator->paginate());
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
		if (!$this->Group->exists($id)) {
			throw new NotFoundException(__('Invalid group'));
		}
		$options = array('conditions' => array('Group.' . $this->Group->primaryKey => $id));
		$this->set('group', $this->Group->find('first', $options));

		$usjoined = $this->GroupsUser->find('all');
		$peoplej = 0;
		$uscreator = $this->Group['user_id'];

		//$resultlist = array();

		foreach ($usjoined as $key => $value) {
			$user = $this->User->findById($value['GroupsUser']['user_id']);
			$user = $user['User'];
			$usjoined[$key]['User']=$user;
			$peoplej = $peoplej+1;
		}

		$this->set('usjoined',$usjoined);

		$this->set('peoplej',$peoplej);
		$this->set('uscreator',$uscreator);

	}

	public function join_g($group_id = null){
		$this->autoRender = false;
		$thisuser = $this->UserAuth->getUserId();

		$res = array('group_id'=>$group_id, 'user_id'=>$thisuser);

		if($this->GroupsUser->save($res)){
				$this->Session->setFlash(__('You have been added to the group.'));
		}else{
				$this->Session->setFlash(__('You could not be added to the group. Please try again.'));
		}
		
		return $this->redirect(array('action' => 'index'));
	}

	public function unjoin_g($group_id = null){
		$this->autoRender = false;
		$thisuser = $this->UserAuth->getUserId();

		$res = array('group_id'=>$group_id, 'user_id'=>$thisuser);
		$relacion_id = $this->GroupsUser->find('first',array('conditions'=>array('GroupsUser.group_id='.$group_id.' and GroupsUser.user_id ='.$thisuser)));
		// debug($relacion_id);die;
		$this->GroupsUser->id = $relacion_id['GroupsUser']['id'];

		if($this->GroupsUser->delete()){
				$this->Session->setFlash(__('You have been deleted from the group.'));
		}else{
				$this->Session->setFlash(__('You could not be deleted from the group. Please try again.'));
		}
		
		return $this->redirect(array('action' => 'index'));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		$this->layout="admin";
		if ($this->request->is('post')) {
			$this->Group->create();
			if ($this->Group->save($this->request->data)) {
				$this->Session->setFlash(__('The group has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The group could not be saved. Please, try again.'));
			}
		}
		$destinations = $this->Group->Destination->find('list');
		$users = $this->Group->User->find('list');
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
		$this->layout="admin";
		if (!$this->Group->exists($id)) {
			throw new NotFoundException(__('Invalid group'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Group->save($this->request->data)) {
				$this->Session->setFlash(__('The group has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The group could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Group.' . $this->Group->primaryKey => $id));
			$this->request->data = $this->Group->find('first', $options);
		}
		$destinations = $this->Group->Destination->find('list');
		$users = $this->Group->User->find('list');
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
		$this->Group->id = $id;
		if (!$this->Group->exists()) {
			throw new NotFoundException(__('Invalid group'));
		}
		//$this->request->allowMethod('post', 'delete');
		if ($this->Group->delete()) {
			$this->Session->setFlash(__('The group has been deleted.'));
		} else {
			$this->Session->setFlash(__('The group could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
