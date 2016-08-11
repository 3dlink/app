<?php
App::uses('Type', 'Model');

/**
 * Type Test Case
 *
 */
class TypeTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.type',
		'app.destination',
		'app.category',
		'app.comment',
		'app.user',
		'app.user_group',
		'app.foruma',
		'app.forumq',
		'app.group',
		'app.login_token',
		'app.point',
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
		$this->Type = ClassRegistry::init('Type');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Type);

		parent::tearDown();
	}

}
