<?php
App::uses('Commentary', 'Model');

/**
 * Commentary Test Case
 *
 */
class CommentaryTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.commentary',
		'app.destination',
		'app.type',
		'app.state',
		'app.region',
		'app.country',
		'app.terminal',
		'app.city',
		'app.user',
		'app.user_group',
		'app.comment',
		'app.foruma',
		'app.forumq',
		'app.group',
		'app.login_token',
		'app.client',
		'app.service',
		'app.promotion',
		'app.clients_destination',
		'app.clients_terminal',
		'app.destinations_terminal',
		'app.park',
		'app.point',
		'app.activity',
		'app.activities_destination',
		'app.photo'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Commentary = ClassRegistry::init('Commentary');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Commentary);

		parent::tearDown();
	}

}
