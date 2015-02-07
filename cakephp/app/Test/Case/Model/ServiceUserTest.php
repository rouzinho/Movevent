<?php
App::uses('ServiceUser', 'Model');

/**
 * ServiceUser Test Case
 *
 */
class ServiceUserTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.service_user',
		'app.user'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->ServiceUser = ClassRegistry::init('ServiceUser');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->ServiceUser);

		parent::tearDown();
	}

}
