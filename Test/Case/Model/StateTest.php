<?php
App::uses('State', 'Model');

/**
 * State Test Case
 *
 */
class StateTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.state',
		'app.region',
		'app.country',
		'app.destination',
		'app.type',
		'app.city',
		'app.terminal',
		'app.client',
		'app.service',
		'app.promotion',
		'app.clients_destination',
		'app.clients_terminal',
		'app.destinations_terminal',
		'app.user',
		'app.user_group',
		'app.commentary',
		'app.photo',
		'app.foruma',
		'app.forumq',
		'app.group',
		'app.login_token',
		'app.park',
		'app.comment',
		'app.point',
		'app.activity',
		'app.activities_destination'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->State = ClassRegistry::init('State');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->State);

		parent::tearDown();
	}

}
