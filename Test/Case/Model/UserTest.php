<?php
App::uses('User', 'Model');

/**
 * User Test Case
 *
 */
class UserTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.user',
		'app.user_group',
		'app.commentary',
		'app.destination',
		'app.type',
		'app.state',
		'app.region',
		'app.country',
		'app.terminal',
		'app.city',
		'app.cities_terminal',
		'app.client',
		'app.service',
		'app.promotion',
		'app.clients_destination',
		'app.clients_terminal',
		'app.destinations_terminal',
		'app.park',
		'app.forumq',
		'app.foruma',
		'app.group',
		'app.groups_user',
		'app.point',
		'app.activity',
		'app.activities_destination',
		'app.photo',
		'app.login_token',
		'app.types_user'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->User = ClassRegistry::init('User');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->User);

		parent::tearDown();
	}

}
