<?php
App::uses('Couchsurfing', 'Model');

/**
 * Couchsurfing Test Case
 *
 */
class CouchsurfingTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.couchsurfing',
		'app.user',
		'app.event'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Couchsurfing = ClassRegistry::init('Couchsurfing');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Couchsurfing);

		parent::tearDown();
	}

}
