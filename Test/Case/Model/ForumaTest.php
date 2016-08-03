<?php
App::uses('Foruma', 'Model');

/**
 * Foruma Test Case
 *
 */
class ForumaTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.foruma',
		'app.user',
		'app.comment',
		'app.destination',
		'app.category',
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
		$this->Foruma = ClassRegistry::init('Foruma');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Foruma);

		parent::tearDown();
	}

}
