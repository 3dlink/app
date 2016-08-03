<?php
App::uses('Promotion', 'Model');

/**
 * Promotion Test Case
 *
 */
class PromotionTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.promotion',
		'app.client',
		'app.service',
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
		$this->Promotion = ClassRegistry::init('Promotion');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Promotion);

		parent::tearDown();
	}

}
