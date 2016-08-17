<?php
App::uses('AppController', 'Controller');
/**
 * Forumqs Controller
 *
 * @property Forumq $Forumq
 * @property PaginatorComponent $Paginator
 */
class ForumqsController extends AppController {

/**
 * Components
 *
 * @var array
 */
	public $components = array('Paginator');
	public $uses = array('Forumq','Foruma','Destination','Usermgmt.User');

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->layout="admin";
		$this->Forumq->recursive = 0;
		$this->set('forumqs', $this->Paginator->paginate());
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
		if (!$this->Forumq->exists($id)) {
			throw new NotFoundException(__('Invalid forumq'));
		}

		$options = array('conditions' => array('Forumq.' . $this->Forumq->primaryKey => $id));
		$forumq = $this->Forumq->find('first', $options);
		$this->set('forumq', $forumq);
		//$answers = $this->Foruma->find('list');


		if ($this->request->is('post')) {
			$this->Foruma->create();
			if ($this->Foruma->save($this->request->data)) {
				$this->Session->setFlash(__('The foruma has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('Could not be saved. Please, try again.'));
			}
		}
		// $commenters = array();
		// $var = $this->Foruma->find('all');

		$foruma = array();
		$foruma = $forumq['Foruma'];
		foreach ($foruma as $key => $value) {
			$user = $this->User->findById($value['user_id']);
			$user = $user['User'];
			$foruma[$key]['User']=$user;
		}
		$this->set('answers',$foruma);

		// foreach ($var as $item) {
			

		// 	$commenters = array_push($commenters, "answer" => $item['Foruma']['answer'],
		// 	    "username" => $item['User']['username'])
		// }
		// debug($commenters);
		// $this->set(compact('commenters'));

	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		$this->layout="admin";
		if ($this->request->is('post')) {
			$this->Forumq->create();
			if ($this->Forumq->save($this->request->data)) {
				$this->Session->setFlash(__('The forumq has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The forumq could not be saved. Please, try again.'));
			}
		}
		$destinations = $this->Forumq->Destination->find('list');
		$users = $this->Forumq->User->find('list');
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
		if (!$this->Forumq->exists($id)) {
			throw new NotFoundException(__('Invalid forumq'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Forumq->save($this->request->data)) {
				$this->Session->setFlash(__('The forumq has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The forumq could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Forumq.' . $this->Forumq->primaryKey => $id));
			$this->request->data = $this->Forumq->find('first', $options);
		}
		$destinations = $this->Forumq->Destination->find('list');
		$users = $this->Forumq->User->find('list');
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
		$this->Forumq->id = $id;
		if (!$this->Forumq->exists()) {
			throw new NotFoundException(__('Invalid forumq'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->Forumq->delete()) {
			$this->Session->setFlash(__('The forumq has been deleted.'));
		} else {
			$this->Session->setFlash(__('The forumq could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
