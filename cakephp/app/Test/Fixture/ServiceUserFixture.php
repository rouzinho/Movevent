<?php
/**
 * ServiceUserFixture
 *
 */
class ServiceUserFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false, 'key' => 'primary'),
		'carpool' => array('type' => 'boolean', 'null' => false, 'default' => null),
		'car' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 16, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'model' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 16, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'type' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 16, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'num_place' => array('type' => 'integer', 'null' => true, 'default' => null, 'length' => 2, 'unsigned' => false),
		'smoker' => array('type' => 'boolean', 'null' => true, 'default' => null),
		'animal' => array('type' => 'boolean', 'null' => true, 'default' => null),
		'baggage' => array('type' => 'boolean', 'null' => true, 'default' => null),
		'lodge' => array('type' => 'boolean', 'null' => false, 'default' => null),
		'interest' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 64, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'description' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 64, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'indexes' => array(
			'PRIMARY' => array('column' => 'id', 'unique' => 1)
		),
		'tableParameters' => array('charset' => 'latin1', 'collate' => 'latin1_swedish_ci', 'engine' => 'InnoDB')
	);

/**
 * Records
 *
 * @var array
 */
	public $records = array(
		array(
			'id' => 1,
			'carpool' => 1,
			'car' => 'Lorem ipsum do',
			'model' => 'Lorem ipsum do',
			'type' => 'Lorem ipsum do',
			'num_place' => 1,
			'smoker' => 1,
			'animal' => 1,
			'baggage' => 1,
			'lodge' => 1,
			'interest' => 'Lorem ipsum dolor sit amet',
			'description' => 'Lorem ipsum dolor sit amet'
		),
	);

}
