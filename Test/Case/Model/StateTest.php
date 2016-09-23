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
		'app.city',
		'app.terminal',
		'app.cities_terminal',
		'app.point',
		'app.destination',
		'app.type',
		'app.park',
		'app.activity',
		'app.activities_destination',
		'app.commentary',
		'app.user',
		'app.user_group',
		'app.foruma',
		'app.forumq',
		'app.group',
		'app.groups_user',
		'app.login_token',
		'app.types_user',
		'app.photo',
		'app.promotion',
		'app.client',
		'app.service',
		'app.clients_destination',
		'app.clients_terminal',
		'app.destinations_terminal',
		'app.points_terminal'
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
