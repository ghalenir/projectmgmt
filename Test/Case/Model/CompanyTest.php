<?php
App::uses('Company', 'Model');

/**
 * Company Test Case
 *
 */
class CompanyTestCase extends CakeTestCase {
/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array('app.company', 'app.user', 'app.group', 'app.client', 'app.project_assignment', 'app.project');

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Company = ClassRegistry::init('Company');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Company);

		parent::tearDown();
	}

}
