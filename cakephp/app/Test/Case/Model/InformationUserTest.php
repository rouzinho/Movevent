<?php
App::uses('InformationUser', 'Model');

/**
 * InformationUser Test Case
 *
 */
class InformationUserTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.information_user',
		'app.user'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->InformationUser = ClassRegistry::init('InformationUser');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->InformationUser);

		parent::tearDown();
	}

}
