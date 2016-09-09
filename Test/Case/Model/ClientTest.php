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
		'app.country',
		'app.destination',
		'app.type',
		'app.state',
		'app.region',
		'app.city',
		'app.terminal',
		'app.clients_terminal',
		'app.destinations_terminal',
		'app.user',
		'app.user_group',
		'app.commentary',
		'app.photo',
		'app.foruma',
		'app.forumq',
		'app.group',
		'app.groups_user',
		'app.login_token',
		'app.park',
		'app.point',
		'app.activity',
		'app.activities_destination',
		'app.clients_destination',
		'app.promotion'
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
