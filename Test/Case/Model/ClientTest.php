<?php
App::uses('Client', 'Model');

/**
 * Client Test Case
 *
 */
class ClientTestCase extends CakeTestCase {
/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array('app.client', 'app.user', 'app.group', 'app.project_assignment', 'app.project');

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Client = ClassRegistry::init('Client');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Client);

		parent::tearDown();
	}

}
