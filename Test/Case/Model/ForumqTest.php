<?php
App::uses('Forumq', 'Model');

/**
 * Forumq Test Case
 *
 */
class ForumqTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.forumq',
		'app.destination',
		'app.category',
		'app.comment',
		'app.user',
		'app.user_group',
		'app.foruma',
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
		$this->Forumq = ClassRegistry::init('Forumq');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Forumq);

		parent::tearDown();
	}

}
