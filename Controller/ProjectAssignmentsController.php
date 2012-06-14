<?php
App::uses('AppController', 'Controller');
/**
 * ProjectAssignments Controller
 *
 * @property ProjectAssignment $ProjectAssignment
 */
class ProjectAssignmentsController extends AppController {


/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->ProjectAssignment->recursive = 0;
      		$this->set('projectAssignments', $this->paginate());
	}

/**
 * view method
 *
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		$this->ProjectAssignment->id = $id;
		if (!$this->ProjectAssignment->exists()) {
			throw new NotFoundException(__('Invalid project assignment'));
		}
		$this->set('projectAssignment', $this->ProjectAssignment->read(null, $id));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->ProjectAssignment->create();
			if ($this->ProjectAssignment->save($this->request->data)) {
				$this->Session->setFlash(__('The project assignment has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The project assignment could not be saved. Please, try again.'));
			}
		}
		$projects = $this->ProjectAssignment->Project->find('list');
		$users = $this->ProjectAssignment->User->find('list');
		$this->set(compact('projects', 'users'));
	}

/**
 * edit method
 *
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		$this->ProjectAssignment->id = $id;
		if (!$this->ProjectAssignment->exists()) {
			throw new NotFoundException(__('Invalid project assignment'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->ProjectAssignment->save($this->request->data)) {
				$this->Session->setFlash(__('The project assignment has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The project assignment could not be saved. Please, try again.'));
			}
		} else {
			$this->request->data = $this->ProjectAssignment->read(null, $id);
		}
		$projects = $this->ProjectAssignment->Project->find('list');
		$users = $this->ProjectAssignment->User->find('list');
		$this->set(compact('projects', 'users'));
	}

/**
 * delete method
 *
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		if (!$this->request->is('post')) {
			throw new MethodNotAllowedException();
		}
		$this->ProjectAssignment->id = $id;
		if (!$this->ProjectAssignment->exists()) {
			throw new NotFoundException(__('Invalid project assignment'));
		}
		if ($this->ProjectAssignment->delete()) {
			$this->Session->setFlash(__('Project assignment deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Project assignment was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
}
