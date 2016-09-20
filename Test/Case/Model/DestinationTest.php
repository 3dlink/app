<?php
App::uses('Destination', 'Model');

/**
 * Destination Test Case
 *
 */
class DestinationTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.destination',
		'app.type',
		'app.state',
		'app.region',
		'app.country',
		'app.terminal',
		'app.city',
		'app.user',
		'app.user_group',
		'app.commentary',
		'app.photo',
		'app.foruma',
		'app.forumq',
		'app.group',
		'app.groups_user',
		'app.login_token',
		'app.types_user',
		'app.cities_terminal',
		'app.point',
		'app.points_terminal',
		'app.client',
		'app.service',
		'app.promotion',
		'app.clients_destination',
		'app.clients_terminal',
		'app.destinations_terminal',
		'app.park',
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
		$this->Destination = ClassRegistry::init('Destination');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Destination);

		parent::tearDown();
	}

}
