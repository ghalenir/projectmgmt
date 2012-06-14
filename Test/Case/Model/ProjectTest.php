<?php
App::uses('Project', 'Model');

/**
 * Project Test Case
 *
 */
class ProjectTestCase extends CakeTestCase {
/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array('app.project', 'app.client', 'app.user', 'app.group', 'app.project_assignment');

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Project = ClassRegistry::init('Project');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Project);

		parent::tearDown();
	}

}
