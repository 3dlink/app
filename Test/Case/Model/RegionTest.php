<?php
App::uses('Region', 'Model');

/**
 * Region Test Case
 *
 */
class RegionTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.region',
		'app.country',
		'app.city',
		'app.state',
		'app.destination',
		'app.type',
		'app.park',
		'app.activity',
		'app.activities_destination',
		'app.point',
		'app.terminal',
		'app.cities_terminal',
		'app.points_terminal',
		'app.client',
		'app.service',
		'app.promotion',
		'app.clients_destination',
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
		'app.photo'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Region = ClassRegistry::init('Region');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Region);

		parent::tearDown();
	}

}
