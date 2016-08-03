<?php
App::uses('Service', 'Model');

/**
 * Service Test Case
 *
 */
class ServiceTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.service',
		'app.client',
		'app.promotion',
		'app.destination',
		'app.category',
		'app.comment',
		'app.user',
		'app.foruma',
		'app.forumq',
		'app.group',
		'app.point',
		'app.clients_destination',
		'app.terminal',
		'app.clients_terminal'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Service = ClassRegistry::init('Service');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Service);

		parent::tearDown();
	}

}
