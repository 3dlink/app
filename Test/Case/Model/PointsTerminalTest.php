<?php
App::uses('PointsTerminal', 'Model');

/**
 * PointsTerminal Test Case
 *
 */
class PointsTerminalTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.points_terminal',
		'app.terminal',
		'app.country',
		'app.destination',
		'app.type',
		'app.state',
		'app.region',
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
		'app.park',
		'app.point',
		'app.activity',
		'app.activities_destination',
		'app.client',
		'app.service',
		'app.promotion',
		'app.clients_destination',
		'app.clients_terminal',
		'app.destinations_terminal',
		'app.cities_terminal'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->PointsTerminal = ClassRegistry::init('PointsTerminal');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->PointsTerminal);

		parent::tearDown();
	}

}
