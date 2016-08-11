<?php
App::uses('CommentariesController', 'Controller');

/**
 * CommentariesController Test Case
 *
 */
class CommentariesControllerTest extends ControllerTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.commentary',
		'app.destination',
		'app.type',
		'app.state',
		'app.region',
		'app.country',
		'app.terminal',
		'app.city',
		'app.user',
		'app.user_group',
		'app.comment',
		'app.foruma',
		'app.forumq',
		'app.group',
		'app.login_token',
		'app.client',
		'app.service',
		'app.promotion',
		'app.clients_destination',
		'app.clients_terminal',
		'app.destinations_terminal',
		'app.park',
		'app.point',
		'app.activity',
		'app.activities_destination',
		'app.photo'
	);

/**
 * testIndex method
 *
 * @return void
 */
	public function testIndex() {
		$this->markTestIncomplete('testIndex not implemented.');
	}

/**
 * testView method
 *
 * @return void
 */
	public function testView() {
		$this->markTestIncomplete('testView not implemented.');
	}

/**
 * testAdd method
 *
 * @return void
 */
	public function testAdd() {
		$this->markTestIncomplete('testAdd not implemented.');
	}

/**
 * testEdit method
 *
 * @return void
 */
	public function testEdit() {
		$this->markTestIncomplete('testEdit not implemented.');
	}

/**
 * testDelete method
 *
 * @return void
 */
	public function testDelete() {
		$this->markTestIncomplete('testDelete not implemented.');
	}

}
