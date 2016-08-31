<?php
App::uses('City', 'Model');

/**
 * City Test Case
 *
 */
class CityTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.city',
		'app.state',
		'app.region',
		'app.country',
		'app.destination',
		'app.type',
		'app.park',
		'app.commentary',
		'app.user',
		'app.user_group',
		'app.foruma',
		'app.forumq',
		'app.group',
		'app.groups_user',
		'app.login_token',
		'app.photo',
		'app.point',
		'app.activity',
		'app.activities_destination',
		'app.client',
		'app.service',
		'app.promotion',
		'app.clients_destination',
		'app.terminal',
		'app.clients_terminal',
		'app.destinations_terminal'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->City = ClassRegistry::init('City');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->City);

		parent::tearDown();
	}

}
