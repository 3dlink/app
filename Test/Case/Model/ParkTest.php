<?php
App::uses('Park', 'Model');

/**
 * Park Test Case
 *
 */
class ParkTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.park',
		'app.country',
		'app.city',
		'app.state',
		'app.region',
		'app.client',
		'app.service',
		'app.promotion',
		'app.destination',
		'app.type',
		'app.destinations_park',
		'app.activity',
		'app.activities_destination',
		'app.point',
		'app.terminal',
		'app.cities_terminal',
		'app.points_terminal',
		'app.clients_terminal',
		'app.destinations_terminal',
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
		'app.clients_destination'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Park = ClassRegistry::init('Park');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Park);

		parent::tearDown();
	}

}
