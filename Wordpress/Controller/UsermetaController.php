<?php
App::uses('WordpressAppController', 'Wordpress.Controller');
/**
 * Usermeta Controller
 *
 * @property Usermetum $Usermetum
 * @property PaginatorComponent $Paginator
 * @property SessionComponent $Session
 */
class UsermetaController extends WordpressAppController {

/**
 * Components
 *
 * @var array
 */
	public $components = array('Paginator', 'Session');

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->Usermetum->recursive = 0;
		$this->set('usermeta', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Usermetum->exists($id)) {
			throw new NotFoundException(__('Invalid usermetum'));
		}
		$options = array('conditions' => array('Usermetum.' . $this->Usermetum->primaryKey => $id));
		$this->set('usermetum', $this->Usermetum->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Usermetum->create();
			if ($this->Usermetum->save($this->request->data)) {
				$this->Session->setFlash(__('The usermetum has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The usermetum could not be saved. Please, try again.'));
			}
		}
		$users = $this->Usermetum->User->find('list');
		$this->set(compact('users'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->Usermetum->exists($id)) {
			throw new NotFoundException(__('Invalid usermetum'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Usermetum->save($this->request->data)) {
				$this->Session->setFlash(__('The usermetum has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The usermetum could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Usermetum.' . $this->Usermetum->primaryKey => $id));
			$this->request->data = $this->Usermetum->find('first', $options);
		}
		$users = $this->Usermetum->User->find('list');
		$this->set(compact('users'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->Usermetum->id = $id;
		if (!$this->Usermetum->exists()) {
			throw new NotFoundException(__('Invalid usermetum'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->Usermetum->delete()) {
			$this->Session->setFlash(__('The usermetum has been deleted.'));
		} else {
			$this->Session->setFlash(__('The usermetum could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
