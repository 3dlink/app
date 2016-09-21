<?php
App::uses('Promotion', 'Model');

/**
 * Promotion Test Case
 *
 */
class PromotionTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.promotion',
		'app.client',
		'app.service',
		'app.country',
		'app.destination',
		'app.type',
		'app.state',
		'app.region',
		'app.city',
		'app.terminal',
		'app.cities_terminal',
		'app.point',
		'app.points_terminal',
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
		'app.types_user',
		'app.park',
		'app.activity',
		'app.activities_destination',
		'app.clients_destination'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Promotion = ClassRegistry::init('Promotion');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Promotion);

		parent::tearDown();
	}

}
