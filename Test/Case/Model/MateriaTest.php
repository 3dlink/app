<?php
App::uses('Materia', 'Model');

/**
 * Materia Test Case
 *
 */
class MateriaTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.materia',
		'app.estudiante',
		'app.carrera',
		'app.estudiantes_materia'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Materia = ClassRegistry::init('Materia');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Materia);

		parent::tearDown();
	}

}
