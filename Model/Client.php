<?php
App::uses('AppModel', 'Model');
/**
 * Client Model
 *
 * @property Service $Service
 * @property Promotion $Promotion
 * @property Destination $Destination
 * @property Terminal $Terminal
 */
class Client extends AppModel {

/**
 * Display field
 *
 * @var string
 */
	public $displayField = 'name';


	//The Associations below have been created with all possible keys, those that are not needed can be removed

/**
 * belongsTo associations
 *
 * @var array
 */
	public $belongsTo = array(
		'Service' => array(
			'className' => 'Service',
			'foreignKey' => 'service_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);

/**
 * hasMany associations
 *
 * @var array
 */
	public $hasMany = array(
		'Promotion' => array(
			'className' => 'Promotion',
			'foreignKey' => 'client_id',
			'dependent' => false,
			'conditions' => '',
			'fields' => '',
			'order' => '',
			'limit' => '',
			'offset' => '',
			'exclusive' => '',
			'finderQuery' => '',
			'counterQuery' => ''
		)
	);


/**
 * hasAndBelongsToMany associations
 *
 * @var array
 */
	public $hasAndBelongsToMany = array(
		'Destination' => array(
			'className' => 'Destination',
			'joinTable' => 'clients_destinations',
			'foreignKey' => 'client_id',
			'associationForeignKey' => 'destination_id',
			'unique' => 'keepExisting',
			'conditions' => '',
			'fields' => '',
			'order' => '',
			'limit' => '',
			'offset' => '',
			'finderQuery' => '',
		),
		'Terminal' => array(
			'className' => 'Terminal',
			'joinTable' => 'clients_terminals',
			'foreignKey' => 'client_id',
			'associationForeignKey' => 'terminal_id',
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
