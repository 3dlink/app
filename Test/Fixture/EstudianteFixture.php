<?php
/**
 * EstudianteFixture
 *
 */
class EstudianteFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false, 'key' => 'primary'),
		'nombre' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 50, 'collate' => 'utf8_bin', 'charset' => 'utf8'),
		'apellido' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 50, 'collate' => 'utf8_bin', 'charset' => 'utf8'),
		'carrera_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false),
		'materia_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false),
		'indexes' => array(
			
		),
		'tableParameters' => array('charset' => 'utf8', 'collate' => 'utf8_bin', 'engine' => 'InnoDB')
	);

/**
 * Records
 *
 * @var array
 */
	public $records = array(
		array(
			'id' => 1,
			'nombre' => 'Lorem ipsum dolor sit amet',
			'apellido' => 'Lorem ipsum dolor sit amet',
			'carrera_id' => 1,
			'materia_id' => 1
		),
	);

}
