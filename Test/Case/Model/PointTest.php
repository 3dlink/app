<?php
App::uses('Point', 'Model');

/**
 * Point Test Case
 *
 */
class PointTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.point',
		'app.destination',
		'app.category',
		'app.comment',
		'app.user',
		'app.forumq',
		'app.foruma',
		'app.group'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Point = ClassRegistry::init('Point');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Point);

		parent::tearDown();
	}

}
