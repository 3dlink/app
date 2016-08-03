<?php
App::uses('Client', 'Model');

/**
 * Client Test Case
 *
 */
class ClientTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.client',
		'app.service',
		'app.promotion',
		'app.destination',
		'app.category',
		'app.comment',
		'app.user',
		'app.foruma',
		'app.forumq',
		'app.group',
		'app.point',
		'app.clients_destination',
		'app.terminal',
		'app.clients_terminal'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Client = ClassRegistry::init('Client');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Client);

		parent::tearDown();
	}

}
