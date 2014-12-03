<?php

class MoviesController extends AppController {

	public $helpers = array('Html', 'Form', 'Session');
	public $components = array('Session');

	public function index(){
		// set is the main way to send data to the view
		$this->set('movies', $this->Movie->find('all'));
	}

	public function add(){
		if ($this->request->is('post')) {
			$this->Movie->create();
			if ($this->Movie->save($this->request->data)) {
				$this->Session->setFlash(_('Your movie has been saved'));
				return $this->redirect(array('action' => 'index'));
			}
			$this->Session->SetFlash(_('Unable to save movie'));
		}
	}

	public function delete($id) {
        if ($this->request->is('get')) {
            throw new MethodNotAllowedException();
        }

        if ($this->Movie->delete($id)) {
            $this->Session->setFlash
            (
                __('The movie with id: %s has been deleted.', ($id))
            );
            return $this->redirect(array('action' => 'index'));
        }
    }
}
?>