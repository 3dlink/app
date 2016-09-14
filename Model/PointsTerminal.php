<?php
App::uses('AppModel', 'Model');
/**
 * PointsTerminal Model
 *
 * @property Terminal $Terminal
 * @property Point $Point
 */
class PointsTerminal extends AppModel {


	//The Associations below have been created with all possible keys, those that are not needed can be removed

/**
 * belongsTo associations
 *
 * @var array
 */
	public $belongsTo = array(
		'Terminal' => array(
			'className' => 'Terminal',
			'foreignKey' => 'terminal_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'Point' => array(
			'className' => 'Point',
			'foreignKey' => 'point_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);
}
