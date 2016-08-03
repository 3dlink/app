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
		'app.terminal'
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
