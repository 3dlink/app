<?php
App::uses('Terminal', 'Model');

/**
 * Terminal Test Case
 *
 */
class TerminalTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.terminal',
		'app.client',
		'app.service',
		'app.promotion',
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
		'app.clients_destination',
		'app.destinations_terminal',
		'app.clients_terminal'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Terminal = ClassRegistry::init('Terminal');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Terminal);

		parent::tearDown();
	}

}
