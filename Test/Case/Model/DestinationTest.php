<?php
App::uses('Destination', 'Model');

/**
 * Destination Test Case
 *
 */
class DestinationTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.destination',
		'app.category',
		'app.comment',
		'app.user',
		'app.forumq',
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
		$this->Destination = ClassRegistry::init('Destination');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Destination);

		parent::tearDown();
	}

}
