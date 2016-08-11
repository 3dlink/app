<?php
App::uses('AppModel', 'Model');
/**
 * Activity Model
 *
 * @property Destination $Destination
 */
class Activity extends AppModel {

/**
 * Display field
 *
 * @var string
 */
	public $displayField = 'name';


	//The Associations below have been created with all possible keys, those that are not needed can be removed

/**
 * hasAndBelongsToMany associations
 *
 * @var array
 */
	public $hasAndBelongsToMany = array(
		'Destination' => array(
			'className' => 'Destination',
			'joinTable' => 'activities_destinations',
			'foreignKey' => 'activity_id',
			'associationForeignKey' => 'destination_id',
			'unique' => 'keepExisting',
			'conditions' => '',
			'fields' => '',
			'order' => '',
			'limit' => '',
			'offset' => '',
			'finderQuery' => '',
		)
	);

}
