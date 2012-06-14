<?php
App::uses('ProjectAssignment', 'Model');

/**
 * ProjectAssignment Test Case
 *
 */
class ProjectAssignmentTestCase extends CakeTestCase {
/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array('app.project_assignment', 'app.project', 'app.client', 'app.user', 'app.group');

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->ProjectAssignment = ClassRegistry::init('ProjectAssignment');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->ProjectAssignment);

		parent::tearDown();
	}

}
