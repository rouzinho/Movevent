<?php
App::uses('Carpool', 'Model');

/**
 * Carpool Test Case
 *
 */
class CarpoolTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.carpool',
		'app.event',
		'app.user'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Carpool = ClassRegistry::init('Carpool');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Carpool);

		parent::tearDown();
	}

}
