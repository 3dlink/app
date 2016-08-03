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
		'app.foruma',
		'app.group',
		'app.point'
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
